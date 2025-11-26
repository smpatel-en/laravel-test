<x-layout>
    <h1 class="text-3xl font-bold">Hello, From jobs page!</h1>
    <ol>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job["id"] }}" class="hover:underline">
                    <strong>{{ $job["title"] }}</strong>
                    - {{ $job["location"] }}
                </a>
            </li>
        @endforeach
    </ol>
</x-layout>
