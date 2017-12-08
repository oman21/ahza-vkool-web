<script type="text/javascript" src="https://www.google.com/recaptcha/api.js"></script>
<div  style="background: url('<?=base_url()?>assets/front/material/home2.jpg'); background-size: auto 100%">
	<section class="page-title page-title-2 image-bg overlay">
	    <div class="background-image-holder">
	        <img alt="Background Image" class="background-image" src="" />
	    </div>
	    <div class="container">
	        <div class="row">
	            <div class="col-md-6">
	                <h2 class="uppercase mb8">Cek Harga</h2>
	                <p class="lead mb0"></p>
	            </div>
	            <div class="col-md-6 text-right">
	            </div>
	        </div>
	        <!--end of row-->
	    </div>
	    <!--end of container-->
	</section>
	<section class="form-vkool">
	    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
	        <div class="feature boxed bg-secondary">
	            <form id="form_harga">
	                <h4 class="uppercase mt48 mt-xs-0">Estimasi Biaya Kaca Film untuk Kendaraan</h4>
	                <p class="lead mb64 mb-xs-24">
	                    Silahkan masukkan data berikut dibawah
	                    <br /> sistem kami akan perhitungkan biaya pemasangan kaca film terbaik untuk Anda.
	                </p>
	                <div class="overflow-hidden">
	                	<hr>
	                    <h6 class="uppercase">
	                        1. Data Diri Anda
	                    </h6>
	                    <input type="text" name="nama" class="col-md-12" placeholder="Nama Anda*" />
	                    <textarea name="alamat" placeholder="Alamat Anda" rows="2"></textarea>
	                    <input type="text" name="telepon" class="col-md-5" placeholder="Telephone Anda" />
	                    <input type="text" name="email" class="col-md-5" placeholder="Email Anda*" />
	                   
	                    
	                </div>                            
	                <div class="overflow-hidden">
	                    <hr>
	                    <h6 class="uppercase">
	                        2.Kendaraan Anda?
	                    </h6>
						<div class="select-option">
	                    	<i class="ti-angle-down"></i>
	                    	<select id="mobil_merk" name="mobil_merk">
	                    		<option selected="" value="" hidden="" disabled=""> - Pilih Merk Kendaraan - </option>
	                        	<?php foreach($mobil_merk as $row){ ?>
	                        		<option value="merk_<?=$row->id?>" ><?=$row->nama?></option>
	                        	<?php } ?>
	                    	</select>
	                	</div>
	                	<!--end select-->
						<div class="select-option">
	                    	<i class="ti-angle-down"></i>
	                    	<select id="mobil_tipe" name="mobil_tipe">
	                        	<option selected="" value="" hidden="" disabled=""> - Pilih Tipe Kendaraan - </option>
	                        	<?php foreach($mobil_tipe as $row){ ?>
	                        		<option value="tipe_<?=$row->id?>" data-chained="merk_<?=$row->id_mobil_merk?>"><?=$row->nama?></option>
	                        	<?php } ?>
	                    	</select>
	                	</div>
	                	<!--end select-->
	                </div>
	                <div class="overflow-hidden">
	                    <hr>
	                    <h6 class="uppercase">
	                        2. Tipe Kaca?
	                    </h6>
						<div class="select-option">
	                    	<i class="ti-angle-down"></i>
	                    	<select id="bagian_depan" name="bagian_depan">
	                        	<option selected value="" selected="" disabled="" hidden=""> - Depan - </option>
	                        	<?php foreach($list_depan as $row){ ?>
	                        		<option value="<?=$row->harga?>" data-chained="tipe_<?=$row->id_mobil_tipe?>"><?=$row->ind_nama?></option>
	                        	<?php } ?>
	                    	</select>
	                	</div>
	                	<!--end select-->
						<div class="select-option">
	                    	<i class="ti-angle-down"></i>
	                    	<select id="bagian_samping" name="bagian_samping">
	                        	<option selected value="" selected="" disabled="" hidden=""> - Samping - </option>
	                        	<?php foreach($list_samping as $row){ ?>
	                        		<option value="<?=$row->harga?>" data-chained="tipe_<?=$row->id_mobil_tipe?>"><?=$row->ind_nama?></option>
	                        	<?php } ?>
	                    	</select>
	                	</div>
	                	<!--end select-->  
						<div class="select-option">
	                    	<i class="ti-angle-down"></i>
	                    	<select id="bagian_belakang" name="bagian_belakang">
	                        	<option selected value="" selected="" disabled="" hidden=""> - Belakang - </option>
	                        	<?php foreach($list_belakang as $row){ ?>
	                        		<option value="<?=$row->harga?>" data-chained="tipe_<?=$row->id_mobil_tipe?>"><?=$row->ind_nama?></option>
	                        	<?php } ?>
	                    	</select>
	                	</div>
	                	<!--end select-->                             	                          	
	                    <hr>
					</div>	
					<div class="row">
						<div class="col-md-12">
							<div class="g-recaptcha" data-sitekey="6LcYhDsUAAAAADDrQGLc7R8PzEdmoRtDAbipCgGk" data-callback="recaptchaCallback" data-expired-callback="recaptchaExpired"></div>
							<input id="hidden-grecaptcha" name="hidden-grecaptcha" type="text" style="opacity: 0; top: 0; left: 0; height: 1px; width: 1px;"/>
						</div>
					</div>
	                <div class="overflow-hidden">
	                    <div class="col-sm-6 col-sm-offset-3">
	                        <button type="submit">Hitung</button>
	                    </div>
	                </div>
	                <div class="overflow-hidden">
	                <div class="input-with-label text-left">
	                    <span>Harga:</span>
	                    <input type="text" disabled placeholder="Hasil Perhitungan" id="hasil_harga"/>
	                </div>
	                </div>                            
	            </form>
	        </div>
	    </div>
	</section>
