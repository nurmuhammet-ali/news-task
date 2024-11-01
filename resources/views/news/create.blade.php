@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100">
        <div class="w-full max-w-lg px-8 py-10 bg-white rounded-2xl shadow-lg">
            <h2 class="mb-8 text-3xl font-extrabold text-center text-gray-800">Add news</h2>
            @if (session('status'))
                <div class="mb-4 text-center text-sm font-medium text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('news.create') }}" method="POST" class="space-y-4" enctype="multipart/form-data">
                @csrf

                <!-- Image -->
                <div>
                    <label class="block mb-1 text-sm font-semibold text-gray-600">Image</label>
                    <input type="file" value="{{ old('image') }}" name="image" class="file-input file-input-bordered w-full max-w-xs border p-2 rounded-lg w-full" />

                    @error('image')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Name -->
                <div>
                    <label class="block mb-1 text-sm font-semibold text-gray-600">Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" required class="w-full px-4 py-2 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent shadow">

                    @error('name')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Description -->
                <div>
                    <label class="block mb-1 text-sm font-semibold text-gray-600">Description</label>

                    <textarea name="description" class="textarea textarea-bordered border shadow p-2 rounded-lg w-full" placeholder="Description">{{ old('description') }}</textarea>

                    @error('description')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="w-full py-3 text-sm font-semibold text-white transition duration-200 bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Add news
                </button>
            </form>
        </div>
    </div>
@stop
