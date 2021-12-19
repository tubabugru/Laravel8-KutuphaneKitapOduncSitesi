@extends('Layouts.admin')
@section('title', 'Book List')
@section('content')
    <section class="content">
        <div class="dashboard-wrapper">
           <div class="card">
               <div class="card">
               <br><br>
               <div class="card-header">
                    <h5>Book List</h5>
                   <a href="{{route('admin_book_add')}}" type="button" class="btn btn-block btn-info" style="width: 120px" >Add Book</a>
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
                                           <th>Category</th>
                                           <th>Title</th>
                                           <th>Author</th>
                                           <th>Publisher</th>
                                           <th>Publishing</th>
                                           <th>Pages</th>
                                           <th>Image</th>
                                           <th>Image Gallery</th>
                                           <th>Status</th>
                                           <th>Edit</th>
                                           <th>Delete</th>
                                       </tr>
                                       </thead>

                                       <tbody>
                                       @foreach (  $datalist as $rs  )
                                           <tr>
                                               <td>{{ $rs->id}}</td>
                                               <td>{{ $rs->category_id}}</td>
                                               <td>{{ $rs->title}}</td>
                                               <td>{{ $rs->author}}</td>
                                               <td>{{ $rs->publisher}}</td>
                                               <td>{{ $rs->publishing}}</td>
                                               <td>{{ $rs->pages}}</td>
                                               <td>
                                                  @if ($rs->image)
                                                      <img src="{{Storage::url($rs->image)}}" height="30" alt="">
                                                  @endif
                                               </td>
                                               <td><a href="{{route('admin_image_add',['book_id'=> $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"> <img src="{{asset('assets/admin/images')}}/gallery.jpg" height="25"></a></td>

                                               <td>{{ $rs->status}}</td>
                                               <td><a href="{{route('admin_book_edit',['id'=> $rs->id])}}"> <img src="{{asset('assets/admin/images')}}/edit.jpg" height="25"> </a></td>
                                               <td><a href="{{route('admin_book_delete',['id'=> $rs->id])}}" onclick="return confirm('Delete! Are you sure?')"> <img src="{{asset('assets/admin/images')}}/delete.png" height="25"> </a></td>
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
