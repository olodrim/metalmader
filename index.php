<!DOCTYPE html>
<html lang="es">



<head>
<meta charset="utf-8" /><title>Metalmader</title>



<script language="javascript"  src="js/ajax.js"></script>
<script language="javascript" src="js/funciones.js"></script>
<script language="javascript" src="js/jquery-1.7.1.js"></script>
<script language="javascript" src="js/compras.js"></script>
<script language="javascript" src="js/ventas.js"></script>
 <script language="javascript" src="js/mermas.js"></script>
 <script language="javascript" src="js/informes.js"></script>
<script language="javascript" src="js/drag.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="css/estilo.css" />
<script language='javascript'>
 setTimeout("muestraReloj()",1000) ;

</script>
</head>
<body>

<div id="wrap">

<div id="header"> <h1>Metalmader  </h1>   <div id="reloj" ></div> </div>
<div id="div_carga" style="visibility:hidden">Cargando...</div>
<div id="nav">Menuprincpal</div>	
<div id="container" >
<div id="principal"><?php require("opciones.php");?></div>
<div id="menuesp" style="visibility:hidden"></div>
<div id="procesos" style="visibility:hidden" ></div>
</div>





<?php require("up.php");?>
<div id="div_flotante"	></div>		
<?php require("down.php"); ?>			    	
<div id="footer" >Footer</div>
</div>
</body>


</html>
