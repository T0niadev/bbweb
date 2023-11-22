@extends ('Admin.layout.app')


@section ('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <div class="mt-5">
                        <h4 class="card-title float-left mt-2">Blog</h4> <a href="/admin/blog/create" class="btn btn-primary float-right veiwbutton">Add Blog</a> </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <div class="card"> <img class="card-img" src="{{ asset('images/blogs/'. $blog->image) }}" width="200" height="300" alt="">
                        
                        <div class="card-body">
                            <h4 class="card-title">{{$blog->title}}</h4>
                            <p class="card-text mt-3">{{$blog->description}} </p> <a href="{{ url('admin/blog/edit', $blog->id) }}" class="btn btn-info">Edit </a> </div>
                    </div>
                </div>
            @endforeach
     
        </div>
    </div>
</div>
@endsection