<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    @foreach ($jobs as $job)
        <ul class="flex flex-col gap-2 text-left space-y-2 px-4 items-center">
            <li class="block border-1 rounded-lg px-4 py-3 w-[300px] text-center ">
                <a href="/jobs/{{ $job['id'] }}"
                    class="inline-block !text-black !font-bold !text-decoration-none hover:text-blue-800  transition duration-200 ease-in-out">
                    {{ $job['title'] }}
                </a>

            </li>
        </ul>
    @endforeach
</x-layout>
