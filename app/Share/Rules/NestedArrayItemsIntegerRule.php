<?php

namespace App\Share\Rules;

use Closure;
use Illuminate\Contracts\Validation\DataAwareRule;
use Illuminate\Contracts\Validation\ValidationRule;

class NestedArrayItemsIntegerRule implements ValidationRule, DataAwareRule
{
    protected array $data = [];

    public function setData($data): NestedArrayItemsIntegerRule|static
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
//        dump($this->data['data']['attributes']);
//        dump($value);
//        dump($attribute);
    }
}
