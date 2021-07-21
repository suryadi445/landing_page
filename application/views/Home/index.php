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
                            <img src="<?= base_url('assets/icon/logo.png') ?>" id="icon">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="#">Lorem Ipsum</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="#">Dolor</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="#">Sit amet</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="#">Sed diam</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="#">Dolore</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="#">Magna</a>
                                </li>
                            </ul>
                            <span class="navbar-text text-light">
                                <span class="mr-2"><img src="<?= base_url('assets/icon/icon-search.png') ?>" id="navbar_search"></span>
                                <span id="navbar_user">
                                    <li class="dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="<?= base_url('assets/icon/icon-profile-green.png') ?>">
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="<?= base_url('auth/login') ?>">Login</a>
                                            <a class="dropdown-item" href="<?= base_url('auth/registrasi') ?>">Register</a>
                                        </div>
                                    </li>
                                </span>
                            </span>
                        </div>
                    </nav>
                    <div class="bg-transparent">
                        <img src="<?= base_url('assets/Images/salad-from-tomatoes-cucumber-red-onions-lettuce-leaves-healthy-summer-vitamin-menu-vegan-vegetable-food-vegetarian-dinner-table-top-view-flat-lay.jpg') ?>" class="img-fluid gambar_background">
                        <div class="row">
                            <span id="garis_vr"></span>
                            <div class="container ml-5 row_jt col-lg-5">
                                <div class="row header_jt">
                                    <h1 class="text-light">Lorem Ipsum Dolor
                                        Adipiscing Elit Sit Amet.</h1>
                                </div>
                                <div class=" row date_jt">
                                    <small class="text-light">15 June 2021 By Suryadi</small>
                                </div>
                                <button class="btn btn-outline-light read_more">Read More</button>
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
                            <img src="<?= base_url('assets/icon/logo.png') ?>" id="gambar_sidebar">
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
                    <h4>THE_LATEST</h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 kartu">
                <div class="col-lg-7">
                    <div class="card-deck">
                        <div class="col mb-4">
                            <div class="card">
                                <img src="<?= base_url('assets/images/asian-family-enjoy-cooking-salad-together-kitchen-room-home_74952-1272.jpeg') ?>" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Lorem Ipsum Dolor Sed Diam Nonumm</h5>
                                    <div class="garis_vr2"></div>
                                    <p class="card-text">Lorem ipsum dolor sit amet,
                                        adipiscing elit, sed diam nonummy</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card">
                                <img src="<?= base_url('assets/images/close-up-hand-farmer-garden-during-morning-time-food-background_1150-7184.jpeg') ?>" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Lorem Ipsum Dolor Sed Diam Nonumm</h5>
                                    <div class="garis_vr2"></div>
                                    <p class="card-text">Lorem ipsum dolor sit amet,
                                        adipiscing elit, sed diam nonummy</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card">
                                <img src="<?= base_url('assets/images/shoulder-shot-female-gardener-taking-shot-ripe-strawberry_1098-19393.jpeg') ?>" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Lorem Ipsum Dolor Sed Diam Nonumm</h5>
                                    <div class="garis_vr2"></div>
                                    <p class="card-text">Lorem ipsum dolor sit amet,
                                        adipiscing elit, sed diam nonummy</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card">
                                <img src="<?= base_url('assets/images/male-farmer-who-is-using-shovel-dig-soil-his-rice-fields_1150-17239.jpeg') ?>" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Lorem Ipsum Dolor Sed Diam Nonumm</h5>
                                    <div class="garis_vr2"></div>
                                    <p class="card-text">Lorem ipsum dolor sit amet,
                                        adipiscing elit, sed diam nonummy</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card">
                                <img src="<?= base_url('assets/images/hands-trees-growing-seedlings_1150-44312.jpeg') ?>" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Lorem Ipsum Dolor Sed Diam Nonumm</h5>
                                    <div class="garis_vr2"></div>
                                    <p class="card-text">Lorem ipsum dolor sit amet,
                                        adipiscing elit, sed diam nonummy</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card">
                                <img src="<?= base_url('assets/images/vertical-shot-sheep-grazing-green-fields-during-sunset-with-trees-background_181624-16006.jpeg') ?>" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Lorem Ipsum Dolor Sed Diam Nonumm</h5>
                                    <div class="garis_vr2"></div>
                                    <p class="card-text">Lorem ipsum dolor sit amet,
                                        adipiscing elit, sed diam nonummy</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="row pt-4 pl-4">
                        <div class="col-lg-12">
                            <p>Trending</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row ml-n4">
                                <div class="col-lg-7">
                                    <ol>
                                        <li><a href=""> Lorem ipsum dolor sit amet</a></li>
                                        <hr>
                                        <li><a href=""> Consectetuer adipiscing elit,sed diam nonummy nibh.</a></li>
                                        <hr>
                                        <li><a href=""> Adipiscing sed diam elit,sed diam nonummy nibh.</a></li>
                                        <hr>
                                        <li><a href=""> Sed diamadipiscing elit,sed diam nonummy nibh.</a></li>
                                        <hr>
                                        <li><a href=""> Nonummy adipiscing elit,sed diam nonummy nibh.</a></li>
                                        <hr>
                                        <li><a href=""> Elit consectetuer adipiscing elit,sed diam nonummy nibh.</a></li>
                                        <hr>
                                        <li><a href=""> Consectetuer adipiscing elit,sed diam nonummy nibh.</a></li>
                                        <hr>
                                        <li><a href=""> Adipiscing sed diam elit,sed diam nonummy nibh.</a></li>
                                        <hr>
                                        <li><a href=""> Nonummy adipiscing elit,sed diam nonummy nibh.</a></li>
                                        <hr>
                                        <li><a href=""> Consectetuer adipiscing elit,sed diam nonummy nibUt wisi enim ad minim veniam.</a></li>
                                        <hr>
                                    </ol>
                                </div>
                                <div class="col-lg-5"></div>
                            </div>
                        </div>
                    </div>
                    <div class="logo_mssg">
                        <img src="<?= base_url('assets/icon/icon-chat.png') ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="detail" class="d-none">
    <div class="row">
        <div class="col-lg-11 offset-lg-1">
            <div class="row">
                <div class="col-lg-12">
                    <img src="<?= base_url('assets/images/asian-family-enjoy-cooking-salad-together-kitchen-room-home_74952-1272.jpeg') ?>" class="image_details">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col">
                            <h1>Lorem ipsum dolor sit amet consectetur adipisicing.</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <p>20 June 2021</p>
                        </div>
                        <div class="col-lg-10">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed officiis suscipit eaque ratione distinctio quisquam ipsum maxime nulla, magni facilis eveniet. Ipsam architecto adipisci, dolor accusamus consequatur laudantium harum, sequi aliquam dolore et error quo cumque. Harum aspernatur, tempore rem tenetur animi inventore necessitatibus modi nulla ex voluptas quasi odit!</p>

                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, cum deleniti impedit, recusandae cupiditate minus dolore fugit soluta dolorum dolores beatae, est unde qui vero. Nostrum beatae commodi sequi ab.</p>

                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas nam reprehenderit excepturi doloribus facere! Cum dignissimos tempore praesentium molestias quasi, officia deleniti aut, ratione amet, id dolor ducimus fugit sequi eveniet nulla! Omnis nisi facere dolor sequi dolores nam, beatae sint odio inventore, adipisci reiciendis commodi a officia voluptates eum, consectetur itaque aliquam excepturi non magnam porro repellat voluptatibus! Earum.</p>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis rem nesciunt corrupti ipsum. Voluptatibus, dicta rerum aspernatur odit praesentium laudantium natus molestiae quisquam eaque. Minus facere impedit eveniet obcaecati. Saepe explicabo recusandae cumque? At rem soluta adipisci cumque inventore? Aliquid?</p>

                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic, vel! Eligendi libero nostrum totam corporis tempora exercitationem animi distinctio accusamus. Voluptate rerum porro maiores officiis doloribus aliquid similique molestiae illum facere molestias magnam neque reprehenderit ratione nihil, laudantium eligendi nisi perferendis, maxime voluptatibus sunt commodi adipisci deleniti sit. Repellat, suscipit sapiente aperiam sit repellendus dolorem dolor necessitatibus neque optio expedita quibusdam sint sequi voluptas, iste nam hic provident. Maiores cupiditate eius labore nesciunt rerum pariatur eaque id magnam quis voluptas?</p>

                            <p>By: Suryadi</p>

                            <hr>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <img src="<?= base_url('assets/icon/icon-comment.png') ?>" alt="">
                                            Comment
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row justify-content-between">
                                                <span>Share</span>
                                                <span>
                                                    <img src="<?= base_url('assets/icon/icon-fb-article.png') ?>">
                                                    <img src="<?= base_url('assets/icon/icon-twitter-article.png') ?>">
                                                    <img src="<?= base_url('assets/icon/icon-wa-article.png') ?>">
                                                    <img src="<?= base_url('assets/icon/icon-share-link-article.png') ?>">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <span class="font-weight-bold">1 Comment</span>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label for="exampleFormControlTextarea1">
                                                <img src="<?= base_url('assets/icon/icon-profile-comment.png') ?>" alt="">
                                            </label>
                                        </div>
                                        <div class="col-lg-10">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="row justify-content-end mt-3 mr-2">
                                        <button class="btn btn-success">Post</button>
                                    </div>
                                </div>
                            </form>
                            <div class="row mt-3">
                                <div class="col-lg-2">
                                    <label for="exampleFormControlTextarea1">
                                        <img src="<?= base_url('assets/icon/icon-profile-comment.png') ?>" alt="">
                                    </label>
                                </div>
                                <div class="col-lg-10">
                                    <h6 class="text-success">Username</h6>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem id quas animi exercitationem tempora numquam doloribus sunt dolores corporis minus ad ipsum natus magni, amet ipsam. Reprehenderit in iure quidem!</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5"></div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="row ml-1">
                <div class="col-lg-2"></div>
                <div class="col-lg-10">
                    <div class="row justify-content-start">
                        <div class="col-lg-6">
                            <h3 class="text-success">GO TO THE NEWS PAGE</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ml-2">
                <div class="col-lg-2"></div>
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-5 mr-n5">
                            <img src="<?= base_url('assets/images/shoulder-shot-female-gardener-taking-shot-ripe-strawberry_1098-19393.jpeg') ?>" class="image_detail2">
                            <div class="col-lg-7 ml-n3">
                                <h5 class="text-success">Lorem ipsum dolor sit amet consectetur.</h5>
                                <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, fuga harum.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 ml-n5">
                            <img src="<?= base_url('assets/images/hands-trees-growing-seedlings_1150-44312.jpeg') ?>" class="image_detail2">
                            <div class="col-lg-7 ml-n3">
                                <h5 class="text-success">Lorem ipsum dolor sit amet consectetur.</h5>
                                <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, fuga harum.</p>
                            </div>
                        </div>
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
                            <h6>Lorem ipsum dolor sit amet, consectetuer adipiscing.</h6>
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="input-group mb-3 rounded-pill">
                                        <input type="text" class="form-control rounded-pill" placeholder="Enter your email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <span type="submit" class="input-group-text" id="basic-addon2">Sign Up</span>
                                        </div>
                                    </div>
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
                    <a href=""><img src="<?= base_url('assets/icon/icon-fb-footer.png') ?>"></a>
                    <a href=""><img src="<?= base_url('assets/icon/icon-ig-footer.png') ?>"></a>
                    <a href=""><img src="<?= base_url('assets/icon/icon-twitter-footer.png') ?>"></a>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="container-fluid copy_right">
        <div class="row justify-content-center">
            <p>Copyright&copy; Lorem ipsum</p>
        </div>
    </div>
</footer>