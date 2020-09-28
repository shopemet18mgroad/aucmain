
		 <?php 
	include('./a-header.php');
	
?>
		
		
		<div class="container dealsbox">
			 <div class="row">
				<div class="col-md-12">
						<div class="deals-header">
							<h4><i class="icon-dashboard"></i><i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp; Dashboard</h4>
						</div>
				</div>
			 </div>	
			 <div class="row">
				<div class="col-md-3">
					 <div class="mini-submenu">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</div>
					
			<?php 
	
	include('./a-menu.php');
?>		
		
		
				<div class="col-md-9">
					<div class="deals-tab-table">
							<ul class="nav nav-tabs border-0" id="myTab" role="tablist">
							
								<li class="nav-item">
									<a class="nav-link active border border-primary border-bottom-0" id="hvd-tab" data-toggle="tab" href="#hvd" role="tab" aria-controls="hvd" aria-selected="true"><b>My List</b></a>
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
													<tr>
														<td>Select Category:</td>
														<td><select class="aaa" id="scategory" name="scategory" >
															<option value="one" selected>Ferrous</option>
															<option value="two">Non Ferrous</option>
															<option value="three">Minor Metals</option>
															<option value="four">Plain paper</option>
															<option value="five">Granules</option>
															<option value="six">All Construction Materials</option>
															</select></td>
	 											    </tr>
													<tr>
														<td>Select Seller:</td>
														<td colspan="2"><select class="aaa" id="sseller" name="sseller" >
															<option value="one" selected>BHEL</option>
															<option value="two">Exide</option>
															<option value="three" >Hindustan Ltd</option>
															<option value="four">Aditya Birla Group</option>
															<option value="five" >JSW Steel</option>
															<option value="six">Nalco</option>
															</select></td>
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
														<th width="20%">Details</th>
														<th width="20%">EMD Payment</th>
													</tr>
												</thead>
												<tbody>
													<tr>												
														<td>M252</td>
														<td>BHEL/BBR/ISG LTD/2/Adarsh Vihar/25087/20-20</td>
														<td>BHEL</td>
														<td>Bangalore</td>
														<td>23-03-2020 23:00:00</td>
														<td>Paid</td>
														<td><a href="#"><button type="button" class="btn btn-primary btn-sm">View Auction</button></a></td>
														<td>-</td>
														</tr>
													<tr>												
														<td>M252</td>
														<td>MSTC/BBR/ISG LTD/2/Adarsh Vihar/25087/20-20</td>,
														<td>ISG LTD</td>
														<td>Uttrakhand</td>
														<td>23-03-2020 23:00:00</td>
														<td>Not Paid</td>
														<td class="up"><a href="#"><button type="button" class="btn btn-primary btn-sm" disabled>View Auction</button></a></td>
														<td><a href="#"><button type="button" class="btn btn-primary btn-sm">Pay</button></a></td>
																	
													</tr>
													<tr>												
														<td>M252</td>
														<td>MSTC/BBR/BHRL LTD/2/Vihar/25087/20-20</td>
														<td>BHRL LTD</td>
														<td>Gujarat</td>
														<td>23-03-2020 23:00:00</td>
														<td>Request</a></td>
														<td class="up"><a href="#"><button type="button" class="btn btn-primary btn-sm">View Auction</button></a></td>
														<td><a href="#"><button type="button" class="btn btn-primary btn-sm">Pay</button></a></td>
													</tr>
													<tr>												
														<td>M252</td>
														<td>MSTC/BBR/ONGC LTD/2/Vidyut Nagar/25087/20-20</td>
														<td>ONGC LTD</td>
														<td>Orrisa</td>
														<td>23-03-2020 23:00:00</td>
														<td>Request</td>
														<td><a href="#"><button type="button" class="btn btn-primary btn-sm">View Auction</button></a></td>
														<td><a href="#"><button type="button" class="btn btn-primary btn-sm">Pay</button></a></td>
													</tr>
													<tr>												
														<td>M252</td>
														<td>MSTC/BBR/BSP LTD/2/Nehru Vihar/25087/20-20</td>
														<td>BSP</td>
														<td>Chhattisgarh</td>
														<td>23-03-2020 23:00:00</td>
														<td>Not Paid</td>
														<td class="up"><a href="#"><button type="button" class="btn btn-primary btn-sm"disabled>View Auction</button></a></td>
														<td><a href="#"><button type="button" class="btn btn-primary btn-sm">Pay</button></a></td>
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
