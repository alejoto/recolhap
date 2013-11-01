<?php
require('../../assets/fpdf/fpdf.php');
session_start();
$items = array();
$row = array();
$row = $_GET['info'];
$row = unserialize($row);

$items[0] = "1. Asumir la responsabilidad sobre la veracidad de la informaci�n ".
		"seg�n su fuente de origen, es decir, que esta coincide con hallazgos ". 
		"cl�nicos del paciente, historias cl�nicas que hayan sido fuente de ".
		"informaci�n para el registro, reportes de ex�menes de laboratorio ".
		"y resultados paracl�nicos, entre otros.";
$items[1] ="2. No difundir a ninguna persona la clave de ingreso a la plataforma ".
		"web que le fuere asignada durante el registro nacional de hipertensi�n ".
		"pulmonar. En caso de que el m�dico desee que otro profesional de la ".
		"salud id�neo ingrese informaci�n debe esta persona solicitar su propio ".
		"usuario y contrase�a los cuales son INSTRANSFERIBLES para cada profesional.";
$items[2] ="3. Guardar confidencialidad y discreci�n sobre los datos obtenidos ".
		"durante el registro.";
$items[3] ="4. El especialista acepta y entiende que el registro nacional ".
		"NO REEMPLAZA LA HISTORIA CL�NICA del paciente. El aplicativo cuenta ".
		"con una opci�n de resumen de historia cl�nica, que puede copiar y ".
		"pegar digitalmente en el formato de historia cl�nica digital para la ".
		"IPS en donde trabaja, tambi�n puede imprimir el registro y luego de ".
		"firmarlo hacerlo llegar al archivo cl�nico de su instituci�n. ".
		"Solo estas dos modalidades � datos guardados en software de historia ".
		"cl�nica � documento impreso, firmado y almacenado en archivo cl�nico � ".
		"hacen las veces de historia cl�nica v�lida.";
$items[4] ="5. Una vez ha hecho click a bot�n �guardar�, �almacenar datos� o ".
		"equivalentes dentro de la p�gina web estos datos no se podr�n ".
		"corregir ni editar posteriormente. En caso de no tener informaci�n ".
		"completa puede dejar como pendiente para ingresar m�s adelante. ".
		"VERIFIQUE MUY BIEN LA PERTINENCIA DE LA INFORMACI�N ANTES DE SALVARLA EN LA PLATAFORMA WEB.";
$items[5] ="6. Las herramientas que pudiera ofrecer la plataforma web ning�n ".
		"momento suplantan el juicio cl�nico ni decisiones terap�uticas y / o ".
		"diagn�sticas con su paciente. Usted es totalmente aut�nomo en las decisiones de manejo de su paciente.";
/*TODO*/

$items[6] ="En caso de evidenciarse incumplimiento de los compromisos en ".
		"menci�n y de acuerdo a su gravedad podr� darse por cancelada su ".
		"participaci�n en el Registro Nacional de Hipertensi�n pulmonar, ".
		"no habr� pago de incentivos por los pacientes que hubiere ingresado ".
		"(si as� lo acord� el patrocinador) y podr� acarrear sanciones penales ".
		"y disciplinarias correspondientes a la legislaci�n vigente colombiana. ".
		"En constancia firmo a los ".date("d")." d�as del mes de ".date("F")." del a�o 20".date("y");



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
		$this->Cell(0,5,'REGISTRO COLOMBIANO MULTIC�NTRICO',0,0,'C');
		$this->Ln(3);
		$this->Cell(0,10,'DE HPERTENSI�N ARTERIAL PULMONAR',0,0,'C');
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
		$this->Cell(0,5,"HMD herramientas web para investigaciones cl�nicas - www.healmydisease.com",0,0,'C');
		$this->Ln(3);
		$this->Cell(0,6,"Contacto marketing@healmydisease.com",0,0,'C');
		$this->Ln(3);
		$this->Cell(0,7,"Copyrights 2013,  Medell�n - Colombia",0,0,'C');
	}
}

// Creation of the object of the class PDF
$pdf = new PDF();
// This add one more page, as is the first call creates the first page
$pdf->AddPage();
// Set the font of here on to Times with 12 points of size
$pdf->SetFont('Arial','',11);

$address ="FAVOR IMPRIMIR Y ENVIAR FIRMADO A: Calle 78B # 75-21 - Medell�n, Antioquia A NOMBRE DE NATALIA GONZ�LEZ, JEFE DE INVESTIGACIONES CL�NICAS.";
$nameMatch = "Nombre ".$row['ivt_name']." ".$row['ivt_surname'].", con especialidad en ".$row['ivt_specialty']." identificado con c�dula ".$row['ivt_doc']." de la ciudad de ".$row['ivt_city'].", actuando en m� nombre, como aparece en el encabezado, al ingresar al registro nacional de hipertensi�n pulmonar acepto los siguientes compromisos:";
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
$pdf->Cell(0,3,"C�dula: ".$row['ivt_doc']);
$pdf->Ln(18);
$pdf->Cell(0,3,"Firma:__________________________________");
$pdf->Ln(10);
$pdf->SetFont('Arial','',8);
$pdf->MultiCell(0,4,$address,0,'C');

$pdf->Output();
?>