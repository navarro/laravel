
    <h1>
        VIEW EXEMPLO
    </h1>
<ul>
@foreach($categories as $category)
    <li>{{ $category->name }} e {{ $category->description }}</li>

@endforeach
</ul>