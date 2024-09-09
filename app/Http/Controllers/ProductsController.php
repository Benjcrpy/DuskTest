<?php 

namespace App\Http\Controllers;

use App\Models\Products;

use App\Models\DropZone;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input("query");
        $products = Product::where('name', 'like', '%$query%') -> limit(10)->get();
        return response()->json($products);
    }
}


