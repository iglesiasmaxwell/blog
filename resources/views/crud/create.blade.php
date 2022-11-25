@extends('layout')
@section('content')
    
    <div class="max-w-5-xl mx-auto">
        <form action="{{ route('crud.store') }}" method="post" class="flex flex-col gap-5 p-10">
        @csrf
        <label for="judul" class="gap-1 text-white">Judul</label>
        <input type="text" name="judul" id="judul" class="flex-w-full rounded-md p-4">
        <label for="konten" class="gap-1 text-white">Konten</label>
        <textarea name="konten" id="konten" cols="30" rows="10" class="flex-w-full rounded-md p-4"></textarea>
    </div>
        <button class="bg-green-500 hover:bg-green-600 px-5 py-2 rounded-md text-white ml-10 uppercase" type="submit">
            Simpan
        </button>
    </form>
</div>

@endsection