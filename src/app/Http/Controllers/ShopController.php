<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use InterventionImage;
use App\Http\Requests\ReseRequest;

class ShopController extends Controller
{

    public function __construct()
    {
        $this->shop = new Shop();
    }

    public function index(ReseRequest $request)
    {
        $shops = $this->shop->findAllShops();
        return view('home', compact('shops', 'posts', 'keyword'));

        $keyword = $request->input('keyword');

        $query = Post::query();

        if(!empty($keyword)) {
            $query->where('title', 'LIKE', "%{$keyword}%")->orWhere('author', 'LIKE', "%{$keyword}%");
        }

        $posts = $query->get();

    }

    public function show($id)
    {
        $shop = Shop::find($id);
        return view('detail', compact('shop'));
    }

}
