<x-layout>
    <x-slot:heading>
        job
    </x-slot:heading>

    <section class="container mt-5">
        <div class="card" style="width: 18rem;">
       
            <div class="card-body">
            <h5 class="card-title">{{ $job['id'] }}</h5>
            <h5 class="card-title">{{ $job['title'] }}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $job['salary'] }}</h6>
        </div>
        
        </div>
</section>
</x-layout>