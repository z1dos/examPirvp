<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Nette\Schema\ValidationException;

class PostContoller extends Controller
{
    public function createPostView()
    {
        return view('create-post');
    }

    public function store()
    {
        try {
            $this->validate(request(), [
                'title'=>'required'
            ]);
        }catch (ValidationException $e){
        }

        $data = request()->all();

        $post = new Post();
        $post->title = $data['title'];
        $post->save();

        return redirect('/');
    }
}
