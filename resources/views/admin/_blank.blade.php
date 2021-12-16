@extends('Layouts.admin')
@section('title', 'Admin Panel Home Page')
@section('content')
    <section class="content">
        <div class="dashboard-wrapper">
           <div class="card">
               <h3 class="card-title">Title</h3>
                <div class="card-header">
                    <h5>Header</h5>
                </div>
                <div class="card-body">
                    <h5>Body</h5>
                    {{datalist}}
                </div>
            <div class="card-footer">
                <h5>Footer</h5>
            </div>
           </div>
        </div>
    </section>
@endsection
