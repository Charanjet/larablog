<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller{
    protected $request;
    protected $user;

    public function __construct(Request $request, Auth $auth)
    {
        $this->request =$request;
//        $this->user = $auth->user();
    }

    public function index()
    {

        $posts = Post::all();
        return view('welcome')->with('posts',$posts);
    }

    public function getPost($id)
    {
        $post = Post::where('id','=',$id)->first();
        return view('frontend.post-detail')->with('post',$post);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $post = new Post;
        $img = $request->img;
        $post->title = $request->post('title');
        $post->slug = $request->post('slug');
        $post->excerpt = $request->post('excerpt');
        $post->description = $request->post('desription');
        $post->status = $request->post('post-status');
        $post->author = $request->post('author');
        $post->image = $img;
        $post->user_id = Auth::user()->id;
        if($post->save()){
            return redirect('dashboard')->with('msg','Post saved successfully');
        }else{
            return redirect('dashboard')->with('error-msg','Post save unsuccessfull');
        }

    }

    public function getPostsByUserId($user_id){

        $posts = Post::where('user_id',$user_id)->get();
        if ($this->request->is('posts/view/*')){
            return view('admin.posts')->with(['posts'=>$posts,'user'=>Auth::user()]);
        }
        return $posts;
    }

    public function edit($id){
        $post = Post::find($id);
        return view('admin.edit')->with('post',$post);
    }

    public function update($id){
        $post = Post::where('id',$id)->first();
        $post->title = $this->request->post('title');
        $post->slug = $this->request->post('slug');
        $post->excerpt = $this->request->post('excerpt');
        $post->description = $this->request->post('description');
        $post->status = $this->request->post('status');
        if ($post->save()){
            return redirect(route('dashboard'))->with('msg','Post Successfully Updated');
        }else{
            return redirect('dashboard')->with('error-msg','Something Went Wrong');

        }
    }

    public function delete($id){
        if (Post::destroy($id)){
            return redirect(route('dashboard'))->with('msg','Post Deleted');
        }else{
            return redirect('dashboard')->with('error-msg','Something Went Wrong');
        }
    }

}
