<?php

declare(strict_types=1);

/*
 * This file is part of konceiver/laravel-attribute-casters.
 *
 * (c) Konceiver <info@konceiver.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Konceiver\AttributeCasters\Casters;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Contracts\Encryption\Encrypter;

class EncryptedCaster implements CastsAttributes
{
    private Encrypter $encrypter;

    public function __construct(Encrypter $encrypter)
    {
        $this->encrypter = $encrypter;
    }

    public function get($model, $key, $value, $attributes)
    {
        return $this->encrypter->decrypt($value);
    }

    public function set($model, $key, $value, $attributes)
    {
        return $this->encrypter->encrypt($value);
    }
}
