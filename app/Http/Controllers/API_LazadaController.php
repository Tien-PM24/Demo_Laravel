<?php

namespace App\Http\Controllers;

use App\Models\t_lazada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class API_LazadaController extends Controller
{
    public function getItems() {
        $items = t_lazada::all();
        return response()->json($items);
    }
}
