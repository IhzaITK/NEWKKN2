<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah UMKM</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<div class="w-full max-w-lg bg-white p-8 rounded-lg shadow">
    <h2 class="text-2xl font-bold mb-4">Tambah UMKM</h2>
    <form action="{{ route('umkm.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Nama</label>
            <input type="text" name="name" value="{{ old('name') }}" required class="w-full border px-4 py-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Owner</label>
            <input type="text" name="owner" value="{{ old('owner') }}" required class="w-full border px-4 py-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Deskripsi</label>
            <textarea name="description" required class="w-full border px-4 py-2 rounded">{{ old('description') }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Alamat</label>
            <input type="text" name="address" value="{{ old('address') }}" required class="w-full border px-4 py-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Rating (0-5)</label>
            <input type="number" name="rating" step="0.1" min="0" max="5" value="{{ old('rating') }}" required class="w-full border px-4 py-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block mb-1">RT</label>
            <select name="rt" class="w-full border px-4 py-2 rounded">
                <option value="rt01" {{ old('rt') == 'rt01' ? 'selected' : '' }}>RT 01</option>
                <option value="rt02" {{ old('rt') == 'rt02' ? 'selected' : '' }}>RT 02</option>
                <option value="rt03" {{ old('rt') == 'rt03' ? 'selected' : '' }}>RT 03</option>
                <option value="rt04" {{ old('rt') == 'rt04' ? 'selected' : '' }}>RT 04</option>
                <option value="rt05" {{ old('rt') == 'rt05' ? 'selected' : '' }}>RT 05</option>
                <option value="rt06" {{ old('rt') == 'rt06' ? 'selected' : '' }}>RT 06</option>
                <option value="rt07" {{ old('rt') == 'rt07' ? 'selected' : '' }}>RT 07</option>
                <option value="rt08" {{ old('rt') == 'rt08' ? 'selected' : '' }}>RT 08</option>
                <option value="rt09" {{ old('rt') == 'rt09' ? 'selected' : '' }}>RT 09</option>
                <option value="rt10" {{ old('rt') == 'rt10' ? 'selected' : '' }}>RT 10</option>
                <option value="rt11" {{ old('rt') == 'rt11' ? 'selected' : '' }}>RT 11</option>
                <option value="rt12" {{ old('rt') == 'rt12' ? 'selected' : '' }}>RT 12</option>
                <option value="rt13" {{ old('rt') == 'rt13' ? 'selected' : '' }}>RT 13</option>
                <option value="rt14" {{ old('rt') == 'rt14' ? 'selected' : '' }}>RT 14</option>
                <option value="rt15" {{ old('rt') == 'rt15' ? 'selected' : '' }}>RT 15</option>
                <option value="rt16" {{ old('rt') == 'rt16' ? 'selected' : '' }}>RT 16</option>
                <option value="rt17" {{ old('rt') == 'rt17' ? 'selected' : '' }}>RT 17</option>
                <option value="rt18" {{ old('rt') == 'rt18' ? 'selected' : '' }}>RT 18</option>
                <option value="rt19" {{ old('rt') == 'rt19' ? 'selected' : '' }}>RT 19</option>
                <option value="rt20" {{ old('rt') == 'rt20' ? 'selected' : '' }}>RT 20</option>
                <option value="rt21" {{ old('rt') == 'rt21' ? 'selected' : '' }}>RT 21</option>
                <option value="rt22" {{ old('rt') == 'rt22' ? 'selected' : '' }}>RT 22</option>
                <option value="rt23" {{ old('rt') == 'rt23' ? 'selected' : '' }}>RT 23</option>
                <option value="rt24" {{ old('rt') == 'rt24' ? 'selected' : '' }}>RT 24</option>
                <option value="rt25" {{ old('rt') == 'rt25' ? 'selected' : '' }}>RT 25</option>
                <option value="rt26" {{ old('rt') == 'rt26' ? 'selected' : '' }}>RT 26</option>
                <option value="rt27" {{ old('rt') == 'rt27' ? 'selected' : '' }}>RT 27</option>
                <option value="rt28" {{ old('rt') == 'rt28' ? 'selected' : '' }}>RT 28</option>
                <option value="rt29" {{ old('rt') == 'rt29' ? 'selected' : '' }}>RT 29</option>
                <option value="rt30" {{ old('rt') == 'rt30' ? 'selected' : '' }}>RT 30</option>
                <option value="rt31" {{ old('rt') == 'rt31' ? 'selected' : '' }}>RT 31</option>
                <option value="rt32" {{ old('rt') == 'rt32' ? 'selected' : '' }}>RT 32</option>
                <option value="rt33" {{ old('rt') == 'rt33' ? 'selected' : '' }}>RT 33</option>
                <option value="rt34" {{ old('rt') == 'rt34' ? 'selected' : '' }}>RT 34</option>
                <option value="rt35" {{ old('rt') == 'rt35' ? 'selected' : '' }}>RT 35</option>
                <option value="rt36" {{ old('rt') == 'rt36' ? 'selected' : '' }}>RT 36</option>
                <option value="rt37" {{ old('rt') == 'rt37' ? 'selected' : '' }}>RT 37</option>
                <option value="rt38" {{ old('rt') == 'rt38' ? 'selected' : '' }}>RT 38</option>
                <option value="rt39" {{ old('rt') == 'rt39' ? 'selected' : '' }}>RT 39</option>
                <option value="rt40" {{ old('rt') == 'rt40' ? 'selected' : '' }}>RT 40</option>
                <option value="rt41" {{ old('rt') == 'rt41' ? 'selected' : '' }}>RT 41</option>
                <option value="rt42" {{ old('rt') == 'rt42' ? 'selected' : '' }}>RT 42</option>
                <option value="rt43" {{ old('rt') == 'rt43' ? 'selected' : '' }}>RT 43</option>
                <option value="rt44" {{ old('rt') == 'rt44' ? 'selected' : '' }}>RT 44</option>
                <option value="rt45" {{ old('rt') == 'rt45' ? 'selected' : '' }}>RT 45</option>
                <option value="rt46" {{ old('rt') == 'rt46' ? 'selected' : '' }}>RT 46</option>
                <option value="rt47" {{ old('rt') == 'rt47' ? 'selected' : '' }}>RT 47</option>
                <option value="rt48" {{ old('rt') == 'rt48' ? 'selected' : '' }}>RT 48</option>
                <option value="rt49" {{ old('rt') == 'rt49' ? 'selected' : '' }}>RT 49</option>
                <option value="rt50" {{ old('rt') == 'rt50' ? 'selected' : '' }}>RT 50</option>
                <option value="rt51" {{ old('rt') == 'rt51' ? 'selected' : '' }}>RT 51</option>
                <option value="rt52" {{ old('rt') == 'rt52' ? 'selected' : '' }}>RT 52</option>
                <option value="rt53" {{ old('rt') == 'rt53' ? 'selected' : '' }}>RT 53</option>
                <option value="rt54" {{ old('rt') == 'rt54' ? 'selected' : '' }}>RT 54</option>
                <option value="rt55" {{ old('rt') == 'rt55' ? 'selected' : '' }}>RT 55</option>
                <option value="rt56" {{ old('rt') == 'rt56' ? 'selected' : '' }}>RT 56</option>
                <option value="rt57" {{ old('rt') == 'rt57' ? 'selected' : '' }}>RT 57</option>
                <option value="rt58" {{ old('rt') == 'rt58' ? 'selected' : '' }}>RT 58</option>
                <option value="rt59" {{ old('rt') == 'rt59' ? 'selected' : '' }}>RT 59</option>
                <option value="rt60" {{ old('rt') == 'rt60' ? 'selected' : '' }}>RT 60</option>
                <option value="rt61" {{ old('rt') == 'rt61' ? 'selected' : '' }}>RT 61</option>
                <option value="rt62" {{ old('rt') == 'rt62' ? 'selected' : '' }}>RT 62</option>
                <option value="rt62" {{ old('rt') == 'rt62' ? 'selected' : '' }}>RT 63</option>

            </select>

        </div>

        <div class="mb-4">
            <label class="block mb-1">Jenis Usaha</label>
            <select name="type" class="w-full border px-4 py-2 rounded">
                <option value="makanan" {{ old('type') == 'makanan' ? 'selected' : '' }}>Makanan</option>
                <option value="minuman" {{ old('type') == 'minuman' ? 'selected' : '' }}>Minuman</option>
                <option value="kerajinan" {{ old('type') == 'kerajinan' ? 'selected' : '' }}>Kerajinan</option>
                <option value="fashion" {{ old('type') == 'fashion' ? 'selected' : '' }}>Fashion</option>
                <option value="jasa" {{ old('type') == 'jasa' ? 'selected' : '' }}>Jasa</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="photo" class="block text-sm font-medium text-gray-700">Foto</label>
            <input type="file" name="photo" id="photo" class="w-full border px-4 py-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Instagram URL</label>
            <input type="text" name="instagram" value="{{ old('instagram') }}" placeholder="Instagram URL" class="w-full border px-4 py-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Facebook URL</label>
            <input type="text" name="facebook" value="{{ old('facebook') }}" placeholder="Facebook URL" class="w-full border px-4 py-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Nomor WhatsApp</label>
            <input type="text" name="whatsapp" value="{{ old('whatsapp') }}" placeholder="Nomor WhatsApp" class="w-full border px-4 py-2 rounded">
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded">Simpan</button>
    </form>

    <a href="{{ route('dashboard') }}" class="block mt-4 text-blue-500 hover:underline text-center">Kembali ke Dashboard</a>
</div>

</body>
</html>
