<?php
setcookie('wejscie', '1', time()+7200);

if(isset($_COOKIE['wejscie']))
   echo "<p><b>Dzień dobry! Strona lotniska używa ciasteczek</b></p>";
else
   echo "<p><i>Witaj ponownie na stronie lotniska</i></p>";
?>
