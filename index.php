<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/styles/main.css">
    <title>Hello, world!</title>
  </head>
  <body>
    
    <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light navbar-tp" data-aos="fade-down">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <a href="#" class="nav-link">Kelompok 6</a>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="d-flex justify-content-center collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">For You</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">Detail</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#team">Team</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section id="first">
    <div class="container-fluid row">
      <div class="left-content col-md-5">
        <p data-aos="fade-down">INTRODUCING</p>
        <h3 data-aos="fade-down">Switch</h3>
        <p data-aos="fade-down">Perjalanan Menyelami Kegelisahan di Keluarga yang Saling Tidak Memahami</p>
        <div class="d-flex">
            <a href="#details" data-aos="fade-down" class="btn btn-success explore">Explore</a>
            <button data-aos="fade-down" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal"">
              <img src="/assets/images/icon-play.png" class="icon-play" alt="">
              Watch Video
            </button>
        </div>
      </div>

      <!-- TODO: Rapihin bagian responsive -->
      <div class="right-content col-md-7 d-flex justify-content-center">
        <div class="container video d-flex justify-content-center" data-aos="zoom-in" data-aos-duration="1000">
          <div class="row">
            
            <!-- Kiri -->
            <div class="block first">
              <div class="top" data-aos="flip-left" data-aos-duration="1500">
                <div class="behind"></div>
                <div class="box"></div>
              </div>
              <div class="mid">
                <div class="dot-block"></div>
              </div>
              <div class="bottom"></div>
            </div>

            <!-- Kanan -->
            <div class="block second">
              <div class="top" data-aos="flip-right" data-aos-duration="2000"></div>
              <div class="mid" data-aos="flip-left" data-aos-duration="2000">
                <div></div>
              </div>
              <div class="bottom" data-aos="flip-right" data-aos-duration="2000"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- TODO: Kerjain bagian detail poin -->
    <div class="container details w-100 row" id="details">
      <div class="col-md-12 mb-4 items" data-aos="zoom-in">
        <div class="icons col-md-4"></div>
        <div class="col-md-8">
          <p class="title">Produced By Kelompok 5</p>
          <p class="content">Lorem dolor ipsum amet sit, <br> amet ipsum lorem dolor</p>
        </div>
      </div>
      <div class="col-md-12 row">
        <div class="col-md-3 mb-4 items" data-aos="zoom-in">
          <div class="icons col-md-4" id="release"></div>
          <div class="col-md-8">
            <p class="title">Release Date</p>
            <p class="content">4 Maret 2024</p>
          </div>
        </div>
        <div class="col-md-3 mb-4 items" data-aos="zoom-in">
          <div class="icons col-md-4" id="present"></div>
          <div class="col-md-8">
            <p class="title">Present By</p>
            <p class="content">Multimedia System</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="about">
    <div class="container-fluid">
      <div class="row preview">
        <div class="col-md-7">
          <div class="stack">
            <div class="card" data-aos="fade-up" data-aos-duration="1000"></div>
            <div class="card" data-aos="fade-up" data-aos-duration="2000"></div>
          </div>
        </div>
        <div class="col-md-5 col-sm-12 d-flex flex-column align-items-center justify-content-center about">
          <h3 class="d-flex align-items-center justify-content-center" data-aos="fade-left" data-aos-duration="1000">About Video</h3>

            <!-- <p data-aos="fade-up" data-aos-duration="1000">
              Sebuah cerita tentang makna sejati dari keluarga, film ini menggambarkan awal yang bahagia dari sebuah keluarga yang penuh cinta dan kebahagiaan. Namun, kehidupan mereka tiba-tiba berubah drastis ketika sebuah peristiwa tak terduga menghantam mereka. <br> <br>
              Keluarga yang dulu penuh tawa dan kebersamaan, kini terpuruk dalam kesedihan dan keputusasaan. Mereka harus berhadapan dengan cobaan yang menguji ikatan keluarga mereka. Pertanyaan pun muncul, apakah keluarga ini akan bertahan atau berantakan? <br> <br>
              Di tengah badai yang mengguncang, mereka harus mencari kekuatan dalam satu sama lain untuk melalui masa-masa sulit ini. Namun, apakah cinta dan persatuan mereka cukup kuat untuk mengatasi semua rintangan yang mengancam menghancurkan keluarga mereka? <br> <br>
              Dalam cerita yang penuh dengan emosi dan kejutan, film ini mengajarkan kita bahwa keluarga bukanlah selalu tentang kebahagiaan, tetapi juga tentang bagaimana mereka bersama-sama mengatasi setiap cobaan yang datang, memperkuat ikatan yang ada, dan menemukan arti sejati dari keluarga.
            </p> -->

            <li class="d-flex col-md-12 justify-content-between align-items-start" data-aos="fade-up" data-a="1000"> 
              <div class="d-flex justify-content-center align-items-center title">
                <div class="icon-check"></div>
                Frame rate
              </div>
              60 fps  
            </li>
            <li class="d-flex col-md-12 justify-content-between align-items-start" data-aos="fade-up"> 
              <div class="d-flex justify-content-center align-items-center title">
                <div class="icon-check"></div>
                Resolution
              </div>
              1280x545 (720p)  
            </li>
            <li class="d-flex col-md-12 justify-content-between align-items-start" data-aos="fade-up"> 
              <div class="d-flex justify-content-center align-items-center title">
                <div class="icon-check"></div>
                Duration
              </div>
              13:50
            </li>
            <li class="d-flex col-md-12 justify-content-between align-items-start" data-aos="fade-up"> 
              <div class="d-flex justify-content-center align-items-center title">
                <div class="icon-check"></div>
                Sound Type
              </div>
              Stereo 
            </li>
            <li class="d-flex col-md-12 justify-content-between align-items-start" data-aos="fade-up"> 
              <div class="d-flex justify-content-center align-items-center title">
                <div class="icon-check"></div>
                Animation
              </div>
              Ilustration  
            </li>
        </div>
      </div>
    </div>
  </section>

  <section id="team">
    <div class="container-fluid d-flex flex-column align-items-center justify-content-center">
      <h3>Meet Our Team</h3>
      <div class="col-md-12 cards-container">
        <div class="cards">
          <div class="img first"></div>
          <div class="content">
            <h5>Andrea Lauren Wijaya</h5>
            <p>2602189410</p>
            <ul>
              <li>
                <div class="icon-check"></div>
                Actor
              </li>
              <li>
                <div class="icon-check"></div>
                Cameraman
              </li>
            </ul>
          </div>
        </div>
        <div class="cards">
          <div class="img second"></div>
          <div class="content">
            <h5>Advenia Tricahya Wiyono</h5>
            <p>2602189373</p>
            <ul>
              <li>
                <div class="icon-check"></div>
                Actor
              </li>
              <li>
                <div class="icon-check"></div>
                Cameraman
              </li>
            </ul>
          </div>
        </div>
        <div class="cards">
          <div class="img third"></div>
          <div class="content">
            <h5>Ida Bagus Yogesvara V.C</h5>
            <p>2602189814</p>
            <ul>
              <li>
                <div class="icon-check"></div>
                Actor
              </li>
              <li>
                <div class="icon-check"></div>
                Cameraman
              </li>
            </ul>
          </div>
        </div>
        <div class="cards">
          <div class="img fourth"></div>
          <div class="content">
            <h5>Rodrick Felixson</h5>
            <p>2602189814</p>
            <ul>
              <li>
                <div class="icon-check"></div>
                Actor
              </li>
              <li>
                <div class="icon-check"></div>
                Editor
              </li>
              <li>
                <div class="icon-check"></div>
                Cameraman
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="https://www.youtube.com/embed/V3g6rMRJ5aA?si=rae7SkR9jNV7L1No" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
 

  

  <footer id="footer">
    <h4>&copy; 2021 Kelompok 6</h4>
    <p>PPTI 15</p>
  </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>`