<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show', 'search']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts =  Post::orderBy('id', 'desc')->paginate(25);
        return view('posts.index')->with('posts', $posts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        $posts =  Post::where('customerName', 'like', '%'.$search.'%')
                        ->orWhere('bank', 'like', '%'.$search.'%')
                        ->orWhere('amount', 'like', '%'.$search.'%')
                        ->orWhere('actionTaken', 'like', '%'.$search.'%')
                        ->paginate(5);
        //$posts =  Post::where('bank', 'like', '%'.$search.'%' )->paginate(5);
        //$posts =  Post::where('actionTaken', 'like', '%'.$search.'%' )->paginate(5);
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'fileUpload' => 'image|nullable|max:1999'

        ]);

       // Handle File Upload
        if($request->hasFile('fileUpload')){
            // Get filename with the extension
            $filenameWithExt = $request->file('fileUpload')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('fileUpload')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload the Image
            $path = $request->file('fileUpload')->storeAs('public/fileUpload', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        };

        // Create Post
            $post = new Post();
            $post->dateRecorded = $request->input('dateRecorded');
            $post->bank = $request->input('bank');
            $post->transactionId = $request->input('transactionId');
            $post->transactionDate = $request->input('transactionDate');
            $post->amount = $request->input('amount');
            $post->cardNumber = $request->input('cardNumber');
            $post->terminalLocation = $request->input('terminalLocation');
            $post->customerName = $request->input('customerName');
            $post->actionTaken = $request->input('actionTaken');
            $post->remark = $request->input('remark');
            $post->user_id = auth()->user()->id;
            $post->fileUpload = $fileNameToStore;
            $post->save();
        return redirect('/posts')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
