<?php
//vestidos damas
$vestido1='colorRojo';
$vestido2='colorVerde';
$vestido3='colorAmarillo';

//descuento 
//descuento por dos vestidos 10%
$descuento1=5%;
$descuento2=2%;
$descuento3=6%;
$descuentoDosColores=10%;

//precios de los vestidos
$precio1=35000;
$precio2=27850;
$precio3=34000;

$total=$precio1+$precio2-$descuentoDosColores;

echo('el total es de: '.$total);



// 2¿Como transformamos un arreglo que obtenemos 
//   despues de consultar datos en Bd con Php al formato JSON?
//RESPUESTA
// c.json_encode($array)

// 4. existen diferentes herramientas que facilitan el trabajo de un 
// desarrollador como los editores de codigo y los servidores locales.Ademas hay otra herramienta 
// importante como GitHub. en una idea general ¿para que nos sirve GitHub?
// RESPUESTA
// b.Servicio en la nube para almacenar nuestros proyectos o repositorios

?>