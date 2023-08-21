<?php

namespace App\Imports;

use App\Models\Product;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;

class UpdateProductImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Product([
            //   'id' => $row[0],
              'image' => $row[0],
              'name' => $row[1],
              'description' => $row[2],
              'category_id' => $row[3],
              'stock' =>$row[4],
              'packsize_id' => $row[5],
              'price' =>$row[6],
              'mrp' =>$row[7],
              'SKU' =>$row[8],
              'stock_status' =>$row[9],
              'ingredients' =>$row[10],
              'top_product' =>$row[11],
              'best_product' =>$row[12],
              'brand_id' =>$row[13],
        ]);
    }

    public function headings():array
    {
    return ['image','name', 'description', 'category_id', 'stock', 'packsize_id',
'price','mrp','SKU','stock_status','ingredients','top_product','best_product','brand_id'];
}
}
