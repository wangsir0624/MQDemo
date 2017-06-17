<?php
namespace Wangjian\MQDemo\Command;

class EmailCommand extends Command {
    protected $to;

    public function __construct($email) {
        $this->to = $email;
    }

    public function execute() {
        echo "send mail to $this->to\r\n";
    }
}