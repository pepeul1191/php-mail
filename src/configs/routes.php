<?php

use Slim\Http\Request;
use Slim\Http\Response;
use Controller\ErrorController;
use Controller\MailController;
// Routes
$app->get('/demo/[{name}]', function (Request $request, Response $response, array $args) {
  // Sample log message
  $this->logger->info("Slim-Skeleton '/' route");
  // Render index view
  return $this->renderer->render($response, 'index.phtml', $args);
});
//error
$app->get('/error/access/{numero}', ErrorController::class . ':access');
//mail
$app->post('/wellcome', MailController::class . ':wellcome')->add($mw_ambiente_csrf);
