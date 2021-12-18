@extends('Layouts.admin')
@section('title', 'Edit Book')
@section('content')
    <section class="content">
        <div class="dashboard-wrapper">
           <div class="card">
               <h3 class="card-title"></h3>
                <div class="card-header">
                    <h5>Edit Book</h5>
                </div>
               <form role="form" action="{{route('admin_book_update',['id'=>$data->id])}}" method="post">
                   @csrf
                   <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label>Parent</label>
                                <select class="form-control select2" name="category_id" style="width: 100%;">
                                    @foreach (  $datalist as $rs  )
                                        <option value="{{ $rs->id}}" @if ($rs->id == $data->category_id) selected="selected" @endif > {{$rs->title}} </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" value="{{$data->title}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Keywords</label>
                                <input type="text" name="keywords" value="{{$data->keywords}} " class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="description" value="{{$data->description}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Author</label>
                                <input type="text" name="author" value="{{$data->author}}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Publisher</label>
                                <input type="text" name="publisher" value="{{$data->publisher}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Publishing</label>
                                <input type="number" name="publishing" value="{{$data->publishing}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Pages</label>
                                <input type="number" name="pages" value="{{$data->pages}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Detail</label>
                                <input type="text" name="detail" value="{{$data->detail}}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control select2" name="status" style="width: 100%;">
                                    <option selected="selected">{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>

                            </div>
                        </form>
                       <div class="card-footer">
                           <button type="submit" class="btn btn-primary">Update Book</button>
                       </div>
                   </div>
               </form>
           </div>
        </div>
    </section>
@endsection
