@php
    $parentCategories= \App\Http\Controllers\HomeController::categorylist();
@endphp
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="left-sidebar">
                <h2>Category</h2>
                <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                    <?php $menu=0; ?>
                    @foreach($parentCategories as $rs)

                        <div class="panel panel-default">
                            <div class="panel-heading">

                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#menu<?php echo $menu; ?>">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        {{$rs->title}}
                                    </a>
                                </h4>

                            </div>

                    <?php if(!count($rs->children)){ ?>

                          <?php } else{ ?>
                             <div id="menu<?php echo $menu; ?>" class="panel-collapse collapse">
                                <div class="panel-body">
                                    @if(count($rs->children))
                                        @include('home.categorytree',['children'=> $rs -> children])
                                    @endif
                                </div>
                             </div>
                          <?php }?>


                        </div>
                        <?php $menu++; ?>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

