@extends ('Admin.layout.app')



@section ('content')
    <style type="text/css">
        .main-section{
            margin:0 auto;
            padding: 20px;
            margin-top: 100px;
            background-color: #fff;
            box-shadow: 0px 0px 20px #c1c1c1;
        }
        .fileinput-remove,
        .fileinput-upload{
            display: none;
        }
        </style>

        <style type="text/css">
        input[type=file]{
            display: inline;
        }
        #image_preview{
            
            column-count:2;
            padding: 20px;
        }

        #image_preview img{
            width: 150px;
            padding: 10px;
        }
    </style>
    <div class="page-wrapper">
        <div class="content container-fluid">
        <div class="page-header">
                   
            <div class="row align-items-center">
                    
                    <div class="col">
                        <div class="mt-5">
                            <h3 class="card-title float-left mt-2">Gallery</h3>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="col-lg-12">

                

             <a href="{{url('/admin/gallery/create')}}" class="btn btn-primary"> Add New Photos</a>
            </div>
            <hr>

            <div class="row">
                
               
                
                <div class="form-group">


                    <span><label ><b><i>Gallery Images</i></b></label></span>
                    <br><br>

                            <div id="image_preview" class="colum">





                               @foreach ($galleries as $gallery)

                                <img src="{{ asset('images/gallery/'. $gallery->image) }}" width="100" height="auto" id="" class="img">
                                <a href="{{ url('admin/gallery/edit', $gallery->id) }}" class="del" id="" ><i class="fa fa-edit" style="color:purple;"></i></a>
                                @endforeach






                            </div>
                            
                    <br>
                    <a href="/packages" class="btn btn-primary">Back</a>
                </div>

            </div>
        </div>
    <br>




    </div>
@endsection