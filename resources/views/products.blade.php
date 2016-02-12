
    <h1>
        VIEW EXEMPLO
    </h1>
<ul>
@foreach($teste as $product)
    <li>{{ $product->name }} ====> Descrição {{ $product->description }}</li>

@endforeach
</ul>