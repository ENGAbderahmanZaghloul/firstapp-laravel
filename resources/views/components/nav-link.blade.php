@prpos (['active' =>false] );

<?php
    $active =  request() -> is(ltrim($active , '/'));
?>
<a {{ $attributes->merge([
        'class' => ($active
            ? 'bg-gray-900 text-white'
            : 'text-gray-300 hover:bg-gray-700 hover:text-white'
        ) . ' rounded-md px-3 py-2 text-sm font-medium cursor-pointer',
        'aria-current' => $active ? 'page' : null
    ]) }}>
    {{ $slot }}
</a>


