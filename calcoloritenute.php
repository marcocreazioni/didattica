<?php
$importo = 16500;
$ritenuto_alfa = $importo * 0.20;

echo "<table style='border:1px solid'>
<tr>
<td style='border:1px solid'>Importo</td>
<td style='border:1px solid'>Aliquota</td>
<td style='border:1px solid'>Base Imponibile</td>
<td style='border:1px solid'>Valore Ritenuta</td>
</tr>
<tr>
<td style='border:1px solid'> $importo €</td>
<td style='border:1px solid'>20%</td> 
<td style='border:1px solid'>16500 €</td>
<td style='border:1px solid'>$ritenuto_alfa €</td>
</tr>

</table>";



?>
