<?php
include_once("includes/libreria/conexion.php");
/*-----------------CALENDARIO-----------------------*/

function calendario_eventos(){
	try{
		
		$conexion=conexion();
		$sql="SELECT id_evento,nombre_evento,fecha_evento,hora_evento,cat_evento,nombre_invitado,apellido_invitado from eventos INNER JOIN categoria_evento ON eventos.id_cat_evento=categoria_evento.id_categoria INNER JOIN invitados ON eventos.id_inv=invitados.id_invitado ORDER BY id_evento";
		
		$consulta=$conexion->prepare($sql);
		$resultado=$consulta->execute();
		
		$resultado=$consulta->fetchAll();
		
		$calendario=array();
		
		foreach($resultado as $fila){
			
			$fecha=$fila['fecha_evento'];
			
			$evento=array(
			'titulo'=>$fila['nombre_evento'],
				'fecha'=>$fila['fecha_evento'],
				'hora'=>$fila['hora_evento'],
				'categoria'=>$fila['cat_evento'],
				'invitado'=>$fila['nombre_invitado']." ".$fila['apellido_invitado']
			
			);
			
			$calendario[$fecha][]=$evento;
			
		}
		
		$consulta->closeCursor();
		
		}catch(PDOException $e){
		
		echo("<p>No ha sido posible conectar con la BBDD " .$e->getMessage().".</p>");
	}
	
	return($calendario);
	
	$conexion=null;
}


/*-----------------INVITADOs-----------------------*/

function invitados(){
	try{
		
		$conexion=conexion();
		$sql="SELECT * FROM invitados ORDER BY id_invitado";
		
		$consulta=$conexion->prepare($sql);
		$resultado=$consulta->execute();
		
		$resultado=$consulta->fetchAll();
		
		$invitados=array();
		
		foreach($resultado as $fila){
			
			
			
			$invitado=array(
				'id_invitado'=>$fila['id_invitado'],
			'nombre'=>$fila['nombre_invitado']." ".$fila['apellido_invitado'],
				'descripcion'=>$fila['descripcion_invitado'],
				'imagen'=>$fila['url_imagen']
				
			);
			
			$invitados[]=$invitado;
			
		}
		
		$consulta->closeCursor();
		
		}catch(PDOException $e){
		
		echo("<p>No ha sido posible conectar con la BBDD " .$e->getMessage().".</p>");
	}
	
	return($invitados);
	
	$conexion=null;
}

function programa_index(){
	try{
		
		$conexion=conexion();
		$sql="SELECT * FROM categoria_evento";
		
		$consulta=$conexion->prepare($sql);
		$resultado=$consulta->execute();
		
		$resultado=$consulta->fetchAll();
		
		$categorias=array();
		
		foreach($resultado as $fila){
			
			
			
			$categoria=array(
				
				'categoria'=>$fila['cat_evento'],
				'icono'=>$fila['icono']
				
			);
			
			$categorias[]=$categoria;
			
		}
		
		$consulta->closeCursor();
		
		}catch(PDOException $e){
		
		echo("<p>No ha sido posible conectar con la BBDD " .$e->getMessage().".</p>");
	}
	
	return($categorias);
	
	$conexion=null;
}

/*-------------------eventos por categoria----------*/

function programa_categoria(){
	try{
		
		$conexion=conexion();
		$sql="SELECT id_evento,id_cat_evento,nombre_evento,fecha_evento,hora_evento,cat_evento,nombre_invitado,apellido_invitado from eventos INNER JOIN categoria_evento ON eventos.id_cat_evento=categoria_evento.id_categoria INNER JOIN invitados ON eventos.id_inv=invitados.id_invitado WHERE eventos.id_cat_evento = ? ORDER BY id_evento LIMIT 2 ";
		
		$consulta=$conexion->prepare($sql);
		
		$a=1;
		$consulta->bindParam(1,$a,PDO::PARAM_INT);
		
		$resultado=$consulta->execute();
		
		$resultado=$consulta->fetchAll();
		
		$programas=array();
		
		foreach($resultado as $fila){
			
			$programa=array(
				'id_evento'=>$fila['id_evento'],
				'id_categoria'=>$fila['id_cat_evento'],
				'nombre_evento'=>$$fila['nombre_evento'],
				'fecha_evento'=>$fila['fecha_evento'],
				'hora_evento'=>$fila['hora_evento'],
				'cat_evento'=>$fila['cat_evento'],
				'nombre_invitado'=>$fila['nombre_invitado']." ".$fila['apellido_invitado']
			);
		
		$programas[]=$programa;
		
		}
		$consulta->closeCursor();
		
		$a=2;
		$consulta->bindParam(1,$a,PDO::PARAM_INT);
		
		$resultado=$consulta->execute();
		
		$resultado=$consulta->fetchAll();
		foreach($resultado as $fila){
			
			$programa=array(
				'id_evento'=>$fila['id_evento'],
				'id_categoria'=>$fila['id_cat_evento'],
				'nombre_evento'=>$fila['nombre_evento'],
				'fecha_evento'=>$fila['fecha_evento'],
				'hora_evento'=>$fila['hora_evento'],
				'cat_evento'=>$fila['cat_evento'],
				'nombre_invitado'=>$fila['nombre_invitado']." ".$fila['apellido_invitado']
			);
		
		$programas[]=$programa;
		
		}
		$consulta->closeCursor();
		
		$a=3;
		$consulta->bindParam(1,$a,PDO::PARAM_INT);
		
		$resultado=$consulta->execute();
		
		$resultado=$consulta->fetchAll();
		foreach($resultado as $fila){
			
			$programa=array(
				'id_evento'=>$fila['id_evento'],
				'id_categoria'=>$fila['id_cat_evento'],
				'nombre_evento'=>$fila['nombre_evento'],
				'fecha_evento'=>$fila['fecha_evento'],
				'hora_evento'=>$fila['hora_evento'],
				'cat_evento'=>$fila['cat_evento'],
				'nombre_invitado'=>$fila['nombre_invitado']." ".$fila['apellido_invitado']
			);
		
		$programas[]=$programa;
			
		
		}
		
		$consulta->closeCursor();
		
		
		}catch(PDOException $e){
		
		echo("<p>No ha sido posible conectar con la BBDD " .$e->getMessage().".</p>");
	}
	return $programas;
	
	$conexion=null;
}

?>