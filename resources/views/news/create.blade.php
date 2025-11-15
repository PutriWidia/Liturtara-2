<!DOCTYPE html>
<html>
<head>
    <title>Tambah Berita</title>
</head>
<body>
    <h2>Tambah Berita</h2>

    <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Judul</label><br>
            <input type="text" name="title" required>
        </div>

        <div>
            <label>Gambar</label><br>
            <input type="file" name="image" accept="image/*" required>
        </div>

        <div>
            <label>Konten</label><br>
            <textarea name="content" rows="5" required></textarea>
        </div>

        <button type="submit">Simpan</button>
        <a href="{{ route('news.show') }}">Batal</a>
    </form>
</body>
</html>
