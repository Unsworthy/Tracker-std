@extends('layouts.app')

@section('title', 'List Alumni SMK Prakarya Internasional')

@section('content')
    <h2 class="text-3xl font-semibold mb-8 text-center text-gray-900">Daftar Alumni SMK Prakarya Internasional</h2>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded-lg shadow-lg transition-all duration-300">
            <thead class="bg-gradient-to-r from-blue-600 to-blue-400 text-white">
                <tr>
                    <th class="py-3 px-6 text-left font-semibold text-sm">ID</th>
                    <th class="py-3 px-6 text-left font-semibold text-sm">Nama</th>
                    <th class="py-3 px-6 text-left font-semibold text-sm">Email</th>
                    <th class="py-3 px-6 text-left font-semibold text-sm">Tahun Lulus</th>
                    <th class="py-3 px-6 text-center font-semibold text-sm">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumni as $alumnus)
                    <tr class="transition-transform duration-300 ease-in-out transform hover:scale-105 {{ $loop->even ? 'bg-white' : 'bg-gray-50' }} border-b border-gray-200">
                        <td class="py-4 px-6 text-gray-100">{{ $alumnus->id }}</td>
                        <td class="py-4 px-6 text-gray-800 font-medium">{{ $alumnus->username }}</td>
                        <td class="py-4 px-6 text-gray-600">{{ $alumnus->email }}</td>
                        <td class="py-4 px-6 text-gray-600">{{ $alumnus->year_graduated }}</td>
                        <td class="py-4 px-6 text-center">
                            <a href="{{ route('alumni.show', $alumnus->id) }}" class="text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-full transition duration-200">
                                <i class="fas fa-eye"></i> Lihat
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
