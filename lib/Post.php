<?php

class Post
{
    const POST_TYPE_ARTICLE = 1;

    public $__database;

    public function __construct()
    {
        $database_file = file_get_contents('./database.json');
        $this->__database = json_decode($database_file, true);
    }

    public function where($key, $value)
    {
        return array_filter($this->__database, function ($data) use ($key, $value) {
            return ($data[$key] == $value);
        });
    }
}
