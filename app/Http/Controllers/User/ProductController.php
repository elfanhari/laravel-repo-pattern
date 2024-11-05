<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Repositories\ProductRepository;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function __construct(protected ProductRepository $productRepository)
  {
  }

  public function index(Request $request)
  {
    return $this->productRepository->getProduct($request->user()->id);
  }
}
