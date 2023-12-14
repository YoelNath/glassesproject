<link rel="stylesheet" href="./Glassespedia/oneitem.css">
@include('./components/bsNav')
<aside>
    <div class="main-image">
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
    <h4>OPPA OP10 FBL Hitam Glossy Minus - Lensa Normal</h4>
    <div class="rating">
        <i class="bx bx-star"></i>
        <i class="bx bx-star"></i>
        <i class="bx bx-star"></i>
        <i class="bx bx-star"></i>
    </div>
    <p>Diunggah oleh : <a href="#">@Martin</a></p>
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
        plus .addEventListener("click", ()=>{
            if ()
        })
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
        <a href="/index"><button class="add-cart">Tambah ke Keranjang</button></a>
    </div>

    <div class="buy-now">
        <a href="/cart"><button class="buy-now">Beli Sekarang</button></a>
    </div>

</main>

<section class="spec-product">
    <br><hr><br>
    <h2>Spesifikasi Produk</h2>
    <p>Jumlah Stok &emsp;&emsp;&emsp;&ensp;&nbsp;&nbsp;&nbsp;: &emsp;2 buah</p>
    <p>Dikirim dari &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;: &emsp;Kota Jakarta Barat </p>
</section>

<section class="desc-product">
    <br><hr><br>
    <h2>Deskripsi Produk</h2>
    <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam eum odit quos voluptatem maxime eligendi?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, minus qui, quo perspiciatis id maiores doloribus aliquid reiciendis pariatur magni voluptatem accusantium ipsum harum perferendis dolor necessitatibus ex culpa, nisi nostrum nobis. Numquam blanditiis dolore quos iusto, doloremque architecto! Est sit natus placeat illum numquam iure sapiente, itaque quod velit? Nisi quidem repudiandae vel architecto perspiciatis placeat ullam sapiente, quia debitis earum, laborum impedit eius, beatae iure quo! Consequuntur sed vero quo modi enim accusamus, expedita obcaecati sit ipsam dolore placeat optio amet molestiae ullam quidem fuga quia eveniet possimus ipsum nihil aliquam? Natus ullam aut quas, ratione laudantium at. Suscipit perferendis tempora consectetur incidunt ut labore optio repellat recusandae eius aperiam! Enim, corporis porro sunt aliquid quidem autem doloribus.
    </p>
</section>
@include('components.footer')