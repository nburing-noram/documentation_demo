<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use App\Http\Resources\ItemResource;

class ItemController extends Controller
{
    public function index()
    {
        return ItemResource::collection(Item::all());
    }

    public function store(Request $request)
    {
        $item = Item::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'cost' => $request->cost
        ]);

        return ItemResource::make($item);
    }

    public function show(Item $item)
    {
        return ItemResource::make($item);
    }

    public function update(Request $request, Item $item)
    {
        $item->update([
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return ItemResource::make($item->fresh());
    }


    public function destroy(Item $item)
    {
        $item->delete();
        return response(null, 200);
    }
}
