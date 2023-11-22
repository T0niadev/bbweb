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
                  
                        <form method="Post" action="{{ url('/admin/section3/update',$section3->id) }}" name="post" enctype="multipart/form-data">
                           @csrf
                           @method('PUT')  

                            <div class="form-group">
                                <label class="control-label" for="author">Details:</label>
                                <input type="text" name="details" class="form-control" placeholder="Post author ..." value="{{ $section3->details }}">
                            
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="author">Heading 1:</label>
                                <input type="text" name="heading1" class="form-control" placeholder="Post author ..." value="{{ $section3->heading1 }}">
                            
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="author">Text 1:</label>
                                <input type="text" name="text1" class="form-control" placeholder="Post author ..." value="{{ $section3->text1 }}">
                            
                            </div>
                        
                            <div class="form-group">
                              <label>Upload Image 1</label>


                                <div class="form-group">
                                <input type="file" id="uploadFile" name="image1">
                                    <br> <br>

                                    <div id="image_preview">
                                        <img src="{{ asset('images/section3/'. $section3->image1) }}"  width="100" height="auto">

                                    </div>
                                </div>    
                            </div>

                            
                            <div class="form-group">
                                <label class="control-label" for="author">Heading 2:</label>
                                <input type="text" name="heading2" class="form-control" placeholder="Post author ..." value="{{ $section3->heading2 }}">
                            
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="author">Text 2:</label>
                                <input type="text" name="text2" class="form-control" placeholder="Post author ..." value="{{ $section3->text2}}">
                            
                            </div>

                            <div class="form-group">
                            <label>Upload Image 2</label>


                                <div class="form-group">
                                <input type="file" id="uploadFile" name="image2">
                                    <br> <br>

                                    <div id="image_preview">
                                        <img src="{{ asset('images/section3/'. $section3->image2) }}" width="100" height="auto">

                                    </div>
                                </div>    
                            </div>


                            <div class="form-group">
                                <label class="control-label" for="author">Heading 3:</label>
                                <input type="text" name="heading3" class="form-control" placeholder="Post author ..." value="{{ $section3->heading3 }}">
                            
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="author">Text 3:</label>
                                <input type="text" name="text3" class="form-control" placeholder="Post author ..." value="{{ $section3->text3}}">
                            
                            </div>

                            <div class="form-group">
                            <label>Upload Image 3</label>


                                <div class="form-group">
                                <input type="file" id="uploadFile" name="image3">
                                    <br> <br>

                                    <div id="image_preview">
                                        <img src="{{ asset('images/section3/'. $section3->image3) }}"  width="100" height="auto">

                                    </div>
                                </div>    
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="author">Heading 4:</label>
                                <input type="text" name="heading4" class="form-control" placeholder="Post author ..." value="{{ $section3->heading4 }}">
                            
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="author">Text 4:</label>
                                <input type="text" name="text4" class="form-control" placeholder="Post author ..." value="{{ $section3->text4}}">
                            
                            </div>

                            <div class="form-group">
                                <label>Upload Image 4</label>


                                <div class="form-group">
                                    <input type="file" id="uploadFile" name="image4">
                                    <br> <br>

                                    <div id="image_preview">
                                        <img src="{{ asset('images/section3/'. $section3->image4) }}"  width="100" height="auto">

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


