<?php
	 include_once('includes/templates/header.php');
include_once('includes/libreria/libreria.php');
	 ?>  
	
	
	<section class="seccion contenedor">
	
	<h2>Calendario de eventos</h2>
		<div class="calendario clearfix">
		<?php $calendario=calendario_eventos();
		
		foreach($calendario as $dia=>$lista_eventos){ ?>
			
		<h3 class="fecha_cabecera clearfix"><i class="fa fa-calendar"></i>
		
		<?php 
													 
			setlocale(LC_TIME,'es_ES.UTF-8');
			echo(strftime('%A,%d de %B del %Y',strtotime($dia)));
													 
			?>
			</h3>
			
			<?php foreach($lista_eventos as $evento){ ?>
			
			<div class="dia">
			
			<p class="titulo">
				<i class="fas fa-code" aria-hidden="true"></i>
				<?php echo($evento['titulo']); ?></p>
				<p class="hora">
				<i class="fas fa-clock" aria-hidden="true"></i>	
					<?php echo($evento['fecha']. " " . $evento['hora']); ?>
				
				</p>
				<p><i class="fas fa-university" aria-hidden="true"></i>
					<?php echo($evento['categoria']); ?></p>
				
				<p>
				<i class="fas fa-user" aria-hidden="true"></i>
					<?php echo($evento['invitado']); ?>
				</p>
			</div>
			
			<?php }//fin foreach eventos ?>
		<?php }//fin foreach fechas cabecera ?>
		
		</div>
	</section><!--calendario-->
	
	
	<?php
	 include_once('includes/templates/footer.php');
	 ?>