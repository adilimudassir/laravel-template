{{ html()->label(ucwords(str_replace("_", " ",$name)))
    ->class('form-label fs-6 fw-bolder text-dark')
    ->for($name)
}}
{{ html()->date($name)
    ->class('form-control form-control-lg form-control-solid')
    ->classIf($errors->has($name), 'is-invalid')
    ->attributes($attributes->whereStartsWith('wire'))
}}
@error($name)
{{ html()->span()->text($message)
        ->class('invalid-feedback font-weight-bold')
        ->attribute('role', 'alert')
    }}
@enderror