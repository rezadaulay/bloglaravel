{{ Session::get('pesan') }} <!-- jika ada pesan -->
<form action="/post/{{$post->id}}" method="POST">
	{{ csrf_field() }}
	{{ method_field('PUT') }} <!-- Metode Input -->
	<label>Judul</label><br>
	<input type="text" name="title" value="{{$post->title}}" >
	<br><br>
	<label>Isi</label><br>
	<textarea name="content" >{{$post->content}}</textarea>
	<br>
	<button type="submit">Ubah</button>
	<br>
	<p><a href="/post">Lihat Daftar Artikel</p>
</form>