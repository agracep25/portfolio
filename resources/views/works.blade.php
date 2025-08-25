@extends('layouts.app')

@section('container')

<div class="min-h-screen px-6 py-12">
    <h1 class="text-center text-4xl font-bold text-gray-800 mb-10">My Projects</h1>

    <div class="space-y-10">
        @foreach ($projects as $key => $project)
        <div class="flex flex-col md:flex-row items-center bg-white rounded-2xl shadow-md overflow-hidden">
            
            {{-- Left side image --}}
            <div class="w-full md:w-1/2">
                <img src="{{ asset('images/folio/gallery/' . $project['image']) }}" 
                     alt="{{ $project['title'] }}" 
                     class="w-full h-64 md:h-full object-cover">
            </div>

            {{-- Right side details --}}
            <div class="w-full md:w-1/2 p-6">
                <h2 class="text-2xl font-bold text-gray-900">{{ $project['title'] }}</h2>
                <p class="text-gray-600 mt-2">{{ $project['description'] }}</p>

                {{-- Tags --}}
                <div class="flex flex-wrap gap-2 mt-4">
                    @foreach ($project['tags'] as $tag)
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm">{{ $tag }}</span>
                    @endforeach
                </div>

                {{-- Button --}}
                <a href="{{ $project['link'] }}" 
                   class="inline-block mt-6 px-5 py-2 bg-gray-900 text-white rounded-lg hover:bg-gray-700 transition">
                    View Details
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
