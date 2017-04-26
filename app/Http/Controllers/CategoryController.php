<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function __construct(\App\Models\Category $category, Request $request){
        $this->category = $category;
        $this->request = $request;
    }

    public function index()
    {
        return $this->category->allCategory();
    }

    public function create()
    {
        //$data = $this->request->all();
        //return $data;
       return $this->category->saveCategory();
    }

    public function show($id)
    {
        return $this->category->getCategory($id);
    }

    public function update(Request $request, $id)
    {
        return $this->category->updateCategory($id);
    }

    public function destroy($id)
    {
        //
    }
}
