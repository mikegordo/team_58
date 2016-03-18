<?php

require "predis/autoload.php";

/**
 * Class DB
 */
class DB
{
    const REDIS_HOSTNAME = 'localhost';
    const REDIS_PORT     = 6379;

    protected $client = null;

    public function __construct()
    {
        try {
            $this->client = new Predis\Client([
                "scheme" => "tcp",
                "host"   => static::REDIS_HOSTNAME,
                "port"   => static::REDIS_PORT
            ]);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /**
     * Add array to file
     *
     * @param array $block
     * @return string - short key
     */
    public function add($block = [])
    {
        $key = $this->keyGen();
        $this->client->set($key, serialize($block));
        return $key;
    }

    /**
     * Find array by short key
     *
     * @param $key
     * @return mixed
     */
    public function find($key)
    {
        $q = $this->client->get($key);

        if (empty($q)) {
            return [];
        } else {
            return unserialize($q);
        }
    }

    /**
     * Generate short key
     *
     * @return string
     */
    protected function keyGen()
    {
        return substr(md5(microtime(true)), 0, 6);
    }
}