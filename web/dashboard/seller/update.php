<?php
    include('./header.php');
	include('./menubar.php');
  
  ?>
	
				<div class="col-md-9">
					<div class="deals-tab-table">
							<ul class="nav nav-tabs border-0" id="myTab" role="tablist">
							
								<li class="nav-item">
									<a class="nav-link active border border-primary border-bottom-0" id="hvd-tab" data-toggle="tab" href="#hvd" role="tab" aria-controls="hvd" aria-selected="true"><b>Profile</b></a>
								</li>
								<li class="nav-item">
									<a class="nav-link  border border-primary border-bottom-0" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><b>Contact</b></a>
								</li>
								<li class="nav-item">
									<a class="nav-link  border border-primary border-bottom-0" id="payment-tab" data-toggle="tab" href="#payment" role="tab" aria-controls="payment" aria-selected="false"><b>Account</b></a>
								</li>
								<li class="nav-item">
									<a class="nav-link  border border-primary border-bottom-0" id="password-tab" data-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="false"><b>Password</b></a>
								</li>
								<li class="nav-item">
									<a class="nav-link  border border-primary border-bottom-0" id="documents-tab" data-toggle="tab" href="#documents" role="tab" aria-controls="documents" aria-selected="false"><b>Documents</b></a>
								</li>
								
							</ul>

							<div class="tab-content w-100">
								<div class="tab-pane h-100 p-3 fade show active border border-primary" id="hvd" role="tabpanel" aria-labelledby="hvd-tab">
										<div class="table-holder"> 
										<div class="tab-content">
											<table class="table table-bordered table-striped table-sm">
												<thead class="thead-auc">
												
													<tr>
														<th colspan="10">Update Profile</th>
													</tr>
												</thead>
												<tbody>
												<tr>
												    <td>Company Name</td>
														<td><input class="tos" type="text" id="annualt" name="annualt"></td>
													</tr>
													<tr>
														
														<td>Type Of Seller</td>
														<td><select class="tos" id="sellers" name="sellers" >
														<option value="one" selected>seller1</option>
			                                                <option value="two">seller2</option>
			                                                <option value="three" >seller3</option>
			                                                <option value="four">seller4</option>
			                                                </select></td>
														</tr>

													<tr>
												    <td>Contact Person</td>
														<td><input class="tos" type="text" id="cperson" name="cperson"></td>
													</tr>
													<tr>
												    <td>TAN</td>
														<td><input class="tos" type="text" id="tan" name="tan"></td>
													</tr>
													<tr>
												    <td>Annual Turnover</td>
														<td><input class="tos" type="text" id="annualt" name="annualt"></td>
													</tr>
													<tr>
												    <td>GST No.</td>
														<td><input class="tos" type="text" id="gst" name="gst"></td>
													</tr>
													<tr>
												    <td>Designation</td>
														<td><input class="tos" type="text" id="designdepartment" name="designdepartment"></td>
													</tr>
													<tr>
												    <td>Department</td>
														<td><input class="tos" type="text" id="department" name="department"></td>
													</tr>
													<td>PAN No.</td>
														<td><input class="tos" type="text" id="pan" name="pan"></td>
													</tr>
													<tr>
														
													<td>Scrapyard Location</td>
													<td><input class="tos" type="text" id="scraploc" name="scraploc"></i></td>
												
													
												</tbody>
											</table>
	
		  <a href="#"><button type="button" class="btn btn-primary">Update</button></a>
		
	       <a href='#'><button type="button" class="btn btn-primary">Reset</button></a>
		
											
											
											
										</div>    		
								</div>
								
							</div>
							<div class="tab-pane h-100 p-3 fade border border-primary" id="contact" role="tabpanel" aria-labelledby="contact-tab">
										<div class="table-holder"> 
										<div class="tab-content">
											<table class="table table-bordered table-striped table-sm">
												<thead class="thead-auc">
												
													<tr>
														<th colspan="10">Update Contacts</th>
													</tr>
												</thead>
												<tbody>
													
													<tr>
												    <td>Address</td>
														<td><input class="dis" type="text" id=stateess" name="address"></td>
													</tr>
													<tr>
												    <td>City</td>
														<td><input class="tos" type="text" id="city" name="city"></td>
													</tr>
													<tr>
												    <td>Pincode</td>
														<td><input class="tos" type="text" id="pincode" name="pincode"></td>
													</tr>
													<tr>
												    <td>State</td>
														<td><input class="tos" type="text" id="state" name="state"></td>
													</tr>
													<tr>
												    <td>country</td>
														<td><input class="tos" type="text" id="country" name="country"></td>
													</tr>
													<tr>
												    <td>Email</td>
														<td><input class="tos" type="text" id="email" name="email"></td>
													</tr>
													<tr>
												    <td>Phone No.</td>
														<td><input class="tos" type="text" id="phone" name="phone"></td>
													</tr>
													<tr>
												    <td>Fax</td>
														<td><input class="tos" type="text" id="fax" name="fax"></td>
													</tr>
													
													
												</tbody>
											</table>
	
		  <a href="#"><button type="button" class="btn btn-primary">Update</button></a>
	
	       <a href='#'><button type="button" class="btn btn-primary">Reset</button></a>
		
											
											
											
										</div>    		
								</div>
								
							</div>
							<div class="tab-pane h-100 p-3 fade border border-primary" id="payment" role="tabpanel" aria-labelledby="payment-tab">
										<div class="table-holder"> 
										<div class="tab-content">
											<table class="table table-bordered table-striped table-sm">
												<thead class="thead-auc">
												
													<tr>
														<th colspan="10">Update Account</th>
													</tr>
												</thead>
												<tbody>
													
													<tr>
												    <td>Account Holder Name</td>
														<td><input class="tos" type="text" id="accountholdname" name="accountholdname"></td>
													</tr>
													<tr>
												    <td>Bank Name</td>
														<td><input class="tos" type="text" id="bankname" name="bankname"></td>
													</tr>
													<tr>
												    <td>Branch</td>
														<td><input class="tos" type="text" id="branch" name="branch"></td>
													</tr>
													<tr>
												    <td>IFSC code</td>
														<td><input class="tos" type="text" id="ifsccode" name="ifsccode"></td>
													</tr>
													<tr>
												    
													
													
												</tbody>
											</table>
	
		  <a href="#"><button type="button" class="btn btn-primary">Update</button></a>
	
	       <a href='#'><button type="button" class="btn btn-primary">Reset</button></a>
									
											
											
										</div>    		
								</div>
								
							</div>
							<div class="tab-pane h-100 p-3 fade border border-primary" id="password" role="tabpanel" aria-labelledby="password-tab">
										<div class="table-holder"> 
										<div class="tab-content">
											<table class="table table-bordered table-striped table-sm">
												<thead class="thead-auc">
												
													<tr>
														<th colspan="10">Update password</th>
													</tr>
												</thead>
												<tbody>
													
													<tr>
												    <td>Old Password</td>
														<td><input class="tos" type="text" id="opassword" name="opassword"></td>
													</tr>
													<tr>
												    <td>New Password</td>
														<td><input class="tos" type="text" id="npassword" name="npassword"></td>
													</tr>
													<tr>
												    <td>Comfirm Password</td>
														<td><input class="tos" type="text" id="cpassword" name="cpassword"></td>
													</tr>
													
													
												</tbody>
											</table>
	
		  <a href="#"><button type="button" class="btn btn-primary">Update</button></a>
	
	       <a href='#'><button type="button" class="btn btn-primary">Reset</button></a>
		  
											
											
											
										</div>    		
								</div>
								
							</div>
							
							<!---table---->
							<div class="tab-pane h-100 p-3 fade border border-primary" id="documents" role="tabpanel" aria-labelledby="documents-tab">
										<div class="table-holder"> 
										<div class="tab-content">
											<table class="table table-bordered table-striped table-sm">
												<thead class="thead-auc">
												
													<tr>
														<th colspan="10">Upload Documents</th>
													</tr>
												</thead>
												<tbody>
													
													<tr>
												    <td>Document1</td>
														<td><input class="tos" type="file" id="d1" name="d1"></td>
													</tr>
													<tr>
												    <td>Document2</td>
														<td><input class="tos" type="file" id="d2" name="d2"></td>
													</tr>
													<tr>
												    <td>Document3</td>
														<td><input class="tos" type="file" id="d3" name="d3"></td>
													
													</tr>
													<tr>
												    <td>Signed Documents</td>
														<td><input class="tos" type="file" id="sd" name="sd"></td>
													
													</tr>
													
												</tbody>
											</table>
	
		  <a href="#"><button type="button" class="btn btn-primary">Update</button></a>
	
	       <a href='#'><button type="button" class="btn btn-primary">Reset</button></a>
		  
											
											
											
										</div>    		
								</div>
								
							</div>
							
						</div>
				</div>
			</div>	
		</div>
		</div>
	<?php include('./footer.php');?>
