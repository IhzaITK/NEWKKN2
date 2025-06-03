<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kelola Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="container mx-auto py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Kelola Pengguna</h1>
        <a href="{{ route('dashboard') }}" class="px-4 py-2 bg-gray-500 text-white rounded">Dashboard</a>
    </div>

    <div class="mb-4">
        <a href="{{ route('user.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded">Tambah Pengguna</a>
    </div>

    <table class="min-w-full bg-white shadow rounded-lg">
        <thead class="bg-gray-200 text-gray-700 uppercase text-sm">
            <tr>
                <th class="py-3 px-6 text-left">Nama</th>
                <th class="py-3 px-6 text-left">Email</th>
                <th class="py-3 px-6 text-left">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr class="border-b">
                <td class="py-3 px-6">{{ $user->name }}</td>
                <td class="py-3 px-6">{{ $user->email }}</td>
                <td class="py-3 px-6 flex">
                    <a href="{{ route('user.edit', $user->id) }}" class="px-2 py-1 bg-yellow-500 text-white rounded mr-2">Edit</a>
                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Hapus user ini?')">
                        @csrf @method('DELETE')
                        <button class="px-2 py-1 bg-red-500 text-white rounded">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
