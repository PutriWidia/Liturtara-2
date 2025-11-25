@extends('layout.default')
@section('title', 'Upload Verification File')
@section('content')
    <div class="min-h-screen bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-md p-6">
            <h1 class="text-2xl font-bold text-gray-900 mb-6">Upload Verification File</h1>
            
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-4">
                    <label for="file" class="block text-sm font-medium text-gray-700 mb-2">
                        Select File
                    </label>
                    <input 
                        type="file" 
                        id="file" 
                        name="file"
                        required
                        class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                    />
                    @error('file')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button 
                    type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md transition duration-200"
                >
                    Upload
                </button>
            </form>
        </div>
    </div>
@endsection
