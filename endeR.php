
<?php

Session_start();
$_session['vorname'] = $vorname;
$_session['nachname'] = $nachname;
$_session['strasse'] = $strasse;
$_session['plz']= $plz;
$_session['ort']= $ort ;
$_session['telefon']=$telefon;

echo "Ihre Daten lautet: <br> ";
echo $vorname . "" . $nachname . " "  ;
echo $strasse . "<br>";
echo $plz . $ort . "<br>";
echo $telefon . "<br>";

 $_session['pizza'] = $pizza;
 $_session['getraenke'] = $getraenke;
echo "Sie haben folgende bestellt: <br>";
echo $pizza . $getraenke;



 ?>

<a href="KundenDaten.php"> WEiTER </a>;


<!-- // // Inhalt des ersten Skripts
// $skript1 = file_get_contents('RechnungInsgesamt.php');

// // Inhalt des zweiten Skripts
// $skript2 = file_get_contents('KundenDaten.php');

// // Neues Skript mit dem Inhalt beider Skripte
// $neuesSkript = $skript1 . $skript2;

// // Hier kannst du den Inhalt des neuen Skripts verwenden
// // ... -->