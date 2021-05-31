<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        // getItem();
        // die();
        // $items = Item::get();
        // dd($items);
        return view('welcome');
    }

    public function item()
    {
        $items = Item::whereNull('parent_id')
        ->with('childrenItems')
        ->get();
        return view('item', compact('items'));
    }
}
