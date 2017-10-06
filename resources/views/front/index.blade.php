@extends('app')

@section('content')
    <div class="row intro text-center">

        <h1 class="title">¿Qué son momentos Colfondos?</h1>

        <p class="introduccion">
            En nuestra búsqueda por encontrar nuevas experiencias de servicio, innovamos para llevarte al siguiente nivel. 
            Entendemos que muchas veces quisieras ir un poco más allá y resolver tus dudas con alguien diferente; una 
            persona que te pueda ofrecer información exclusiva, pero no solo eso, también que pueda compartir contigo 
            un momento fuera del espacio corporativo (Un momento más cercano, cotidiano, fresco e incluso divertido).
        </p>
 
        <p class="introduccion">
            MOMENTOS Colfondos te permite compartir con alguno de nuestros directivos (el que tú escojas) para que puedan 
            conversar acerca de los temas que más te intrigan o de las dudas que quieras resolver, y que mejor que sean 
            nuestros mayores expertos quienes lo hagan contigo.
        </p>
 
        <p class="introduccion">
            ¿Qué tal un café con nuestro Presidente? ¿Una obra de teatro con alguno de nuestros Vicepresidentes? ¿O que 
            alguno de nuestros gerentes te recoja en casa? Pues en esta plataforma vas a poder elegir con quién quieres 
            tu cita y qué tipo de “momento” compartirás con ellos.
        </p>
 
        <p class="introduccion">
            Todo esto lo hacemos por ti, porque queremos que sepas y recuerdes que NOS IMPORTAS TÚ.
        </p>
        <a href="{{ url('empleados') }}" class="large button">Siguiente</a>
    </div>
@endsection