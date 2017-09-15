<div class="row">
	<div class="col-md-3">	
		<select name="selector1" id="selector1" class="form-control1">
			<option selected="true" disabled="disabled">Choose History Case</option>    
			<option>Last three months</option>
			<option>Last five months</option>
			<option>Last ....</option>
		</select>
	</div>
	<div class="col-md-3">	
		<select name="selector1" id="selector1" class="form-control1">
			<option selected="true" disabled="disabled">Choose Product Type</option>    
			<option>Banking</option>
			<option>Credit Card</option>
			<option>Personal Loan</option>
			<option>KPR</option>
			<option>etc ...</option>
		</select>
	</div>
	<div class="col-md-3">	
		<select name="selector3" id="selector3" class="form-control1">
			<option selected="true" disabled="disabled">Choose Incident Type</option>    
			<option>Complaint</option>
		</select>
	</div>
	<div class="col-md-3">	
		<select name="selector4" id="selector4" class="form-control1">
			<option selected="true" disabled="disabled">Is Route</option>    
			<option>Yes</option>
			<option>No</option>
		</select>
	</div>
</div><br/>

<table id="example" class="display" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Problem Date</th>
											<th>Problem ID</th>
											<th>Card No.</th>
											<th>Account No.</th>
											<th>Customer ID</th>
											<th>Card Holder/Customer Name</th>
											<th>E-Wallet No</th>
											<th>Target Date</th>
											<th>Case</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>Problem Date</th>
											<th>Problem ID</th>
											<th>Card No.</th>
											<th>Account No.</th>
											<th>Customer ID</th>
											<th>Card Holder/Customer Name</th>
											<th>E-Wallet No</th>
											<th>Target Date</th>
											<th>Case</th>
										</tr>
									</tfoot>
									<tbody>
										<?php
										while($row = mysqli_fetch_array($sql_topic)){
										?>
											<tr>
												<td><?=$row['date_entry'];?></td>
												<td><?=$row['problem_no'];?></td>
												<td><?=$row['card_no'];?></td>
												<td><?=$row['account_no'];?></td>
												<td><?=$row['customer_no'];?></td>
												<td><?=$row['customer_name'];?></td>
												<td><?=$row['ewallet_no'];?></td>
												<td><?=$row['time_close'];?></td>
												<td><?=$row['reason_of_compliant'];?></td>
											</tr>
										<?php										
										}
										?>
										
									</tbody>
								</table>
								<script>
								$(document).ready(function() {
									$('#example').DataTable();
								} );
							</script>