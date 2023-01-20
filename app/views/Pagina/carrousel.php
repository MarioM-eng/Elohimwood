<div id="margin-container">
					<!-- CARRUSEL -->
					<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img src="img/Elohim1.jpg" class="d-block w-100" alt="...">
							<div class="art-main">
								<article><!--agrega articulos. el contenido dentro de esta etiqueta es lo que se busca primero, toma importacia en los buscadores-->
									<div class="row">
										<div class="col col-sm col-md col-lg col-xl">
											<h2>Misión</h2> <hr>
											<p><!-- esta etiqueta se utiliza para parrafos, también para agregar contenidos-->
												<?php echo $_SESSION['datosE']['mision']; ?>
											</p><br>
											<a href="?controller=contacto&action=index&dato=mision" id="mision">Saber más</a>
										</div>
									</div>
								</article>
							</div>
							<div class="art-main1">
								<article>
									<a href="?controller=contacto&action=index&dato=mision" id="mision"><h4>Misión</h4></a>
								</article>
							</div>
					    </div>
					    <div class="carousel-item">
					      <img src="img/Elohim2.jpg" class="d-block w-100" alt="...">
							<div class="art-main">
								<article><!--agrega articulos. el contenido dentro de esta etiqueta es lo que se busca primero, toma importacia en los buscadores-->
									<div class="row">
										<div class="col col-sm col-md col-lg col-xl">
											<h2>Visión</h2> <hr>
											<p><!-- esta etiqueta se utiliza para parrafos, también para agregar contenidos-->
												<?php echo $_SESSION['datosE']['vision'] ?>
											</p><br>
											<a href="?controller=contacto&action=index&dato=vision">Saber más</a>
										</div>
									</div>
								</article>
							</div>
							<div class="art-main1">
								<article>
									<a href="?controller=contacto&action=index&dato=vision"><h4>Visión</h4></a>
								</article>
							</div>
					    </div>
					    <div class="carousel-item">
					      <img src="img/Elohim3.jpg" class="d-block w-100" alt="...">
							<div class="art-main">
								<article><!--agrega articulos. el contenido dentro de esta etiqueta es lo que se busca primero, toma importacia en los buscadores-->
									<div class="row">
										<div class="col col-sm col-md col-lg col-xl">
											<h2>Nosotros</h2> <hr>
											<p><!-- esta etiqueta se utiliza para parrafos, también para agregar contenidos-->
												<?php echo $_SESSION['datosE']['nosotros'] ?>
											</p><br>
											<a href="?controller=contacto&action=index&dato=nosotros">Saber más</a>
										</div>
									</div>
								</article>
							</div>
							<div class="art-main1">
								<article>
									<a href="?controller=contacto&action=index&dato=nosotros"><h4>Nosotros</h4></a>
								</article>
							</div>
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
</div>