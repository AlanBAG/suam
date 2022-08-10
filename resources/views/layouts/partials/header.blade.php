<div class="sidebar" data-color="orange">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo">
        <a href="#" class="simple-text logo-mini">
            CTA
        </a>

        <a href="#" class="simple-text logo-normal">
            SUAM
        </a>
    </div>

    <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            &nbsp;@if (Auth::user()->role == 'super' || Auth::user()->role == 'admin')
                <li class="active">
                    <a href="{{ route('home') }}">

                        <i class="now-ui-icons location_bookmark"></i>

                        <p>Inicio</p>
                    </a>
                </li>

                <li>
                    <a href="{{ route('listadoAlumnos') }}">

                        <i class="now-ui-icons business_badge"></i>

                        <p>Listado de Alumnos</p>
                    </a>
                </li>

                <li>
                    <a href="{{ route('listadoCursos', ['ciclo' => '2022A']) }}">

                        <i class="now-ui-icons location_map-big"></i>

                        <p>Cursos</p>
                    </a>
                </li>

                <li>
                    <a href="{{ route('createAlumno') }}">

                        <i class="now-ui-icons files_paper"></i>

                        <p>Capturar Alumno</p>
                    </a>
                </li>
            @endif
            <li>
                <a href="{{ route('logout') }}"onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                    style="font-size: 12px">
                    <i class="now-ui-icons users_single-02"></i>Cerrar sesión</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </li>
        </ul>
    </div>
</div>
