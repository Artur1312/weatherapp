<?php
header('Content_Type: application/json');

function loadClasses ($class)
    {
    include_once 'vender/weather/'.$class.'.php';
    include_once 'vender/weather/Db.php';  
}
spl_autoload_register('loadClasses');

$weather = new Weather ();
$weather->setTmp($tmp);
$weather->setWindSpeed(30);
$weather->setWindTurn('N');
$weather->setStatus('cloudy');
$weather->setHumidity('60%');
echo $weather->showWeather();

?>