@extends('Layouts.admin')
@section('title', 'Admin Order List')

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
                            <form role="form" action="{{route('admin_order_update',['id'=>$data->id])}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <table class="table table-striped table-bordered first">

                                    <tr>
                                        <th>Id</th>
                                        <td>{{ $data->id}}</td>
                                    </tr>
                                    <th>Name</th>
                                    <td>{{ $data->user->name}}</td>
                                    </tr>
                                    </tr>
                                    <th>Book</th>
                                    <td>{{ $data->book->title}}</td>
                                    <tr>
                                    </tr>
                                    <th>Book Date</th>
                                    <td>{{ $data->bookdate}}</td>
                                    <tr>
                                    </tr>
                                    <th>Return Date</th>
                                    <td>{{ $data->returndate}}</td>
                                    <tr>
                                    </tr>
                                    <th>Days</th>
                                    <td>{{ $data->days}}</td>
                                    <tr>
                                    </tr>
                                    <th>Note</th>
                                    <td>{{ $data->note}}</td>
                                    <tr>
                                    </tr>
                                    <th>IP</th>
                                    <td>{{ $data->IP}}</td>
                                    <tr>
                                    </tr>
                                    <th>Created Date</th>
                                    <td>{{ $data->created_at}}</td>
                                    <tr>
                                    </tr>
                                    <th>Updated Date</th>
                                    <td>{{ $data->updated_at}}</td>
                                    <tr>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>{{$data->status}}
                                            <select name="status">
                                                <option @if($data->status=='New') selected @endif value="New">New</option>
                                                <option @if($data->status=='Accepted') selected @endif value="Accepted">Accepted</option>
                                                <option @if($data->status=='Canceled') selected @endif value="Canceled" >Canceled</option>
                                                <option @if($data->status=='Completed') selected @endif value="Completed">Completed</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Note</th>
                                        <td><textarea name="note"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Update Order</button>
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
