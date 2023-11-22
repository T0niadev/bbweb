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
                  
                        <form method="Post" action="{{ url('/admin/aboutus/update',$aboutus->id) }}" name="post" enctype="multipart/form-data">
                           @csrf
                           @method('PUT')  


                                  
                           <div class="form-group">
                              <label>Upload Icon 1</label>


                                <div class="form-group">
                                <input type="file" id="uploadFile" name="icon1">
                                    <br> <br>

                                    <div id="image_preview">
                                        <img src="{{ asset('images/aboutus/'. $aboutus->icon1) }}"  width="100" height="auto">

                                    </div>
                                </div>    
                            </div>


                            <div class="form-group">
                                <label class="control-label" for="author">Heading 1:</label>
                                <input type="text" name="heading1" class="form-control" placeholder="Post author ..." value="{{ $aboutus->heading1}}">
                            
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="author">Text 1:</label>
                                <input type="text" name="text1" class="form-control" placeholder="Post author ..." value="{{ $aboutus->text1 }}">
                            
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="author">Text 2:</label>
                                <input type="text" name="text2" class="form-control" placeholder="Post author ..." value="{{ $aboutus->text2 }}">
                            
                            </div>
                 
                            
                            <div class="form-group">
                                <label class="control-label" for="author">Text 3:</label>
                                <input type="text" name="text3" class="form-control" placeholder="Post author ..." value="{{ $aboutus->text3}}">
                            
                            </div>

                                   
                            <div class="form-group">
                              <label>Upload Image 1</label>


                                <div class="form-group">
                                <input type="file" id="uploadFile" name="image1">
                                    <br> <br>

                                    <div id="image_preview">
                                        <img src="{{ asset('images/aboutus/'. $aboutus->image1) }}"  width="100" height="auto">

                                    </div>
                                </div>    
                            </div>


                            <div class="form-group">
                                <label class="control-label" for="author">Question 1:</label>
                                <input type="text" name="question1" class="form-control" placeholder="Post author ..." value="{{ $aboutus->question1}}">
                            
                            </div>


                            <div class="form-group">
                                <label class="control-label" for="author">Answer 1:</label>
                                <input type="text" name="answer1" class="form-control" placeholder="Post author ..." value="{{ $aboutus->answer1}}">
                            
                            </div>

                            <div class="form-group">
                            <label>Upload Image 2</label>


                                <div class="form-group">
                                <input type="file" id="uploadFile" name="image2">
                                    <br> <br>

                                    <div id="image_preview">
                                        <img src="{{ asset('images/aboutus/'. $aboutus->image2) }}" width="100" height="auto">

                                    </div>
                                </div>    
                            </div>


                            <div class="form-group">
                                <label class="control-label" for="author">Phone number:</label>
                                <input type="text" name="phone" class="form-control" placeholder="Post author ..." value="{{ $aboutus->phone}}">
                            
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


