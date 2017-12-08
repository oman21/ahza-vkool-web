<section class="page-title page-title-2 image-bg overlay">
    <div class="background-image-holder">
        <img alt="Background Image" class="background-image" src="<?=base_url()?>assets/front/material/home2.jpg" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="uppercase mb8">Dealer</h2>
                <p class="lead mb0"></p>
            </div>
            <div class="col-md-6 text-right">
            </div>
        </div>
    </div>
</section>
<section class="bg-secondary">
    <div class="container">
        <div class="row mb64 mb-xs-24">
            <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
                <h3>Silahkan Pilih Dealer V-Kool Terdekat</h3>
            </div>                        
        </div>
        <div class="row">
        	<div class="col-md-6">
				<div class="select-option">
		        	<i class="ti-angle-down"></i>
		        	<select name="provinsi" id="provinsi">
		            	<option selected value="" selected="" disabled="" hidden=""> - Provinsi - </option>
		            	<?php foreach($provinsi as $row){ ?>
		            		<option value="prov_<?=$row->provinsi_id?>"><?=$row->provinsi_nama?></option>
		            	<?php } ?>
		        	</select>
		    	</div>
	    	</div>
	    	<div class="col-md-6">
				<div class="select-option">
		        	<i class="ti-angle-down"></i>
		        	<select name="kota" id="kota" onchange="filterDealer()">
		            	<option selected value="" selected="" disabled="" hidden=""> - Kota - </option>
		            	<?php foreach($kota as $row){ ?>
		            		<option value="<?=$row->kota_id?>" data-chained="prov_<?=$row->provinsi_id?>"><?=$row->kokab_nama?></option>
		            	<?php } ?>
		        	</select>
		    	</div>
	    	</div>
	    </div>
        <div class="row">
        	<div id="list_dealer"></div>
        </div>
    </div>
</section>
<script type="text/javascript">
	$(function() {
    	$("#kota").chained("#provinsi");
    });

    function filterDealer(){
    	var kota = $('#kota').val();
    	if(kota != null){
    		loadDealer(kota);
    	}
    }

	loadDealer('all');

    function loadDealer(kota){
    	$("#list_dealer").html('<h3><i class="fa fa-spinner fa-spin" style="font-size:24px"></i> Loading...</h3>');
    	$.ajax({
			url: "<?=base_url()?>id/dealer/listDealer/"+kota,
			type: "GET",
			dataType: "JSON",
			success : function(resp) {
			    $("#list_dealer").html(resp.data);
			}
		});
    }
</script>