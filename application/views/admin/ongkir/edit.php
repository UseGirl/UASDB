<div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>Forms Edit Kategori</strong></div>
                <div class="card-body">
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                    </ul>
                    <div class="tab-content rounded-bottom">
                    <form name="sentMessage"  method="post" action="<?php echo site_url('ongkir/edit');?>" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $ongkir->idOngkir; ?>">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1000">
                      <div class="mb-3">
                          <label class="form-label" for="tujuan">Tujuan</label>
                          <input class="form-control" name="tujuan" value="<?php echo $ongkir->tujuan; ?>" id="formGroupExampleInput" type="text" placeholder="Tujuan">
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="kurir">Kurir</label>
                          <div class="col-sm-9">
                            <select class="form-select" name="kurir" aria-label="Default select example">
                              <option selected="">Pilih Kurir</option>
                              <option value="GOFOOD">GoFood</option>
                              <option value="SHOPPEEFOOD">ShoppeeFood</option>
                            </select>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="ongkos">Ongkos</label>
                          <input class="form-control" name="ongkos" value="<?php echo $ongkir->ongkos; ?>" id="formGroupExampleInput" type="text" placeholder="Ongkos">
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