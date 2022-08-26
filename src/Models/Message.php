<?php

namespace ZarulIzham\Wablas\Models;

use Spatie\DataTransferObject\DataTransferObject;

class Message extends DataTransferObject
{
    public $id;

    public $phone;

    public $message;

    public $status;

    public $ref_id;
}
