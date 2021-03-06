<?php foreach ($data as $row) { ?>
  <div class='wrapper-home-detail detil-produk section-bangunan'>
      <img src='<?=base_url()?>content/bangunan/<?=$row->gambar?>'/>
      <div class='<?=$row->v_align?>'>
          <div class="row <?=$row->h_align?>">
            <?php if($row->is_akhir == 1){ ?>
              <div class="col-md-12 text-left">
                <table class="bangunan-performa" cellspacing="5px" width="100%">
                  <tr>
                    <td class="title">Spectrally Selective <?=$produk->nama?></td>
                    <td></td>
                  </tr>
                  <?php foreach ($list as $rows) {?>
                  <tr>
                    <td class="bangunan-data"><?=$rows->data?></td>
                    <td class="bangunan-value"><?=$rows->value?></td>
                  </tr>
                  <?php } ?>
                </table>
                <p class="produk-term">* Film tested on standard 3mm clear annealed glass and specifications are subjected to variations under intervening conditions.</p>
              </div>
              <div class="clear"></div>
            <?php }else{ ?>
              <?php if($row->en_konten != "" || $row->en_judul != ""){?>
                <div class="col-md-12">
                  <h2 class="<?=$row->text_color_judul?>"><?=$row->en_judul?></h2>
                  <div class="row">
                      <p class="lead mb48 mb-xs-32 col-md-6 <?=$row->text_color_konten?> <?=$row->h_align?>">
                          <?=$row->en_konten?>
                      </p>
                  </div>
                </div>
              <?php } ?>
            <?php } ?>
          </div>
      </div>
  </div>
<?php } ?>