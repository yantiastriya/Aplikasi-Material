<?php

require_once __DIR__ . '/vendor/autoload.php';

require 'function.php';
$tabel_material = query("SELECT * FROM tabel_material");


$mpdf = new \Mpdf\Mpdf();
$html ='<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tabel Material</title>
</head>
<body>
	<h1>Tabel Material</h1>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>kode material</th>
			<th>nama material</th>
			<th>part number</th>
			<th>packing list</th>
			<th>stock</th>
		</tr>';

		$i = 1;
		foreach($tabel_material as $row) {
			$html .=' <tr> 
				<td>'. $i++ .'</td>
				<td>'. $row["kode_material"] .'</td>
				<td>'. $row["nama_material"] .'</td>
				<td>'. $row["part_number"] .'</td>
				<td>'. $row["packing_list"] .'</td>
				<td>'. $row["stock"] .'</td>
			 </tr> ';
		}


$html .='</table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('tabel-material.pdf',  \Mpdf\Output\Destination::INLINE);

?>
