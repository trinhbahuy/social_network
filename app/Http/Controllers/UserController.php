<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Like;
use App\User;
class UserController extends Controller
{
    public function __construct(){
        $post = Post::all();
        view()->share('post',$post);
    }
    public function postLogin(Request $request){
        $email = $request['email'];
        $password = $request['password'];
        if(Auth::attempt(['email'=>$email, 'password'=>$password]))
            return redirect('dashboard');
    }

    public function dashboard(){
        return view('layout.dashboard');
    }

    public function postLike(Request $request){
        $post_id = $request['post_id'];
        $isLike = $request['is_like'] === 'true';
        $update = false;
        $post = Post::find($post_id);
        if(!$post){
          return null;
        }
        $user = Auth::user(); ///
        $like = $user->like->where('post_id', $post_id)->first();
        if($like){
            $already_like = $like->like;
            $update = true;
            if($already_like == $isLike){
                $like->delete();
                return null;
            }
          }
        else {
          $like = new Like;
        }
          $like->post_id = $post->id;
          $like->user_id = $user->id;
          $like->like = $isLike;
          if($update){
            $like->update();
          }
          else{
            $like->save();
          }
          return $post->id;
         }

        public function test(){
          $user = Auth::user(); ///
          $like = $user->like->where('post_id', '1')->first();
          echo $like->id;
        }

}
