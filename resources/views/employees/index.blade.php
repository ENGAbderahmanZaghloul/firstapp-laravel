<x-layout>
    <x-slot:heading>
        <div class="flex justify-between">
            Employees
            <x-button href="/employees/create">Create Employee</x-button>
        </div>

    </x-slot:heading>
    @foreach ($employees as $employee)
        <ul class="flex flex-col gap-2 text-left space-y-2 px-4">
            <li class="block border-1 rounded-lg px-4 py-3 ">
                <a href="/employees/{{ $employee['id'] }}"
                    class="!text-black !font-bold !text-decoration-none">{{ $employee['name'] }}</a>
            </li>
        </ul>
    @endforeach
    <div class="mt-4 px-10">
        {{ $employees->links() }}
    </div>
</x-layout>
