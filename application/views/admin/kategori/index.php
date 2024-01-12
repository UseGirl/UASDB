<div class="card mb-4">
            <div class="card-header"><strong>Table Kategori</strong></div>
            <div class="card-body">
            <a href="<?php echo site_url('kategori/add');?>" class="btn btn-primary" type="button">
            <svg class="icon me-2">
                 <use xlink:href="<?php echo base_url('assets/admin2/dist/vendors/@coreui/icons/svg/free.svg#cil-plus')?>"></use>
            </svg>Tambah
            </a>
        <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                </ul>
                <div class="tab-content rounded-bottom" >
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1019">
                    <table class="table">
                      <thead style="background-color :  #1283b8; color:white">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nama Kategori</th>
                          <th style="width:200px">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $no=1; foreach($kategori as $val){?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $val->namaKat; ?></td>
                      <td>
                      <div class="btn-group">
                        <a href="<?php echo site_url('kategori/get_by_id/'.$val->idKat);?>" class="btn btn-warning" type="button"><i class="fa fa-edit"></i> Edit</a>
                      </div> 
                      <div class="btn-group">
                        <a href="<?php echo site_url('kategori/delete/'.$val->idKat);?>" onclick="return confirm('Yakin Akan Hapus Data Ini?')" class="btn btn-danger" type="button"><i class="fa fa-trash"></i> Hapus</a>
                      </div>
                      </td>
                    </tr>
					          <?php $no++; } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>