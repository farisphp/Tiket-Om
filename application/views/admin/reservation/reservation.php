<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Reservation</title>
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
					<div class="col-sm-2 col-md-2">
				 </div>
			 </div>
			</section>
			<section class="content">
				<div class="row">
					<div class="col-xs-12">
						<div class="box">
							<div class="box-header">
								<h3 class="box-title">Reservation</h3>
								<div class="box-tools">
									<div class="input-group input-group-sm" style="width: 150px;">
										<input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
										<div class="input-group-btn">
											<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
										</div>
									</div>
								</div>
							</div>
							<!-- /.box-header -->
							<div class="box-body table-responsive no-padding">
								<table class="table table-hover">
								<tbody>
									<tr>
										<th>No</th>
										<th>Kode</th>
										<th>Nama</th>
										<th>Dipesan</th>
										<th>Nomor Kursi</th>
										<th>Rute</th>
										<!-- <th width="10%">Action</th> -->
										<?php $no=1; ?>
									</tr><?php foreach ($reservation as $data){?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $data->reservation_code ?></td>
										<td><?= $data->name ?></td>
										<td><?php echo date_format(date_create($data->reservation_date), 'd M Y H:i');  ?></td>
										<td><?= $data->seat_code ?></td>
										<td><?= $data->mktndol ?> (<?= $data->codemkt ?>) - <?= $data->blindol ?> (<?= $data->codebli ?>)</td>
										<!-- <td> -->
											<!-- <a href="" class="btn btn-default btn-sm"><span class="fa fa-pencil"> Edit</span></a> -->
											<!-- <a href="" onclick="return confirm('Delete ?')" class="btn btn-danger btn-sm"><span class="fa fa-trash"> Delete</span></a> -->
										<!-- </td> -->
									</tr><?php } ?>
								</tbody>
								</table>
							</div>  
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<div class="control-sidebar-bg"></div>
</div>
<?php $this->load->view('admin/common/scbawah'); ?>
</body>
</html>