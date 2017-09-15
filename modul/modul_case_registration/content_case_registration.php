
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="row-one">
					<div class="col-md-4 widget">
						<div class="stats-left ">
							<h5>Today</h5>
							<h4>Sales</h4>
						</div>
						<div class="stats-right">
							<label> 45</label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="col-md-4 widget states-mdl">
						<div class="stats-left">
							<h5>Today</h5>
							<h4>Visitors</h4>
						</div>
						<div class="stats-right">
							<label> 80</label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="col-md-4 widget states-last">
						<div class="stats-left">
							<h5>Today</h5>
							<h4>Orders</h4>
						</div>
						<div class="stats-right">
							<label>51</label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="clearfix"> </div>	
				</div>
				
				<div class="row">
					<div class="col-md-12 map widget-shadow">
						<h4 class="title">Example</h4>
						<div class="map_container">
							<div class="form-body">
								<form class="form-horizontal"> 
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Problem ID</label> 
											<div class="col-sm-9"> <div class="checkbox"> CHS0001me</div> </div> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Receive By</label> 
											<div class="col-sm-9"> <div class="checkbox"> 14103MIS - Elin Marlintina</div> </div> 
									</div>									
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Unit</label> 
											<div class="col-sm-9"> <div class="checkbox"> MIS - MIS OPEX</div> </div> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Process Status</label> 
											<div class="col-sm-9"> <div class="checkbox"> New</div> </div> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Receiving Method</label> 
											<div class="col-sm-9">
												<select name="selector1" id="selector1" class="form-control1">
													<option>Phone</option>
													<option>Dsb</option>
													<option>Dsb</option>
												</select>
											</div> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Complaint Source</label> 
											<div class="col-sm-9">
												<select name="selector1" id="selector1" class="form-control1">
													<option>Customer</option>
													<option>Dsb</option>
													<option>Dsb</option>
												</select>
											</div> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Receive Date</label> 
											<div class="col-sm-9"> <div class="checkbox"> <?=date('Y/m/d H:m:s');?></div> </div> 
									</div>
									<div class="form-group" align="left" style="background-color:#4F52BA;color:#FFF;">  
										<label for="inputEmail3" class="col-sm-11">CUSTOMER/CARD INFORMATION</label> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Card No.</label> 
											<div class="col-sm-9"> <input type="email" class="form-control" id="inputEmail3" value="4640057750000828" placeholder="Card No."> </div> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Account No.</label> 
											<div class="col-sm-9"> <input type="email" class="form-control" id="inputEmail3" placeholder="Account No." value="7666563"> </div> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Customer No.</label> 
											<div class="col-sm-9"> <input type="email" class="form-control" id="inputEmail3" placeholder="Customer No." value="SNSE5789"> </div> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Card Holder/Customer Name</label> 
											<div class="col-sm-2"> 
												<input type="email" class="form-control" id="inputEmail3" placeholder="Card Holder/Customer Name" value="ELIN MARLINTINA"> 
											</div> <button class="btn btn-default">Search</button> <button class="btn btn-default">Caller Info</button> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">E-Mail Address</label> 
											<div class="col-sm-9"> <div class="checkbox"> EMARLINTINA@permatabank.CO.ID</div> </div> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Mobile Phone</label> 
											<div class="col-sm-9"> <div class="checkbox"> 08118334262</div> </div> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Others No.</label> 
											<div class="col-sm-9"> <input type="email" class="form-control" id="inputEmail3" placeholder="Email"> </div> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">&nbsp;</label> 
											<button type="button" class="btn btn-default" data-toggle="modal" data-target="#gridSystemModal">Problem History </button>
											<div class="modal fade" id="gridSystemModal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
												<div class="modal-dialog modal-xl" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
															<h4 class="modal-title" id="gridSystemModalLabel">Problem History</h4>
														</div>
														<div class="modal-body">
															<?php include('modal_problem_history.php');?>
														</div>
														<div class="modal-footer">
															<!--
															<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
															<button type="button" class="btn btn-primary">Save changes</button>
															-->
														</div>
													</div><!-- /.modal-content -->
												</div><!-- /.modal-dialog -->
											</div><!-- /.modal -->
									</div>
									<div class="form-group" align="left" style="background-color:#4F52BA;color:#FFF;">  
										<label for="inputEmail3" class="col-sm-11">CASE DETAIL</label> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Product</label> 
											<div class="col-sm-9">
												<select name="selector1" id="selector1" class="form-control1">
													<option>BCC - BANKING CALL CENTER</option>
													<option>Dsb</option>
													<option>Dsb</option>
												</select>
											</div> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Incident Type</label> 
											<div class="col-sm-2">
												<select name="selector1" id="selector1" class="form-control1">
													<option>COMP - Complaint</option>
													<option>Dsb</option>
													<option>Dsb</option>
												</select>
											</div> 
											<div class="col-sm-5">
												<div class="checkbox"> High Priority Complaint  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox">   </div>
											</div>
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">HPC Type</label> 
											<div class="col-sm-9"> 
												<select name="selector1" id="selector1" class="form-control1">
													<option>Nasabah berkeluh berulang dalam 3 bulan terakhir</option>
													<option>Dsb</option>
													<option>Dsb</option>
												</select>
											</div> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Description HPC</label> 
											<div class="col-sm-9"> 
												<textarea class="form-control">nsb tdk terima E/K 3 bulan berturut</textarea>
											</div> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Case 1</label> 
											<div class="col-sm-9">
												<select name="selector1" id="selector1" class="form-control1">
													<option>CH1014 - Rekening Koran</option>
													<option>Dsb</option>
													<option>Dsb</option>
												</select>
											</div> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Case 2</label> 
											<div class="col-sm-9">
												<select name="selector1" id="selector1" class="form-control1">
													<option>7739 - Cetak Ulang + Investigasi</option>
													<option>Dsb</option>
													<option>Dsb</option>
												</select>
											</div> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Case 3</label> 
											<div class="col-sm-9">
												<select name="selector1" id="selector1" class="form-control1">
													<option>Select a case 3</option>
													<option>Dsb</option>
													<option>Dsb</option>
												</select>
											</div> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Severity</label> 
											<div class="col-sm-9">
												<select name="selector1" id="selector1" class="form-control1">
													<option>Medium</option>
													<option>Dsb</option>
													<option>Dsb</option>
												</select>
											</div> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Clue</label> 
											<div class="col-sm-9">
												<textarea class="form-control">Komplain nasabah tidak menerima Rekening Koran dan minta dicetak ulang diikuti penelusuran pengiriman Rekening Korannya, ada yang menerima atau tidak. Pastikan ajukan perubahan bila alamat berubah. Cek di sistem, apabila ada message statement retur, ajukan penghapusan retur flag</textarea>
											</div> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">SLA &amp; Target Closing Date</label> 
											<div class="col-sm-9"> <div class="checkbox"> 5 days - <?=date('Y/m/d');?></div> </div> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Alamat Pengiriman</label> 
											<div class="col-sm-9"> <input type="email" class="form-control" id="inputEmail3"> </div> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Branch Code</label> 
											<div class="col-sm-9"> <input type="email" class="form-control" id="inputEmail3"> </div> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Branch Code Cabang Penginput</label> 
											<div class="col-sm-9"> <input type="email" class="form-control" id="inputEmail3"> </div> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Customer Number</label> 
											<div class="col-sm-9"> <input type="email" class="form-control" id="inputEmail3"> </div> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Nama Kurir</label> 
											<div class="col-sm-9"> <input type="email" class="form-control" id="inputEmail3"> </div> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Nomor rekening PermataBank</label> 
											<div class="col-sm-9"> <input type="email" class="form-control" id="inputEmail3"> </div> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">No telp masuk ke PermataTel</label> 
											<div class="col-sm-9"> <input type="email" class="form-control" id="inputEmail3"> </div> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">No telp yg dpt dihub</label> 
											<div class="col-sm-9"> <input type="email" class="form-control" id="inputEmail3"> </div> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Periode Mutasi</label> 
											<div class="col-sm-9"> <input type="email" class="form-control" id="inputEmail3"> </div> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Description</label> 
											<div class="col-sm-9"> <input type="email" class="form-control" id="inputEmail3"> </div> 
									</div>
									<div class="form-group" align="left" style="background-color:#4F52BA;color:#FFF;">  
										<label for="inputEmail3" class="col-sm-11">CALLER VERIFICATION</label> 
									</div>
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Verification</label> 
											<div class="col-sm-9">
												<select name="selector1" id="selector1" class="form-control1">
													<option>Select a Verification</option>
													<option>Dsb</option>
													<option>Dsb</option>
												</select>
											</div> 
									</div>
									<div class="col-sm-offset-2"> 
										<button class="btn btn-default">Download</button> 
										<button class="btn btn-default">Attachment</button> 
										<button class="btn btn-default">Card Information</button> 
										<button class="btn btn-default">Save &amp; Route</button> 
										<button class="btn btn-default">Save &amp; Close</button> 
										<button class="btn btn-default">Cancel</button> 
									</div> 
								</form> 
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		