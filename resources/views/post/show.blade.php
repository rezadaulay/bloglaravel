{{ Session::get('pesan') }} <!-- jika ada pesan -->
<form action="/post/{{$post->id}}" method="POST">
	{{ csrf_field() }}
	{{ method_field('DELETE') }} <!-- Metode Input -->
	<label>Judul</label><br>
	<p>{{$post->title}}</p>
	<label>Isi</label><br>
	<p>{{$post->content}}</p>
	<button type="submit">Hapus</button>
	<br>
	<p><a href="/post">Lihat Daftar Artikel</p>
</form>