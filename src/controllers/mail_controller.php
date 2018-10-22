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
      $rpta = str_replace(array_keys($data_layout), array_values($data_layout), $layout);
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
