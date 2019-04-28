<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Edit</title>
	<?php $this->load->view('admin/common/scatas'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php $this->load->view('admin/common/header'); ?>
		<?php $this->load->view('admin/common/menu'); ?>
		<div class="content-wrapper">
			<!-- <section class="content-header">
				<h1>Tambah Kota</h1>
			</section>

			<section class="content col col-md">
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Tambah Kota</h3>
					</div>
					<?php foreach ($destination as $data){?>
					<form action="<?php echo base_url(). 'admin/destinations/update/'.$data->id; ?>" method="post" class="form-horizontal">
						<div class="box-body">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Nama Kota</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="destination" value="<?php echo $data->destination ?>">
								</div>
							</div>
							<?php } ?>
						</div>
						<div class="box-footer">
							<a href="<?php echo base_url(); ?>admin/destinations" class="btn btn-default">Batal</a>
							<button type="submit" class="btn btn-info pull-right" name="submit">Update</button>
						</div>
					</form>
				</div>
			</section> -->
			<section class="content">
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Destination</h3>
						<?php foreach ($destination as $data){?>
						<form action="<?php echo base_url(). 'admin/destinations/update/'.$data->id; ?>" method="post" class="form-horizontal">
					</div>
						<div class="box-body">
							<div class="form-group">
								<label>Nama Kota</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-plane"></i>
									</div>
									<input name="destination" type="text" class="form-control" placeholder="Pesawat" value="<?= $data->destination ?>" required/>
								</div>
							</div>
							<div class="form-group">
								<label>Kode Kota</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-qrcode"></i>
									</div>
									<input name="iso" type="text" class="form-control" value="<?= $data->iso ?>"  placeholder="Kode" required/>
								</div>
								<?php } ?>
							</div>
						<input type="submit" class="btn btn-primary" />
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