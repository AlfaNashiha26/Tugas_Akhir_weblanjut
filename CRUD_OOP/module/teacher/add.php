  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">Dosen</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Dosen</li>
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
                          <div class="card-title h3 col-8">Tambah Table Dosen</div>
                          <div class="col-12">
                              <a href="?m=teacher" class="btn btn-large btn-secondary" style="float: right;"><i class="fas fa-undo"></i>Kembali</a>
                          </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                          <form action="?m=teacher&s=save" method="post">
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                  </div>
                                  <input type="number" name="nip" class="form-control" placeholder="Masukkan Nomer Induk Dosen (max 16 angka)" required autofocus>
                              </div>
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                                  </div>
                                  <input type="text" name="name" class="form-control" placeholder="Masukkan Nama Dosen" required>
                              </div>
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                  </div>
                                  <input type="text" name="pob" class="form-control" placeholder="Masukkan Tempat Lahir Dosen" required>
                              </div>
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                  </div>
                                  <input type="date" name="dob" class="form-control" placeholder="Masukkan Tanggal Lahir Dosen" required>
                              </div>
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                  </div>
                                  <input type="number" name="phone" class="form-control" placeholder="Masukkan Nomor HP Dosen (angka)" required>
                              </div>
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-book"></i></span>
                                  </div>
                                  <select name="subject_id" class="form-control" required>
                                    <option value="">Mata Kuliah</option>
                                    <?php 
                                    include_once('config.php');
                                    $sql = "SELECT * FROM subjects ORDER BY subject ASC";
                                    $query = mysqli_query($config, $sql);
                                    while ($row = mysqli_fetch_array($query)) {
                                        echo "<option value='$row[id]'>$row[subject]</option>";
                                    }
                                    ?>
                                  </select>
                              </div>
                              <div class="input-group mb-3">
                                  <input type="submit" name="save" class="btn btn-md btn-primary m-2" value="Simpan">
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