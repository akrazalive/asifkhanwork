<?php $attributes = ['class' => 'form-signin box-shadow', 'role' => 'form', 'id' => 'forgotpass']; ?>

<?=form_open('forgotpass', $attributes)?>

    <div class="logo">
    <?php if ($core_settings->login_logo == '') {
        echo "<img src=\"".base_url()."assets/blueline/img/logo-crm.gif\" ";
    } else {
        echo "<img src=\"".base_url()."assets/blueline/img/logo-crm.gif\" ";
    }?> alt="Sistema Administrativo DTSys">
    </div>

    <?php if ($this->session->flashdata('message') != null) {
        $exp = explode(':', $this->session->flashdata('message')); ?>
        <div class="forgotpass-success">
        <?=$exp[1]?>
        </div>
    <?php } else { ?>
        <div class="forgotpass-info">Para restablecer su contraseña, por favor introduzca el Correo Electrónico asociado a su cuenta de Usuario.</div>
        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Introduzca su dirección de correo asociada">
        </div>
        <input type="submit" class="btn btn-primary" value="Restablecer Password" />
    <?php } ?>

    <div class="forgotpassword"><a href="<?=site_url('login');?>">Aceeder al Sistema</a></div>

<?=form_close()?>
