@extends('Layouts.admin')
@section('title', 'Edit Category')
@section('content')
    <section class="content">
        <div class="dashboard-wrapper">
           <div class="card">
               <h3 class="card-title"></h3>
                <div class="card-header">
                    <h5>Edit Category</h5>
                </div>
               <form role="form" action="{{route('admin_category_update',['id'=>$data->id])}}" method="post">
                   @csrf
                   <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label>Parent</label>
                                <select class="form-control select2" name="parent_id" style="width: 100%;">
                                    <option value="0" selected="selected">Main Category</option>
                                    @foreach (  $datalist as $rs  )
                                    <option value="{{ $rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif > {{ App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }} </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" value="{{$data->title}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Keywords</label>
                                <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="description" value="{{$data->description}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control select2" name="status" style="width: 100%;">
                                    <option selected="selected">{{$data->status}}</option>
                                    <option >False</option>
                                    <option>True</option>
                                </select>

                            </div>
                        </form>
                       <div class="card-footer">
                           <button type="submit" class="btn btn-primary">Update Category</button>
                       </div>
                   </div>
               </form>
           </div>
        </div>
    </section>
@endsection
