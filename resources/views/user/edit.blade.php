<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-4">Edit Pengguna</h1>

    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-4">
            <label class="block">Nama</label>
            <input type="text" name="name" value="{{ $user->name }}" required class="w-full border px-4 py-2 rounded">
        </div>
        <div class="mb-4">
            <label class="block">Email</label>
            <input type="email" name="email" value="{{ $user->email }}" required class="w-full border px-4 py-2 rounded">
        </div>
        <div class="mb-4">
            <label class="block">Password (kosongkan jika tidak diubah)</label>
            <input type="password" name="password" class="w-full border px-4 py-2 rounded">
        </div>
        <button type="submit" class="w-full bg-yellow-500 text-white py-2 rounded">Update</button>
    </form>
</div>
</body>
</html>
