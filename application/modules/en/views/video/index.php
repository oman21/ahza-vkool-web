<style type="text/css">
	.title {
		width: 100%;
		margin: 0 auto;
	}

	.caption {
		width: 100%;
		margin: 0 auto;
		padding: 20px 0;
	}

	.vid-main-wrapper {
		width: 100%;
		background: #fff;
		margin: 0 auto;
	}
	
	@media (min-width: 801px) {
		/*  VIDEO PLAYER CONTAINER
		############################### */
		.vid-container iframe,
		.vid-container object,
		.vid-container embed {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			min-height: 560px;
		}

		.vid-container {
			position: relative;
			padding-top: 30px;
			width:70%;
			float:left;
		}

		.vid-list-container {
			width: 30%;
			height:560px;
			overflow-y: scroll;
			float:right;
		}

		/*  VIDEOS PLAYLIST 
		############################### */

		ol#vid-list {
	      margin:0;
	      padding:0;
	      background: #222;
		}

	    ol#vid-list li {
			list-style: none;
	    }

	    ol#vid-list li a {
	      text-decoration: none;
	      background-color: #222;
	      height:100px;
	      display:block;
	      padding:10px;
	      width: 100%;
	    }

	    ol#vid-list li a:hover {
	      background-color:#666666
	    }

		.vid-thumb {
			width: 30%;
	      	float:left;
			padding-right: 8px;
		}

		.vid-thumb > img{
			width: 100%;
		}

	    .active-vid { 
	      	background:#3A3A3A;
	    }

		#vid-list .desc {
			width: 70%;
	      	float:left;
			color: #CACACA;
			font-size: 13pt;
			margin-top: 15px;
			line-height: 25px;
			font-weight: 10;
			padding-left: 10px;
		}


	}

	@media (max-width: 800px) {
		/*  VIDEO PLAYER CONTAINER
		############################### */
		.vid-container iframe,
		.vid-container object,
		.vid-container embed {
			width: 100%;
			min-height: 360px;
		}

		.vid-container {
			height: auto; 
			width:100%;
		}

		.vid-list-container {
			width: 100%;
			height:auto;
			overflow: hidden;
		}

		/*  VIDEOS PLAYLIST 
		############################### */

	    .vid-list-container:hover, .vid-list-container:focus {
	       	overflow-x: auto;
	     }

		ol#vid-list {
	      margin:0;
	      padding:0;
	      background: #222;
	      width: 500%;
		}

	    ol#vid-list li {
			list-style: none;
			width: 150px;
			float: left;
	    }

	    ol#vid-list li a {
	      text-decoration: none;
	      background-color: #222;
	      display:block;
	      padding: 10px;
	    }

	    ol#vid-list li a:hover {
	      background-color:#666666
	    }

		.vid-thumb {
	      	width: 100%;
		}

		.vid-thumb img{
			width: 100%;
		}

	    .active-vid { 
	      	background:#3A3A3A;
	    }

		#vid-list .desc {
			color: #CACACA;
			font-size: 13px;
			margin-top: 5px;
			line-height: 15px;
			font-weight: 10;
		}

	}

	.section-video{
		width: 100%;
		background: url('<?=base_url()?>assets/front/material/home2.jpg') no-repeat;
		background-size: 100%;
	}
</style>
<div class="container-vkool section-video">
	<div class="vid-main-wrapper clearfix">

		<!-- THE YOUTUBE PLAYER -->
		<div class="vid-container">
			<iframe id="vid_frame" src="https://www.youtube.com/embed/cOSEOYi9JS4?rel=0&showinfo=0&autohide=1" frameborder="0" width="560" height="315"></iframe>
		</div>

		<!-- THE PLAYLIST -->
		<div class="vid-list-container">
			<ol id="vid-list">
				<li>
					<a href="javascript:void();" onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/cOSEOYi9JS4?autoplay=1&rel=0&showinfo=0&autohide=1'">
						<span class="vid-thumb"><img width=72 src="https://img.youtube.com/vi/cOSEOYi9JS4/default.jpg" /></span>
						<div class="desc">WeatherBeater™ Product Video</div>
					</a>
				</li>
				<li>
					<a href="javascript:void();" onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/9P7mEf4bilg?autoplay=1&rel=0&showinfo=0&autohide=1'">
						<span class="vid-thumb"><img width=72 src="https://img.youtube.com/vi/9P7mEf4bilg/default.jpg" /></span>
						<div class="desc">X-act Contour® Product Video</div>
					</a>
				</li>
				<li>
					<a href="javascript:void();" onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/KHxNpXovl58?autoplay=1&rel=0&showinfo=0&autohide=1'">
						<span class="vid-thumb"><img width=72 src="https://img.youtube.com/vi/KHxNpXovl58/default.jpg" /></span>
						<div class="desc">GearBox® Product Video</div>
					</a>
				</li>
				<li>
					<a href="javascript:void();" onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/D_a2UBGsePQ?autoplay=1&rel=0&showinfo=0&autohide=1'">
						<span class="vid-thumb"><img width=72 src="https://img.youtube.com/vi/D_a2UBGsePQ/default.jpg" /></span>
						<div class="desc">Mud Guards Product Video</div>
					</a>
				</li>
				<li>
					<a href="javascript:void();" onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/vYoh2IgoBXg?autoplay=1&rel=0&showinfo=0&autohide=1'">
						<span class="vid-thumb"><img width=72 src="https://img.youtube.com/vi/vYoh2IgoBXg/default.jpg" /></span>
						<div class="desc">Wheel Well Guards Product Video</div>
					</a>
				</li>
				<li>
					<a href="javascript:void();" onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/RTHI_uGyfTM?autoplay=1&rel=0&showinfo=0&autohide=1'">
						<span class="vid-thumb"><img width=72 src="https://img.youtube.com/vi/RTHI_uGyfTM/default.jpg" /></span>
						<div class="desc">Cargo Liner Product Video</div>
					</a>
				</li>
				<li>
					<a href="javascript:void();" onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/EvTjAjLNphE?autoplay=1&rel=0&showinfo=0&autohide=1'">
						<span class="vid-thumb"><img width=72 src="https://img.youtube.com/vi/EvTjAjLNphE/default.jpg" /></span>
						<div class="desc">Husky Liners Products</div>
					</a>
				</li>
				<li>
					<a href="javascript:void();" onClick="document.getElementById('vid_frame').src='https://youtube.com/embed/-Qpc79oaJQg?autoplay=1&rel=0&showinfo=0&autohide=1'">
						<span class="vid-thumb"><img width=72 src="https://img.youtube.com/vi/-Qpc79oaJQg/default.jpg" /></span>
						<div class="desc">Custom Molded Mud Guards</div>
					</a>
				</li>
			</ol>
		</div>
	</div>
</div>

<script type="text/javascript">
	/*JS FOR SCROLLING THE ROW OF THUMBNAILS*/ 
	$(document).ready(function () {
	  $('.vid-item').each(function(index){
	    $(this).on('click', function(){
	      var current_index = index+1;
	      $('.vid-item .thumb').removeClass('active');
	      $('.vid-item:nth-child('+current_index+') .thumb').addClass('active');
	    });
	  });
	});
</script>