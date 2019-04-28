<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Create Destination</title>
	<?php $this->load->view('admin/common/scatas'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php $this->load->view('admin/common/header'); ?>
		<?php $this->load->view('admin/common/menu'); ?>
		<div class="content-wrapper">
			<section class="content-header">
				<h1>Create Data</h1>
				<form action="<?php echo base_url(). 'admin/destinations/add_destination'; ?>" method="post">
				</section>
				<section class="content">
					<div class="box box-info">
						<div class="box-header with-border">
							<h3 class="box-title">Destination</h3>
						</div>
						<div class="box-body">
							<div class="form-group">
								<div class="form-group">
									<label>Kota : </label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-building"></i>
										</div>
										<input name="destination" type="text" class="form-control" required/>
									</div>
									<label>Kode : </label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-qrcode"></i>
										</div>
										<input name="iso" type="text" class="form-control" required/>
										<input name="id" type="hidden" class="form-control" required/>
									</div>
								</div>
								<input type="submit" class="btn btn-primary" />
							</div>
						</div>
					</section>
				</form> 
			</div>
			<div class="control-sidebar-bg"></div>
		</div>
		<?php $this->load->view('admin/common/scbawah'); ?>
	</body>
	</html>
<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Create Destination</title>
	<?php $this->load->view('admin/common/scatas'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php $this->load->view('admin/common/header'); ?>
		<?php $this->load->view('admin/common/menu'); ?>
		<div class="content-wrapper">
			<section class="content-header">
				<h1>Create Data</h1>
			</section>
			<section class="content col col-md-6">
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Destination</h3>
					</div>
					<form action="<?php echo base_url(). 'admin/destinations/add_destination'; ?>" method="post" class="form-horizontal">
						<div class="box-body">
							<div class="form-group">
								<label class="col-sm-2 control-label">Nama Kota</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="destination" placeholder="Nama Kota">
								</div>
							</div>
						</div>
						<div class="box-footer">
							<button class="btn btn-default">Kembali</button>
							<button type="submit" class="btn btn-info pull-right" name="btnSubmit">Tambah</button>
						</div>
					</form>
				</div>
			</section>

		</div>
		<div class="control-sidebar-bg"></div>
	</div>
	<?php $this->load->view('admin/common/scbawah'); ?>
</body>
</html>