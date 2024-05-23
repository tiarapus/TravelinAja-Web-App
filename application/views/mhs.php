<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Just another day</title>
    <!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url('style/css/bootstrap.min.css');?>">
	<style type="text/css">
		#jrs{ font-size: 19px; }
	</style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<div class="panel panel-default">
	    <div class="panel-heading"><div class="text-center">Daftar Touris Travel ABC</div></div>
	    <div class="panel-body">
		    <div class="page-header">
			  <p>Input data Touris dengan data yang lengkap dan benar.</p>
			</div>
			<div class="row">
		    <div class="col-lg-4">
			<form class="form-horizontal" action="<?php echo site_url('travel/eksekusi_edit'); ?>" method="post" enctype="multipart/form-data">
				<?php foreach($data as $a):?>
				<input type="hidden" name="id" value="<?php echo($a->id);?>"/>
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">Nama</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $a->nama;?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Telepon</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="telepon" name="telepon" value="<?php echo $a->telepon;?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Destinasi</label>
					<div id="dst" class="col-sm-10">
					    <select class="form-control" id="dst" name="destinasi">
							<option value="<?php echo $a->destinasi;?>"><?php echo $a->destinasi;?></option>
							<?php
							if($a->destinasi=="Bali"){
							?>
								<option value="Yogyakarta">Yogyakarta</option>
								<option value="Jakarta">Jakarta</option>
								<option value="Lombok">Lombok</option>
							<?php 	
							}else if($a->destinasi=="Yogyakarta"){
							?>
								<option value="Bali">Bali</option>
								<option value="Jakarta">Jakarta</option>
								<option value="Lombok">Lombok</option>
							<?php
							}else if($a->destinasi=="Jakarta"){
							?>
								<option value="Bali">Bali</option>
								<option value="Yogyakarta">Yogyakarta</option>
								<option value="Lombok">Lombok</option>
							<?php	
							}else if($a->destinasi=="Lombok"){
							?>
								<option value="Bali">Bali</option>
								<option value="Jakarta">Jakarta</option>
								<option value="Yogyakarta">Yogyakarta</option>
							<?php
							}
							?>
					    </select> 
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Photo</label>
					<div class="col-sm-10">
					  <input type="file" id="photo" name="photo">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <button type="submit" class="btn btn-success">Simpan</button>
					</div>
				</div>
				<?php endforeach; ?> 
			</form>
			</div>
			<div class="col-lg-8">
				<table class="table table-bordered table-striped">
					<thead>
					  <tr>
						<th class="text-center">No.</th>
						<th class="text-center">Photo</th>
						<th class="text-center">Telepon</th>
						<th class="text-center">Nama</th>
						<th class="text-center">Destinasi</th>
						<th class="text-center" colspan="2">Aksi</th>
					  </tr>
					</thead>
					<tbody>
					  <?php 
						if($c_trl>0){
							$no = 0;
							foreach($trl as $list){
					  ?>
					  <tr>
						<td class="text-center"><?php echo ++$no;?></td>
						<td class="text-center">
							<img src="<?php echo base_url('uploads/'.$list->photo) ?>" style="width:50px; height:50px">
						</td>
						<td class="text-center"><?php echo $list->telepon;?></td>
						<td class="text-center"><?php echo $list->nama;?></td>
						<td class="text-center"><?php echo $list->destinasi;?></td>
						<td class="text-center">
							<a class="btn btn-primary btn-xs" href="<?php echo site_url('travel/edit_data/'.$list->id)?>" title="Edit">
								<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit
							</a>
						</td>
						<td class="text-center">
							<a class="btn btn-danger btn-xs" href="<?php echo site_url('travel/hapus_data/'.$list->id)?>" title="Edit">
								<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Hapus
							</a>
						</td>
					  </tr>
					  <?php 
							}
						}else{
					  ?>
					  <tr>
						<td colspan="5"><center>Data Touris Kosong</center></td>
					  </tr>
					  <?php 
						}
					  ?>
					</tbody>
				</table>
			</div>
			</div>
	    </div>
		<div class="panel-footer"><div class="text-center">Create by Afifah dan Tiara</div></div>
	</div>
  
	<script src="<?php echo base_url('style/js/jquery-3.1.1.js');?>"></script>
	<script src="<?php echo base_url('style/js/bootstrap.min.js');?>"></script>
  </body>
</html>