		 
		<!-- Botón Wsp -->
		<a href="https://api.whatsapp.com/send?phone=<?php echo NUMERO_TEL ?>" data-action="share/whatsapp/share" target="_blank">

		    <i class="fa fa-whatsapp"></i>
		</a> 
		<!-- Fin Botón Wsp -->
		
		<!-- Botón Menú -->
		<script>
		function openNav() {
		  document.getElementById("myNav").style.width = "100%";
		  document.getElementById("menu").style.display = "none";

		}

		function closeNav() {
		  document.getElementById("myNav").style.width = "0%";
		  document.getElementById("menu").style.display = "block";
		}

		window.onscroll = function() {myFunction()};

		// Get the navbar
		var navbar = document.getElementById("btn-menu");

		// Get the offset position of the navbar
		var sticky = navbar.offsetTop;

		// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
		function myFunction() {
		  if (window.pageYOffset >= sticky) {
		    navbar.classList.remove("btnMenu");
		    navbar.classList.add("sticky");
		  } else {
		    navbar.classList.remove("sticky");
		    navbar.classList.add("btnMenu");
		  }
		}
		</script>
		<!-- Fin Botón Menú -->       
		
        <script src="<?php echo RUTA_JS ?>jquery.min.js"></script>
        <script src="<?php echo RUTA_JS ?>bootstrap.min.js"></script> 
    </body>
</html>