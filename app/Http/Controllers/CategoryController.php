<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category as MainModel;

class CategoryController extends Controller
{
    public $pathView = "admin.category.";

    public function __construct(){
        view()->share("pathView", $this->pathView);
    }

    public function index(){
        $mainModel = new MainModel;
        $items = $mainModel->listItems();
        return view($this->pathView . "index")->with('items', $items);
    }

    public function form(){
        return view($this->pathView . "form");
    }
}
