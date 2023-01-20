		<header><!-- dentro de esta etiqueta va un logotipo y un menú-->
			<nav class="navbar navbar-expand-lg navbar-light">
			  <a class="navbar-brand" href="?controller=admin&action=index">
				<img src="img/logo/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
			    lohimWood S.A.S
			  </a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			  	<!-- <form class="form-inline my-2 my-lg-0">
			      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
			      <button class="btn btn-primary my-2 my-sm-0" type="submit">Buscar</button>
			    </form> -->
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item item-header  border-primary border-right">
			        <a class="nav-link" id="inicioH" href="?controller=admin&action=index"><p>Inicio </p><span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item item-header border-primary border-right">
			        <a class="nav-link" href="" id="cerrarsesionH">Salir</a>
			      </li>
			    </ul>
			  </div>
			</nav>
			
		</header>

<script type="text/javascript">
	
	$(document).ready(function(){

		$("#cerrarsesionH").click(function(e){
			var val = confirm("¿Seguro que desea salir?");
			if (val) {
		        	window.location =  '?controller=admin&action=cerrarSesion';
		    		e.preventDefault();
		    	}
			});
	});

</script>