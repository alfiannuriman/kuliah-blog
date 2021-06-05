<?php

require_once './lib/Post.php';

class Product extends Post
{
    public $__data;

    public function __construct()
    {
        parent::__construct();
        $this->__data = $this->where('post_type_id', parent::POST_TYPE_PRODUCT);
    }

    public function getList()
    {
        return $this->__data;
    }
}
