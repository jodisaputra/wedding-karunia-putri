<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use RealRashid\SweetAlert\Facades\Alert;

class StoryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Story::all();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . route('stories.edit', $row->id) . '" class="btn btn-warning btn-sm">Edit</a>';
                    $btn .= '<form action="' . route('stories.destroy', $row->id) . '" method="POST" class="d-inline">
                            ' . csrf_field() . '
                            ' . method_field('DELETE') . '
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure you want to delete this item?\')">Delete</button>
                         </form>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('stories.index');
    }

    public function create()
    {
        return view('stories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'moment_date' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Story::create([
            'title' => $request->title,
            'description' => $request->description,
            'moment_date' => $request->moment_date,
            'image' => $imagePath,
        ]);
        Alert::success('Success', 'Story created successfully!');
        return redirect()->route('stories.index');
    }

    public function show(Story $story)
    {

    }

    public function edit(Story $story)
    {
        return view('stories.edit', compact('story'));
    }

    public function update(Request $request, Story $story)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'moment_date' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $oldImagePath = $story->image;

        if ($request->hasFile('image')) {
            if ($oldImagePath) {
                Storage::disk('public')->delete($oldImagePath);
            }

            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = $oldImagePath;
        }

        $story->update([
            'title' => $request->title,
            'description' => $request->description,
            'moment_date' => $request->moment_date,
            'image' => $imagePath,
        ]);
        Alert::success('Success', 'Story updated successfully');
        return redirect()->route('stories.index');
    }

    public function destroy(Story $story)
    {
        if ($story->image) {
            Storage::disk('public')->delete($story->image);
        }

        $story->delete();
        Alert::success('Success', 'Story deleted successfully');
        return redirect()->route('stories.index');
    }
}
