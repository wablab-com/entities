<?php

class Entity
{

    /**
     * It is a good security practice to use a hashed id instead of numeric or autoincrement one
     * so it would be hard to predict
     * @var string
     */
    private string $id;


    protected bool $enableAutoId = true;

    protected static string $uniqueIdPrefix;

    public function __construct()
    {
        if($this->enableAutoId) {
            if(!static::$uniqueIdPrefix) {
                // this will be generated only once for each process
                static::$uniqueIdPrefix = sha1(gethostname().'-'.microtime().'-'.mt_rand(10000000000000000000, 99999999999999999999).'-'.getmypid().'-'.uniqid('', true)).'-';
            }
            $this->id = uniqid(static::$uniqueIdPrefix, false);
        }
    }

    public function getId():string
    {
        return $this->id;
    }



}