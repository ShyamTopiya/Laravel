<x-layout>
    <h1 class="text-3xl">Product Detail</h1>
    <h1 class="text-3xl bg-blue-500 p-4 rounded-xl">{{$product['name']}}</h1>
    <h1 class="text-3xl">{{$product['price']}}</h1>
    <a href="/products">Go Back</a>
</x-layout>