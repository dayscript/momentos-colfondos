@extends('app')

@section('content')
    @include('general.menu')
    <form action="{{ url('agendar') }}" method="POST">
        {{ csrf_field() }}
        <div class="row seleccion text-center">
            <div class="medium-4 columns">
                <div class="box">
                    Directivo
                </div>
                <div class="box2">
                    <select id="employees" name="employees">
                        <option value="0">Seleccione</option>
                        @foreach ($employees as $employee)
                            <option value="{{ $employee->id }}">{{ $employee->full_name }}</option>
                        @endforeach 
                    </select>
                </div>
            </div>
            <div class="medium-4 columns">
                <div class="box">
                    Actividades
                </div>
                <div class="box2">
                    <select id="activities" name="activities">
                        <option value="">Seleccione</option>
                    </select>
                </div>
            </div>
            <div class="medium-4 columns">
                <div class="box">
                    Día <img src="{{ asset('img/calendar.png') }}" alt="" class="icon">
                </div>
                <div class="box2">
                    <select id="date" name="date">
                        <option value="0">Seleccione</option>
                        <option value="2016-10-31">Lunes 31 de Octubre</option>
                        <option value="2016-11-01">Martes 1 de Noviembre</option>
                        <option value="2016-11-02">Miercoles 2 de Noviembre</option>
                        <option value="2016-11-03">Jueves 3 de Noviembre</option>
                        <option value="2016-11-04">Viernes 4 de Noviembre</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <a href="{{ url('empleados') }}" class="large button">Atras</a>
            <button type="submit" id="go-to-register" href="" class="large button disabled" disabled>Siguiente</a>
        </div>
    </form>
@endsection