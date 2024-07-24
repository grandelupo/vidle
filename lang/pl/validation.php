<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Pole ::attribute musi być zaakceptowane',
    'accepted_if' => ':attribute musi być zaakceptowane gdy :other jest :value.',
    'active_url' => 'Pole :attribute nie jest poprawnym adresem URL.',
    'after' => 'Pole :attribute musi być datą po :date.',
    'after_or_equal' => 'Pole :attribute musi być datą równą lub po :date.',
    'alpha' => 'Pole :attribute może zawierać jedynie litery.',
    'alpha_dash' => 'Pole :attribute może zawierać jedynie litery, cyfry i myślniki.',
    'alpha_num' => 'Pole :attribute może zawierać jedynie litery i cyfry.',
    'array' => 'Pole :attribute musi być tablicą.',
    'before' => 'Pole :attribute musi być datą przed :date.',
    'before_or_equal' => 'Pole :attribute musi być datą równą lub przed :date.',
    'between' => [
        'numeric' => 'Pole :attribute musi zawierać się w granicach :min - :max.',
        'file' => 'Plik :attribute musi mieć rozmiar :min - :max kilobajtów.',
        'string' => 'Pole :attribute musi zawierać się w granicach :min - :max znaków.',
        'array' => 'Pole :attribute musi składać się z :min - :max elementów.',
    ],
    'boolean' => 'Pole :attribute musi mieć wartość prawda albo fałsz',
    'confirmed' => 'Potwierdzenie :attribute nie zgadza się.',
    'current_password' => 'Podane hasło jest nieprawidłowe.',
    'date' => 'Pole :attribute nie jest prawidłową datą.',
    'date_equals' => 'Pole :attribute musi być datą równą :date.',
    'date_format' => 'Pole :attribute nie jest w formacie :format.',
    'different' => 'Pola :attribute i :other muszą się różnić.',
    'digits' => 'Pole :attribute musi składać się z :digits cyfr.',
    'digits_between' => 'Pole :attribute musi mieć od :min do :max cyfr.',
    'dimensions' => 'Pole :attribute ma niepoprawne wymiary.',
    'distinct' => 'Pole :attribute ma zduplikowane wartości.',
    'email' => 'Pole :attribute musi być poprawnym adresem e-mail.',
    'ends_with' => 'Pole :attribute musi kończyć się jednym z następujących: :values',
    'exists' => 'Zaznaczony :attribute jest nieprawidłowy.',
    'file' => 'Pole :attribute musi być plikiem.',
    'filled' => 'Pole :attribute jest wymagane.',
    'gt' => [
        'numeric' => 'Pole :attribute musi być większe niż :value.',
        'file' => 'Plik :attribute musi być większy niż :value kilobajtów.',
        'string' => 'Pole :attribute musi być dłuższe niż :value znaków.',
        'array' => 'Pole :attribute musi mieć więcej niż :value elementów.',
    ],
    'gte' => [
        'numeric' => 'Pole :attribute musi być większe lub równe :value.',
        'file' => 'Plik :attribute musi być większy lub równy :value kilobajtów.',
        'string' => 'Pole :attribute musi być dłuższe lub równe :value znaków.',
        'array' => 'Pole :attribute musi mieć :value lub więcej elementów.',
    ],
    'image' => 'Pole :attribute musi być obrazkiem.',
    'in' => 'Zaznaczony :attribute jest nieprawidłowy.',
    'in_array' => 'Pole :attribute nie znajduje się w :other.',
    'integer' => 'Pole :attribute musi być liczbą całkowitą.',
    'ip' => 'Pole :attribute musi być prawidłowym adresem IP.',
    'ipv4' => 'Pole :attribute musi być prawidłowym adresem IPv4.',
    'ipv6' => 'Pole :attribute musi być prawidłowym adresem IPv6.',
    'json' => 'Pole :attribute musi być poprawnym ciągiem znaków JSON.',
    'lt' => [
        'numeric' => 'Pole :attribute musi być mniejsze niż :value.',
        'file' => 'Plik :attribute musi być mniejszy niż :value kilobajtów.',
        'string' => 'Pole :attribute musi być krótsze niż :value znaków.',
        'array' => 'Pole :attribute musi mieć mniej niż :value elementów.',
    ],
    'lte' => [
        'numeric' => 'Pole :attribute musi być mniejsze lub równe :value.',
        'file' => 'Plik :attribute musi być mniejszy lub równy :value kilobajtów.',
        'string' => 'Pole :attribute musi być krótsze lub równe :value znaków.',
        'array' => 'Pole :attribute musi mieć :value lub mniej elementów.',
    ],
    'max' => [
        'numeric' => 'Pole :attribute nie może być większe niż :max.',
        'file' => 'Plik :attribute nie może być większy niż :max kilobajtów.',
        'string' => 'Pole :attribute nie może być dłuższe niż :max znaków.',
        'array' => 'Pole :attribute nie może mieć więcej niż :max elementów.',
    ],
    'mimes' => 'Pole :attribute musi być plikiem typu: :values.',
    'mimetypes' => 'Pole :attribute musi być plikiem typu: :values.',
    'min' => [
        'numeric' => 'Pole :attribute musi być nie mniejsze od :min.',
        'file' => 'Plik :attribute musi mieć przynajmniej :min kilobajtów.',
        'string' => 'Pole :attribute musi mieć przynajmniej :min znaków.',
        'array' => 'Pole :attribute musi mieć przynajmniej :min elementów.',
    ],
    'multiple_of' => 'Pole :attribute musi być wielokrotnością :value',
    'not_in' => 'Zaznaczony :attribute jest nieprawidłowy.',
    'not_regex' => 'Format :attribute jest nieprawidłowy.',
    'numeric' => 'Pole :attribute musi być liczbą.',
    'password' => 'Hasło jest nieprawidłowe.',
    'present' => 'Pole :attribute musi być obecne.',
    'regex' => 'Format :attribute jest nieprawidłowy.',
    'required' => 'Pole :attribute jest wymagane.',
    'required_if' => 'Pole :attribute jest wymagane gdy :other jest :value.',
    'required_unless' => 'Pole :attribute jest wymagane chyba że :other jest w :values.',
    'required_with' => 'Pole :attribute jest wymagane gdy :values jest obecne.',
    'required_with_all' => 'Pole :attribute jest wymagane gdy :values jest obecne.',
    'required_without' => 'Pole :attribute jest wymagane gdy :values nie jest obecne.',
    'required_without_all' => 'Pole :attribute jest wymagane gdy żadne z :values nie jest obecne.',
    'same' => 'Pola :attribute i :other muszą być takie same.',
    'size' => [
        'numeric' => 'Pole :attribute musi mieć :size.',
        'file' => 'Plik :attribute musi mieć :size kilobajtów.',
        'string' => 'Pole :attribute musi mieć :size znaków.',
        'array' => 'Pole :attribute musi zawierać :size elementów.',
    ],
    'starts_with' => 'Pole :attribute musi zaczynać się jednym z następujących: :values',
    'string' => 'Pole :attribute musi być ciągiem znaków.',
    'timezone' => 'Pole :attribute musi być prawidłową strefą czasową.',
    'unique' => 'Taki :attribute już występuje.',
    'uploaded' => 'Nie udało się wgrać pliku :attribute.',
    'url' => 'Format :attribute jest nieprawidłowy.',
    'uuid' => 'Pole :attribute musi być poprawnym identyfikatorem UUID.',


    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
