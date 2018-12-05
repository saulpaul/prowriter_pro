<?php
require(__DIR__.DIRECTORY_SEPARATOR."include".DIRECTORY_SEPARATOR."head.inc.php");
?>
<!--My wallet GUI-->

<main class="main-content bgc-grey-100">
                <div id="mainContent">
                    <div class="container-fluid">
                      <h4 class="c-grey-900 mT-10 mB-30">Saved Payment Methods</h4>
                      <div class="row">
                       		<div class="col-md-8">
                       			<table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Account Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Paypal</td>
                                                <td>mark@gmail.com</td>
                                                <td>
                                                	<div class="btn-group">
														<button type="button" class="btn btn-primary">Action</button>
														<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Action</span></button>
														<div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a> <a class="dropdown-item" href="#">Delete</a> 
														</div>
													</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                       		</div>
                      </div>
                        <h4 class="c-grey-900 mT-10 mB-30">Choose Your Payment Method</h4>
                        <div class="row">
                            <div class="col-md-12">
                            	<div class="col-md-12">
                            		<div class="row pill-tabs-900">
                            			<div class="col-md-4">
                            				<div class="row">
                            					<div class="col-md-4 innerImager">
													<div class="in visa_user" data-clicker="visa" onclick="opener">
														<img src="assets/static/images/visa.png" alt="visa image icon"/>
													</div>
												</div>
												<div class="col-md-4 innerImager">
													<div class="in" data-clicker="mastercard">
														<img src="assets/static/images/mastercard.png" alt="master card icon"/>
													</div>
												</div>
												<div class="col-md-4 innerImager">
													<div class="in" data-clicker="paypal">
														<img src="assets/static/images/paypal.png" alt="paypal card icon"/>
													</div>
												</div>
                            				</div>
                            			</div>
                            		</div>
                            	</div>
								<!--switcher-->
                            	<div class="col-md-12">
                            		<div class="row visacardHolder">
                            			<div class="firstRow">
                            				<div class="col-md-12"><!---->
                            					<form action="" class="placeHoldercard row">
                            						<div class="col-md-8">
                           								<div class="row">
                           									<div class="col-md-6">
																<div class="in_input">
																	<label>Card Holder Name</label>
																	<input class="form-control placer" type="text" Placeholder="Harry Doe"/>
																</div>
															</div>
															<div class="col-md-6">
																<div class="in_input">
																	<label>Card Number</label>
																	<input class="form-control placer" type="Number" Placeholder="88453645634"/>
																</div>
															</div>
                           								</div>
                           								<div class="row">
                           									<div class="col-md-6">
																<div class="in_input">
																	<label>Email Address</label>
																	<input class="form-control placer" type="text" Placeholder="Harry Doe"/>
																</div>
															</div>
															<div class="col-md-6">
																<div class="row">
																	<div class="col-md-8">
																		<div class="in_input">
																			<label>Expiry Date</label>
																			<div class="row">
																				<div class="col-md-6">
																					<input class="form-control placer" type="text" Placeholder="month"/>
																				</div>
																				<div class="col-md-6">
																					<input class="iserPanel form-control placer" type="text" Placeholder="Year"/>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="in_input">
																			<label>Cvv</label>
																			<input class="iserPanel form-control placer" type="text" Placeholder="month"/>
																		</div>
																	</div>
																</div>
															</div>
                          									<div class="col-md-6">
                            									<div class="in_input">
                            										<button type="button" class="btn btn-danger" style="cursor:pointer;">
                            											Save Card
                            										</button>
                            									</div>
                            								</div>
                           								</div>
                            						</div>
                            					</form>
                            				</div><!---->
                            			</div>
                            		</div>
                            		<!---->
                            		<div class="row mastercardHolder">
                            			<div class="firstRow">
                            				<div class="col-md-12"><!---->
                            					<form action="" class="placeHoldercard row">
                            						<div class="col-md-8">
                           								<div class="row">
                           									<div class="col-md-6">
																<div class="in_input">
																	<label>Card Holder Name</label>
																	<input class="form-control placer" type="text" Placeholder="Harry Doe"/>
																</div>
															</div>
															<div class="col-md-6">
																<div class="in_input">
																	<label>Card Number</label>
																	<input class="form-control placer" type="Number" Placeholder="88453645634"/>
																</div>
															</div>
                           								</div>
                           								<div class="row">
                           									<div class="col-md-6">
																<div class="in_input">
																	<label>Email Address</label>
																	<input class="form-control placer" type="text" Placeholder="Harry Doe"/>
																</div>
															</div>
															<div class="col-md-6">
																<div class="row">
																	<div class="col-md-8">
																		<div class="in_input">
																			<label>Expiry Date</label>
																			<div class="row">
																				<div class="col-md-6">
																					<input class="form-control placer" type="text" Placeholder="month"/>
																				</div>
																				<div class="col-md-6">
																					<input class="iserPanel form-control placer" type="text" Placeholder="Year"/>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="in_input">
																			<label>Cvv</label>
																			<input class="iserPanel form-control placer" type="text" Placeholder="month"/>
																		</div>
																	</div>
																</div>
															</div>
                          									<div class="col-md-6">
                            									<div class="in_input">
                            										<button type="button" class="btn btn-danger" style="cursor:pointer;">
                            											Save Card
                            										</button>
                            									</div>
                            								</div>
                           								</div>
                            						</div>
                            					</form>
                            				</div><!---->
                            			</div>
                            		</div>
                            		<!---->
                            		<!---->
                            		<div class="row paypalHolder">
                            			<div class="firstRow">
                            				<div class="col-md-12">
                            							<form class="container" id="needs-validation" novalidate>
															<div class="row">
																<div class="col-md-6 mb-3">
																	<div class="in_input">
																		<label for="validationCustom01">Paypal Email</label>
																		<input type="email" class="form-control" id="validationCustom01" placeholder="First name" required>
																	</div>
																</div>
															</div>
															<button class="btn btn-primary" type="button">Submit form</button>
														</form>
                            						                          	
                            					
                            				</div>
                            			</div>
                            		</div>
                            		<!---->
                            	</div>
                            	<!--END-->
							</div>
                        </div>
                    </div>
                </div>
            </main>

<!--END-->

<?php
	require(__DIR__.DIRECTORY_SEPARATOR."include".DIRECTORY_SEPARATOR."footer.inc.php");
?>