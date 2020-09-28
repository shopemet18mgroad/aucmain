<?php
    include('./header.php');
	include('./menubar.php');
  
  ?>
				<div class="col-md-9">
					<div class="deals-tab-table">
							<ul class="nav nav-tabs border-0" id="myTab" role="tablist">
							
								<li class="nav-item">
									<a class="nav-link active border border-primary border-bottom-0" id="hvd-tab" data-toggle="tab" href="#hvd" role="tab" aria-controls="hvd" aria-selected="true"><b>Auctions Details</b></a>
								</li>
							
							</ul>

							<div class="tab-content w-100">
								
													
									<div class="tab-content tab-pane h-100 p-3 active border border-primary" id="auction" role="tabpanel" aria-labelledby="auction-tab">	
											<div class="table-holder" >
											<div class="cust">
											<nav class="navbar navbar-light text-white py-1" id="navbarSupportedContent">
											
											</form>
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
										</nav>
									</div> 
											<div class="table-holder"> 
										<table class="table table-bordered table-striped table-sm">
													<tr><td>Select Date</td>
													<td><input class="name" type="Date" id="sdate" name="sdate" ></td>
													<td><input class="name" type="Date" id="sdate" name="sdate" ></td>
													</tr>
													<tr>
														<td>Select Category:</td>
														<td colspan="2"><select class="aaa" id="scate" name="scate" >
															<option value="one" selected>Ferrous</option>
															<option value="two">Non Ferrous</option>
															<option value="three" >Minor Metals</option>
															<option value="four">Plain paper</option>
															<option value="five">Granules</option>
															<option value="six">All Construction Materials</option>
															</select></td>
															
	 											    </tr>
													
													</table>
												
											<a href="#"><button type="button" class="btn btn-primary">Search</button></a>
													
													<table class="table table-bordered table-striped table-sm mt-2">
												<thead class="thead-auc">
												<tr>
												<th colspan="14" style="Text-align:left;">Auction Details</th>
												</tr>
												<tr>
													<th class="dpad" >Auction Id</th>
													<th class="dpad" >Auction Name</th>
													<th class="dpad" >Lot No.</th>
													<th class="dpad" >Lot Name</th>
													<th class="dpad" >Location</th>
													<th class="dpad" >Qty</th>
													<th class="dpad" >Unit</th>
													<th class="dpad" >Purity</th>
													<th class="dpad" >Final Bid</th>
													<th class="dpad" >Date/Time</th>
													<th class="dpad" >Amount</th>
													<th class="dpad" >Description</th>
													<th class="dpad" >Auction Status</th>
													<th class="dpad" >Download</th>
													</tr>
	
												</thead>
												<tbody>
													
													<tr>
													<td class="dpad" width="13%">M2HG134</td>
													<td class="dpad" ><a href=""><u> LTD./1/BHUBANESWAR/20-21/6425<MSTC/BBR/THE ORIENTAL INSURANCE CO./u></a></td>
													<td class="dpad" >M-5</td>
													<td class="dpad" >Iron</td>
													<td class="dpad" >BHUBANESWAR</td>
													<td class="dpad" >50</td>
													<td class="dpad" >H-5</td>
													<td class="dpad" >75%</td>
													<td class="dpad" >1,00,000</td>
													<td class="dpad" >15-8-2020 5:00</td>
													<td class="dpad" >2,00,000</td>
													<td class="dpad" ><a href=""><u>Type: Pipes, Sheets, Rods, Blocks & Etc </u></a></td>
													<td class="dpad" >Upcoming</td>
													<td class="dpad"><a href=""><i class="fa fa-download"></i></a></td>
													</tr>
													<tr>
													<td class="dpad" width="13%">M2HG134</td>
													<td class="dpad" ><u> <a href=""><u> LTD./1/BHUBANESWAR/20-21/6425<MSTC/BBR/THE ORIENTAL INSURANCE CO./THE ORIENTAL INSURANCE CO.</u></a></td>
													<td class="dpad" >M-8</td>
													<td class="dpad" >Plastic</td>
													<td class="dpad" >BHUBANESWAR</td>
													<td class="dpad" >60</td>
													<td class="dpad" >K-7</td>
													<td class="dpad" >80%</td>
													<td class="dpad" >1000</td>
													<td class="dpad" >15-8-2020 5:00</td>
													<td class="dpad" >6,00,000</td>
													<td class="dpad" ><a href=""><u>Type: Pipes, Sheets, Rods, Blocks & Etc</u></a></td>
													<td class="dpad" >Ongoing</td>
													<td class="dpad"><a href=""><i class="fa fa-download"></i></a></td>
													</tr>
												</tbody>
											</table>
	
		  <a href="#"><button type="button" class="btn btn-primary">Download</button></a>
		
											
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
		
		
	<?php include('./footer.php');?>
