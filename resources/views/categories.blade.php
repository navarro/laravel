
    <h1>
        VIEW EXEMPLO
    </h1>
<ul>
@foreach($categories as $category)
    <li>{{ $category->name }} ====> Descrição {{ $category->description }}</li>

@endforeach
</ul>