<?php

namespace App\Http\Controllers;

use App\Models\Categories;

class ProfileController extends Controller {
    public function index() {
        $categories = Categories::all();
        $selectedCategory = request('categoryFilter', 'all');
        $data = compact('categories', 'selectedCategory');

        return view('profile')->with($data);
    }


}