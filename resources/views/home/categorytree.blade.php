<ul>
    @foreach($children as $subcategory)
        <li> {{$subcategory->title}} </li>
    @endforeach
</ul>

