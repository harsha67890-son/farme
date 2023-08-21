<?php

namespace App\Http\Livewire\Admin\Products;

use Carbon\Carbon;
use App\Models\Brand;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\Packsize;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;


class AddProductComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $mrp;
    public $price;
    public $SKU;
    public $stock_status;
    public $ingredients;
    public $stock;
    public $image;
    public $category_id;
    public $brand_id;
    public $packsize_id;

    public function mount()
    {
        $this->stock_status = 'instock';
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name, '-');
    }
    public function addProduct()
    {
        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->mrp = $this->mrp;
        $product->price = $this->price;
        $product->SKU = $this->SKU;
        $product->stock_status = $this->stock_status;
        $product->ingredients = $this->ingredients;
        $product->stock = $this->stock;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('products',$imageName);
        $product->image = $imageName;
        $product->category_id = $this->category_id;
        $product->brand_id = $this->brand_id;
        $product->packsize_id = $this->packsize_id;
        // dd($product);
        $product->save();
        session()->flash('message','Product has been created successfully');

    }
    public function render()
    {
        $categorys = Category::all();
        $brands = Brand::all();
        $packsizes = Packsize::all();
        return view('livewire.admin.products.add-product-component',['categorys'=>$categorys,'brands'=>$brands,'packsize'=>$packsizes])->layout('layouts.admin');
    }
}
