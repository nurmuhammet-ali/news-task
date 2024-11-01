@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100">
        <div class="w-full max-w-lg px-8 py-10 bg-white rounded-2xl shadow-lg">
            <h2 class="mb-8 text-3xl font-extrabold text-center text-gray-800">Profile Settings</h2>
            @if (session('status'))
                <div class="mb-4 text-center text-sm font-medium text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('profile.update') }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <!-- Name Update -->
                <div>
                    <label class="block mb-1 text-sm font-semibold text-gray-600">Name</label>
                    <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}" required
                        class="w-full px-4 py-2 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    @error('name')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email Update -->
                <div>
                    <label class="block mb-1 text-sm font-semibold text-gray-600">Email</label>
                    <input type="email" name="email" value="{{ old('email', auth()->user()->email) }}" required
                        class="w-full px-4 py-2 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    @error('email')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Update -->
                <div>
                    <label class="block mb-1 text-sm font-semibold text-gray-600">New Password</label>
                    <input type="password" name="password"
                        class="w-full px-4 py-2 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    @error('password')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div>
                    <label class="block mb-1 text-sm font-semibold text-gray-600">Confirm New Password</label>
                    <input type="password" name="password_confirmation" class="w-full px-4 py-2 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <button type="submit"
                    class="w-full py-3 text-sm font-semibold text-white transition duration-200 bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Save Changes
                </button>
            </form>
        </div>
    </div>
@stop
