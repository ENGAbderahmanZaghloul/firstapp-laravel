<x-layout>
    <x-slot:heading>
        job
    </x-slot:heading>

    <section class="container mt-5">
        <div class="card" style="width: fit-content;">

            <div class="card-body">
                <h5 class="card-title border rounded-full px-2 py-2 w-fit text-center">{{ $job['id'] }}</h5>

                <div class="flex gap-2 items-center">
                    <h4>{{ $employee['name'] }}:</h4>
                    <h5 class="card-title">{{ $job['title'] }}</h5>
                </div>
                <h6 class="card-subtitle mb-2 text-body-secondary">{{ $job['salary'] }}</h6>
            </div>

        </div>
    </section>
</x-layout>
