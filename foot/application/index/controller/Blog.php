<?php

namespace app\index\controller;

use think\Controller;

class Blog extends Controller
{
    public function read()
    {
        return $this->fetch();
    }

    public function update($id)
    {
        dump($id);
    }

    public function index()
    {
        return $this->fetch();
    }
}