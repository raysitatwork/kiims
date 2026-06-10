<?php

namespace App\Http\Controllers;

use App\Models\CenterModel;
use Illuminate\Http\Request;

class CenterController extends Controller
{
    //
    public function index()
    {
        $centers = CenterModel::latest()->get();
        return view('backend.center.index', compact('centers'));
    }

    public function create()
    {
        return view('backend.center.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'center_name' => 'required',
            'address' => 'required',
            'photo' => 'required|image|mimes:jpg,jpeg,png,webp'
        ]);

        $photo = '';

        if ($request->hasFile('photo')) {
            $photo = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('uploads/centers'), $photo);
        }

        CenterModel::create([
            'name' => $request->name,
            'center_name' => $request->center_name,
            'address' => $request->address,
            'photo' => $photo,
        ]);

        return redirect()->route('center.index')
            ->with('success', 'Center Created Successfully');
    }

    public function edit($id)
    {
        $center = CenterModel::findOrFail($id);
        return view('backend.center.edit', compact('center'));
    }

    public function update(Request $request, $id)
    {
        $center = CenterModel::findOrFail($id);

        $photo = $center->photo;

        if ($request->hasFile('photo')) {
            $photo = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('uploads/centers'), $photo);
        }

        $center->update([
            'name' => $request->name,
            'center_name' => $request->center_name,
            'address' => $request->address,
            'photo' => $photo,
        ]);

        return redirect()->route('center.index')
            ->with('success', 'Center Updated Successfully');
    }

    public function destroy($id)
    {
        $center = CenterModel::findOrFail($id);
        $center->delete();

        return redirect()->route('center.index')
            ->with('success', 'Center Deleted Successfully');
    }

    
}
