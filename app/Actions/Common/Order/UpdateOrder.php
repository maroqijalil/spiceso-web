<?php

namespace App\Actions\Common\Order;

use App\Models\Order;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateOrder
{
  use AsAction;

  public function handle($fill, $id)
  {
    $order = Order::findOrFail($id)->update($fill);

    return $order;
  }
}
