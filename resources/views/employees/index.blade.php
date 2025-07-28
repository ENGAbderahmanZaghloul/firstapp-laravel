<x-layout>
    <x-slot:heading>
        Employees
    </x-slot:heading>
    @foreach($employees as $employee)
    <ul class="flex flex-col gap-2 text-left">
        <li >
            <a href="/employees/{{$employee['id']}}">{{ $employee['name'] }}</a>
        </li>
    </ul>
    @endforeach
</x-layout>