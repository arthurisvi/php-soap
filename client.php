<?php

class Client {

  private $soap_client;

  public function __construct(){
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