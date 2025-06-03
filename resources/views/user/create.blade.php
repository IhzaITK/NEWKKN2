<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-4">Tambah Pengguna</h1>

    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block">Nama</label>
            <input type="text" name="name" required class="w-full border px-4 py-2 rounded">
        </div>
        <div class="mb-4">
            <label class="block">Email</label>
            <input type="email" name="email" required class="w-full border px-4 py-2 rounded">
        </div>
        <div class="mb-4">
            <label class="block">Password</label>
            <input type="password" name="password" required class="w-full border px-4 py-2 rounded">
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded">Simpan</button>
    </form>
</div>
</body>
</html>
