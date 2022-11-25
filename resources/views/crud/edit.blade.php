@extends('layout')
@section('content')

<div class="mx-auto">
    <form 
        action="{{ route('crud.update', $konten->id) }}" 
        method="post"
        class="p-10"
    >
    @csrf
    @method('put')
        <div>
            <label for="judul" class="text-base text-white">Judul</label>
            <input 
                type="text" 
                class="flex w-full rounded-md p-4 my-5"
                name="judul"
                id="judul"
                value="{{ $konten->judul }}"
            >

        </div>
        <div>
            <label for="konten" class="text-base text-white">Konten</label>
            <textarea 
                class="flex w-full rounded-md p-4 mt-5"
                name="konten" 
                id="konten" 
                cols="30" 
                rows="10"
                value="{{ $konten->konten }}"
            ></textarea>

        </div>
        <a 
            class="bg-green-500 hover:bg-green-600 px-5 py-2 rounded-md mt-10 text-white" 
            type="submit"
        >SIMPAN</a>
    </form>
</div>

@endsection