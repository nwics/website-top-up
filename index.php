<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>TOP UP| ML DIAMOND</title>
  </head>
  <body>
  	<!-- bagian navigasi -->
  	<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  		<div class="container-fluid">
  			<a class="navbar-brand fw-bold" href="#">WicSTORE</a>
  			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  				<span class="navbar-toggler-icon"></span>
  			</button>
  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
  				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
  					<li class="nav-item">
  						<a class="nav-link active" aria-current="page" href="#">Home</a>
  					</li>
  					<li class="nav-item">
  						<a class="nav-link" href="#">PRICELIST</a>
        			</li>
        		</ul>
        		<form class="d-flex">
        			<input class="form-control me-2" type="search" placeholder="Cari Harga" aria-label="Search">
        			<button class="btn btn-outline-success" type="submit">Search</button>
        		</form>
        	</div>
        </div>
    </nav>
  	<!-- akhir navigasi -->
    
    <!-- bagian jumbotron -->
    <div class="container-fluid jumbotron">
    	<div class="container">
    		<div class="jumbotron-text text-center">
    			<h1 class="display-4 fw-bold">WicStore</h1>
    			<p class="pt-2">Website Resmi yang dikelola mandiri</p>
    			<p class="mt-2">menyediakan berbagai harga Diamond sesuai harga</p>
    		</div>
    	</div>
    </div>
    <!-- akhir jumbotron -->

    <!-- bagian ISI -->
    <!-- id dan server -->
    <div class="container">
      <div class="row text-white">
        <div class="col-lg-4">
          <div class="card">
            <h5>Mobile Legends</h5>
            <p>Top Up Diamond Mobile Legend</p>
            <ul>
              <li>masukkan id dan server</li>
              <li>pilih nominal diamond</li>
              <li>pilih metode pembayaran</li>
              <li>lakukan pembayaran sesuai dengan nominal</li>
              <li>tunggu diamond masuk</li>
            </ul>
            <h6 class="text-center fw-bold">TOKO BUKA 24 JAM</h6>
            </div>
          </div>
        <div class="col-lg-8">
          <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-head">
                    <h3 class="fw-bold">Masukkan data</h3>
                  </div>
                  <div class="card-body">
                    <div id="Datauser">
                      <div class="row row-cols row-cols-lg">
                       
                        <!-- untuk id -->
                        <div class="col-lg-6 ">
                          <div class="form-group mb-3">
                            <label for="userid">USER ID</label>
                            <input type="number" name="userid" placeholder="Masukkan ID ANDA" id="userid" class="input-control">
                          </div>

                        <!-- untuk server -->
                        <div class="col-lg-6">
                          <div class="form-group mb-3">
                            <label for="serverid">SERVER ID</label>
                            <input type="number" name="serverid" placeholder="Masukkan SERVER ANDA" id="serverid" class="input-control">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <!-- bagian nominal diamond -->
          <div class="row mt-1">
              <div class="col">
                <div class="card">
                  <div class="card-head">
                    <h3 class="fw-bold">Pilih Nominal</h3> 
                  </div>
                  <div class="card-body">
                    <div id="tempatnominal">
                      <div class="row row-cols-2">
                        <!-- daftar harga diamond -->
                        <div class="col-lg-4 mt-3">
                          <div class="list-group">
                            <input type="radio" name="inlineRadioOptions" id="nominal-22" value="22" data-type="diamond">
                            <label for="nominal-22" class="list-group-item"> 14 Diamond Rp 3.000</label>
                          </div>
                        </div>
                        <div class="col-lg-4 mt-3">
                          <div class="list-group">
                            <input type="radio" name="inlineRadioOptions" id="nominal-23" value="23" data-type="diamond">
                            <label for="nominal-23" class="list-group-item"> 87 Diamond Rp 32.000</label>
                          </div>
                        </div>
                        <div class="col-lg-4 mt-3">
                          <div class="list-group">
                            <input type="radio" name="inlineRadioOptions" id="nominal-24" value="24" data-type="diamond">
                            <label for="nominal-24" class="list-group-item"> 70 Diamond Rp 19.000</label>
                          </div>
                        </div>
                        <div class="col-lg-4 mt-3">
                          <div class="list-group">
                            <input type="radio" name="inlineRadioOptions" id="nominal-25" value="25" data-type="diamond">
                            <label for="nominal-25" class="list-group-item"> 140 Diamond Rp 36.000</label>
                          </div>
                        </div>
                        <div class="col-lg-4 mt-3">
                          <div class="list-group">
                            <input type="radio" name="inlineRadioOptions" id="nominal-26" value="26" data-type="diamond">
                            <label for="nominal-26" class="list-group-item"> 172 Diamond Rp 44.000</label>
                          </div>
                        </div>
                        <div class="col-lg-4 mt-3">
                          <div class="list-group">
                            <input type="radio" name="inlineRadioOptions" id="nominal-27" value="27" data-type="diamond">
                            <label for="nominal-27" class="list-group-item"> 257 Diamond Rp 68.000</label>
                          </div>
                        </div>
                        <div class="col-lg-4 mt-3">
                          <div class="list-group">
                            <input type="radio" name="inlineRadioOptions" id="nominal-28" value="28" data-type="diamond">
                            <label for="nominal-28" class="list-group-item"> 344 Diamond Rp 85.000</label>
                          </div>
                        </div>
                        <div class="col-lg-4 mt-3">
                          <div class="list-group">
                            <input type="radio" name="inlineRadioOptions" id="nominal-29" value="29" data-type="diamond">
                            <label for="nominal-29" class="list-group-item"> 429 Diamond Rp 106.000</label>
                          </div>
                        </div>
                        <div class="col-lg-4 mt-3">
                          <div class="list-group">
                            <input type="radio" name="inlineRadioOptions" id="nominal-30" value="30" data-type="diamond">
                            <label for="nominal-30" class="list-group-item"> 514 Diamond Rp 125.000</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <!-- bagian metode pembayaran -->
          <div class="row mt-1">
              <div class="col">
                <div class="card">
                  <div class="card-head"> 
                   <h3 class="fw-bold">Metode Pembayaran</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="">
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="row mt-1 ">
            <div class="col">
              <div class="card">
                <div class="card-head">
                  <h3 class="fw-bold">Lakukan Transaksi</h3>
                  <p>
                    Jika anda ingin mendapatkan bukti transaksi anda dapat menambahkan alamat e-mail pada 
                  kolom di bawah ini!
                  </p>
                  <div class="form-group">
                    <!-- <label>Alamat E-mail</label> -->
                    <input type="text" name="email" placeholder="Alamat E-Mail" class="input-control">
                  </div>
                </div>
                <div class="card-body mt-3">
                  <button class="pesan" type="submit">
                    <h4>Beli Sekarang</h4>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    <!-- akhir isi -->

    <!-- BAGIAN SEBELUM FOOTER -->
    <div class="container text-white">
      <div class="pertanyaan text-center">
        <h2> FAQ </h2>

        
      </div>
      

    </div>
    <!-- akhir bagian sebelum footer -->



    <!-- bagian FOOTER -->
    <footer>
      <div class="container text-center text-white">

        <p> Copyright &C 2022 WicSTORE, all right reserved</p>   
      </div>

    </footer>

    <!-- akhir FOOTER -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
  </body>
</html>