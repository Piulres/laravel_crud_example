<?php


class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

       
        // get all the posts
       $posts = Post::all();

        // load the view and pass the posts
        return View::make('posts.index')
            ->with('posts', $posts);
    

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'slug'       => 'required',
            'title'       => 'required',
            'content'       => 'required', 
            'published'      => 'required|numeric',
            'featured'      => 'required|numeric',
            'category'      => 'required',

            // 'number' => 'required|numeric'
            // 'email' => 'required|email'

        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('posts/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $posts = new Post;
            $posts->slug       = Input::get('slug');
            $posts->title       = Input::get('title');
            $posts->content       = Input::get('content');
            $posts->published       = Input::get('published');
            $posts->featured       = Input::get('featured');
            $posts->category       = Input::get('category');

            $posts->save();

            // redirect
            Session::flash('message', 'Successfully created post!');
            return Redirect::to('posts');
        }
    }


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// get the post
        $post = Post::find($id);

        // show the view and pass the post to it
        return View::make('posts.show')
            ->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the nerd
        $post = Post::find($id);

        // show the edit form and pass the post
        return View::make('posts.edit')
            ->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'slug'       => 'required',
            'title'       => 'required',
            'content'       => 'required', 
            'published'      => 'required|numeric',
            'featured'      => 'required|numeric',
            'category'      => 'required',

            // 'number' => 'required|numeric'
            // 'email' => 'required|email'

        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('posts/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $post = Post::find($id);
          
            $post->slug       = Input::get('slug');
            $post->title       = Input::get('title');
            $post->content       = Input::get('content');
            $post->published       = Input::get('published');
            $post->featured       = Input::get('featured');
            $post->category       = Input::get('category');
            $post->save();

            // redirect
            Session::flash('message', 'Successfully updated post!');
            return Redirect::to('posts');
        }
    }


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete
        $post = Post::find($id);
        $post->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the post!');
        return Redirect::to('posts');
	}


}
