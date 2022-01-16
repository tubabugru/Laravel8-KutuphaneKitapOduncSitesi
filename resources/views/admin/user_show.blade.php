@extends('Layouts.admin')
@section('title', 'User Review Detail')
@section('content')
    <section class="content">
        <div class="dashboard-wrapper">
           <div class="card">
               <div class="card">
               <br><br>
               <div class="card-header">
                    <h5>User Detail</h5>
                   @include('home.message')
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
                                       <tr>
                                           <th rowspan="6" align="center" valign="center">

                                               @if($data->profile_photo_path)
                                                   <img src="{{Storage::url($data->profile_photo_path)}}" height="200" style="border-radius: 10px" alt="">
                                               @endif
                                           </td>
                                           </th>

                                       </tr>
                                       <tr>
                                           <th>Name</th> <td>{{$data->name}}</td>
                                       </tr>
                                       <tr>
                                           <th>Email</th> <td>{{$data->email}}</td>
                                       </tr>
                                       <tr>
                                           <th>Created at</th> <td>{{$data->created_at}}</td>
                                       </tr>
                                       <tr>
                                           <th>Roles</th>
                                           <td>
                                               <table>
                                                   @foreach($data->roles as $row)
                                                       <tr>
                                                           <td>{{$row->name}}</td>
                                                           <td>
                                                               <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}}" onclick="return confirm('Delete! Are you sure?')"> <img src="{{asset('assets/admin/images')}}/delete.png" height="25"></a>
                                                           </td>
                                                       </tr>
                                                   @endforeach
                                               </table>
                                           </td>
                                       <tr>
                                           <th>Add role</th>
                                           <td>
                                               <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                                   @csrf
                                                   <select name="roleid">
                                                       @foreach($datalist as $rs)
                                                           <option value="{{$rs->id}}">{{$rs->name}}</option>
                                                       @endforeach
                                                   </select>
                                                   <button type="submit" class="btn-primary">Add role</button>
                                               </form>
                                           </td>
                                       </tr>

                                   </table>
                               </div>
                           </div>
                       </div>
                   </div>
                   </div>
                   <!-- ============================================================== -->
                   <!-- end basic table  -->
                   <!-- ============================================================== -->
               </div>

             </div>

             <!--<div class="card-body">
                @foreach ($datalist as $rs)
                    <p>{{ $rs->title }}</p>
                @endforeach

             </div>-->


              <div class="card-footer">

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
