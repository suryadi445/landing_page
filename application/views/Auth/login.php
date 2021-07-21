<div class="container">
    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="<?= base_url('assets/icon/logo.png') ?>">
                    </div>
                    <div class="col-lg-8">
                        <h2 class="text-center">Form Login</h2>
                        <div class="shadow p-3 mb-5 bg-white rounded">
                            <form action="<?= base_url('Auth/login') ?>" method="POST">
                                <!-- alert -->
                                <?php if ($this->session->flashdata()) { ?>
                                    <?php if ($this->session->flashdata('flash')) { ?>
                                        <div class="alert alert-success" role="alert">
                                            <?= $this->session->flashdata('flash') ?>
                                        </div>
                                    <?php } else { ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?= $this->session->flashdata('gagal') ?>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                                <!-- akhir alert -->
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label font-weight-bold">Username</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email" placeholder="Masukkan Username Anda">
                                        <small>* Username berupa Email</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-2 col-form-label font-weight-bold">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="password" placeholder="Masukkan Password Anda">
                                    </div>
                                </div>
                                <div class="col-sm-10 offset-sm-2 mb-n4">
                                    <p class="mt-1">
                                        <input type="checkbox" class="form-checkbox show_password" id="checkbox">
                                        Show Password
                                    </p>
                                </div>
                                <div class="form-group">
                                    <div class=" row justify-content-end mr-2 mt-5">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-center mt-3">
                                        Belum memiliki akun?
                                        <a href="<?= base_url('auth/registrasi'); ?>" class="text-primary text-decoration-none">Daftar</a>
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