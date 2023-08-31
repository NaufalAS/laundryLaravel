<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body class="antialiased">
             <!-- navbar mulai -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <div class="navbar-brand me-8 me-lg-8 ">
        <img src="foto/oy.jpg" alt="" width="60px" padding-top="20px">
    </div>
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarCenteredExample"
        aria-controls="navbarCenteredExample"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div
        class="collapse navbar-collapse justify-content-center"
        id="navbarCenteredExample"
      >
        <!-- Left links -->
        <ul class="navbar-nav mb-20 mb-lg-0">
          {{-- <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="menu_user.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="shop.php">Shop</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="colaborasi.html">GO WASH</a>
          </li>
        </ul>
        <!-- Left links -->
      </div>

      {{-- <div class="d-flex align-items-center"> --}}
      <ul class=" nav-item me-4 me-lg-5 navbar-nav d-flex flex-row">
        @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}"class="btn btn-secondary btn-sm">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary btn-sm">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
      </ul>
    {{-- </div> --}}

      <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
  </nav>
      <!-- navbar selesai -->
      <!-- carosel mulai -->
      
          <!-- carosel mulai -->
          <header>
            <img src="foto/ok.jpg" alt="" srcset="">
        </header>
        <!-- content -->
      <section class="bg-light pt-4 pb-4">
        <div class="container">
            <div class="row text-center" data-aos="fade-up" data-aos-duration="1500">
                <h3>GO WASH</h3>
            </div>
            <div class="row pb-5 pt-5 align-items-center justify-content-center" data-aos="fade-up"
                data-aos-duration="1500">
                <div class="col text-center">
                    <p>
                      Bagi masyarakat Semarang yang sedang mencari jasa laundry yang prosesnya cepat, memberikan hasil yang memuaskan dan fast respon, GO WASH solusinya. Layanan laundry yang sudah berpengalaman puluhan tahun berkomitmen memberikan layanan laundry terbaik untuk setiap pelanggan.

                      GO WASH merupakan perusahaan laundry dengan pengalaman 20 tahun, memiliki 70 outlet di 19 kota di Indonesia. Salah satu kota yang menjadi tujuan kami memberikan layanan laundry terbaik adalah Semarang. Karena kami sangat paham bahwa masyarakat Semarang sangat  membutuhkan jasa laundry yang mampu memberikan kepuasan terhadap konsumen.
                      
                      Sebagai jasa laundry yang telah memiliki pengalaman 20 tahun, kami berkomitmen memberikan pelayanan, seperti: .</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light pt-5 pb-5">
        <div class="container">
            <div class="row text-center pt-5" data-aos="fade-down" data-aos-duration="1500">
                <h3> Higienis dan Bersih</h3>
            </div>
            <div class="row align-items-center justify-content-center pt-3 pb-5">
                <div class="col-md-6 text-center mt-5" data-aos="fade-right" data-aos-duration="1500">
                    <img src="foto/LAUNDRY A.jpg" width="40%" height="40%">
                </div>
                <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1500">
                    <p>Karena di kerjakan oleh orang-orang yang berpengalaman, maka pakaian Anda akan mendapatkan perlakukan baik sehingga bersih tanpa noda. Kami memastikan setiap helai kain bersih dan higienis dengan melakukan uji laboratorium terhadap hasil cucian kami secara berkala, di laboratorium yang sudah terdaftar di Kementrian Kesehatan RI.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light pt-7">
        <div class="container">
            <div class="row text-center pt-5" data-aos="fade-up" data-aos-duration="1500">
                <h3>Manfaat Laundy di GO WASH</h3>
            </div>
            <div class="row align-items-center justify-content-center pt-5 pb-2">
                <div class="col text-center" data-aos="fade-up" data-aos-duration="1500">
                    <p>GO WASH dapat menyajikan pelayanan yang kualitas tinggi dan hasil yang memuaskan saat digunakan
                        dan di Gowash juga menawarkan berbagai pelayanan seperti.</p>
                </div>
            </div>
            <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1500">
                <div class="col-md-3">
                    <div class="card shadow mt-5" style="border-radius: 30px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Kualitas</h5>
                            <hr>
                            <p class="card-text">Sebagai Salah satu laundry yang sangat memengtikan kepuasan konsumen.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow mt-5" style="border-radius: 30px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Informasi</h5>
                            <hr>
                            <p class="card-text">Sebagai toko laundry yang sudah berpengalaman, sudah pasti kami selalu memperhatikan kerja tim. Setiap proses pencucian dijalankan sesuai dengan prosedur sehingga menghasilkan cucian yang bersih tanpa noda.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-5">
                    <div class="card shadow mt-5" style="border-radius: 30px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Harga</h5>
                            <hr>
                            <p class="card-text">Harga Laundry kita sangat murah walaupun murah tapi kualitas tetap kita jaga.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- conten selesai -->
        <footer style="background-color: #32a4dc;">
          <div class="container">
              <div class="row">
                  <div class="col-12 col-md-3 mt-5">
                    <div class="center">
                    <img src="foto/oy.jpg" class="col-12 col-md-7 mb-2"  >
                    <section class="mb-3">
                      <!-- Facebook -->
                      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                        ><img src="foto/facebook.png" alt="">
                        <i class="fab fa-facebook-f"></i
                      ></a>
                
                      <!-- Twitter -->
                      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                        ><img src="foto/twiter.png" alt=""><i class="fab fa-twitter"></i
                      ></a>
                
                    <!-- Instagram -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                    ><img src="foto/ig1.png" alt=""><i class="fab fa-instagram"></i
                  ></a>
                
                      <!-- Linkedin -->
                      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                        ><img src="foto/tiktok.png" alt=""><i class="fab fa-linkedin-in"></i
                      ></a>
                    </section>
                  </div>
                    </div>
                  <div class="col-12 col-md-4 mt-5">
                      <h4 class="fw-semibold text-white">Kontak</h4>
                      <hr class="text-white" width="100">
                      <p class="mt-3 text-white">Alamat : Jl. Ahmad Yani Batam Kota. Kota Semarang. Prov Jawa Tengah. Indonesia
                      </p>
                      <p class="text-white">Phone : +62-894325262646</p>
                      <p class="text-white">Fax : +62-778-12457</p>
                      <p class="text-white">Email : Gowash@gmail.com</p>
                  </div>
                  <div class="col-12 col-md-4 mt-5">
                      <h4 class="fw-semibold text-white">Tautan Penting</h4>
                      <hr class="text-white" width="200">
                      <ul class="list-unstyled">
                          <li class="mt-3">
                              <a href="{{ route('login') }}" class="text-decoration-none text-white">Login</a>
                          </li>
                          <li class="mt-3">
                              <a href="{{ route('register') }}" class="text-decoration-none text-white">Register</a>
                          </li>
                          <li class="mt-3">
                            <a href="colaborasi.html" class="text-decoration-none text-white">Colaborasi</a>
                          </li>
                      </ul>
                  </div>
              </div>
              <hr class="text-white">
              <p class="text-center text-white pb-2">Copyright GO WASH ® 2022</p>
          </div>
      </footer>

    
    </body>
</html>
