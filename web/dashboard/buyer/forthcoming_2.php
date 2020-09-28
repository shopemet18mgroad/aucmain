
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
									<a class="nav-link active border border-primary border-bottom-0" id="hvd-tab" data-toggle="tab" href="#hvd" role="tab" aria-controls="hvd" aria-selected="true"><b>Auction Detail</b></a>
								</li>
							</ul>

							<div class="tab-content w-100">
								<div class="tab-pane h-100 p-3 active border border-primary" id="hvd" role="tabpanel" aria-labelledby="hvd-tab">
										<div class="table-holder"> 
											<table class="table table-bordered table-sm">
												
												<thead class="thead-auc">
												
													<tr>
													<th colspan="7">Event Details</th>
													</tr>
												</thead>
												<tbody>
												<tr><th width="40%">Event No.</th>
												<th width="20%">Opening Date/Time</th>
												<th width="20%">Closing Date/Time</th>
												<th width="20%">EMD Type</th>
												
												</tr>
													<tr>
														
														<td><a href="#">EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</a></</td>
														<td>23-03-2020 23:00:00</td>
														<td>24-11-2019 16:17:00</td>
														<td>No EMD</td>
													</tr>
																								
												</tbody>
												</table>
													<table class="table table-bordered table-sm">
														<thead class="thead-auc">
														<tr>
															<th colspan="9">Sellers Details</th>
													    </tr>
														</thead>
														<tbody>
															<tr>
															<th width="15%">Company Id</th>
															<th width="15%">Seller / Company Name</th>
															<th width="15%">Location</th>
															<th width="15%">Street</th>
															<th width="20%">City</th>
															<th width="10%">Phone Number</th>
															<th width="15%">Email</th>
															<th width="20%">Contact Person</th>
															</tr>
															</tbody>
															<tr>
															<td>010</td>
															<td>OMFED LTD</td>
															<td>Bangalore</td>
															<td>Shashi Nagar</td>
															<td>Bangalore-560013</td>
															<td>2238521</td>
															<td>XYZ@gmail.com</td>
															<td>Shri S.K. Reddy</td>
															</tr>
												</table>
												
												<table class="table table-bordered table-striped table-sm">
												<thead class="thead-auc">
													<tr>
														<th width="20%">Auction Id /Lot Name</th>
														<th width="20%">Lot Description</th>
														<th width="20%">Quantity</th>
														<th width="20%">GST</th>
														<th width="20%">Location</th>
													</tr>
												</thead>
												<tbody>
													<tr>												
														<td><b>Auction Id:</b> M189<br><b>Lot Name:</b> Horizontal Boring Machine</td>
														<td><a href="#">Machine Description- Horizontal Boring Machine</a></td>
														<td>1.0 Lot</td>
														<td>18.0</td>
														<td>Bangalore-KA</td>
														</tr>
													<tr>												
														<td><b>Auction Id:</b> M189<br><b>Lot Name:</b> Horizontal Boring Machine</td>
														<td><a href="#">Machine Description- Horizontal Boring Machine</a></td>
														<td>1.0 Lot</td>
														<td>18.0</td>
														<td>Bangalore-KA</td>
														</tr>
											</table>
											</div>
											
											
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
