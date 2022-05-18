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

    <title>Beranda Linkids</title>
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
	    <button class="navbar-toggler darkmode-warna3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style="">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	            <a  style="color:#34B4EB;font-weight:bold;" class="nav-link active darkmode-text1" aria-current="page" href="<?=base_url('beranda'); ?>"><i class="bi bi-house-fill"></i> Beranda</a>
	        </li>
	        <?php if($this->session->userdata('access_token')){ ?>
        		<li class="nav-item dropdown">
				    <a style="color:#34B4EB;font-weight:bold;" class="nav-link dropdown-toggle darkmode-text1" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><img src="<?=$profiluser['profile_picture']; ?>" style="border-radius:50%;width:25px;height:25px;"> <?=$profiluser['first_name'].' '.$profiluser['last_name']; ?></a>
				    <ul class="dropdown-menu darkmode-warna1">
				      <li>
			      		<a style="color:#34B4EB;font-weight:bold;" class="dropdown-item darkmode-text1" href="<?=base_url('logout'); ?>">
			      		<i class="bi bi-box-arrow-right"></i> Logout</a>
				      </li>
				    </ul>
				</li>
	        <?php }else{ ?>
		        <li class="nav-item">
		          	<a style="color:#34B4EB;font-weight:bold;" class="nav-link darkmode-text1" href="<?=base_url('login'); ?>"><i class="bi bi-shield-lock-fill"></i> Login</a>
		        </li>
	    	<?php } ?>
	      </ul>
	    </div>
	  </div>
	</nav>

	<style>
		.hoverbtn:hover {
			transform: scale(1.1);
			transition:.3s;
		}
	</style>

	<div class="container">
		<div class="row" style="margin-top:50px;color:#616161;">
			<div class="col-12 mb-3 text-center">
				<div style="position:relative;">
					<div class="text-center">
					<!-- <svg style="width:550px;height:250px" viewBox="0 0 250 250" xmlns="http://www.w3.org/2000/svg">
					  <path fill="#34B4EB" d="M40.1,-69C53.6,-61.7,67.1,-54.1,71.2,-42.6C75.2,-31.1,69.7,-15.5,69.8,0.1C70,15.7,75.8,31.4,73.2,45.5C70.7,59.6,59.8,72.1,46.2,76.9C32.6,81.7,16.3,78.8,1.8,75.7C-12.7,72.6,-25.4,69.4,-39,64.6C-0.7,59.8,-67.2,53.5,-76.3,42.5C-85.4,31.4,-89.2,15.7,-86.6,1.5C-84,-12.7,-75,-25.4,-66.4,-37.3C-57.8,-49.1,-49.4,-60.1,-38.4,-68.9C-27.4,-77.6,-13.7,-84.1,-0.2,-83.8C13.3,-83.5,26.7,-76.4,40.1,-69Z" transform="translate(100 100)" />
					</svg> -->
					<svg style="height:360px;width:360px;" viewBox="11 25 175 175" xmlns="http://www.w3.org/2000/svg">
					  <path style="" class="darkmode-warna-waves" fill="#34B4EB" d="M34.6,-50.3C46.7,-52.9,59.8,-47.5,64.2,-37.8C68.7,-28,64.5,-14,65.1,0.3C65.7,14.7,71,29.4,67,39.8C63,50.3,49.6,56.6,36.9,64.1C24.2,71.5,12.1,80.1,-0.7,81.3C-13.4,82.4,-26.9,76.1,-40,68.9C-53.1,61.7,-65.8,53.5,-75.1,41.9C-84.4,30.2,-90.4,15.1,-81.9,4.9C-73.3,-5.3,-50.3,-10.5,-40.7,-21.6C-31,-32.7,-34.7,-49.6,-30.2,-51.4C-25.6,-53.1,-12.8,-39.7,-0.8,-38.3C11.2,-36.9,22.5,-47.7,34.6,-50.3Z" transform="translate(100 100)" />
					</svg>
					</div>
					<div class="text-white" style="position:absolute;top:110px;left:0;right: 0;transform:rotate(-25deg);">
						<h1 class="fw-bold mb-3"><span style="text-shadow:2px 2px 5px rgba(0,0,0,.5);font-weight:bold;letter-spacing:2px;">Welcome to</span> <span class="darkmode-text2" style="color:#616161;text-shadow:1px 1px 3px rgba(255,255,255,.9);font-family: 'Trade Winds', cursive;">Linkids</span></h1>
						<p style="font-size:18px;text-shadow:2px 2px 5px rgba(0,0,0,.3);font-family: 'Signika Negative', sans-serif;font-weight:bold;letter-spacing:1px;">Buat link anda lebih pendek <br> dan lebih rapi disini</p>
					</div>
					<div class="text-center" style="margin-top:-90px;">
						<a href="#start" type="button" class="btn btn-warning btn-sm page-scroll darkmode-text1 darkmode-warna1" style="box-shadow:1px 1px 5px rgba(0,0,0,.2);color:#616161;font-weight:bold;border:0;">Start Now</a><br>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container" style="margin-top:50px;">
	<div class="row" id="start">
		<div class="col-12">
			<?=$this->session->flashdata('message_form'); ?>
			<form action="<?=base_url('process/createlink'); ?>" method="post">
				<div class="input-group">
				  <input type="text" class="form-control darkmode-warna4 darkmode-text1" placeholder="Masukan link original" aria-label="Recipient's username" name="linkoriginal" aria-describedby="basic-addon2" autocomplete="off" required style="height:50px;border-radius:50px;border:1px solid #ccc;box-shadow:2px 2px 7px rgba(0,0,0,.3);" value="<?= set_value('linkoriginal'); ?>">
				</div>
				<div class="d-flex justify-content-center">
					<i class="bi bi-arrow-down-short darkmode-text1 text-info fw-bold" style="font-size:20px;"></i>
				</div>
				<div class="mb-2 d-flex align-items-center darkmode-warna2 darkmode-text1 justify-content-center" style="min-height:50px;border-radius:50px;padding:0 15px 0 15px;background-color:rgba(52, 180, 235,.3);box-shadow:2px 2px 2px rgba(0,0,0,.3);border:1px solid #fff;">
					<span style="word-break:break-all;line-height:15px;"><?=base_url('linkids/'); ?><span class="tampilketik"></span></span>
				</div>
				<div class="input-group mb-3">
				  <!-- <span class="input-group-text bg-primary text-white shadow" id="basic-addon1" style="height:50px;border-radius:50px 0 0 50px;border:2px solid white;"><?=base_url(); ?></span> -->
				  <input type="text" class="form-control darkmode-warna4 darkmode-text1 ketikinput" placeholder="Masukan short link anda" aria-label="Username" name="linkcustom" aria-describedby="basic-addon1" autocomplete="off" required style="height:50px;border-radius:50px;border:1px solid #ccc;box-shadow:2px 2px 7px rgba(0,0,0,.3);" value="<?= set_value('linkcustom'); ?>">
				</div>
				<div class="d-flex justify-content-center">
				<button type="submit" name="create" class="btn darkmode-warna2 fw-bold hoverbtn btncreate" style="height:100px;width:100px;border-radius:50%;border:5px solid white;color:white;transition:.3s;background-color:#34B4EB;box-shadow:2px 2px 3px rgba(0,0,0,.3);">Create Link</button>
				</div>
			</form>
		</div>
	</div>
	</div>




