<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>From Buku Tamu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container py-4">
    <h1 class="mb-4">Input Buku Tamu</h1>

    <form action="proses.php" method="post">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" id="nameInput" placeholder="Nama lengkap">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Komentar</label>
        <textarea name="komentar" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>


      <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
      <a href="index.php" class="btn btn-secondary">Data Buku Tamu</a>

    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>