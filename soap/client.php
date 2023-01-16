<?php

class Client {

  private $soap_client;

  public function __construct(){
    ini_set('default_socket_timeout', 5000);
    $options = array(
      'uri' => 'http://localhost:8080/server.php',
      'location' => 'http://localhost:8080/server.php',
      'trace' => true,
    );

    $this->soap_client = new SoapClient(null, $options);
  }

  public function getName($id_array){
    return $this->soap_client->getStudentName($id_array);
  }

}

$client = new Client;