<?php
// config/select_options.php

return [
    'request_types' => [
        '' => '',
        'ST' => 'Soil test',
        'SU' => 'Survey',
        'IN' => 'Inspection',
        'OJ' => 'Other Jobs',
        // Add more options as needed
    ],
    'soil_test' => [
        '' => '',
        'PRDT' => 'Pre Demolished Test',
        'PODT' => 'Post Demolished Test',
        'FP' => 'Footing Prob',
        'OJ' => 'Other Jobs',
        // Add more options as needed
    ],
    'surveys' => [
        '' => '',
        'FS' => 'Feature Survey',
        'AHD' => 'AHD - FFL indicator level to Plumbing riser',
        'RE' => 'Reastablishment',
        // Add more options as needed
    ],
    'feature_surveys' => [
        '' => '',
        'PRFS' => 'Pre Demolition Feature Survey',
        'POFS' => 'Post Demolition Feature Survey',
        // Add more options as needed
    ],
    'ahd_ffl' => [
        '' => '',
        'PRFS' => 'Pre Pour Mark',
        'POFS' => 'Post Pour Confirmation',
        // Add more options as needed
    ],
    'other_jobs' => [
        '' => '',
        'J1' => 'Job 1',
        'J2' => 'Job 2',
        'J3' => 'Job 3',
        // Add more options as needed
    ],
    // Add more select fields as needed
];