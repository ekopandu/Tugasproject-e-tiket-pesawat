<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Depan</title>
        <link rel="styleshhet" href="<?=base_url('assets/css/bootstrap.min.css')?>">
</head>
</body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href=>pesawatku</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href=>Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=>konfirmasi pembayaran</a>
      </li>
    </ul>
    </div>
</nav>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
  <div class="row">
  <div class="col-md-8">
  <h1 class="display-4">Selamat Datang di pesawatku</h1>
      <p class="lead">Anda dapat melakukan pemesanan tiket pesawat terbang online dengan mudah.</p>
      </div>
      <div class="col-md-4">
        <form action='' method="POST">
          <div class="form-group">
            <label>Bandara Asal</label>
            <select name="" class="form-control">
              <option value="">Jakarta</option>
              <option value="">Bandung</option>
              <option value="">Denpasar</option>
            </select>
          <div>
          <div class="form-group">
            <label>Bandara Tujuan</label>
            <select name="" class="form-control">
              <option value="">Arab Saudi</option>
              <option value="">Italia</option>
              <option value="">Turki</option>
            </select>
          <div>
          <div class="form-group">
            <label>Tanggal Berangkat</label>
            <input type="date" name="tanggal" class="form-control">
            </div>
            <div class="form-group">
            <label>Jumlah penumpang</label>
            <select name="" class="form-control">
              <option value="">1 penumpang</option>
              <option value="">2 penunpang</option>
              <option value="">3 penumpang</option>
              <option value="">4 penumpang</option>
            </select>
          <div>
          
          <button class="btn btn-dark block">Cari Tiket</button>
        <form>
         
            
      </div>
    </div>
    
    <br>
  </div>
</div>
<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
</body>
</html>