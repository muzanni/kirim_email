<!DOCTYPE html>
<html lang="en">
<head>
  <title>Malasngoding.com - Kirim Email Mengunakan PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Kirim Email Mengunakan PHP</h2>

  <?php 
  if(isset($_GET['alert'])){
  	if($_GET['alert'] == "berhasil"){
  		echo "<div class='alert alert-primary'><b>Berhasil </b><br> email berhasil dikirim</div>";
  	}elseif ($_GET['alert']=="gagal") {
  		echo "<div class='alert alert-danger'><b>Gagal </b><br> email gagal dikirim</div>";
  	}
  }
  ?>


  <form action="kirim.php" method="post">
    <div class="mb-3 mt-3">
      <label>Email Tujuan:</label>
      <input type="email" class="form-control"  placeholder="Email Tujuan" name="email" required>
    </div>
    <div class="mb-3 mt-3">
      <label>Judul Pesan:</label>
      <input type="text" class="form-control"  placeholder="Judul Pesan" name="judul" required>
    </div>
    <div class="mb-3 mt-3">
      <label>Isi Pesan:</label>
      <textarea class="form-control" name="pesan" placeholder="Pesan" required></textarea>
    </div>
   
    <button type="submit" class="btn btn-primary">Kirim</button>
  </form>
</div>

</body>
</html>