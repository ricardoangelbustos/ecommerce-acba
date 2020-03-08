<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Mark;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Products = Product::all();
        return view('adminProducts', compact('Products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Marks = Mark::all();
        $Categories = Category::all();
        return view('addProduct', compact('Marks', 'Categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, 
            [
                'name' => 'required|min:3|max:100|unique:products', 
                'price' => 'required|numeric|min:1', 
                'stock' => 'required|numeric|min:0', 
                'description' => 'required|min:15', 
                'image' => 'required|mimes:jpg,jpeg,png,svg,gif', 
                'category_id' => 'required', 
                'mark_id' => 'required' 
            ],

            [
                'name.required' => 'Completar campo nombre',
                'price.required' => 'Completar campo precio',
                'stock.required' => 'Completar campo stock',
                'description.required' => 'Completar campo descripción',
                'category_id.required' => 'Seleccionar categoría',
                'mark_id.required' => 'Seleccionar marca',
                'image.required' => 'Subir foto del producto',
                'numeric' => 'En el campo :attribute debe ingresarse un valor numérico',
                'name.min' => 'En el campo :attribute deben ingresarse al menos 3 caracteres',
                'description.min' => 'En el campo :attribute deben ingresarse al menos 15 caracteres',
                'description.min' => 'En el campo :attribute deben ingresarse al menos 15 caracteres',
                'price.min' => 'En el campo :attribute deben ingresarse un valor positivo',
                'stock.min' => 'En el campo :attribute deben ingresarse un valor mayor o igual a 0',
            ]
        );



        $imageName = time() . '.' . $request['image']->getClientOriginalExtension();

        $request['image']->move(public_path('product_img/'), $imageName);


        $Product = new Product;
        $Product->name = $request['name'];
        $Product->price = $request['price'];
        $Product->stock = $request['stock'];
        $Product->image = $imageName;
        $Product->description = $request['description'];
        $Product->category_id = $request['category_id'];
        $Product->mark_id = $request['mark_id'];

        $Product->save();

        return redirect('adminProducts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Product = Product::find($id);
        return view('product-detail', compact('Product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Marks = Mark::all();
        $Categories = Category::all();
        $Product = Product::find($id);
        return view('editProduct', compact('Marks', 'Categories', 'Product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Product = Product::find($id);

        $this->validate($request, 
            [
                'name' => 'required|min:3|max:100|unique:products,name,'.$Product->id,
                'price' => 'required|numeric|min:1', 
                'stock' => 'required|numeric|min:0', 
                'description' => 'required|min:15', 
                'image' => 'mimes:jpg,jpeg,png,svg,gif', 
                'category_id' => 'required', 
                'mark_id' => 'required' 
            ],

            [
                'name.required' => 'Completar campo nombre',
                'price.required' => 'Completar campo precio',
                'stock.required' => 'Completar campo stock',
                'description.required' => 'Completar campo descripción',
                'category_id.required' => 'Seleccionar categoría',
                'mark_id.required' => 'Seleccionar marca',
                'numeric' => 'En el campo :attribute debe ingresarse un valor numérico',
                'name.min' => 'En el campo :attribute deben ingresarse al menos 3 caracteres',
                'description.min' => 'En el campo :attribute deben ingresarse al menos 15 caracteres',
                'description.min' => 'En el campo :attribute deben ingresarse al menos 15 caracteres',
                'price.min' => 'En el campo :attribute deben ingresarse un valor positivo',
                'stock.min' => 'En el campo :attribute deben ingresarse un valor mayor o igual a 0',
            ]
        );
        
        if(isset($request['image'])){
            @unlink(public_path('product_img/') . $Product->image);
            $imageName = time() . '.' . $request['image']->getClientOriginalExtension();
            $request['image']->move(public_path('product_img/'), $imageName);
            $Product->image = $imageName;
        }


        $Product->name = $request['name'];
        $Product->price = $request['price'];
        $Product->stock = $request['stock'];
        $Product->description = $request['description'];
        $Product->category_id = $request['category_id'];
        $Product->mark_id = $request['mark_id'];

        $Product->save();

        return redirect('adminProducts');
    }

    /**
     * Show the confirmation form for destroying the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $Product = Product::find($id);
        return view('deleteProduct', compact('Product')); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Product = Product::find($id);
        @unlink(public_path('product_img/') . $Product->image);
        $Product->delete();
        return redirect('/adminProducts');
    }

    public function list() // listar productos para el cliente
    {
        $Products = Product::all();
        return view('products', compact('Products'));
    }

}
