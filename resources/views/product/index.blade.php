<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Каталог товаров</h1>
    <p>{{ $buyer -> user -> name }}</p>
    <p>{{ $buyer -> adress }}</p>
    <div class="container">
        
        @foreach($categories as $category)
        <a href="{{ route('products.create') }}">Создать продукт</a>
        <h2>{{ $category -> name }}</h2>
     
        @foreach($products as $product)
         <a href="{{ route('products.show', $product -> id) }}">
           <div class="card">
                <p>{{ $product -> name }}</p>
                <p> {{ $product -> description }} </p>
                <p>Цена: {{ $product -> price}} &#8381 </p>
                <p>Категория: {{ $product -> category -> name  }}</p>
                <form method="post" action="{{route('products.destroy', $product -> id)}}">
                    @csrf
                    @method('delete')
                    <button type="submit"> X </button>
                </form>
           </div>
           </a>
@endforeach
        @endforeach
        
    </div>
</body>
</html>