<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign In</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/js/bootstrap.min.js');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">

  </head>
  <body>
 <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/js/bootstrap.min.js" rel="stylesheet">
<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/style.js');?>"></script>

  <div class="wrapper fadeInDown">
  <div id="formContent" >
  <div class="fadeIn first">
      <img src="<?php echo base_url(); ?>assets/gambar/logo1.png"  id="icon" alt="User Icon" >
      <h1>IKLIMA</h1>
    </div>
       <div class="col-md-auto col-md-offset-4">
         <form class="form-signin" action="<?php echo site_url('login/auth');?>" method="post">
           <h2 class="form-signin-heading">Silahkan Login</h2>
           <?php echo $this->session->flashdata('msg');?>
           <label for="username" class="sr-only">Username</label>
           <input type="email" name="email" class="form-control" placeholder="Email" required autofocus style="margin: 3% auto;">
           <label for="password" class="sr-only">Password</label>
           <input type="password" name="password" class="form-control" placeholder="Password" required style="margin: 3% auto;">
           <div class="checkbox">
             <label>
               <input type="checkbox" value="remember-me" required autofocus> Ingat Saya
             </label>
           </div>
           <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
         </form>
       </div>
       </div> <!-- /container -->
  </div>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>