<?php 
	require dirname(__DIR__,1).'/require/header.view.php';
?>
		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
			<?php 
				require dirname(__DIR__,1).'/require/leftbar.view.php';
			?>
			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Dashboard</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1 style="font-weight: bold">
								Add Users
								<!-- <small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Static &amp; Dynamic Tables
								</small> -->
							</h1>
						</div><!-- /.page-header -->
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
								<!-- PAGE CONTENT BEGINS -->
							 	<form action="/admin/users/add" method="post" enctype="multipart/form-data">
							    	<div class="form-group">
							      		<label style="font-weight:bold;">Username: </label>
							      		<input type="text" class="form-control" placeholder="Enter username" name="username">
							   		</div>

							    	<div class="form-group">
							      		<label style="font-weight:bold;">Password:</label>
							      		<input type="password" class="form-control"  placeholder="Enter password" name="password">
							    	</div>

							    	<div class="form-group">
							      		<label style="font-weight:bold;" for="pwd">Fullname:</label>
							      		<input type="text" class="form-control" placeholder="Enter fullname" name="fullname">
							    	</div>

							    	<div class="form-group">
							      		<label style="font-weight:bold;" for="pwd">Email:</label>
							      		<input type="email" class="form-control" placeholder="Enter email" name="email">
							    	</div>

							    	<div class="form-group">
							      		<label style="font-weight:bold;">Phone:</label>
							      		<input type="text" class="form-control" placeholder="Enter phone" name="phone">
							    	</div>

							    	<div class="form-group">
							      		<label style="font-weight:bold;">Address:</label>
							      		<input type="text" class="form-control" placeholder="Enter address" name="address">
							    	</div>
									<div class="form-group">
										<label style="font-weight:bold;">Level:</label>
										<div>
									    	<select name="level" class="selectpicker">
											  	<option value="2">Employee</option>
											</select>
										</div>
									</div>
									<div class="form-group">
							      		<label style="font-weight:bold;" for="pwd">Avatar:</label>
							      		<input type="file" name="avatar">
							    	</div>
							    	<div class="form-group text-center">
							      		<button type="submit" name="submit" class="btn btn-success">Add</button>
							    	</div>
							  	</form>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

<?php 
	require dirname(__DIR__,1).'/require/footer.view.php';
?>