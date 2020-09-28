
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
									<a class="nav-link active border border-primary border-bottom-0" id="hvd-tab" data-toggle="tab" href="#hvd" role="tab" aria-controls="hvd" aria-selected="true"><b>AutoBid</b></a>
								</li>
							</ul>

							<div class="tab-content w-100">
								<div class="tab-pane h-100 p-3 active border border-primary" id="hvd" role="tabpanel" aria-labelledby="hvd-tab">
										<div class="table-holder"> 
											<table class="table table-bordered table-striped table-sm">
												<table class="table table-bordered table-striped table-sm">
												<thead class="thead-auc">
												<tr>
													<th colspan="10">Enter Autobid info</th>
												</tr>
													<tr>
														<th class="uphead" width="20%">Lot No</th>
														<th class="uphead" width="20%">Lot Name</th>
														<th class="uphead" width="20%">Final Bid</th>
														<th class="uphead" width="30%">Your Bid(Per Unit)</th>
														<th class="uphead" width="40%">Your Bid(Max)</th>
														<th class="uphead" width="10%">Submit</th>
													</tr>
												</thead>
												<tbody>
													<tr>												
														<td>M189</td>
														<td>Horizontal Boring Machine</td>
														<td>2,50,000</td>
														<td><input  type="text" id="fcname" name="fcname" ></td>
														<td><input  type="text" id="fmax" name="fmax"></td>
														<td><button type="button" class="btn btn-primary">Autobid</button></td>
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
