@extends ('Admin.layout.app')

@section ('content')

    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                
                <div class="row align-items-center">
                    
                    <div class="col">
                        <div class="mt-5">
                            <h3 class="card-title float-left mt-2">Edit Blog</h3>
                        </div>
                    </div>
                </div>
            </div>
                <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-6">
                    <h1></h1>
                  
                        <form method="Post" action="{{ url('/admin/section4/update',$section4->id) }}" name="post" enctype="multipart/form-data">
                           @csrf
                           @method('PUT')  
                        

                            <div class="form-group">
                                <label class="control-label" for="title">Video link:</label>
                                <input type="text" name="video" class="form-control"  placeholder="Post Title ..."  value="{{ $section4->video }}">
                            
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="author">Heading:</label>
                                <input type="text" name="heading" class="form-control" placeholder="Post author ..." value="{{ $section4->heading}}">
                            
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="author">Text:</label>
                                <input type="text" name="text" class="form-control" placeholder="Post author ..."value="{{ $section4->text }}">
                            
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="author">Learn More Link:</label>
                                <input type="text" name="link" class="form-control" placeholder="Post author ..." value="{{ $section4->link }}">
                            
                            </div>

                            <!-- <div class="form-group">
                                <label class="control-label" for="description">Description
                                </label> 
                                <textarea id="summernote" name="description" class="form-control" class="textarea" style="height:10px;">a</textarea>

                            
                            
                            </div> -->

                            <div class="form-group">
                                <button class="btn btn-success" type="submit">Save and post</button>

                                <a href="/admin/dashboard" class="btn btn-primary">Back</a>
                           </div>

                        </form>

                        <br>


                      
                    </div>
                    <!-- /.col-sm-4 -->
                </div>
                <!-- /.row -->
            
            </div>
        </div>    
    </div>

@endsection


