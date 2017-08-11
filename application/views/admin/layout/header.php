<?
$id_user    = $this->session->userdata('id_user');
$user_aktif = $this->user_model->detail($id_user);
?>

<!-- Top Bar Start -->
<div class="topbar">

   <!-- LOGO -->
   <div class="topbar-left">
      <div class="text-center">
         <a href="<?php echo base_url('admin/dasbor'); ?>" class="logo"><i class="icon-magnet icon-c-logo"></i><span>Ub<i class="md md-album"></i>ld</span></a>
      </div>
   </div>

   <!-- Button mobile view to collapse sidebar menu -->
   <div class="navbar navbar-default" role="navigation">
      <div class="container">
         <div class="">
            <div class="pull-left">
               <button class="button-menu-mobile open-left waves-effect waves-light">
                  <i class="md md-menu"></i>
               </button>
               <span class="clearfix"></span>
            </div>

            <ul class="nav navbar-nav hidden-xs">
               <li><a href="<?php echo base_url()?>" class="waves-effect waves-light" target="_blank">Home Page</a></li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown
                     <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                     <li><a href="#">Action</a></li>
                     <li><a href="#">Another action</a></li>
                     <li><a href="#">Something else here</a></li>
                     <li><a href="#">Separated link</a></li>
                  </ul>
               </li>
            </ul>

            <form role="search" class="navbar-left app-search pull-left hidden-xs">
               <input type="text" placeholder="Search..." class="form-control">
               <a href=""><i class="fa fa-search"></i></a>
            </form>


            <ul class="nav navbar-nav navbar-right pull-right">
               <li class="hidden-xs">
                  <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
               </li>
               <li class="hidden-xs">
                  <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="icon-settings"></i></a>
               </li>
               <li class="dropdown top-menu-item-xs">
                  <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                     <img src="<?php echo base_url(); ?>template/admin/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle">

                  </a>
                  <ul class="dropdown-menu">
                     <li><a href="<?php echo base_url('admin/dasbor/profile')?>"><i class="ti-user m-r-10 text-custom"></i> <?php echo $user_aktif->nama ?></a></li>
                     <li><a href="javascript:void(0)"><i class="ti-settings m-r-10 text-custom"></i> Settings</a></li>
                     <li class="divider"></li>
                     <li><a href="<?php echo base_url('login/logout')?>"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>
                  </ul>
               </li>
            </ul>
         </div>
      </div>
   </div>
</div>
<!-- Top Bar End -->
