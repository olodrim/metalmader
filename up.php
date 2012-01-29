<script language="javascript" src="js/drag.js"></script>
<!-- BEGIN FLOATING LAYER CODE //-->

<div id="theLayer" style="position:absolute;width:500px;height:400px;left:400px;top:100px;visibility:hidden">
<table border="0" width="250" bgcolor="#424242" cellspacing="0" cellpadding="5">
<tr>
<td width="100%">
  <table border="0" width="100%" cellspacing="0" cellpadding="0" height="36">
  <tr>
  <td id="titleBar" style="cursor:move" width="100%">
  <ilayer width="100%" onSelectStart="return false">
  <layer width="100%" onMouseover="isHot=true;if (isN4) ddN4(theLayer)" onMouseout="isHot=false">
  <font face="Arial" color="#FFFFFF">Tarea 2 </font>
  </layer>
  </ilayer>
  </td>
  <td style="cursor:hand" valign="top">
  <a  onClick="hideMe();return false"><font color=#ffffff size=2 face=arial  style="text-decoration:none">X</font></a>
  </td>
  </tr>
  <tr>
  <td width="100%" bgcolor="#FFFFFF" style="padding:4px" colspan="2">
