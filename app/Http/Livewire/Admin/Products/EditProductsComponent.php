<?php

namespace App\Http\Livewire\Admin\Products;

use Carbon\Carbon;
use App\Models\Brand;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\Packsize;
use Livewire\WithFileUploads;

class EditProductsComponent extends Component
{
    use WithFileUploads;

    public $product_id;
    public $name;
    public $slug;
    public $short_description;
    public $description;

    public $image;
    public $newimage;

    public $mrp;
    public $price;
    public $SKU;
    public $stock_status;
    public $ingredients;
    public $stock;
    // public $image;
    public $category_id;
    public $brand_id;
    public $packsize_id;

    public function mount($product_id)
    {
        $this->product_id = $product_id;
        $products = Product::where('id', $product_id)->first();
        // dd($products);
        $this->product_id = $products->id;
        $this->name = $products->name;
        $this->slug = $products->slug;
        $this->short_description = $products->short_description;
        $this->description = $products->description;
        $this->mrp = $products->mrp;
        $this->price = $products->price;
        $this->SKU = $products->SKU;
        $this->stock_status = $products->stock_status;
        $this->ingredients = $products->ingredients;
        $this->stock = $products->stock;
        $this->image = $products->image;
        $this->images = explode(',', $products->images);
        $this->category_id = $products->category_id;
        $this->brand_id = $products->brand_id;
        $this->packsize_id = $products->packsize_id;
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name, '-');
    }

    public function updateProducts()
    {
        $products = Product::find($this->product_id);
        $products->name = $this->name;
        $products->slug = $this->slug;  
        $products->short_description = $this->short_description;
        $products->description = $this->description;
        $products->mrp = $this->mrp;
        $products->price = $this->price;
        $products->SKU = $this->SKU;
        $products->stock_status = $this->stock_status;
        $products->ingredients = $this->ingredients;
        $products->stock = $this->stock;
        if ($this->newimage) {
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('products', $imageName);
            $products->image = $imageName;
        }
        $products->category_id = $this->category_id;
        $products->brand_id = $this->brand_id;
        $products->packsize_id = $this->packsize_id;
        $products->update();
    }

    public function render()
    {
        $categorys = Category::all();
        $brands = Brand::all();
        $packsize = Packsize::all();
        return view('livewire.admin.products.edit-products-component', ['categorys' => $categorys, 'brands' => $brands, 'packsize' => $packsize])->layout('layouts.admin');
    }
}
