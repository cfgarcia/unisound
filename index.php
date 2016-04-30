<?php
  require 'vendor/autoload.php';
  $app = new Slim\App;

  $container = $app->getContainer();

  $container['view'] = new \Slim\Views\PhpRenderer($_SERVER['DOCUMENT_ROOT'] ."/unisound/templates/");
    var_dump($container);
  $app->get('/', function ( $request, $response,$args) {
      $tickets = 'chirs';
      /*$response->write("Welcome to Slim!");
      return $response;*/
      //$this -> render('index.html');
      //var_dump($this);
      $response = $this -> view ->render($response,'index.html',$args);

      //return $response;
  });
  $app->get('/contact', function ($request,$response,$args) {
      /*$response->write("Welcome to Slim!");
      return $response;*/
      //$this -> render('index.html');
      //var_dump($this);
      $response = $this -> view ->render($response,'/contact.html',[]);

      return $response;
  });
  $app->run();
