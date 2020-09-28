<?php 
	include('./a-header.php');
	include('./a-menubar.php');
?>
	
				<div class="col-md-9">
					<div class="deals-tab-table">
							<ul class="nav nav-tabs border-0" id="myTab" role="tablist">
							     <li class="nav-item">
									<a class="nav-link active border border-primary border-bottom-0" id="hvd-tab" data-toggle="tab" href="#hvd" role="tab" aria-controls="hvd" aria-selected="true"><b>Create Auction Material</b></a>
								</li>
								
								<li class="nav-item">
									<a class="nav-link border border-primary border-bottom-0" id="upload-tab" data-toggle="tab" href="#upload" role="tab" aria-controls="upload" aria-selected="false"><b>Auction Details</b></a>
								</li>
							</ul>
						
							<div class="tab-content w-100" id="myTabContent">
								<div class="tab-pane h-100 p-3 fade show active border border-primary" id="hvd" role="tabpanel" aria-labelledby="hvd-tab">
									<div class="table-holder">
									<div class="tab-content">
											<table class="table table-bordered table-striped table-sm mt-2">
												<thead class="thead-auc">
												<tr>
													<th colspan="10">Upload Details</th>
												</tr>
												</thead>
												<tbody>
													<tr>
														<td>Auction Name</td>
														<td><input class="tos" type="text" id="fname" name="fname"></td>
														</tr>
													<tr>
														<td>Select Seller</td>
														<td><select class="tos" id="sellers" name="sellers" >
			                                                <option value="one" selected>seller1</option>
			                                                <option value="two">seller2</option>
			                                                <option value="three" >seller3</option>
			                                                <option value="four">seller4</option>
			                                                </select></td>
														</tr>
														<tr>
														<td>Product Name</td>
														<td><select class="tos" id="products" name="products" >
			                                                <option value="one" selected>Product Name1</option>
			                                                <option value="two">Product Name2</option>
			                                                <option value="three">Product Name3</option>
			                                                <option value="four">Product Name4</option>
			                                                </select></td>
													</tr>
													<tr>
														<td>Quantity</td>
														<td><input class="tos" type="text" id="quantity" name="quantity"></td>
													</tr>
													<tr>
														<td>Expected Price</td>
														<td><input class="tos" type="text" id="expectedprice" name="expectedprice"></td>
													</tr>  
													<tr>
														<td>Starting Bid Price</td>
														<td><input class="tos" type="text" id="bidprice" name="bidprice"></td>
													</tr>
													 <tr>
														<td>Inspection Date</td>
														<td><input class="tos" type="date" id="idate" name="idate"></td>
													</tr>
													 <tr>
														<td>Inspection Closing Date</td>
														<td><input class="tos" type="date" id="icdate" name="icdate"></td>
													</tr>
													<tr>
														<td>Description</td>
														<td><input class="dis" type="text" id="dis" name="dis"></td>
													</tr>
													<tr>
														<td>Images</td>
														<td><input class="tos" type="file" id="img" name="img"></td>
													</tr>
												</tbody>
											</div>
								</table>
								<a href="#"><button type="button" class="btn btn-primary">Upload</button></a>
								<a href='#'><button type="button" class="btn btn-primary">Reset</button></a>
								</div>
							</div>
						</div>
											
								<!--table2-->	
										<div class="tab-content tab-pane h-100 p-3 fade border border-primary" id="upload" role="tabpanel" aria-labelledby="upload-tab">
										<div class="table-holder"> 
										<div class="tab-content">
											<table class="table table-bordered table-striped table-sm" >
												<thead class="thead-auc">
												<tr>
														<th colspan="11">Uploaded Details</th>
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
													 <th class="cpad">Edit/Delete</th>
													 
													</tr>
													
												</thead>
												<tbody>
													<tr>
													 <td class="dpad" width="10%">Alfa ltd.</td>
													 <td class="dpad" width="10%">Paper</td>
													 <td class="dpad" width="10%">5</td>
													 <td class="dpad" width="10%">80%</td>
													 <td class="dpad" width="10%">1,000</td>
													 <td class="dpad" width="10%">02-07-2020</td>
													 <td class="dpad" width="10%">03-07-2020</td>
													 <td class="dpad" width="10%"><a href=""><u>Scrap/ obsolete/ surplus stores/ spares and capital equipments or coal or diamonds</u></a></td>
													 <td class="dpad" width="10%"><a href=""><u>Image</u></a></td>
													 <td class="dpad" width="10%"><a href="">
													<i class="fa fa-edit"></i>
													<a href="" >
													<i class="fa fa-trash"></i>
													</a></td>
													</tr>
													</tbody>
													</table>
											
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