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
									<a class="nav-link active border border-primary border-bottom-0" id="hvd-tab" data-toggle="tab" href="#hvd" role="tab" aria-controls="hvd" aria-selected="true"><b>View Details</b></a>
								</li>
								
							</ul>
						<!--table1-->
							<div class="tab-content w-100">
								<div class="tab-pane h-100 p-3 active border border-primary" id="hvd" role="tabpanel" aria-labelledby="hvd-tab">
										<div class="table-holder"> 
										<table class="table table-bordered table-striped table-sm">
												<table class="table table-bordered table-striped table-sm">
												<thead class="thead-auc">
												
													<tr>
														<th class="uphead" width="15%">Lot No <br>/Lot Name</th>
														<th class="uphead" width="10%">Location</th>
														<th class="uphead" width="10%">Start Time</th>
														<th class="uphead" width="10%">Close Time</th>
														<th class="uphead" width="10%">Quantity</th>
														<th class="uphead" width="10%">Unit</th>
														<th class="uphead" width="10%">Start Price</th>
														<th class="uphead" width="10%">Final Bid</th>
														
													</tr>
												</thead>
												<tbody>
													<tr>												
														<td class="up"><b>Lot No:</b> M189<br><b>Lot Name:</b> Horizontal Boring Machine</td>
														<td class="up">Bangalore-KA</td>
														<td class="up">16:00:00</td>
														<td class="up">20:14:03</td>
														<td class="up">1.9</td>
														<td class="up">MT</td>
														<td class="up">40,000</td>
														<td class="up">2,00,000</td>
														
													</tr>
													<tr>												
														<td class="up"><b>Lot No:</b> M189<br><b>Lot Name:</b> Horizontal Boring Machine</td>
														<td class="up">Delhi</td>
														<td class="up">12:15:00</td>
														<td class="up">16:14:03</td>
														<td class="up">1.9</td>
														<td class="up">MT</td>
														<td class="up">80,000</td>
														<td class="up">1,45,000</td>
														
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