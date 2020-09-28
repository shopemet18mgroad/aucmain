<?php 
	include('./a-header.php');
	include('./a-menubar.php');
?>
	
				<div class="col-md-9">
					<div class="deals-tab-table">
							<ul class="nav nav-tabs border-0" id="myTab" role="tablist">
							
								<li class="nav-item">
									<a class="nav-link active border border-primary border-bottom-0" id="hvd-tab" data-toggle="tab" href="#hvd" role="tab" aria-controls="hvd" aria-selected="true"><b>Closed Auction</b></a>
								</li>
								<li class="nav-item">
									<a class="nav-link  border border-primary border-bottom-0" id="bidsum-tab" data-toggle="tab" href="#bidsum" role="tab" aria-controls="bidsum" aria-selected="false"><b>Bid Summary</b></a>
								</li>
								<li class="nav-item">
									<a class="nav-link border border-primary border-bottom-0" id="selesre-tab" data-toggle="tab" href="#selesre" role="tab" aria-controls="selesre" aria-selected="false"><b>Sales Report</b></a>
								</li>
								<li class="nav-item">
									<a class="nav-link border border-primary border-bottom-0" id="unsold-tab" data-toggle="tab" href="#unsold" role="tab" aria-controls="unsold" aria-selected="unsold"><b>Unsold Products</b></a>
								</li>
								<li class="nav-item">
									<a class="nav-link  border border-primary border-bottom-0" id="winner-tab" data-toggle="tab" href="#winner" role="tab" aria-controls="winner" aria-selected="winner"><b>Bid Winner</b></a>
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
										<div class="tab-content">										
										<table class="table table-bordered table-striped table-sm">
													
													<tr>
														<td>Select Date</td>
														<td><input type="Date" id="sdate" name="sdate" size="50"></td>
														<td><input type="Date" id="ldate" name="ldate" size="50"></td>
	 											    </tr>
													<tr>
														<td colspan="10"><div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Search By Company Name</label></td>
	 											    </tr>
													</table>
													<a href="#"><button type="button" class="btn btn-primary">Search</button></a>
													
													
								
											
									
								
								
								<!--table3-->
								
																			
										<div class="table-holder"> 
													
										<table class="table table-bordered table-striped table-sm mt-2">
													<thead class="thead-auc">
												
													<tr>
														<th class="uphead" width="10%">Company Name </th>
														<th class="uphead" width="20%">Auction Id</th>
														<th class="uphead" width="20%">Auction Name</th>
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
														<td class="up">Closed</td>
													</tr>
													<tr>												
														<td class="up">BSP</td>
														<td class="up">E687</td>
														<td class="up">SS Iron rod</td>
														<td class="up">Bhilai</td>
														<td class="up">16-03-2020</td>
														<td class="up">17-03-2020</td>
														<td class="up">Closed</td>
													</tr>
													<tr>												
														<td class="up">Paradip port  trust</td>
														<td class="up">E689</td>
														<td class="up">Jig Boring Machine</td>
														<td class="up">Gandhi</td>
														<td class="up">14-01-2020</td>
														<td class="up">15-01-2020</td>
														<td class="up">Closed</td>
													</tr>
													<tr>												
														<td class="up">Paradip </td>
														<td class="up">E689</td>
														<td class="up">Boring Machine</td>
														<td class="up">Gandhi</td>
														<td class="up">14-01-2020</td>
														<td class="up">15-01-2020</td>
														<td class="up">Closed</td>
													</tr>
													
											</table>
											</div>
											
											
										</tbody>
										    		
								</div>
							</div>
							</div>
							
							
							<!----table----->
							
							
								<div class="tab-pane h-100 p-3 fade border border-primary" id="bidsum" role="tabpanel" aria-labelledby="bidsum-tab">
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
										<td>Select Date</td>
										<td><input type="Date" id="fname" name="fname" size="50"></td>
										<td><input type="Date" id="fname" name="fname" size="50"></td>
	 									</tr>
										<tr>
										<td colspan="10">
										<div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                         <label class="form-check-label" for="exampleCheck1">Search By Auction Name</label></td>
										</tr>
										</table>
									<a href="#"><button type="button" class="btn btn-primary">Search</button></a>
							
							
							<table class="table table-bordered table-striped table-sm mt-2">
												<thead class="thead-auc">
													<tr>
														<th width="60%">Auctions</th>
														
														
														
													</tr>
												</thead>
												<tbody>
													<tr>												
														<td><a href="a-bidhistory.php">EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</a></td>
													</tr>
													<tr>
														<td><a href="a-bidhistory.php">BHEL/BBR/ISG LTD/2/Adarsh Vihar/25087/20-20</a></td>
													</tr>  
													<tr>
														<td><a href="a-bidhistory.php">REMT/BBR/ONGC LTD/3/Tamil Nadu/Vellore Dist/465895/18-20</a></td>
													</tr>  
													<tr>												
														<td><a href="a-bidhistory.php">HMT/BBR/Adnani logistic Ltd/4/Vidyut Nagar/99087/19-20</a></td>
													</tr>
													<tr>												
														<td><a href="a-bidhistory.php">BEL/BBR/ONGC LTD/5/Nehru Nagar/99087/19-20</a></td>
													</tr>
											</table>
											</div>
								</div>
							</div>
						
							
							
							<!--table-->
						  
								<div class="tab-pane h-100 p-3 fade border border-primary" id="selesre" role="tabpanel" aria-labelledby="selesre-tab">
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
										<div class="tab-content">										
										<table class="table table-bordered table-striped table-sm">
													
													<tr>
														<td>Select Date</td>
														<td><input type="Date" id="sdate" name="sdate" size="50"></td>
														<td><input type="Date" id="ldate" name="ldate" size="50"></td>
	 											    </tr>
													<tr>
												<td colspan="10"><div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1"></div>
                                                <label class="form-check-label" for="exampleCheck1">Search By Company Name</label></td>
	 											    </tr>
													</table>
													<a href="#"><button type="button" class="btn btn-primary">Search</button></a>
							<!--table-->
							<div class="table-holder"> 
													
										<table class="table table-bordered table-striped table-sm mt-2">
													<thead class="thead-auc">
												
													<tr>
														
														<th class="uphead" width="10%">From-Date</th>
														<th class="uphead" width="10%">To-Date</th>
														<th class="uphead" width="10%">Total Amount</th>
														<th class="uphead" width="10%">View Data</th>
													
														
														
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>18-05-2020</td>
														<td>20-05-2020</td>
														<td>5,00,000</td>
														<td><a href="a-selesviewdata.php">View Details</a></td>
														
													</tr>
													<tr>
														<td>18-05-2020</td>
														<td>20-05-2020</td>
														<td>5,00,000</td>
														<td><a href="a-selesviewdata.php">View Details</a></td>
														
													</tr>
													<tr>
														<td>18-05-2020</td>
														<td>20-05-2020</td>
														<td>5,00,000</td>
														<td><a href="a-selesviewdata.php">View Details</a></td>
														
													</tr>
													<tr>
														<td>18-05-2020</td>
														<td>20-05-2020</td>
														<td>5,00,000</td>
														<td><a href="a-selesviewdata.php">View Details</a></td>
														
													</tr>
													
												</tbody>
															
													
											</table>
											</div>
											
											
										
										    		
							</div>
							</div>
							</div>
							<!--table-->
						   
								<div class="tab-pane h-100 p-3 fade  border border-primary" id="unsold" role="tabpanel" aria-labelledby="unsold-tab">
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
										<div class="tab-content">										
										<table class="table table-bordered table-striped table-sm">
													
													<tr>
														<td>Select Date</td>
														<td><input type="Date" id="sdate" name="sdate" size="50"></td>
														<td><input type="Date" id="ldate" name="ldate" size="50"></td>
	 											    </tr>
													<tr>
														<td colspan="10"><div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Search By Company Name</label></td>
	 											    </tr>
													<tr>
														<td colspan="10"><div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Search By Alphabet</label></td>
	 											    </tr>
													</table>
													<a href="#"><button type="button" class="btn btn-primary">Search</button></a>
							<!--table-->
							<div class="table-holder"> 
													
										<table class="table table-bordered table-striped table-sm mt-2">
													<thead class="thead-auc">
												
													<tr>
														
														<th class="uphead" width="10%">Auction Name</th>
														<th class="uphead" width="10%">Lot No</th>
														<th class="uphead" width="10%">Lot Name</th>
														<th class="uphead" width="10%"> Location</th>
														<th class="uphead" width="10%">Date</th>
														<th class="uphead" width="10%">Amount</th>
														<th class="uphead" width="10%">Status</th>
														<th class="uphead" width="10%">Reauction</th>
														
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>SS Iron rod</td>
														<td>BSP</td>
														<td>BHEL</td>
														<td>Bangalore</td>
														<td>20-10-2019</td>
														<td>2,00,000</td>
														<td>Unsold</td>
														<td><a href="#"><button type="button" class="btn btn-primary btn-sm">Reauction</button></a></td>
													</tr>
													<tr>
														<td>SS Iron rod</td>
														<td>BSP</td>
														<td>BHEL</td>
														<td>Bangalore</td>
														<td>20-10-2019</td>
														<td>2,00,000</td>
														<td>Unsold</td>
														<td><a href="#"><button type="button" class="btn btn-primary btn-sm">Reauction</button></a></td>
													</tr>
													<tr>
														<td>SS Iron rod</td>
														<td>BSP</td>
														<td>BHEL</td>
														<td>Bangalore</td>
														<td>20-10-2019</td>
														<td>2,00,000</td>
														<td>Unsold</td>
														<td><a href="#"><button type="button" class="btn btn-primary btn-sm">Reauction</button></a></td>
													</tr>
													<tr>
														<td>SS Iron rod</td>
														<td>BSP</td>
														<td>BHEL</td>
														<td>Bangalore</td>
														<td>20-10-2019</td>
														<td>2,00,000</td>
														<td>Unsold</td>
														<td><a href="#"><button type="button" class="btn btn-primary btn-sm">Reauction</button></a></td>
													</tr>
													
															
													
											</table>
											</div>
											
											
										</tbody>
										    		
								</div>
							</div>
							</div>
						
							
							<!--table-->
						  
								<div class="tab-pane h-100 p-3 fade  border border-primary" id="winner" role="tabpanel" aria-labelledby="winner-tab">
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
										<div class="tab-content">										
										<table class="table table-bordered table-striped table-sm">
													
													<tr>
														<td>Select Date</td>
														<td><input type="Date" id="sdate" name="sdate" size="50"></td>
														<td><input type="Date" id="ldate" name="ldate" size="50"></td>
	 											    </tr>
													<tr>
														<td colspan="10"><div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Search By Company Name</label></td>
	 											    </tr>
													</table>
													<a href="#"><button type="button" class="btn btn-primary">Search</button></a>
													</div>
												<div class="table-holder"> 
										<div class="tab-content">
											<table class="table table-bordered table-striped table-sm" >
												<thead class="thead-auc">
												<tr>
														<th colspan="11">List of Auction Name</th>
													</tr>
													<tr>
													 <th class="cpad">Auction Name</th>
													 <th class="cpad">Product Name</th>
													 <th class="cpad">Quantity</th>
													 <th class="cpad">Expected Price</th>
													 <th class="cpad">Starting Bid Price</th>
													 <th class="cpad">Inspection Date</th>
													 <th class="cpad">Inspection closing Date</th>
													 <th class="cpad">Description</th>
													 <th class="cpad">Images</th>
													 <th class="cpad">Download</th>
													 
													</tr>
													
												</thead>
												<tbody>
												<tr>
													 <td class="dpad" width="10%"><a href="auctionwinners.php"><u>Alfa ltd.</u></a></td>
													 <td class="dpad" width="10%">Paper</td>
													 <td class="dpad" width="10%">5</td>
													 <td class="dpad" width="10%">80%</td>
													 <td class="dpad" width="10%">1,000</td>
													 <td class="dpad" width="10%">02-07-2020</td>
													 <td class="dpad" width="10%">03-07-2020</td>
													 <td class="dpad" width="10%">Scrap/ obsolete/ surplus stores/ spares and capital equipments or coal or diamonds</td>
													 <td class="dpad" width="10%"><a href=""><u>Image</u></a></td>
													 <td class="dpad" width="10%"><a href="">
													<i class="fa fa-edit"></i>
													<a href="" >
													<i class="fa fa-trash" style="color:black"></i>
													</a>
													<a href="" >
													<i class="fa fa-download"></i>
													</a></td>
												</tr>
												<tr>
													 <td class="dpad" width="10%"><a href="auctionwinners.php"><u>Alfa ltd.</u></a></td>
													 <td class="dpad" width="10%">Paper</td>
													 <td class="dpad" width="10%">5</td>
													 <td class="dpad" width="10%">80%</td>
													 <td class="dpad" width="10%">1,000</td>
													 <td class="dpad" width="10%">02-07-2020</td>
													 <td class="dpad" width="10%">03-07-2020</td>
													 <td class="dpad" width="10%">Scrap/ obsolete/ surplus stores/ spares and capital equipments or coal or diamonds</td>
													 <td class="dpad" width="10%"><a href=""><u>Image</u></a></td>
													 <td class="dpad" width="10%"><a href="">
													<i class="fa fa-edit"></i>
													<a href="" >
													<i class="fa fa-trash" style="color:black"></i>
													</a>
													<a href="" >
													<i class="fa fa-download"></i>
													</a></td>
												</tr>
												<tr>
													 <td class="dpad" width="10%"><a href="auctionwinners.php"><u>Alfa ltd.</u></a></td>
													 <td class="dpad" width="10%">Paper</td>
													 <td class="dpad" width="10%">5</td>
													 <td class="dpad" width="10%">80%</td>
													 <td class="dpad" width="10%">1,000</td>
													 <td class="dpad" width="10%">02-07-2020</td>
													 <td class="dpad" width="10%">03-07-2020</td>
													 <td class="dpad" width="10%">Scrap/ obsolete/ surplus stores/ spares and capital equipments or coal or diamonds</td>
													 <td class="dpad" width="10%"><a href=""><u>Image</u></a></td>
													 <td class="dpad" width="10%"><a href="">
													<i class="fa fa-edit"></i>
													<a href="" >
													<i class="fa fa-trash" style="color:black"></i>
													</a>
													<a href="" >
													<i class="fa fa-download"></i>
													</a></td>
												</tr>
													</tbody>
													</table>
											
											</div>
										</div>   
							
													
													

											
											
										</tbody>
										    		
								</div>
							
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
						</div>
					
						
							
			
			
<?php 
	include('./a-footer.php');
	?>