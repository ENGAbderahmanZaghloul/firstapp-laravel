<x-layout>
    <x-slot:heading>
        Employee info
    </x-slot:heading>

    <section class="container mt-5">
        <div class="card" style="width: 18rem;">

            <div class="card-body">
                <h5 class="card-title">{{ $employee['id'] }}</h5>
                <h5 class="card-title">{{ $employee['name'] }}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">{{ $employee['salary'] }}</h6>
                <h6 class="card-subtitle mb-2 text-body-secondary">{{ $employee['role'] }}</h6>
            </div>

        </div>
    </section>
</x-layout>
