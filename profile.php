<?php
require(__DIR__.DIRECTORY_SEPARATOR."include".DIRECTORY_SEPARATOR."head.inc.php");
?>
<main class="main-content bgc-grey-100">
	<div id="mainContent">
		<div class="container-fluid">
			<div class="row data-profile">
				<div class="col-md-12" >
					<h2 style="font-family:cabin,sans-serif;color: #2196f3;" class="afterDetails">My Profile settings.</h2>
					<hr class="hreol"/>
				</div>
			</div>
			<div class="row data-user-details" >
				<div class="col-sl-12 col-md-12 col-lg-3 col-sm-12">
					<div class="innerDiver container-fluid">
						<!---->
						<div class="imageAvarter">
							<img src="./assets/static/images/nobody_m.original.jpg" class="img-responsive"/>
							<div class="imageadder">
								<div class="innerimageadder " onclick="openUploader()">
									<span class="ti-camera"></span>
								</div>
							</div>
						</div>
						<!---->
						<div class="userNames">
							Denneh Alpones
						</div>
						<!---->
						<!--Small writer review to a client-->
						<div class="userstars">
							<span class="my-rating" data-rated="4.5"></span>
							<span>(<span>25</span>)</span>
						</div>
						
						<!--all ends here-->
						<div class="AvarterStat">
							Computer science(web developer).
						</div>
						<div class="row" style="margin-top:15px;margin-bottom:15px;">
							<div class="col-md-6 profi" style="position:relative;">
								<div class="innerFollow" style="background:white;">
									<div class="innerNumber" style="color:black;">
										15
									</div>
									<div class="innerText" style="color:black;">
										Orders
									</div>
								</div>
							</div>
							<div class="col-md-6 profi" style="position:relative;">
								<div class="innerFollow">
									<div class="innerNumber">
										$1500
									</div>
									<div class="innerText">
										Left Balance
									</div>
								</div>
							</div>
						</div>
						<!---->
						<div class="smalldescrition">
							<div class="row" style="background:#2196f4;height:auto;">
								<div class="col-md-4  outerPhone">
									<div class="innerPhone">
										<span class="ti-location-arrow location-clicker">
											
										</span>
									</div>
								</div>
								<div class="col-md-4  outerPhone">
									<div class="innerPhone phone-clicker">
										<span class="ti-email">
											
										</span>
									</div>
								</div>
								<div class="col-md-4 outerPhone">
									<div class="innerPhone testing_settings">
										<span class="ti-settings">
											
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sl-12 col-md-12 col-lg-7 col-sm-12">
					<div class="firstPager">
						<div class="content">
						  <div id="homeres" class="first_tab">
							<div class="card card-shadow">
								<h2 class="discover">My Profile Details</h2>
								<hr class="hreols">
								<ul>
									<li class="mb-3"><span class="title-small ordfrod"><span class="ti-email" style="    color: #ff5722!important;"></span> Email address.</span> <p class="inner_p">johndeo.0645@xyz.com</p></li>
									<li class="mb-3"><span class="title-small ordfrod"><span class="ti-mobile" style="    color: #673ab7!important;"></span> Phone number.</span> <p class="inner_p">+91 998 877 6655</p></li>
									<li class="mb-3"><span class="title-small ordfrod"><span class="ti-location-arrow" style="    color: #2196f3!important;text-indent:10px;"></span> Address.</span> <p class="inner_p">71 Pilgrim Avenue Chevy Chase, MD 20815</p></li>
									<li class="mb-3"><span class="title-small ordfrod"><span class="ti-thought" style="    color: #2196f3!important;text-indent:10px;"></span> Description.</span> <p class="inner_p">
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
									</p></li>
								</ul>
							</div>
						  </div>
						  <div id="menu1" class="second_tab" style="position:relative;">
						  	<div class="userCloser"><p class="ti-close"></p></div>
							<div class="card card-shadow">
								<h2 class=" card-title">Edit Profile</h2>
								<hr class="hreols">
								<form action="#" class="row">
									<div class="col-sm-6 form-field">
										<label for="name" class="form-label">Full Name</label>
										<input type="text" id="name" placeholder="John Deo" class="form-control">
									</div>
									<div class="col-sm-6 form-field">
										<label for="email" class="form-label">Email address</label>
										<input type="email" id="email" placeholder="johndeo.0645@xyz.com" class="form-control">
									</div>
									<div class="col-sm-6">
										<div class="form-field">
											<label for="phone" class="form-label">Phone number</label>
											<input type="text" id="phone" placeholder="+91 9988776655" class="form-control">
										</div>
										<div class="form-field">
											<label for="phone" class="form-label">Small Stats</label>
											<input type="text" id="status" placeholder="Status" class="form-control">
										</div>
										<div class="form-field">
											<label for="location" class="form-label">Select location</label>
											<select name="location" id="location" class="cf-select form-control">
												<option value="0">Kenya</option>
												<option value="0">America</option>
												<option value="1">Australia</option>
												<option value="2">Canada</option>
												<option value="3">India</option>
												<option value="4">Japan</option>
												<option value="5">Russia</option>
												<option value="5">Europe</option>
											</select>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-field">
											<label for="address" class="form-label">Address</label>
											<textarea name="address" id="address" cols="30" rows="3" class="form-control" style="resize: none;"></textarea>
										</div>
										<div class="form-field">
											<label for="address" class="form-label">Description</label>
											<textarea name="address" id="description" cols="30" rows="3" class="form-control" style="resize: none;"></textarea>
										</div>
									</div>
									
									<div class="col-12">
										<input type="submit" value="Save profile" class="btn btn-primary">
									</div>
								</form>
							</div>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<div class="hidenfiler">
	<input type="file" name="imageavartar" class="imagerAvarter"/>
</div>
<script>
	function openUploader(){
		var imagerAvarter = document.querySelector('.imagerAvarter');
		imagerAvarter.click();
	}
</script>
<?php
	require(__DIR__.DIRECTORY_SEPARATOR."include".DIRECTORY_SEPARATOR."footer.inc.php");
?>