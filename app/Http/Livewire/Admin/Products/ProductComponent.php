<?php

namespace App\Http\Livewire\Admin\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Exports\ProductExport;
use App\Imports\ProductImport;
use App\Imports\UpdateProductImport;
use Maatwebsite\Excel\Facades\Excel;


class ProductComponent extends Component
{

     use WithFileUploads;

    public $file;
    public $file2;

    public function mount()
    {
        $this->file2;
    }

    public function submit()
    {
        // $filename = 'product.xlsx';
        // $path = public_path('file/' .$filename);
        // dd($path);
        // return response()->upload($path, $filename, [
        //     'Content-Type' => 'application/vnd.ms-excel',
        //     'Content-Disposition' => 'inline; filename="' . $filename . '"'
        // ]);

        // $validatedData = $this->validate([
        //     'file' => 'required|mimes:xlsx, xls, jpeg, ods',
        //     // 'file2' => 'required|mimes:xlsx, xls',
        // ]);
        // $this->import->store('uploads/' . $this->filename, 'public');

        // Excel::import(new ProductImport, $this->file, \Maatwebsite\Excel\Excel::XLSX);

        (Excel::import(new ProductImport, $this->file));
        // dd($import);
        // Excel::import(new ProductImport, storage_path('product.xlsx'));

       
        session()->flash('message', 'File uploaded successfully.');
        // dd($this->file);
    }


    public function export()
    {
        return Excel::download(new ProductExport, "product.xlsx");
    }

    public function importUpdate()
    {
        // dd($this->file2);
        //  $products = Excel::toCollection(new UpdateProductImport(), $this->file2('UpdateProductImport')->store('files')); //Correct
        // dd($products);

        $products=Excel::import(UpdateProductImport, $this->file2);
        // ->raw('product_name', $this->UpdateProductImport)->update(['product_name'=> $this->file2]);

        // $products =   Excel::import(new UpdateProductImport, $this->file2('UpdateProductImport')->store('files'));
        foreach ($products as $product) {
            if($product->filter()->isNotEmpty()){
                Product::where('id', (string) $product[0])->update([
                'id' => $product[0],
                'image' => $product[1],
                'product_name' => $product[2],
                'category' => $product[3],
                'quantity' => $product[4],
                'size' => $product[5],        
                'price' =>$product[6]
            ]);
            }
        }
        // dd($products);
        session()->flash('message', 'File updated successfully.');
    }

    public function render()
    {
        $products = Product::all()->unique('name');
        return view('livewire.admin.products.product-component',['products'=>$products])->layout('layouts.admin');
    }
}
