<?php

namespace App\Actions\Admin\ProductCategory;

use App\Models\ProductCategory;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteProductCategory
{
  use AsAction;

  public function handle($id)
  {
    $product_category = ProductCategory::findOrFail($id)->delete();

    return $product_category;
  }
}
