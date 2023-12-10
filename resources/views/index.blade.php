@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<link rel="stylesheet" href="./Glassespedia/categories.css">

<link rel="stylesheet" href="./resources/sass/new.css">
@include('./components/bsNav')

<div class="card text-bg-dark">
    <img src="public\images\latest\terbaru1.jpg"  class="card-img" alt="...">
    <div class="card-img-overlay">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small>Last updated 3 mins ago</small></p>
    </div>
  </div>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ URL('public\images\latest\terbaru1.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="g" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
<footer>
@include('./components/footer')
</footer>
{{-- @stop  --}}
