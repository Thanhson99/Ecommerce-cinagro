<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $folderUpload = "category";
    // public $timestamps = false;

    public function listItems($param = null){
        $query = $this->orderBy('id', 'ASC')->paginate(5);
        return $query;
    }

    public function getImage($option = ""){
        $src = asset("images/" . $this->folderUpload . "/" . $this->picture);
        return $src;
    }
}
