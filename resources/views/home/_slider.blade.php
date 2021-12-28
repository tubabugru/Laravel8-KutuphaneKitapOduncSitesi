
<section id="slider"  ><!--slider-->
    <div  class="container" >
        <div class="row" >
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>
                    @php
                        $i=0;
                    @endphp
                    <div class="carousel-inner">
                        @foreach($slider as $rs)
                            @php
                                $i+=1;
                            @endphp


                            <div class="item @if($i==1) active @endif">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-REZERVASYON</h1>
                                    <h2>{{$rs->title}}</h2>
                                    <p> {{$rs->author}} </p>
                                    <a href="{{route('book',['id'=>$rs->id])}}"  class="btn btn-default get">Şimdi Rezarvasyon Yap!</a>
                                </div>
                                <div class="col-sm-6 ">
                                    <img src="{{ \Illuminate\Support\Facades\Storage::url($rs->image) }}" height="441" class="girl img-responsive" alt="" />
                                    <img src="images/home/pricing.png"  class="pricing" alt="" />
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->

