<?php

namespace ZarulIzham\Wablas\Models;

use Spatie\DataTransferObject\DataTransferObject;

class DeviceInfo extends DataTransferObject
{
    public $status;

    public $message;

    public $token;
}
