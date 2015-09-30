<?php

return [

    // The title appears on the default kwiki view, title.
    'title'  => env('KWIKI_TITLE', 'Kwiki'),

    // The folder you store your markdown pages,
    // relative to your project root.
    'folder' => env('KWIKI_FOLDER', 'kwiki'),

    // The route prefix to ue for the kwiki route group.
    'route'  => env('KWIKI_ROUTE', 'kwiki'),

    // The view relative to resources/views directory
    // dot notation folder separation.
    'view'   => env('KWIKI_VIEW', 'kwiki::page'),

];
