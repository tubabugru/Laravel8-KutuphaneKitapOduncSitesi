@foreach($children as $subcategory)
    <div class="panel panel-default">
        <div class="panel-heading">
                       @if(count($subcategory->children))
                        <li > {{$subcategory->title}}</li>
                            <ul class="panel-title">
                                   @include('home.categorytree',['children'=> $subcategory->children])
                             </ul>
                        @else
                             <li><a href="#">{{$subcategory->title}}</a></li>
                       @endif

        </div>
    </div>


@endforeach
