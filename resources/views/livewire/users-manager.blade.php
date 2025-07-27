<div>
    <h2 class="text-xl font-bold mb-4">إدارة المستخدمين</h2>

    <form wire:submit.prevent="addUser" class="mb-4">
        <input type="text" wire:model="name" placeholder="اسم المستخدم" class="border p-2 mr-2">
        <input type="email" wire:model="email" placeholder="الإيميل" class="border p-2 mr-2">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2">إضافة</button>
    </form>

    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }} - {{ $user->email }}</li>
        @endforeach
    </ul>
</div>