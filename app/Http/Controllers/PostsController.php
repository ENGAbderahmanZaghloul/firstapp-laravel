<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use Illuminate\Http\Request; // ✅ الحل هنا
use Illuminate\Routing\Controller;

class PostsController extends Controller
{
     public function index(){
     $allPosts=[ 
        ['id'=> 1 , 'title' => "php" , "posted_by" =>"abdu"],
        ['id'=> 2 , 'title' => "js" , "posted_by" =>"moha"],
        ['id'=> 3 , 'title' => "cpp" , "posted_by" =>"amr"],
        ['id'=> 4 , 'title' => "c#" , "posted_by" =>"ahmed"],
    ];
    
    return view('posts.index' , ['posts' => $allPosts]);

    }
     public function show($postId){
     $singlePost=[ 
        ['id'=> 1 , 'title' => "php" , "posted_by" =>"abdu"],
        ['id'=> 2 , 'title' => "js" , "posted_by" =>"moha"],
        ['id'=> 3 , 'title' => "cpp" , "posted_by" =>"amr"],
        ['id'=> 4 , 'title' => "c#" , "posted_by" =>"ahmed"],
      ];
      $post = Arr::first($singlePost,fn($post)=>$post['id'] == $postId);
      if(! $post) {
         abort(404);
      };

      return view('posts.show' , ['post' => $post]);
    
}

}
