<?php
/*
Descripción : Capa de objetos de conexión a MySQL
Desarrollado: imoncada
*/

class SybaseDb {
    var $servidor;
    var $usuario;
    var $clave;
    var $bd;
    var $conectar;
    var $registros;
    var $listar;
    var $campos;
    var $filas;

    function parametrosConexion($servidor,$usuario,$clave,$bd) {
          $this->servidor = $servidor;
          $this->usuario  = $usuario;
	     $this->clave 	 = $clave;
          $this->bd 	 = $bd;
    }//fin funcion
				
    function conexionGlobal() {
          global $gs_servidor, $gs_user_db, $clave_desencriptada,$gs_bd;
          $this->servidor = $gs_servidor;
          $this->usuario  = $gs_user_db;
	     $this->clave 	 = $clave_desencriptada;
          $this->bd 	 = $gs_bd;
    }//fin funcion
    				
    function abrirConexion() {
          $this->conectar = mysql_connect($this->servidor,$this->usuario,$this->clave);
          mysql_select_db($this->bd,$this->conectar);
          return $this->conectar;
    }//fin funcion
							
   function ejecutaSQL($cadenaSQL) {
          $this->registros=mysql_query($cadenaSQL,$this->conectar);
          $this->filas=@mysql_num_rows($this->registros);
          $this->campos=@mysql_num_fields($this->registros);
          return $this->registros;
   }//fin funcion
								
   function listaResultado($parametroEntrada) {
          $this->listar=@mysql_fetch_array($parametroEntrada);
          return $this->listar;
  }//fin funcion
  
  function listaResultadoOBJ($parametroEntrada) {
			  $this->listar=mysql_fetch_object($parametroEntrada);
			  return $this->listar;
  }//fin funcion

}//fin class

$dbo = new SybaseDb();
$dbo->parametrosConexion($gs_servidor,$gs_user_db,$gs_clave,$gs_bd);
$dbo->abrirConexion();
?>