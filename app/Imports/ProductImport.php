<?php

namespace App\Imports;

use App\Models\Product;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductImport implements ToModel,WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Product([
            'image' => $row['image'],
            'name' => $row['name'],
            'slug' =>$row['slug'],
            // 'SKU' =>$row['SKU'] ?? null,
            'description' => $row['description'],
            'category_id' => $row['category_id'],
            'stock' => $row['stock'],
            'packsize_id' => $row['packsize_id'],
            'price' => $row['price'],
            'mrp'=>$row['mrp'],
            'sku'=>$row['sku'],
            'stock_status'=>$row['stock_status'],
            'ingredients'=>$row['ingredients'],
            'top_product'=>$row['top_product'],
            'best_product'=>$row['best_product'],
            'brand_id'=>$row['brand_id']
            // 'id' => $row[0],
            // 'name' => $row[1],
            // 'class' => $row[2],
            // 'roll_no' => $row[3],
            // 'address' => $row[4],
            // 'created_at' =>$row[5],
            // 'updated_at' => $row[6]
          ]);
      }
}
