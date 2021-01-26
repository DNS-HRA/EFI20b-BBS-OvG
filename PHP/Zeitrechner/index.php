<html>

<head>

<h1>Zeitenrechner</h1>

<style>
h1 {
	text-align: center;
	color: red;
	border: 5px solid;
	border-color:blue;
    border-radius: 20px;
    background-color: lightblue;

}

body {
	text-align: center;
	font-weight: bold;
}
form {
	display: inline-block;
}

.flex {
    display: flex;
    justify-content: center;
    align-items: center;
}

</style>

</head>

<body>

<br>

<!-- eingabefelder -->

<form method="post">

<input type="number" max="24" min="0" name="stunde"> <b>:</b>
<input type="number" max="59" min="0" name="minute"> &nbsp; <b>BIS</b> &nbsp;
<input type="number" max="24" min="0" name="stunde2"> <b>:</b>
<input type="number" max="59" min="0" name="minute2"> &nbsp; &nbsp; <b>PAUSE</b> &nbsp;
<input type="number" max="24" min="0" name="pausenstunde"> <b>:</b>
<input type="number" max="59" min="0" name="pausenminute"> &nbsp; &nbsp;

<input type="submit" value="Berechnen"> &nbsp;

</form>


<?php

//input aus eingabefeldern in variablen speichern
//mit isset () prüfen ob eine variable exististiert
$minute2 = isset( $_POST["minute2"]) ? $_POST["minute2"] : '0';
$minute = isset( $_POST["minute"]) ? $_POST["minute"] : '0';
$stunde = isset( $_POST["stunde"]) ? $_POST["stunde"] : '0';
$stunde2 = isset( $_POST["stunde2"]) ? $_POST["stunde2"] : '0';
$pausenstunde = isset( $_POST["pausenstunde"]) ? $_POST["pausenstunde"] : '0';
$pausenminute = isset( $_POST["pausenminute"]) ? $_POST["pausenminute"] : '0';

//variablen den wert null geben, wenn kein wert eingegeben wurde
if ($minute2 == ""){
	$minute2 = 0;
}
if ($minute == ""){
	$minute = 0;
}
if ($stunde == ""){
	$stunde =0;
}
if ($stunde2 == ""){
	$stunde2 = 0;
}
if ($pausenstunde == ""){
	$pausenstunde = 0;
}
if ($pausenminute == ""){
	$pausenminute = 0;
}

if ($stunde2 < $stunde)	{
	$stunde2 = 24 - $stunde2 + $stunde;
}	
//startzeit und endzeit in minuten umrechnen
$anfangszeitUmrechnen = $stunde*60 + $minute;
$endzeitUmrechnen = $stunde2*60 + $minute2;
$endzeitMinusAnfangszeit = $endzeitUmrechnen - $anfangszeitUmrechnen;
$zwischenergebnis = $endzeitMinusAnfangszeit/60;
//pausenzeit in minuten umrechnen
$pause = $pausenstunde*60 + $pausenminute;
$pausenergebnis = $pause/60;
//zwischenergebnis (endzeit - startzeit) - pausenzeit
$zwischenergebnisMitPause = $zwischenergebnis - $pausenergebnis;


//kommazahl mit explode in array aufspalten

$array = explode(".",$zwischenergebnisMitPause);
//zwischenergebnis - zahl vor dem komma
$test = $zwischenergebnisMitPause - $array[0];
//nachkommazahl +60
$minuten = $test*60;

$ergebnis = $array[0].":".$minuten;

if ($ergebnis < 0){
	echo "Keine zulässige Arbeitszeit!";
}

else{
   echo $ergebnis;
}


/*
um mit zeiten zu rechnen bei der eine zeit schon im nächsten tag liegt (z.b 18-1 uhr)

 Bsp 20 Uhr bis 2 uhr
 2 -20 = -18
 ->
 24 - 20 = 4
 4 + 2 = 6


if (zeit 2 < zeit 1)
rechne 24 - zahl 1 + zahl 2
 */

?>


<br>
<br>
<br>

<div class"img">
	<img src="stempelkarte.jpg" width="300" height="800">

</div>

</body>
</html>
