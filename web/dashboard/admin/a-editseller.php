<?php 
	include('./a-header.php');
	include('./a-menubar.php');
?>
	
				<div class="col-md-9">
					<div class="deals-tab-table">
							<ul class="nav nav-tabs border-0" id="myTab" role="tablist">
							
								<li class="nav-item">
									<a class="nav-link active border border-primary border-bottom-0" id="hvd-tab" data-toggle="tab" href="#hvd" role="tab" aria-controls="hvd" aria-selected="true"><b>Edit Profiles</b></a>
								</li>
								<li class="nav-item">
									<a class="nav-link border border-primary border-bottom-0" id="menu4-tab" data-toggle="tab" href="#menu4" role="tab" aria-controls="hvd" aria-selected="true"><b>Personal</b></a>
								</li>
								<li class="nav-item">
									<a class="nav-link border border-primary border-bottom-0" id="menu1-tab" data-toggle="tab" href="#menu1" role="tab" aria-controls="menu1" aria-selected="false"><b>Contact Info</b></a>
								</li>
								<li class="nav-item">
									<a class="nav-link border border-primary border-bottom-0" id="menu2-tab" data-toggle="tab" href="#menu2" role="tab" aria-controls="menu2" aria-selected="false"><b>Account Info</b></a>
								</li>
								<li class="nav-item">
									<a class="nav-link border border-primary border-bottom-0" id="menu3-tab" data-toggle="tab" href="#menu3" role="tab" aria-controls="menu3" aria-selected="false"><b>Documents</b></a>
								</li>
							</ul>

							<div class="tab-content w-100">
								<div class="tab-pane h-100 p-3 active border border-primary" id="hvd" role="tabpanel" aria-labelledby="hvd-tab">
										<div class="cust">
											<nav class="navbar navbar-light text-white py-1" id="navbarSupportedContent">
											
									<form class="form-inline d-flex pull-right md-form form-sm active-cyan active-cyan-2">
											<i class="fa fa-search" aria-hidden="true"></i>
											<input class="form-control form-control-sm ml-2 w-35" type="text" placeholder="Search" aria-label="Search">
										</form>
											<form><label for="cars">Result:</label>
											<select style="text-align:left" name="result" id="result">
												<optgroup label="1">
												<option  value="volvo">5</option>
												<option value="saab">10</option>
												<option value="breeza">20</option>
												<option value="ciaz">25</option>
												</optgroup>
											</select>
											</form>
											

									
								</nav>
									</div>	
									<div class="table-holder"> 
									<table class="table table-bordered table-striped table-sm">
										<tr><td>Select Date</td>
													<td><input class="name" type="Date" id="sdate" name="sdate" ></td>
													<td><input class="name" type="Date" id="ldate" name="ldate" ></td>
													</tr>
													<tr>
													
														<td colspan="5"> <form action="/action_page.php">
															<div class="form-check">
																<label class="form-check-label" for="check1">
																	<input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>Search by Company
																</label>
															</div></form></td>
	 											    </tr>
													<tr>
												
														<td colspan="5"> <div class="form-check">
														<label class="form-check-label" for="check2">
															<input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">Search by Alphabet
														</label>
													</div></td>
	 											    </tr>
													</table>
													
														<a href="#"><button type="button" class="btn btn-primary">Search</button></a>
													
										<table class="table table-bordered table-striped table-sm mt-2">
										<thead class="thead-auc">
										<tr><th colspan="10">EMD</th></tr>
													<tr>
														<th width="10%">Seller Name</th>
														<th width="20%">Company Type</th>
														<th width="15%">Contact Person</th>
														<th width="15%">Location</th>
														<th width="20%">City</th>
														<th width="10%">Status</th>
														<th width="20%">Option</th>
													</tr>
												</thead>
												<tbody>
													<tr>												
														<td>BHEL</td>
														<td>Steel metal</td>
														<td>S.R.Venkatesh</td>
														<td>Bangalore</td>
														<td>Shada Shiv Nagar</td>
														<td>Active</td>
														<td><a href="a-sellerreg.php">
															<i class="fa fa-edit"></i> 
															</a>
															<a href="" >
															<i class="fa fa-trash" style="color:black"></i> 
															</a><a href="" >
															<i class="fa fa-check" style="color:green"></i> 
															</a>
															</td>
															</td>
														</tr>
													<tr>												
														<td>BHEL</td>
														<td>Steel metal</td>
														<td>S.R.Venkatesh</td>
														<td>Bangalore</td>
														<td>Shada Shiv Nagar</td>
														<td>Active</td>
														<td><a href="a-sellerreg.php">
															<i class="fa fa-edit"></i> 
															</a>
															<a href="" >
															<i class="fa fa-trash" style="color:black"></i> 
															</a>
															<a href="" >
															<i class="fa fa-check" style="color:green"></i> 
															</a></td>
														</tr>
													<tr>												
														<td>BHEL</td>
														<td>Steel metal</td>
														<td>S.R.Venkatesh</td>
														<td>Bangalore</td>
														<td>Shada Shiv Nagar</td>
														<td>Inactive</td>
														<td><a href="a-sellerreg.php">
															<i class="fa fa-edit"></i> 
															</a>
															<a href="" >
															<i class="fa fa-trash" style="color:black"></i> 
															</a><a href="" >
															<i class="fa fa-times" style="color:red"></i> 
															</a>
															</td>
														</tr>
													<tr>												
														<td>BHEL</td>
														<td>Steel metal</td>
														<td>S.R.Venkatesh</td>
														<td>Bangalore</td>
														<td>Shada Shiv Nagar</td>
														<td>Active</td>
														<td><a href="a-sellerreg.php">
															<i class="fa fa-edit"></i> 
															</a>
															<a href="" >
															<i class="fa fa-trash"style="color:black"></i> 
															</a>
															<a href="" >
															<i class="fa fa-check" style="color:green"></i> 
															</a>
															</td>
														</tr>
													<tr>												
														<td>BHEL</td>
														<td>Steel metal</td>
														<td>S.R.Venkatesh</td>
														<td>Bangalore</td>
														<td>Shada Shiv Nagar</td>
														<td>Inactive</td>
														<td><a href="a-sellerreg.php">
															<i class="fa fa-edit"></i> 
															</a>
															<a href="" >
															<i class="fa fa-trash" style="color:black"></i> 
															</a>
															<a href="" >
															<i class="fa fa-times" style="color:red"></i> 
															</a></td>
														</tr>
											</table>
											</div>
											
											
										</tbody>
										    		
								</div>
								
								
								
								
								
								
								<div class="tab-pane h-100 p-4 fade border border-primary" id="menu4" role="tabpanel" aria-labelledby="menu4-tab">
										<div class="table-holder">
											<div class="tab-content">										
											<table class="table table-bordered table-striped table-sm">
											
												<thead class="thead-auc">
												
													<tr>
													<th colspan="7">Basic Info</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="btxt">Seller Name:</td>
														<td><input class="name" type="text" id="sname" name="sname" ></td>
	 											    </tr>
													<tr>												
														<td class="btxt">Company Name:</td>
														<td><input class="name" type="text" id="fcomp" name="fcomp" ></td>
														</tr>
													<tr>
														<td class="btxt">Company Type:</td>
														<td><input class="name" type="text" id="fctype" name="fctype" ></td>
													</tr>  
													<tr>
														<td class="btxt">Contact Person:</td>
														<td><input class="name" type="text" id="fcperson" name="fcperson" ></td>
													</tr>
													<tr>
														<td class="btxt"> CIN Number:</td>
														<td><input class="name" type="text" id="cin" name="cin" ></td>
													</tr>  
													<tr>
														<td class="btxt">GST:</td>
														<td><input class="name" type="text" id="gst" name="gst" ></td>
													</tr> 
													<tr>
														<td class="btxt">PCB Licence NO:</td>
														<td><input class="name" type="text" id="pcb" name="pcb" ></td>
													</tr> 
													
												</table>
													<a href="#"><button type="button" class="btn btn-primary">Update</button></a>
												
													<a href="#"><button type="button" class="btn btn-primary">Download</button></a>
												
													<a href='#'><button type="button" class="btn btn-primary">Approve</button></a>
													<i class="fa fa-check primary" aria-hidden="true">Approved</i>
													<a href="#"><i class="fa fa-times danger" aria-hidden="true">Approval Pending</i></a>
											</table>
										</tbody>
										</div>
									</div>
								</div>
							
										
									<div class="tab-pane fade h-100 p-3 border border-primary" id="menu1" role="tabpanel" aria-labelledby="menu1-tab">
										<div class="table-holder"> 
										<div class="tab-content">
											<table class="table table-bordered table-striped table-sm">
											
												<thead class="thead-auc">
												
													<tr>
													<th colspan="7">Contact Info</th>
													</tr>
												</thead>
												<tbody>	
													<tr>
														<td class="btxt">Email:</td>
														<td><input class="name" type="text" id="email"></td>
													</tr>
													<tr>
														<td class="btxt">Phone:</td>
														<td><input class="name" type="text" id="phone"></td>
													</tr>
													<tr>
														<td class="btxt">Fax:</td>
														<td><input class="name" type="text" id="fax"></td>
													</tr>
													<tr>
														<td class="btxt">Postal Address:</td>
														<td><input class="name" type="text" id="paddress"></td>
													</tr> 
													<tr>
														<td class="btxt">City:</td>
														<td><input class="name" type="text" id="city" name="city" ></td>
													</tr> 
													<tr>
														<td class="btxt">Pincode:</td>
														<td><input class="name" type="text" id="pin" name="pin" ></td>
													</tr> 
													<tr>
														<td class="btxt">State /Union Ter.:</td>
														<td><input class="name" type="text" id="state" name="state" ></td>
													</tr> 
													<tr>
														<td class="btxt">Country:</td>
														<td><input class="name" type="text" id="country" name="country" value="INDIA" disabled></td>
													</tr> 
													</table>
											</div>
											
											
											
													<a href="#"><button type="button" class="btn btn-primary">Update</button></a>
												
													<a href="#"><button type="button" class="btn btn-primary">Download</button></a>
												
													<a href='#'><button type="button" class="btn btn-primary">Approve</button></a>
													<i class="fa fa-check primary" aria-hidden="true">Approved</i>
													<a href="#"><i class="fa fa-times danger" aria-hidden="true">Approval Pending</i></a>
										</tbody>
								
									</div>
								</div>	




									<div class="tab-pane fade h-100 p-3 border border-primary" id="menu2" role="tabpanel" aria-labelledby="menu2-tab">
										<div class="table-holder"> 
										<div class="tab-content">
											<table class="table table-bordered table-striped table-sm">
											
												<thead class="thead-auc">
												
													<tr>
													<th colspan="7">Account Info</th>
													</tr>
												</thead>
												<tbody>	
													<tr>
														<td class="btxt">Banker's Name:</td>
														<td><input class="name" type="text" id="bankname" name="bankname" ></td>
													</tr> 
													<tr>
														<td class="btxt">Account Number:</td>
														<td><input class="name" type="text" id="facc" name="facc" ></td>
													</tr> 
													<tr>
														<td class="btxt">Branch:</td>
														<td><input class="name" type="text" id="fbranch" name="fbranch" ></td>
													</tr> 
													<tr>
														<td class="btxt">IFSC Code:</td>
														<td><input class="name" type="text" id="fcode" name="fcode" ></td>
													</tr> 
													</table>
											</div>
											
											
													<a href="#"><button type="button" class="btn btn-primary">Update</button></a>
												
													<a href="#"><button type="button" class="btn btn-primary">Download</button></a>
												
													<a href='#'><button type="button" class="btn btn-primary">Approve</button></a>
													<i class="fa fa-check primary" aria-hidden="true">Approved</i>
													<a href="#"><i class="fa fa-times danger" aria-hidden="true">Approval Pending</i></a>
										</tbody>
								
									</div>
								</div>

								<div class="tab-pane fade h-100 p-3 border border-primary" id="menu3" role="tabpanel" aria-labelledby="menu3-tab">
										<div class="table-holder"> 
										<div class="tab-content">
											<table class="table table-bordered table-striped table-sm">
											
												<thead class="thead-auc">
												
													<tr>
													<th colspan="7">Upload files</th>
													</tr>
												</thead>
												<tbody>	
													<tr>
														<td class="btxt">Upload Image1:</td>
														<td><form action="/action_page.php"> <input type="file" id="myFile" name="filename2"></form></td>
													</tr> 
													<tr>
														<td class="btxt">Upload Image2:</td>
														<td><form action="/action_page.php"> <input type="file" id="myFile" name="filename2"></form></td>
													</tr> 
													<tr>
														<td class="btxt">Upload Image3:</td>
														<td><form action="/action_page.php"> <input type="file" id="myFile" name="filename2"></form></td>
													</tr>
													</table>
											</div>
											
											
													<a href="#"><button type="button" class="btn btn-primary">Update</button></a>
													<a href='#'><button type="button" class="btn btn-primary">Cancel</button></a>
													<a href='#'><button type="button" class="btn btn-primary">Approve</button></a>
													<i class="fa fa-check primary" aria-hidden="true">Approved</i>
													<a href="#"><i class="fa fa-times danger" aria-hidden="true">Approval Pending</i></a>
													
										</tbody>
								
									</div>
								</div>
								
								
								
								
							</div>
							<nav aria-label="Page navigation example">
									<ul class="pagination justify-content-center pagination-sm mt-2">
										<li class="page-item disabled">
										<a class="page-link" href="#" tabindex="-1"><<</a>
										</li>
										<li class="page-item"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item">
										<a class="page-link" href="#">>></a>
										</li>
									</ul>
							</nav>	
						</div>
				</div>
			</div>	
		</div>
<?php 
	include('./a-footer.php');
	?>