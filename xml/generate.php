<?php

$dom = new DOMDocument('1.0', 'UTF-8');

$dom->formatOutput = true;

$root_node = $dom->createElement('root');

$user_node = $dom->createElement('user');

$id_user_node_value = $dom->createTextNode(1);
$id_user_node = $dom->createElement('id');
$id_user_node->appendChild($id_user_node_value);


$dom->appendChild($root_node);
$user_node->appendChild($id_user_node);
$root_node->appendChild($user_node);

$xml = $dom->saveXML();
$dom->save('file.xml');
echo $xml;

