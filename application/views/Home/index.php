<section id="jumbotron_home">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <!-- navbar -->
                <div class="col-lg-11 offset-lg-1">
                    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarText">
                            <img src="<?= base_url('assets/icon/surya_resto.png') ?>" id="icon">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="#">Menu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="#">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="bg-transparent">
                        <img src="<?= base_url('assets/Images/salad-from-tomatoes-cucumber-red-onions-lettuce-leaves-healthy-summer-vitamin-menu-vegan-vegetable-food-vegetarian-dinner-table-top-view-flat-lay.jpg') ?>" class="img-fluid gambar_background">
                        <div class="row">
                            <span id="garis_vr"></span>
                            <div class="container ml-5 row_jt col-lg-5 text-capitalize">
                                <div class="row header_jt">
                                    <h1 class="text-light mt-2">Surya Resto</h1>
                                    <br>
                                    <h3 class="text-light">One places for many flavours</h3>
                                </div>
                                <div class=" row date_jt">
                                    <small class="text-light">15 June 2021 By Suryadi</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="main_home">
    <div class="row">
        <div class="col-lg-11 offset-lg-1">
            <div class="row">
                <div class="col-lg-12 the_latest">
                    <div class="garis_vr"></div>
                    <div class="bcg_menu_burger">
                        <!-- navbar -->
                        <div id="mySidenav" class="sidenav">
                            <img src="<?= base_url('assets/icon/surya_resto.png') ?>" id="gambar_sidebar">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <a href="#">News</a>
                            <a href="#">Recipe</a>
                            <a href="#">Find Us</a>
                            <a href="#">About Us</a>
                            <a href="#">Contact Us</a>
                            <div class="bahasa">
                                <select name="bahasa">
                                    <option value="English">English</option>
                                    <option value="Indonesia">Indonesian</option>
                                </select>
                            </div>
                        </div>
                        <span style="font-size:30px;cursor:pointer;color:white" onclick="openNav()">&#9776;</span>
                        <!-- akhir navbar -->
                    </div>
                    <h4>MENU REKOMENDASI</h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 kartu">
                <div class="col-lg-7">
                    <div class="card-deck">
                        <div class="col mb-4">
                            <div class="card">
                                <img src="<?= base_url('assets/images/martabak_manis.jpg') ?>" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Martabak Manis</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card">
                                <img src="<?= base_url('assets/images/nasi_goreng.jpg') ?>" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Nasi Goreng</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card">
                                <img src="<?= base_url('assets/images/sate_ayam.jpg') ?>" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Sate Ayam</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card">
                                <img src="<?= base_url('assets/images/soto_ayam.jpg') ?>" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Soto Ayam</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="row pt-4 pl-4">
                        <div class="col-lg-12">
                            <p class="font-weight-bold text-success">Daftar Menu</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row ml-n4">
                                <div class="col-lg-7">
                                    <ol>
                                        <li><a href="" data-toggle="modal" data-target="#modal_menu" class="link_menu" data-menu="bakso" data-gambar="bakso.jpg">Bakso</a></li>
                                        <hr>
                                        <li><a href="" data-toggle="modal" data-target="#modal_menu" class="link_menu" data-menu="mie ayam" data-gambar="mie_ayam.jpg">Mie_Ayam</a></li>
                                        <hr>
                                        <li><a href="" data-toggle="modal" data-target="#modal_menu" class="link_menu" data-menu="sate ayam" data-gambar="sate_ayam.jpg">Sate Ayam</a></li>
                                        <hr>
                                        <li><a href="" data-toggle="modal" data-target="#modal_menu" class="link_menu" data-menu="sate kambing" data-gambar="sate_kambing.jpg">Sate Kambing</a></li>
                                        <hr>
                                        <li><a href="" data-toggle="modal" data-target="#modal_menu" class="link_menu" data-menu="soto ayam" data-gambar="soto_ayam.jpg">Soto Ayam</a></li>
                                        <hr>
                                        <li><a href="" data-toggle="modal" data-target="#modal_menu" class="link_menu" data-menu="nasi goreng" data-gambar="nasi_goreng.jpg">Nasi Goreng</a></li>
                                        <hr>
                                        <li><a href="" data-toggle="modal" data-target="#modal_menu" class="link_menu" data-menu="mie kuah" data-gambar="mie_kuah.jpg">Mie Kuah</a></li>
                                        <hr>
                                        <li><a href="" data-toggle="modal" data-target="#modal_menu" class="link_menu" data-menu="mie gpreng" data-gambar="mie_goreng.jpg">Mie Goreng</a></li>
                                        <hr>
                                        <li><a href="" data-toggle="modal" data-target="#modal_menu" class="link_menu" data-menu="tongseng" data-gambar="tongseng_kambing.jpg">Tongseng</a></li>
                                        <hr>
                                    </ol>
                                </div>
                                <div class="col-lg-5"></div>
                            </div>
                        </div>
                    </div>
                    <div class="logo_mssg">
                        <a href="https://wa.me/6289678468651"><img src="<?= base_url('assets/icon/icon-chat.png') ?>"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container-fluid">
        <div class="row pt-5">
            <div class="col-lg-10 offset-lg-2">
                <div class="col-lg-12">
                    <div class="row text-light">
                        <div class="offset-lg-1 col-lg-2">
                            <dl>
                                <dt>
                                    <a href="" class="text-light text-decoration-none">News</a>
                                </dt>
                                <dt>
                                    <a href="" class="text-light text-decoration-none">E-Shop</a>
                                </dt>
                                <dt>
                                    <a href="" class="text-light text-decoration-none">About Us</a>
                                </dt>
                            </dl>
                        </div>
                        <div class="col-lg-2 text-left">
                            <dl>
                                <dt>
                                    <a href="" class="text-light text-decoration-none">Privacy Policy</a>
                                </dt>
                                <dt>
                                    <a href="" class="text-light text-decoration-none">Guideline</a>
                                </dt>
                                <dt>
                                    <a href="" class="text-light text-decoration-none">FAQ</a>
                                </dt>
                                <dt>
                                    <a href="" class="text-light text-decoration-none">Contact Us!</a>
                                </dt>
                            </dl>
                        </div>
                        <div class="col-lg-6">
                            <h4>THE LATEST FROM US</h4>
                            <h6>Dapatkan informasi terbaru dari Kami</h6>
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="input-group mb-3 rounded-pill">
                                        <input type="text" class="form-control rounded-pill" placeholder="Enter your email" aria-label="Recipient's username" aria-describedby="basic-addon2" name="input" id="input_email">
                                        <div class="input-group-append">
                                            <span type="button" class="input-group-text" id="basic-addon2">Sign Up</span>
                                            <!-- <button class="btn btn-success btn_loading d-none" type="button" disabled>
                                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                            </button> -->
                                        </div>
                                    </div>
                                    <div class="text-danger error mt-n3 font-weight-bold"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="text-light text-center mt-5">CONNECT WITH US</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row justify-content-center">
                    <a href="https://facebook.com/suryadi.hobe"><img src="<?= base_url('assets/icon/icon-fb-footer.png') ?>" target="_blank"></a>
                    <a href="https://www.instagram.com/suryadi_moksc/"><img src="<?= base_url('assets/icon/icon-ig-footer.png') ?>" target="_blank"></a>
                    <a href="https://www.twitter.com/"><img src="<?= base_url('assets/icon/icon-twitter-footer.png') ?>" target="_blank"></a>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="container-fluid copy_right">
        <div class="row justify-content-center">
            <p>Copyright&copy; Suryadi</p>
        </div>
    </div>
</footer>


<!-- Modal -->
<div class="modal fade" id="modal_menu" tabindex="-1" aria-labelledby="nama_modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-capitalize text-warning" id="nama_modal"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <img id="gambar_modal">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>