<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CaptchaValidation implements Rule
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
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (session()->get('CAPTCHA_CODE') == $value) {
            $random_num = md5(random_bytes(64));
            $captcha_code = substr($random_num, 0, 6);
            session()->put('CAPTCHA_CODE', $captcha_code);
            return true;
        }

        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'کپچا کد صحیح نمی باشد.';
    }
}
