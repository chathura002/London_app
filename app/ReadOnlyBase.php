<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReadOnlyBase
{
    //
    protected $title_arr = [];

    public function all(){
        return $this->title_arr;
    }

    public function get($id){
        return $this->title_arr[$id];
    }
}
