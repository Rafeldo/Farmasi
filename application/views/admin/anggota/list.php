<div class="content-page">
   <!-- Start content -->
   <div class="content">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <div class="btn-group pull-right m-t-15">
                  <a href="<?php echo base_url('admin/anggota/tambah') ?>" class="btn btn-default dropdown-toggle waves-effect waves-light">Tambah <span class="m-l-5"><i class="fa fa-plus-circle"></i></span></a>
               </div>
               <h4 class="page-title"><?php echo $judul?></h4>
               <ol class="breadcrumb">
                  <li>
                     <a href="<?php echo base_url('admin/dasbor')?>">Home</a>
                  </li>
                  <li class="active">
                     Daftar Anggota
                  </li>
               </ol>
            </div>
         </div>

<?php
   if($this->session->flashdata('sukses'))
   {
      echo '<div class="alert alert-success"> <i class="fa fa-check"></i>';
      echo $this->session->flashdata('sukses');
      echo '</div>';
   }
?>
         <div class="row">
            <div class="col-sm-12">
               <div class="card-box table-responsive">
                  <h4 class="m-t-0 header-title"><b><?php echo $judul?></b></h4>
                  <p class="text-muted font-13 m-b-30">
                     Ini Adalah List Dari Daftar Anggota Perpustakaan: <code>$().Daftar Angota();</code>.
                  </p>

                  <table width="100%" id="datatable" class="table table-striped table-bordered">
                     <thead>
                        <tr>
                           <th>No</th>
                           <th>Nama</th>
                           <th>Email</th>
                           <th>Telephon</th>
                           <th>Username - Status</th>
                           <th>Nama Instansi</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                     <?php $i=1; foreach($anggota as $anggota) { ?>
                        <tr>
                           <td width="2%"><?php echo $i ?></td>
                           <td width="15%"><?php echo $anggota->nama_anggota ?></td>
                           <td width="15%"><?php echo $anggota->email ?></td>
                           <td width="13%"><?php echo $anggota->telepon ?></td>
                           <td width="15%"><?php echo $anggota->username ?> - <?php echo $anggota->status_anggota ?></td>
                           <td width="20%"><?php echo $anggota->instansi ?></td>
                           <td align="center" width="20%">
                              <a href="<?php echo base_url('admin/anggota/edit/'.$anggota->id_anggota)?>" class="btn btn-success waves-effect waves-light"><span class="btn-label"><i class="fa fa-edit"></i>
                             </span>Edit</a>
                             <?php include('delete.php'); ?>
                           </td>
                        </tr>
                     <?php $i++; } ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div> <!-- container -->
   </div> <!-- content -->
