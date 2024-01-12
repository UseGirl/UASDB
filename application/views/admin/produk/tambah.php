<div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>Forms Tambah Kategori</strong></div>
                <div class="card-body">
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                    </ul>
                    <div class="tab-content rounded-bottom">
                    <form method="post" action="<?php echo site_url('produk/save');?>" enctype="multipart/form-data">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1000">
                        <div class="mb-3">
                          <label class="form-label" for="namaProduk">Nama Produk</label>
                          <input class="form-control" name="namaProduk" id="formGroupExampleInput" type="text" placeholder="Nama Produk">
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="gambar">Gambar</label>
                          <input class="form-control" name="gambar" id="formGroupExampleInput" type="file">
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="harga">Harga</label>
                          <input class="form-control" name="harga" id="formGroupExampleInput" placeholder="Harga">
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="stok">Stok</label>
                          <input class="form-control" name="stok" id="formGroupExampleInput" type="text" placeholder="Stok">
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="deskripsi">Deskripsi</label>
                          <textarea class="form-control" name="deskripsi" id="formGroupExampleInput" type="text" placeholder="Deskripsi"></textarea>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="idKat">Kategori Makanan</label>
                          <div class="col-sm-9">
                            <select class="form-select" name="idKat" aria-label="Default select example">
                              <option selected="">Pilih Kategori</option>
                              <?php foreach($kategori as $val){?>
                                <option value="<?php echo $val->idKat; ?>"><?php echo $val->namaKat;?></option>
                              <?php } ?>
                            </select>
                          </div>
                        </div>
                        <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Tambah</button>
                        </div>
                      </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>