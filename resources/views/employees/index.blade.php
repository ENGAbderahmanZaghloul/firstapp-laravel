<x-layout>
    <x-slot:heading>
        Employees
    </x-slot:heading>
    @foreach($employees as $employee)
    <li>
        <a href="/employees/{{$employee['id']}}">{{ $employee['name'] }}</a>
    </li>
    @endforeach
</x-layout>