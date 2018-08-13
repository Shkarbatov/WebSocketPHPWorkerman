<?php

// http://localhost/websocket_backend/websocket.html

$localsocket = 'tcp://127.0.0.1:1235';
$user = 'tester01';
$message = 'test';

// соединяемся с локальным tcp-сервером
$instance = stream_socket_client($localsocket);
// отправляем сообщение
fwrite($instance, json_encode(['user' => $user, 'message' => $message])  . "\n");