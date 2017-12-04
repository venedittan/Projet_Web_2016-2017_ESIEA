<?php

Class CommentsController extends BaseController{

public function admin(){
		$comments = Comment::all();
		return View::make('comments.admin',compact('comments'));
}

public function delete($id){
		$comment = Comment::find($id);
		$comment->delete();
		return Redirect::back()->with('success','Le commentaire a bien été supprimé');
}

		public function create($id){
			  $post = Post::find($id);
				$inputs = Input::all();
				// $commentCount = DB::table('posts')->whereUserId($this->author_id)->count();
				// $post->counts_comment = $commentCount;
				// $comments = Comment::all();
				// $number = DB::table('comments')->count();
				// $number = Post::find($comments)->count();

					Comment::create([
						'user_id' => Auth::user()->id,
						'post_id' => $post->id,
						'content' => $inputs['comment'],
						// 'counts_comment' => $number,
				]);

				return Redirect::back()->with('success','Votre commentaire a bien été créé');
			}
}
