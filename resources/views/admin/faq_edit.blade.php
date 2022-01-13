@extends('Layouts.admin')
@section('title', 'Edit Book')
<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>


@section('content')
    <section class="content">
        <div class="dashboard-wrapper">
           <div class="card">
               <h3 class="card-title"></h3>
                <div class="card-header">
                    <h5>Edit Book</h5>
                </div>
               <form role="form" action="{{route('admin_faq_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                   @csrf
                   <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label>Position</label>
                                <input type="number" name="position" value="{{$data->position}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Question</label>
                                <input type="text" name="question" value="{{$data->question}}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Answer</label>
                                <textarea id="answer" name="answer">{{$data->answer}}</textarea>
                                <script>
                                    CKEDITOR.replace( 'answer' );
                                </script>
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
