<style>
  .navbar.fixed-top {
    background-color: transparent !important;
    transition: background-color 0.3s ease-in-out;
  }

  .navbar.fixed-top.scrolled {
    background-color: #6F7271 !important;
  }

  .navbar.fixed-top {
    font-family: monospace;
    font-size: 1.6rem;
    color: #000000;
  }

  .navbar-brand img {
    width: 150px;
    height: auto;
  }

  .navbar-collapse {
    justify-content: flex-end;
  }

  .navbar-nav {
    margin-left: auto;
  }

  .nav-link {
    padding: 0 10px;
    font-size: 1.2rem;
    color: #000000;
  }

  .logout-btn {
    font-size: 1.0rem;
    color: #ffffff;
    background-color: #9F2241;
    margin-right: 10px;
  }

  .usuarioestilo{
    font-size: 1.0rem;
    color: #ffffff;
    background-color: #235B4E;
    margin-right: 10px;
  }

</style>

<nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
  <div class="container-fluid">
    <div class="d-flex align-items-center">
      <p class="navbar-brand">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" style="width: 100px; height: auto;">
        </p>
      <div class="ml-auto">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/inicio">
            <button class="btn btn-primary tab-btn">Datos Productores</button>
          </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/misArchivos/tabla">
            <button class="btn btn-primary tab-btn">Compostas</button>
          </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/misArchivos/tabla">
            <button class="btn btn-primary tab-btn">Mecanización</button>
          </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/creditos_Explicacion">
            <button class="btn btn-primary tab-btn">Arboles Frutales</button>
          </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <a class="btn usuarioestilo" href="{{ route('registrarUsuario') }}"> <i class="icocod"> &#128315; </i> Agregar Usuario</a> 
      </ul>
      <form class="d-flex">
        <a href="{{ route('logout') }}" class="btn logout-btn"> <i class="icocod">&#127939;</i> Salir del sistema</a>
      </form>
    </div>
  </div>
</nav>
<br>

<script>
  // Agrega la clase 'scrolled' a la barra de navegación cuando se hace scroll
  window.addEventListener('scroll', function() {
    var navbar = document.querySelector('.navbar.fixed-top');
    if (window.scrollY > 0) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });
</script>
