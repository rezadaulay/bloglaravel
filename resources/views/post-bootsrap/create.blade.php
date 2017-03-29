<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Tambah Artikel</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
        <br>
        <a href="/post" class="btn btn-default">Lihat Daftar Artikel</a>
        <h1>Tambah Artikel</h1>
        @if( Session::has('pesan') )
        <div class="alert alert-success">
          <strong>Sukses!</strong> {{ Session::get('pesan') }}
        </div>
        @endif
        <form action="/post" method="POST">
			{{ csrf_field() }}
			{{ method_field('POST') }} <!-- Metode Input -->
			<div class="form-group">
				<label>Judul</label><br>
				<input type="text" name="title" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Isi</label><br>
				<textarea name="content" class="form-control" required ></textarea>
			</div>
			<button type="submit" class="btn">Simpan</button>
		</form>

    </div>

    <script src="/js/bootstrap.js"></script>
  </body>
</html>