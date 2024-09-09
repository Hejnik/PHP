<?php
$zebra = $_POST['zebra']; /* Czas na krótki
choć bezsensowny komentarz po to abyś to zobaczył */
$zyrafa = $_POST['zyrafa']; // komentarz jednowierszowy
$staszic = $_POST['staszic'];
$kontener = $_POST['baterie']; # komentarz uniksowy
$cena = $zebra*12+$zyrafa*10+$staszic*11+$kontener*20;
$cena = number_format($cena, 2, ".", " ");
echo<<<END
<table align="center" border="1" cellpadding="5" cellspacing="0">
<tr>
<td>$zebra</td><td>zeber</td>
</tr><tr>
<td>$zyrafa</td><td>żyraf</td>
</tr><tr>
<td>$staszic</td><td>Breloków Staszic</td>
</tr><tr>
<td>$kontener</td><td>kontenerów na baterie</td>
</tr><tr>
<td>Suma</td><td>$cena</td>
</table>
<input type="button" onclick="location.href='index.php';" value="Powrót">
END;
?>
