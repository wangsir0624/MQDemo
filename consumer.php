<?php
use Wangjian\MQDemo\Command\Command;
use Wangjian\MQDemo\Command\CallCommand;
use Wangjian\MQDemo\Command\EmailCommand;
use Wangjian\MQClient\Client;

require_once __DIR__.'/vendor/autoload.php';

$client = new Client('127.0.0.1', 3000);

while(1) {
    $command = $client->unQueue('call', 'email');
    if($command instanceof Command) {
        $command->execute();
    }
    sleep(1);
}