<?php
include './soap-interface.php';

try{
  $options = array(
    'uri' => 'http://localhost:8080/server.php'
  );
  $server = new SoapServer(null, $options);

  $server->setObject(new SoapInterface());

  $server->handle();

}catch(SoapFault $e){
  echo $e->getMessage();
}

