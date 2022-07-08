<?php

namespace Beike\Shop\Http\Controllers;

use Beike\Models\Category;
use Beike\Repositories\CategoryRepo;
use Beike\Repositories\ProductRepo;
use Beike\Shop\Http\Resources\ProductList;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function index(Request $request)
    {

        $data = [];
        return view('design.builder.index', $data);
    }
}