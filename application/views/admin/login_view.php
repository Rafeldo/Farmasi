
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="<?php echo base_url(); ?>template/admin/assets/images/favicon_1.ico">

        <title><?php echo $judul ?></title>

        <link href="<?php echo base_url(); ?>template/admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>template/admin/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>template/admin/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>template/admin/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>template/admin/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>template/admin/assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo base_url(); ?>template/admin/assets/js/modernizr.min.js"></script>

    </head>
    <body>

      <div class="account-pages"></div>
      <div class="clearfix"></div>
      <div class="wrapper-page">
         <div class=" card-box">
            <div class="panel-heading">
               <h3 class="text-center"> Sign In To <strong class="text-custom">ADminiStrator</strong> </h3>
            </div>
<?php
echo validation_errors('<div class="alert alert-danger"> <i class="fa fa-warning"></i> ','</div>');

if($this->session->flashdata('sukses'))
{
   echo '<div class="alert alert-success"> <i class="fa fa-check"></i>';
   echo $this->session->flashdata('sukses');
   echo '</div>';
}

?>
            <div class="panel-body">
               <form class="form-horizontal m-t-20" method="post" action="<?php echo base_url('login') ?>">
                  <div class="form-group ">
                     <div class="col-xs-12">
                        <input class="form-control" type="text" required="" placeholder="Username" name="username" id="password">
                     </div>
                  </div>

                  <div class="form-group">
                     <div class="col-xs-12">
                        <input class="form-control" type="password" required="" placeholder="Password" name="password" id="password">
                     </div>
                  </div>

                  <div class="form-group ">
                     <div class="col-xs-12">
                        <div class="checkbox checkbox-primary">
                           <input id="checkbox-signup" type="checkbox">
                           <label for="checkbox-signup">
                              Remember me
                           </label>
                        </div>

                     </div>
                  </div>

                  <div class="form-group text-center m-t-40">
                     <div class="col-xs-12">
                        <button class="btn btn-info btn-block text-uppercase waves-effect waves-light" type="submit" name="submit">Log In</button>
                     </div>
                  </div>

                  <div class="form-group m-t-30 m-b-0">
                     <div class="col-sm-12">
                        <a href="<?php echo base_url(); ?>" class="text-dark"><i class="glyphicon glyphicon-fast-backward"></i> Back To Home Page</a>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>




    	<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url(); ?>template/admin/assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>template/admin/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>template/admin/assets/js/detect.js"></script>
        <script src="<?php echo base_url(); ?>template/admin/assets/js/fastclick.js"></script>
        <script src="<?php echo base_url(); ?>template/admin/assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>template/admin/assets/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url(); ?>template/admin/assets/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>template/admin/assets/js/wow.min.js"></script>
        <script src="<?php echo base_url(); ?>template/admin/assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url(); ?>template/admin/assets/js/jquery.scrollTo.min.js"></script>


        <script src="<?php echo base_url(); ?>template/admin/assets/js/jquery.core.js"></script>
        <script src="<?php echo base_url(); ?>template/admin/assets/js/jquery.app.js"></script>

	</body>
</html>
