<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title> Aula 11</title>

    <!-- Boostrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>

    <!-- Barra de Navegação -->
-
    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./img/logo_php.jpg" alt="Bootstrap" width="95" height="100">
                Bootstrap
            </a>
        </div>
    </nav>

    <!-- Cabeçario do site  -->

    <h1 class="text-primary display-1 text-center">Bootstrap!</h1>
    <div class=" container bg-primary text-center text white mt-5 p-5 "> 
        <h2> Site de Viagens</h2>
        <p> Conheça os Principais Destinos </p>
        <button class="btn  btn-success" > saiba Mais </button>

    <!-- Conteudo  Principal -->
    </div >
    <div class="container">
        <h2"text-center">Destinos Populares</h2>

    <!-- Cards -->
        <div class="row">
            <div class="col-md-4">
            <!-- Card 01 -->
                <div class="card">
                    <img src="./img/cachoeira.jpg" class="card-img-top" height="300">
                    <div class="card-body">
                        <strong class=" card-title"> viagem 1</strong>
                        <p class="  card-text"> Descrição da viagem</p>
                        <button class=" btn btn-primary"> Clique Aqui </button>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                 <!-- Card 02 -->
                <div class="card">
                    <img src="./img/cristo.jpg" class="card-img-top" height="300">
                    <div class="card-body">
                         <strong class=" card-title"> viagem 1</strong>
                        <p class="  card-text"> Descrição da viagem</p>
                        <button class=" btn btn-primary"> Clique Aqui </button>
                    </div>
                </div>

            </div>
            <!-- Card 03 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="./img/torre-eiffel.jpg" class="card-img-top" height="300">
                    <div class="card-body">
                          <strong class=" card-title"> viagem 1</strong>
                            <p class="  card-text"> Descrição da viagem</p>
                            <button class=" btn btn-primary"> Clique Aqui </button>
                    </div>

            </div>
        </div>
        <!-- Carrocell -->
        

        
     <!-- Rodapé -->
      <footer class="bg-info text-white text-center p-5 mt-5">
        <p> Direitos Reservados - Sandra Oliver</p>

      </footer>
    


    <!-- Boostrap javaScript -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>