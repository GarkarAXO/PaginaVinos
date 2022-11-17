<!---Enlace para agregar el header y links css con php--->
<?php require('./layout/header.php') ?>
<!--titulo de la pagina-->
<title>Inicio</title>
<!--Slider de productos nuevos-->
<div class="container m-0 p-0 pb-5 mw-100 bg-light">
<div class="row">
<div class="col-sm-6">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="assets/images/carousel/absolute.jpg" alt="First slide" width="100px">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/images/carousel/Buchanns.jpg" alt="Second slide" width="100px">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/images/carousel/jhonny walker.jpg" alt="Third slide" width="100px">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
    <div class="col-sm-6">
      <div class="m-1">
     <h4 class="text-center">Vinos</h4>
      <p class="text-center">El vino es una bebida hecha de uva, mediante la fermentación alcohólica de su mosto o zumo.​ La fermentación se produce por la acción metabólica de levaduras, que transforman los azúcares naturales del fruto en etanol y gas en forma de dióxido de carbono.</p>
      <a href="/blog/blog.html"><img src="/assets/images/banner/blog.png" alt="" width="100%"></a>
    </div>
   </div>
</div>
</div>
</div>

<!--carrusel de productos-->
<section class="product"> 
  <h4 class="product-category">PRODUCTOS DESTACADOS</h4>
  <button class="pre-btn"><i class="fa-solid fa-chevron-left"></i></button>
  <button class="nxt-btn"><i class="fa-solid fa-chevron-right"></i></button>
  <div class="product-container">
    <div class="product-card">
      <div class="productoini">
        <img class="bandera" src="/assets/images/paises/mexico.png" alt="Pais">
        <a href="/vinospage/Jardinsecreto.php"><img class="vino-bottle" src="/assets/images/productos vinos/jardin secreto/JardinSecreto.jpg" alt=""></a>
        <div class="informacion">
           <span class="precio">$504.00</span>
           <span class="costo-envio">Envio Gratis</span>
           <span class="product-title">Jardin Secreto 750ml</span>
           <div>
             <button class="btn-agregar" type="button">Agregar</button>
           </div>
        </div>
      </div>
    </div>

    <div class="product-card">
      <div class="productoini">
        <img class="bandera" src="assets/images/paises/ESPANA.png" alt="Pais">
        <a href="/vinospage/bornosverdejo.php"><img class="vino-bottle" src="assets/images/productos vinos/bornosVendejo/BornosVendejo.jpg" alt=""></a>
        <div class="informacion">
           <span class="precio">$328.00</span>
           <span class="costo-envio">Envio Gratis</span>
           <h2 class="product-title">Bornos Verdejo</h2>
           <div>
             <button class="btn-agregar" type="button">Agregar</button>
           </div>
        </div>
      </div>
    </div>

    <div class="product-card">
      <div class="productoini">
        <img class="bandera" src="assets/images/paises/mexico.png" alt="Pais">
        <a href="/vinospage/granrvacabsauv.php"><img class="vino-bottle" src="assets/images/productos vinos/GranRvaCabSauv/GranRvaCabSauv1.png" alt=""></a>
        <div class="informacion">
           <span class="precio">$952.80</span>
           <span class="costo-envio">Envio Gratis</span>
           <h2 class="product-title">Cabernet Sauvignon</h2>
           <div>
             <button class="btn-agregar" type="button">Agregar</button>
           </div>
        </div>
      </div>
    </div>

    <div class="product-card">
    <div class="productoini">
        <img class="bandera" src="assets/images/paises/ESPANA.png" alt="Pais">
        <a href="/vinospage/bornosverdejo.php"><img class="vino-bottle" src="assets/images/productos vinos/bornosVendejo/BornosVendejo.jpg" alt=""></a>
        <div class="informacion">
           <span class="precio">$328.00</span>
           <span class="costo-envio">Envio Gratis</span>
           <h2 class="product-title">Bornos Verdejo</h2>
           <div>
             <button class="btn-agregar" type="button">Agregar</button>
           </div>
        </div>
      </div>
    </div>

    <div class="product-card">
      <div class="productoini">
        <img class="bandera" src="assets/images/paises/mexico.png" alt="Pais">
        <a href="detallesproducto.php"><img class="vino-bottle" src="assets/images/productos vinos/jardin secreto/JardinSecreto.jpg" alt=""></a>
        <div class="informacion">
           <span class="precio">$504.00</span>
           <span class="costo-envio">Envio Gratis</span>
           <h2 class="product-title">Jardin Secreto 750ml</h2>
           <div>
             <button class="btn-agregar" type="button">Agregar</button>
           </div>
        </div>
      </div>
    </div>

    <div class="product-card">
      <div class="productoini">
        <img class="bandera" src="assets/images/paises/mexico.png" alt="Pais">
        <a href="detallesproducto.php"><img class="vino-bottle" src="assets/images/productos vinos/jardin secreto/JardinSecreto.jpg" alt=""></a>
        <div class="informacion">
           <span class="precio">$504.00</span>
           <span class="costo-envio">Envio Gratis</span>
           <h2 class="product-title">Jardin Secreto 750ml</h2>
           <div>
             <button class="btn-agregar" type="button">Agregar</button>
           </div>
        </div>
      </div>
    </div>

  </div>
</section>


<img src="/assets/images/banner/WineClass-op.png" alt="" width="100%">

<?php require('./layout/footer.php') ?>

