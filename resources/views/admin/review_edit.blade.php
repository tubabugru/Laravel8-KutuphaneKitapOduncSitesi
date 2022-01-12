@extends('Layouts.admin')
@section('title', 'Review Edit')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


@section('content')
    <section class="content">
        <div class="dashboard-wrapper">
            <div class="card">
                <div class="card-header">
                    <h3>Review Detail</h3>
                    @include('home.message')
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <form role="form" action="{{route('admin_review_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <table class="table table-striped table-bordered first">

                                        <tr>
                                            <th>Id</th><td>{{ $data->id}}</td>
                                        </tr>
                                        <th>Name</th><td>{{ $data->user->name}}</td>
                                        </tr>
                                        </tr>
                                        <th>Book</th><td>{{ $data->book->title}}</td>
                                        <tr>
                                        </tr>
                                        <th>Subject</th><td>{{ $data->subject}}</td>
                                        <tr>
                                        </tr>
                                        <th>Review</th>  <td>{{ $data->review}}</td>
                                        <tr>
                                        </tr>
                                        <th>IP</th>  <td>{{ $data->IP}}</td>
                                        <tr>
                                        </tr>
                                        <th>Created Date</th>  <td>{{ $data->created_at}}</td>
                                        <tr>
                                        </tr>
                                        <th>Updated Date</th>  <td>{{ $data->updated_at}}</td>
                                        <tr>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>
                                                <select name="status">
                                                    <option selected>{{$data->status}}</option>
                                                    <option>True</option>
                                                    <option>False</option>
                                                </select>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary">Update Review</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>

                            </div>
                            </form>
                        </div>
                    </div>
    </section>
@endsection
