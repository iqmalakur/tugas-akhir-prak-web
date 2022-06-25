<?php
$galleries = json_decode(file_get_contents("data/gallery.json"));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Fakultas Sains dan Informatika</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />

    <!-- FSI CSS -->
    <link rel="stylesheet" href="css/index.css" />

    <!-- Favicon -->
    <link rel="icon" href="img/logo/cropped-cropped-LOGO-FSI-180x180.png" sizes="180x180" />
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark position-absolute">
        <div class="container-md">
            <a class="navbar-brand" href="/">
                <img src="img/logo/FSI-Logo.png" alt="Logo FSI" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="alumni.php">Alumni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="position-relative">
        <div id="carousel-fsi" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" style="background-image: url(img/bg/unjani-1.jpg);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="header-text text-center p-4">
                            <h2 class="fs-1 text-light">Fakultas Sains dan Informatika</h2>
                            <h2 class="fs-2 text-light">Universitas Jenderal Achmad Yani</h2>
                            <h3 class="fs-5 text-warning">Smart Military University</h3>
                            <div class="d-flex justify-content-center mb-5 mt-4">
                                <div class="bg-warning line"></div>
                            </div>
                            <a href="#" class="btn btn-outline-warning text-light fs-5 px-4">Daftar Sekarang!</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url(img/bg/fsi-if.jpg);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="header-text text-center p-4">
                            <h2 class="fs-1 text-light">Informatika</h2>
                            <h2 class="fs-2 text-light">Universitas Jenderal Achmad Yani</h2>
                            <h3 class="fs-5 text-warning">Smart Military University</h3>
                            <div class="d-flex justify-content-center mb-5 mt-4">
                                <div class="bg-warning line"></div>
                            </div>
                            <a href="http://if.unjani.ac.id/" target="_blank" class="btn btn-outline-warning text-light fs-5 px-4">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url(img/bg/fsi-kimia.jpg);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="header-text text-center p-4">
                            <h2 class="fs-1 text-light">Kimia</h2>
                            <h2 class="fs-2 text-light">Universitas Jenderal Achmad Yani</h2>
                            <h3 class="fs-5 text-warning">Smart Military University</h3>
                            <div class="d-flex justify-content-center mb-5 mt-4">
                                <div class="bg-warning line"></div>
                            </div>
                            <a href="http://kimia.unjani.ac.id/" target="_blank" class="btn btn-outline-warning text-light fs-5 px-4">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url(img/bg/fsi-si.jpg);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="header-text text-center p-4">
                            <h2 class="fs-1 text-light">Sistem Informasi</h2>
                            <h2 class="fs-2 text-light">Universitas Jenderal Achmad Yani</h2>
                            <h3 class="fs-5 text-warning">Smart Military University</h3>
                            <div class="d-flex justify-content-center mb-5 mt-4">
                                <div class="bg-warning line"></div>
                            </div>
                            <a href="http://si.unjani.ac.id/" target="_blank" class="btn btn-outline-warning text-light fs-5 px-4">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-fsi" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel-fsi" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>

    <main>
        <section id="about" class="bg-light py-5">
            <div class="container">
                <h2 class="text-center judul mb-5">Tentang Kami</h2>
                <div class="row justify-content-center my-4">
                    <div class="col-md-10">
                        <p>Fakultas Sains dan Informatika (FSI) merupakan salah satu Fakultas tertua di Unjani yang mempunyai 4 Program Studi yaitu Program Studi Kimia memiliki Akreditasi B, Program Studi Informatika memiliki Akreditasi B, serta Program Studi baru yaitu Program Studi Sistem Informasi dan Program Studi Magister Kimia. Saat ini FSI memiliki 38 Staf akademik tetap yang terdiri dari Guru Besar (5 %), Doktor (24 %), dan Magister (71 %). Visi FSI tentunya menyesuaikan dengan Visi Unjani yaitu Menjadi universitas unggul, berjiwa kebangsaan dan berwawasan lingkungan.</p>
                        <div class="text-end mt-4">
                            <a href="about.html" class="btn btn-outline-primary">Baca Selengkapnya...</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="jurusan" class="py-5">
            <div class="container">
                <h2 class="text-center judul mb-5">Jurusan</h2>
                <div class="row justify-content-center my-4">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="img/logo/fsi-if.png" class="card-img-top my-3 mx-auto" alt="informatika">
                            <div class="card-body">
                                <h5 class="card-title text-center mb-3">Informatika</h5>
                                <p class="card-text">Informatika merupakan bidang ilmu yang mempelajari bagaimana menggunakan teknologi komputer secara optimal guna menangani masalah transformasi atau pengolahan data dengan proses logika. Di Jurusan ini kamu akan mempelajari berbagai prinsip terkait ilmu komputer mulai dari proses perancangan, pengembangan, pengujian, hingga evaluasi sistem operasi perangkat lunak.</p>
                                <div class="text-end">
                                    <a href="http://if.unjani.ac.id/" target="_blank" class="btn btn-outline-primary mt-2">Lihat selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="img/logo/cropped-cropped-LOGO-FSI-180x180.png" class="card-img-top my-3 mx-auto" alt="kimia">
                            <div class="card-body">
                                <h5 class="card-title text-center mb-3">Kimia</h5>
                                <p class="card-text">Jurusan Kimia merupakan cabang ilmu yang mempelajari komposisi, struktur, dan sifat zat atau materi dari skala atom hingga molekul dan transformasi yang terjadi kemudian mengubah sifat dari materi tersebut.</p>
                                <div class="text-end">
                                    <a href="http://kimia.unjani.ac.id/" target="_blank" class="btn btn-outline-primary mt-2">Lihat selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="img/logo/fsi-si.jpg" class="card-img-top my-3 mx-auto" alt="sistem informasi">
                            <div class="card-body">
                                <h5 class="card-title text-center mb-3">Sistem Informasi</h5>
                                <p class="card-text">Sistem Informasi adalah bidang keilmuan yang menggabungkan ilmu komputer dengan bisnis dan manajemen. Di prodi ini kamu akan belajar gimana mengidentifikasi kebutuhan dan proses bisnis perusahaan berdasarkan data-data yang dimiliki perusahan, kemudian merancang sistem yang sesuai dengan kebutuhan perusahaan.</p>
                                <div class="text-end">
                                    <a href="http://si.unjani.ac.id/" target="_blank" class="btn btn-outline-primary mt-2">Lihat selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="service" class="bg-light py-5">
            <div class="container">
                <h2 class="text-center judul mb-5">Layanan</h2>
                <div class="row justify-content-center my-4">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body service-card position-relative">
                                <div class="rounded-circle position-absolute bg-light service-circle"></div>
                                <span class="position-relative fs-1 logo"><i class="bi bi-headset"></i></span>

                                <h5 class="card-title mt-2">Costumer Service</h5>
                                <div class="bg-light rounded-pill service-line"></div>

                                <p class="card-text mt-1">Admin Kami siap melayani pertanyaan Anda terkait FSI via WhatsApp</p>
                                <div class="text-end">
                                    <a href="https://wa.me/6281818900600" target="_blank" class="btn btn-outline-success">Hubungi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body service-card position-relative">
                                <div class="rounded-circle position-absolute bg-light service-circle"></div>
                                <span class="position-relative fs-1 logo"><i class="bi bi-chat-left-quote"></i></span>

                                <h5 class="card-title mt-2">Testimoni Lulusan</h5>
                                <div class="bg-light rounded-pill service-line"></div>

                                <p class="card-text mt-1">Lihat apa yang dikatakan para Lulusan Fakultas Sains dan Informatika</p>
                                <div class="text-end">
                                    <a href="alumni.php" class="btn btn-outline-success">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="gallery" class="py-5">
            <div class="container">
                <h2 class="text-center judul mb-5">Gallery</h2>
                <div class="row justify-content-center my-4">
                    <?php foreach ($galleries as $gallery) : ?>
                        <div class="col-md-3 mx-1 mb-2 gallery-item position-relative overflow-hidden shadow p-0">
                            <img src="img/gallery/<?= $gallery->url; ?>" class="img-fluid" alt="<?= $gallery->title; ?>">
                            <div class="gallery-info text-light position-absolute p-3 d-flex flex-column justify-content-between">
                                <h4 class="fw-normal"><span class="bg-warning py-1 px-2"><?= $gallery->title; ?></span></h4>
                                <a href="<?= $gallery->url; ?>" class="align-self-center fs-2 text-light lightbox-trigger"><i class="bi bi-zoom-in"></i></a>
                                <p class="text-center fw-bold"><?= $gallery->desc; ?></p>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </section>
    </main>

    <div id="lightbox" class="position-fixed d-flex justify-content-center align-items-center">
        <img src="" alt="">
    </div>

    <div class="scroll-top fs-1 position-fixed btn btn-success d-flex justify-content-center align-items-center d-none"><i class="bi bi-arrow-up-short"></i></div>

    <footer class="text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mt-4">
                    <h3>Fakultas Sains dan Informatika</h3>
                    <div class="d-flex flex-column info mt-3">
                        <span>
                            <a href="https://goo.gl/maps/1eS22yMB4VTPATCm7" class="text-decoration-none text-light" target="_blank">
                                <i class="bi bi-house-door"></i> Jl. Terusan Jend. Sudirman, Cibeber
                            </a>
                        </span>
                        <span><i class="bi bi-telephone"></i> (022) 6650646</span>
                        <span>
                            <a href="https://wa.me/6281818900600" class="text-light text-decoration-none" target="_blank">
                                <i class="bi bi-whatsapp"></i> +62 818-1890-0600
                            </a>
                        </span>
                        <span>
                            <a href="mailto:fsi@unjani.ac.id" class="text-decoration-none text-light" target="_blank">
                                <i class="bi bi-envelope"></i> fsi@unjani.ac.id
                            </a>
                        </span>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <h4>Jurusan</h4>
                    <ul class="footer-links">
                        <li><a href="http://if.unjani.ac.id/" class="link-warning" target="_blank">Informatika</a></li>
                        <li><a href="http://si.unjani.ac.id/" class="link-warning" target="_blank">Sistem Informasi</a></li>
                        <li><a href="http://kimia.unjani.ac.id/" class="link-warning" target="_blank">Kimia</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mt-4">
                    <h4>Sosial Media</h4>
                    <div class="d-flex sosmed mt-3">
                        <a href="https://www.youtube.com/channel/UCZblz8lpRtv8681HMQFEFcQ" class="btn btn-danger me-2" target="_blank"><i class="bi bi-youtube"></i></a>
                        <a href="https://www.instagram.com/fsiunjani.id/" class="btn text-light me-2" style="background-color: #ff06b7" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.facebook.com/fsiunjani" class="btn btn-primary me-2" target="_blank"><i class="bi bi-facebook"></i></a>
                    </div>
                </div>
            </div>

            <hr class="mb-3 mt-5" />

            <div class="text-center">&copy; 2022 Fakultas Sains dan Informatika UNJANI</div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- FSI JS -->
    <script src="js/main.js"></script>
    <script src="js/index.js"></script>
</body>

</html>