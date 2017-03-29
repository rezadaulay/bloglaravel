<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Daftar Artikel</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
        <br>
        <a href="post/create" class="btn btn-default">Tambah Artikel Baru</a>
        <h1>Daftar Artikel</h1>
        @if( Session::has('pesan') )
        <div class="alert alert-success">
          <strong>Sukses!</strong> {{ Session::get('pesan') }}
        </div>
        @endif
        <table class="table">
            <tr>
                <th>Judul</th>
                <th>Dibuat Tanggal</th>
                <th>Terakhir Diubah Tanggal</th>
                <th></th>
            </tr>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
                <td><a href="/post/{{$post->id}}">Lihat</a> | <a href="/post/{{$post->id}}/edit">Ubah</a></td>
            </tr>
            @endforeach
        </table>
            {{ $posts->render() }}
    </div>

    <script src="/js/bootstrap.js"></script>
  </body>
</html>
