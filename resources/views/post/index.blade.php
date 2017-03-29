<h1>Daftar Artikel</h1>
<p><a href="post/create">Tambah Artikel Baru</a></p>
{{ Session::get('pesan') }} <!-- jika ada pesan -->
<table width="100%">
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
    {{ $posts->render() }}
</table>