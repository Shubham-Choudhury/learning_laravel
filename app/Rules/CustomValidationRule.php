<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CustomValidationRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $dob = date('Y-m-d', strtotime($value));
        $today = date('Y-m-d');
        $age = date_diff(date_create($dob), date_create($today))->y;

        if ($age >= 18) {
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Your :attribute must be at least 18 years old.';
    }
}
