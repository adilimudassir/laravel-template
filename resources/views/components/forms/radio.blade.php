@props([
'value' => null,
'name' => ''
])

{{
    html()->span()
        ->class('radio-custom')
        ->children([
            html()
                ->radio($name)
                ->value($value)
                ->attributes($attributes->whereStartsWith('wire')),

            html()
                ->label($value)
                ->for($name)
                ->id($name)
                ->class('mx-2')
        ])
}}