</div>
<script type="text/javascript">
	$(function() {
    	$("#mobil_tipe").chained("#mobil_merk");
    	$("#bagian_depan").chained("#mobil_tipe");
    	$("#bagian_samping").chained("#mobil_tipe");
    	$("#bagian_belakang").chained("#mobil_tipe");
    });

    $('#form_harga').validate({
        rules:{
            nama: "required",
            email:{required:!0,email:!0},
            telepon:{number:!0},
            mobil_merk: "required",
            mobil_tipe: "required",
            "hidden-grecaptcha": {
              required: true,
              minlength: "255"
            }
        },

        messages: {
		    nama: "Nama harus diisi!",
		    email: {
		      required: "Email harus diisi!",
		      email: "Email tidak valid!",
		    },
		    telepon:{
		    	number: "Harus angka!",
		    },
		    "hidden-grecaptcha": {
		    	required: "Captcha harus diisi!",
		    }
		},

        submitHandler:function(e){
            $.ajax({
                url         : '<?=base_url()?>id/cek_harga/hitung',
                data        : $('#form_harga').serialize(),
                type        : 'POST',
                dataType    : 'JSON',

                success     : function(resp){
                    if(resp.status == '1'){
                        $('#hasil_harga').val('Rp. '+addCommas(resp.harga)+',-');
                    }
                }

            });
        }
    });

    function addCommas(nStr) {
	    nStr += '';
	    var x = nStr.split('.');
	    var x1 = x[0];
	    var x2 = x.length > 1 ? '.' + x[1] : '';
	    var rgx = /(\d+)(\d{3})/;
	    while (rgx.test(x1)) {
	        x1 = x1.replace(rgx, '$1' + ',' + '$2');
	    }
	    return x1 + x2;
	}

	function debounce(func, wait, immediate) {
		var timeout;
		return function() {
			var context = this, args = arguments;
			var later = function() {
				timeout = null;
				if (!immediate) func.apply(context, args);
			};
			var callNow = immediate && !timeout;
			clearTimeout(timeout);
			timeout = setTimeout(later, wait);
			if (callNow) func.apply(context, args);
		};
	};
	function recaptchaCallback() {
		var response = grecaptcha.getResponse(),
			$button = jQuery(".button-register");
		jQuery("#hidden-grecaptcha").val(response);
		console.log(jQuery("#registerForm").valid());
		if (jQuery("#registerForm").valid()) {
			$button.attr("disabled", false);
		}
		else {
			$button.attr("disabled", "disabled");
		}
	}
	function recaptchaExpired() {
		var $button = jQuery(".button-register");
		jQuery("#hidden-grecaptcha").val("");
		var $button = jQuery(".button-register");
		if (jQuery("#registerForm").valid()) {
			$button.attr("disabled", false);
		}
		else {
			$button.attr("disabled", "disabled");
		}
	}
</script>