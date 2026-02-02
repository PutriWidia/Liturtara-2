@extends('layout.default')
@section('title', 'Super Admin Dashboard')

@section('content')
@include('superadmin.layout.navbar_superadmin')

<!-- HERO SECTION -->
<section class="relative w-full h-[380px] overflow-hidden rounded-b-3xl mb-12">
    <img src="{{ asset('image/Group 770.png') }}"
         class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/40"></div>

            <div class="absolute bottom-8 left-10">
                <h1 class="text-3xl font-bold text-navy">Super Admin</h1>
                <p class="text-gray-700 text-sm mt-2">
                    Kelola reviewer, aktivitas, dan sistem Liturtara
                </p>
            </div>
</section>

<!-- TAB MENU -->
<section class="bg-white shadow-md -mt-6 relative z-10">
    <div class="max-w-7xl mx-auto px-6">
        @php
            $active = 'text-navy border-b-2 border-navy pb-2';
            $inactive = 'text-gray-500 hover:text-navy';
        @endphp

        <nav class="flex gap-8 py-4 text-sm font-semibold">
            <a href="{{ route('superadmin.dashboard') }}"
               class="{{ request()->routeIs('superadmin.dashboard') ? $active : $inactive }}">
                Approve Reviewer
            </a>

            <a href="#"
               class="{{ request()->is('superadmin/report*') ? $active : $inactive }}">
                Report Reviewer
            </a>

            <a href="#"
               class="{{ request()->is('superadmin/token*') ? $active : $inactive }}">
                Transfer Token
            </a>

            <a href="{{ route('superadmin.log-activity') }}"
               class="{{ request()->routeIs('superadmin.log-activity') ? $active : $inactive }}">
                Log Activity
            </a>

            <a href="{{ route('superadmin.news.index') }}"
               class="{{ request()->routeIs('superadmin.news.*') ? $active : $inactive }}">
                News
            </a>
        </nav>
    </div>
</section>

<!-- CONTENT -->
<section class="bg-gray-50 py-10">
    <div class="max-w-7xl mx-auto px-6">

        <!-- HEADER -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-bold text-navy">News Management</h2>

            <button onclick="openCreateModal()"
                class="bg-navy text-white px-5 py-2 rounded-lg text-sm hover:bg-blue-800">
                + Add News
            </button>
        </div>

        <!-- TABLE -->
        <div class="bg-white rounded-xl shadow overflow-hidden">
            <table class="w-full text-sm">
                <thead class="bg-gray-100 text-gray-600">
                    <tr>
                        <th class="px-6 py-3 text-left">Image</th>
                        <th class="px-6 py-3 text-left">Title</th>
                        <th class="px-6 py-3 text-left">Author</th>
                        <th class="px-6 py-3 text-left">Status</th>
                        <th class="px-6 py-3 text-left">Created</th>
                        <th class="px-6 py-3 text-left">Last Modified</th>
                        <th class="px-6 py-3 text-center">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($news as $item)
                        <tr class="border-t">

                            <td class="px-6 py-4">
                                <img src="{{ asset('storage/'.$item->image) }}"
                                     class="w-20 h-14 object-cover rounded">
                            </td>

                            <td class="px-6 py-4 font-semibold text-navy">
                                {{ $item->title }}
                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                {{ $item->author }}
                            </td>

                            <td class="px-6 py-4">
                                <span class="px-3 py-1 rounded-full text-xs
                                    {{ $item->status === 'published'
                                        ? 'bg-green-100 text-green-700'
                                        : 'bg-gray-200 text-gray-600' }}">
                                    {{ ucfirst($item->status) }}
                                </span>
                            </td>

                            <td class="px-6 py-4 text-gray-500">
                                {{ $item->created_at?->format('d M Y') }}
                            </td>

                            <td class="px-6 py-4 text-gray-500">
                                {{ $item->updated_at?->format('d M Y, H:i') }}
                            </td>

                            <td class="px-6 py-4 flex justify-center gap-3">
                                <button
                                    onclick="openEditModal(
                                        {{ $item->news_id }},
                                        '{{ addslashes($item->title) }}',
                                        '{{ addslashes($item->content) }}',
                                        '{{ $item->status }}',
                                        '{{ asset('storage/'.$item->image) }}'
                                    )"
                                    class="text-blue-600 hover:underline">
                                    Edit
                                </button>

                                <button
                                    onclick="openDeleteModal(
                                        {{ $item->news_id }},
                                        '{{ addslashes($item->title) }}',
                                        '{{ $item->author }}',
                                        '{{ $item->created_at?->format('d F Y') }}',
                                        '{{ asset('storage/'.$item->image) }}'
                                    )"
                                    class="text-red-600 hover:underline">
                                    Delete
                                </button>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7"
                                class="text-center py-8 text-gray-500">
                                Belum ada news
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- PAGINATION -->
        <div class="mt-6">
            {{ $news->links() }}
        </div>

    </div>
</section>

