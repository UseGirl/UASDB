<div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>Forms Edit Kategori</strong></div>
                <div class="card-body">
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                    </ul>
                    <div class="tab-content rounded-bottom">
                    <form name="sentMessage"  method="post" action="<?php echo site_url('kategori/edit');?>" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $kategori->idKat; ?>">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1000">
                        <div class="mb-3">
                          <label class="form-label" for="namaKat">Nama Kategori</label>
                          <input class="form-control" name="namaKat" id="formGroupExampleInput" value="<?php echo $kategori->namaKat; ?>" type="text" placeholder="Nama Kategori">
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