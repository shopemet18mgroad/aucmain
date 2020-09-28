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
									<a class="nav-link active border border-primary border-bottom-0" id="hvd-tab" data-toggle="tab" href="#hvd" role="tab" aria-controls="hvd" aria-selected="true"><b>Report</b></a>
								</li>
							</ul>

							<div class="tab-content w-100">
								<div class="tab-pane h-100 p-3 active border border-primary" id="hvd" role="tabpanel" aria-labelledby="hvd-tab">
										<div class="table-holder"> 
										<table class="table table-bordered table-striped table-sm">
										<thead class="thead-auc">
										<tr><th colspan="10">Lost Bidding Products</th></tr>
													<tr>
														<th width="10%">Lot No.</th>
														<th width="20%">Lot Name</th>
														<th width="15%">Company Name</th>
														<th width="15%">Location</th>
														<th width="20%">Date/Time</th>
													</tr>
												</thead>
												<tbody>
													<tr>												
														<td>M252</td>
														<td><a href="#">BHEL/BBR/ISG LTD/2/Adarsh Vihar/25087/20-20</a></td>
														<td>BHEL</td>
														<td>Bangalore</td>
														<td>23-03-2020 23:00:00</td>
														</tr>
													<tr>												
														<td>M252</td>
														<td><a href="#">MSTC/BBR/ISG LTD/2/Adarsh Vihar/25087/20-20</a></td>
														<td>ISG LTD</td>
														<td>Uttrakhand</td>
														<td>23-03-2020 23:00:00</td>
													</tr>
													<tr>												
														<td>M252</td>
														<td><a href="#">MSTC/BBR/BHRL LTD/2/Vihar/25087/20-20</a></td>
														<td>BHRL LTD</td>
														<td>Gujarat</td>
														<td>23-03-2020 23:00:00</td>
													</tr>
													<tr>												
														<td>M252</td>
														<td><a href="#">MSTC/BBR/ONGC LTD/2/Vidyut Nagar/25087/20-20</a></td>
														<td>ONGC LTD</td>
														<td>Orrisa</td>
														<td>23-03-2020 23:00:00</td>
													</tr>
													<tr>												
														<td>M252</td>
														<td><a href="#">MSTC/BBR/BSP LTD/2/Nehru Vihar/25087/20-20</a></td>
														<td>BSP</td>
														<td>Chhattisgarh</td>
														<td>23-03-2020 23:00:00</td>
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
<?php 
	include('./a-footer.php');
	?>
