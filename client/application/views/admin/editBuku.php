
<!doctype>
<html lang='ind'>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="content-type" content="text/html" />
   <meta name="author" content="Reficul" />

   <link rel="stylesheet" href="<?php echo base_url()."assets/css/styles-menu-admin.css"; ?>">
   <link rel="stylesheet" href="<?php echo base_url()."assets/css/bootstrap.min.css"; ?>">
   <link rel="stylesheet" href="<?php echo base_url()."assets/css/font-awesome.min.css"; ?>">
   <link rel="stylesheet" href="<?php echo base_url()."assets/bootstrap/css/bootstrap.min.css"; ?>" media="screen,projection" />
   <link href="<?php echo base_url()."assets/fontawesome/web-fonts-with-css/css/fontawesome-all.css"; ?>" rel="stylesheet" />

   <script src="../assets/js/jquery.min.js"></script>
   <script src="../assets/js/bootstrap.min.js"></script>
   <script src="../assets/js/script.js"></script>
   <script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'; ?>"></script>

   <title>Admin Toko Buku</title>
</head>
<body>
   <div class="col-md-2 colmenu" style="padding:0;">
      <div class="col-md-12" style="padding:10px;"><center><img src="<?php echo base_url()?>/assets/images/profil.jpg" alt="" height="100px" width="100px"></center></div>
      <div class="col-md-12" style="padding:5px;padding-bottom:10px;color:#fff;"><center>Zakki Haris</center></div>
         
         <div id='cssmenu'>
            <div id='cssmenu'>
            <ul>
               <li><a href='<?php echo base_url()."index.php/admin/"?>'><i class="fa fa-home fa-fw"></i>&nbsp; Home</a></li>
               <li><a href='<?php echo base_url()."index.php/admin/"?>user''><i class="fa fa-users fa-fw"></i>&nbsp; Pengguna</a></li>
               <li><a href='<?php echo base_url()."index.php/admin/"?>tambahBuku'><i class="fa fa-book fa-fw"></i>&nbsp; Tambah Buku</a></li>
               <li><a href='<?php echo base_url()."index.php/admin/"?>listBuku'><i class="fa fa-book fa-fw"></i>&nbsp; List Buku</a></li>
               <li><a href='<?php echo base_url()."index.php/admin/"?>transaksi'><i class="fa fa-money fa-fw"></i>&nbsp; Lihat Transaksi</a></li>
               <li class='last'><a href='#'><i class="fa fa-sign-out fa-fw"></i>&nbsp; Logout</a></li>
            </ul>
         </div>
         </div>
 













   </div>
       <div class="col-md-10" style="padding:0px">
      <ol class="breadcrumb" style="margin:0;border-radius:0;">
         <li><a href="#">Home</a></li>
         <li class="active">Edit Buku</li>
      </ol>
   </div>
 <div class="col-md-10" style="min-height:600px">
         <div class="col-md-12" style="padding:10px; padding-left:0;padding-right:0;">
         </div>
            
            <div class="col-md-12">









               <form action="<?php echo base_url()."index.php/buku/tambah"; ?>" method="post" enctype="multipart/form-data">
                    <div class="row" style="padding-bottom: 10px;">
                        <label class="col-md-2">Judul <span class="required">*</span></label>
                        <div class="col-md-4">
                            <input type="text" name="judul"  required="required" class="form-control col-md-8" />
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 10px;">
                        <label class="col-md-2">pengarang</label>
                        <div class="col-md-4">
                            <input type="text" name="pengarang" class="form-control col-md-8" />
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 10px;">
                        <label class="col-md-2">penerbit</label>
                        <div class="col-md-4">
                            <input type="text" name="penerbit" class="form-control col-md-8" />
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 10px;">
                        <label class="col-md-2">harga</label>
                        <div class="col-md-4">
                            <input type="textr" name="harga" required="required" class="form-control col-md-8" />
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 10px;">
                        <label class="col-md-2">deskripsi</label>
                        <div class="col-md-4">
                            <input type="text" name="deskripsi" required="required" class="form-control col-md-8" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                            <a href="<?php echo site_url('admin?listBuku');?>" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </form>



                <pre>
                   <?php print_r("databuku"); ?>
                </pre>



















            
       </div>
   <div class="col-md-12" style="background:#1682ba;padding:8px;color:#fff;"><center>create by <a href="www.sikode.com" style="color:#fff">heeyriku</a> &copy 2015</center></div>
</body>
<html>
