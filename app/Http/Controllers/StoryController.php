<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $stories = Story::where('title', 'like', '%' . $request->keyword . '%')->get();
        return view('story.index', ['stories' => $stories]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin');
        return view('story.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('admin');
        
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required|min:20',
            'link' => 'required|url',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $story = new Story();
        $story->title = $validatedData['title'];
        $story->body = $validatedData['body'];
        $story->link = $validatedData['link'];

        $image = $validatedData['image'];
        $imageName = time() . '_' . $image->getClientOriginalExtension();
        $image->move(public_path('storage'), $imageName);
        $story->image = 'storage/' . $imageName;

        $story->save();

        return redirect('/dashboard')->with('success', 'Story has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $story = Story::find($id);
        if (!$story) {
            return redirect('/')->with('error', 'Story not found');
        }
        $comments = $story->comments;
        return view('story.show', ['story' => $story, 'comments' => $comments]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('admin');
        $story = Story::find($id);
        return view('story.edit', ['story' => $story]);
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
        $this->authorize('admin');
        $story = Story::find($id);

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required|min:20',
            'link' => 'required|url',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $story->title = $validatedData['title'];
        $story->body = $validatedData['body'];
        $story->link = $validatedData['link'];

        $image = $validatedData['image'];
        $imageName = time() . '_' . $image->getClientOriginalExtension();
        $image->move(public_path('storage'), $imageName);
        $story->image = 'storage/' . $imageName;

        $story->save();

        return redirect('/dashboard')->with('success', 'Story has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('admin');
        $story = Story::find($id);
        $story->delete();

        return redirect('/dashboard')->with('success', 'Story has been deleted');
    }
}
