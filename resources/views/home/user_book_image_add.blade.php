<html>
<head>
    <title>Image Gallery</title>
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendor/bootstrap/css/bootstrap.min.css">
    <link href="{{asset('assets')}}/admin/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/libs/css/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendor/fonts/flag-icon-css/flag-icon.min.css">
</head>
<body>



           <div class="card">
               <form role="form" action="{{route('user_image_store',['book_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                   @csrf
                   <div class="card-body">
                       <h5 class="card-title">Book : {{$data->title}}</h5>
                        <form>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Add Image</button>
                            </div>
                        </form>
                       <div class="table-responsive">
                           <table class="table table-striped table-bordered first">
                               <thead>
                               <tr>
                                   <th>Id</th>
                                   <th>Title</th>
                                   <th>Image</th>
                                   <th>Actions</th>
                               </tr>
                               </thead>
                               <tbody>
                               @foreach (  $images as $rs  )
                                   <tr>
                                       <td>{{ $rs->id}}</td>
                                       <td>{{ $rs->title}}</td>
                                       <td>
                                           @if ($rs->image)
                                               <img src="{{Storage::url($rs->image)}}" height="60" alt="">
                                           @endif
                                       </td>
                                       <td>
                                           <a href="{{route('user_image_delete',['id'=> $rs->id,'book_id'=>$data->id])}}" onclick="return confirm('Record will be Delete! Are you sure?')"><img src="{{asset('assets/admin/images')}}/delete.png" height="25"> </a>
                                       </td>
                                   </tr>
                               @endforeach
                               </tbody>
                           </table>


                   </div>
               </form>
           </div>

</body>
</html>

