<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Product;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {

        $slide=Slide::all();

        $new_product=Product::where('new',1)->paginate(8);

        return view('trangchu', compact('slide', 'new_product'));
    }
}