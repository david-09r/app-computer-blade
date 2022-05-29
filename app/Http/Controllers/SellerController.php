<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function index()
    {
        return view('sellers.index', [
            'sellers' => Seller::paginate(12)
        ]);
    }

    public function create()
    {
        return view('sellers.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Seller $seller)
    {
        return view('sellers.show', compact('seller'));
    }

    public function edit(Seller $seller)
    {
        //
    }

    public function update(Request $request, Seller $seller)
    {
        //
    }

    public function destroy(Seller $seller)
    {
        //
    }
}
