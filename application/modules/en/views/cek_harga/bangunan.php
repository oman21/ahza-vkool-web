<script type="text/javascript" src="https://www.google.com/recaptcha/api.js"></script>
<div  style="background: url('<?=base_url()?>assets/front/material/home2.jpg'); background-size: auto 100%">
	<section class="page-title page-title-2 image-bg overlay parallax">
	    <div class="background-image-holder">
	        <img alt="Background Image" class="background-image" src="<?=base_url()?>assets/front/material/homde2.jpg" />
	    </div>
	    <div class="container">
	        <div class="row">
	            <div class="col-md-6">
	                <h2 class="uppercase mb8">Price Estimation</h2>
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
	                <h4 class="uppercase mt48 mt-xs-0">ESTIMATION OF GLASS FILM COSTS FOR ARCHITECTURAL</h4>
	                <p class="lead mb64 mb-xs-24">
	                    Please enter the data below
	                    <br /> Our system will calculate the cost of installing the best window film for you.
	                </p>
	                <div class="overflow-hidden">
	                	<hr>
	                    <h6 class="uppercase">
	                        1. Your personal details
	                    </h6>
	                    <input type="text" name="nama" class="col-md-12" placeholder="Your Name*" />
	                    <textarea name="alamat" placeholder="Your Address" rows="2"></textarea>
	                    <input type="text" name="telepon" class="col-md-5" placeholder="Your Phone" />
	                    <input type="text" name="email" class="col-md-5" placeholder="Your Email*" />
	                   
	                    
	                </div>                            
	                <div class="overflow-hidden">
	                    <h6 class="uppercase">
	                    	<br/>
	                        2.V-Kool Type?
	                    </h6>
						<div class="select-option">
	                    	<i class="ti-angle-down"></i>
	                    	<select id="harga" name="harga">
	                    		<option selected="" value="" hidden="" disabled=""> - Select V-Kool Type - </option>
	                        	<?php foreach($list as $row){ ?>
	                        		<option value="<?=$row->harga?>" ><?=$row->nama?></option>
	                        	<?php } ?>
	                    	</select>
	                	</div>
	                </div>
	                <div class="overflow-hidden">
	                    <h6 class="uppercase">
	                    	<br/>
	                        3.Size?
	                    </h6>
						 <input type="text" name="panjang" class="col-md-12" placeholder="Size Length" />
						 <input type="text" name="lebar" class="col-md-12" placeholder="Size Height" />
	                </div>
	                <div class="overflow-hidden">
	                    <h6 class="uppercase">
	                    	<br/>
	                        4.Quantity?
	                    </h6>
						 <input type="text" name="jumlah" class="col-md-12" placeholder="Quantity" />
	                </div>
					<div class="row">
						<div class="col-md-12">
							<div class="g-recaptcha" data-sitekey="6LcYhDsUAAAAADDrQGLc7R8PzEdmoRtDAbipCgGk" data-callback="recaptchaCallback" data-expired-callback="recaptchaExpired"></div>
							<input id="hidden-grecaptcha" name="hidden-grecaptcha" type="text" style="opacity: 0; top: 0; left: 0; height: 1px; width: 1px;"/>
						</div>
					</div>
	                <div class="overflow-hidden">
	                    <div class="col-sm-6 col-sm-offset-3">
	                        <button type="submit">Calculate</button>
	                    </div>
	                </div>
	                <div class="overflow-hidden">
	                <div class="input-with-label text-left">
	                    <span>Calculate:</span>
	                    <input type="text" disabled placeholder="Hasil Perhitungan" id="hasil_harga"/>
	                </div>
	                </div>                            
	            </form>
	        </div>
	    </div>
	</section>
</div>
<script type="text/javascript">
    $('#form_harga').validate({
        rules:{
            nama: "required",
            email:{required:!0,email:!0},
            telepon:{number:!0},
            panjang:{number:!0},
            lebar:{number:!0},
            jumlah:{number:!0},
            "hidden-grecaptcha": {
              required: true,
              minlength: "255"
            }
        },

        messages: {
		    nama: "Name required!",
		    email: {
		      required: "Email required!",
		      email: "Email not valid!",
		    },
		    telepon:{
		    	number: "Must Number!",
		    },
		    panjang:{
		    	number: "Must Number!",
		    },
		    lebar:{
		    	number: "Must Number!",
		    },
		    jumlah:{
		    	number: "Must Number!",
		    },
		    "hidden-grecaptcha": {
		    	required: "Captcha required!",
		    }
		},

        submitHandler:function(e){
            $.ajax({
                url         : '<?=base_url()?>en/cek_harga/hitung_bangunan',
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