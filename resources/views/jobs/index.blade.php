<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    @foreach($jobs as $job)
        <li>
            <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                {{ $job['title'] }}
            </a>
        </li>
    @endforeach
</x-layout>
