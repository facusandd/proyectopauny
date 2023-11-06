<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col-5">
           <?php if(session()->getFlashdata('msg')):?>
            <div class="alert alert-warning">
                <?= session()->getFlashdata('msg')?>
            </div> 
            <?php endif;?>
            <br><br>
            <?php if(session()->perfil_id == 1): ?>
                <h1>Bienvenido administrador!</h1>
            <?php elseif(session()->perfil_id == 2): ?>
                <h1>Bienvenido cliente!</h1>
            <?php endif;?>            
        </div>
    </div>
</div>