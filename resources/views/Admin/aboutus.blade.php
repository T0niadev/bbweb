@extends ('Admin.layout.app')


@section ('content')
<div class="page-wrapper">
            
			<div class="content container-fluid">
				<div class="page-header">
                   
					<div class="row align-items-center">
                        
						<div class="col">
							<div class="mt-5">
								<h3 class="card-title float-left mt-2">About Us Content</h3>
                            </div>
						</div>
					</div>
				</div>
                
				<div class="row">
					<div class="col-sm-12">
						

                        <div class="card card-table">
							<div class="card-body booking_card mb-4">
								<div class="table-responsive">
									<table class="datatable table table-stripped table table-hover table-center mb-0">
                                      
										<thead>
											<tr>
												<th>Icon 1</th>
												<th>Heading 1</th>
												<th>Text 1</th>
												<th>Text 2</th>
                                                <th>Text 3</th>
                                                <th>image 1</th>
												<th>question 1</th>
												<th>answer 1</th>
                                                <th>image 2</th>
                                                <th>Phone number</th>
												<th class="text-right">Actions</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												
                                                <td>
													<h2 class="table-avatar">
                                                    <a  class=""><img class="" style="width: 55px; padding: 10px;" src="{{ asset('images/aboutus/'. $aboutus->icon1) }}"  height="auto" ></a>
                                                    </h2>
                                                </td>
												<td>{{ $aboutus->heading1 }}</td>
												<td>{{ $aboutus->text1 }}</td>
												<td>{{ $aboutus->text2 }}</td>
                                                <td>{{ $aboutus->text3 }}</td>
												
											
                                                <td>
													<h2 class="table-avatar">
                                                    <a  class=""><img class="" style="width: 55px; padding: 10px;" src="{{ asset('images/aboutus/'. $aboutus->image1) }}" height="auto" ></a>
                                                </td>
                                                <td>{{ $aboutus->question1 }}</td>
												<td>{{ $aboutus->answer1 }}</td>
                                                <td>
													<h2 class="table-avatar">
                                                    <a  class=""><img class="" style="width: 55px; padding: 10px;" src="{{ asset('images/aboutus/'. $aboutus->image2) }}"  height="auto" ></a>
                                                    </h2>
                                                </td>
                                                <td>{{ $aboutus->phone }}</td>
											
												<td class="text-right">
												 <a href="{{ url('admin/aboutus/edit', $aboutus->id) }}" class="btn btn-primary float-right veiwbutton ">Edit Section</a>
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