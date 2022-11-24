@extends('layout')
@section('content')

<div class="bg-gray-300 min-h-screen">
    <div class="max-w-7xl mx-auto bg-white flex flex-col px-10 py-5 min-h-screen gap-10">
        <table class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 border">No</th>
                <th class="px-4 py-2 border">Judul</th>
                <th class="px-4 py-2 border">Konten</th>
                <th class="px-4 py-2 border">Aksi</th>
            </tr>
            <tr>
                @forelse ($konten as $index => $item)
                <th class="px-4 py-2 border">{{ $index + 1 }}</th>
                <th class="px-4 py-2 border">{{ $item->judul }}</th>
                <th class="px-4 py-2 border">{{ $item->konten }}</th>
                <th class="px-4 py-2 border">
                    <div>
                        <a href="">Edit</a>
                        <a href="">Delete</a>
                    </div>
                </th>
                @empty
                <th colspan="12" class="px-4 py-2 border text-center">Tidak Ada Konten</td>
                @endforelse
            </tr>
    </div>
</div>

@endsection