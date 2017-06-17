<?php
use Wangjian\MQDemo\Command\CallCommand;
use Wangjian\MQDemo\Command\EmailCommand;
use Wangjian\MQClient\Client;

require_once __DIR__.'/vendor/autoload.php';

$client = new Client('127.0.0.1', 3000);
$client->createQueue('call');
$client->createQueue('email');

while(1) {
    $client->inQueue('call', new CallCommand('12345678900'));
    $client->inQueue('call', new CallCommand('12345678900'));
    $client->inQueue('call', new CallCommand('12345678900'));
    $client->inQueue('email', new EmailCommand('test@mail.com'));
    $client->inQueue('email', new EmailCommand('test@mail.com'));
    $client->inQueue('email', new EmailCommand('test@mail.com'));
    $client->inQueue('email', new EmailCommand('test@mail.com'));
    $client->inQueue('email', new EmailCommand('test@mail.com'));
    $client->inQueue('email', new EmailCommand('test@mail.com'));
    $client->inQueue('email', new EmailCommand('test@mail.com'));
    sleep(10);
}

