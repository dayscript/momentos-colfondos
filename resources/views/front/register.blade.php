@extends('app')

@section('content')
    @include('general.menu')
    <form id="register" action="{{ url('registrar') }}" method="POST" data-abide novalidate>
        {{ csrf_field() }}
        <div class="row formulario" data-equalizer data-equalize-on="medium">
            <div class="medium-6 columns" data-equalizer-watch>
                <label>*Nombres</label>
                <input name="name" type="text" placeholder="" required/>
                <span class="form-error">
                  Completa este campo.
                </span>
                <br>
            </div>
            <div class="medium-6 columns" data-equalizer-watch>
                <label>*Apellidos</label>
                <input name="lastname" type="text" placeholder="" required/>
                <span class="form-error">
                  Completa este campo.
                </span>
                <br>
            </div>
            <div class="medium-6 columns" data-equalizer-watch>
                <label>*Documento de identificación</label>
                <input name="identity_card" type="text" placeholder="" required pattern="number"/>
                <span class="form-error">
                  El campo debe ser numérico.
                </span>
                <br>
            </div>
            <div class="medium-6 columns" data-equalizer-watch>
                <label>Celular</label>
                <input name="cellphone" type="text" placeholder="" pattern="number"/>
                <span class="form-error">
                  El campo debe ser numérico.
                </span>
                <br>
            </div>
            <div class="medium-6 columns" data-equalizer-watch>
                <label>Teléfono</label>
                <input name="phone" type="text" placeholder="" pattern="number"/>
                <span class="form-error">
                  El campo debe ser numérico.
                </span>
                <br>
            </div>
            <div class="medium-6 columns" data-equalizer-watch>
                <label>*Correo electrónico</label>
                <input name="email" type="email" placeholder="" required/>
                <span class="form-error">
                  El campo debe ser un correo válido.
                </span>
                <br>
            </div>
        </div>
        <div class="row text-center">
            <a href="{{ url('agendar') }}" class="large button">Atrás</a>
            <input type="submit" class="large button" value="Enviar" id="submit" />
        </div>
    </form>
    @include('general.reveal')
@endsection