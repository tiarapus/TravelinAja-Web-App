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
              <a class="sidebar-link" href="<?php echo site_url('travel/index')?>" aria-expanded="false">
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
            	<h5 class="card-title fw-semibold mb-4">Form Edit Data Paket Wisata</h5>
				<div class="card">
				<div class="card-body">
					<form action="<?php echo site_url('travel/eksekusi_edit'); ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $data[0]->id; ?>">
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Destinasi</label>
						<input type="text" class="form-control" id="destinasi" name="destinasi" aria-describedby="emailHelp"  value="<?php echo $data[0]->destinasi; ?>">
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Jumlah Orang</label>
						<input type="text" class="form-control" id="jml_org" name="jml_org"  value="<?php echo $data[0]->jml_org; ?>">
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Budget</label>
						<input type="text" class="form-control" id="budget" name="budget" value="<?php echo $data[0]->budget; ?>">
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Deskripsi</label>
						<br>
						<!-- <input type="password" class="form-control" id="exampleInputPassword1"> -->
						<textarea class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi"><?php echo htmlspecialchars($data[0]->deskripsi); ?></textarea>

					</div>
                    
                    <?php if (!empty($data[0]->photo)): ?>
                        <div class="my-3">
                        <img src="<?php echo base_url('uploads/'.$data[0]->photo) ?>" alt="Foto" style="max-width: 200px;">
                        </div>
                        <input type="hidden" name="photo" value="<?php echo $data[0]->photo; ?>">
                    <?php else: ?>
                        <span>Tidak ada foto tersedia</span>
                    <?php endif; ?>
                    
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Foto</label>
						<br>
						<input type="file" id="photo" name="photo">
						
					</div>
					<a href="http://localhost/travel/index.php" class="btn btn-danger">Cancel</a>
					<button type="submit" class="btn btn-primary">Submit</button>
                    
					</form>
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