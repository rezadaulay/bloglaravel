{{ Session::get('pesan') }} <!-- jika ada pesan -->
<form action="/post" method="POST">
	{{ csrf_field() }}
	{{ method_field('POST') }} <!-- Metode Input -->
	<label>Judul</label><br>
	<input type="text" name="title" >
	<br><br>
	<label>Isi</label><br>
	<textarea name="content" ></textarea>
	<br>
	<button type="submit">Simpan</button>
	<br>
	<p><a href="/post">Lihat Daftar Artikel</p>
</form>