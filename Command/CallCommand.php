<?php
namespace Wangjian\MQDemo\Command;

class CallCommand extends Command {
    protected $tel;

    public function __construct($tel) {
        $this->tel = $tel;
    }

    public function execute() {
        echo "call $this->tel\r\n";
    }
}