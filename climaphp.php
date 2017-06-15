<div id="clima" class="wrapper">
<?php                             

$xml = simplexml_load_file("http://api.openweathermap.org/data/2.5/find?q=$buscar,&units=mexico&type=accurate&mode=xml&APPID=1604e5ecb495faebb678edacb59ffb16");
                            $temperatura = $xml->list->item->temperature["value"];
                            $presion = $xml->list->item->pressure["value"];
                            $humedad = $xml->list->item->humidity["value"];
                            $Coordenadas = $xml->list->item->city->coord["lon"];
                            $Nombre = $xml->list->item->city["name"];
                            $precipitacion = $xml->list->item->precipitation["mode"];

?>
                            <ul>
                            <li>Temperatura :
                            <?php echo($temperatura); ?> &deg;F
                            </li>
                            <li>Presion:
                            <?php echo($presion); ?> hPa
                            </li>
                            <li>Humedad :
                            <?php echo($humedad); ?>%
                            </li>
                            <li>Coordenadas :
                            <?php echo($Coordenadas); ?>
                            </li>
                            <li>Precipitacion :
                            <?php echo($precipitacion); ?>
                            </li>
                            </ul>
</div>  