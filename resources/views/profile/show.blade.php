<!-- resources/views/profile/show.blade.php -->
@extends('layouts.app') <!-- Jika kamu punya layout umum -->

@section('content')
<div class="profile-container">
    <div class="profile-header">
        <h2 class="profile-title">Profil Pengguna</h2>
    </div>

    <div class="profile-details">
        <div class="profile-picture-container">
            <img src="{{ asset('storage/profile_pictures/' . $user->profile_picture) }}" alt="Foto Profil" class="profile-picture">
        </div>

        <div class="profile-info">
            <h3 class="profile-name">{{ $user->name }}</h3>
            <p class="profile-email">Email: {{ $user->email }}</p>
            <p class="profile-join-date">Bergabung sejak: {{ $user->created_at->format('d M Y') }}</p>
        </div>
    </div>

    <div class="profile-actions">
        <form action="{{ route('profile.edit') }}" method="get">
            <button type="submit" class="edit-profile-btn">Edit Profil</button>
        </form>
        
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>
</div>
@endsection
