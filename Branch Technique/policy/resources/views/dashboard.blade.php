<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>

                <!-- Display Blogs -->
                <div class="mt-6">
                    <h3 class="text-xl font-semibold">Recent Blogs</h3>

                    @if($blogs->isEmpty())
                        <p>No blogs available.</p>
                    @else
                        <ul class="space-y-4">
                            @foreach($blogs as $blog)
                                <li class="border-b pb-4">
                                    <h4 class="text-lg font-bold">{{ $blog->title }}</h4>
                                    <p>{{ \Illuminate\Support\Str::limit($blog->content, 150) }}</p>
                                    {{-- <a href="{{ route(name: 'blogs.show', $blog->id) }}" class="text-blue-500">Read more</a> --}}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
