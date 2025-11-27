<x-layout>
    <h1 class="text-3xl font-bold">Hello, From jobs page!</h1>
    <div class="my-4 grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job["id"] }}" class="hover:underline">
                {{ $job["id"] }}.
                <strong>{{ $job["title"] }}</strong>
                - {{ $job["location"] }}
            </a>
        @endforeach
    </div>
</x-layout>
