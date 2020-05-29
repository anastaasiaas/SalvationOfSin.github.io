<?php
$file=file("logs.txt"); 
$col=sizeof($file);
?>

<html>
<head>
<style type='text/css'>
 td.zz {PADDING-LEFT: 3px; FONT-SIZE: 9pt; PADDING-TOP: 2px; FONT-FAMILY: Arial; }
</style>
</head>

<body>
<center>
<?php
echo "Последние <b>".$col."</b> посещений сайта:"; ?>

<table width="680" cellspacing="1" cellpadding="1" border="0"
    STYLE="table-layout:fixed">
<tr bgcolor="#eeeeee">
 <td class="zz" width="100"><b>Время и дата</b></td>
 <td class="zz" width="200"><b>Данные о посетителе</b></td>
 <td class="zz" width="100"><b>IP/прокси</b></td>
 <td class="zz" width="280"><b>Посещенный URL</b></td>
 <td class="zz" width="280"><b>Имя пользователя</b></td>
</tr>

<?php
   for ($si=sizeof($file)-1; $si+1>sizeof($file)-$col; $si--) {
   $string=explode("|",$file[$si]);
   $q1[$si]=$string[0];
   $q2[$si]=$string[1];
   $q3[$si]=$string[2];
   $q4[$si]=$string[3];
   $q5[$si]=$string[4];
echo '<tr bgcolor="#eeeeee"><td class="zz">'.$q1[$si].'</td>';
echo '<td class="zz">'.$q3[$si].'</td>';
echo '<td class="zz">'.$q2[$si].'</td>';
echo '<td class="zz">'.$q4[$si].'</td>';
echo '<td class="zz">'.$q5[$si].'</td></tr>';
}
echo '</table>';
?>