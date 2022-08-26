<?php

namespace ZarulIzham\Wablas\Models\SendMessage;

use Illuminate\Support\Collection;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\DataTransferObject;
use ZarulIzham\Wablas\Casters\MessageDataCaster;

class Data extends DataTransferObject
{
    public $device_id;

    public $quota;

    #[CastWith(MessageDataCaster::class)]
    public Collection $messages;
}
