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
    public function index()
    {
        $stories = Story::all();
        return view('story.index', ['stories' => $stories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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

        $validatedData = request()->validate([
            'title' => 'required|max:255',
            'body' => 'required|min:50',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'language' => 'required|max:3',
        ]);

        $story = new Story();
        $story->title = $validatedData['title'];
        $story->body = $validatedData['body'];
        $story->language = $validatedData['language'];

        $image = $validatedData['image'];
        $imageName = time() . '_' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        $story->image = $imageName;

        $story->save();

        return redirect('/story')->with('success', 'Story has been added');
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
        return view('story.show', ['story' => $story]);
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
        $this->authorize('admin');
        $story = Story::find($id);

        $validatedData = request()->validate([
            'title' => 'required|max:255',
            'body' => 'required|min:50',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'language' => 'required|max:3',
        ]);

        $story->title = $validatedData['title'];
        $story->body = $validatedData['body'];
        $story->language = $validatedData['language'];

        $image = $validatedData['image'];
        $imageName = time() . '_' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        $story->image = $imageName;

        $story->save();

        return redirect('/story')->with('success', 'Story has been updated');
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

        return redirect('/story')->with('success', 'Story has been deleted');
    }
}
