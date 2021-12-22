@extends('Layouts.admin')
@section('title', 'Category List')
@section('content')
    <section class="content">
        <div class="dashboard-wrapper">
           <div class="card">
               <div class="card">
               <br><br>
               <div class="card-header">
                    <h5>Category List</h5>
                   <a href="{{route('admin_category_add')}}" type="button" class="btn btn-block btn-info" style="width: 120px" >Add Category</a>
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
                                           <th>Parent</th>
                                           <th>Title</th>
                                           <th>Status</th>
                                           <th>Edit</th>
                                           <th>Delete</th>
                                       </tr>
                                       </thead>
                                       <tbody>
                                       @foreach (  $datalist as $rs  )
                                           <tr>
                                               <td>{{ $rs->id}}</td>
                                               <td>
                                                   {{ App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}
                                               </td>


                                               <td>{{ $rs->title}}</td>
                                               <td>{{ $rs->status}}</td>
                                               <td><a href="{{route('admin_category_edit',['id'=> $rs->id])}}">Edit</a></td>
                                               <td><a href="{{route('admin_category_delete',['id'=> $rs->id])}}" onclick="return confirm('Delete! Are you sure?')">Delete</td>
                                           </tr>
                                       @endforeach
                                       </tbody>

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
                <h5>Footer</h5>
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
