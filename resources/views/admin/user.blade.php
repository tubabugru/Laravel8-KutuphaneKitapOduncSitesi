@extends('Layouts.admin')
@section('title', 'User List')
@section('content')
    <section class="content">
        <div class="dashboard-wrapper">
            <div class="card">
                <div class="card">
                    <br><br>
                    <div class="card-header">
                        <h5>User List</h5>

                    </div>
                    <!-- ============================================================== -->
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- basic table  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered first">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Roles</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            @foreach (  $datalist as $rs  )
                                                <tr>
                                                    <td>{{ $rs->id}}</td>
                                                    <td>
                                                        @if($rs->profile_photo_path)
                                                            <img src="{{Storage::url($rs->profile_photo_path)}}" height="50" style="border-radius: 10px" alt="">
                                                        @endif
                                                    </td>
                                                    <td>{{ $rs->name}}</td>
                                                    <td>{{ $rs->email}}</td>
                                                    <td>@foreach($rs->roles as $row)
                                                            {{$row->name}},
                                                        @endforeach
                                                        <a href="{{route('admin_user_roles',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                            <i class="nav icon fas fa-plus-circle"></i>
                                                        </a>
                                                    </td>
                                                    <td><a href="{{route('admin_user_edit',['id'=> $rs->id])}}"> <img src="{{asset('assets/admin/images')}}/edit.jpg" height="25"> </a></td>
                                                    <td><a href="{{route('admin_user_delete',['id'=> $rs->id])}}" onclick="return confirm('Delete! Are you sure?')"> <img src="{{asset('assets/admin/images')}}/delete.png" height="25"> </a></td>
                                                </tr>
                                            @endforeach
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


        <!--<div class="card-body">
                @foreach ($datalist as $rs)
            <p>{{ $rs->title }}</p>
                @endforeach

            </div>-->


            <div class="card-footer">
                <h5></h5>
            </div>
        </div>
        </div>
    </section>
@endsection

@section('footer')
    <script src="{{asset('assets')}}/admin/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="{{asset('assets')}}/admin/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="{{asset('assets')}}/admin/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="{{asset('assets')}}/admin/libs/js/main-js.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>

@endsection
