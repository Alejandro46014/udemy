(function(){
	
	"use strict";
	
	var regalo=document.getElementById('regalo');
	
	document.addEventListener('DOMContentLoaded', function(){
		
		/*var map = L.map('mapa').setView([39.459821, -0.394156], 16);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([39.459821, -0.394156]).addTo(map)
    .bindPopup('EnanoMaligno')
    .openPopup();*/
		
		//DATOS PERSONALES
		
		var nombre=document.getElementById('nombre');
		var apellido=document.getElementById('apellido');
		var email=document.getElementById('email');
		
		//CAMPOS PASES
		
		var pase_undia=document.getElementById('pase-1dias');
		var pase_dosdias=document.getElementById('pase-2dias');
		var pase_completo=document.getElementById('pase-dias');
		
		//BOTONES Y DIVS
		
		var calcular=document.getElementById('calcular');
		var error=document.getElementById('error');
		var btnRegistro=document.getElementById('btnRegistro');
		var listaProductos=document.getElementById('lista-productos');
		
		/*EXTRAS*/
		
		var etiquetas=document.getElementById('etiquetas');
		var camisa_evento=document.getElementById('camisa-evento');
		var suma=document.getElementById('suma-total');
		
		
			
		calcular.addEventListener('click', calcularMontos);
		pase_dosdias.addEventListener('blur', mostrarDias);
		pase_undia.addEventListener('blur', mostrarDias);
		pase_completo.addEventListener('blur', mostrarDias);
		
		nombre.addEventListener('blur', validarCampos);
		apellido.addEventListener('blur', validarCampos);
		email.addEventListener('blur', validarCampos);
		email.addEventListener('blur', validarEmail);
		
		function validarCampos(){
			
			if(this.value === ''){
				error.style.display='block';
				error.innerHTML='Este campo es oblgatorio';
				this.style.border='1px solid red';
				error.style.border='1px solid red';
			}else{
				error.style.display='none';
				this.style.border='1px solid green';
			}
			
		}
		
		function validarEmail(){
			
			if(this.value.indexOf('@')>-1){
				
				error.style.display='none';
				this.style.border='1px solid green';
			}else{
				
				error.style.display='block';
				error.innerHTML='No es una dirección de correo correcta';
				this.style.border='1px solid red';
				error.style.border='1px solid red';
			}
		}
		
		/*apellido.addEventListener('blur', function(){
			if(this.value === ''){
				error.style.display='block';
				error.innerHTML='Este campo es oblgatorio';
				this.style.border='1px solid red';
				error.style.border='1px solid red';
			}
		});
		
		email.addEventListener('blur', function(){
			if(this.value === ''){
				error.style.display='block';
				error.innerHTML='Este campo es oblgatorio';
				this.style.border='1px solid red';
				error.style.border='1px solid red';
			}
		});*/
		
		function calcularMontos(event){
			
			event.preventDefault();
			
			if(regalo.value === ''){
				
				alert("Debes elegir un regalo");
				regalo.focus();
			}else{
				
				var boletoDia=parseInt(pase_undia.value,10) || 0,
					boleto2Dias=parseInt(pase_dosdias.value,10) || 0,
					boletoCompleto=parseInt(pase_completo.value,10) || 0 ,
					cantCamisas=parseInt(camisa_evento.value,10) || 0,
					cantEtiquetas=parseInt(etiquetas.value,10) || 0;
				
				var totalAPagar=(boletoDia * 30) + (boleto2Dias * 45) + (boletoCompleto * 50) + ((cantCamisas *10)* 0.93) + (cantEtiquetas * 2);
				
				var listadoProductos=[];
				
				if(boletoDia >=1){
					
					listadoProductos.push(boletoDia + ' Pases por un día');
				}
				if(boleto2Dias >= 1){
					
					listadoProductos.push(boleto2Dias + ' Pases por dos días');
				}
				if(boletoCompleto >= 1){
					
					listadoProductos.push(boletoCompleto + ' Pases todos los días');
				}
				if(cantCamisas >= 1){
					
					listadoProductos.push(cantCamisas + ' Camisas');
				}
				if(cantEtiquetas >= 1){
					
					listadoProductos.push(cantEtiquetas + ' Etiquetas');
				}
				
				listaProductos.style.display="block";
				listaProductos.innerHTML = '';
				
				for(var i=0;i < listadoProductos.length;i++){
					
					listaProductos.innerHTML+=listadoProductos[i] + '<br/>';
				}
				
				
				suma.innerHTML = totalAPagar.toFixed(2) + ' €';
				
			}
		}
		
		function mostrarDias(){
			
			var boletoDia=parseInt(pase_undia.value,10) || 0,
					boleto2Dias=parseInt(pase_dosdias.value,10) || 0,
					boletoCompleto=parseInt(pase_completo.value,10) || 0 ;
			
			var diasElegidos=[];
			
			if(boletoDia > 0){
				
				diasElegidos.push('viernes');
			}
			if(boleto2Dias > 0){
				
				diasElegidos.push('viernes', 'sabado');
			}
			if(boletoCompleto > 0){
				
				diasElegidos.push('viernes','sabado','domingo');
			}
			
			for(var i=0; i < diasElegidos.length; i++){
				
				document.getElementById(diasElegidos[i]).style.display="block";
			}
		}
	
	});//DOM CONTENT LOADED
	
})();

