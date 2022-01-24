<?php $attributes = ['class' => 'form-signin box-shadow', 'role' => 'form', 'id' => 'login']; ?>

<?=form_open('login', $attributes)?>

    <div class="logo">
    <?php if ($core_settings->login_logo == '') {
        echo "<img src=\"".base_url()."assets/blueline/img/logo-crm.gif\" ";
    } else {
        echo "<img src=\"".base_url()."assets/blueline/img/logo-crm.gif\" ";
    }?> alt="Sistema Administrativo DTSys">
    </div>

    <?php if ($error == 'true') {
        $message = explode(':', $message)?>
        <div id="error"><?=$message[1]?></div>
        <?php
    } ?>

    <div class="form-group">
        <label for="username">Nombre de Usuario</label>
        <input type="username" class="form-control" id="username" name="username" placeholder="Introduzca su nombre de Usuario" />
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Introduzca su contraseña" />
    </div>

    <?php if ($this->config->item('recaptcha_web_key') != '') { ?>
    <div class="g-recaptcha" data-sitekey="<?=$this->config->item('recaptcha_web_key'); ?>" data-bind="recaptcha-submit" data-callback="submitForm"></div>
    <?php
    } ?>

    <input type="submit" id="recaptcha-submit" value="Iniciar sesión" class="btn btn-primary fadeoutOnClick" />
    <div class="forgotpassword"><a href="<?=site_url('forgotpass');?>">¿Olvidó su Password?</a></div>

    <div class="sub">
    <?php if ($core_settings->registration == 1) { ?>
    <div class="small"><small>Ud no tiene Cuenta creada</small></div><hr/>
    <a href="<?=site_url('register'); ?>" class="btn btn-success">Crear una cuenta</a>
    <?php
    } ?>
    </div>

    <?php if ($this->config->item('recaptcha_web_key') != '') { ?>
        <script>
        function submitForm() {
            document.getElementById("login").submit();
        }
        </script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    <?php
    } ?>

<?=form_close()?>
