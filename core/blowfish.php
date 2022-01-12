<?php
class Crypt
{


    static function encrypt($data)
    {
        $key = 'chiave di cifratura';
        $l = strlen($key);
        if ($l < 16) {
            $key = str_repeat($key, ceil(16 / $l));
        }

        if ($m = strlen($data) % 8) {
            $data .= str_repeat("\x00",  8 - $m);
        }
        return openssl_encrypt($data, 'BF-ECB', $key, OPENSSL_RAW_DATA | OPENSSL_NO_PADDING);
    }

    static function decrypt($data)
    {
        $key = 'chiave di cifratura';
        $l = strlen($key);
        if ($l < 16) {
            $key = str_repeat($key, ceil(16 / $l));
        }

        return  openssl_decrypt($data, 'BF-ECB', $key, OPENSSL_RAW_DATA | OPENSSL_NO_PADDING);
    }
}
