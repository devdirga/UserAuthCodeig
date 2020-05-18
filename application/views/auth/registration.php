<form class="form-signin" method="post" action="<?php echo base_url('AuthController/registration') ?>">
    <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72"
        height="72">
    <h1 class="h3 mb-3 font-weight-normal">Sign Up</h1>
    <div class="form-group">
        <input type="text" name="name" class="form-control form-control-sm" placeholder="Fullname" required
            value="<?= set_value('name') ?>">
        <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
    </div>
    <div class="form-group">
        <input type="email" name="email" class="form-control form-control-sm" placeholder="Email" required
            value="<?= set_value('email') ?>">
        <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
    </div>
    <div class="form-group">
        <input type="password" name="password1" class="form-control form-control-sm" placeholder="Password" required
            autofocus>
        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
    </div>
    <div class="form-group">
        <input type="password" name="password2" class="form-control form-control-sm" placeholder="Repeat Password"
            required autofocus>
        <?= form_error('password2', '<small class="text-danger pl-3">', '</small>') ?>
    </div>
    <button class="btn btn-lg btn-primary btn-block btn-sm" type="submit">Register</button>
    <div class="text-center">
        <a class="small" href="">Forgot Password?</a>
    </div>
    <div class="text-center">
        <a class="small" href="<?= base_url('AuthController') ?>">Already have an account? Login!</a>
    </div>
    <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
</form>