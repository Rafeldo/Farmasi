<div class="content-page">
   <!-- Start content -->
   <div class="content">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <div class="btn-group pull-right m-t-15">
                  <?php include('tambah.php');?>
               </div>
               <h4 class="page-title"><?php echo $judul?></h4>
               <ol class="breadcrumb">
                  <li>
                     <a href="<?php echo base_url('admin/dasbor')?>">Home</a>
                  </li>
                  <li class="active">
                     Daftar Jenis Buku
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
                     Ini Adalah List Dari Daftar Bhasa Buku Perpustakaan: <code>$().Daftar Bhasa Buku();</code>.
                  </p>

                  <table width="100%" id="datatable" class="table table-striped table-bordered">
                     <thead>
                        <tr>
                           <th>No</th>
                           <th>Kode</th>
                           <th>Nama Bahasa</th>
                           <th>Urutan</th>
                           <th>Keterangan</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                     <?php $i=1; foreach($bahasa as $bahasa) { ?>
                        <tr>
                           <td width="5%"><?php echo $i ?></td>
                           <td width="15%"><?php echo $bahasa->kode_bahasa ?></td>
                           <td width="15%"><?php echo $bahasa->nama_bahasa ?></td>
                           <td width="20%"><?php echo $bahasa->urutan ?></td>
                           <td width="25%"><?php echo $bahasa->keterangan ?></td>
                           <td align="center" width="20%">
                              <a href="<?php echo base_url('admin/bahasa/edit/'.$bahasa->id_bahasa)?>" class="btn btn-success waves-effect waves-light"><span class="btn-label"><i class="fa fa-edit"></i>
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
