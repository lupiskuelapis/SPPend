 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $title; ?><</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title; ?></li>
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
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0"><?php echo $title; ?></h5>
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID SPP</th>
                            <th>Tahun</th>
                            <th>Nominal</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=0;
                        foreach ($spp->result() as $value):
                            $no++;
                        ?>
                        <tr>
                            <td><?php echo $value->id_spp; ?></td>
                            <td><?php echo $value->tahun; ?></td>
                            <td><?php echo $value->nominal; ?></td>
                            <td>
                                <!-- <a href="<?php echo base_url('spp/edit/').$value->id_spp ?>" class="btn btn-xs btn-warning">Edit</a> -->
                                <a href="<?php echo base_url('spp/hapus/').$value->id_spp ?>" class="btn btn-xs btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php
                        endforeach;
                        ?>
                        </tbody>
                        <tfoot>
                            
                        </tfoot>
                    </table> 
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
        <div class="card-footer clearfix">
            <a href="<?php echo base_url('spp/tambah') ?>" class="btn btn-primary btn-primary">Tambah Data</a>
            <a href="<?php echo base_url('spp/pdf')?>" class="btn btn-danger btn-primary">PDF</a>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>