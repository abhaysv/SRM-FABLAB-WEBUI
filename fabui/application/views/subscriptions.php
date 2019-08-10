<?php
defined('BASEPATH') OR exit('No direct path allowed')
?>
	<!-- Preloader -->
	<div class="preloader">
		<svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
		</svg>
	</div>
	<div id="wrapper">
		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-static-top m-b-0">
			<div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
				<div class="top-left-part">
					<a class="logo" href="<?php echo base_url()."assets/fitsigma/";?>customer-app/dashboard"> <span class="hidden-xs">
                                                                        <img src="<?php echo base_url()."assets/fitsigma/";?>fitsigma/images/logo.png" class="logo-style" alt="Logo">
                                                            </span>
					</a>
				</div>
				<ul class="nav navbar-top-links navbar-left hidden-xs">
					<li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a>
					</li>
				</ul>
				<ul class="nav navbar-top-links navbar-right pull-right">
					<li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-bell"></i>
                    <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
						<ul class="dropdown-menu mailbox scale-up">
							<li>
								<div class="drop-title">You have 2 new notifications</div>
							</li>
							<li>
								<div class="message-center">
									<a href="javascript:;">
										<div class="user-img">
											<img src="<?php echo base_url()."assets/fitsigma/";?>fitsigma/images/user.svg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> 
										</div>
										<div class="mail-contnet">
											<h5>Payment Added</h5>
											<span class="mail-desc">Payment recorded successfully.</span> 
										</div>
									</a>
									<a href="javascript:;">
										<div class="user-img">
											<img src="<?php echo base_url()."assets/fitsigma/";?>fitsigma/images/user.svg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> 
										</div>
										<div class="mail-contnet">
											<h5>Subscription Added</h5>
											<span class="mail-desc">Subscription added successfully.</span> 
										</div>
									</a>
								</div>
							</li>
							<li>
								<a class="text-center mark-read"> <strong>Mark as Read</strong>  <i class="fa fa-angle-right"></i> 
								</a>
							</li>
						</ul>
						<!-- /.dropdown-messages -->
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">
							<img src="<?php echo base_url()."assets/fitsigma/";?>fitsigma/images/user.svg" width="36" class="img-circle img-change" /> <b class="hidden-xs"><?php echo $this->session->userdata('Student_Name'); ?></b>
						</a>
						<ul class="dropdown-menu dropdown-user scale-up">
							<!-- <li><a href="<?php echo base_url()."assets/fitsigma/";?>customer-app/profile"><i class="ti-user"></i> My Profile</a>
							</li>
							<li><a href="<?php echo base_url()."assets/fitsigma/";?>customer-app/message"><i class="ti-email"></i> Inbox</a>
							</li> -->
							<li role="separator" class="divider"></li>
							<li><a href="logout"><i class="fa fa-power-off"></i> Logout</a>
							</li>
						</ul>
						<!-- /.dropdown-user -->
					</li>
				</ul>
			</div>
			<!-- /.navbar-header -->
			<!-- /.navbar-top-links -->
			<!-- /.navbar-static-side -->
		</nav>
		<!-- Left navbar-header -->
		<div class="navbar-default sidebar" role="navigation">
			<div class="sidebar-nav navbar-collapse slimscrollsidebar">
				<ul class="nav" id="side-menu">
					<li class="sidebar-search hidden-sm hidden-md hidden-lg">
						<!-- input-group -->
						<div class="input-group custom-search-form">
							<input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span>
						</div>
						<!-- /input-group -->
					</li>
					<li class="user-pro">
						<a href="javascript:;" class="waves-effect">
							<img src="<?php echo base_url()."assets/fitsigma/";?>fitsigma/images/user.svg" class="img-circle img-change" /> <span class="hide-menu"><?php echo $this->session->userdata('Student_Name'); ?><span
                                class="fa arrow"></span></span>
						</a>
						<ul class="nav nav-second-level">
							<!-- <li><a href="<?php echo base_url()."assets/fitsigma/";?>customer-app/profile"><i class="ti-user"></i> My Profile</a>
							</li>
							<li><a href="<?php echo base_url()."assets/fitsigma/";?>customer-app/message"><i class="ti-email"></i> Inbox</a>
							</li> -->
							<li><a href="<?php echo base_url()."assets/fitsigma/";?>customer-app/logout"><i class="fa fa-power-off"></i> Logout</a>
							</li>
						</ul>
					</li>
					<li class="nav-small-cap m-t-10">--- Main Menu</li>
					<li><a href="dashboard" class="waves-effect "><i
                            class="zmdi zmdi-view-dashboard zmdi-hc-fw fa-fw"></i> <span
                            class="hide-menu"> Dashboard </span></a>
					</li>
					<li><a href="subscriptions" class="waves-effect active"><i class="zmdi zmdi-account zmdi-hc-fw fa-fw"></i>
                    <span class="hide-menu"> Subscriptions </span></a>
					</li>
					<!-- <li><a href="javascript:;" class="waves-effect "><i
                            class="fa fa-inr"></i> <span class="hide-menu gap-payments"> Payments <span
                                class="fa arrow"></span></span></a>
						<ul class="nav nav-second-level">
							<li><a href="<?php echo base_url()."assets/fitsigma/";?>customer-app/payments" class="">Payments</a>
							</li>
							<li><a href="<?php echo base_url()."assets/fitsigma/";?>customer-app/payments/due-payments" class="">Due
                            Payments</a>
							</li>
						</ul>
					</li>
					<li><a href="<?php echo base_url()."assets/fitsigma/";?>customer-app/attendance" class="waves-effect "><i
                            class="zmdi zmdi-calendar-check zmdi-hc-fw fa-fw"></i> <span
                            class="hide-menu"> Attendance </span></a>
					</li>
					<li><a href="<?php echo base_url()."assets/fitsigma/";?>customer-app/message" class="waves-effect "><i
                            class="zmdi zmdi-email zmdi-hc-fw fa-fw"></i> <span class="hide-menu"> Message </span></a>
					</li> -->
				</ul>
			</div>
		</div>
		<!-- Left navbar-header end -->
		<!-- Page Content -->
		<div id="page-wrapper">
			<div class="container-fluid">
				<div class="row bg-title">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h4 class="page-title">Subscription</h4>
					</div>
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li>Main Menu</li>
							<li class="active">Subscription</li>
						</ol>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="white-box">
							<h3 class="box-title m-b-0"><i class="fa fa-inr"></i> Subscription</h3>
							<div class="row">
								<div class="col-md-6"> <a class="btn btn-sm btn-success waves-effect" href="#"><i class="zmdi zmdi-plus zmdi-hc-fw fa-fw"></i>Buy Subscription</a>
								</div>
								<div class="col-md-6"></div>
							</div>
							<p class="text-muted m-b-30"></p>
							<div class="table-responsive">
								<div id="subscriptionTable_wrapper" class="dataTables_wrapper no-footer">
						
									<div id="subscriptionTable_processing" class="dataTables_processing" style="display: none;"><i class="fa fa-spinner faa-spin animated"></i> Processing</div>
									<table id="subscriptionTable" class="table table-striped dataTable no-footer" role="grid" aria-describedby="subscriptionTable_info" style="width: 1024px;">
										<thead>
											<tr role="row">
												<th class="sorting_asc" tabindex="0" aria-controls="subscriptionTable" rowspan="1" colspan="1" style="width: 128px;" aria-sort="ascending" aria-label="Membership: activate to sort column descending">Membership</th>
												<th class="sorting" tabindex="0" aria-controls="subscriptionTable" rowspan="1" colspan="1" style="width: 306px;" aria-label="Payments: activate to sort column ascending">Payments</th>
												<th class="sorting" tabindex="0" aria-controls="subscriptionTable" rowspan="1" colspan="1" style="width: 107px;" aria-label="Start Date: activate to sort column ascending">Start Date</th>
												<th class="sorting" tabindex="0" aria-controls="subscriptionTable" rowspan="1" colspan="1" style="width: 110px;" aria-label="Expires On: activate to sort column ascending">Expires On</th>
												<th class="sorting" tabindex="0" aria-controls="subscriptionTable" rowspan="1" colspan="1" style="width: 77px;" aria-label="Status: activate to sort column ascending">Status</th>
												<th class="sorting" tabindex="0" aria-controls="subscriptionTable" rowspan="1" colspan="1" style="width: 80px;" aria-label="Action: activate to sort column ascending">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr role="row" class="odd">
												<td class="sorting_1">Fablab Basic Trial</td>
												<td>
													<ul>
														<li>Amount To Be Paid: <i class="fa fa-inr"></i> 0</li>
														<li>Remaining Amount: <i class="fa fa-inr"></i> 0</li>
														<li>Next Payment: <?php echo $this->session->userdata('fabmem_exp'); ?>
															<label class="label label-warning">No Payment Received</label>
														</li>
													</ul>
												</td>
												<td>Jul 23, 2019</td>
												<td><?php echo $this->session->userdata('fabmem_exp'); ?></td>
												<td>
													<label class="label label-success">Active</label>
												</td>
												<td>
													<button class="btn btn-sm btn-info waves-effect view-subscription" data-pk="7">View</button>
												</td>
											</tr>
											<tr role="row" class="even">
												<td class="sorting_1">Special Tool Access</td>
												<td>
													<ul>
														<li> Subsctoption Status: Active</li>
														<li>Certification: <label class="label label-warning">Pending</label></li>
											
													</ul>
												</td>
												<td>-</td>
												<td><?php echo $this->session->userdata('fabmem_exp'); ?></td>
												<td>
													<label class="label label-danger">Restricted Access</label>
												</td>
												<td>
													<button class="btn btn-sm btn-info waves-effect view-subscription" data-pk="6">View</button>
												</td>
											</tr>
											<tr role="row" class="odd">
												<td class="sorting_1">Mac Pro Access</td>
												<td>
													<ul>
														<li> Subsctoption Status: Active</li>
														<li>Certification: <label class="label label-warning">Pending</label></li>
												
													</ul>
												</td>
												<td>-</td>
												<td><?php echo $this->session->userdata('fabmem_exp'); ?></td>
												<td>
												<label class="label label-warning">Supervised</label>
												</td>
												<td>
													<button class="btn btn-sm btn-info waves-effect view-subscription" data-pk="3">View</button>
												</td>
											</tr>
											<tr role="row" class="even">
												<td class="sorting_1">3D Printer Access</td>
												<td>
													<ul>
													<li> Subsctoption Status: Active</li>
														<li>Certification: <label class="label label-warning">Pending</label></li>
													
													</ul>
												</td>
												<td>-</td>
												<td><?php echo $this->session->userdata('fabmem_exp'); ?></td>
												<td>
													<label class="label label-warning">Supervised</label>
												</td>
												<td>
													<button class="btn btn-sm btn-info waves-effect view-subscription" data-pk="1">View</button>
												</td>
											</tr>
										</tbody>
									</table>
									<div class="dataTables_info" id="subscriptionTable_info" role="status" aria-live="polite">Showing 1 to 4 of 4 records</div>
									<div class="dataTables_paginate paging_simple_numbers" id="subscriptionTable_paginate"><a class="paginate_button previous disabled" aria-controls="subscriptionTable" data-dt-idx="0" tabindex="0" id="subscriptionTable_previous">Prev</a><span><a class="paginate_button current" aria-controls="subscriptionTable" data-dt-idx="1" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="subscriptionTable" data-dt-idx="2" tabindex="0" id="subscriptionTable_next">Next</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.container-fluid -->
			<footer class="footer text-center">2019 &copy; Fitsigma Customer App</footer>
		</div>
		<!-- /#page-wrapper -->
	</div>
	<div id="customerShowModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myLargeModalLabel">Modal</h4>
				</div>
				<div class="modal-body">Loading ...</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<div id="customerDeleteModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
				</div>
				<div class="modal-body">....</div>
				<div class="modal-footer">
					<button type="button" id="deleteModalBtn" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Delete</button>
					<button type="button" class="btn btn-default waves-effect text-left" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /#wrapper -->
	<!-- jQuery -->
	<script src="<?php echo base_url()."assets/fitsigma/";?>fitsigma_customer/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo base_url()."assets/fitsigma/";?>fitsigma_customer/bootstrap/dist/js/tether.min.js"></script>
	<script src="<?php echo base_url()."assets/fitsigma/";?>fitsigma_customer/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()."assets/fitsigma/";?>fitsigma_customer/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
	<!-- Menu Plugin JavaScript -->
	<script src="<?php echo base_url()."assets/fitsigma/";?>fitsigma_customer/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
	<!--slimscroll JavaScript -->
	<script src="<?php echo base_url()."assets/fitsigma/";?>fitsigma_customer/js/jquery.slimscroll.js"></script>
	<!--Wave Effects -->
	<script src="<?php echo base_url()."assets/fitsigma/";?>fitsigma_customer/js/waves.js"></script>
	<!--Counter js -->
	<script src="<?php echo base_url()."assets/fitsigma/";?>fitsigma_customer/bower_components/waypoints/lib/jquery.waypoints.js"></script>
	<script src="<?php echo base_url()."assets/fitsigma/";?>fitsigma_customer/bower_components/counterup/jquery.counterup.min.js"></script>
	<!-- Custom Theme JavaScript -->
	<script src="<?php echo base_url()."assets/fitsigma/";?>fitsigma_customer/js/custom.min.js"></script>
	<!-- Sparkline chart JavaScript -->
	<!--Helper Script-->
	<script src="<?php echo base_url()."assets/fitsigma/";?>admin/global/plugins/froiden-helper/helper.js"></script>
	<script src="<?php echo base_url()."assets/fitsigma/";?>fitsigma_customer/bower_components/datatables/jquery.dataTables.min.js"></script>
	<script>
		var table = $('#subscriptionTable');
		    table.dataTable({
		        "responsive": true,
		        "serverSide": true,
		        "processing": true,
		        "cache": false,
		        "ajax": "https://fitsigma.froid.works/customer-app/manage-subscription/get-data",
		        "aoColumns": [
		            {'data': 'membership', 'name': 'membership'},
		            {'data': 'payments', 'name': 'payments'},
		            {'data': 'date', 'name': 'date'},
		            {'data': 'expires_on', 'name': 'expires_on'},
		            {'data': 'status', 'name': 'status'},
		            {'data': 'action', 'name': 'action'}
		        ],
		        "language": {
		            "aria": {
		                "sortAscending": ": activate to sort column ascending",
		                "sortDescending": ": activate to sort column descending"
		            },
		            "emptyTable": "No data available in table",
		            "info": "Showing _START_ to _END_ of _TOTAL_ records",
		            "infoEmpty": "No records found",
		            "infoFiltered": "(filtered1 from _MAX_ total records)",
		            "lengthMenu": "Show _MENU_",
		            "search": "Search:",
		            "processing": "<i class='fa fa-spinner faa-spin animated'></i> Processing",
		            "zeroRecords": "No matching records found",
		            "paginate": {
		                "previous":"Prev",
		                "next": "Next",
		                "last": "Last",
		                "first": "First"
		            }
		        }
		    });
		
		    table.on('click','.view-subscription', function () {
		        var id = $(this).data('pk');
		        var redirectUrl = 'https://fitsigma.froid.works/customer-app/manage-subscription/#id';
		        var url = redirectUrl.replace('#id', id);
		        $.ajaxModal('#customerShowModal', url);
		    });
		
		    table.on('click','.delete-subscription', function () {
		        var id = $(this).data('pk');
		        $('.modal-title').html('Delete Subscription');
		        $('.modal-body').html('Do you want to delete subscription?');
		        $('#customerDeleteModal').modal("show");
		        $('#customerDeleteModal').find('#deleteModalBtn').off('click').on('click', function() {
		            var redirectUrl = 'https://fitsigma.froid.works/customer-app/manage-subscription/#id';
		            var url = redirectUrl.replace('#id', id);
		            $.easyAjax({
		                type: 'DELETE',
		                url: url,
		                success: function () {
		                    table.fnDraw();
		                    $('#customerDeleteModal').modal("hide");
		                }
		            });
		        });
		    });
	</script>
	<script>
		$.ajaxSetup({
		        headers: {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        }
		    });
		
		    $(".counter").counterUp({
		        delay: 100,
		        time: 1200
		    });
		
		    $('.mark-read').click(function () {
		        var url = 'https://fitsigma.froid.works/customer-app/markRead';
		
		        $.easyAjax({
		            url: url,
		            type: 'POST',
		            success: function (response) {
		                $('.notify').hide();
		            }
		        })
		
		    });
	</script>