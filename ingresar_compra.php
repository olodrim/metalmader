<?php ?>


<html>
<head>
<meta content="text/html; charset=ISO-8859-1"
http-equiv="content-type">
<title></title>
</head>
<body>
<!--empresa -->
<h3>Ingresar Compra</h3>
Datos Empresa
<table>
	<tr>
		<td> RUT  
		</td>
		<td> <input type="text" name="rut" id="rut"  maxlength="30" size="10" >	
		
			
		<input type="button" value="Buscar Emrpesa" id ="bempresa"  >
		<!--despliega div con las empresas --> 
		 </td>
	</tr>
	<tr>
		<td> Nombre </td><td><input type="text" name="empresa" id="empresa"  maxlength="30" size="30" ></td>
	</tr>
	<tr>
		<td> Telefono</td><td><input type="text" name="telefono" id="telefono"  maxlength="10"  size="10"></td>
	</tr>
	<tr>
		<td>Dirección</td><td><input type="text" name="direccion" id="direccion"  maxlength="50" size="20"> </td>
	</tr>
	<tr>
		<td> Fecha Hoy</td><td><input type="text" name="fechasistema" id="fechasistema"  maxlength="30" size="10" >   </td>
	</tr>
</table>






<!-- documento -->

<table>
	<tr>
		<td>Tipo Documento
		
		<select name="tipodocumento" id="tipodocumento" >
		<option value="factura">Factura</option>
		<option value="nc">Nota de Crédito</option>
		<option value="nb">Nota de Débito</option>
		</select> 
		</td>
		<td>Número<input type="text" name="numerodocumento" id="numerodocumento"  maxlength="10" size="10"> </td>
		<td>Fecha en documento <input type="text" name="fechadocumento" id="fechadocumento"  maxlength="10" size="10" > </td>
	</tr>
	
</table>



<!-- aqui va la grilla de ingreso de productos ajax  -->
<pre>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa   quitar agregar   </pre>
<pre>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa   quitar agregar   </pre>
<pre>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa   quitar agregar   </pre>
<pre>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa   quitar agregar   </pre>
<pre>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa   quitar agregar   </pre>
<pre>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa   quitar agregar   </pre>
<pre>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa   quitar agregar   </pre>
<pre>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa   quitar agregar   </pre>

<br>
</body>
</html>




<!--
posibilidad por ver
select de la bd ruts empresas tipo proveedor<select name="empresa" id="empresa" >
		<option value="factura">1111111</option>
		<option value="nc">2222222</option>
		<option value="nb">3333333</option>
		</select> -->
