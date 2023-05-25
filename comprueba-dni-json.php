<?php

$nombre='';
$apellido='';
$direccion='';
if ($_REQUEST['dni']=='34770868C')
{
  $nombre='Isidro jose';
  $apellido='Barquero godoy';
  $direccion='';
}
if ($_REQUEST['dni']=='28976639C')
{
  $nombre='lAURA';
  $apellido='Bazaga feradez';
  $direccion='';
}
if ($_REQUEST['dni']=='38129022J')
{
  $nombre='SANTIAGO';
  $apellido='CAMBERO MUÑOS';
  $direccion='';
}
if ($_REQUEST['dni']=='52354445M')
{
  $nombre='Miguel';
  $apellido='Calderon';
  $direccion='Rue del percebe 785';
}

if ($_REQUEST['dni']=='08894568F')
{
  $nombre='FRANCISCO JAVIER';
  $apellido='CARVAJAL DURAN';
  $direccion='';
}

if ($_REQUEST['dni']=='76043031V')
{
  $nombre='ALBERTO';
  $apellido='CASILLAS NAVO';
  $direccion='';
}

if ($_REQUEST['dni']=='53262995D')
{
  $nombre='JULIAN';
  $apellido='CIUDAD MORALES';
  $direccion='';
}

if ($_REQUEST['dni']=='34771150A')
{
  $nombre='SAMUEL';
  $apellido='DIEZ ESCOBAR';
  $direccion='';
}
if ($_REQUEST['dni']=='28976696P')
{
  $nombre='ALEJANDRO';
  $apellido='GIRODA NEVADO';
  $direccion='';
}

if ($_REQUEST['dni']=='08364318T')
{
  $nombre='ISMAEL';
  $apellido='GRIJOTA MARTIN';
  $direccion='';
}
if ($_REQUEST['dni']=='08364330')
{
  $nombre='JAVIER';
  $apellido='MENDOZA HERRERO';
  $direccion='';
}

if ($_REQUEST['dni']=='08885140X')
{
  $nombre='MAUELA';
  $apellido='MURILLO MARTIN';
  $direccion='';
}

if ($_REQUEST['dni']=='08885140X')
{
  $nombre='MAUELA';
  $apellido='MURILLO MARTIN';
  $direccion='';
}

if ($_REQUEST['dni']=='28954783Z')
{
  $nombre='JOSE DAVID';
  $apellido='POBLACION GOMEZ';
  $direccion='';
}

if ($_REQUEST['dni']=='08897869C')
{
  $nombre='TOMAS';
  $apellido='SANCHEZ PAREDES';
  $direccion='C/Castuera, 9 Benquerencia de la Serena';
}

$respuesta["nombre"]=$nombre;
$respuesta["apellido"]=$apellido;
$respuesta["direccion"]=$direccion;

echo json_encode($respuesta);
/*


echo "{
        'nombre':'$nombre',
        'apellido':'$apellido',
        'direccion':'$direccion'
      }";
*/	  
?>