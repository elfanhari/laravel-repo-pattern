<?php

namespace App\Repositories;

use App\Http\Resources\ProductUserResource;
use App\Models\Product;
use App\Models\User;

class ProductRepository
{

  public function getProduct($id)
  {
    $user = User::find($id);
    $product = Product::select([ 'id', 'user_id', 'name', 'price', 'desc', 'posted' ])
      ->whereBelongsTo($user)
      ->orderBy('posted', 'desc')
      ->with('user:id,name')
      ->paginate(10);
    return ProductUserResource::collection($product);
  }

}
