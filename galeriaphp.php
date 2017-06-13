<div id="galeria" class="wrapper">
<?php 
 //extensiones validas 
 $arr_ext=array("jpg","png","gif"); 
 //directorio donde se encuentran 
 $mydir=opendir("img/FanART"); 
 //leer archivos 
 while($archivo=readdir($mydir)) 
 { 
 $ext=substr($archivo,-3); 
 //si la extension del archivo es correcta muestra la imagen 
 if(in_array($ext,$arr_ext)) 
 { 
 echo '<a href="/img/FanART/'.$archivo.'" rel="lightbox[roadtrip]" title="Equipos."><img src="/img/FanART/'.$archivo.'">
 </a>'; 
 } 
 } 
?> 
</div>  