<!-- MODAL CREATE -->
<div id="createModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="bg-white rounded-xl w-full max-w-xl p-6">

            <h2 class="text-lg font-bold text-navy mb-4">Add News</h2>

            <form action="{{ route('superadmin.news.store') }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label class="text-sm font-semibold">Title</label>
                    <input type="text" name="title"
                           class="w-full mt-1 px-4 py-2 border rounded-lg"
                           required>
                </div>

                <div class="mb-4">
                    <label class="text-sm font-semibold">Image</label>
                    <input type="file" name="image"
                           class="w-full mt-1" required>
                </div>

                <div class="mb-4">
                    <label class="text-sm font-semibold">Content</label>
                    <textarea name="content" rows="4"
                        class="w-full mt-1 px-4 py-2 border rounded-lg"
                        required></textarea>
                </div>

                <div class="mb-6">
                    <label class="text-sm font-semibold">Status</label>
                    <select name="status"
                        class="w-full mt-1 px-4 py-2 border rounded-lg" required>
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                </div>

                <!-- BUTTON -->
                <div class="flex justify-end gap-3 mt-6">
                    <button type="button"
                        onclick="closeCreateModal()"
                        class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full text-sm font-semibold hover:bg-gray-300 transition">
                        Cancel
                    </button>

                    <button type="submit"
                        class="px-6 py-2 bg-navy text-white rounded-full text-sm font-semibold hover:bg-blue-800 transition">
                        Save
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- MODAL EDIT NEWS -->
<div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="bg-white rounded-xl w-full max-w-xl p-6">

            <h2 class="text-lg font-bold text-navy mb-4">Edit News</h2>

            <form id="editForm" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- TITLE -->
                <div class="mb-4">
                    <label class="text-sm font-semibold">Title</label>
                    <input type="text" name="title" id="editTitle"
                        class="w-full mt-1 px-4 py-2 border rounded-lg" required>
                </div>

                <!-- IMAGE -->
                <div class="mb-4">
                    <label class="text-sm font-semibold">Current Image</label>
                    <img id="editPreview"
                         class="w-32 h-24 object-cover rounded mb-2">

                    <input type="file" name="image" class="w-full text-sm">
                </div>

                <!-- CONTENT -->
                <div class="mb-4">
                    <label class="text-sm font-semibold">Content</label>
                    <textarea name="content" id="editContent" rows="4"
                        class="w-full mt-1 px-4 py-2 border rounded-lg"
                        required></textarea>
                </div>

                <!-- STATUS -->
                <div class="mb-6">
                    <label class="text-sm font-semibold">Status</label>
                    <select name="status" id="editStatus"
                        class="w-full mt-1 px-4 py-2 border rounded-lg">
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                </div>

                <!-- BUTTON -->
                <div class="flex justify-end gap-3">
                    <button type="button"
                        onclick="closeEditModal()"
                        class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full text-sm font-semibold hover:bg-gray-300 transition">
                        Cancel
                    </button>

                    <button type="submit"
                        class="px-6 py-2 bg-navy text-white rounded-full text-sm font-semibold hover:bg-blue-800 transition">
                        Update
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- MODAL DELETE NEWS -->
<div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="bg-white rounded-xl w-full max-w-2xl p-6">

            <!-- HEADER
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-bold text-navy">Delete News</h2>
                <button onclick="closeDeleteModal()"
                    class="text-sm text-gray-500 hover:text-navy">
                    Close
                </button>
            </div> -->

            <hr class="mb-4">

            <!-- WARNING TEXT -->
            <p class="text-sm text-gray-600 mb-4">
                Are you sure want to delete this news?
                <span class="font-semibold text-red-600">
                    This action cannot be undone.
                </span>
            </p>

            <!-- NEWS PREVIEW -->
            <div class="flex items-center gap-4 border rounded-xl p-4 mb-6">
                <img id="deleteImage"
                     class="w-20 h-14 object-cover rounded-lg">

                <div>
                    <h3 id="deleteTitle"
                        class="font-semibold text-navy text-sm">
                    </h3>
                    <p id="deleteAuthor"
                       class="text-xs text-gray-500">
                    </p>
                </div>
            </div>

            <!-- ACTION -->
            <form id="deleteForm" method="POST" class="flex justify-end gap-3">
                @csrf
                @method('DELETE')

                    <button type="button"
                        onclick="closeDeleteModal()"
                        class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full text-sm font-semibold hover:bg-gray-300 transition">
                        Cancel
                    </button>

                    <button type="submit"
                        class="px-6 py-2 bg-navy text-white rounded-full text-sm font-semibold hover:bg-blue-800 transition">
                        Delete
                    </button>
            </form>

        </div>
    </div>
</div>

<script>
    function openCreateModal() {
        document.getElementById('createModal').classList.remove('hidden');
    }
    function closeCreateModal() {
        document.getElementById('createModal').classList.add('hidden');
    }
</script>

<script>
    function openEditModal(id, title, content, status, imageUrl) {
        const modal = document.getElementById('editModal');
        const form  = document.getElementById('editForm');

        form.action = `/superadmin/news/${id}`;

        document.getElementById('editTitle').value   = title;
        document.getElementById('editContent').value = content;
        document.getElementById('editStatus').value  = status;
        document.getElementById('editPreview').src   = imageUrl;

        modal.classList.remove('hidden');
    }

    function closeEditModal() {
        document.getElementById('editModal').classList.add('hidden');
    }
</script>

<script>
    function openDeleteModal(id, title, author, date, imageUrl) {
        const modal = document.getElementById('deleteModal');
        const form  = document.getElementById('deleteForm');

        form.action = `/superadmin/news/${id}`;

        document.getElementById('deleteTitle').innerText =
            title;
        document.getElementById('deleteAuthor').innerText =
            `${author} • ${date}`;
        document.getElementById('deleteImage').src =
            imageUrl;

        modal.classList.remove('hidden');
    }

    function closeDeleteModal() {
        document.getElementById('deleteModal').classList.add('hidden');
    }
</script>

@include('layout.footer')
@endsection
