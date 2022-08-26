<?php

namespace ZarulIzham\Wablas\Casters;

use Illuminate\Support\Collection;
use Spatie\DataTransferObject\Caster;
use ZarulIzham\Wablas\Models\Message;

class MessageDataCaster implements Caster
{
    public function cast(mixed $value): Collection
    {
        if (! is_array($value)) {
            throw new \Exception('Can only cast arrays to Message');
        }

        return collect(array_map(
            fn (array $data) => new Message(...$value),
            $value
        ));
    }
}
