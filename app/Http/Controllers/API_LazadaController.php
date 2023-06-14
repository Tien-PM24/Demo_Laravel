<?php

namespace App\Http\Controllers;

use App\Models\t_lazada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class API_LazadaController extends Controller
{
    public function getItems()
    {
        $items = t_lazada::all();
        return response()->json($items);
    }

    public function getOneItem($id)
    {
        $product = t_lazada::find($id);
        return response()->json($items);
    }


    public function createItem(Request $request)
    {
    $item = new t_lazada();
    $item->name = $request->input('name');
    $item->image = $request->input('image');
    $item->shop_owner = $request->input('shop_owner');
    $item->price = intval($request->input('price'));
    $item->save();
    return response()->json($item);
    }


    public function updateItem(Request $request, $id)
    {
        $data = $request->all();
        $item = t_lazada::findOrFail($id);
        $item->update($data);
        return response()->json($item);
    }

    public function deleteItem($id)
    {
        $item = t_lazada::findOrFail($id);
        $item->delete();
        return response()->json(['message' => 'Item deleted successfully']);
    }
}
