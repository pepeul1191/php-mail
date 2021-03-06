<?php

namespace Controller;

class MailController extends \Configs\Controller
{
  public function wellcome($request, $response, $args) {
    $rpta = '';
    $status = 200;
    try {
      //post data
      $data = json_decode($request->getParam('data'));
      //var_dump($data);exit();
      //mail builder
      $content = require __DIR__ . '/../contents/mail_wellcome_content.php';
      $layout = require __DIR__ . '/../templates/mail/layout_mail.php';
      $partial = require __DIR__ . '/../templates/mail/partial_wellcome.php';
      $lang = $data->{'lang'};
      //str_replace yiled
      $data_partial = array(
        '%demo' => $content[$lang]['demo'],
      );
      $yield = str_replace(array_keys($data_partial), array_values($data_partial), $partial[$lang]);
      //str_replace layout
      $activation_url = $content['base_url'] . 'user/activate_account/' . $data->{'user_id'} . '/' . $data->{'activation_key'};
      $terms_and_conditions = $content['base_url'] . 'resources/terms_and_conditions/' . $lang;
      $tutorial = $content['base_url'] . 'resources/tutorial/' . $lang;
      $data_layout = array(
        '%yield' => $yield,
        '%base_url' => $content['base_url'],
        '%language' => $lang,
        '%name' => $data->{'name'},
        '%activation_url' => $activation_url,
        '%terms_and_conditions' => $terms_and_conditions,
        '%tutorial' => $tutorial,
      );
      $message = str_replace(array_keys($data_layout), array_values($data_layout), $layout);
      //echo $message; exit();
      //
      $to      = $data->{'to'};
      $subject = $content[$lang]['subject'];
      // To send HTML mail, the Content-type header must be set
      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
      $headers .= 'From: ' . $content[$lang]['from'];
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

  public function resetPassword($request, $response, $args) {
    $rpta = '';
    $status = 200;
    try {
      //post data
      $data = json_decode($request->getParam('data'));
      //var_dump($data);exit();
      //mail builder
      $content = require __DIR__ . '/../contents/mail_reset_password_content.php';
      $layout = require __DIR__ . '/../templates/mail/layout_mail.php';
      $partial = require __DIR__ . '/../templates/mail/partial_reset_password.php';
      $lang = $data->{'lang'};
      //str_replace yiled
      $data_partial = array(
        '%demo' => $content[$lang]['demo'],
      );
      $yield = str_replace(array_keys($data_partial), array_values($data_partial), $partial[$lang]);
      //str_replace layout
      $reset_url = $content['base_url'] . 'user/reset_password/' . $data->{'user_id'} . '/' . $data->{'reset_key'};
      $data_layout = array(
        '%yield' => $yield,
        '%base_url' => $content['base_url'],
        '%language' => $lang,
        '%reset_url' => $reset_url,
      );
      $message = str_replace(array_keys($data_layout), array_values($data_layout), $layout);
      //echo $message; exit();
      //
      $to      = $data->{'to'};
      $subject = $content[$lang]['subject'];
      // To send HTML mail, the Content-type header must be set
      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
      $headers .= 'From: ' . $content[$lang]['from'];
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
