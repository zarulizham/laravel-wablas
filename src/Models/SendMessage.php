<?php

namespace ZarulIzham\Wablas\Models;

use Spatie\DataTransferObject\DataTransferObject;

class SendMessage extends DataTransferObject
{
    public $status;

    public $message;

    public SendMessageData $data;
}
