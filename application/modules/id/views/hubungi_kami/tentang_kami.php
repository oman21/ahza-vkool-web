<?php foreach ($section as $row) { ?>
<div class='wrapper-home-detail'>
    <img src='<?=base_url()?>content/tentang/<?=$row->gambar?>'/>
    <div class='<?=$row->v_align?>'>
        <div class="row <?=$row->h_align?>">
            <div class="col-md-12">
                <h2 class="<?=$row->text_color_judul?>"><?=$row->ind_judul?></h2>
                <div class="row">
                    <p class="lead mb48 mb-xs-32 col-md-6 <?=$row->text_color_konten?> <?=$row->h_align?>">
                        <?=$row->ind_konten?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>