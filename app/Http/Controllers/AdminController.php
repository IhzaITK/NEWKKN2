<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umkm;

class AdminController extends Controller
{

public function index() {
    $umkms = Umkm::all();
    return view('dashboard', compact('umkms'));
}

public function create() {
    return view('admin.create');
}

public function store(Request $request) {
    $data = $request->validate([
        'name' => 'required',
        'owner' => 'required',
        'description' => 'required',
        'address' => 'required',
        'rating' => 'required|numeric',
        'photos' => 'required|array',
        'social' => 'required|array'
    ]);
    Umkm::create($data);
    return redirect()->route('dashboard');
}

public function edit($id) {
    $umkm = Umkm::findOrFail($id);
    return view('admin.edit', compact('umkm'));
}

public function update(Request $request, $id) {
    $umkm = Umkm::findOrFail($id);
    $umkm->update($request->all());
    return redirect()->route('dashboard');
}

public function destroy($id) {
    Umkm::destroy($id);
    return redirect()->route('dashboard');
}

}
