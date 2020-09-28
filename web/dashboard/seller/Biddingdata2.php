<?php
    include('./header.php');
	include('./menubar.php');
  
  ?>
				<div class="col-md-9">
					<div class="deals-tab-table">
							<ul class="nav nav-tabs border-0" id="myTab" role="tablist">
							
								<li class="nav-item">
									<a class="nav-link active border border-primary border-bottom-0" id="hvd-tab" data-toggle="tab" href="#biddetails" class="tablinks" onclick="openBid(event, 'biddetails')" role="tab" aria-controls="hvd" aria-selected="true"><b>Bidding Data Details</b></a>
								</li>
								<li class="nav-item">
									<a class="nav-link border border-primary border-bottom-0" id="hvd-tab biddata" data-toggle="tab" href="#biddata" class="tablinks" onclick="openBid(event, 'biddata')" role="tab" aria-controls="hvd" aria-selected="true"><b>Bidding Data</b></a>
								</li>
							</ul>
                             
							<div class="tab-content w-100">
								<div class="tab-pane h-100 p-3 active border border-primary" id="hvd" role="tabpanel" aria-labelledby="hvd-tab">
								<div class="tab-content" id="myTabContent">
								      <div id="biddetails" class="tabcontent">
										<div class="table-holder"> 
											<table class="table table-bordered table-striped table-sm" >
												<thead class="thead-auc">
												<tr>
												<th colspan="10" style="Text-align:left;">Bidding Data Details</th>
												</tr>
												<tr>
												<th>Company Name</th>
												<th>Location</th>
												<th>Lot No.</th>
												<th>Lot Name</th>
												<th>Qty</th>
												<th>Final Bid Price</th>
												<th>Unit</th>
												<th>End Time</th>
												<th>Starting Amount</th>
												</tr>
	
												</thead>
												<tbody>
													<tr>
													<td class="dpad" width="10%"><a href=""><u> LTD./1/BHUBANESWAR/20-21/6425<MSTC/BBR/THE ORIENTAL INSURANCE CO./u></a></td>
													<td class="dpad" width="10%">BHUBANESWAR</td>
													<td class="dpad" width="10%">M-9</td>
													<td class="dpad" width="10%">Paper</td>
													<td class="dpad" width="10%">50</td>
													<td class="dpad" width="10%">50,000</td>
													<td class="dpad" width="10%">H-8</td>
													<td class="dpad" width="10%">22:00</td>
													<td class="dpad" width="10%">5,000</td>
													</tr></tbody></table>
													
											</div></div>
											
											<div id="biddata" class="tabcontent">
											<div class="table-holder"> 
											<table class="table table-bordered table-striped table-sm">
												<thead class="thead-auc">
												<tr>
												<th colspan="10" style="Text-align:left;">Bidding Data</th></thead>
												<tbody>
													<tr>
													<td class="bdata"><a href=""><u>Adani Logistic Ltd/2345/xcd/ongoing</a></u></td>
													</tr>
													<tr>
													<td class="bdata"><a href=""><u>Adani Logistic Ltd/2345/xcd/ongoing</a></u></td>
													</tr>
													<tr>
													<td class="bdata"><a href=""><u>Adani Logistic Ltd/2345/xcd/ongoing</u></a></td>
													</tr>
													<tr>
													<td class="bdata"><a href=""><u>Adani Logistic Ltd/2345/xcd/ongoing</u></a></td>
													</tr>
													<tr>
													<td class="bdata"><a href=""><u>Adani Logistic Ltd/2345/xcd/ongoing</u></a></td>
													</tr>
													
													
													
													</tbody>
											</table>
									
	<div class= "center">
		<div class="update">
		  <a href="#"><button type="button" class="btn btn-primary " >Download</button></a>
		</div>
		<div class="reset">
	       <a href='#'><button type="button" class="btn btn-primary">Share</button></a>
		</div>
		</div></div></div>
											
											
											
										</div>    		
								
								
						
						</div>
				</div>
			</div>	
		</div>
		</div>
		</div>
		
	<?php include('./footer.php');?>