/*-------------empieza jquery---------------*/

$( document ).ready(function() {
'use strict';
	
	/*-----------------BARRA FIJA SCROLL---------------*/
	
	var windowHeight=$(window).height();
	var barraAltura=$('.barra').innerHeight();
	
	$(window).scroll(function(){
		var scroll=$(window).scrollTop();
		if(scroll>windowHeight){
			
			$('.barra').addClass('fixed');
			$('body').css({'margin-top':barraAltura +'px'});
		}else{
			
			$('.barra').removeClass('fixed');
			$('body').css({'margin-top':'0px'});
		}
		
	});
	
	/*--------------MENÜ MOVIL-----------------*/
	
	$('.menu-movil').on('click',function(){
		
		$('.navegacion-principal').slideToggle();
		
	});
	
	/*---------lettering------------*/
	
	$('.nombre-sitio').lettering();
	
	/*------------------addclass body---------*/
	
	$('body.conferencias .navegacion-principal a:contains("Conferencias")').addClass('activo');
	
	$('body.calendario .navegacion-principal a:contains("Calendario")').addClass('activo');
	
	$('body.invitados .navegacion-principal a:contains("Invitados")').addClass('activo');
	
	/*--------------programa de conferencias-------------*/
	
	$('.ocultar').hide();
	$('programa-evento .info-curso:first').show();
	$('.menu-programa a:first-child').addClass('activo');
	$('.menu-programa a').on('click', function(){
		$('.menu-programa a').removeClass('activo');
		$(this).addClass('activo');
		$('.ocultar').hide();
		var enlace = $(this).attr('href');
		$(enlace).fadeIn(1000);
		
		return false;
	});
	
	/*----------------------animaciones numeros-------------------*/
	
	$('.resumen-evento li:nth-child(1) p').animateNumber({number: 6}, 1200);
	$('.resumen-evento li:nth-child(2) p').animateNumber({number: 15}, 1200);
	$('.resumen-evento li:nth-child(3) p').animateNumber({number: 3}, 1200);
	$('.resumen-evento li:nth-child(4) p').animateNumber({number: 9}, 1200);
	
	/*--------------cuenta regresiva--------------------*/
	
	$('.cuenta-regresiva').countdown('2019/01/25 00:00:00', function(event){
		
		$('#dias').html(event.strftime('%D'));
		$('#horas').html(event.strftime('%H'));
		$('#minutos').html(event.strftime('%M'));
		$('#segundos').html(event.strftime('%S'));
	});
	
	/*-------------LIGHTBOX-------------*/
	
	
	
	/*----------------COLORBOX DESCRIPCIÖN DE LOS INVITADOS------------------*/
	
	$('.invitado-info').colorbox({inline:true,width:"50%"});
	
});//fin document ready