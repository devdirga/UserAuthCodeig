<form class="form-signin" method="post" action="<?= base_url('AuthController') ?>">
    <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72"
        height="72">
    <h1 class="h3 mb-3 font-weight-normal">Sign-in</h1>
    <?= $this->session->flashdata('message'); ?>
    <div class="form-group">
        <input type="email" name="email" class="form-control form-control-sm" placeholder="Email address" required
            autofocus value="<?= set_value('email') ?>">
        <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
    </div>
    <div class="form-group">
        <input type="password" name="password" class="form-control form-control-sm" placeholder="Password" required>
        <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
    </div>
    <button class="btn btn-lg btn-primary btn-block btn-sm" type="submit">Sign in</button>
    <div class="text-center">
        <a class="small" href="<?= base_url('AuthController/registration') ?>">Registration</a>
    </div>
    <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
</form>