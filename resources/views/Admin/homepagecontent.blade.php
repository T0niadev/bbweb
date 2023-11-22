@extends ('Admin.layout.app')


@section ('content')
<div class="page-wrapper">
            
			<div class="content container-fluid">
				<div class="page-header">
                   
					<div class="row align-items-center">
                        
						<div class="col">
							<div class="mt-5">
								<h3 class="card-title float-left mt-2">Homepage Content</h3>
                            </div>
						</div>
					</div>
				</div>
                
				<div class="row">
					<div class="col-sm-12">
						<div class="card card-table">
				
							<div class="card-body booking_card mb-4">
						    	<h4 class="card-title float-left mt-2 mb-4" style="color:#a366c2 ">Section 1</h4>
								<div class="table-responsive">
									<table class="datatable table table-stripped table table-hover table-center mb-0">
                                     
										<thead>
											<tr>
												<th>Image 1</th>
												<th>Image 2</th>
												<th>Image 3</th>
												<th>Text 1</th>
												<th>Text 2</th>
												<th>Text 3</th>
												<th>Text 4</th>
												<th class="text-right">Actions</th>
											</tr>
										</thead>
										
										<tbody>
											<tr>
												
												<td>
													
														<h2 class="table-avatar">
														<a  class=""><img class="" style="width: 55px; " src="{{ asset('images/section1/'. $section1->image1) }}"  height="auto" ></a>
                                                    </h2>
                                                </td>
                                                </td>
                                                <td>
													
														<h2 class="table-avatar">
														<a  class=""><img class="" style="width: 55px; " src="{{ asset('images/section1/'. $section1->image2) }}"  height="auto" ></a>
                                                    </h2>
                                                </td>
                                                </td>
                                                <td>
													
														<h2 class="table-avatar">
														<a  class=""><img class="" style="width: 55px; " src="{{ asset('images/section1/'. $section1->image3) }}"  height="auto" ></a>
                                                    </h2>
                                                </td>
                                                </td>
												<td>{{ $section1->text1 }}</td>
												<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2652494b4b5f44435448474a66435e474b564a430845494b">{{ $section1->text2 }}</a></td>
												<td>{{ $section1->text4 }}</td>
												<td>
													<div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">{{ $section1->text4 }}</a> </div>
												</td>
												<td class="text-right">
												 <a href="{{ url('admin/section1/edit', $section1->id) }}"  class="btn btn-primary float-right veiwbutton ">Edit Section</a>
												</td>
											</tr>
										
										</tbody>
									
									</table>
								</div>

                                
							</div>
                            
						</div>

                        <div class="card card-table">
							<div class="card-body booking_card mb-4">
							<h4 class="card-title float-left mt-2 mb-4" style="color:#a366c2 ">Section 2</h4>
								<div class="table-responsive">
									<table class="datatable table table-stripped table table-hover table-center mb-0">
                        
										<thead>
											<tr>
												<th>Image 1</th>
												<th>Text 1</th>
												<th>Text 2</th>
												<th>Text 3</th>
                                                <th>Mission</th>
												<th>Vision</th>
												<th>Image 2</th>
												<th class="text-right">Actions</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												
                                                <td>
													
														<h2 class="table-avatar">
														<a  class=""><img class="" style="width: 55px; " src="{{ asset('images/section2/'. $section2->image1) }}" height="auto" ></a>
                                                    </h2>
                                                </td>
                                                </td>
												<td>{{ $section2->text1 }}</td>
												<td>{{ $section2->text2 }}</td>
												<td>{{ $section2->text3 }}</td>
                                                <td>{{ $section2->mission}}</td>
												
												<td>{{ $section2->vision }}</td>
                                                <td>
													
													<h2 class="table-avatar">
                                                    <a  class=""><img class="" style="width: 55px; " src="{{ asset('images/section2/'. $section2->image2) }}" height="auto" ></a>
                                                    </h2>
                                                </td>
                                                </td>
											
												<td class="text-right">
												 <a href="{{ url('admin/section2/edit', $section2->id) }}"  class="btn btn-primary float-right veiwbutton ">Edit Section</a>
												</td>
											</tr>
										
										</tbody>
									</table>
								</div>

                                
							</div>
                            
						</div>

                        <div class="card card-table">
							<div class="card-body booking_card mb-4">
							<h4 class="card-title float-left mt-2 mb-4" style="color:#a366c2 ">Section 3 (Aims and Objectives)</h4>
								<div class="table-responsive">
									<table class="datatable table table-stripped table table-hover table-center mb-0">
                        
										<thead>
											<tr>
                                                <th>Details</th>
												<th>Header 1</th>
												<th>Text 1</th>
												<th>Image 1</th>
                                                <th>Header 2</th>
												<th>Text 2</th>
												<th>Image 2</th>
                                                <th>Header 3</th>
												<th>Text 3</th>
												<th>Image 3</th>
                                                <th>Header 4</th>
												<th>Text 4</th>
                                                <th>Image 4</th>
												<th class="text-right">Actions</th>
											</tr>
										</thead>
										<tbody>
											<tr>
                                                <td>{{ $section3->details}}</td>
											 	
                                                <td>{{ $section3->heading1 }}</td>
												
												<td>{{ $section3->text1 }}</td>
                                                <td>
													
                                                    <a  class=""><img class="" style="width: 55px; " src="{{ asset('images/section3/'. $section3->image1) }}" height="auto" ></a>
                                                    
                                                </td>
                                                </td>
                                                <td>{{ $section3->heading2 }}</td>
												
												<td>{{ $section3->text2 }}</td>
                                                <td>
												
													
                                                    <a  class=""><img class="" style="width: 55px; " src="{{ asset('images/section3/'. $section3->image2) }}" height="auto" ></a>
                                                   
                                                </td>
                                                </td>
                                                <td>{{ $section3->heading3}}</td>
												
												<td>{{ $section3->text3 }}0</td>
                                                <td>
													
													
                                                    <a  class=""><img class="" style="width: 55px; " src="{{ asset('images/section3/'. $section3->image3) }}" height="auto" ></a>
                                                 
                                                </td>
                                                </td>
                                                <td>{{ $section3->heading4 }}</td>
												
												<td>{{ $section3->text4 }}</td>
                                                <td>
													
                                                    <a  class=""><img class="" style="width: 55px; " src="{{ asset('images/section3/'. $section3->image4) }}" height="auto" ></a>
                                                   
                                                </td>
                                                </td>
						
												<td class="text-right">
												 <a href="{{ url('admin/section3/edit', $section3->id) }}"  class="btn btn-primary float-right veiwbutton ">Edit Section</a>
												</td>
											</tr>
										
										</tbody>
									</table>
								</div>

                                
							</div>
                            
						</div>


                        <div class="card card-table">
							<div class="card-body booking_card mb-4">
							<h4 class="card-title float-left mt-2 mb-4" style="color:#a366c2 ">Section 4</h4>
								<div class="table-responsive">
									<table class="datatable table table-stripped table table-hover table-center mb-0">
                      
										<thead>
											<tr>
												<th>Video link</th>
												<th>Heading</th>
												<th>Text</th>
												<th>Learn more link</th>
												<th class="text-right">Actions</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												
                                                <td>
												  {{ $section4->video }}
                                                </td>
												<td>{{ $section4->heading }}</td>
												<td>{{ $section4->text }}</td>
												<td>{{ $section4->link }}</td>
												<td class="text-right">
												 <a href="{{ url('admin/section4/edit', $section4->id) }}"  class="btn btn-primary float-right veiwbutton ">Edit Section</a>
												</td>
											</tr>
										
										</tbody>
									</table>
								</div>

                                
							</div>
                            
						</div>
					</div>
				</div>
			</div>
			<div id="delete_asset" class="modal fade delete-modal" role="dialog">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body text-center"> <img src="assets/img/sent.png" alt="" width="50" height="46">
							<h3 class="delete_class">Are you sure want to delete this Asset?</h3>
							<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
								<button type="submit" class="btn btn-danger">Delete</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection