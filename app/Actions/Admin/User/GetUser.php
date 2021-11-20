<?php

namespace App\Actions\Admin\User;

use App\Models\User;
use Lorisleiva\Actions\Concerns\AsAction;

class GetUser
{
  use AsAction;

  public function handle($id)
  {
    $user = User::findOrFail($id);

    return $user;
  }
}
