<?php

namespace ZarulIzham\Wablas\Models;

use Spatie\DataTransferObject\DataTransferObject;
use ZarulIzham\Wablas\Models\SendMessage\Data;

class SendMessage extends DataTransferObject
{
    public $status;

    public $message;

    public Data $data;
}
