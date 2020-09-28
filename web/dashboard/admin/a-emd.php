<?php 
	include('./a-header.php');
	include('./a-menubar.php');
?>
	
				<div class="col-md-9">
					<div class="deals-tab-table">
							<ul class="nav nav-tabs border-0" id="myTab" role="tablist">
							
								<li class="nav-item">
									<a class="nav-link active border border-primary border-bottom-0" id="hvd-tab" data-toggle="tab" href="#hvd" role="tab" aria-controls="hvd" aria-selected="true"><b>Profile</b></a>
								</li>
								<li class="nav-item">
									<a class="nav-link border border-primary border-bottom-0" id="menu1-tab" data-toggle="tab" href="#menu1" role="tab" aria-controls="menu1" aria-selected="false"><b>Requests</b></a>
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
											<select style="text-align:left" name="cars" id="cars">
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
										<tr><td>Select Date</td>
													<td><input class="name" type="Date" id="fname" name="fname" ></td>
													<td><input class="name" type="Date" id="fname" name="fname" ></td>
													</tr>
													<tr>
													
														<td colspan="5"> <form action="/action_page.php">
															<div class="form-check">
																<label class="form-check-label" for="check1">
																	<input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>Search by Auction Name
																</label>
															</div></form></td>
	 											    </tr>
													<tr>
													
														<td colspan="5"> <div class="form-check">
														<label class="form-check-label" for="check3">
															<input type="checkbox" class="form-check-input" id="check3" name="option3" value="something">EMD Paid
														</label>
													</div></td>
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
														<th width="10%">Auction Id</th>
														<th width="20%">Auction Name</th>
														<th width="15%">Company Name</th>
														<th width="15%">Location</th>
														<th width="20%">Date/Time</th>
														<th width="10%">Status</th>
														</tr>
												</thead>
												<tbody>
													<tr>												
														<td>M252</td>
														<td><a href="#">BHEL/BBR/ISG LTD/2/Adarsh Vihar/25087/20-20</a></td>
														<td>BHEL</td>
														<td>Bangalore</td>
														<td>23-03-2020 23:00:00</td>
														<td>Paid</td>
														</tr>
													<tr>												
														<td>M252</td>
														<td><a href="#">MSTC/BBR/ISG LTD/2/Adarsh Vihar/25087/20-20</a></td>
														<td>ISG LTD</td>
														<td>Uttrakhand</td>
														<td>23-03-2020 23:00:00</td>
														<td>Paid</td>
														</tr>
													<tr>												
														<td>M252</td>
														<td><a href="#">MSTC/BBR/BHRL LTD/2/Vihar/25087/20-20</a></td>
														<td>BHRL LTD</td>
														<td>Gujarat</td>
														<td>23-03-2020 23:00:00</td>
														<td>Paid</a></td>
														</tr>
													<tr>												
														<td>M252</td>
														<td><a href="#">MSTC/BBR/ONGC LTD/2/Vidyut Nagar/25087/20-20</a></td>
														<td>ONGC LTD</td>
														<td>Orrisa</td>
														<td>23-03-2020 23:00:00</td>
														<td>Paid</td>
														</tr>
													<tr>												
														<td>M252</td>
														<td><a href="#">MSTC/BBR/BSP LTD/2/Nehru Vihar/25087/20-20</a></td>
														<td>BSP</td>
														<td>Chhattisgarh</td>
														<td>23-03-2020 23:00:00</td>
														<td>Paid</td>
													</tr>
											</table>
											</div>
											
											
										</tbody>
										    		
								</div>
								
							<!--table2-->	
								<div class="tab-pane fade h-100 p-3 border border-primary" id="menu1" role="tabpanel" aria-labelledby="menu1-tab">
										<div class="cust">
											<nav class="navbar navbar-light text-white py-1" id="navbarSupportedContent">
													

									
									<form class="form-inline d-flex pull-right md-form form-sm active-cyan active-cyan-2">
											<i class="fa fa-search" aria-hidden="true"></i>
											<input class="form-control form-control-sm ml-2 w-35" type="text" placeholder="Search" aria-label="Search">
										</form>
										<form><label for="cars">Result:</label>
										<form><label for="cars">Result:</label>
											<select style="text-align:left" name="cars" id="cars">
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
										<tr><td>Select Date</td>
													<td><input class="name" type="Date" id="fname" name="fname" ></td>
													<td><input class="name" type="Date" id="fname" name="fname" ></td>
													</tr>
													<tr>
													
														<td colspan="5"> <form action="/action_page.php">
															<div class="form-check">
																<label class="form-check-label" for="check1">
																	<input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>Search by Auction Name
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
														<th width="10%">Auction Id</th>
														<th width="15%">Auction Name</th>
														<th width="12%">Company Name</th>
														<th width="12%">Location</th>
														<th width="20%">Date/Time</th>
														<th width="10%">Status</th>
														<th width="40%">Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>												
														<td>M252</td>
														<td><a href="#">BHEL/BBR/ISG LTD/2/Adarsh Vihar/25087/20-20</a></td>
														<td>BHEL</td>
														<td>Bangalore</td>
														<td>23-03-2020 23:00:00</td>
														<td style="color:green">Accepted</td>
														<td><a href="#"><button type="button" class="btn btn-primary btn-sm">Accept</button></a>
														<a href="#"><button type="button" class="btn btn-primary btn-sm">Reject</button></a></td>
														</tr>
													<tr>												
														<td>M252</td>
														<td><a href="#">MSTC/BBR/ISG LTD/2/Adarsh Vihar/25087/20-20</a></td>
														<td>ISG LTD</td>
														<td>Uttrakhand</td>
														<td>23-03-2020 23:00:00</td>
														<td style="color:red">Pending</td>
														<td><a href="#"><button type="button" class="btn btn-primary btn-sm">Accept</button></a>
														<a href="#"><button type="button" class="btn btn-primary btn-sm">Reject</button></a></td>
														</tr>
													<tr>												
														<td>M252</td>
														<td><a href="#">MSTC/BBR/BHRL LTD/2/Vihar/25087/20-20</a></td>
														<td>BHRL LTD</td>
														<td>Gujarat</td>
														<td>23-03-2020 23:00:00</td>
														<td style="color:green">Accepted</td>
														<td><a href="#"><button type="button" class="btn btn-primary btn-sm">Accept</button></a>
														<a href="#"><button type="button" class="btn btn-primary btn-sm">Reject</button></a></td>
														</tr>
													<tr>												
														<td>M252</td>
														<td><a href="#">MSTC/BBR/ONGC LTD/2/Vidyut Nagar/25087/20-20</a></td>
														<td>ONGC LTD</td>
														<td>Orrisa</td>
														<td>23-03-2020 23:00:00</td>
														<td style="color:green">Accepted</td>
														<td><a href="#"><button type="button" class="btn btn-primary btn-sm">Accept</button></a>
														<a href="#"><button type="button" class="btn btn-primary btn-sm">Reject</button></a></td>
														</tr>
													<tr>												
														<td>M252</td>
														<td><a href="#">MSTC/BBR/BSP LTD/2/Nehru Vihar/25087/20-20</a></td>
														<td>BSP</td>
														<td>Chhattisgarh</td>
														<td>23-03-2020 23:00:00</td>
														<td style="color:red">Rejected</td>
														<td><a href="#"><button type="button" class="btn btn-primary btn-sm">Accept</button></a>
														<a href="#"><button type="button" class="btn btn-primary btn-sm">Reject</button></a></td>
													</tr>
											</table>
											</div>
											
											
										</tbody>
										    		
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