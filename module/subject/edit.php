  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">Mata Kuliah</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Mata Kuliah</li>
                  </ol>
              </div><!-- /.col -->
          </div><!-- /.row -->
      </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-header">
                          <div class="card-title h3 col-8">Edit Mata Kuliah</div>
                          <div class="col-12">
                              <a href="?m=subject" class="btn btn-large btn-secondary" style="float: right;"><i class="fas fa-undo"></i>Kembali</a>
                          </div>
                      </div>
                      <!-- /.card-header -->
                      <?php 
                      include_once('config.php');
                      $id = $_GET['id'];
                      $sql = $sql = "SELECT * FROM subjects WHERE id = '$id'";
                      $result = mysqli_query($config, $sql);
                      $row = mysqli_fetch_assoc($result);
                      ?>
                      <div class="card-body">
                          <form action="?m=subject&s=update" method="post">
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-book"></i></span>
                                  </div>
                                  <input type="text" name="subject" class="form-control" value="<?php echo $row['subject']; ?>" placeholder="Masukkan Nama Mata Kuliah" required autofocus>
                              </div>
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                  </div>
                                  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                  <input type="text" name="hours" class="form-control" value="<?php echo $row['hours']; ?>" placeholder="Masukkan Jam Mata Kuliah (angka)" required>
                              </div>
                              <div class="input-group mb-3">
                                  <input type="submit" name="update" class="btn btn-md btn-primary m-2" value="Update">
                                  <input type="reset" class="btn btn-md btn-warning m-2">
                              </div>
                          </form>
                      </div>
                      <!-- /.card-body -->
                  </div>
                  <!-- ./col -->
              </div>
          </div>
          <!-- /.row -->
          <!-- Main row -->
      </div> <!-- /.container-fluid -->
  </section>
  <!-- /.content -->