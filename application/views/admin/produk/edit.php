<div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>Forms Edit Produk</strong></div>
                <div class="card-body">
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                    </ul>
                    <div class="tab-content rounded-bottom">
                    <form method="post" action="<?php echo site_url('produk/edit');?>" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $produk->idProduk; ?>">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1000">
                      <div class="mb-3">
                          <label class="form-label" for="namaProduk">Nama Produk</label>
                          <input class="form-control" name="namaProduk" id="formGroupExampleInput" value="<?php echo $produk->namaProduk; ?>" type="text" placeholder="Nama Produk">
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="gambar">Gambar</label>
                          <input class="form-control" name="gambar" id="formGroupExampleInput" type="file">
                          <img src="<?php echo base_url()."/assets/gambar/".$produk->gambar;?>" width="100"/><br><br>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="harga">Harga</label>
                          <input class="form-control" name="harga" id="formGroupExampleInput" value="<?php echo $produk->harga; ?>" type="text" placeholder="Harga">
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="stok">Stok</label>
                          <input class="form-control" name="stok" id="formGroupExampleInput" value="<?php echo $produk->stok; ?>" type="text" placeholder="Stok">
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="deskripsi">Deskripsi</label>
                          <textarea class="form-control" name="deskripsi" id="formGroupExampleInput" type="text" placeholder="Deskripsi"><?php echo $produk->deskripsi; ?></textarea>
                        </div>
                        <div class="mb-3">
                        <select class="form-control" name="kategori">
                          <?php foreach($kategori as $val){?>
                          <option value="<?php echo $val->idKat; ?>"><?php echo $val->namaKat;?></option>
                          <?php } ?>
                        </select>
                        </div>
                        <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                      </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>