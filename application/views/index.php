<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/images/logos/favicon.png'); ?>"  />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.min.css'); ?>" />
</head>

<body>

	<?php if (isset($message)) : ?>
		<script>
			alert("<?php echo $message; ?>");
		</script>
	<?php endif; ?>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap" style="font-size: 32px; font-weight:bold">
            TravelinAja
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index.html" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Admin Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Showcase</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo site_url('travel/landing_page')?>" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Landing Page</span>
              </a>
            </li>
           
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
         
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
            	<h5 class="card-title fw-semibold mb-4">Form Input Paket Wisata</h5>
				<div class="card">
				<div class="card-body">
					<form action="<?php echo site_url('travel/simpan_data'); ?>" method="post" enctype="multipart/form-data">
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Destinasi</label>
						<input type="text" class="form-control" id="destinasi" name="destinasi" aria-describedby="emailHelp" placeholder="Destinasi">
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Jumlah Orang</label>
						<input type="text" class="form-control" id="jml_org" name="jml_org" placeholder="Jumlah Orang">
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Budget</label>
						<input type="text" class="form-control" id="budget" name="budget" placeholder="Budget">
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Deskripsi</label>
						<br>
						<!-- <input type="password" class="form-control" id="exampleInputPassword1"> -->
						<textarea class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi"></textarea>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Foto</label>
						<br>
						<input type="file" id="photo" name="photo">
						
					</div>
					
					<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
				</div>
				<!-- tabel destinasi -->
				<div class="card w-100">
				<div class="card-body p-4">
					<h5 class="card-title fw-semibold mb-4">Tabel Destinasi</h5>
					<div class="table-responsive">
					<table class="table text-nowrap mb-0 align-middle">
						<thead class="text-dark fs-4">
						<tr>
							<th class="border-bottom-0">
							<h6 class="fw-semibold mb-0">No</h6>
							</th>
							<th class="border-bottom-0">
							<h6 class="fw-semibold mb-0">Preview</h6>
							</th>
							<th class="border-bottom-0">
							<h6 class="fw-semibold mb-0">Destinasi</h6>
							</th>
							<th class="border-bottom-0">
							<h6 class="fw-semibold mb-0">Jumlah Orang</h6>
							</th>
							<th class="border-bottom-0">
							<h6 class="fw-semibold mb-0">Deskripsi</h6>
							</th>
							<th class="border-bottom-0">
							<h6 class="fw-semibold mb-0">Budget</h6>
							</th>
							<th class="border-bottom-0">
							<h6 class="fw-semibold mb-0">Aksi</h6>
							</th>
						</tr>
						</thead>
						<tbody>
						<?php 
							if($c_trl>0){
								$no = 0;
								foreach($trl as $list){
						?>

						<tr>
							<td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo ++$no;?></h6></td>
							<td class="border-bottom-0">
							<img src="<?php echo base_url('uploads/'.$list->photo) ?>" style="width:50px; height:50px">                        
							</td>
							<td class="border-bottom-0">
							<?php echo $list->destinasi;?>
							</td>
							<td class="border-bottom-0">
							<?php echo $list->jml_org;?>
							</td>
							<td class="border-bottom-0">
							<?php 
							$deskripsi = $list->deskripsi;
							$max_length = 10; // Maximum length of the string
							if (strlen($deskripsi) > $max_length) {
								$deskripsi = substr($deskripsi, 0, $max_length) . '...';
							}
							echo $deskripsi;
							?>
							</td>
							<td class="border-bottom-0">
							<?php echo 'Rp ' . number_format($list->budget, 0, ',', '.'); ?>
							</td>
							<td class="border-bottom-0">
							<a class="btn btn-primary btn-xs" style="margin-bottom: 10px;" href="<?php echo site_url('travel/edit_data/'.$list->id)?>" title="Edit">
								<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit
							</a>
							<br>
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
							<td colspan="5"><center>Data Paket Wisata Kosong</center></td>
						</tr>
						<?php 
							}
						?>                   
						</tbody>
					</table>
					</div>
				</div>
				</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?php echo base_url('assets/libs/jquery/dist/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/sidebarmenu.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/app.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/libs/simplebar/dist/simplebar.js'); ?>"></script>
</body>

</html>