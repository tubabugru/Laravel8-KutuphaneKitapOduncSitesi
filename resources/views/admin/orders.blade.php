@extends('Layouts.admin')
@section('title', 'Admin Order List')
@section('content')
    <section class="content">
        <div class="dashboard-wrapper">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Order List</h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>User</th>
                            <th>Book</th>
                            <th>Book Date</th>
                            <th>Return Date</th>
                            <th>Status</th>
                            <th>Left Days</th>
                            <th>Rezervation Note</th>

                            <th style="..." colspan="3">Actions</th>

                        </tr>
                        </thead>
                        <tbody>
                        @include('home.message')
                        @foreach($datalist as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>
                                    <a href="{{route('admin_user_show',['id'=> $rs->user->id])}}" >
                                        {{ $rs->user->name}}
                                    </a>
                                </td>

                                <td> <a href="{{route('book',['id'=> $rs->book->id])}}" target="_blank">
                                        {{$rs->book->title}}</a>
                                </td>
                                <td>{{date("d-m-Y",strtotime($rs->bookdate))}}</td>
                                <td>{{date("d-m-Y",strtotime($rs->returndate))}}</td>
                                <td>{{$rs->status}}</td>
                                <td>{{$rs->days}}</td>
                                <td>{{$rs->note}}</td>
                                <td>
                                    <a href="{{route('admin_order_edit',['id'=> $rs->id])}}">
                                        <img src="{{asset('assets/admin/images')}}/edit.jpg" height="25"></a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>

                    </table>

                </div>
                <div class="card-footer">
                    <h5>Footer</h5>
                </div>
            </div>
        </div>
    </section>
@endsection
