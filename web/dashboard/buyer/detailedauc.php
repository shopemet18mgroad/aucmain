
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
									<a class="nav-link active border border-primary border-bottom-0" id="hvd-tab" data-toggle="tab" href="#hvd" role="tab" aria-controls="hvd" aria-selected="true"><b>Bidding Details</b></a>
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
															<option value="three" >Minor Metals</option>
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
												<tr>
															<th colspan="10">Details of Auction</th>
													    </tr>
													<tr>
														<th class="uphead" width="10%">Company Name </th>
														<th class="uphead" width="20%">Lot No</th>
														<th class="uphead" width="20%">Lot Name</th>
														<th class="uphead" width="10%">Location</th>
														<th class="uphead" width="10%">Starting Date</th>
														<th class="uphead" width="10%">Closing Date</th>
														<th class="uphead" width="10%">Download</th>
													</tr>
												</thead>
												<tbody>
													<tr>												
														<td class="up"><a href="viewdetail.php">BHEL Ltd.</a></td>
														<td class="up">M293</td>
														<td class="up">Horizontal Boring Machine</td>
														<td class="up">Uttrakhand</td>
														<td class="up">20-07-2019</td>
														<td class="up">21-07-2019</td>
														<td class="up"><i class="fa fa-download"></i></td>
													</tr>
													<tr>												
														<td class="up"><a href="viewdetail.php">BSP</a></td>
														<td class="up">E687</td>
														<td class="up">SS Iron rod</td>
														<td class="up">Bhilai</td>
														<td class="up">16-03-2020</td>
														<td class="up">17-03-2020</td>
														<td class="up"><i class="fa fa-download"></i></td>
													</tr>
													<tr>												
														<td class="up"><a href="viewdetail.php">Paradip port  trust</a></td>
														<td class="up">E689</td>
														<td class="up">Jig Boring Machine</td>
														<td class="up">Gandhi</td>
														<td class="up">14-01-2020</td>
														<td class="up">15-01-2020</td>
														<td class="up"><i class="fa fa-download"></i></td>
													</tr>
													<tr>												
														<td class="up"><a href="viewdetail.php">Paradip</a> </td>
														<td class="up">E689</td>
														<td class="up">Boring Machine</td>
														<td class="up">Gandhi</td>
														<td class="up">14-01-2020</td>
														<td class="up">15-01-2020</td>
														<td class="up"><i class="fa fa-download"></i></td>
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
		</div>
<?php 
	include('./a-footer.php');
	?>