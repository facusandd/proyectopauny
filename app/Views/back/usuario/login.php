  <body class="bg-warning-subtle">
  <div class="container-fluid ps-md-0">
  <div class="row g-0">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image">
      <img src="assets\img\evo180c.png">
    </div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Bienvenido!</h3>

              <?php if(session()->getFlashdata('msg')):?>
                <div class="alert alert-warning">
                  <?=session()->getFlashdata('msg')?>
                </div>
              <?php endif;?>

              <!-- Sign In Form -->
              <form method="post" action="<?php echo base_url("/enviarlogin")?>">
                <div class="form-floating mb-3">
                  <input name='email' type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Correo Electrónico</label>
                </div>
                <div class="form-floating mb-3">
                  <input name='pass' type="password" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Contraseña</label>
                </div>

                <div class="form-check mb-3">
                  <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                  <label class="form-check-label" for="rememberPasswordCheck">
                    Recordar contraseña
                  </label>
                </div>

                <div class="d-grid">
                  <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit"></button>
                  <div class="text-center">
                    <a class="small" href="<?php echo base_url('/registro');?>">¿Aún no se registró?</a>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>