<!DOCTYPE html>
<html>
<head>
    <title>Edit Berita</title>
</head>
<body>
    <h2>Edit Berita</h2>

    <form action="{{ route('news.update', $listNews->news_id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label>Judul</label><br>
            <input type="text" name="title" value="{{ $listNews->title }}" required>
        </div>

        <div>
            <label>Gambar Lama</label><br>
            @if($listNews->image)
                <img src="{{ asset('storage/' . $listNews->image) }}" width="120"><br>
            @endif
            <input type="hidden" name="old_image" value="{{ $listNews->image }}">

            <label>Upload Gambar Baru</label><br>
            <input type="file" name="foto" accept="image/*">
        </div>

        <div>
            <label>Konten</label><br>
            <textarea name="content" rows="5" required>{{ $listNews->content }}</textarea>
        </div>

        <button type="submit">Update</button>
        <a href="{{ route('news.show') }}">Batal</a>
    </form>
</body>
</html>
