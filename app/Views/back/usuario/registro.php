  <body class="bg-warning-subtle">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex">
          </div>
        <div class="card-body p-4 p-sm-5">
            
          <h5 class="card-title text-center mb-5 fw-light fs-5">Registrarse</h5>
            
            <?php $validation = \Config\Services::validation(); ?>
            <form method="post" action="<?php echo base_url('/enviar-form') ?>">
                  <?php if(!empty (session()->getFlashdata('fail'))):?>
                    <div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
                  <?php endif?>

                  
            <?php if(!empty (session()->getFlashdata('success'))):?>
                    <div class="alert alert-danger"><?=session()->getFlashdata('success');?></div>
                    <?php endif?> 
                  
                  <div class="form-floating mb-3">
                    <input name='usuario' type="text" class="form-control" id="floatingInputUsername" placeholder="myusername" required autofocus>
                    <label for="floatingInputUsername">Usuario</label>
                    
                    <?php if($validation->getError('usuario')) {?>
                      
                      <div class='alert alert-danger mt-2'>
                        <?= $error = $validation->getError('usuario'); ?>
                      </div> 
                    
                    <?php }?>

                  </div>

                  <div class="form-floating mb-3">
                    <input name="email" type="email" class="form-control" id="floatingInputEmail" placeholder="name@example.com">
                    <label for="floatingInputEmail">Correo Electrónico</label>
                  
                    <?php if($validation->getError('email')) {?>
                      
                      <div class='alert alert-danger mt-2'>
                        <?= $error = $validation->getError('email'); ?>
                      </div> 
                    
                    <?php }?>

                  </div>

                  <hr>

                  <div class="form-floating mb-3">
                    <input name="pass" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Contraseña</label>

                    <?php if($validation->getError('pass')) {?>
                      
                      <div class='alert alert-danger mt-2'>
                        <?= $error = $validation->getError('pass'); ?>
                      </div> 
                    
                    <?php }?>
  
                      
                  </div>


                  <div class="d-grid mb-2">
                    <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit" value="guardar">Registrarse</button>
                  </div>

                  <a class="d-block text-center mt-2 small" href="login">Tienes una cuenta? </a>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
  
