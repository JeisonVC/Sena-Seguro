<?php
require_once("../Model/conexion.php");
require_once("../Views/Components/tipoproducto.class.php");
	$accion = $_REQUEST["accion"];

	switch ($accion) {
		case 'create':
			$tipopro_cod=$_POST["txt_tipoprocod"];
			$tipopro_nombre=$_POST["txt_tipopronom"];
			$tipopro_desc=$_POST["txt_desctipopro"];
			try {
					Gestion_Tipoproducto::Guardar($tipopro_cod, $tipopro_nombre, $tipopro_desc);
					$mensaje =("Su registro se creo correctamente");
					echo $mensaje;
				} 
				catch (Exception $e) {
					$mensaje =("Ha ocurrido un error, el error fue :".$e->getMessage()." en ".$e->getFile()." en la linea ".$e->getLine());
				}
				// header("Location: ../View/guardar_producto.php?m=".$mensaje);
			break;
	}
?>