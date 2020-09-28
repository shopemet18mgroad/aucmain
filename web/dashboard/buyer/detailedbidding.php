
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
									<a class="nav-link active border border-primary border-bottom-0" id="hvd-tab" data-toggle="tab" href="#hvd" role="tab" aria-controls="hvd" aria-selected="true"><b>Bidding History</b></a>
								</li>
							</ul>

							<div class="tab-content w-100">
								<div class="tab-pane h-100 p-3 active border border-primary" id="hvd" role="tabpanel" aria-labelledby="hvd-tab">
										<div class="table-holder"> 
										<table id="myTable" class="table table-bordered table-striped table-sm">
												<thead class="thead-auc">
												<tr>
													<th onclick="sortTable(0)" colspan="10">Bid History</th>
												</tr>
												<tr>
														<td class="btxt">Lot No</td>
														<td class="ltxt" width="50%">M342</td>
	 											    </tr>
													<tr>												
														<td class="btxt">Quantity</td>
														<td class="ltxt" width="50%">8.0</td>
														</tr>
													<tr>
														<td class="btxt">Location</td>
														<td class="ltxt" width="50%">Vellore</td>
													</tr>  
													<tr>
														<td class="btxt">Opening Time</td>
														<td class="ltxt" width="50%">22:55:23</td>
													</tr>
													</table>
													<table class="table table-bordered table-striped table-sm">
													<thead class="thead-auc">
													<tr>
													
														<th onclick="sortTable(1)" width="20%">Bid Amount</th>
														<th width="20%">Date</th>
														<th width="20%">Time</th>
													</tr>
												</thead>
												<tbody>
													<tr>												
														<td class="up">2,35,000</td>
														<td class="up">25-12-2019</td>
														<td class="up">08:20:37</td>
														</tr>
													<tr>												
														<td class="up">1,06,000</td>
														<td class="up">15-08-2020</td>
														<td class="up">11:23:58</td>
														</tr>
													<tr>												
														<td class="up">3,00,000</td>
														<td class="up">16-05-2020</td>
														<td class="up">08:22:04</td>
													</tr>
												
											</table>
											</div>
											
											
										</tbody>
										</div>    		
								</div>
								<nav aria-label="Page navigation example">
									<ul class="pagination justify-content-center pagination-sm">
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