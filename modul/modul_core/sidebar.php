<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1" style="overflow: scroll; <?=$_SESSION['level']==1?'background-color:#585858':''?>">
					<ul class="nav" id="side-menu">
						<li>
							<a href="<?=$app_path;?>" class="active"><i class="fa fa-home nav_icon"></i>Dashboard</a>
						</li>
						<li>
							<a href="<?=$app_path;?>problem_history"><i class="fa fa-book nav_icon"></i>Problem History</a>
						</li>
						<?php
						if($_SESSION['level'] == 1){
						?>
							<li><a href="#"><i class="fa fa-book nav_icon"></i> Attribute List</a></li>
							<li><a href="#"><i class="fa fa-book nav_icon"></i> Custome Case</a></li>
							<li><a href="#"><i class="fa fa-book nav_icon"></i> Unit List</a></li>
							<li><a href="#"><i class="fa fa-book nav_icon"></i> Product Type List</a></li>
							<li><a href="#"><i class="fa fa-book nav_icon"></i> Incident Type List</a></li>
							<li><a href="#"><i class="fa fa-book nav_icon"></i> Add New Case</a></li>
							<li><a href="#"><i class="fa fa-book nav_icon"></i> Case 1 List</a></li>
							<li><a href="#"><i class="fa fa-book nav_icon"></i> Case 2 Case 3 List</a></li>
							<li><a href="#"><i class="fa fa-book nav_icon"></i> Reason of Compliant List</a></li>
							<li><a href="#"><i class="fa fa-book nav_icon"></i> Solution List</a></li>
							<li><a href="#"><i class="fa fa-book nav_icon"></i> Letter List</a></li>
							<li><a href="#"><i class="fa fa-book nav_icon"></i> Supervisor Mail</a></li>
							<li><a href="#"><i class="fa fa-book nav_icon"></i> Holiday List</a></li>
							<li><a href="#"><i class="fa fa-book nav_icon"></i> General Setting</a></li>
						<?php						
						}else{
						?>
							<li class="">
								<a href="#"><i class="fa fa-book nav_icon"></i>Problem Maintenance <span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
									<li><a href="<?=$app_path;?>case_registration">Case Registration</a></li>
									<li><a href="#">List of Problem</a></li>
									<li><a href="#">Problem Assignment</a></li>
									<li><a href="#">Hand Over Problem</a></li>
									<li><a href="#">List Urgent Case</a></li>
								</ul>
							</li>
							<li class="">
								<a href="#"><i class="fa fa-book nav_icon"></i>Inquiry <span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
									<li><a href="#">Customer Search</a></li>
									<li><a href="#">Card Information</a></li>
									<li><a href="#">Problem History</a></li>
								</ul>
							</li>
							<li class="">
								<a href="#"><i class="fa fa-book nav_icon"></i>Reporting <span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
									<li><a href="#">Re-print Letter</a></li>
									<li><a href="#">Collective Letter</a></li>
									<li><a href="#">Unit Input</a></li>
									<li><a href="#">Unit Solution</a></li>
									<li><a href="#">Case Management</a></li>
									<li><a href="#">Case Pending</a></li>
									<li><a href="#">Upload Failed</a></li>
									<li><a href="#">Case Pending New</a></li>
								</ul>
							</li>
						<?php						
						}
						?>
						
					</ul>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->