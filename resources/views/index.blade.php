@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<link rel="stylesheet" href="./Glassespedia/menglasses.css">
<link rel="stylesheet" href="./Glassespedia/home.css">

@include('./components/bsNav')


  <div class="row-cols-1" >




    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./images/home/zeiss_mini-style-guide.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Trendy Glasses</h5>
            <p>"Glasses are not just a window to clearer vision; they are a frame for the world's beauty, a reflection of your unique style, and a reminder that sometimes, a different perspective is all we need to see the extraordinary in the ordinary."</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./images/home/zeiss_mini-style-guide.jpg"class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>Stylish Glasses</h5>
            <p>"Glasses are not just a lens to see the world; they are a frame to envision your unique perspective, a statement of style, and a reflection of the clarity you seek in every moment of life."</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./images/home/zeiss_mini-style-guide.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Chill Glasses</h5>
            <p>"Glasses not only frame the world we see, but they also reveal the beauty in every detail, turning vision into an art, and style into a statement."</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="card text-center">

        <div class="card-body">
      
          <h5 class="card-title">Trending Today</h5>
          <p class="card-text">Check out our latest product today</p>
          <a href="#" class="btn btn-primary">Chill Glasses</a>
        </div>
      
    </div>

    <!-- Iklan -->
    <section class="men-fashions" style="margin-top:10px">
        <div class="title-text">
            <h2>Paling Dicari<br></h2>
        </div>

        <div class="most-popular">
            <div class="row"> <!-- 1 -->
                <a href="/oneitem"><img src="./images/popular/palingcari1.jpeg" alt=""></a>
                
                <div class="product-text">
                    <h5>TERBAIK</h5>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="rating">
                    <i class="bx bx-star"></i>
                    <i class="bx bx-star"></i>
                    <i class="bx bx-star"></i>
                    <i class="bx bx-star"></i>
                </div>
                <div class="price">
                    <h4>OPPA OP10 FBL Hitam Glossy Minus - Lensa Normal</h4>
                    <h3>Rp 115.000</h3>
                </div>
            </div>

            <div class="row"> <!-- 2 -->
                <img src="./images/popular/palingcari2.jpg" alt="">
                <div class="product-text">
                    <h5>TERBAIK</h5>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="rating">
                    <i class="bx bx-star"></i>
                    <i class="bx bx-star"></i>
                    <i class="bx bx-star"></i>
                </div>
                <div class="price">
                    <h4>GREY JACK Glasses Minus - Lensa Normal</h4>
                    <h3>Rp 145.000</h3>
                </div>
            </div>

            <div class="row"> <!-- 3 -->
                <img src="./images/popular/palingcari3.jpg" alt="">
                
                <div class="product-text">
                    <h5>TERBAIK</h5>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="rating">
                    <i class="bx bx-star"></i>
                    <i class="bx bx-star"></i>
                    <i class="bx bx-star"></i>
                    <i class="bx bx-star"></i>
                    <i class="bx bx-star"></i>
                </div>
                <div class="price">
                    <h4>KACAMATA LENTUR (Anti Radiasi Photocromic Blueray Bluecromic) 2126 / bisa minus dan silinder</h4>
                    <h3>Rp 140.000</h3>
                </div>
            </div>
        </div>

        <hr><br><br>

        <div class="title-text">
            <h2>Terbaru</h2>
        </div>

        <div class="latest-product">

            <div class="row"> <!-- 1 -->
                <img src="./images/latest/terbaru1.jpg" alt="">
                <div class="product-text">
                    <h5>Baru</h5>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="rating">
                    <i class="bx bx-star"></i>
                    <i class="bx bx-star"></i>
                    <i class="bx bx-star"></i>
                    <i class="bx bx-star"></i>
                </div>
                <div class="price">
                    <h4>PL-H019 Kacamata Steampunk Hitam Bersepeda Cyberpunk Hip Hop Punk Gaya Retro Eropa Olahraga Wanita
                        Dan Pria</h4>
                    <h3>Rp 80.000</h3>
                </div>
            </div>

            <div class="row"> <!-- 2 -->
                <img src="./images/latest/terbaru2.jpg" alt="">
        
                <div class="product-text">
                    <h5>Baru</h5>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="rating">
                    <i class="bx bx-star"></i>
                    <i class="bx bx-star"></i>
                    <i class="bx bx-star"></i>
                    <i class="bx bx-star"></i>
                    <i class="bx bx-star"></i>
                </div>
                <div class="price">
                    <h4>Kacamata Hitam Fashion Pria Korean Style Anti Sinar UV, Kacamata Yang Cocok Untuk Mengemudi</h4>
                    <h3>Rp 50.000</h3>
                </div>
            </div>

            <div class="row"> <!-- 3 -->
                <img src="./images/latest/terbaru3.jpg" alt="">
                
                <div class="product-text">
                    <h5>Baru</h5>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="rating">
                    <i class="bx bx-star"></i>
                    <i class="bx bx-star"></i>
                    <i class="bx bx-star"></i>
                    <i class="bx bx-star"></i>
                    <i class="bx bx-star"></i>
                </div>
                <div class="price">
                    <h4>Mackenzie Kacamata Pria & Wanita Fashion Night Vision UV Protection Material PC ORIGINAL</h4>
                    <h3>Rp 837.000</h3>
                </div>
            </div>

        </div>


  {{-- </div>



  </div> --}}

@include('./components/footer')
{{-- @stop  --}}
