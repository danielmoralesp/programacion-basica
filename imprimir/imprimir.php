<?php
	require('fpdf/fpdf.php');
	// require('conexion.php');

	$pdf = new FPDF();
	$pdf -> AddPage();
	$pdf -> SetFont('Arial', '', 10);
	$pdf -> Cell();


?>