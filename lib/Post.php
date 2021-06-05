<?php

class Post
{
    const POST_TYPE_ARTICLE = 1;
    const POST_TYPE_PRODUCT = 2;

    public $__database;

    public function __construct()
    {
        $database_file = file_get_contents('./database.json');
        $this->__database = json_decode($database_file, true);
    }

    public function where($key, $value)
    {
        if (!is_null($this->__database) && is_array($this->__database)) {
            return array_filter($this->__database, function ($data) use ($key, $value) {
                return ($data[$key] == $value);
            });
        }

        return array();
    }
}
