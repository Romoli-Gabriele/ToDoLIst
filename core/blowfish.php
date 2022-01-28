<?php
class Crypt
{
    public $config;
    public $pubKey;
    private $res;
    private $privKey;

    function __construct()
    {
        $this->config = array(
            "digest_alg" => "sha512",
            "private_key_bits" => 4096,
            "private_key_type" => OPENSSL_KEYTYPE_RSA,
        );
        $this->res = openssl_pkey_new($this->config);
        if(!openssl_pkey_export($this->res, $this->privKey)) die('Failed to retrieve private key');
        $this->pubKey = openssl_pkey_get_details($this->res);
        $this->pubKey = $this->pubKey["key"];
    }
   
    public function encrypt($data)
    {
        
        openssl_public_encrypt($data, $encrypted, $this->pubKey);
        return $encrypted;
    }

    function decrypt($encrypted)
    {
        openssl_private_decrypt($encrypted, $decrypted, openssl_pkey_get_private($this->privKey, "phrase"));
        return $decrypted;
    }
}
