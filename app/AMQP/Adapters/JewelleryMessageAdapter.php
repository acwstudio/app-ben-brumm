<?php

declare(strict_types=1);

namespace App\AMQP\Adapters;

use Domain\Jewelleries\Jewellery\Models\Jewellery;
use Illuminate\Support\Facades\Validator;

final class JewelleryMessageAdapter
{
    public function normalize(array $message): array
    {
        if ($this->validateMessage($message)) {
            dd($message);
        }
//        dd($this->validateMessage($message));
        return $message;
    }

    private function validateMessage(array $message): bool
    {
//        dd($message[0]);
        $validator = Validator::make(
            $message[0], [
            'data.attributes.part_number' => ['required','array','unique:jewelleries,part_number'],
        ]);

        if ($validator->fails()) {
            dd($validator->errors());
        }
        return true;
    }
}
