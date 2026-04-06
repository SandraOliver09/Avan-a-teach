<?php include "header.php"; ?>

<main class="container my-5 text-center flex-grow-1">
    <h1 "display-4"> Bem Vindos ao Site </h1>
    <p "lead"> Aprendendo bootstrap e PHP </p>

    <a href="#" class="btn btn-primary"> Ver Mais </a>
    
</main>

<!--  carrocel -->
  <section class=" container my-5">
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img//boder .jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img//cat.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img//catdog.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  
   </section>

<?php include "footer.php"; ?>



