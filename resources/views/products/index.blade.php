    <h1 class="text-3xl bg-blue-500 p-4 rounded-xl">Product Page</h1>
    @foreach ($products as $product)
        <li>
            <a href="/products/{{$product['id']}}">{{$product['name']}}</a>
        </li>
    @endforeach