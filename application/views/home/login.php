<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Nova+Mono&family=Reenie+Beanie&family=Rubik+Glitch&family=Signika+Negative:wght@300&family=Tapestry&family=Trade+Winds&display=swap" rel="stylesheet">

    <title>Linkids | Login</title>
    <style>
    	/*.darkmode-warna1 { transition: .5s; }
    	.darkmode-warna2 { transition: .5s; }
    	.darkmode-warna3 { transition: .5s; }
    	.darkmode-warna4 { transition: .5s; }
    	.darkmode-warna5 { transition: .5s; }
    	.darkmode-warna6 { transition: .5s; }
    	.darkmode-warna-waves { transition: .5s; }
    	.darkmode-text1 { transition: .5s; }
    	.darkmode-text2 { transition: .5s; }*/

    	.darkmodewarna1 {
    		background-color:#333333!important;
    	}
    	.darkmodewarna2 {
    		background-color:#282828!important;
    	}
    	.darkmodewarna3 {
    		background-color:white!important;
    	}
    	.darkmodewarna4 {
    		background-color:#525252!important;
    	}
    	.darkmodewarna5 {
    		background-color:#262626!important;
    	}
    	.darkmodewarna6 {
    		background-color:#171717!important;
    	}
    	.darkmodetext1 {
    		color:white!important;
    	}
    	.darkmodetext2 {
    		color:#ddd!important;
    	}
    </style>
  </head>
  <body class="darkmode-warna1">

  	<nav class="navbar fixed-top navbar-expand-lg navbar-light darkmode-warna2 bg-light shadow-sm" style="padding:20px 0 20px 0;">
	  <div class="container">
	    <a class="navbar-brand darkmode-text1" href="<?=base_url('beranda'); ?>" style="color:#34B4EB;">
	      <img src="<?=base_url('assets/img/images.png'); ?>" alt="" width="30" height="30" class="d-inline-block align-text-top" style="border-radius:50%;">
	      <span style="font-family: 'Trade Winds', cursive;font-weight:bold;">Linkids</span>
	    </a>
	    <button class="navbar-toggler darkmode-warna3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	            <a  style="color:#34B4EB;font-weight:bold;" class="nav-link darkmode-text1" aria-current="page" href="<?=base_url('beranda'); ?>"><i class="bi bi-house-fill"></i> Beranda</a>
	        </li>
	        <?php if($this->session->userdata('access_token')){ ?>
	        	<li class="nav-item">
		          <a class="nav-link" href="<?=base_url('logout'); ?>"><i class="bi bi-box-arrow-right" style="color:#34B4EB;"></i> Logout</a>
		        </li>
	        <?php }else{ ?>
		        <li class="nav-item">
		          	<a style="color:#34B4EB;font-weight:bold;" class="nav-link active darkmode-text1" href="<?=base_url('login'); ?>"><i class="bi bi-shield-lock-fill"></i> Login</a>
		        </li>
	    	<?php } ?>
	      </ul>
	    </div>
	  </div>
	</nav>

	<style>
		.glogin:hover {
			transform: scale(1.1);
			transition: .4s;
			background-color:white!important;
		}
		.glight:hover {
			background-color:#34B4EB;
			transform: .4s;
		}
	</style>

	<div class="container" style="min-height:200px;">
	<div class="row text-center" style="margin-top:150px;">
		<div class="col-12">
			<div class="d-flex justify-content-center">
			<div class="darkmode-warna2" style="height:250px;width:250px;background-color:#eee;box-shadow:3px 3px 4px rgba(0,0,0,.2);border-radius:10px;">
			<h5 class="mt-5 darkmode-text1" style="color:#717171;font-weight:bold;">LOGIN</h5>
				<div class="mt-3 glogin" style="display:inline-block;border-radius:7px;overflow:hidden;background-color:#616161;padding:0;box-shadow:3px 3px 7px rgba(0,0,0,.3);transition:.3s;">
					<a class="glight" href="<?=$login_link; ?>" style="border-radius:7px;height:100%;width:100%;display:block;transition:.3s">
						<img src="<?=base_url('assets/img/google.png'); ?>" width="210">
					</a>
				</div>
			</div>
			</div>
		</div>
	</div>
	</div>

	<footer class="darkmode-warna3" style="width:100%;background-color:#efefef;margin-top:100px;color:#616161;">
		<div class="card-group darkmode-warna5 darkmode-text1" style="border:0;background-color:#efefef;padding:20px">
		  <div class="card darkmode-warna5" style="border:0;background-color:#efefef;">
		    <div class="card-body">
		      <h5 class="card-title fw-bold">Service</h5>
		      <div class="card-text">
		      	<div class="d-flex">
		      	<div>- </div>
		      	<div>Melayani pembuatan <span class="text-primary darkmode-text2">undangan digital/web</span> kunjungi <a href="https://meinviteyou.com">meinviteyou.com</a></div>
		      	</div>
		      </div>
		      <div class="card-text">
		      	<div class="d-flex">
		      	<div>- </div>
		      	<div>Melayani pembuatan <span class="text-primary darkmode-text2">aplikasi berbasis web</span> hubungin kami pada kolom kontak</div>
		      	</div>
		      </div>
		      <div class="card-text">
		      	<div class="d-flex">
		      	<div>- </div>
		      	<div>Melayani <span class="text-primary darkmode-text2">Editting video</span> hubungin kami pada kolom kontak</div>
		      	</div>
		      </div>
		    </div>
		  </div>
		  <div class="card darkmode-warna5" style="border:0;background-color:#efefef;">
		    <div class="card-body">
		      <h5 class="card-title fw-bold">Kontak</h5>
		      <p class="card-text">
		      	<a href="https://api.whatsapp.com/send?phone=6282179471533"><i class="bi bi-whatsapp text-success" style="font-weight:bold;font-size:20px;"></i> Whatsapp</a><br>
		      	<a href="https://www.facebook.com/ketut.k.ii/"><i class="bi bi-facebook text-primary" style="font-weight:bold;font-size:20px;"></i> Facebook</a>
		      </p>
		      <div class="card-text">
			      <div class="d-flex">
			      	<div style="padding-right:6px;font-weight:bold;">Alamat:</div> 
			      	<div>Mulyasari kec.Negeri Agung kab.Way Kanan, Lampung Indonesia</div>
			      </div>
		  	  </div>
		    </div>
		  </div>
		</div>
		<!-- <div class="container">
			<hr style="border:1px;color:#bbb;">
		</div> -->
		<div class="d-flex align-items-center justify-content-center darkmode-warna6 darkmode-text1" style="width:100%;height:120px;background-color:#ddd;">
			&copy;linkids - <?=date('Y'); ?>
		</div>
	</footer>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>
    	$(function(){


    		if(localStorage.getItem('darkmodeset')){
    			$('.btndarkmode1').hide();
    			$('.btndarkmode2').show();
    			$('.darkmode-warna1').addClass(localStorage.getItem('darkmodewarna1'));
    			$('.darkmode-warna2').addClass(localStorage.getItem('darkmodewarna2'));
    			$('.darkmode-warna3').addClass(localStorage.getItem('darkmodewarna3'));
    			$('.darkmode-warna4').addClass(localStorage.getItem('darkmodewarna4'));
    			$('.darkmode-warna5').addClass(localStorage.getItem('darkmodewarna5'));
    			$('.darkmode-warna6').addClass(localStorage.getItem('darkmodewarna6'));
    			$('.darkmode-warna-waves').attr('fill', localStorage.getItem('fill'));
    			$('.darkmode-text1').addClass(localStorage.getItem('darkmodetext1'));
    			$('.darkmode-text2').addClass(localStorage.getItem('darkmodetext2'));
    		}else{
    			$('.btndarkmode1').show();
    			$('.btndarkmode2').hide();
    			$('.darkmode-warna1').removeClass('darkmodewarna1');
    			$('.darkmode-warna2').removeClass('darkmodewarna2');
    			$('.darkmode-warna3').removeClass('darkmodewarna3');
    			$('.darkmode-warna4').removeClass('darkmodewarna4');
    			$('.darkmode-warna5').removeClass('darkmodewarna5');
    			$('.darkmode-warna6').removeClass('darkmodewarna6');
    			$('.darkmode-warna-waves').attr('fill','#34B4EB');
    			$('.darkmode-text1').removeClass('darkmodetext1');
    			$('.darkmode-text2').removeClass('darkmodetext2');
    		}


    	});
    </script>
  </body>
</html>