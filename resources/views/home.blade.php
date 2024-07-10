<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @include('link')
</head>
<style>
    body {
        background-color: #2F2F2F;
        text-align: justify;
        color: white;
    }

    .nav-link {
        font-size: 18px;
        color: #ffffff;
        padding: 0px 10px 0px 10px;
        font-weight: 700;
        border-bottom: 2px solid transparent;
        margin: 0px 10px 0px 10px;
    }

    .nav-link:hover {
        color: #999999;
        border-bottom: 2px solid white;
    }

    @media(max-width:480px) {
        .nav-link {
            font-size: 18px;
            color: #ffffff;
            padding: 0px;
            font-weight: 700;
            border-bottom: 2px solid transparent;
            margin: 15px 0px 0px 0px;
        }

        .nav-link:hover {
            color: #999999;
            border-bottom: 2px solid white;
        }
    }
</style>

<body>
    <header>
        <nav class="navbar navbar-expand-lg my-3 mx-3 rounded-5 shadow fixed-top" style="background-color: #333333;">
            <div class="container-fluid px-3 py-2">
                <a class="navbar-brand fw-bold text-light fs-4" href="#">Portfolio.</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Resume</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section name="hero-section">
        <div class="container mt-4 pt-5 ">
            <div class="row vh-100 d-flex justify-content-center align-items-center">
                <div class="col-md-6 px-5 mt-3 text-light">
                    <h5>Hi Everyone, I'am</h5>
                    <h2 class="display-6 fw-bold">Ramadhan Rizki Saputra</h2>
                    <h3>Fullstack Web Developer</h3>
                    <span style="font-size: 13px; font-weight:600;">
                        Saya adalah alumni SMK Telkom Jakarta jurusan Rekayasa Perangkat Lunak (RPL) dengan hobi coding
                        dan membaca. Saya memiliki pengalaman sebagai Operations - Fullstack Developer di PT Angkasa
                        Pura Sarana Digital di Bandara Soekarno-Hatta, di mana saya mengembangkan website
                        perusahaan menggunakan Laravel dan Bootstrap. Selain itu, saya juga telah membuat website
                        dinamis menggunakan Laravel selama di sekolah, menunjukkan kemampuan saya dalam
                        mengimplementasikan fitur-fitur kompleks dan efisien. Keahlian saya dalam fullstack development
                        memungkinkan saya untuk menciptakan solusi perangkat lunak yang inovatif dan berkualitas tinggi.
                    </span>
                    <div class="d-flex justify-content-start my-3">
                        <a href=""><i class="fa-brands fa-instagram fa-xl text-white"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin fa-xl text-white mx-3"></i></a>
                        <a href=""><i class="fa-brands fa-github fa-xl text-white mx-1"></i></a>
                        <a href=""><i class="fa-brands fa-whatsapp fa-xl text-white mx-3"></i></a>
                    </div>
                </div>
                <div class="col-md-6 px-3 pb-5 text-light d-flex justify-content-center align-items-center">
                    <div
                        style="background-color:white; border-radius: 50%; overflow: hidden; box-shadow: 0 0 0 10px white;">
                        <img src="assets/Hero1.png" alt="" width="400"
                            style="position: relative; z-index: 1;">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="education-history">
        <div class="container my-3">
            <h2 class="text-light">Education History</h2>
            <hr size="7" color="white">
            <div class="row mt-4 pt-3">
                <div class="col-md-4">
                    <h4>SMK Telkom Shandy Putra Jakarta</h4>
                    <h6>2021 - 2024</h6>
                    <h6>Grade : 89,14</h6>
                    <h6></h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, inventore possimus officiis
                        sapiente
                        molestias laborum.</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
{{-- <div class="col-md-4">
                    <h3>Pengalaman</h3>
                    <br>
                    <h5>Angkasa Pura Sarana Digital</h5>
                    <h6>2021 - 2024</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, inventore possimus officiis
                        sapiente
                        molestias laborum.</p>
                        <br>
                        <br>
                    <h5>SMK Telkom Jakarta</h5>
                    <h6>2021 - 2024</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, inventore possimus officiis
                        sapiente
                        molestias laborum.</p>
                </div> --}}
