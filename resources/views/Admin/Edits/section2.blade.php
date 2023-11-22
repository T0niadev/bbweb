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
                  
                        <form method="Post" action="{{ url('/admin/section2/update',$section2->id) }}" name="post" enctype="multipart/form-data">
                           @csrf
                           @method('PUT')  

                           
                        
                            <div class="form-group">
                              <label>Upload Image 1</label>


                                <div class="form-group">
                                <input type="file" id="uploadFile" name="image1">
                                    <br> <br>

                                    <div id="image_preview">
                                        <img src="{{ asset('images/section2/'. $section2->image1) }}"  width="100" height="auto">

                                    </div>
                                </div>    
                            </div>


                           
                            <div class="form-group">
                                <label class="control-label" for="title">Text 1:</label>
                                <input type="text" name="text1" class="form-control"  placeholder="Post Title ..."  value="{{ $section2->text1 }}">
                            
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="author">Text 2:</label>
                                <input type="text" name="text2" class="form-control" placeholder="Post author ..." value="{{ $section2->text2}}">
                            
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="author">Text 3:</label>
                                <input type="text" name="text3" class="form-control" placeholder="Post author ..."value="{{ $section2->text3 }}">
                            
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="author">Mission:</label>
                                <input type="text" name="mission" class="form-control" placeholder="Post author ..." value="{{ $section2->mission }}">
                            
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="author">Vision:</label>
                                <input type="text" name="vision" class="form-control" placeholder="Post author ..." value="{{ $section2->vision }}">
                            
                            </div>


                            <div class="form-group">
                              <label>Upload Image 2</label>


                                <div class="form-group">
                                <input type="file" id="uploadFile" name="image2">
                                    <br> <br>

                                    <div id="image_preview">
                                        <img src="{{ asset('images/section2/'. $section2->image2) }}"  width="100" height="auto">

                                    </div>
                                </div>    
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


