<div class="panel panel-default">
	    <div class="panel-heading"><div class="text-center">Daftar Touris Travel ABC</div></div>
	    <div class="panel-body">
		    <div class="page-header">
			  <p>Input data Touris dengan data yang lengkap dan benar.</p>
			</div>
			<div class="row">
		    <div class="col-lg-4">
			<form class="form-horizontal" action="<?php echo site_url('mahasiswa/simpan_data'); ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">Deskripsi</label>
					<div class="col-sm-10">
					  <!-- <input type="textarea" class="form-control" id="nama" name="nama" placeholder="Nama"> -->
					  <textarea name="nama" id="nama" placeholder="Nama"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Jumlah Orang</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Telepon">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Destinasi</label>
					<div id="dst" class="col-sm-10">
					    <select class="form-control" id="destinasi" name="destinasi">
							<option value="Bali">Bali</option>
						    <option value="Yogyakarta">Yogyakarta</option>
							<option value="Jakarta">Jakarta</option>
							<option value="Lombok">Lombok</option>
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
							<a class="btn btn-primary btn-xs" href="<?php echo site_url('mahasiswa/edit_data/'.$list->id)?>" title="Edit">
								<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit
							</a>
						</td>
						<td class="text-center">
							<a class="btn btn-danger btn-xs" href="<?php echo site_url('mahasiswa/hapus_data/'.$list->id)?>" title="Edit">
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