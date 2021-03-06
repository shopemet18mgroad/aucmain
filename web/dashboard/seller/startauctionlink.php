<?php
    include('./header.php');
	include('./menubar.php');
  
  ?>
				<div class="col-md-9">
					<div class="deals-tab-table">
							<ul class="nav nav-tabs border-0" id="myTab" role="tablist">
							    <li class="nav-item">
									<a class="nav-link active border border-primary border-bottom-0" id="hvd-tab" data-toggle="tab" href="#hvd" role="tab" aria-controls="hvd" aria-selected="true"><b>Start Auction</b></a>
								</li>
								<li class="nav-item">
									<a class="nav-link  border border-primary border-bottom-0" id="uploadp-tab" data-toggle="tab" href="#uploadp" role="tab" aria-controls="uploadp" aria-selected="false"><b>Add Lot</b></a>
								</li>
								<li class="nav-item">
									<a class="nav-link border border-primary border-bottom-0" id="upload-tab" data-toggle="tab" href="#upload" role="tab" aria-controls="upload" aria-selected="false"><b>Auction Details</b></a>
								</li>
								
							</ul>
						
							<div class="tab-content w-100" id="myTabContent">
							   <div class="tab-pane h-100 p-3 fade show active border border-primary" id="hvd" role="tabpanel" aria-labelledby="hvd-tab">
									
									<div class="table-holder">
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
												<option value="volvo">20</option>
												<option value="saab">25</option>
												</optgroup>
											</select>
											</form>
										</nav>
									</div> 
									
									
									<div class="table-holder"> 
										<table class="table table-bordered table-striped table-sm">
													<tr>
													<td>Select Auctions</td>
													<td><select class="tos" id="auction" name="auction" >
															<option value="one" selected>Ferrous</option>
															<option value="two">Non Ferrous</option>
															<option value="three" >Minor Metals</option>
															<option value="four">Plain paper</option>
															<option value="five">Granules</option>
															<option value="six">All Construction Materials</option>
															</select>
													</td></tr>
													<tr>
													<td>Auctions Name</td>
													<td><input class="tos" type="text" id="aname" name="aname" size="15">
													</td></tr>
													<tr>
													<td>Terms & Conditions</td>
													<td><input class="tos" type="file" id="t&c" name="t&c"></td>	
	 											    </tr>
													</table>
												
											<a href="startauctionlink.html"><button type="button" class="btn btn-primary">Add Lot</button></a>
											</div>
											</div>
											</div>
							
							
							
								<div class="tab-pane h-100 p-3 fade border border-primary" id="uploadp" role="tabpanel" aria-labelledby="uploadp-tab">
						
								
									
									<div class="table-holder">
										<div class="tab-content">
											<table class="table table-bordered table-striped table-sm mt-2">
												<thead class="thead-auc">
												
													<tr>
														<th colspan="10">Upload Details</th>
														
														
													</tr>
												</thead>
												<tbody>
													<tr>
														
														<td>Auction Name</td>
														<td><select class="tos" id="aname" name="aname" >
														   <option value="one" selected>Select</option>
			                                                <option value="one" selected>Auction1</option>
			                                                <option value="two">Auction2</option>
			                                                <option value="three" >Auction3</option>
			                                                <option value="four">Auction4</option>
			                                                </select></td>
														</tr>
													<tr>
														
														<td>Address</td>
														<td><select class="tos" id="add" name="add" >
														   <option value="one" selected>Select</option>
			                                                <option value="one" selected>Bangalore</option>
			                                                <option value="two">Mumbai</option>
			                                                <option value="three" >Nasik</option>
			                                                <option value="four">West Bangal</option>
			                                                </select></td>
														</tr>
														<tr>
													
														<td>Product Name</td>
														<td><input class="tos" type="text" id="pname" name="pname"></td>
														
														
													</tr>
													<tr>
														
														<td>Category</td>
														<td><select class="tos" id="category" name="category" >
														   <option value="one" selected>Select</option>
			                                                <option value="one" selected>Steel</option>
			                                                <option value="two">Iron</option>
			                                                <option value="three" >Plastic</option>
			                                                <option value="four">Aluminium</option>
			                                                </select></td>
														</tr>
													<tr>
													
														<td>Quantity</td>
														<td><input class="tos" type="text" id="qty" name="qty"></td>
														
														
													</tr>
													<tr>
														
														<td>Expected Price</td>
														<td><input class="tos" type="text" id="exptp" name="exptp">
														</td>
														
														
													<tr>  
													
														
														<td>Starting Bid Price</td>
														<td><input class="tos" type="text" id="startbp" name="startbp"></td>
														
														
													</tr>
													<tr>  
													
														
														<td>GST No.</td>
														<td><select class="tos" id="gstp" name="gstp" >
			                                                <option value="one" selected>Percentage</option>
			                                                <option value="two">20%</option>
			                                                <option value="three" >60%</option>
			                                                <option value="four">80%</option>
			                                                </select>
														<br><br><input class="tos" type="text" id="gst" name="gst">
														</td>
														
														
													</tr>
													
													<tr>  
													
														
														<td>Inspection Date</td>
														<td><input class="tos" type="date" id="inpectdate" name="inpectdate"></td>
														
														
													</tr>
													<tr>  
													
														
														<td>Inspection Closing Date</td>
														<td><input class="tos" type="date" id="inspectcd" name="inspectcd"></td>
														
														
													</tr>
													<tr>
														
														<td>Description</td>
														<td><input class="dis" type="text" id="dis" name="dis"></td>
														
														
													</tr>
													<tr>
														
														<td>Product Images</td>
														<td><input class="tos" type="file" id="pimg" name="pimg"></td>
														
														
													</tr>
													
													
												</tbody>
											</table>
										
		                                        <a href="#"><button type="button" class="btn btn-primary">Upload</button></a>
		                                          
		                                  
	                                             <a href='#'><button type="button" class="btn btn-primary">Reset</button></a>
		                                     
											</div>
											</div>
											</div>
											<div class="tab-content tab-pane h-100 p-3 fade border border-primary" id="upload" role="tabpanel" aria-labelledby="upload-tab">
											<div class="table-holder">
											<div class="cust">
											<nav class="navbar navbar-light text-white py-1" id="navbarSupportedContent">
										
											</form>
											<form class="form-inline d-flex pull-right md-form form-sm active-cyan active-cyan-2">
											<i class="fa fa-search" aria-hidden="true"></i>
											<input class="form-control form-control-sm ml-2 w-35" type="text" placeholder="Search" aria-label="Search">
											</form>
											<form><label for="cars">Result:</label>
											<select style="text-align:left" name="cars" id="cars">
												<optgroup label="1">
												<option  value="volvo">5</option>
												<option value="saab">10</option>
												<option value="volvo">20</option>
												<option value="saab">25</option>
												</optgroup>
											</select>
										</nav>
									</div> 										
										<div class="table-holder"> 
										<table class="table table-bordered table-striped table-sm">
													<tr><td>Select Date</td>
													<td><input class="name" type="Date" id="sdate" name="sdate" ></td>
													<td><input class="name" type="Date" id="sdate" name="sdate" ></td>
													</tr>
													<tr>
														<td>Select Category:</td>
														<td colspan="2"><select class="aaa" id="scate" name="scate" >
															<option value="one" selected>Ferrous</option>
															<option value="two">Non Ferrous</option>
															<option value="three" >Minor Metals</option>
															<option value="four">Plain paper</option>
															<option value="five">Granules</option>
															<option value="six">All Construction Materials</option>
															</select></td>
															
	 											    </tr>
													
													</table>
												
												<a href="#"><button type="button" class="btn btn-primary">Search</button></a>
											
											
										<div class="table-holder"> 
										<div class="tab-content">
											<table class="table table-bordered table-striped table-sm mt-2" >
												<thead class="thead-auc">
												<tr>
														<th colspan="12">Uploaded Details</th>
													</tr>
													<tr>
													 <th class="dpad">Auction Id</th>
													 <th class="dpad">Auction Name</th>
													 <th class="dpad">Product Name</th>
													 <th class="dpad">Quantity</th>
													 <th class="dpad">Expected Price</th>
													 <th class="dpad">Starting Bid Price</th>
													 <th class="dpad">Inspection Date</th>
													 <th class="dpad">Inspection closing Date</th>
													 <th class="dpad">Description</th>
													 <th class="dpad">Images</th>
													 <th class="dpad">Action</th>
													 <th class="dpad">Download</th>
													 
													</tr>
													
												</thead>
												<tbody>
													<tr>
													 <td class="dpad" width="10%">M2HG134</td>
													 <td class="dpad" width="10%"><a href=""><u>LTD./1/BHUBANESWAR/20-21/6425<MSTC/BBR/THE ORIENTAL INSURANCE CO./THE ORIENTAL INSURANCE CO.</u></a></td>
													 <td class="dpad" width="10%">Paper</td>
													 <td class="dpad" width="10%">5</td>
													 <td class="dpad" width="10%">80%</td>
													 <td class="dpad" width="10%">1,000</td>
													 <td class="dpad" width="10%">02-07-2020</td>
													 <td class="dpad" width="10%">03-07-2020</td>
													 <td class="dpad" width="10%"><a href=""><u>Scrap/ obsolete/ surplus stores/ spares and capital equipments or coal or diamonds</u></a></td>
													 <td class="dpad" width="10%"><a href=""><u>Image</u></a></td>
													 <td class="dpad" width="10%"><a href="">
													<i class="fa fa-edit"></i>
													<a href="" >
													<i class="fa fa-trash" style="color:black;"></i>
													</a></td>
													<td class="dpad" width="10%"><a href=""><i class="fa fa-download"></i></a></td>
													</tr>
													<tr>
													 <td class="dpad" width="10%">M2HG134</td>
													 <td class="dpad" width="10%"><a href=""><u>LTD./1/BHUBANESWAR/20-21/6425<MSTC/BBR/THE ORIENTAL INSURANCE CO./THE ORIENTAL INSURANCE CO.</u></a></td>
													 <td class="dpad" width="10%">Paper</td>
													 <td class="dpad" width="10%">5</td>
													 <td class="dpad" width="10%">80%</td>
													 <td class="dpad" width="10%">1,000</td>
													 <td class="dpad" width="10%">02-07-2020</td>
													 <td class="dpad" width="10%">03-07-2020</td>
													 <td class="dpad" width="10%"><a href=""><u>Scrap/ obsolete/ surplus stores/ spares and capital equipments or coal or diamonds</u></a></td>
													 <td class="dpad" width="10%"><a href=""><u>Image</u></a></td>
													 <td class="dpad" width="10%"><a href="">
													<i class="fa fa-edit"></i>
													<a href="" >
													<i class="fa fa-trash" style="color:black;"></i>
													</a></td>
													<td class="dpad" width="10%"><a href=""><i class="fa fa-download"></i></a></td>
													</tr>
													<tr>
													 <td class="dpad" width="13%">M2HG134</td>
													 <td class="dpad" width="10%"><a href=""><u>LTD./1/BHUBANESWAR/20-21/6425<MSTC/BBR/THE ORIENTAL INSURANCE CO./THE ORIENTAL INSURANCE CO.</u></a></td>
													 <td class="dpad" width="10%">Paper</td>
													 <td class="dpad" width="10%">5</td>
													 <td class="dpad" width="10%">80%</td>
													 <td class="dpad" width="10%">1,000</td>
													 <td class="dpad" width="10%">02-07-2020</td>
													 <td class="dpad" width="10%">03-07-2020</td>
													 <td class="dpad" width="10%"><a href=""><u>Scrap/ obsolete/ surplus stores/ spares and capital equipments or coal or diamonds</u></a></td>
													 <td class="dpad" width="10%"><a href=""><u>Image</u></a></td>
													 <td class="dpad" width="10%"><a href="">
													<i class="fa fa-edit"></i>
													<a href="" >
													<i class="fa fa-trash" style="color:black;"></i>
													</a></td>
													<td class="dpad" width="10%"><a href=""><i class="fa fa-download"></i></a></td>
													</tr>
													</tbody>
													</table>
											
											</div>
										</div>    		
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
		</div>
		
		
		
	<?php include('./footer.php');?>
