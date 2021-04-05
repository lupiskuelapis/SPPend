  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">SPPend.</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                  <h1 class="card-title">SPPendidikan SMK Muhammadiyah 1 Yogyakarta</h1>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h2 class="card-title">PEMBAYARAN</h2>

                <p class="card-text">
                  Klik link tersebut untuk menuju Transaksi Pembayaran
                </p>
                <a href="<?php echo base_url('Pembayaran') ?>" class="btn btn-success">P E M B A Y A R A N</a>
              </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Link Menuju Data Petugas</h5>
              </div>
              <div class="card-body">
                <a href="<?php echo base_url('Petugas') ?>" class="btn btn-danger">P E T U G A S</a>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Link Menuju Data Siswa</h5>
              </div>
              <div class="card-body">
                <a href="<?php echo base_url('Siswa') ?>" class="btn btn-success">Data Siswa</a>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Link Menuju Data Kelas</h5>
              </div>
              <div class="card-body">
                <a href="<?php echo base_url('Kelas') ?>" class="btn btn-danger">Data Kelas</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Link Menuju Data SPP</h5>
              </div>
              <div class="card-body">
                <a href="<?php echo base_url('Spp') ?>" class="btn btn-primary">Data SPP</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->