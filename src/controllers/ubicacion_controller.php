<?php

namespace Controller;

class UbicacionController extends \Configs\Controller
{
  public function view($request, $response, $args) {
    $this->load_helper('ubicacion');
    $rpta = '';
    $status = 200;
    $locals = [
      'constants' => $this->constants,
      'title' => 'Gestión de Ubicaciones',
      'csss' => $this->load_css(index_css($this->constants)),
      'jss'=> $this->load_js(index_js($this->constants)),
      'mensaje' => '',
      'menu' => '[{"url" : "contenidos/", "nombre" : "Contenidos"}, {"url" : "ubicaciones/", "nombre" : "Ubicaciones"}]',
      'items' => '[{"subtitulo":"","items":[{"item":"Ubicaciones del Perú","url":"ubicaciones/#/ubicacion"},{"item":"Autocompletar","url":"ubicaciones/#/autocompletar"}]}]',
      'data' => json_encode(array(
        'mensaje' => false,
        'titulo_pagina' => 'Gestión de Ubicaciones',
        'modulo' => 'Ubicaciones'
      )),
    ];
    $view = $this->container->view;
    return $view($response, 'app', 'home/index.phtml', $locals);
  }
}
