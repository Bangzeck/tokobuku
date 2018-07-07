
<body>
<div class="container">
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div>
            <div><br />
                <form action="<?php echo base_url()."index.php/buku/tambah"; ?>" method="post" enctype="multipart/form-data">
                    <div class="row" style="padding-bottom: 10px;">
                        <label class="col-md-2">Judul <span class="required">*</span></label>
                        <div class="col-md-4">
                            <input type="text" name="judul" required="required" class="form-control col-md-8" />
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
                            <a href="<?php echo site_url('buku');?>" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

</body>
