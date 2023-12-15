<link rel="stylesheet" href="./Glassespedia/categories.css">
@include('./components/bsNav')
<div style="height:5vh"></div>
<section class="product-categories">

    <div class="products">
        @include('./components/categoryCard')

        <div class="row"> <!-- 2. Women Glasses -->
            <img src="./images/womenglasses.jpg" alt="">
            <div class="con-text">
                <h2>Kacamata Wanita</h2><br><br>
                <p>
                    Menyediakan berbagai jenis kacamata untuk berbagai keperluan khusus untuk pria.
                    <a href="#">Tampilkan lebih</a>
                </p>
            </div>
        </div>

        <div class="row"> <!-- 3. Goggles -->
            <img src="./images/googles.jpg" alt="">
            <div class="con-text">
                <h2>Goggles</h2><br><br><br>
                <p>
                    Menyediakan berbagai jenis kacamata ukuran besar untuk kegiatan khusus.
                    <a href="#">Tampilkan lebih</a>
                </p>
            </div>
        </div>

    </div>

</section>
<div style="height:3vh"></div>
@include('./components/footer')
