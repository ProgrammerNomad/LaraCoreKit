<?php

return [
    // Host-only adoption metrics. Requires a running Laravel scheduler and persistent local storage.
    'collect_package_stats' => env('LARACOREKIT_COLLECT_STATS', false),
];
