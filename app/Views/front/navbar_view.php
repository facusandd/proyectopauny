<!--navegacion-->
<?php
  $session = session();
  $nombre = $session->get('nombre');
  $perfil = $session->get('perfil_id');
  ?>

<nav class="navbar navbar-expand-lg bg-warning border-2 border-primary border-bottom">
  <div class="container-fluid">
    <a class="navbar-brand me- auto barra" href="<?php echo base_url('principal')?>">
    <!--logo -->
    <img src="<?php echo base_url('assets/img/tractoricon.png')?>" alt="marca"
    width="30" height="30" class="img_fluid"/>
    Tractores Pauny
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#MenuNavegacion" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- admin -->
    <?php if(session()->perfil_id == 1): ?>
      <div class="btn btn-secondary active btnUser btn-sm">
        <a> Admin <?php echo session('nombre'); ?></a>
      </div>
      <div class="collapse navbar-collapse" id="MenuNavegacion">
      <ul class="navbar-nav ms-3 mb-2 mb-lg-0 gap-5">

        <li class="nav-item">
          <a class="nav-link active ms-5" aria-current="page" href='catalogo'>Catalogo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text ms-5" aria-current="page" href='registro'>Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ms-5" aria-current="page" href='login'>Login</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active ms-5" aria-disabled="true" href='<?php echo base_url('/logout');?>' tabindex="-1">Cerrar Sesión</a>
        </li>
    <?php elseif(session()->perfil_id == 2): ?>
      <div class="btn btn-secondary active btnUser btn-sm">
        <a> Cliente <?php echo session('nombre'); ?></a>
      </div>
      <div class="collapse navbar-collapse" id="MenuNavegacion">
      <ul class="navbar-nav ms-3 mb-2 mb-lg-0 gap-5">
      
        <li class="nav-item">
          <a class="nav-link active text" aria-current="page" href='quienes_somos'>Quienes somos</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active ms-5" aria-current="page" href='catalogo'>Catalogo</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active ms-5" aria-disabled="true" href='<?php echo base_url('/logout');?>' tabindex="-1">Cerrar Sesión</a>
        </li>

    <?php else:?>    
    <div class="collapse navbar-collapse" id="MenuNavegacion">
      <ul class="navbar-nav ms-3 mb-2 mb-lg-0 gap-5">
        <li class="nav-item">
          <a class="nav-link active text" aria-current="page" href='quienes_somos'>Quienes somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text" aria-current="page" href='acerca_de'>Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ms-5" aria-current="page" href='catalogo'>Catalogo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text ms-5" aria-current="page" href='registro'>Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active ms-5" aria-current="page" href='login'>Login</a>
        </li>

        <!-- dropdown -->
        <li class="nav-item dropdown ms-3">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="quienes_somos">Quienes somos</a></li>
            <li><a class="dropdown-item" href="acerca_de">Acerca de</a></li>
          </ul>
        </li>
        <!-- buscador-->
        <div class="container-fluid">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="buscar..." aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
        </div>
        <?php endif;?>
        

      </ul>
    </div>
  </div>
</nav>