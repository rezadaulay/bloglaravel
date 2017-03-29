<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post; // -> Gunakan Model Post

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(20); //→Berguna untuk memunculkan data post dari db, lalu di batasi perhalaman 20 record saja. 
        return view('post.index' // → Gunakan file template di folder views/post/index.blade.php
        ,[ 
            'posts' => $posts // → masukkan variable posts ke template
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create' // → Gunakan file template di folder views/post/create.blade.php
        ,[]//→ kosong, karena tidak memerluan variable
        ); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Post::create([
            'title' => $request->title,// ambil data form name="title"
            'content' => $request->content,// ambil data form name="content"
        ]);
        return redirect()->back()->with('pesan', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id); // → Cari post yang nilai id sesuai id diminta $id
        return view('post.show' // → Gunakan file template di folder views/post/show.blade.php
        ,[
            'post' => $post // → masukkan variable detail post ke template
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id); // → Cari post yang nilai id sesuai id diminta $id
        return view('post.edit' // → Gunakan file template di folder views/post/edit.blade.php
        ,[
            'post' => $post // → masukkan variable detail post ke template
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request){
        Post::find($id)->update([ // → ubah post sesuai post diminta
            'title' => $request->title,// ambil data form name="title"
            'content' => $request->content,// ambil data form name="content"
        ]);
        return redirect()->back()->with('pesan', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();// → hapus post seusai $id
        return redirect()->to('/post')->with('pesan', 'Data berhasil dihapus');
    }
}
