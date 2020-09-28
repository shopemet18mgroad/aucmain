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
									<a class="nav-link active border border-primary border-bottom-0" id="hvd-tab" data-toggle="tab" href="#hvd" role="tab" aria-controls="hvd" aria-selected="true"><b>Manual Bid</b></a>
								</li>
								<li class="nav-item">
									<a class="nav-link border border-primary border-bottom-0" id="menu1-tab" data-toggle="tab" href="#menu1" role="tab" aria-controls="menu1" aria-selected="false"><b>Autobid</b></a>
								</li>
								<li class="nav-item">
									<a class="nav-link border border-primary border-bottom-0" id="menu2-tab" data-toggle="tab" href="#menu2" role="tab" aria-controls="menu2" aria-selected="false"><b>My Auction</b></a>
								</li>
							</ul>
						<!--table1-->
							<div class="tab-content w-100">
								<div class="tab-pane h-100 p-3 active border border-primary" id="hvd" role="tabpanel" aria-labelledby="hvd-tab">
										<div class="table-holder"> 
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
										<table class="table table-bordered table-striped table-sm">
									
										<tr><td>Select Date</td>
													<td><input class="name" type="Date" id="sdate" name="sdate" ></td>
													<td><input class="name" type="Date" id="ldate" name="ldate" ></td>
													</tr>
										<tr>
														<td>Select Category:</td>
														<td colspan="2"><select class="aaa" id="scategory" name="scategory" >
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
													</taresult
												
														<a href="#"><button type="button" class="btn btn-primary">Search</button></a>
												<table class="table table-bordered table-striped table-sm mt-2">
												<thead class="thead-auc">
												
													<tr>
														<th class="uphead" width="15%">Auction Id <br>/Auction Name</th>
														<th class="uphead" width="10%">Location</th>
														<th class="uphead" width="10%">Start Time</th>
														<th class="uphead" width="10%">Close Time</th>
														<th class="uphead" width="10%">Quantity</th>
														<th class="uphead" width="10%">Unit</th>
														<th class="uphead" width="10%">Start Price</th>
														<th class="uphead" width="10%">Final Bid</th>
														<th class="uphead" width="10%">Pay EMD</th>
														<th class="uphead" width="15%">Your Bid(Per Unit)</th>
														<th class="uphead" width="10%">Bid</th>
													</tr>
												</thead>
												<tbody>
													<tr>												
														<td class="up"><b>Auction Id:</b> M189<br><b>Auction Name:</b> Horizontal Boring Machine</td>
														<td class="up">Bangalore-KA</td>
														<td class="up">16:00:00</td>
														<td class="up">20:14:03</td>
														<td class="up">1.9</td>
														<td class="up">MT</td>
														<td class="up">40,000</td>
														<td class="up">2,00,000</td>
														<td class="up"><a href="#"><u>Pay Now</u></a></td>
														<td class="up"><input class="name" type="text" id="fcname" name="fcname" ></td>
														<td class="up"><button type="button" class="btn btn-primary">Bid</button></td>
													</tr>
													<tr>												
														<td class="up"><b>Auction Id:</b> M189<br><b>Auction Name:</b> Horizontal Boring Machine</td>
														<td class="up">Delhi</td>
														<td class="up">12:15:00</td>
														<td class="up">16:14:03</td>
														<td class="up">1.9</td>
														<td class="up">MT</td>
														<td class="up">80,000</td>
														<td class="up">1,45,000</td>
														<td class="up"><a href="#"><u>Pay Now</u></a></td>
														<td class="up"><input class="name" type="text" id="fcname" name="fcname" ></td>
														<td class="up"><button type="button" class="btn btn-primary">Bid</button></td>
													</tr>
											</table>
											</div>
											
											
										</tbody>
										</div> 

				<!--table2-->
									<div class="tab-pane fade h-100 p-3 border border-primary" id="menu1" role="tabpanel" aria-labelledby="menu1-tab">										<div class="table-holder"> 
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
									<table class="table table-bordered table-striped table-sm">
									
										<tr><td>Select Date</td>
													<td><input class="name" type="Date" id="sdate" name="sdate" ></td>
													<td><input class="name" type="Date" id="ldate" name="ldate" ></td>
													</tr>
										<tr>
														<td>Select Category:</td>
														<td colspan="2"><select class="aaa" id="scategory" name="scategory" >
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
										
										<table class="table table-bordered table-striped table-sm">
												<table class="table table-bordered table-striped table-sm">
												<thead class="thead-auc">
												<tr>
													<th colspan="10">Enter Autobid info</th>
												</tr>
													<tr>
														<th class="uphead" width="20%">Auction Id</th>
														<th class="uphead" width="20%">Auction Name</th>
														<th class="uphead" width="20%">Final Bid</th>
														<th class="uphead" width="15%">Pay EMD</th>
														<th class="uphead" width="25%">Your Bid(Per Unit)</th>
														<th class="uphead" width="25%">Your Bid(Max)</th>
														<th class="uphead" width="10%">Submit</th>
													</tr>
												</thead>
												<tbody>
													<tr>												
														<td class="up">M189</td>
														<td class="up">Horizontal Boring Machine</td>
														<td class="up">2,50,000</td>
														<td class="up"><a href="#"><u>Pay Now</u></a></td>
														<td class="up"><input  type="text" id="fcname" name="fcname" ></td>
														<td class="up"><input  type="text" id="fmax" name="fmax"></td>
														<td class="up"><button type="button" class="btn btn-primary">Autobid</button></td>
													</tr>
													
											</table>
											</div>
											
											
										</tbody>
										</div>  

								<!--table3-->
										<div class="tab-pane fade h-100 p-3 border border-primary" id="menu2" role="tabpanel" aria-labelledby="menu2-tab">										<div class="table-holder"> 
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
												<option value="volvo">20</option>
												<option value="saab">25</option>
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
										<tr><th colspan="10">EMD</th></tr>
													<tr>
														<th width="10%">Auction Id</th>
														<th width="20%">Lot Name</th>
														<th width="15%">Company Name</th>
														<th width="15%">Location</th>
														<th width="20%">Date/Time</th>
														<th width="20%">EMD</th>
													</tr>
												</thead>
												<tbody>
													<tr>												
														<td class="up">M252</td>
														<td class="up"><a href="#">BHEL/BBR/ISG LTD/2/Adarsh Vihar/25087/20-20</a></td>
														<td class="up">BHEL</td>
														<td class="up">Bangalore</td>
														<td class="up">23-03-2020 23:00:00</td>
														<td class="up">Paid</td>
														</tr>
													<tr>												
														<td class="up">M252</td>
														<td class="up"><a href="#">MSTC/BBR/ISG LTD/2/Adarsh Vihar/25087/20-20</a></td>
														<td class="up">ISG LTD</td>
														<td class="up">Uttrakhand</td>
														<td class="up">23-03-2020 23:00:00</td>
														<td class="up">Paid</td>
													</tr>
													<tr>												
														<td class="up">M252</td>
														<td class="up"><a href="#">MSTC/BBR/BHRL LTD/2/Vihar/25087/20-20</a></td>
														<td class="up">BHRL LTD</td>
														<td class="up">Gujarat</td>
														<td class="up">23-03-2020 23:00:00</td>
														<td class="up">Paid</td>
													</tr>
													<tr>												
														<td class="up">M252</td>
														<td class="up"><a href="#">MSTC/BBR/ONGC LTD/2/Vidyut Nagar/25087/20-20</a></td>
														<td class="up">ONGC LTD</td>
														<td class="up">Orrisa</td>
														<td class="up">23-03-2020 23:00:00</td>
														<td class="up">Paid</td>
													</tr>
													<tr>												
														<td class="up">M252</td>
														<td class="up"><a href="#">MSTC/BBR/BSP LTD/2/Nehru Vihar/25087/20-20</a></td>
														<td class="up">BSP</td>
														<td class="up">Chhattisgarh</td>
														<td class="up">23-03-2020 23:00:00</td>
														<td class="up">Paid</td>
													</tr>
											</table>
											</div>
										</tbody>
								</div>
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
