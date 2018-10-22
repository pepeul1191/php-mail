<?php

namespace Controller;

class MailController extends \Configs\Controller
{
  public function wellcome($request, $response, $args) {
    $rpta = '';
    $status = 200;
    try {
      $content = require __DIR__ . '/../contents/wellcome_mail_content.php';
      $layout = require __DIR__ . '/../templates/mail/layout_mail.php';
      $partial = require __DIR__ . '/../templates/mail/partial_wellcome.php';
      $lang = 'sp';
      //str_replace yiled
      $data_partial = array(
        '%demo' => $content[$lang]['demo'],
      );
      $yield = str_replace(array_keys($data_partial), array_values($data_partial), $partial[$lang]);
      //str_replace layout
      $data_layout = array(
        '%yield' => $yield,
        '%demo' => $content[$lang]['demo'],
      );
      $message = str_replace(array_keys($data_layout), array_values($data_layout), $layout);
      //
      $to      = 'info@softweb.pe';
      $subject = 'Correo de Prueba';
      // To send HTML mail, the Content-type header must be set
      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: jvaldivia@softweb.pe';
      mail($to, $subject, $message, $headers);
    }catch (Exception $e) {
      $status = 500;
      $rpta = json_encode(
        [
          'tipo_mensaje' => 'error',
          'mensaje' => [
  					'',
  					$e->getMessage()
  				]
        ]
      );
    }
    return $response->withStatus($status)->write($rpta);
  }
}

?>
