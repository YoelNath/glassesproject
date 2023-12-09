{{-- @extends('layouts.') --}}
@section('content')
    <link rel="stylesheet" href="./Glassespedia/menglasses.css">

    <!-- Iklan -->
    <section class="men-fashions">
        <h2>Kategori : Kacamata Pria</h2>
        <br>
        <hr><br>

        <div class="title-text">
            <h2>Paling Dicari<br></h2>
        </div>

        <div class="most-popular">
            <div class="row"> <!-- 1 -->
                <a href="/oneitem"><img src="{{ URL('public\images\popular\palingcari1.jpeg') }}" alt=""></a>
                
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
                    <br><br>
                    <h3>Rp 115.000</h3>
                </div>
            </div>

            <div class="row"> <!-- 2 -->
                <img src="{{ URL('public\images\popular\palingcari2.jpg') }}" alt="">
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
                    <br><br>
                    <h3>Rp 145.000</h3>
                </div>
            </div>

            <div class="row"> <!-- 3 -->
                <img src="{{ URL('public\images\popular\palingcari3.jpeg') }}" alt="">
                
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
                    <br><br>
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
                <img src="./images" alt="">
                {{-- url image : https://down-id.img.susercontent.com/file/id-11134207-7r98r-lngu2srf013dbd --}}
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
                    <br><br>
                    <h3>Rp 80.000</h3>
                </div>
            </div>

            <div class="row"> <!-- 2 -->
                <img src="./images" alt="">
                {{-- url image : https://down-id.img.susercontent.com/file/id-11134207-7r98u-lnbig5cd86mh80 --}}
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
                    <br><br>
                    <h3>Rp 50.000</h3>
                </div>
            </div>

            <div class="row"> <!-- 3 -->
                <img src="./images" alt="">
                {{-- url image : https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMcIBzRIaHb1ngZSV_4SjwDBTby4k0FuwMcOyadfTmr0YjJWt5iHu6g8GNABQo8q9fmxg&usqp=CAU --}}
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
                    <br><br>
                    <h3>Rp 837.000</h3>
                </div>
            </div>

        </div>

    </section>

@stop
