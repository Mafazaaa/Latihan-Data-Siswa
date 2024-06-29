<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-300 p-8">

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="bg-white rounded-lg shadow-md p-6 max-w-2xl mx-auto px-20">
            <h2 class="text-xl font-bold mb-4 text-center">Tambah Data</h2>
            <div class="mb-4">
                <label for="label1" class="block text-gray-700 font-bold mb-2">Nama</label>
                <input type="text" name="nama" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" autocomplete="off" required>
            </div>
            <div class="mb-4">
                <label for="label2" class="block text-gray-700 font-bold mb-2">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" autocomplete="off" required>
            </div>
            <div class="mb-4">
                <label for="label3" class="block text-gray-700 font-bold mb-2">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-7000 leading-tight focus:outline-none focus:shadow-outline" autocomplete="off" required>
            </div>
            <div class="mb-4">
                <label for="label4" class="block text-gray-7000 font-bold mb-2">Sekolah</label>
                <input type="text" name="sekolah" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" autocomplete="off" required>
            </div>
            <div class="mb-4">
                <label for="label4" class="block text-gray-700 font-bold mb-2">Keterangan</label>
                <textarea type="text" name="keterangan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" autocomplete="off"></textarea>
            </div>
            <div class="flex justify-between mt-4 pt-4 pb-4 pl-40 pr-40">
                <a href="/students">
                    <button type="button" class="bg-gray-700 hover:bg-gray-400 text-white font-bold py-2 px-4 rounded focus:outline-none    focus-shadow-outline">Batal</button>
                </a>
                <button type="submit" class="bg-gray-700 hover:bg-gray-400 text-white font-bold py-2 px-4 rounded ml-4 focus:outline-none focus:shadow-outline">Simpan</button>
            </div>
        </div>

    </form>
    
</body>
</html>