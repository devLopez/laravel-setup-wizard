<?php

return [
    'env' => [
        'slug'        => 'env',
        'title'       => 'Environment variables',
        'title_short' => 'Env.',
        'errors'      => [
            'cannot_write_file'  => 'Failed to write the .env file. Please check that you have the permission',
            'cannot_backup_file' => 'Failed to backup the current .env file, reverting to the sample file',
        ],
    ],

    'database' => [
        'slug'        => 'database',
        'title'       => 'Initialize database',
        'title_short' => 'Database',
    ],
];