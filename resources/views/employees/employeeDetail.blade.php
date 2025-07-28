<x-layout>
    <x-slot:heading>
        {{-- @foreach ($employees as $employee)
            {{ $employee['name'] }};
        @endforeach --}}
        Details
    </x-slot:heading>
    <section>
        <div class="card-body">
            <h5 class="card-title">{{ $employeeDetail['Country'] }}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $employeeDetail['experience'] }}</h6>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $employeeDetail['Age'] }}</h6>
        </div>
    </section>
</x-layout>
