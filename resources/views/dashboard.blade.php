<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="container mx-auto py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Admin Dashboard</h1>
        <div class="mb-4">
            <a href="{{ route('user.index') }}" class="px-4 py-2 bg-green-500 text-white rounded">Kelola Pengguna</a>
        </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="px-4 py-2 bg-red-500 text-white rounded">Logout</button>
        </form>
    </div>

    <div class="mb-4">
        <a href="{{ route('umkm.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded">Tambah UMKM</a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow rounded-lg">
            <thead class="bg-gray-200 text-gray-700 uppercase text-sm">
                <tr>
                    <th class="py-3 px-6 text-left">Nama</th>
                    <th class="py-3 px-6 text-left">RT</th>
                    <th class="py-3 px-6 text-left">Jenis</th>
                    <th class="py-3 px-6 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($umkms as $umkm)
                <tr class="border-b">
                    <td class="py-3 px-6">{{ $umkm->name }}</td>
                    <td class="py-3 px-6">{{ $umkm->rt }}</td>
                    <td class="py-3 px-6">{{ $umkm->type }}</td>
                    <td class="py-3 px-6 flex">
                        <a href="{{ route('umkm.edit', $umkm->id) }}" class="px-2 py-1 bg-yellow-500 text-white rounded mr-2">Edit</a>
                        <form action="{{ route('umkm.destroy', $umkm->id) }}" method="POST" onsubmit="return confirm('Hapus?')">
                            @csrf
                            @method('DELETE')
                            <button class="px-2 py-1 bg-red-500 text-white rounded">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
