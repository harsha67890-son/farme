<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Product::all();
  
        return Product::select('id','name','slug','category_id','stock','packsize_id','price','description','mrp','SKU','stock_status','ingredients','top_product','brand_id')->get();
    }
    public function headings():array
    {
        return ['id','name','slug','category_id','stock','packsize_id','price','description','mrp','SKU','stock_status','ingredients','top_product','brand_id'];
    }
}
