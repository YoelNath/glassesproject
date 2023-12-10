@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<link rel="stylesheet" href="./Glassespedia/categories.css">

<link rel="stylesheet" href="./resources/sass/new.css">
@include('./components/bsNav')
<section class="product-categories">

    <div class="products">

        @include('./components/categoryCard')
        <div class="row"> <!-- 2. Women Glasses -->
            <img src="./images" alt="">
            <div class="con-text">
                <h2>Kacamata Wanita</h2><br><br>
                <p>
                    Menyediakan berbagai jenis kacamata untuk berbagai keperluan khusus untuk pria.
                    <a href="#">Tampilkan lebih</a>
                </p>
            </div>
        </div>
    </div>

</section>
<footer>
@include('./components/footer')
</footer>
{{-- @stop  --}}
