
<?php
	$to      = 'info@softweb.pe';
	$subject = 'Correo de Prueba';
	$message = 'Hola</br>Att. Tu Zulo.';
	

	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: jvaldivia@softweb.pe' ;

	$nombre =" Pepito";
	$telefono="4723041";
	$correo_sender = "pepeul1191@ovi.com";
	$sede ="Lima";
	$asunto ="TQM Zula";
	$mensaje ="Amo tus pezuñas";


	$message = "<html><head><meta http-equiv='Content-Type' content='text/html;charset=UTF-8'/>";
				//$message .= "<link rel='stylesheet' href='//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'>";
	$message .= "<style type='text/css'>";
	$message .= "#logoCOA{width: 230px;height:47px;position: relative;float: left;background-image: url('http://softweb.pe/SWPMail/COA.png');	}#mensaje{width: 100%;position: relative;float: left;margin-top: 20px;}#logoSWP{width: 30px;height: 30px;position: relative;float: left;background-image: url('http://softweb.pe/SWPMail/logoSWP.png');	}#textoSWP{color: #616161;position: relative;float: left;margin-top: 7px;margin-left: 10px;}#textoSWP:hover{text-decoration: underline;}#powered{margin-top:20px;}";
	$message .= "</style></head><body role='document'>";
	$message .= "<div class='container' role='main' style='margin-top: 20px;'><div id='logoCOA'></div><div id='mensaje'>";
	$message .= "<table style='font-size: 12px;color: #616161;font-family: sans-serif;'><thead><td style='width:20px;'></td><td style='width:50px;'></td><td style='width:15px; algin:center;'></td><td style='width:200px;'></td></thead><tbody>";
	$message .= "<tr><td></td><td>Nombre</td><td>:</td><td>". $nombre ."</td></tr>";
	$message .= "<tr><td></td><td>Teléfono</td><td>:</td><td>". $telefono ."</td></tr>";
	$message .= "<tr><td></td><td>Correo</td><td>:</td><td>". $correo_sender."</td></tr>";
	$message .= "<tr><td></td><td>Sede</td><td>:</td><td>". $sede ."</td></tr>";
	$message .= "<tr><td></td><td>Asunto</td><td>:</td><td>". $asunto ."</td></tr>";
	$message .= "<tr><td></td><td style='valign:top;'>Consulta <td>:</td> </td><td style='width:550px;'>". $mensaje   ."</td></tr>";
	$message .= "<tr><td colspan='4'><div id='powered' style=''><a href='http://softweb.pe/website/'><div id='logoSWP'></div><div id='textoSWP'>Aplicación de Correo Soportada por Software Web Perú E.I.R.L.©</div></a></div></td></tr><tbody></table>";
	$message .= "</div></div>";
	$message .= "</br> </br>";

	mail($to, $subject, $message, $headers);
	?>
