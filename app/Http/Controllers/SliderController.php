<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class SliderController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Slider::all();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return '<form action="' . route('sliders.destroy', $row->id) . '" method="POST" class="d-inline">
                            ' . csrf_field() . '
                            ' . method_field('DELETE') . '
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure you want to delete this item?\')">Delete</button>
                         </form>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('sliders.index');
    }

    public function create()
    {
        return view('sliders.create');
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
                Slider::create(['images' => $imagePath]);
            }
        }

        Alert::success('Success', 'Slider created successfully!');
        return redirect()->route('sliders.index');
    }

    public function destroy(Slider $slider)
    {
        if ($slider->images) {
            Storage::disk('public')->delete($slider->images);
        }

        $slider->delete();
        Alert::success('Success', 'Slider deleted successfully');
        return redirect()->route('sliders.index');
    }
}
