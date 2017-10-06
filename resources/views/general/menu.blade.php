<nav class="row pasos text-center">
    <h2 class="seccion">¿Con quién quieres vivir este encuentro?</h2>
    <div class="medium-12 columns items">
        <a href="{{ url('empleados') }}" class="{{ url()->current() == url('empleados') ? 'active' : '' }}">1. Conoce los directivos</a>
        <a href="{{ url('agendar') }}" class="{{ url()->current() == url('agendar') ? 'active' : '' }}">2. Elige tu actividad</a>
        <a href="{{ url('registrar') }}" class="{{ url()->current() == url('registrar') ? 'active' : '' }}">3. Déjanos tus datos</a>
    </div>
</nav>