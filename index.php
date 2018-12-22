<?php
	 include_once('includes/templates/header.php');
include_once('includes/libreria/libreria.php');
	 ?>
	
	<section class="seccion contenedor">
	<h2>La mejor conferencia de diseño web en español</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla semper dui ut nibh hendrerit aliquam. Donec iaculis metus et dignissim iaculis.
			Duis ipsum urna, porttitor non risus vel, faucibus aliquam leo. Maecenas luctus justo non massa venenatis, vel rutrum justo pharetra. Aenean laoreet dictum tempor.
			Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In ultrices facilisis mattis. Integer nibh diam, gravida vitae interdum id,
			consectetur luctus eros.</p>
	</section><!--.seccion + .contenedor-->
	
	<section class="programa">
		
		<div class="contenedor-video">
		<video autoplay loop poster="img/bg-talleres.jpg">
			<source src="video/video.mp4" type="video/mp4">
			<source src="video/video.webm" type="video/webm">
			<source src="video/video.ogv" type="video/ogg">
			</video>
		</div><!--.contenedor-video-->
		
	<?php $categorias=programa_index(); ?>
	<div class="contenido-programa">
		<div class="contenedor">
			<div class="programa-evento">
			<h2>Programa del evento</h2>
			<nav class="menu-programa">
				<?php foreach($categorias as $categoria){ ?>
				<a href="#<?php echo($categoria['categoria']); ?>"><i class="<?php echo($categoria['icono']); ?>" aria-hidden="true"></i> <?php echo($categoria['categoria']); ?></a>
				<?php } ?>
			</nav>
				<?php $programas=programa_categoria();
				
				$i=0;
				
				foreach($programas as $programa){
					if($i%2){
				?>
			<div id="<?php echo(strtolower($programa['cat_evento'])); ?>" class="info-curso ocultar clearfix">
				
				<?php } ?>
				<div class="detalla-evento">
					<h3><?php echo($programa['nombre_evento']); ?></h3>
					<p><i class="fas fa-clock"></i> <?php echo($programa['hora_evento']); ?></p>
					<p><i class="fas fa-calendar"></i> <?php echo($programa['fecha_evento']); ?></p>
					<p><i class="fas fa-user"></i> <?php echo($programa['nombre_invitado']); ?></p>
				</div>
				<?php  $i++;} ?>
				
				<a href="#" class="buttom">Ver Todos</a>
			</div><!--.info-curso #talleres-->
				
				
				<div id="conferencias" class="info-curso ocultar clearfix">
				<div class="detalla-evento">
					<h3>Como ser freelander</h3>
					<p><i class="fas fa-clock"></i> 10:00</p>
					<p><i class="fas fa-calendar"></i> 10 Dic 2018</p>
					<p><i class="fas fa-user"></i> Alejandro Alcaraz</p>
				</div>
				<div class="detalla-evento">
					<h3>tecnologias del futuro</h3>
					<p><i class="fas fa-clock"></i> 18:00</p>
					<p><i class="fas fa-calendar"></i> 12 Dic 2018</p>
					<p><i class="fas fa-user"></i> Alejandro Alcaraz</p>
				</div>
				<a href="#" class="buttom">Ver Todos</a>
			</div><!--.info-curso #talleres-->
				
				
				<div id="seminarios" class="info-curso ocultar clearfix">
				<div class="detalla-evento">
					<h3>Diseño UI/UX para móviles</h3>
					<p><i class="fas fa-clock"></i> 16:00</p>
					<p><i class="fas fa-calendar"></i> 25 Ago 2018</p>
					<p><i class="fas fa-user"></i> Alejandro Alcaraz</p>
				</div>
				<div class="detalla-evento">
					<h3>Aprende a programar en una mañana</h3>
					<p><i class="fas fa-clock"></i> 20:00</p>
					<p><i class="fas fa-calendar"></i> 26 Ago 2018</p>
					<p><i class="fas fa-user"></i> Alejandro Alcaraz</p>
				</div>
				<a href="#" class="buttom">Ver Todos</a>
			</div><!--.info-curso #talleres-->
		</div><!--.programa-evento-->
		</div><!--.contenedor-->
	</div><!--.contenido-programa-->
	</section><!--.programa-->
	
	<section class="invitados seccion contenedor">
		<h2>Nuestros Invitados</h2>
		<ul class="lista-invitados clearfix">
			<li>
			<div class="invitado">
				<img src="img/invitado1.jpg" alt="Imagen Invitado">
				<p>Rafael Piedraita</p>
				</div>
			</li>
			<li>
			<div class="invitado">
				<img src="img/invitado2.jpg" alt="Imagen Invitado">
				<p>Shari madmajanda</p>
				</div>
			</li>
			<li>
			<div class="invitado">
				<img src="img/invitado3.jpg" alt="Imagen Invitado">
				<p>gregorio sanchez</p>
				</div>
			</li>
			<li>
			<div class="invitado">
				<img src="img/invitado4.jpg" alt="Imagen Invitado">
				<p>Susana herrera</p>
				</div>
			</li>
			<li>
			<div class="invitado">
				<img src="img/invitado5.jpg" alt="Imagen Invitado">
				<p>Paco de lucia</p>
				</div>
			</li>
			<li>
			<div class="invitado">
				<img src="img/invitado6.jpg" alt="Imagen Invitado">
				<p>susan sarhandon</p>
				</div>
			</li>
			
		</ul>
	</section>
	<div class="contador parallax">
	<div class="contenedor">
		<ul class="resumen-evento clearfix">
			<li><p class="numero"></p>Invitados</li>
			<li><p class="numero"></p>Talleres</li>
			<li><p class="numero"></p>Dias</li>
			<li><p class="numero"></p>Conferencias</li>
		</ul>
		</div>
	</div>
	
	<section class="precios seccion">
	<h2>Precios</h2>
		<div class="contenedor">
			<ul class="lista-precios clearfix">
				<li>
				<div class="tabla-precio">
					<h3>Todos los dias</h3>
					<p class="numero">50 €</p>
					<ul>
						<li><i class="fas fa-check"></i> Bocadillos gratis</li>
						<li><i class="fas fa-check"></i> Todas las conferencias</li>
						<li><i class="fas fa-check"></i> Todos los talleres</li>
					</ul>
					<a href="#" class="comprar-boton hollow">Comprar</a>
					</div>
				</li>
				<li>
				<div class="tabla-precio">
					<h3>Pase por 2 dias</h3>
					<p class="numero">45 €</p>
					<ul>
						<li>Bocadillos gratis</li>
						<li>Todas las conferencias</li>
						<li>Todos los talleres</li>
					</ul>
					<a href="#" class="comprar-boton ">Comprar</a>
					</div>
				</li>
				<li>
				<div class="tabla-precio">
					<h3>Pase por un día</h3>
					<p class="numero">30 €</p>
					<ul>
						<li>Bocadillos gratis</li>
						<li>Todas las conferencias</li>
						<li>Todos los talleres</li>
					</ul>
					<a href="#" class="comprar-boton hollow">Comprar</a>
					</div>
				</li>
			</ul>
		</div>
	</section>	
	<div id="mapa" class="mapa">
	<!--aqui se introducirá el mapa con JavaScript-->
	
	</div>
	
	<section class="seccion">
	<h2>Testimonial</h2>
		<div class="testimoniales contenedor clearfix">
		<div class="testimonial">
			<blockquote>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla semper dui ut nibh hendrerit aliquam. Donec iaculis metus et dignissim iaculis.</p>
				<footer class="info-testimonial clearfix">
					<img src="img/testimonial.jpg" alt="imagen de testimoniato">
					<cite>Oswaldo Aponte Escobedo <span>Diseñador en @Prisma</span></cite>
				</footer>
			</blockquote>
			</div>
			<div class="testimonial">
			<blockquote>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla semper dui ut nibh hendrerit aliquam. Donec iaculis metus et dignissim iaculis.</p>
				<footer class="info-testimonial clearfix">
					<img src="img/testimonial.jpg" alt="imagen de testimoniato">
					<cite>Oswaldo Aponte Escobedo <span>Diseñador en @Prisma</span></cite>
				</footer>
			</blockquote>
			</div>
			<div class="testimonial">
			<blockquote>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla semper dui ut nibh hendrerit aliquam. Donec iaculis metus et dignissim iaculis.</p>
				<footer class="info-testimonial clearfix">
					<img src="img/testimonial.jpg" alt="imagen de testimoniato">
					<cite>Oswaldo Aponte Escobedo <span>Diseñador en @Prisma</span></cite>
				</footer>
			</blockquote>
		</div><!--.testimonial-->
	</div><!--.testimoniales + .contenedor + .clearfix-->
	</section>	
	
	<div class="newsletter parallax">
		<div class="contenido contenedor">
			<p>registrate en la newsletter</p>
			<h3>gdlwebcamp</h3>
			<a href="#" class="buttom transparente">Registro</a>
		</div>
	</div>
	
	<section class="seccion">
	<h2>faltan</h2>
		<div class="cuenta-regresiva contenedor">
			<ul class="clearfix">
				<li><p id="dias" class="numero"></p>días</li>
				<li><p id="horas" class="numero"></p>horas</li>
				<li><p id="minutos" class="numero"></p>minutos</li>
				<li><p id="segundos" class="numero"></p>segundos</li>
			
			</ul>
		</div>
	</section>
<?php
	 include_once('includes/templates/footer.php');
	 ?>
	