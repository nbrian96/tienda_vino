<?php
if ($hayProductos) {
?>
<!-- Productos -->
<script>
    var productoIndex = 1;
    var Ptimer = null;
    showProductos(productoIndex);

    function plusProducto(n) {
      clearTimeout(Ptimer);
      showProductos(productoIndex += n);
    }

    function showProductos(n) {
      clearTimeout(Ptimer);
      var i;
      var producto = document.getElementsByClassName("paginacion_productos");
      
      if (n==undefined){n = ++productoIndex}
      if (n > producto.length) {productoIndex = 1}
      if (n < 1) {productoIndex = producto.length}
      
      for (i = 0; i < producto.length; i++) {
          producto[i].style.display = "none";
      }
      
      producto[productoIndex-1].style.display = "block";
      //Ptimer = setTimeout(showProductos, 10000);
    } 
</script>

<script>
    var productoCelularIndex = 1;
    var PCtimer = null;
    showProductosCelular(productoCelularIndex);

    function plusProductoCelular(n) {
      clearTimeout(PCtimer);
      showProductosCelular(productoCelularIndex += n);
    }

    function showProductosCelular(n) {
      clearTimeout(PCtimer);
      var i;
      var productoCelular = document.getElementsByClassName("paginacion_productos-celular");
      
      if (n==undefined){n = ++productoCelularIndex}
      if (n > productoCelular.length) {productoCelularIndex = 1}
      if (n < 1) {productoCelularIndex = productoCelular.length}
      
      for (i = 0; i < productoCelular.length; i++) {
          productoCelular[i].style.display = "none";
      }
      
      productoCelular[productoCelularIndex-1].style.display = "block";
    } 
</script>
<!-- Fin Productos -->
<?php
}
?>

<!-- Banner -->
<script>
    var slideIndex = 1;
    var timer = null;
    showSlides(slideIndex);

    function plusSlides(n) {
      clearTimeout(timer);
      showSlides(slideIndex += n);
    }

    function showSlides(n) {
      clearTimeout(timer);
      var i;
      var slides = document.getElementsByClassName("mySlides");
      
      if (n==undefined){n = ++slideIndex}
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      
      slides[slideIndex-1].style.display = "block";
      timer = setTimeout(showSlides, 10000);
    } 
</script>
<!-- Fin Banner -->

<!-- BLOG -->
<script>
var paginacion = document.getElementsByClassName("paginacion_blog");
var index_paginacion = document.getElementsByClassName("paginacion_index");
for (i = 0; i < paginacion.length; i++) {
    paginacion[i].style.display = "none";
    index_paginacion[i].style.backgroundColor = "white";
    index_paginacion[i].style.color = "black";
}
paginacion[0].style.display = "block";
index_paginacion[0].style.backgroundColor = "#9f2428";
index_paginacion[0].style.color = "white";

function cambiarPagina(n) {
    var paginacion = document.getElementsByClassName("paginacion_blog");
    var index_paginacion = document.getElementsByClassName("paginacion_index");
    for (i = 0; i < paginacion.length; i++) {
        paginacion[i].style.display = "none";
        index_paginacion[i].style.backgroundColor = "white";
        index_paginacion[i].style.color = "black";
    }
    paginacion[n-1].style.display = "block";
    index_paginacion[n-1].style.backgroundColor = "#9f2428";
    index_paginacion[n-1].style.color = "white"
}
</script>
<!-- FIN DE BLOG -->
