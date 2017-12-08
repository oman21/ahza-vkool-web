<?php foreach ($data as $row) { ?>
  <div class='wrapper-home-detail detil-produk section-otomotif'>
      <img src='<?=base_url()?>content/otomotif/<?=$row->gambar?>'/>
      <div class='<?=$row->v_align?>'>
          <div class="row <?=$row->h_align?>">
            <?php if($row->is_akhir == 1){ ?>
              <div class="col-md-12 jarak-list"></div>
              <div class="col-md-12 text-left">
                <table border="0" class="detil-produk">
                  <?php foreach ($list as $rows) { ?>
                    <tr>
                      <td class="icon"><img src="<?=base_url()?>content/otomotif/list/<?=$rows->gambar?>">
                      <td>
                        <h3 class="<?=$row->text_color_judul?>"><strong><?=$rows->ind_judul?></strong></h3>
                        <p class="<?=$row->text_color_judul?>"><?=$rows ->ind_detil?></p>
                      </td>
                    </tr>
                  <?php } ?>
                </table>
              </div>
              <div class="clear"></div>
            <?php }else{ ?>
              <?php if($row->ind_konten != "" || $row->ind_judul != ""){?>
                <div class="col-md-12">
                  <h2 class="<?=$row->text_color_judul?>"><?=$row->ind_judul?></h2>
                  <div class="row">
                      <p class="lead mb48 mb-xs-32 col-md-6 <?=$row->text_color_konten?> <?=$row->h_align?>">
                          <?=$row->ind_konten?>
                      </p>
                  </div>
                </div>
              <?php } ?>
            <?php } ?>
          </div>
      </div>
  </div>
<?php } ?>