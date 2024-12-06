<?php

namespace App\Traits;

trait General
{
    public $data = [];


    public function data($key, $value = '')
    {
        if (empty($key)) {
            return new \Exception('Key is required');
        } else {
            return $this->data[$key] = $value;
        }

    }
}
