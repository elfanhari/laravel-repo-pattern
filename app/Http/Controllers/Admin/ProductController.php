<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index($userId, ProductRepository $productRepository)
  {
    $products = $productRepository->getProduct($userId);
    // $products = $products->toArray(request()); // agar data yang di get adalah hasil mapping
    return $products;
    return view('admin.product.index', [
      'produks' => $products
    ]);
  }
}
