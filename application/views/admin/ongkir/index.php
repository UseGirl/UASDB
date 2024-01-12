<div class="card mb-4">
            <div class="card-header"><strong>Table Ongkir</strong></div>
            <div class="card-body">
            <a href="<?php echo site_url('ongkir/add');?>" class="btn btn-primary" type="button">
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
                          <th scope="col">Tujuan</th>
                          <th scope="col">Kurir</th>
                          <th scope="col">Ongkos</th>
                          <th style="width:200px">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $no=1; foreach($ongkir as $val){?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $val->tujuan; ?></td>
                      <td><?php echo $val->kurir; ?></td>
                      <td><?php echo $val->ongkos; ?></td>
                      <td>
                      <div class="btn-group">
                        <a href="<?php echo site_url('ongkir/get_by_id/'.$val->idOngkir);?>" class="btn btn-warning" type="button"><i class="fa fa-edit"></i> Edit</a>
                      </div> 
                      <div class="btn-group">
                        <a href="<?php echo site_url('ongkir/delete/'.$val->idOngkir);?>" onclick="return confirm('Yakin Akan Hapus Data Ini?')" class="btn btn-danger" type="button"><i class="fa fa-trash"></i> Hapus</a>
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