<?php 
	include('./a-header.php');
	include('./a-menubar.php');
?>
	
				<div class="col-md-9">
					<div class="deals-tab-table">
							<ul class="nav nav-tabs border-0" id="myTab" role="tablist">
							
								<li class="nav-item">
									<a class="nav-link active border border-primary border-bottom-0" id="hvd-tab" data-toggle="tab" href="#hvd" role="tab" aria-controls="hvd" aria-selected="true"><b>Best Buyer</b></a>
								</li>
								<li class="nav-item">
									<a class="nav-link border border-primary border-bottom-0" id="menu4-tab" data-toggle="tab" href="#menu4" role="tab" aria-controls="menu4" aria-selected="false"><b>Non-Performing Buyer</b></a>
								</li>
								<li class="nav-item">
									<a class="nav-link border border-primary border-bottom-0" id="menu1-tab" data-toggle="tab" href="#menu1" role="tab" aria-controls="menu1" aria-selected="false"><b>Best Seller</b></a>
								</li>
								
								<li class="nav-item">
									<a class="nav-link border border-primary border-bottom-0" id="menu3-tab" data-toggle="tab" href="#menu3" role="tab" aria-controls="menu3" aria-selected="false"><b>Non-Performing Seller</b></a>
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
																	<input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>Search by Auction Name
																</label>
															</div></form></td>
	 											    </tr>
													<tr>
													
														<td colspan="5"> <div class="form-check">
														<label class="form-check-label" for="check3">
															<input type="checkbox" class="form-check-input" id="check3" name="option3" value="something">Total Number of auction 
														</label>
													</div></td>
	 											    </tr>
													
													</table>
													
														<a href="#"><button type="button" class="btn btn-primary">Search</button></a>
													
										<table class="table table-bordered table-striped table-sm mt-2">
										<thead class="thead-auc">
										
													<tr>
													<th width="15%">Company Name</th>
														<th width="15%">Total Revenue</th>
														<th width="20%">Date</th>
														<th width="10%">Event Number</th>
														</tr>
												</thead>
												<tbody>
													<tr>												
														<td>BHEL</td>
														<td>20,20,800</td>
														<td>23-03-2020</td>
														<td>50</td>
														</tr>
													<tr>												
														<td>ISG LTD</td>
														<td>3,50,000</td>
														<td>23-03-2020</td>
														<td>40</td>
														</tr>
													<tr>												
														<td>BHRL LTD</td>
														<td>2,00,000</td>
														<td>23-03-2020</td>
														<td>30</td>
														</tr>
													<tr>												
														<td>ONGC LTD</td>
														<td>99,000</td>
														<td>23-03-2020</td>
														<td>30</td>
														</tr>
													<tr>												
														<td>BSP</td>
														<td>75,000</td>
														<td>23-03-2020</td>
														<td>30</td>
													</tr>
											</tbody>
											</table>
											</div>
											
											
										
										    		
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
													<td><input class="name" type="Date" id="lresult" name="lresult" ></td>
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
															<input type="checkbox" class="form-check-input" id="check3" name="option3" value="something">Total Number of Amount
														</label>
													</div></td>
	 											    </tr>
													
													</table>
													
													
													<a href="#"><button type="button" class="btn btn-primary">Search</button></a>

								
											<table class="table table-bordered table-striped table-sm mt-2">
											<thead class="thead-auc">
										
													<tr>
														<th width="15%">Company Name</th>
														<th width="20%">Date</th>
														<th width="15%">Total Revenue</th>
														<th width="15%">Event Number</th>
														<th width="10%">Total Amount</th>
														</tr>
												</thead>
												<tbody>
													<tr>												
														<td>BHEL</td>
														<td>23-03-2020</td>
														<td>80,20,800</td>
														<td>120</td>
														<td>20,20,800</td>
														</tr>
													<tr>												
														<td>ISG LTD</td>
														<td>2-05-2019</td>
														<td>50,20,800</td>
														<td>110</td>
														<td>5,20,800</td>
														</tr>
													<tr>												
														<td>BHRL LTD</td>
														<td>17-02-2020</td>
														<td>30,20,000</td>
														<td>60</td>
														<td>3,20,800</td>
														</tr>
													<tr>												
														<td>ONGC LTD</td>
														<td>03-03-2020</td>
														<td>5,20,800</td>
														<td>55</td>
														<td>1,20,000</td>
														</tr>
													<tr>												
														<td>BSP</td>
														<td>29-08-2020</td>
														<td>2,20,800</td>
														<td>20</td>
														<td>10000</td>
													</tr>
											</tbody>
											</table>
											</div>
									</div>
									
						
									
									
									<!--table4-->
									<div class="tab-pane fade h-100 p-3 border border-primary" id="menu3" role="tabpanel" aria-labelledby="menu3-tab">
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
													<td><input class="name" type="Date" id="lresult" name="lresult" ></td>
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
															<input type="checkbox" class="form-check-input" id="check3" name="option3" value="something">Search Total Number of Event
														</label>
													</div></td>
	 											    </tr>
													
													</table>
													
													
													<a href="#"><button type="button" class="btn btn-primary">Search</button></a>

								
											<table class="table table-bordered table-striped table-sm mt-2">
											<thead class="thead-auc">
										
													<tr>
														<th width="15%">Company Name</th>
														<th width="20%">Date</th>
														<th width="15%">Total Revenue</th>
														<th width="15%">Event Number</th>
														<th width="10%">Total Amount</th>
														</tr>
												</thead>
												<tbody>
													<tr>												
														<td>BHEL</td>
														<td>23-03-2020</td>
														<td>0</td>
														<td>0</td>
														<td>0</td>
													</tr>
													<tr>												
														<td>ISG LTD</td>
														<td>2-05-2019</td>
														<td>0</td>
														<td>0</td>
														<td>0</td>
													</tr>
													<tr>												
														<td>BHRL LTD</td>
														<td>17-02-2020</td>
														<td>300</td>
														<td>1</td>
														<td>50</td>
														</tr>
													<tr>												
														<td>ONGC LTD</td>
														<td>03-03-2020</td>
														<td>500</td>
														<td>3</td>
														<td>80</td>
														</tr>
													<tr>												
														<td>BSP</td>
														<td>29-08-2020</td>
														<td>1000</td>
														<td>6</td>
														<td>120</td>
													</tr>
											</tbody>
											</table>
											</div>
									</div>
								
							<!--table5-->
								<div class="tab-pane fade h-100 p-3 border border-primary" id="menu4" role="tabpanel" aria-labelledby="menu4-tab">
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
																	<input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>Search by Auction Name
																</label>
															</div></form></td>
	 											    </tr>
													<tr>
													
														<td colspan="5"> <div class="form-check">
														<label class="form-check-label" for="check3">
															<input type="checkbox" class="form-check-input" id="check3" name="option3" value="something">Search By Company Name
														</label>
													</div></td>
	 											    </tr>
													
													</table>
													
													
													<a href="#"><button type="button" class="btn btn-primary">Search</button></a>

								
											<table class="table table-bordered table-striped table-sm mt-2">
											<thead class="thead-auc">
										
													<tr>
														<th width="15%">Company Name</th>
														<th width="20%">From Date</th>
														<th width="20%">To Date</th>
														<th width="15%">Event Number</th>
												</tr>
												</thead>
												<tbody>
													<tr>												
														<td>BHEL</td>
														<td>23-03-2020</td>
														<td>23-03-2020</td>
														<td>0</td>
													</tr>
													<tr>												
														<td>ISG LTD</td>
														<td>2-05-2019</td>
														<td>2-05-2019</td>
														<td>0</td>
													</tr>
													<tr>												
														<td>BHRL LTD</td>
														<td>17-02-2020</td>
														<td>2-05-2019</td>
														<td>300</td>
														</tr>
													<tr>												
														<td>ONGC LTD</td>
														<td>03-03-2020</td>
														<td>2-05-2019</td>
														<td>500</td>
														</tr>
													<tr>												
														<td>BSP</td>
														<td>29-08-2020</td>
														<td>2-05-2019</td>
														<td>1000</td>
													</tr>
											</tbody>
											</table>
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