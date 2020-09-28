<?php 
	include('./a-header.php');
	include('./a-menubar.php');
?>
	
				<div class="col-md-9">
					<div class="deals-tab-table">
							<ul class="nav nav-tabs border-0" id="myTab" role="tablist">
							
								<li class="nav-item">
									<a class="nav-link active border border-primary border-bottom-0" id="hvd-tab" data-toggle="tab" href="#hvd" role="tab" aria-controls="hvd" aria-selected="true"><b>view live Auction</b></a>
								</li>
								<li class="nav-item">
									<a class="nav-link border border-primary border-bottom-0" id="menu1-tab" data-toggle="tab" href="#menu1" role="tab" aria-controls="menu1" aria-selected="false"><b>view Forthcoming Auction</b></a>
								</li>
								<li class="nav-item">
									<a class="nav-link border border-primary border-bottom-0" id="menu2-tab" data-toggle="tab" href="#menu2" role="tab" aria-controls="menu2" aria-selected="false"><b>View Closed Auction</b></a>
								</li>
							</ul>
							<!--Table1-->
							<div class="tab-content w-100" id="myTabContent">
								<div class="tab-pane h-100 p-3 fade show active border border-primary" id="hvd" role="tabpanel" aria-labelledby="hvd-tab">
										<div class="cust">
											<nav class="navbar navbar-light text-white py-1" id="navbarSupportedContent">
											<form class="form-inline d-flex pull-right md-form form-sm active-cyan active-cyan-2">
												<i class="fa fa-search" aria-hidden="true"></i>
												<input class="form-control form-control-sm ml-2 w-35" type="text" placeholder="Search" aria-label="Search">
											</form>
											<form>
												<label for="cars">Result:</label>
												<select style="text-align:left" name="cars" id="cars">
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
										<div class="tab-content">										
										<table class="table table-bordered table-striped table-sm">
													
													<tr>
														<td>Select Category:</td>
														<td><select class="aaa" id="cars" name="cars" >
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
														<td><select class="aaa" id="cars" name="cars" >
															<option value="one" selected>BHEL</option>
															<option value="two">Exide</option>
															<option value="three" >Hindustan Ltd</option>
															<option value="four">Aditya Birla Group</option>
															<option value="five" >JSW Steel</option>
															<option value="six">Nalco</option>
															</select></td>
	 											    </tr>
													</table>
													<a href="#"><button type="button" class="btn btn-primary">View Live Auctions</button></a>
													
													
								
											<table class="table table-bordered table-striped table-sm mt-2">
												<thead class="thead-auc">
													<tr>
														<th width="60%">Click for Auction</th>
													</tr>
												</thead>
												<tbody>
													<tr>												
														<td><a href="a-liveauction_2.php">EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</a></td>
													</tr>
													<tr>
														<td><a href="a-liveauction_2.php">BHEL/BBR/ISG LTD/2/Adarsh Vihar/25087/20-20</a></td>
													</tr>  
													<tr>
														<td><a href="a-liveauction_2.php">REMT/BBR/ONGC LTD/3/Tamil Nadu/Vellore Dist/465895/18-20</a></td>
													</tr>  
													<tr>												
														<td><a href="a-liveauction_2.php">HMT/BBR/Adnani logistic Ltd/4/Vidyut Nagar/99087/19-20</a></td>
													</tr>
													<tr>												
														<td><a href="a-liveauction_2.php">BEL/BBR/ONGC LTD/5/Nehru Nagar/99087/19-20</a></td>
													</tr>
											</table>
											</div>
											
											
										</tbody>
										</div>    		
								</div>
								<!--Table2-->
								<div class="tab-pane fade h-100 p-3 border border-primary" id="menu1" role="tabpanel" aria-labelledby="menu1-tab">
										<div class="cust">
											<nav class="navbar navbar-light text-white py-1" id="navbarSupportedContent">
											<form class="form-inline d-flex pull-right md-form form-sm active-cyan active-cyan-2">
												<i class="fa fa-search" aria-hidden="true"></i>
												<input class="form-control form-control-sm ml-2 w-35" type="text" placeholder="Search" aria-label="Search">
											</form>
											<form>
												<label for="cars">Result:</label>
												<select style="text-align:left" name="cars" id="cars">
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
														<td><select class="aaa" id="cars" name="cars" >
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
														<td colspan="2"><select class="aaa" id="cars" name="cars" >
															<option value="one" selected>BHEL</option>
															<option value="two">Exide</option>
															<option value="three" >Hindustan Ltd</option>
															<option value="four">Aditya Birla Group</option>
															<option value="five" >JSW Steel</option>
															<option value="six">Nalco</option>
															</select></td>
	 											    </tr>
													</table>
												
														<a href="#"><button type="button" class="btn btn-primary">Upcoming Auction</button></a>
													
											<table class="table table-bordered table-striped table-sm mt-2">
												<thead class="thead-auc">
													<tr>
														<th width="50%">Auction Number</th>
														<th width="20%">PDF</th>
														<th width="20%">Start Date/Time</th>
														<th width="20%">Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>												
														<td><a href="a-forthcoming_2.php">EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</a></td>
														<td><i class="fa fa-download"></i></td>
														<td>23-03-2020 23:00:00</td>
														<td><a href="a-sellerreg.php">
															<i class="fa fa-edit"></i> 
															</a>
															<a href="" >
															<i class="fa fa-trash" style="color:black"></i> 
															</a>
															<a href="" >
															<i class="fa fa-check" style="color:green"></i> 
															</a></td>
														</tr>
													<tr>
														<td><a href="a-forthcoming_2.php">BHEL/BBR/ISG LTD/2/Adarsh Vihar/25087/20-20</a></td>
														<td><i class="fa fa-download"></i></td>
														<td>24-11-2019 16:17:00</td>
														<td><a href="a-sellerreg.php">
															<i class="fa fa-edit"></i> 
															</a>
															<a href="" >
															<i class="fa fa-trash" style="color:black"></i> 
															</a>
															<a href="" >
															<i class="fa fa-check" style="color:green"></i> 
															</a></td>
													</tr>  
													<tr>
														<td><a href="a-forthcoming_2.php">EEMT/BBR/ONGC LTD/3/Orissa Vidyut Nagar/465895/18-20</a></td>
														<td><i class="fa fa-download"></i></td>
														<td>14-07-2020 18:12:07</td>
														<td><a href="a-sellerreg.php">
															<i class="fa fa-edit"></i> 
															</a>
															<a href="" >
															<i class="fa fa-trash" style="color:black"></i> 
															</a>
															<a href="" >
															<i class="fa fa-check" style="color:green"></i> 
															</a></td>
													</tr>  
													<tr>												
														<td><a href="a-forthcoming_2.php">EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</a></td>
														<td><i class="fa fa-download"></i></td>
														<td>23-03-2020 23:00:00</td>
														<td><a href="a-sellerreg.php">
															<i class="fa fa-edit"></i> 
															</a>
															<a href="" >
															<i class="fa fa-trash" style="color:black"></i> 
															</a>
															<a href="" >
															<i class="fa fa-check" style="color:green"></i> 
															</a></td>
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
											<form>
												<label for="cars">Result:</label>
												<select style="text-align:left" name="cars" id="cars">
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
									<table class="table table-bordered table-striped table-sm">
										<tr>
											<td>Select Date</td>
											<td><input class="name" type="Date" id="fname" name="fname" ></td>
											<td><input class="name" type="Date" id="fname" name="fname" ></td>
										</tr>
										<tr>
											<td>Select Category:</td>
											<td colspan="2"><select class="aaa" id="cars" name="cars" >
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
											<td colspan="2"><select class="aaa" id="cars" name="cars" >
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
														<th class="uphead" width="10%">Company Name </th>
														<th class="uphead" width="20%">Lot No</th>
														<th class="uphead" width="20%">Lot Name</th>
														<th class="uphead" width="10%">Location</th>
														<th class="uphead" width="10%">Starting Date</th>
														<th class="uphead" width="10%">Closing Date</th>
														<th class="uphead" width="10%">Status</th>
												</tr>
												</thead>
												<tbody>
													<tr>												
														<td class="up">BHEL Ltd.</td>
														<td class="up">M293</td>
														<td class="up">Horizontal Boring Machine</td>
														<td class="up">Uttrakhand</td>
														<td class="up">20-07-2019</td>
														<td class="up">21-07-2019</td>
														<td class="up">Concluded</td>
													</tr>
													<tr>												
														<td class="up">BSP</td>
														<td class="up">E687</td>
														<td class="up">SS Iron rod</td>
														<td class="up">Bhilai</td>
														<td class="up">16-03-2020</td>
														<td class="up">17-03-2020</td>
														<td class="up">Failed</td>
													</tr>
													<tr>												
														<td class="up">Paradip port  trust</td>
														<td class="up">E689</td>
														<td class="up">Jig Boring Machine</td>
														<td class="up">Gandhi</td>
														<td class="up">14-01-2020</td>
														<td class="up">15-01-2020</td>
														<td class="up">Failed</td>
													</tr>
													<tr>												
														<td class="up">Paradip </td>
														<td class="up">E689</td>
														<td class="up">Boring Machine</td>
														<td class="up">Gandhi</td>
														<td class="up">14-01-2020</td>
														<td class="up">15-01-2020</td>
														<td class="up">Concluded</td>
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
