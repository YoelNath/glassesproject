<link rel="stylesheet" href="./Glassespedia/cart.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
@include('./components/bsNav')
<div class="cek-toko">
    <!-- 1. Checkbox -->
    <div class="sections">
        <input type="checkbox">
    </div>

    <!-- 2. Nama Toko -->
    <div class="sections">
        <a href="#"><i class='bx bx-store-alt'>&nbsp;Martin</i></a>
    </div>
</div>

<br><hr>

<div class="cek-barang">

    <!-- 1. Checkbox -->
    <div class="section">
        <input type="checkbox">
    </div>

    <!-- 2. Gambar Produk -->
    <div class="section">
        <img src="./images/popular/palingcari1.jpeg" alt="">
    </div>

    <!-- 3. Nama Produk -->
    <div class="section">
        <p>OPPA OP10 FBL Hitam Glossy Minus - Lensa Norma</p>
    </div>

    <!-- 4. Kuantitas -->
    <div class="section">
        <span class="minus">-</span>
        <p>|</p>
        <span class="num">01</span>
        <p>|</p>
        <span class="plus">+</span>

        <script>
            const plus = document.querySelector(".plus"),
             minus = document.querySelector(".minus"),
             num = document.querySelector(".num");

             let a = 1;

             plus.addEventListener("click", ()=>{
                if(a < 2){ /* karena produk hanya tersisa 2, maka dibikin limit 2 */
                    a++;
                    a = (a < 10) ? "0" + a : a;
                    num.innerText = a;
                }
             });

             minus.addEventListener("click", ()=>{
                if(a > 1){
                    a--;
                    a = (a < 10) ? "0" + a : a;
                    num.innerText = a;
                }
             });

        </script>
    </div>

    <!-- 5. Hapus -->
    <div class="section">
        <a href="Empty_Cart.html"><i class='bx bx-trash'>&nbsp;Hapus</i></a>
    </div>
</div>

<br>
<div class="bar">
    <hr>
</div>

<div class="cek-button">
    <a href="/checkout"><button class="buy-now">Periksa</button></a>
</div>

<div style="height:80vh"></div>
@include('./components/footer')