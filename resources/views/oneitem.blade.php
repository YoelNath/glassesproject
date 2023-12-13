@include('components.bsNav')
<link rel="stylesheet" href="./Glassespedia/oneitem.css">
<aside>
    <div class="main-image">
        <img src="./images/popular/palingcari1.jpeg" alt="">
    </div>

    <div class="side-image">
        <img src="./images/popular/palingcari1.jpeg" alt="">
        <img src="./images/popular/palingcari1.jpeg" alt="">
    </div>

    <div class="socials">
        <p>Bagikan :
        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
        <a href="whatsapp://send?text=This is WhatsApp sharing example using link" data-action="share/whatsapp/share"><i class="fab fa-whatsapp"></i></a>
        </p>
    </div>

    <div class="heart-icon">
        <h3>Favorit : </h3>
        <i class='bx bx-heart'></i>
        <p>3</p>
    </div>
</aside>

<main>
    <h1>Topi Medium Wanita</h1>
    <div class="rating">
        <i class="bx bx-star"></i>
        <i class="bx bx-star"></i>
        <i class="bx bx-star"></i>
        <i class="bx bx-star"></i>
    </div>
    <p>Diunggah oleh : <a href="#">@Bambang</a></p>
    <p>Diunggah pada : 27 Maret 2023</p>

    <h3>Kuantitas : <span>*tersisa 2 buah</span></h3>
    <div class="quantity">
        <span class="minus">-</span>
        <p>|</p>
        <span class="num">01</span>
        <p>|</p>
        <span class="plus">+</span>
    </div>

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

    <div class="add-cart">
        <a href="/login"><button class="add-cart">Tambah ke Keranjang</button></a>
    </div>

    <div class="buy-now">
        <a href="/login"><button class="buy-now">Beli Sekarang</button></a>
    </div>

</main>

<section class="spec-product">
    <br><hr><br>
    <h2>Spesifikasi Produk</h2>
    <p>Jumlah Stok &emsp;&emsp;&emsp;&ensp;&nbsp;&nbsp;&nbsp;: &emsp;2 buah</p>
    <p>Dikirim dari &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;: &emsp;Kota Jakarta Barat </p>
    <p>Terakhir digunakan &nbsp;&nbsp;&nbsp;: &emsp;21 Maret 2022</p>
</section>

<section class="desc-product">
    <br><hr><br>
    <h2>Deskripsi Produk</h2>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur eos rerum reiciendis nam ducimus deserunt, dicta molestias voluptas dolor corrupti repudiandae, dolores aspernatur delectus aliquid hic aperiam ipsum sequi, quod placeat. Ea consequatur alias voluptatem, vero deserunt libero aut repudiandae temporibus harum quod non unde nihil, culpa quos dignissimos distinctio nobis magni. Quis harum nobis sed totam? Recusandae voluptatum, saepe voluptates inventore quis omnis tempore libero odio, commodi voluptatem reiciendis nihil deserunt maiores dicta. Ipsam officia magni impedit voluptate corporis! Perspiciatis ipsa obcaecati temporibus provident eveniet eum exercitationem assumenda. Quis, quo! Veritatis quaerat culpa accusantium non, obcaecati dicta doloremque, laboriosam odio aliquam sit minima ea aut nesciunt? Dolor maxime, impedit dignissimos placeat nulla voluptas reprehenderit suscipit? Vel vero saepe dolorem?
    </p>
</section>

@include('components.footer')