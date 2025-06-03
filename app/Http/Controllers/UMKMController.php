<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umkm;
use Storage;

class UMKMController extends Controller
{
    public function index(Request $request)
    {
        $query = Umkm::query();
    
        // Search filter
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('description', 'like', '%' . $request->search . '%');
        }
    
        // RT filter
        if ($request->filled('filterRT') && $request->filterRT !== 'all') {
            $query->where('rt', $request->filterRT);
        }
    
        // Type filter
        if ($request->filled('filterType') && $request->filterType !== 'all') {
            $query->where('type', $request->filterType);
        }
    
        $umkms = $query->paginate(8); // Adjust per-page as needed
    
        return view('welcome', compact('umkms'));
    }

    public function info()
    {
        $umkms = UMKM::all();
        return view('info', compact('umkms'));
    }
    public function show($id)
    {
        $umkm = UMKM::findOrFail($id);
        return view('detail', compact('umkm'));
    }
        

    public function dashboard()
    {
        $umkms = UMKM::all();
        return view('dashboard', compact('umkms'));
    }
    

public function create()
    {
        return view('create');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'owner' => 'required|string|max:255',
        'description' => 'required|string',
        'address' => 'required|string',
        'rating' => 'required|numeric|between:0,5',
        'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',  // single photo
        'instagram' => 'nullable|string',
        'facebook' => 'nullable|string',
        'whatsapp' => 'nullable|string',
        'rt' => 'nullable|string',
        'type' => 'nullable|string',
    ]);

    $umkm = new Umkm;
    $umkm->name = $validated['name'];
    $umkm->owner = $validated['owner'];
    $umkm->description = $validated['description'];
    $umkm->address = $validated['address'];
    $umkm->rating = $validated['rating'];
    $umkm->rt = $validated['rt'];
    $umkm->type = $validated['type'];

    if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('umkm_photos', $fileName, 'public');
        $umkm->photo = $filePath;
    }

    $umkm->social = json_encode([
        'instagram' => $validated['instagram'] ?? null,
        'facebook' => $validated['facebook'] ?? null,
        'whatsapp' => $validated['whatsapp'] ?? null,
    ]);

    $umkm->save();

    return redirect()->route('dashboard');
}
    

public function edit($id)
    {
        $umkm = UMKM::findOrFail($id);
        return view('edit', compact('umkm'));
    }

    public function update(Request $request, $id)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'owner' => 'required|string|max:255',
        'description' => 'required|string',
        'address' => 'required|string',
        'rating' => 'required|numeric|between:0,5',
        'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',  // single photo
        'instagram' => 'nullable|string',
        'facebook' => 'nullable|string',
        'whatsapp' => 'nullable|string',
        'rt' => 'nullable|string',
        'type' => 'nullable|string',
    ]);

    $umkm = Umkm::findOrFail($id);
    $umkm->name = $validated['name'];
    $umkm->owner = $validated['owner'];
    $umkm->description = $validated['description'];
    $umkm->address = $validated['address'];
    $umkm->rating = $validated['rating'];
    $umkm->rt = $validated['rt'];
    $umkm->type = $validated['type'];

    if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('umkm_photos', $fileName, 'public');
        $umkm->photo = $filePath;
    }

    $umkm->social = json_encode([
        'instagram' => $validated['instagram'] ?? null,
        'facebook' => $validated['facebook'] ?? null,
        'whatsapp' => $validated['whatsapp'] ?? null,
    ]);

    $umkm->save();

    return redirect()->route('dashboard')->with('success', 'UMKM berhasil diperbarui.');
}

public function destroy($id)
    {
        UMKM::destroy($id);
        return redirect()->route('dashboard');
    }

}
