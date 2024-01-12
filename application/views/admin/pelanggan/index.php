<div class="card mb-4">
            <div class="card-header"><strong>Table Pelanggan</strong></div>
            <div class="card-body">
        <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                </ul>
                <div class="tab-content rounded-bottom" >
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1019">
                    <table class="table">
                      <thead style="background-color :  #1283b8; color:white">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Username</th>
                          <th scope="col">Nama Lengkap</th>
                          <th scope="col">email</th>
                          <th scope="col">Alamat</th>
                          <th scope="col">tlpn</th>
                          <th style="width:200px">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $no=1; foreach($pelanggan as $val){?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $val->username; ?></td>
                      <td><?php echo $val->namaPelanggan; ?></td>
                      <td><?php echo $val->email; ?></td>
                      <td><?php echo $val->alamat; ?></td>
                      <td><?php echo $val->tlpn; ?></td>
                      <td>
                      <div class="btn-group">
                        <a href="<?php echo site_url('pelanggan/delete/'.$val->idPelanggan);?>" onclick="return confirm('Yakin Akan Hapus Data Ini?')" class="btn btn-danger" type="button"><i class="fa fa-trash"></i> Hapus</a>
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