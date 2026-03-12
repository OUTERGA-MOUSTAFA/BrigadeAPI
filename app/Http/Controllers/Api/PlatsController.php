<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;

class PlatsController extends Controller
{
    // public function store(Request $request)
    // {
    //     $this->authorize('create', Plat::class);

    //     $plat = Plat::create($request->all());
    // 'user_id' => auth()->id()
    //     return response()->json($plat);
    // }

    public function show($id)
    {

        // $category = Categorie::find($id);
        // $plats = $category->plats;

        // return response()->json([
        //     'data' => $plats
        // ], 204);
    }
}
