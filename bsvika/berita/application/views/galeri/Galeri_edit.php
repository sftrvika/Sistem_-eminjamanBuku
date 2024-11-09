 <?php $this->load->view('header');?>
      <!-- Sidebar -->
      <?php $this->load->view('sidebar');?>
 <div class="row">
          <div class="col-lg-12">
            <form role="form" method="post" action="proses_galeri.php?url=<?php echo $row['id_galeri']?>" enctype="multipart/form-data">
              <div class="form-group">
                <label>Judul Gambar</label>
                <input value="<?php echo $row['judul']?>" type="text" name="txt_judul" value="" class="form-control" placeholder="Enter text">
              </div>
              <div class="form-group">
                <label>Keterangan</label>
                <textarea name="txt_ket" class="form-control"><?php echo $row['deskripsi']?>
                </textarea>
              </div>
              <div class="form-group">
                <label> File Gambar</label>                    
                <input type="file" name="file_gambar" class="form-control" placeholder="Enter text">
              </div>
              <button type="submit" class="btn btn-primary" name="btn_edit">Simpan</button>
            </form>
          </div>
        </div><!-- /.row -->

          <p class="small text-center text-muted my-5">
            <em>More table examples coming soon...</em>
          </p>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->


     
      

<?php $this->load->view('footer');?>