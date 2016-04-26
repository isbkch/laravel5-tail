<?php

return [

    'connections' => [

         // The environment name. You can use this value in the tail command.
        'production' => [
             // Hostname of the server where the logs are located
            'host'  => '',

             // Username to be used when connecting to the server where the logs are located
            'user' => '',

             // Full path to the directory where the logs are located
            'logDirectory' => '',
        ],
    ],

    // Change it to 'true' if you have grc (Generic Colouriser) installed in your system
    // To install grc on Debian based: sudo apt-get install grc
    'grc' => 'false'
];
