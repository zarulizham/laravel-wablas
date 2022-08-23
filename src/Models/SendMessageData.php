<?php

namespace ZarulIzham\Wablas\Models;

use Illuminate\Support\Collection;
use Spatie\DataTransferObject\Caster;
use ZarulIzham\Wablas\Models\Message;
use Spatie\DataTransferObject\DataTransferObject;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class SendMessageData extends DataTransferObject
{
    public $device_id;

    public $quota;

    /** @var \Spatie\DataTransferObject\Tests\Foo[] */
    #[CastWith(FooArrayCaster::class)]
    public $messages;
}


class FooArrayCaster implements Caster
{
    public function cast(mixed $value): array
    {
        if (! is_array($value)) {
            throw new \Exception("Can only cast arrays to Foo");
        }

        return array_map(
            fn (array $data) => new Message(...$value),
            $value
        );
    }
}
