<?php 
	include('./a-header.php');
	include('./a-menubar.php');
?>
	
				<div class="col-md-9">
					<div class="deals-tab-table">
							<ul class="nav nav-tabs border-0" id="myTab" role="tablist">
							
								<li class="nav-item">
									<a class="nav-link active border border-primary border-bottom-0" id="hvd-tab" data-toggle="tab" href="#hvd" role="tab" aria-controls="hvd" aria-selected="true"><b>Personal</b></a>
								</li>
								<li class="nav-item">
									<a class="nav-link border border-primary border-bottom-0" id="menu1-tab" data-toggle="tab" href="#menu1" role="tab" aria-controls="menu1" aria-selected="false"><b>Contact</b></a>
								</li>
								<li class="nav-item">
									<a class="nav-link border border-primary border-bottom-0" id="menu2-tab" data-toggle="tab" href="#menu2" role="tab" aria-controls="menu2" aria-selected="false"><b>Account</b></a>
								</li>
								<li class="nav-item">
									<a class="nav-link border border-primary border-bottom-0" id="menu3-tab" data-toggle="tab" href="#menu3" role="tab" aria-controls="menu3" aria-selected="false"><b>Documents</b></a>
								</li>
							</ul>

							<div class="tab-content w-100" id="myTabContent">
								<div class="tab-pane h-100 p-4 fade show active border border-primary" id="hvd" role="tabpanel" aria-labelledby="hvd-tab">
										<div class="table-holder">
											<div class="tab-content">										
											<table class="table table-bordered table-striped table-sm">
											
												<thead class="thead-auc">
												
													<tr>
													<th colspan="7">Profile</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="btxt">Buyer Name:</td>
														<td><input class="name" type="text" id="bname" name="bname" ></td>
	 											    </tr>
													<tr>												
														<td class="btxt">Contact Name:</td>
														<td><input class="name" type="text" id="fcontact" name="fcontact" ></td>
														</tr>
													<tr>
														<td class="btxt">Company Type:</td>
														<td><input class="name" type="text" id="fcname" name="fcname" ></td>
													</tr>  
													<tr>
														<td class="btxt">Contact Person:</td>
														<td><input class="name" type="text" id="cperson" name="cperson" ></td>
													</tr>
													<tr>
														<td class="btxt"> Postal Address:</td>
														<td><input class="name" type="text" id="faddress" name="faddress" ></td>
													</tr>  
													<tr>
														<td class="btxt">City:</td>
														<td><input class="name" type="text" id="fcity" name="fcity" ></td>
													</tr> 
													<tr>
														<td class="btxt">Pincode:</td>
														<td><input class="name" type="text" id="fpin" name="fpin" ></td>
													</tr> 
													<tr>
														<td class="btxt">State /Union Ter.:</td>
														<td><input class="name" type="text" id="fstate" name="fstate" ></td>
													</tr>
													<tr>
														<td class="btxt">Country:</td>
														<td><input class="name" type="text" id="fpan" value = "INDIA" disabled ></td>
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
														<th colspan="7">Contact</th>
													</tr>
													</thead>
												<tbody>	
													<tr>
														<td class="btxt">Email:</td>
														<td><input class="name" type="text" id="email" value = "This input field is disabled" disabled  ></td>
													</tr> 
													<tr>
														<td class="btxt">Phone Number:</td>
														<td><input class="name" type="text" id="phone" name="phone" ></td>
													</tr> 
													<tr>
														<td class="btxt">Fax:</td>
														<td><input class="name" type="text" id="fax" name="fax" ></td>
													</tr> 
													<tr>
														<td class="btxt">Pan Number:</td>
														<td><input class="name" type="text" id="pan" name="pan" ></td>
													</tr> 
													<tr>
														<td class="btxt">GST:</td>
														<td><input class="name" type="text" id="gst" name="gst" ></td>
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
															<th colspan="7">Account</th>
														</tr>
													</thead>
												<tbody>	
													<tr>
														<td class="btxt">Banker's Name:</td>
														<td><input class="name" type="text" id="bankname" name="bankname" ></td>
													</tr> 
													<tr>
														<td class="btxt">Account Number:</td>
														<td><input class="name" type="text" id="accnum" name="accnum" ></td>
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
														<td><form action="/action_page.php"> <input type="file" id="myfile1" name="myfile1"></form></td>
													</tr> 
													<tr>
														<td class="btxt">Upload Image2:</td>
														<td><form action="/action_page.php"> <input type="file" id="myfile" name="myfile2"></form></td>
													</tr> 
													<tr>
														<td class="btxt">Upload Image3:</td>
														<td><form action="/action_page.php"> <input type="file" id="myfile" name="myfile2"></form></td>
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
							</div>	
							
				</div>
			</div>	
		</div>
<?php 
	include('./a-footer.php');
	?>
