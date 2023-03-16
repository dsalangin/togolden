<?php
use Workerman\Worker;
require_once __DIR__ . '/../vendor/autoload.php';

$wsWorker = new Worker("websocket://0.0.0.0:2346");
$wsWorker->count = 4;

$wsWorker->onConnect = function($connection) use($users) {
  $connection->onWebSocketConnect = function($connection) use($users) {
      echo "New connection\n";
    };
};

$wsWorker->onMessage = function($connection, $data) use ($wsWorker, $users) {
  foreach($wsWorker->connections as $clientConnection) {
    if($clientConnection->id === $connection->id) {
      $clientConnection->send($data);
    } else {
      $dataWithNotify = $data; 
      $dataWithNotify = json_decode($dataWithNotify, true);
      $dataWithNotify['notify'] = true;
      $dataWithNotify = json_encode($dataWithNotify);
      $clientConnection->send($dataWithNotify);
    }
  }
};


$wsWorker->onClose = function($connection) use ($users) {
  echo "Connection closed";
};

Worker::runAll();
