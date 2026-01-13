<body>
<?php
$fecha=date("d-m-Y");
$hora= date("H :i:s");
$destino="francocollado05@gmail.com";
$desde= $_POST['Email'];
$mensaje= $_POST['Mensaje'];
$asunto= $_POST['Asunto'];
mail($destino,$asunto,$mensaje,$desde);
echo "Su consulta ha sido enviada, en breve recibirá nuestra
respuesta.";
?>
</body>
