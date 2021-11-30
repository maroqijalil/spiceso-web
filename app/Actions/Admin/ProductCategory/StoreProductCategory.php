<?php

namespace App\Actions\Admin\ProductCategory;

use App\Models\ProductCategory;
use Lorisleiva\Actions\Concerns\AsAction;

class StoreProductCategory
{
  use AsAction;

  public function handle($fill)
  {
    $product_durability = ProductCategory::create($fill);

    return $product_durability;
  }
}
