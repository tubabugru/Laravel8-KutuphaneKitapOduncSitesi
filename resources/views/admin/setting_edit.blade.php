@extends('Layouts.admin')
@section('title', 'Edit Setting')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

@section('content')
 <form role="form" action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
     <section class="content">
        @csrf
        <div class="dashboard-wrapper">
           <div class="container-fluid  dashboard-content">
              <div class="card-body">
                <div class="row">
                   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
                       <div class="section-block">
                             <h5 class="section-title">Edit Setting</h5>
                       </div>
                     <div class="simple-card">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active border-left-0" id="general-tab-simple" data-toggle="tab" href="#general-simple" role="tab" aria-controls="general" aria-selected="true">General</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="smtp-tab-simple" data-toggle="tab" href="#smtp-simple" role="tab" aria-controls="smtp" aria-selected="false">Smtp</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="social-tab-simple" data-toggle="tab" href="#social-simple" role="tab" aria-controls="social" aria-selected="false">Social Media</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="about-tab-simple" data-toggle="tab" href="#about-simple" role="tab" aria-controls="about" aria-selected="false">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab-simple" data-toggle="tab" href="#contact-simple" role="tab" aria-controls="contact" aria-selected="false">Contact Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="references-tab-simple" data-toggle="tab" href="#references-simple" role="tab" aria-controls="references" aria-selected="false">References</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="general-simple" role="tabpanel" aria-labelledby="general-tab-simple">
                                    <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
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
                                        <label>Company</label>
                                        <input type="text" name="company" value="{{$data->company}}"  class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" value="{{$data->address}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Fax</label>
                                        <input type="text" name="fax" value="{{$data->fax}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" value="{{$data->email}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                          <label>Status</label>
                                           <select class="form-control select2" name="status" style="width: 100%;">
                                                 <option selected="selected">{{$data->status}}</option>
                                                 <option>True</option>
                                                <option>False</option>
                                           </select>
                                    </div>
                            </div>
                            <div class="tab-pane fade" id="smtp-simple" role="tabpanel" aria-labelledby="smtp-tab-simple">
                                <div class="form-group">
                                    <label>Smtpserver</label>
                                    <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Smtpmail</label>
                                    <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Smtppassword</label>
                                    <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Smtpport</label>
                                    <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control">
                                </div>
                            </div>

                            <div class="tab-pane fade" id="social-simple" role="tabpanel" aria-labelledby="social-tab-simple">
                                <div class="form-group">
                                    <label>Facebook</label>
                                    <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Instagram</label>
                                    <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Twitter</label>
                                    <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Youtube</label>
                                    <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="about-simple" role="tabpanel" aria-labelledby="about-tab-simple">
                                <div class="form-group">
                                    <label>Aboutus</label>
                                    <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                                    <script>
                                        $('#aboutus').summernote({
                                            placeholder: 'Hello Bootstrap 4',
                                            tabsize: 2,
                                            height: 100
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact-simple" role="tabpanel" aria-labelledby="contact-tab-simple">
                                <div class="form-group">
                                    <label>Contact</label>
                                    <textarea id="contact" name="contact">{{$data->contact}}</textarea>
                                    <script>
                                        $('#contact').summernote({
                                            placeholder: 'Hello Bootstrap 4',
                                            tabsize: 2,
                                            height: 100
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="references-simple" role="tabpanel" aria-labelledby="references-tab-simple">
                                <div class="form-group">
                                    <label>References</label>
                                    <textarea id="references" name="references">{{$data->references}}</textarea>
                                    <script>
                                        $('#references').summernote({
                                            placeholder: 'Hello Bootstrap 4',
                                            tabsize: 2,
                                            height: 100
                                        });
                                    </script>
                                </div>
                            </div>

                       <div class="card-footer">
                           <button type="submit" class="btn btn-primary">Update Setting</button>
                      </div>
                     </div>
                   </div>
                </div>
             </div>
          </div>
        </div>
     </section>
 </form>
@endsection

