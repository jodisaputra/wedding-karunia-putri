<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Gallery::all();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return '<form action="' . route('galleries.destroy', $row->id) . '" method="POST" class="d-inline">
                            ' . csrf_field() . '
                            ' . method_field('DELETE') . '
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure you want to delete this item?\')">Delete</button>
                         </form>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('galleries.index');
    }

    public function create()
    {
        return view('galleries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('images', 'public');

                // Create a Slider record with the image URL
                Gallery::create(['images' => $imagePath]);
            }
        }

        Alert::success('Success', 'Gallery created successfully!');
        return redirect()->route('galleries.index');
    }

    public function destroy(Gallery $gallery)
    {
        if ($gallery->images) {
            Storage::disk('public')->delete($gallery->images);
        }

        $gallery->delete();
        Alert::success('Success', 'Gallery deleted successfully');
        return redirect()->route('galleries.index');
    }
}