<?php if($this->session->userdata('access_token')){ ?>

	<div class="container mt-5">
		<?=$this->session->flashdata('message'); ?>
		<div class="row text-center">
			<div class="col-12">
				<?php if(!empty($cekresult)){ ?>
				<h3 class="darkmode-text1" style="color:#616161;">Daftar short Link</h3>
				<?php } ?>
			</div>
		</div>
	</div>

	<div class="container">
<?php $i=1; foreach($daftarlinks as $daftarlink): ?>
	<div class="accordion accordion-flush" id="accordionFlushExample" style="border:1px solid #eee;border-radius:5px;">
	  <div class="accordion-item" style="border-radius:5px;">
	    <h2 class="accordion-header" id="flush-heading<?=$daftarlink['id_link']; ?>">
	      <button class="accordion-button darkmode-warna5 darkmode-text1 collapsed" style="padding:5px;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?=$daftarlink['id_link']; ?>" aria-expanded="false" aria-controls="flush-collapse<?=$daftarlink['id_link']; ?>" style="word-wrap:break-word;overflow:hidden;">
	        <?=$i++ .". ". $daftarlink['short_link']; ?> 
	        <?php if($this->session->flashdata('id_link') == $daftarlink['id_link']){ echo $this->session->flashdata('notifikasi'); }?>
	      </button>
	    </h2>
	    <div id="flush-collapse<?=$daftarlink['id_link']; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?=$daftarlink['id_link']; ?>" data-bs-parent="#accordionFlushExample">
	      <div class="accordion-body darkmode-warna5">
	      	<div class="mt-3 darkmode-warna6" style="position:relative;border-radius:0 10px 10px 10px;background-color:#eee;">
	      		<div class="darkmode-warna6" style="position:absolute;top:-18px;left:0px;border-radius:10px 10px 10px 0;background-color:#eee;padding:0px 4px 0 4px;color:#616161;">Link original</div>
	      		<div class=" text-primary" style="padding:6px;word-wrap:break-word;overflow:hidden;"> <a style="line-height:17px;display:block;padding:5px 0 5px 0;" href="<?=$daftarlink['original_link']; ?>" target="_blank"><?=$daftarlink['original_link']; ?></a></div>
	      	</div>
	      	<div class="d-flex justify-content-center">
					<i class="bi bi-arrow-down-short text-info fw-bold darkmode-text1" style="font-size:20px;"></i>
			</div>
	      	<div class="darkmode-warna6" style="position:relative;border-radius:0 10px 10px 10px;background-color:#eee;">
	      		<div class="darkmode-warna6" style="position:absolute;top:-18px;left:0px;border-radius:10px 10px 10px 0;background-color:#eee;padding:0px 4px 0 4px;color:#616161;">Short link anda</div>
	      		<div class="text-primary" style="padding:6px;word-wrap:break-word;overflow:hidden;"> <a style="line-height:17px;display:block;padding:5px 0 5px 0;" href="<?=base_url('linkids/'.$daftarlink['short_link']); ?>" target="_blank"><?=base_url('linkids/'.$daftarlink['short_link']); ?></a></div>
	      	</div>

	      	<div class="mt-3 d-flex justify-content-between">
	      		<a href="" class="btn btn-sm btn-success btnedit darkmode-warna6" data-bs-toggle="modal" data-bs-target="#staticedit" data-idlink="<?= $daftarlink['id_link']; ?>"><i class="bi bi-pencil-square text-white"></i> Edit</a>
	      		<a onclick="return confirm('Hapus short link -> <?=$daftarlink['short_link']; ?>?')" href="<?= base_url('process/deletelink/'.$daftarlink['id_link'].'/'.$daftarlink['short_link']); ?>" class="btn btn-sm btn-danger btndelete darkmode-warna6"><i class="bi bi-trash3 text-white"></i> Delete</a>
	      	</div>

	      </div>
	    </div>
	  </div>

	</div>
<?php endforeach; ?>
	</div>

<?php } ?>



	<footer class="darkmode-warna3" style="width:100%;background-color:#efefef;margin-top:100px;color:#616161;font-family: 'Signika Negative', sans-serif;">
		<div class="card-group darkmode-warna5 darkmode-text1" style="border:0;background-color:#efefef;padding:20px;">
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
		      	<a class="text-success" href="https://api.whatsapp.com/send?phone=6282179471533"><i class="bi bi-whatsapp text-success" style="font-weight:bold;font-size:20px;"></i> Whatsapp</a><br>
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


	<!-- fixed button darkmode -->

	<div class="btndarkmode1 darkmode-warna1" style="position:fixed;right:20px;bottom:30px;border-radius:50%;background-color:rgba(200,200,200,.4);height:40px;width:40px;z-index:10;box-shadow:2px 2px 5px rgba(0,0,0,.4);border:.5px solid #ddd;">
		<div class="d-flex justify-content-center align-items-center darkmode-icon">
			<i class="bi bi-moon-fill text-dark darkmode-text1" style="font-size:25px;color:#616161;"></i>
		</div>
	</div>
	<div class="btndarkmode2 darkmode-warna1" style="position:fixed;right:20px;bottom:30px;border-radius:50%;background-color:rgba(100,100,100,.4);height:40px;width:40px;z-index:10;box-shadow:2px 2px 5px rgba(0,0,0,.4);border:.5px solid #ddd;display:none;">
		<div class="d-flex justify-content-center align-items-center lightmode-icon">
			<i class="bi bi-brightness-high-fill text-black darkmode-text1" style="font-size:25px;color:#616161;"></i>
		</div>
	</div>





	<!-- modal-modal -->

	<!-- Modal -->
	<div class="modal fade" id="staticedit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered">
	    <div class="modal-content" style="border:1px solid white;">
	      <div class="modal-header darkmode-warna1">
	        <h5 class="modal-title" id="staticBackdropLabel"><span class="loadingedittitle darkmode-text1" style="color:#bbb;">loading...</span></h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body darkmode-warna1">
	      	<div class="loadingedit darkmode-text1 text-center" style="color:#bbb;"><h5>loading...</h5></div>
	      	<div class="formedit" style="display:none;">
	        <form action="<?= base_url('process/editlink'); ?>" method="post">
	        	<input type="hidden" class="elinkid" name="elinkid">
				<div class="mb-0">
				    <label for="exampleInputEmail2" class="form-label" style="margin-bottom:0;color:#bbb;">Link original</label>
				    <input type="text" class="form-control shadow-sm darkmode-warna5 darkmode-text1 elinkoriginal" name="elinkoriginal" id="exampleInputEmail2" aria-describedby="emailHelp" autocomplete="off" required>
				</div>
				<div class="d-flex justify-content-center">
					<i class="bi bi-arrow-down-short darkmode-text1 text-info fw-bold" style="font-size:20px;"></i>
				</div>
				<div class="mb-0 d-flex align-items-center darkmode-warna6 darkmode-text1 justify-content-center" style="min-height:50px;border-radius:50px;padding:0 15px 0 15px;background-color:rgba(52, 180, 235,.3);box-shadow:1px 1px 2px rgba(0,0,0,.3);">
					<span style="word-break:break-all;line-height:15px;"><?=base_url('linkids/'); ?><span class="etampilketik"></span></span>
				</div>
	        	<div class="mb-2">
				    <label for="exampleInputEmail1" class="form-label" style="margin-bottom:0;color:#bbb;">Short link anda</label>
				    <input type="text" class="form-control shadow-sm elinkcustom darkmode-warna5 darkmode-text1 eketikinput" name="elinkcustom" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" required>
				</div>
				<div class="d-flex justify-content-end">
					<button type="submit" name="esimpan" class="btn btn-primary darkmode-warna5 ms-auto btnupdate"><i class="bi bi-save2"></i> Simpan</button>
				</div>
	        </form>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>


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

    		$('.page-scroll').on('click',function(e){
		        var tujuan=$(this).attr('href');
		        var elementtujuan=$(tujuan);
		        $('html,body').animate({
		          'scrollTop':(Math.floor(elementtujuan.offset().top - 100))
		        },10);
		        e.preventDefault();
		    });

    		$('.ketikinput').on('keyup',function(){
    			var valinput = $('.ketikinput').val();
    			var bersihkan=valinput.replace(/[^a-zA-Z0-9\_\.\-]/g, "-");
    			$('.tampilketik').text(bersihkan);
    			$('.ketikinput').val(bersihkan);
    		});

    		$('.eketikinput').on('keyup',function(){
    			var valinput = $('.eketikinput').val();
    			var bersihkan=valinput.replace(/[^a-zA-Z0-9\_\.\-]/g, "-");
    			$('.etampilketik').text(bersihkan);
    			$('.eketikinput').val(bersihkan);
    		});

    		$(document).on('submit',function() {
	            $('.btncreate').attr('disabled','on');
	            $('.btncreate').text('loading..');
	          	$('.btnupdate').attr('disabled','on');
	          	$('.btnupdate').text('loading..');
	        })

    		$('.btnedit').on('click',function(){
    			var idlink = $(this).data('idlink');
    			$.ajax({
		          url: '<?=base_url('process/ajaxgetdatalinkbyid'); ?>',
		          method: "POST",
		          data: {idlink:idlink},
		          dataType: "json",
		          success:function(data){
		            // console.log(data);
		            $('.etampilketik').text(data.short_link);
		            $('.loadingedittitle').text('Edit "'+data.short_link+'"');
		            $('.loadingedittitle').css('color','#616161');
		            $('.loadingedit').hide();
		            $('.formedit').fadeIn();
		            $('.elinkid').val(data.id_link)
		            $('.elinkcustom').val(data.short_link);
		            $('.elinkoriginal').val(data.original_link);
		          }
		        });
    		});



    		$('.btndarkmode1').on('click',function(){
    			localStorage.setItem('darkmodeset', 'on');
    			localStorage.setItem('darkmodewarna1', 'darkmodewarna1');
    			localStorage.setItem('darkmodewarna2', 'darkmodewarna2');
    			localStorage.setItem('darkmodewarna3', 'darkmodewarna3');
    			localStorage.setItem('darkmodewarna4', 'darkmodewarna4');
    			localStorage.setItem('darkmodewarna5', 'darkmodewarna5');
    			localStorage.setItem('darkmodewarna6', 'darkmodewarna6');
    			localStorage.setItem('fill', '#282828');
    			localStorage.setItem('darkmodetext1', 'darkmodetext1');
    			localStorage.setItem('darkmodetext2', 'darkmodetext2');
    			$('.btndarkmode2').fadeIn();
    			$('.btndarkmode1').hide();
    			$('.darkmode-warna1').addClass('darkmodewarna1');
    			$('.darkmode-warna2').addClass('darkmodewarna2');
    			$('.darkmode-warna3').addClass('darkmodewarna3');
    			$('.darkmode-warna4').addClass('darkmodewarna4');
    			$('.darkmode-warna5').addClass('darkmodewarna5');
    			$('.darkmode-warna6').addClass('darkmodewarna6');
    			$('.darkmode-warna-waves').attr('fill','#282828');
    			$('.darkmode-text1').addClass('darkmodetext1');
    			$('.darkmode-text2').addClass('darkmodetext2');

    			$('.darkmode-warna1').css('transition','.5s');
    			$('.darkmode-warna2').css('transition','.5s');
    			$('.darkmode-warna3').css('transition','.5s');
    			$('.darkmode-warna4').css('transition','.5s');
    			$('.darkmode-warna5').css('transition','.5s');
    			$('.darkmode-warna6').css('transition','.5s');
    			$('.darkmode-warna-waves').css('transition','.5s');
    			$('.darkmode-text1').css('transition','.5s');
    			$('.darkmode-text1').css('transition','.5s');
    		});
    		$('.btndarkmode2').on('click',function(){
    			localStorage.clear();
    			$('.btndarkmode1').fadeIn();
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

    			$('.darkmode-warna1').css('transition','.5s');
    			$('.darkmode-warna2').css('transition','.5s');
    			$('.darkmode-warna3').css('transition','.5s');
    			$('.darkmode-warna4').css('transition','.5s');
    			$('.darkmode-warna5').css('transition','.5s');
    			$('.darkmode-warna6').css('transition','.5s');
    			$('.darkmode-warna-waves').css('transition','.5s');
    			$('.darkmode-text1').css('transition','.5s');
    			$('.darkmode-text1').css('transition','.5s');
    		});

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

    	})
    </script>
  </body>
</html>