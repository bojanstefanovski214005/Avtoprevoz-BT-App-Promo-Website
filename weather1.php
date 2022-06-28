<?php


$data_scrapped = file_get_contents('http://www.accuweather.com/en/mk/bitola/227378/weather-forecast/227378');

echo $data_scrapped;

// $the_start = explode('<img class="weather-icon" src="/images/weathericons/33.svg" width="88" height="88" />',$data_scrapped);


// $the_end = explode('<div class="real-feel">',$the_start[1]);

// echo $the_end[0];