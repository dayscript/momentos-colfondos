@extends('app')

@section('content')
    @include('general.menu')
    <div class="row text-center" data-equalizer data-equalize-on="medium">        
        @foreach ($employees as $employee)
            <div class="small-6 medium-2 columns end employee" data-equalizer-watch data-employee-id="{{ $employee->id }}">
                <a data-toggle="datos">
                    <img src="{{ asset('img/'.$employee->image) }}" alt="" class="funcionario">
                </a>
                <div class="nombre">{{ $employee->full_name }}</div>
                <div class="cargo">{{ $employee->position }}</div>
                <div class="descripcion hide">{{ $employee->description }}</div>
            </div>
        @endforeach  
    </div>
    <div class="row text-center">
        <a href="{{ url('agendar') }}" class="large button">Siguiente</a>
    </div>
    @include('general.reveal')
@endsection