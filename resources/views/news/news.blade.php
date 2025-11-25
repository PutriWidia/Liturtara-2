<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Terbaru</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800">

    <div class="max-w-6xl mx-auto py-10 px-4">
        <h1 class="text-3xl font-bold text-center text-navy mb-8">Berita Terbaru</h1>

        @if($news->isEmpty())
            <p class="text-center text-gray-500">Belum ada berita yang tersedia.</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($news as $item)
                    <div class="bg-white shadow-md rounded-xl overflow-hidden hover:shadow-lg transition">
                        @if($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-48 object-cover">
                        @else
                            <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-400">
                                Tidak ada gambar
                            </div>
                        @endif

                        <div class="p-5">
                            <h3 class="text-xl font-semibold mb-2">{{ $item->title }}</h3>
                            <p class="text-gray-600 mb-4">{{ Str::limit($item->content, 120) }}</p>

                            <a href="{{ route('news.news_details', ['id' => $item->news_id]) }}"
                               class="inline-block bg-blue-900 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                                Baca Selengkapnya
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-8">
                {{ $news->links() }}
            </div>
        @endif
    </div>

</body>
</html>
