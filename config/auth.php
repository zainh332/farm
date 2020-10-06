<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    */
// yeh upar jo guard hai by default jiska nam web hai yeh uska driver hai. har guard ka driver hota hai..
//web guard jo driver use karta hai wo session hai
    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'user' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
//provide plural lekhinge hamesha... ab humne admin ka guard to bana dia hai ab hame admin ka provider bhi to banana hai na .. to chalo phrrr
        // 'admin' => [
        //     'driver' => 'session',
        //     'provider' => 'admins',
        // ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */
//yeh providers hai .. yahan pe batana hota hai k user jo kese retrieve kiya jaega. 
//agar hame user ki info retrive karni ho lkn querybuilder k through to hun driver ki eloquent ki jaga database lekinge 'driver' => 'database', and model nai ayega table name ayega .

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        //ab yeh humne admin ka provider bana dia hai... q k hum admin , user aur farm admin direct user walay model se hi utha rahe hain to model ka nam sab k liye same hi rahega... ab yeh bananae k bad neche password wali section main hi add karna hai admin k liye
        // 'admins' => [
        //     'driver' => 'eloquent',
        //     'model' => App\Models\User::class,
        // ],
        // yeh eg hai agar query builder use karte hain to
        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        // 'admins' => [
        //     'provider' => 'admins',
        //     'table' => 'password_resets',
        //     'expire' => 60,
        //     'throttle' => 60,
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Here you may define the amount of seconds before a password confirmation
    | times out and the user is prompted to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */

    'password_timeout' => 10800,

];
