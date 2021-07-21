<div class="container">
    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="<?= base_url('assets/icon/logo.png') ?>">
                    </div>
                    <div class="col-lg-8">
                        <h2 class="text-center">Form Registrasi</h2>
                        <div class="shadow p-3 mb-5 bg-white rounded">
                            <form action="<?= base_url('Auth/registrasi') ?>" method="post">
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label font-weight-bold">Username</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Username Anda" value="<?= set_value('email') ?>">
                                        <small>* Username berupa Email</small>
                                    </div>
                                    <div class="col-sm-10 offset-sm-2">
                                        <span class="text-danger"><?php echo form_error('email'); ?></span>
                                    </div>
                                </div>
                                <div class=" form-group row mt-3">
                                    <label for="password" class="col-sm-2 col-form-label font-weight-bold">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password Anda">
                                    </div>
                                    <div class="col-sm-10 offset-sm-2">
                                        <span class="text-danger"><?php echo form_error('password'); ?></span>
                                    </div>
                                </div>
                                <div class="form-group row mb-n1">
                                    <label for="password" class="col-sm-2 col-form-label font-weight-bold">Konfirmasi Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="password2" id="password" placeholder="Masukkan Password Anda">
                                    </div>
                                    <div class="col-sm-10 offset-sm-2 mt-n4">
                                        <span class="text-danger"><?php echo form_error('password'); ?></span>
                                    </div>
                                </div>
                                <div class="col-sm-10 offset-sm-2 mt-n4">
                                    <p class="mt-1">
                                        <input type="checkbox" class="form-checkbox show_password" id="checkbox">
                                        Show Password
                                    </p>
                                </div>
                                <div class="form-group">
                                    <div class=" row justify-content-end mr-2 mt-5">
                                        <button type="submit" class="btn btn-primary">Registrasi</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-center mt-3">
                                        Sudah memiliki akun?
                                        <a href="<?= base_url('auth/login'); ?>" class="text-primary text-decoration-none">Masuk</a>
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