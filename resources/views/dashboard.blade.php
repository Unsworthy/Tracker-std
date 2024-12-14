@extends('layouts.app')

@section('title', 'Dashboard Tracer Study')

@section('content')
    <section id="home" class="mb-12">
        <h2 class="section-title text-primary">Selamat Datang di Dashboard Tracer Study</h2>
        <p class="mt-4 text-base text-gray-600">Gunakan dashboard ini untuk melacak kemana alumni melanjutkan pendidikan atau karir mereka.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
            <div class="card p-6 bg-white">
                <h3 class="text-xl font-semibold text-gray-700 mb-4">Melanjutkan Pendidikan</h3>
                <p class="text-gray-600">Lihat data alumni yang melanjutkan ke perguruan tinggi.</p>
            </div>
            <div class="card p-6 bg-white">
                <h3 class="text-xl font-semibold text-gray-700 mb-4">Karir Alumni</h3>
                <p class="text-gray-600">Informasi mengenai karir yang ditempuh oleh alumni.</p>
            </div>
            <div class="card p-6 bg-white">
                <h3 class="text-xl font-semibold text-gray-700 mb-4">Statistik Alumni</h3>
                <p class="text-gray-600">Analisis statistik alumni berdasarkan jurusan dan karir.</p>
            </div>
        </div>
    </section>
    
    <section id="data-alumni" class="mb-12">
        <h2 class="section-title text-primary">Data Alumni</h2>
        
        <table class="min-w-full bg-white mt-4 border border-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="py-2 px-4 text-left text-gray-600">Nama</th>
                    <th class="py-2 px-4 text-left text-gray-600">Tahun Lulus</th>
                    <th class="py-2 px-4 text-left text-gray-600">Jurusan</th>
                    <th class="py-2 px-4 text-left text-gray-600">Melanjutkan ke</th>
                    <th class="py-2 px-4 text-left text-gray-600">Pekerjaan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumni as $alumnus)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $alumnus->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $alumnus->year_graduated }}</td>
                        <td class="py-2 px-4 border-b">{{ $alumnus->major }}</td>
                        <td class="py-2 px-4 border-b">{{ $alumnus->further_study }}</td>
                        <td class="py-2 px-4 border-b">{{ $alumnus->job }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
