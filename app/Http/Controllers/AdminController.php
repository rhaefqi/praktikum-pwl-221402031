<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\user;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        return view('admin.warna');
    }

    
    public function first()
    {
        return view('admin.FirstChapter');
    }
    public function second()
    {
        return view('admin.SecondChapter');
    }
    public function third()
    {
        return view('admin.ThirdChapter');
    }
    public function fourth()
    {
        return view('admin.FourthChapter');
    }
    public function final()
    {
        return view('admin.FinalChapter');
    }
    public function postingan()
    {
        $posts = Post::select('title', 'excerpt', 'konten', 'image', 'id')->get();
        return view('admin.postingan', compact('posts'));
    }
    public function user()
    {
        $users = User::select('name', 'email', 'user_role', 'id')->get();
        return view('admin.user', compact('users'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create_post()
    {
        return view('admin.create_post');
    }
    public function create_user()
    {
        return view('admin.create_user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_post(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required|min:5|max:100',
            'excerpt' => 'required|min:20|max:150',
            'konten' => 'required|min:50|max:250',
            'image' => 'image|mimes:jpeg,jpg,png|max:4096'
        ]);

        $new_post = new post;
        $new_post -> title      = $request->title;
        $new_post -> excerpt    = $request->excerpt;
        $new_post -> konten     = $request->konten;
        $new_post -> author_id  = $request->author_id;

        if($request->hasFile('image')){
            $location = public_path('/img');

            $namaFile = $request->file('image')->getClientOriginalName();
            $namaFileBaru = substr(uniqid(), 5, 5);
            $namaFileBaru .= '_';
            $namaFileBaru .= $namaFile;

            $request->file('image')->move($location, $namaFileBaru);

            $new_post->image = $namaFileBaru;
        }
        $new_post->save();


        return redirect('/admin/postingan')->with('status', 'Postingan berhasil ditambahkan');
    }
    public function store_user(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'password' => 'required'
        ]);

        $new_user = new user;
        $new_user -> name      = $request->name;
        $new_user -> email    = $request->email;
        $new_user -> user_role     = $request->role;
        $new_user -> password     = $request->password;

    
        $new_user->save();


        return redirect('/admin/user')->with('status_user', 'user berhasil ditambahkan');
    }

    public function edit_post($id)
    {
        $post = Post::find($id);
        // dd($post);
        return view('admin.edit_post', compact('post'));
    }
    public function edit_user($id)
    {
        $user = User::find($id);
        // dd($post);
        return view('admin.edit_user', compact('user'));
    }
    public function update_post(Request $request, $id)
    {
        $post = post::find($id);
        
        $validate = $request->validate([
            'title' => 'required|min:5|max:100',
            'excerpt' => 'required|min:20',
            'konten' => 'required|min:50',
            'image' => 'image|mimes:jpeg,jpg,png|max:4096'
        ]);
        
        $post -> title      = $request->title;
        $post -> excerpt    = $request->excerpt;
        $post -> konten     = $request->konten;
        $post -> author_id     = $request->author_id;
        // dd($post);

        if($request->hasFile('image')){
            $location = public_path('/img');

            $namaFile = $request->file('image')->getClientOriginalName();
            $namaFileBaru = substr(uniqid(), 5, 5);
            $namaFileBaru .= '_';
            $namaFileBaru .= $namaFile;

            $request->file('image')->move($location, $namaFileBaru);

            $post->image = $namaFileBaru;
        }

        $post->save();
        return redirect('/admin/postingan')->with('update_status', 'postingan berhasil di edit');

    }
    public function update_user(Request $request, $id)
    {
        $user = User::find($id);
        
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'password' => 'required'
        ]);
        
        $user -> name      = $request->name;
        $user -> email    = $request->email;
        $user -> user_role     = $request->role;
        $user -> password     = $request->password;
        
        $user->save();
        return redirect('/admin/user')->with('update_status_user', 'user berhasil diedit');   
    }

    /**
     * Display the specified resource.
     */
    public function delete_post($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('/admin/postingan')->with('delete_status', "Postingan berhasil dihapus");
    }
    public function delete_user($id)
    {
        $user = User::find($id);
        // dd($user);
        $user->delete();

        return redirect('/admin/user')->with('delete_status_user', "User berhasil dihapus");
    }

    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
