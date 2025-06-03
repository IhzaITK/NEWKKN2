<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit UMKM</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<div class="w-full max-w-lg bg-white p-8 rounded-lg shadow">
    <h2 class="text-2xl font-bold mb-4">Edit UMKM</h2>
    <form action="{{ route('umkm.update', $umkm->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Nama</label>
            <input type="text" name="name" value="{{ $umkm->name }}" required class="w-full border px-4 py-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Owner</label>
            <input type="text" name="owner" value="{{ $umkm->owner }}" required class="w-full border px-4 py-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Deskripsi</label>
            <textarea name="description" required class="w-full border px-4 py-2 rounded">{{ $umkm->description }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Alamat</label>
            <input type="text" name="address" value="{{ $umkm->address }}" required class="w-full border px-4 py-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Rating (0-5)</label>
            <input type="number" name="rating" step="0.1" min="0" max="5" value="{{ $umkm->rating }}" required class="w-full border px-4 py-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block mb-1">RT</label>
            <select name="rt" class="w-full border px-4 py-2 rounded">
                @foreach(['rt01','rt02','rt03','rt04','rt05'] as $rt)
                    <option value="{{ $rt }}" {{ $umkm->rt == $rt ? 'selected' : '' }}>{{ strtoupper($rt) }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block mb-1">Jenis Usaha</label>
            <select name="type" class="w-full border px-4 py-2 rounded">
                @foreach(['makanan','minuman','kerajinan','fashion','jasa'] as $type)
                    <option value="{{ $type }}" {{ $umkm->type == $type ? 'selected' : '' }}>{{ ucfirst($type) }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
        <label for="photo" class="block text-sm font-medium text-gray-700">Foto</label>
        
            @if($umkm->photo)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $umkm->photo) }}" alt="Foto UMKM" class="w-32 h-32 object-cover rounded">
                </div>
            @endif

            <input type="file" name="photo" id="photo" class="w-full border px-4 py-2 rounded">
        </div>

        @php $social = json_decode($umkm->social, true); @endphp
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Instagram URL</label>
            <input type="text" name="instagram" value="{{ $social['instagram'] ?? '' }}" placeholder="Instagram URL" class="w-full border px-4 py-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Facebook URL</label>
            <input type="text" name="facebook" value="{{ $social['facebook'] ?? '' }}" placeholder="Facebook URL" class="w-full border px-4 py-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Nomor WhatsApp</label>
            <input type="text" name="whatsapp" value="{{ $social['whatsapp'] ?? '' }}" placeholder="Nomor WhatsApp" class="w-full border px-4 py-2 rounded">
        </div>

        <button type="submit" class="w-full bg-yellow-500 text-white py-2 rounded">Update</button>
    </form>

    <a href="{{ route('dashboard') }}" class="block mt-4 text-blue-500 hover:underline text-center">Kembali ke Dashboard</a>
</div>

</body>
</html>
