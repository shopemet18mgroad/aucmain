
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
									<a class="nav-link active border border-primary border-bottom-0" id="hvd-tab" data-toggle="tab" href="#hvd" role="tab" aria-controls="hvd" aria-selected="true"><b>View Forthcoming Auction</b></a>
								</li>
							</ul>

							<div class="tab-content w-100">
								<div class="tab-pane h-100 p-3 active border border-primary" id="hvd" role="tabpanel" aria-labelledby="hvd-tab">
										<div class="table-holder"> 
										<table class="table table-bordered table-striped table-sm">
													<tr>
														
														<td>Select Category:</td>
														<td><select class="aaa" id="scategory" name="scategory" >
															<option value="one" selected>Ferrous</option>
															<option value="two">Non Ferrous</option>
															<option value="three" >Minor Metals</option>
															<option value="four">Plain paper</option>
															<option value="five">Granules</option>
															<option value="six">All Construction Materials</option>
															</select></td>
	 											    </tr>
													<tr>
														<td>Select Seller:</td>
														<td><select class="aaa" id="seller" name="seller" >
															<option value="one" selected>BHEL</option>
															<option value="two">Exide</option>
															<option value="three" >Hindustan Ltd</option>
															<option value="four">Aditya Birla Group</option>
															<option value="five" >JSW Steel</option>
															<option value="six">Nalco</option>
															</select></td>
	 											    </tr>
													</table>
													<div class= "center">
													<div class="select">
														<a href="#"><button type="button" class="btn btn-primary">View Upcoming Auction</button></a>
													</div>
													</div>
													
													
								
											<table class="table table-bordered table-striped table-sm">
												<thead class="thead-auc">
													<tr>
														<th width="60%">Auction Number</th>
														<th width="20%">PDF</th>
														<th width="20%">Start Date/Time</th>
														
														
													</tr>
												</thead>
												<tbody>
													<tr>												
														<td><a href="forthcoming_2.php">EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</a></td>
														<td><a href="#"><u>Download PDF</u></a></td>
														<td>23-03-2020 23:00:00</td>
														</tr>
													<tr>
														<td><a href="forthcoming_2.php">BHEL/BBR/ISG LTD/2/Adarsh Vihar/25087/20-20</a></td>
														<td><a href="#"><u>Download PDF</u></a></td>
														<td>24-11-2019 16:17:00</td>
													</tr>  
													<tr>
														<td><a href="forthcoming_2.php">EEMT/BBR/ONGC LTD/3/Orissa Vidyut Nagar/465895/18-20</a></td>
														<td><a href="#"><u>Download PDF</u></a></td>
														<td>14-07-2020 18:12:07</td>
													</tr>  
													<tr>												
														<td><a href="forthcoming_2.php">EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</a></td>
														<td><a href="#"><u>Download PDF</u></a></td>
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
