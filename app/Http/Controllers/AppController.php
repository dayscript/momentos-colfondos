<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Employee;
use App\Models\Schedule;
use App\Models\Activity;
use App\Models\Register;
use URL;
use Validator;
use Mail;

class AppController extends Controller
{

    public function index()
    {
        return view('front.index');
    }

    public function employees()
    {
    	$employees = Employee::all();
        return view('front.employees', [
            'employees' => $employees, 
        	'section_class' => 'yellow',
        ]);
    }

    public function schedule()
    {
    	$employees = Employee::all()->reject(function ($employee, $key) {
            return $employee->fullname == 'Alcides Vargas';
        });

        return view('front.schedule', [
            'employees' => $employees,
            'section_class' => 'yellow',
        ]);
    }


    public function schedule_save()
    {
        $data = request()->input();

        request()->session()->flash('employee', $data['employees']);
        request()->session()->flash('activity', $data['activities']);
        request()->session()->flash('date', $data['date']);

        return redirect('/registrar');
    }

    public function register()
    {
        if(!request()->session()->get('employee', FALSE) && !request()->session()->get('activity', FALSE) && !request()->session()->get('date', FALSE)){
            return redirect('/');
        }

        request()->session()->reflash();

        return view('front.register', [
            'section_class' => 'yellow',
        ]);
    }

    public function register_save()
    {
        if(!request()->session()->get('employee', FALSE) && !request()->session()->get('activity', FALSE) && !request()->session()->get('date', FALSE)){
            return redirect('/');
        }

        $validator = Validator::make(request()->all(), [
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'identity_card' => 'required|integer|unique:registers,identity_card',
            'cellphone' => 'required|integer',
            'email' => 'required|email|unique:registers,email',
        ]);

        if ($validator->fails()) {
            request()->session()->reflash();

            if (request()->ajax())
            {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Valida los siguientes errores:',
                ]);
            }

            return redirect('/register')
                        ->withErrors($validator)
                        ->withInput();
        }

        $register = new Register();

        $register->name = request()->input('name');
        $register->lastname = request()->input('lastname');
        $register->identity_card = request()->input('identity_card');
        $register->phone = request()->input('phone');
        $register->cellphone = request()->input('cellphone');
        $register->email = request()->input('email');

        $register->save();

        $schedule = new Schedule();

        $schedule->employee_id = request()->session()->get('employee');
        $schedule->activity_id = request()->session()->get('activity');
        $schedule->register_id = $register->id;
        $schedule->date = request()->session()->get('date');

        $schedule->save();

        $activity = Activity::find($schedule->activity_id);
        $employee = Employee::find($schedule->employee_id);

        Mail::send('general.mail', [
            'fullname' => $register->fullname,
            'employee' => $employee->fullname,
            'activity' => $activity->name,
            'date' => $schedule->date,
            'image_header' => asset('img/mail_header.jpg'),
            'image_footer' => asset('img/mail_footer.jpg'),
        ], function ($m) use ($register) {
            $m->from('noreply@colfondos.com', 'Colfondos');

            $m->to($register->email, $register->fullname)->bcc(['camilo.gomez@toro-love.com'])->subject('Gracias por participar');
        });
        
        if (request()->ajax())
        {
            return response()->json([
                'status' => 'ok',
            ]);
        }
    }
}
