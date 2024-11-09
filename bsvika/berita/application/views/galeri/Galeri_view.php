<?php $this->load->view('header');?>
<?php $this->load->view('sidebar');?>

<div id="content">
  <div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
      <div class="panel">
        <div class="panel-heading"><h3>Data Galeri</h3></div>
        <div class="panel-body">
          <div class="responsive-table">
            <p><a href="galeri/Galeri_input.php" class="btn btn-success"  '> <i class="fa fa-plus"></i> <span>Tambah Data</span></a></p>
            <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Gambar</th>
                  <th>ACTION</th>
                </tr>
              </thead>
              <tbody> 
                <tr> 
                 <?php
                 $no = 1;
                 $i =1;
                 foreach ($list_galeri->result() as $row) {
                   ?>
                   <td align="center"><?php echo $no++;?></td>
                   <td align="center"><?php echo $row->judul; ?></td>
                   <td align="center"><?php echo $row->deskripsi; ?></td>
                   <td align="center"><?php echo $row->gambar; ?></td>
                   <td>
                    <button class='btn btn-sm btn-primary' title='Edit'class="btn btn-info-btn-xs" data-toggle="modal" data-target="#myModal<?php echo $i;?>"><i class="fa fa-edit"></i>Edit</button>
                    <a href="<?php echo site_url('galeri/hapus/'.$row->id_galeri)?>" class="button special" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini?')">
                      <button class='btn btn-sm btn-danger' class="btn btn-info-btn-xs" title='Hapus'><i class="fa fa-trash-o"></i>Delete</button>
                    </a>
                  </td>
                </tr>


                <!-- modal Edit -->

                <!-- modal edit -->
                <div class="modal fade" id="myModal<?php echo $i++;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Data galeri</h4>
                      </div>
                      <div class="modal-body">
                        <!--ini taruh from nya disini-->
                        <form method="post" action="<?php echo site_url('galeri/update') ?>">
                          <div class="form-group">
                            <label class="">Jenis galeri</label>
                            <input type="text" name="nama" id="demo-name"  class="form-control" value="<?php echo $row->nm_galeri?>" placeholder="Name" />
                            <input type="hidden" name="id" id="demo-name"  class="form-control"  value="<?php echo $row->id_galeri?>"/>
                          </div>
                          <div class="modal-footer">
                           <input type="submit" class="btn btn-success" name="myModal" value="simpan">
                           <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                         </div>
                       </div>
                     </form>
                   </div>
                   <!--end content modal-->
                 </div>
               </div>
             </div>
           </div>
           <!-- end modal edit-->
         <?php } ?>
       </tbody>
     </table>
   </div>


   <!-- Bootstrap modal Add -->
   <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Add Data galeri</h3>
        </div>
        <div class="modal-body form">
          <form method="post" class="form-horizontal" action="<?php echo site_url('galeri/input_proses/')?>#">
            <input type="hidden" name="id" value="">
            <div class="form-body">
              <div class="text" id="text"></div>
              <div class="form-group">
                <label class="control-label col-md-3">Nama Jenis galeri</label>
                <div class="col-md-9">
                  <input name="nama_galeri" placeholder="Nama Jenis galeri" class="form-control" type="text">
                  <span class="help-block"></span>
                </div>
              </div>

              <div class="modal-footer">
               <input type="submit" class="btn btn-success" name="myModal" value="simpan">
               <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
             </div>
           </div>
         </form>
       </div>
     </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
 </div><!-- /.modal -->
 <!-- End Bootstrap modal -->
</div>
</div>
</div>

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



<?php  $this->load->view('footer'); ?>