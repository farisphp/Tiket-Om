<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Destination</title>
	<?php $this->load->view('admin/common/scatas'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php $this->load->view('admin/common/header'); ?>
		<?php $this->load->view('admin/common/menu'); ?>
		<div class="content-wrapper">
			<section class="content-header">
				<h1>Manage Data</h1>
				<div class="row">
				</div>
			</section>
			<section class="content">
				<div class="row">
					<div class="col-xs-12">
						<div class="box">
							<div class="box-header">
								<h3 class="box-title">Payment Confirmation</h3>
							</div>
							<div class="box-body">
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th width="15%">No</th>
											<th>Customer Name</th>
											<th>Reservation Code</th>
											<th>Reservation Date</th>
											<th>Seat Code</th>
											<th width="15%">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1; ?>
										<?php foreach ($payment as $data){?>
										<tr>
											<td><?php  echo $no++; ?></td>
											<td><?php echo $data->nama ?></td>
											<td><?php echo $data->reservation_code ?></td>
											<td><?php echo $data->reservation_date ?></td>
											<td><?php echo $data->seat_code ?></td>
											<td>
												<?php if($data->status == 0) { ?> 
													<a type="button" href="<?php echo base_url('admin/payment/confirm/'.$data->reservation_code.'/1') ?>" class="btn btn-success btn-sm"><span class="fa fa-check"> Confirm</span></a>
													<a type="button" href="<?php echo base_url('admin/payment/confirm/'.$data->reservation_code.'/2') ?>" class="btn btn-danger btn-sm"><span class="fa fa-times"> Reject</span></a>
												<?php } else if($data->status == 1) {?>
													<a type="button" href="#" class="btn btn-primary btn-sm col-md-10"> Confirmed</a>
												<?php } else {?>
													<a type="button" href="#" class="btn btn-warning btn-sm col-md-10"> Rejected</a>
												<?php } ?>
												
											</td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</section>
</div>
<div class="control-sidebar-bg"></div>
</div>
<?php $this->load->view('admin/common/scbawah'); ?>
</body>
</html>