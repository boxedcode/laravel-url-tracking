<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Relative Tracking Path
    |--------------------------------------------------------------------------
    |
    | The base path for trackers to respond at. For instance, if your site url
    | is http://localhost and path is left a the default of '/track', the
    | redirect tracker will respond at and build links like:
    |
    | http://localhost/track/r/XXXXXXX
    |
    */
    'path' => env('TRACKING_PATH', '/track'),

];
