    <div class="col-md-10" style="padding:0px">
      <ol class="breadcrumb" style="margin:0;border-radius:0;">
         <li><a href="?home">Home</a></li>
         <li class="active">Data Buku</li>
      </ol>
   </div>
 <div class="col-md-10" style="min-height:600px">
         <div class="col-md-12" style="padding:10px; padding-left:0;padding-right:0;">

            <?php if($this->session->flashdata('hasil')){ ?>
            <div class="alert alert-info">
                <?php echo $this->session->flashdata('hasil'); ?>
            </div>
            <?php } ?>

            <div style="padding-bottom: 20px;">
                <a href="<?php echo base_url().'index.php/buku/tambah/'; ?>" class="btn btn-info" role="button">
                    <i class="fa fa-plus"></i> Tambah Data
                </a>
            </div>

         </div>
            <table class="table table-bordered">
               <thead>
                  <th class="info">ID</th>
                  <th class="info">Judul</th>
                  <th class="info">Pengarang</th>
                  <th class="info">Penerbit</th>
                  <th class="info">Harga</th>
                  <th class="info">Deskripsi</th>
                  <th class="info" colspan="2">Action</th>
               </thead>
               <tbody>
                  <?php if(isset($databuku) and $databuku):$i=1; foreach($databuku as $row): ?>
                  <tr>
                    <td class="text-center"><?php echo $i; ?></td>
                    <td><?php echo $row->id_buku; ?></td>
                    <td><?php echo $row->judul; ?></td>
                    <td><?php echo $row->pengarang; ?></td>
                    <td><?php echo $row->penerbit; ?></td>
                    <td><?php echo $row->harga; ?></td>
                    <td><?php echo $row->deskripsi; ?></td>
                    <td><a href="">edit</a></td>
                    <td><a href="">delete</a></td>

                    <td class="text-center">
                      <div class="btn-group">
                        <a title="Ubah" class="btn btn-sm btn-default" href="<?php echo base_url().'index.php/buku/ubah/'.$row->id; ?>"><i class="fas fa-pencil-alt"></i></a>
                        <a title="Hapus" class="btn btn-sm btn-default" href="<?php echo base_url().'index.php/buku/hapus/'.$row->id; ?>"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>
                  <?php $i++; endforeach; endif; ?>
                </tbody> 
            </table>
            <div class="col-md-12">
               <nav align="center">
                 <ul class="pagination">
                   <li>
                     <a href="#" aria-label="Previous">
                       <span aria-hidden="true">&laquo;</span>
                     </a>
                   </li>
                   <li><a href="#">1</a></li>
                   <li><a href="#">2</a></li>
                   <li><a href="#">3</a></li>
                   <li><a href="#">4</a></li>
                   <li><a href="#">5</a></li>
                   <li>
                     <a href="#" aria-label="Next">
                       <span aria-hidden="true">&raquo;</span>
                     </a>
                   </li>
                 </ul>
               </nav>

            </div>
   </div>