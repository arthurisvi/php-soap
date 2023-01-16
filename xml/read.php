<?php

$string = '<?xml version="1.0" encoding="UTF-8"?>
<root>
  <user>
    <id>2</id>
  </user>
</root>';

$xml = simplexml_load_string($string);
$xml_file = simplexml_load_file('file.xml');

echo "ID string: " . $xml->user->id . "\n";
echo "ID file: " . $xml_file->user->id . "\n";