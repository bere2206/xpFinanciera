<?php
	//conexion con la base de datos y el servidor
	$link = mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db("calculadora",$link) or die("<h2>Error de Conexion</h2>");

	//obtenemos los valores del formulario
	$edad = $_POST['edad_n'];
	$genero = $_POST['generoh' , 'generom'];
	$prima_mensual = $_POST['primaM'];
	$ingreso_mensual = $_POST['ingresoM'];
	$recuperacion = $_POST['recuperacion1'];

	//Obtiene la longitus de un string
	$req = (strlen($edad)*strlen($genero)*strlen($prima_mensual)*strlen($ingreso_mensual)*strlen($recuperacion)) or die("No se han llenado todos los campos");

	//ingresamos la informacion a la base de datos
	mysql_query("INSERT INTO calculo_100 VALUES('','$edad','$genero','$prima_mensual','$ingreso_mensual', 'recuperacion')",$link) or die("<h2>Error Guardando los datos</h2>");
	echo'
		<script>
			alert("Registro Exitoso");
			location.href="Pagina_Retiro.html";
		</script>
	'
?>