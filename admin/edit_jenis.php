<?php
    require_once 'header.php';
    require_once '../classes/jenisproduk.php';
    require_once 'sidebar.php';

    $cat_id = $_GET['id'];
    $kategori_produk = new JenisProduk();
    $data = $kategori_produk->getById($cat_id);
    
    
?>

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
              <form method="POST" action="../controller/jenis_controller.php?action=update">
                    <div class="form-group row">
                        <label for="kode" class="col-4 col-form-label">Nama Kategori</label>
                        <div class="col-8">
                            <div class="input-group">
                                <input id="nama" name="nama" type="text" class="form-control" value="<?= $data['nama'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <input name="cat_id" type="hidden" value="<?= $cat_id ?>">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            <a href="list_produk.php" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </form>
              </div>
            </div>
          </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div><!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->
<?php
    include_once 'footer.php';
?>