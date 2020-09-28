<?php 
	include('./a-header.php');
	include('./a-menubar.php');
?>
	
				<div class="col-md-9">
					<div class="deals-tab-table">
							<ul class="nav nav-tabs border-0" id="myTab" role="tablist">
							
								<li class="nav-item">
									<a class="nav-link active border border-primary border-bottom-0" id="hvd-tab" data-toggle="tab" href="#hvd" role="tab" aria-controls="hvd" aria-selected="true"><b>View Sales Data</b></a>
								</li>
							</ul>
                           <!--table-->
						   <div class="tab-content w-100" id="myTabContent">
								<div class="tab-pane h-100 p-3 fade show active border border-primary" id="hvd" role="tabpanel" aria-labelledby="hvd-tab">
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
										<div class="tab-content">										
										<table class="table table-bordered table-striped table-sm">
													
													<tr>
														<td>Select Date</td>
														<td><input type="Date" id="sdate" name="sdate" size="50"></td>
														<td><input type="Date" id="ldate" name="ldate" size="50"></td>
	 											    </tr>
													<tr>
														<td colspan="10"><div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Search By Company Name</label></td>
	 											    </tr>
													</table>
													<a href="#"><button type="button" class="btn btn-primary">Search</button></a>
							<!--table-->
							<div class="table-holder"> 
													
										<table class="table table-bordered table-striped table-sm mt-2">
													<thead class="thead-auc">
												
													<tr>
														
														<th class="uphead" width="10%">Auction Name</th>
														<th class="uphead" width="10%">Lot Name</th>
														<th class="uphead" width="10%">Seller Name</th>
														<th class="uphead" width="10%">Seller Location</th>
														<th class="uphead" width="10%">Date</th>
														<th class="uphead" width="10%">Amount</th>
														
														
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>SS Iron rod</td>
														<td>BSP</td>
														<td>BHEL</td>
														<td>Bangalore</td>
														<td>20-10-2019</td>
														<td>2,00,000</td>
													</tr>
													<tr>
														<td>SS Iron rod</td>
														<td>BSP</td>
														<td>BHEL</td>
														<td>Bangalore</td>
														<td>20-10-2019</td>
														<td>2,00,000</td>
													</tr>
													<tr>
														<td>SS Iron rod</td>
														<td>BSP</td>
														<td>BHEL</td>
														<td>Bangalore</td>
														<td>20-10-2019</td>
														<td>2,00,000</td>
													</tr>
												
															
													
											</table>
											</div>
											
											
										</tbody>
										    		
								</div>
							</div>
							</div>
							<!--nav-->
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
		
		
<?php 
	include('./a-footer.php');
	?>