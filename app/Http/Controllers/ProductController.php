<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    private $products = [
        ['id'=> 1, 'img' => '/storage/products/mooDied.png', 'name' => 'Laptop', 'describe' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores sunt esse impedit inventore consectetur error, minima accusamus voluptatum sed quod nam similique earum quo repellat eveniet eius reiciendis iste perspiciatis!', 'price' => 1500],
        ['id'=> 2, 'img' => '/storage/products/mooDied.png', 'name' => 'Smartphone', 'describe' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores sunt esse impedit inventore consectetur error, minima accusamus voluptatum sed quod nam similique earum quo repellat eveniet eius reiciendis iste perspiciatis!', 'price' => 500],
        ['id'=> 4, 'img' => '/storage/products/mooDied.png', 'name' => 'PS5', 'describe' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores sunt esse impedit inventore consectetur error, minima accusamus voluptatum sed quod nam similique earum quo repellat eveniet eius reiciendis iste perspiciatis!', 'price' => 2500],
        ['id'=> 5, 'img' => '/storage/products/mooDied.png', 'name' => 'Keyboard', 'describe' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores sunt esse impedit inventore consectetur error, minima accusamus voluptatum sed quod nam similique earum quo repellat eveniet eius reiciendis iste perspiciatis!', 'price' => 25],
        ['id'=> 6, 'img' => '/storage/products/mooDied.png', 'name' => 'Mouse', 'describe' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores sunt esse impedit inventore consectetur error, minima accusamus voluptatum sed quod nam similique earum quo repellat eveniet eius reiciendis iste perspiciatis!', 'price' => 10],
        ['id'=> 7, 'img' => '/storage/products/mooDied.png', 'name' => 'Pen', 'describe' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores sunt esse impedit inventore consectetur error, minima accusamus voluptatum sed quod nam similique earum quo repellat eveniet eius reiciendis iste perspiciatis!', 'price' => 0.25],
        ['id'=> 8, 'img' => '/storage/products/mooDied.png', 'name' => 'Book', 'describe' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores sunt esse impedit inventore consectetur error, minima accusamus voluptatum sed quod nam similique earum quo repellat eveniet eius reiciendis iste perspiciatis!', 'price' => 10],
        ['id'=> 9, 'img' => '/storage/products/mooDied.png', 'name' => 'Ruler', 'describe' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores sunt esse impedit inventore consectetur error, minima accusamus voluptatum sed quod nam similique earum quo repellat eveniet eius reiciendis iste perspiciatis!', 'price' => 0.5],
        ['id'=> 10, 'img' => '/storage/products/mooDied.png', 'name' => 'Milk', 'describe' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores sunt esse impedit inventore consectetur error, minima accusamus voluptatum sed quod nam similique earum quo repellat eveniet eius reiciendis iste perspiciatis!', 'price' => 1],
    ];

    public function index()
    {
        return Inertia::render('Products/Index', [
            'products' => $this->products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = collect($this->products)->firstWhere('id', $id);

        if (!$product) {
            abort(404, 'error not found');
        }

        return Inertia::render('Products/Show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
