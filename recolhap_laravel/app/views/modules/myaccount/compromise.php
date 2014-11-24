<?php
require('../../assets/fpdf/fpdf.php');
session_start();
$items = array();
$row = array();
$row = $_GET['info'];
$row = unserialize($row);

$items[0] = "1. Asumir la responsabilidad sobre la veracidad de la información ".
		"según su fuente de origen, es decir, que esta coincide con hallazgos ". 
		"clínicos del paciente, historias clínicas que hayan sido fuente de ".
		"información para el registro, reportes de exámenes de laboratorio ".
		"y resultados paraclínicos, entre otros.";
$items[1] ="2. No difundir a ninguna persona la clave de ingreso a la plataforma ".
		"web que le fuere asignada durante el registro nacional de hipertensión ".
		"pulmonar. En caso de que el médico desee que otro profesional de la ".
		"salud idóneo ingrese información debe esta persona solicitar su propio ".
		"usuario y contraseña los cuales son INSTRANSFERIBLES para cada profesional.";
$items[2] ="3. Guardar confidencialidad y discreción sobre los datos obtenidos ".
		"durante el registro.";
$items[3] ="4. El especialista acepta y entiende que el registro nacional ".
		"NO REEMPLAZA LA HISTORIA CLÍNICA del paciente. El aplicativo cuenta ".
		"con una opción de resumen de historia clínica, que puede copiar y ".
		"pegar digitalmente en el formato de historia clínica digital para la ".
		"IPS en donde trabaja, también puede imprimir el registro y luego de ".
		"firmarlo hacerlo llegar al archivo clínico de su institución. ".
		"Solo estas dos modalidades – datos guardados en software de historia ".
		"clínica ó documento impreso, firmado y almacenado en archivo clínico – ".
		"hacen las veces de historia clínica válida.";
$items[4] ="5. Una vez ha hecho click a botón “guardar”, “almacenar datos” o ".
		"equivalentes dentro de la página web estos datos no se podrán ".
		"corregir ni editar posteriormente. En caso de no tener información ".
		"completa puede dejar como pendiente para ingresar más adelante. ".
		"VERIFIQUE MUY BIEN LA PERTINENCIA DE LA INFORMACIÓN ANTES DE SALVARLA EN LA PLATAFORMA WEB.";
$items[5] ="6. Las herramientas que pudiera ofrecer la plataforma web ningún ".
		"momento suplantan el juicio clínico ni decisiones terapéuticas y / o ".
		"diagnósticas con su paciente. Usted es totalmente autónomo en las decisiones de manejo de su paciente.";
/*TODO*/

$items[6] ="En caso de evidenciarse incumplimiento de los compromisos en ".
		"mención y de acuerdo a su gravedad podrá darse por cancelada su ".
		"participación en el Registro Nacional de Hipertensión pulmonar, ".
		"no habrá pago de incentivos por los pacientes que hubiere ingresado ".
		"(si así lo acordó el patrocinador) y podrá acarrear sanciones penales ".
		"y disciplinarias correspondientes a la legislación vigente colombiana. ".
		"En constancia firmo a los ".date("d")." días del mes de ".date("F")." del año 20".date("y");



class PDF extends FPDF
{
	
	// This function have all the header information
	function Header()
	{
		// This is the logo file
		$this->Image('../../assets/images/logo.png',10,8,33);
		
		// This set the font to arial bold 15
		$this->SetFont('Times','',16);
		// Put the title of the pdf here
		$this->Cell(0,5,'REGISTRO COLOMBIANO MULTICÉNTRICO',0,0,'C');
		$this->Ln(3);
		$this->Cell(0,10,'DE HPERTENSIÓN ARTERIAL PULMONAR',0,0,'C');
		$this->Ln(11);
		$this->SetFont('Times','B',18);
		$this->Cell(0,10,'RECOLHAP',0,0,'C');
		// Line jump
		$this->Ln(20);
	}

	// This Function has all the footer information
	function Footer()
	{
		// Put a divisor line
		$this->Line(11.0, 275.0, 200.0, 275.0);
		// Position of the footer is made in the end of the page 
		$this->SetY(-20);
		$this->SetFont('Arial','',9);
		// Put the footer information in 3 rows
		$this->Cell(0,5,"HMD herramientas web para investigaciones clínicas - www.healmydisease.com",0,0,'C');
		$this->Ln(3);
		$this->Cell(0,6,"Contacto marketing@healmydisease.com",0,0,'C');
		$this->Ln(3);
		$this->Cell(0,7,"Copyrights 2013,  Medellín - Colombia",0,0,'C');
	}
}

// Creation of the object of the class PDF
$pdf = new PDF();
// This add one more page, as is the first call creates the first page
$pdf->AddPage();
// Set the font of here on to Times with 12 points of size
$pdf->SetFont('Arial','',11);

$address ="FAVOR IMPRIMIR Y ENVIAR FIRMADO A: Calle 78B # 75-21 - Medellín, Antioquia A NOMBRE DE NATALIA GONZÁLEZ, JEFE DE INVESTIGACIONES CLÍNICAS.";
$nameMatch = "Nombre ".$row['ivt_name']." ".$row['ivt_surname'].", con especialidad en ".$row['ivt_specialty']." identificado con cédula ".$row['ivt_doc']." de la ciudad de ".$row['ivt_city'].", actuando en mí nombre, como aparece en el encabezado, al ingresar al registro nacional de hipertensión pulmonar acepto los siguientes compromisos:";
$pdf->MultiCell(0, 5, $nameMatch,0);
$pdf->ln(10);
for($i=0;$i<6;$i++)	{
	$pdf->MultiCell(0,5,$items[$i],0);
	$pdf->ln(2);
}
// Add the last line to the page, this line has the date modified to the actual date
$pdf->Ln(5);
$pdf->MultiCell(0, 5, $items[6],0);
$pdf->Ln(15);
// Add the space for the name, signature and id
$pdf->Cell(90,3,"Nombre: ".$row['ivt_name']." ".$row['ivt_surname']);
$pdf->Cell(0,3,"Cédula: ".$row['ivt_doc']);
$pdf->Ln(18);
$pdf->Cell(0,3,"Firma:__________________________________");
$pdf->Ln(10);
$pdf->SetFont('Arial','',8);
$pdf->MultiCell(0,4,$address,0,'C');

$pdf->Output();
?>