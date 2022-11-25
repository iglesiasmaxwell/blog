@extends('layout')
@section('content')

<div class="bg-gradient-to-br from-gray-200 to-gray-600 min-h-screen">
    <div class="max-w-7xl mx-auto bg-white flex flex-col px-10 py-5 min-h-screen gap-10">
        <table class="my-3 mx-6 bg-gradient-to-tr from-slate-100 to-zinc-200">
            <div class="flex justify-between mx-6">
                <p class="text-lg font-semibold">TABLE KONTEN</p>
                <a href="{{ route('crud.create') }}" class="bg-teal-300 hover:bg-teal-500 px-2 mt-1 pb-0.5 font-bold rounded-md ">+</a>
            </div>
            <tr>
                <th class="px-4 py-2 border border-gray-400">No</th>
                <th class="px-4 py-2 border border-gray-400">Judul</th>
                <th class="px-4 py-2 border border-gray-400">Konten</th>
                <th class="px-4 py-2 border border-gray-400">Aksi</th>
            </tr>
            @forelse ($konten as $index => $item)
            <tr>
                <td class="px-4 py-2 border border-gray-400 text-center">{{ $index + 1 }}</td>
                <td class="px-4 py-2 border border-gray-400">{{ $item->judul }}</td>
                <td class="px-4 py-2 border border-gray-400">{{ $item->konten }}</td>
                <td class="px-4 py-2 border border-gray-400">
                    <div>
                        <a href="{{ route('crud.edit', $item->id) }}" class="hover:text-teal-800 text-teal-600">Edit</a>
                        <form 
                            class="hover:text-red-700 text-red-500"
                            action="{{ route('crud.delete', $item->id) }}" 
                            method="post"
                            >
                            @csrf
                            @method('delete')
                            <button type="submit">
                                Delete
                            </button>
                        </form>
                    </div>
                </td>
                @empty
                <th colspan="12" class="px-4 py-2 border border-gray-100 text-center">Tidak Ada Konten</td>
                @endforelse
            </tr>
    </div>
</div>

@endsection