
		 <?php 
	include('./a-header.php');
	
?>
		
	<div class="container dealsbox">
			 <div class="row">
				<div class="col-md-12">
						<div class="deals-header">
							<h4><i class="icon-dashboard"></i><i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp; Dashboard &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Server Time: 26:53:23</h4>
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
									<a class="nav-link active border border-primary border-bottom-0" id="hvd-tab" data-toggle="tab" href="#hvd" role="tab" aria-controls="hvd" aria-selected="true"><b>Auction Details</b></a>
								</li>
							</ul>

							<div class="tab-content w-100">
								<div class="tab-pane h-100 p-3 active border border-primary" id="hvd" role="tabpanel" aria-labelledby="hvd-tab">
										<div class="table-holder"> 
											<table class="table table-bordered table-sm">
												<thead class="thead-auc">
														<tr>
															<th colspan="7">Auction Details</th>
															
													    </tr>
														</thead>
														<tbody>
															<th width="10%">Auction Id</th>
															<th width="15%">Auction Name</th>
															<th width="15%">Seller / Company Name</th>
															<th width="15%">Auction Start Date</th>
															<th width="15%">Auction Close Date</th>
															<th width="20%">Auction Terms</th>
															</tr>
															</tbody>
															<tr>
															<td>Me133</td>
															<td><a href="#">EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</a> 1</td>
															<td>EEMT OMFED LTD</td>
															<td>20-03-2020 11:00:00</td>
															<td>21-03-20202</td>
															<td><a href="#"><u>Click here</u></a></td>
															</tr>
												</table>
												
												<table class="table table-bordered table-striped table-sm">
												<thead class="thead-auc">
												<tr>
															<th colspan="12">Open LOT Number</th>
													    </tr>
													<tr>
														<th class="uphead" width="20%">Auction Id <br>/Auction Name</th>
														<th class="uphead" width="10%">Location</th>
														<th class="uphead" width="10%">Close Time</th>
														<th class="uphead" width="10%">Time Left</th>
														<th class="uphead" width="10%">Quantity</th>
														<th class="uphead" width="10%">Unit</th>
														<th class="uphead" width="10%">Start Price</th>
														<th class="uphead" width="10%">Final Bid</th>
														<th class="uphead" width="20%">Your Bid(Per Unit)</th>
														<th class="uphead" width="20%">Bid</th>
														<th class="uphead" width="20%">Autobid</th>
													</tr>
												</thead>
												<tbody>
													<tr>												
														<td><b>Auction Id:</b> M189<br><b>Auction Name:</b> Horizontal Boring Machine</td>
														<td>Bangalore-KA</td>
														<td>20:14:03</td>
														<td>1 Hour</td>
														<td>1.9</td>
														<td>MT</td>
														<td>40,000</td>
														<td>2,00,000</td>
														<td><input class="name" type="text" id="fcname" name="fcname" ></td>
														<td><button type="button" class="btn btn-primary">Bid</button></td>
														<td><button type="button" class="btn btn-primary">AutoBid</button></td>
														
														</tr>
													<tr>												
														<td><b>Auction Id:</b> M189<br><b>Auction Name:</b> Horizontal Boring Machine</td>
														<td>Delhi</td>
														<td>16:14:03</td>
														<td>55 min</td>
														<td>1.9</td>
														<td>MT</td>
														<td>80,000</td>
														<td>1,45,000</td>
														<td><input class="name" type="text" id="fcname" name="fcname" ></td>
														<td><button type="button" class="btn btn-primary">Bid</button></td>
														<td><button type="button" class="btn btn-primary">AutoBid</button></td>
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
