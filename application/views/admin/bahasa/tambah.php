<button type="button" class="btn btn-default waves-effect waves-light" data-toggle="modal" data-target="#TambahBahasa"><span class="btn-label"><i class="fa fa-plus-square-o"></i></span>Tambah</button>
   <div id="TambahBahasa" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog">
          <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 class="modal-title" id="myModalLabel"> <?php echo $judul?></h4>
               </div>
               <div class="modal-body">
                  <!-- Start content -->
                  <div class="content">
                     <div class="container">

               <?
               echo validation_errors('<div class="alert alert-danger"> <i class="fa fa-warning"></i> ','</div>');

               echo form_open(base_url('admin/bahasa'));
               ?>
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="card-box">
                                 <h4 class="m-t-0 header-title"><b>Form <?php echo $judul?> : </b></h4>
                                 <br>


                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label>Nama</label>
                                          <input type="text" name="nama_bahasa" class="form-control" placeholder="Nama Bahasa" value="<?php echo set_value('nama_bahasa') ?>" required>
                                       </div>

                                       <div class="form-group">
                                          <label>Kode bahasa</label>
                                          <input type="text" name="kode_bahasa" class="form-control" placeholder="Kode bahasa" value="<?php echo set_value('kode_bahasa') ?>" required>
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label>Urutan Tampil</label>
                                          <input type="number" name="urutan" class="form-control" placeholder="Nomor Urut Tampil" value="<?php echo set_value('urutan') ?>" required>
                                       </div>
                                       <div class="form-group">
                                          <label >Keterangan Lain</label>
                                          <textarea name="keterangan" class="form-control" placeholder="Keterangan" ><?php echo set_value('keterangan')?></textarea>
                                       </div>
                                    </div>
                                 </div><hr>

                                 <div class="button-list form-group text-center">
                                     <button type="submit" name="submit" class="btn btn-success waves-effect waves-light">
                                        <span class="btn-label"><i class="fa fa-check"></i></span> Simpan Data
                                     </button>

                                     <button type="reset" name="reset" class="btn btn-danger waves-effect waves-light">
                                        <span class="btn-label"><i class="fa fa-times"></i>
                                        </span>Reset</button>
                                 </div>
                              </div>
                           </div>
                        </div>
               <?
               echo form_close();
               ?>
                     </div> <!-- container -->

                  </div> <!-- content -->


               </div>
               <div class="modal-footer">
               </div>
          </div><!-- /.modal-content -->
       </div><!-- /.modal-dialog -->
   </div><!-- /.modal -->
