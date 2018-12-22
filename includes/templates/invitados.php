
<section class="seccion contenedor invitados" >
	
	<h2>nuestros invitados</h2>
		<ul class="lista-invitados clearfix">
		<div class="calendario clearfix">
		<?php $invitados=invitados();
		foreach($invitados as $invitado){
		 ?>
			<li>
			<div class="invitado">
				<a class="invitado-info" href="#invitado<?php echo($invitado['id_invitado']); ?>">
					
				<img src="img/<?php echo($invitado['imagen']); ?>" alt="imagen invitado">
				<p><?php echo($invitado['nombre']); ?></p>
				</a>
				</div>
			</li>
		<div style="display: none;">
		<div class="invitado-info" id="invitado<?php echo($invitado['id_invitado']); ?>">
			<h2><?php echo($invitado['nombre']); ?></h2>
			<img src="img/<?php echo($invitado['imagen']); ?>" alt="imagen invitado">
			<p><?php echo($invitado['descripcion']); ?></p>
			</div>
		</div>
		<?php  } ?>
	</section><!--invitados-->
