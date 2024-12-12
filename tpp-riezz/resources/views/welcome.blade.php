@extends('layouts.landing')

@section('title', 'RIEZZ')

@section('content')
    <!--Hero Section-->
    <div class="hero p-5" style="background-image: url('{{asset('img/hero.jpg')}}');">
        <div class="row text-center m-5">
            <h1 class="poppins-semibold" style="font-size: 62px;">RIEZZ</h1>
        </div>
        <div class="row m-5">
            <div class="col-7 m-5">
                <h2 class="mt-5 sansita-bold" style="font-size: 42px;">
                    "Ciptakan Kenangan Indah ketika makan dan ngemil dalam Setiap Gigitan Risoles Kami yang sehat dan juga bergizi!"
                </h2>
            </div>
        </div>
    </div>
    <!--End of Hero Section-->

    <!--Product Section-->
    <div class="container my-4">
        <div class="row mb-3S">
            <h2 class="text-center">PRODUK</h2>
            <p class="text-center">Kualitas terbaik untuk para costumer kami</p>
        </div>

        <div class="row m-5">
          <!-- First product -->
          <div class="col-md-3 mb-3">
            <div class="card h-100">
              <img src="img/smoked-beef.jpg" class="card-img-top" alt="Risoles smoke beef">
              <div class="card-body text-center">
                <h5 class="card-title">Risoles smoke beef</h5>
                <p class="card-text text-success">Rp. 8000</p>
              </div>
            </div>
          </div>

          <!-- Second product -->
          <div class="col-md-3 mb-3">
            <div class="card h-100">
              <img src="img/sosis-mayo.jpeg" class="card-img-top" alt="Risoles sosis mayo">
              <div class="card-body text-center">
                <h5 class="card-title">Risoles sosis mayo</h5>
                <p class="card-text text-success">Rp. 8000</p>
              </div>
            </div>
          </div>

          <!-- Third product -->
          <div class="col-md-3 mb-3">
            <div class="card h-100">
              <img src="img/bolu-marmer.jpg" class="card-img-top" alt="Bolu marmer">
              <div class="card-body text-center">
                <h5 class="card-title">Bolu marmer</h5>
                <p class="card-text text-success">Rp. 6000</p>
              </div>
            </div>
          </div>

          <!-- Fourth product -->
          <div class="col-md-3 mb-3">
            <div class="card h-100">
              <img src="img/puding-buah.jpg" class="card-img-top" alt="Puding buah">
              <div class="card-body text-center">
                <h5 class="card-title">Puding buah</h5>
                <p class="card-text text-success">Rp. 5000</p>
              </div>
            </div>
          </div>

          <div class="col-md-3 mb-3">
            <div class="card h-100">
              <img src="img/bolu-pandan.jpg" class="card-img-top" alt="Bolu Pandan">
              <div class="card-body text-center">
                <h5 class="card-title">Bolu Pandan</h5>
                <p class="card-text text-success">Rp. 3.500</p>
              </div>
            </div>
          </div>

          <div class="col-md-3 mb-3">
            <div class="card h-100">
              <img src="img/ketan-serundeng.jpg" class="card-img-top" alt="Nasi Ketan Serundeng">
              <div class="card-body text-center">
                <h5 class="card-title">Nasi Ketan Serundeng</h5>
                <p class="card-text text-success">Rp. 5000</p>
              </div>
            </div>
          </div>

          <div class="col-md-3 mb-3">
            <div class="card h-100">
              <img src="img/bakwan.jpg" class="card-img-top" alt="Bakwan">
              <div class="card-body text-center">
                <h5 class="card-title">Bakwan</h5>
                <p class="card-text text-success">Rp. 5000</p>
              </div>
            </div>
          </div>

          <div class="col-md-3 mb-3">
            <div class="card h-100">
              <img src="img/rogut-creamy.jpg" class="card-img-top" alt="Risoles Rogut Creamy">
              <div class="card-body text-center">
                <h5 class="card-title">Risoles Rogut Creamy</h5>
                <p class="card-text text-success">Rp. 6000</p>
              </div>
            </div>
          </div>

          <a href="{{ url('/produk')}}" class="text-end" style="text-decoration: none;">Selengkapnya... ></a>

        </div>

        <!-- WhatsApp Order Button -->
        <div class="text-center">
          <a href="https://wa.me/+6281241810952" class="btn btn-success btn-lg">
            <i class="fa-brands fa-whatsapp"></i> PESAN
          </a>
        </div>
    </div>
    <!--End of Product Section-->

    <!--Banner Section-->
    <section class="banner-section" id="banner">
        <div class="container p-5">
          <div class="row align-items-center">
            <div class="col-md-6">
              <h2>"Ciptakan Kenangan Indah Bersama Setiap Gigitan Risoles Kami!"</h2>
              <p class="banner-text mt-5">Dibuat dengan cinta dan dedikasi, risoles kami hadir untuk melengkapi setiap momen berharga Anda. Dengan tekstur yang renyah dan isian yang kaya rasa, kami memastikan setiap gigitan memberikan kepuasan maksimal. Temukan sensasi risoles yang berbeda dan biarkan kami menjadi teman terbaik di setiap perayaan dan kumpul keluarga.</p>
            </div>
            <div class="col-md-6 text-center">
              <img src="img/logo.png" alt="Rieez Logo" class="banner-logo">
            </div>
          </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container mt-3 mb-3">
            <div class="row text-center">
                <!-- Feature 1: Pengiriman Cepat -->
                <div class="col-md-4">
                    <i class="fas fa-shipping-fast feature-icon"></i>
                    <h4 class="mt-3">Pengiriman Cepat</h4>
                    <p>Pengiriman selalu tepat waktu</p>
                </div>
                <!-- Feature 2: Fast Respon -->
                <div class="col-md-4">
                    <i class="fas fa-headset feature-icon"></i>
                    <h4 class="mt-3">Fast Respon</h4>
                    <p>Admin siap sedia menerima pesan orderanmu</p>
                </div>
                <!-- Feature 3: Terpercaya -->
                <div class="col-md-4">
                    <i class="fas fa-check-circle feature-icon"></i>
                    <h4 class="mt-3">Terpercaya</h4>
                    <p>Garansi uang kembali apa bila produk kami gagal</p>
                </div>
            </div>
     </div>
    </section>
    <!--End of Banner Section-->

    <!--Popular Section-->
    <div class="container my-4">
        <div class="row mb-3">
            <h2 class="text-center">POPULER</h2>
            <p class="text-center">Produk paling banyak diorder oleh cutomer</p>
        </div>

        <div class="row m-5">
          <!-- First product -->
          <div class="col-md-3 mb-3">
            <div class="card h-100">
              <img src="img/rogut-creamy.jpg" class="card-img-top" alt="Risoles Rogut Creamy">
              <div class="card-body text-center">
                <h5 class="card-title">Risoles Rogut Creamy</h5>
                <p class="card-text text-success">Rp. 6000</p>
              </div>
            </div>
          </div>

          <!-- Second product -->
          <div class="col-md-3 mb-3">
            <div class="card h-100">
              <img src="img/sosis-mayo.jpeg" class="card-img-top" alt="Risoles sosis mayo">
              <div class="card-body text-center">
                <h5 class="card-title">Risoles sosis mayo</h5>
                <p class="card-text text-success">Rp. 8000</p>
              </div>
            </div>
          </div>

          <!-- Third product -->
          <div class="col-md-3 mb-3">
            <div class="card h-100">
              <img src="img/smoked-beef.jpg" class="card-img-top" alt="Risoles Smoked Beef">
              <div class="card-body text-center">
                <h5 class="card-title">Risoles Smoked Beef</h5>
                <p class="card-text text-success">Rp. 8000</p>
              </div>
            </div>
          </div>

          <!-- Fourth product -->
          <div class="col-md-3 mb-3">
            <div class="card h-100">
              <img src="img/rogut-sayur.jpeg" class="card-img-top" alt="Risoles Rogut Sayur">
              <div class="card-body text-center">
                <h5 class="card-title">Risoles Rogut Sayur</h5>
                <p class="card-text text-success">Rp. 9000</p>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!--End of Popular Section-->

    <!--Testimony Section-->
    <section class="testimoni-section">
        <div class="container">
          <h2 class="text-center mb-5">Testimoni dari para pelanggan kami</h2>
          <div class="row justify-content-center">
            <!-- Testimonial 1 -->
            <div class="col-md-4 mb-4">
              <div class="testimoni-card">
                <img src="img/avatar1.png" alt="Luisa" class="testimoni-avatar">
                <div class="rating mb-3">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                </div>
                <p>“Enak banget meleleh di lidah”</p>
                <h6>Luisa</h6>
              </div>
            </div>
            <!-- Testimonial 2 -->
            <div class="col-md-4 mb-4">
              <div class="testimoni-card">
                <img src="img/avatar2.png" alt="Edoardo" class="testimoni-avatar">
                <div class="rating mb-3">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p>“harga murah kualitas bintang”</p>
                <h6>Edoardo</h6>
              </div>
            </div>
            <!-- Testimonial 3 -->
            <div class="col-md-4 mb-4">
              <div class="testimoni-card">
                <img src="img/avatar3.png" alt="Mart" class="testimoni-avatar">
                <div class="rating mb-3">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                </div>
                <p>“Bahan fresh, murah, lezat”</p>
                <h6>Mart</h6>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!--End of Testimony Section-->


@endsection
