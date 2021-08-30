<!-- Ver Imagenes Productos -->
<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }

  slides[slideIndex-1].style.display = "block";
}
</script>
<!-- Fin Ver Imagenes Productos -->

<!-- Leer Mas -->
<script>
function openLeerMas(n) {
  var aux = document.getElementsByClassName("text_incompleto");
  aux[n-1].style.display = "none";

  var aux = document.getElementsByClassName("text_completo");
  aux[n-1].style.display = "block";

  var aux = document.getElementsByClassName("LeerMas");
  aux[n-1].style.display = "none";

  var aux = document.getElementsByClassName("LeerMenos");
  aux[n-1].style.display = "block";

}

function closeLeerMas(n) {
  var aux = document.getElementsByClassName("text_incompleto");
  aux[n-1].style.display = "block";

  var aux = document.getElementsByClassName("text_completo");
  aux[n-1].style.display = "none";

  var aux = document.getElementsByClassName("LeerMas");
  aux[n-1].style.display = "block";

  var aux = document.getElementsByClassName("LeerMenos");
  aux[n-1].style.display = "none";
}
</script>
<!-- Fin Leer Mas -->
