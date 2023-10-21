<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('tipos.index') }}" class="nav-link {{ Request::is('tipos*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Tipos</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('editorials.index') }}" class="nav-link {{ Request::is('editorials*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Editorials</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('autors.index') }}" class="nav-link {{ Request::is('autors*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Autors</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('libros.index') }}" class="nav-link {{ Request::is('libros*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Libros</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('multimedia.index') }}" class="nav-link {{ Request::is('multimedia*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Multimedia</p>
    </a>
</li>
