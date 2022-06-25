<?php
$alumnies = json_decode(file_get_contents("data/alumni.json"));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Alumni | Fakultas Sains dan Informatika</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />

    <!-- FSI CSS -->
    <link rel="stylesheet" href="css/alumni.css" />

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
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="alumni.php">Alumni</a>
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

    <header class="position-relative hero-img">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="header-text text-center p-4">
                <h2 class="fs-1 text-light">Alumni</h2>
                <h2 class="fs-4 text-light">Fakultas Sains dan Informatika</h2>
                <div class="d-flex justify-content-center mb-5 mt-4">
                    <div class="bg-warning line"></div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section id="alumni" class="py-5">
            <div class="container">
                <h2 class="text-center judul mb-5">Testimoni Lulusan</h2>
                <div class="row justify-content-center my-4">
                    <?php foreach ($alumnies as $alumni) : ?>
                        <div class="col-md-4 d-flex justify-content-end mx-1 mb-2 position-relative">
                            <div class="position-absolute alumni-img">
                                <img src="img/alumni/<?= $alumni->gambar; ?>" alt="<?= $alumni->nama; ?>" class="img-fluid rounded-circle" width="75">
                            </div>
                            <div class="card alumni-card">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $alumni->nama; ?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?= $alumni->pekerjaan; ?></h6>
                                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a> -->
                                    <blockquote class="blockquote">
                                        <p><?= $alumni->pesan; ?></p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </section>
    </main>

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
</body>

</html>