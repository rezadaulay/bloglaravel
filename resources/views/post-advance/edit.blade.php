<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Lihat Artikel</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
        <br>
        <a href="/post" class="btn btn-default">Lihat Daftar Artikel</a>
        <h1>Lihat Artikel</h1>
        @if( Session::has('pesan') )
        <div class="alert alert-success">
          <strong>Sukses!</strong> {{ Session::get('pesan') }}
        </div>
        @endif
    {!! Form::open(['action' => ['PostController@update', $post->id] ,'method' => 'PUT']) !!}
			<div class="form-group">
				<label>Judul</label><br>
				<input type="text" name="title" value="{{$post->title}}" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Isi</label><br>
				<textarea name="content" class="form-control" required>{{$post->content}}</textarea>
			</div>
			<button type="submit" class="btn">Ubah</button>
		{!! Form::close() !!}

    </div>

    <script src="/js/bootstrap.js"></script>
  </body>
</html>
