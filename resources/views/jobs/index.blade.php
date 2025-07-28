<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    @foreach ($jobs as $job)
        <ul class="flex flex-col gap-2 text-left">
            <li>
                <a href="/jobs/{{ $job['id'] }}"
                    class="inline-block text-blue-600 !decoration-none font-medium hover:text-blue-800  transition duration-200 ease-in-out">
                    {{ $job['title'] }}
                </a>

            </li>
        </ul>
    @endforeach
</x-layout>
