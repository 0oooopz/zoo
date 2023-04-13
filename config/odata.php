<?php

return [
    'credentials' => [
        'url'       => 'https://ru.enote.link/08efd710-4709-478f-bac1-2d1b7e209599/odata/standard.odata/',
        'user_name' => 'odatatest',
        'password'  => 'RpG~WU%nX',
    ],

    'parameter' => 'Document_ДенежныйЧек',
    'filter'    => "Date ge datetime'2022-07-01T00:00:00' and Date lt datetime'2022-10-01T00:00:00'",
    'top'       => 10,
];