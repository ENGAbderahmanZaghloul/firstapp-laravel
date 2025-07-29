<x-layout>
    <x-slot:heading>
        Employee info
    </x-slot:heading>

    <section class="container mt-5">
        <div class="card" style="width: 18rem;">

            <div class="card-body">
                <h5 class="card-title border rounded-full px-2 py-2 w-fit text-center">{{ $employee['id'] }}</h5>

                <div class="flex gap-2 items-center">
                    <h4>Name:</h4>
                    <a href="/employees/{{ $employee['id'] }}/employeeDetail"
                        class="card-title  inline-block !text-black !text-decoration-none font-bold hover:text-blue-800  transition duration-200 ease-in-out">
                        {{ $employee['name'] }}</a>
                </div>
                <div class="flex gap-2 items-center">
                    <h4>Salary:</h4>
                    <h6 class="card-subtitle font-bold ">{{ $employee['salary'] }}</h6>
                </div>
                <div class="flex gap-2 items-center">
                    <h4>Role:</h4>
                    <h6 class="card-subtitle font-bold">{{ $employee['role'] }}</h6>
                </div>
            </div>

        </div>
    </section>
</x-layout>
