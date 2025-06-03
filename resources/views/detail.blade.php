<!DOCTYPE html>
<html lang="id">

<!-- Bootstrap CSS -->
<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Site CSS -->
<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
<!-- Responsive CSS -->
<link href="{{ URL::asset('css/responsive.css') }}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Detail UMKM</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-100 font-sans">
<div class="max-w-6xl mx-auto p-8 bg-white shadow-xl rounded-xl mt-10">
    <a href="{{ route('welcome') }}" class="text-blue-600 hover:underline text-sm mb-4 inline-block">&larr; Kembali ke Daftar UMKM</a>
    <div id="umkmDetail" class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
            <h1 id="name" class="text-3xl font-bold mb-2">{{ $umkm->name }}</h1>
            <h3 id="owner" class="text-xl text-gray-600 mb-4">Pemilik: {{ $umkm->owner }}</h3>
            <p id="description" class="mb-4 text-gray-800 leading-relaxed">{{ $umkm->description }}</p>
            <div class="text-yellow-500 font-semibold mb-3" id="rating">Rating: {{ $umkm->rating }}</div>
            <h3 class="text-lg font-semibold mt-4 mb-1">Alamat:</h3>
            <p id="address" class="mb-4 text-gray-700">{{ $umkm->address }}</p>
            <h3 class="text-lg font-semibold mt-6 mb-2">Sosial Media:</h3>
            <div id="socialLinks" class="flex flex-col gap-2 text-blue-600 text-sm">
            @php
                $social = json_decode($umkm->social, true);
            @endphp
            @if (is_array($social))
                @if (!empty($social['instagram']))
                    <a href="{{ $social['instagram'] }}" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
                @endif
                @if (!empty($social['facebook']))
                    <a href="{{ $social['facebook'] }}" target="_blank"><i class="fab fa-facebook"></i> Facebook</a>
                @endif
                @if (!empty($social['whatsapp']))
                    <a href="https://wa.me/{{ $social['whatsapp'] }}" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                @endif
            @else
                <p>Tidak ada data sosial media.</p>
            @endif
            </div>
        </div>
        <div class="flex items-start justify-center">
            <img src="{{ $umkm->photo ? asset('storage/' . $umkm->photo) : asset('images/placeholder.jpg') }}"
                alt="Foto Utama"
                class="rounded-lg shadow-md max-w-full h-auto object-contain"
                style="max-height: 400px;">
        </div>
    </div>
</div>


@if ($umkm->photos)
    @php
        $photos = json_decode($umkm->photos);
    @endphp
    @if (is_array($photos) || is_object($photos))
        @foreach ($photos as $photo)
            <img src="{{ $photo }}" width="200" />
        @endforeach
    @endif
@endif

</body>

</html>