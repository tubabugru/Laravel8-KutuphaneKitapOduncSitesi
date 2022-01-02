
    @foreach($children as $subcategory)

        <li><a href="{{route('categorybooks',['id'=>$subcategory->id])}}">{{$subcategory->title}}</a> </li>

    @endforeach


