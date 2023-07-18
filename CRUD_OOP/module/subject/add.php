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
                          <div class="card-title h3 col-8">Tambah Table Mata Kuliah</div>
                          <div class="col-12">
                              <a href="?m=subject" class="btn btn-large btn-secondary" style="float: right;"><i class="fas fa-undo"></i>Kembali</a>
                          </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                          <form action="?m=subject&s=save" method="post">
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-book"></i></span>
                                  </div>
                                  <input type="text" name="subject" class="form-control" placeholder="Masukkan Nama Mata Kuliah" required autofocus>
                              </div>
                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                  </div>
                                  <input type="number" name="hours" class="form-control" placeholder="Masukkan Jam Mata Kuliah (angka)" required>
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