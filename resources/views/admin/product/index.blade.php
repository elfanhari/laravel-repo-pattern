<ul>
  @foreach ($produks as $product)
    <li>{{ $product['name'] }} <br> Harga:{{ $product['price'] }} <br> Milik : {{ $product['userName'] }}</li>
  @endforeach
</ul>
