@extends('layouts.landing')

@section('title', 'Produk | Riezz')

@section('content')
    <!--Hero Section-->
    <div class="hero p-5" style="background-image: url(img/banner-produk.png) !important; height: auto !important;">
        <div class="row text-center m-5">
            <h1 class="poppins-semibold" style="font-size: 62px;">PRODUK</h1>
            <h3 class="poppins-semibold">Kualitas terbaik untuk para customer kami</h3>
        </div>
    </div>
    <!--End of Hero Section-->

    <!--Product Section-->
    <div class="row p-5 mb-5" style="background-color: rgba(97, 97, 97, 0.35);">
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
    <!--End of Product Section-->

    <!--Location Section-->
    <div class="container location-section my-5">
        <div class="row justify-content-center">
            <div class="col-md-6 map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3163.5312352549493!2d107.60486831534448!3d-6.939484269881858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9c3e4f0bc9b%3A0x1d1d4e43b7e29371!2sJl.%20BKR%2C%20Bandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2C%20Indonesia!5e0!3m2!1sen!2sid!4v1634827581234!5m2!1sen!2sid"
                allowfullscreen="" loading="lazy"></iframe>
                <p>Jl. Benteur no.42</p>
            </div>
            <div class="col-md-6 text-start">
                <div class="location-title text-center">Lokasi Kami</div>
                <p>
                    Kami berbasis di bandung tepatnya di BKR Bandung tepatnya ada di Jl benteur no.42 apabila customer
                    pengen melihat langsung produk yang kami buat kami persilahkan untuk datang disana kita bisa sharing ilmu
                    dan pengalaman masing-masing perihal dunia kuliner apabila teman teman tertarik boleh bergabung ayo kirim pesan
                    untuk pemberitahuan ke admin yaaaa!!!
                </p>
                <!-- WhatsApp Order Button -->
                <div class="text-end">
                    <a href="https://wa.me/+6281241810952" class="btn btn-success btn-lg">
                    <i class="fa-brands fa-whatsapp"></i> PESAN
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--End of Loacation Section-->
@endsection
