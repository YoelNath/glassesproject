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
                <a href="/oneitem"><img src="./images" alt=""></a>
                {{-- url image : data:image/jpeg;base64,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 --}}
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
                <img src="./images" alt="">
                {{-- url image : https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8kgdBjvfwdjLB0jxZOEef8LGAExG3BpHvBQ&usqp=CAU> --}}
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
                <img src="./images" alt="">
                {{-- url image : https://down-id.img.susercontent.com/file/id-11134207-7r98o-lo51oq0khze97a --}}
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
