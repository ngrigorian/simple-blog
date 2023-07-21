<?php

return [
    'required' => 'The :attribute field is required.',
    'email' => 'The :attribute must be a valid email address.',
    'unique' => 'The :attribute has already been taken.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'min' => [
        'string' => 'The :attribute must be at least :min characters.',
    ],
    'max' => [
        'string' => 'The :attribute may not be greater than :max characters.',
    ],
    'accepted' => 'The :attribute must be accepted.',
    'attributes' => [
        'name' => 'Name',
        'email' => 'Email',
        'password' => 'Password',
        'confPassword' => 'Confirm Password',
        'agreement' => 'Agreement',
    ]
];