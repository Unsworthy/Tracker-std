@extends('layouts.app')

@section('title', 'Detail Alumni')

@section('content')
    <div class="container mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Detail Alumni</h1>

        <div class="bg-white shadow p-6 rounded-lg">
            <p><strong>Nama:</strong> {{ $alumni->username }}</p>
            <p><strong>Email:</strong> {{ $alumni->email }}</p>
            <p><strong>Role:</strong> {{ $alumni->roles_id == 3 ? 'Alumni' : 'User Lain' }}</p>
        </div>

        <a href="{{ route('alumni.index') }}" class="text-blue-500 hover:underline mt-4 block">Kembali ke List Alumni</a>
    </div>
@endsection
