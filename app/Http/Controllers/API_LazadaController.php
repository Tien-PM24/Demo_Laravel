<?php

use App\Models\t_lazada;
use Illuminate\Http\Request;

class LazadaController extends Controller
{
    public function getItems()
    {
        $items = t_lazada::all();
        return response()->json($items);
    }

    public function createItem(Request $request)
    {
        $data = $request->all();
        $item = t_lazada::create($data);
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
