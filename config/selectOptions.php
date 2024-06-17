<?php
// config/select_options.php

return [
    'request_types' => [
        '' => 'Select a option',
        'ST' => 'Soil test',
        'SU' => 'Survey',
        'IN' => 'Inspection',
        'OJ' => 'Other Jobs',
        // Add more options as needed
    ],
    'soil_test' => [
        '' => 'Select a option',
        'PRDT' => 'Pre Demolished Test',
        'PODT' => 'Post Demolished Test',
        'FP' => 'Footing Prob',
        'OJ' => 'Other Jobs',
        // Add more options as needed
    ],
    'surveys' => [
        '' => 'Select a option',
        'FS' => 'Feature Survey',
        'AHD' => 'AHD - FFL indicator level to Plumbing riser',
        'RE' => 'Reastablishment',
        // Add more options as needed
    ],
    'feature_surveys' => [
        '' => 'Select a option',
        'PRFS' => 'Pre Demolition Feature Survey',
        'POFS' => 'Post Demolition Feature Survey',
        // Add more options as needed
    ],
    'ahd_ffl' => [
        '' => 'Select a option',
        'PRFS' => 'Pre Pour Mark',
        'POFS' => 'Post Pour Confirmation',
        // Add more options as needed
    ],
    'other_jobs' => [
        '' => 'Select a option',
        'J1' => 'Job 1',
        'J2' => 'Job 2',
        'J3' => 'Job 3',
        // Add more options as needed
    ],
    'status' => [
        '' => 'Select a option',
        'Ongoing' => 'Ongoing',
        'Confirmed' => 'Confirmed',
        'Hold' => 'Hold',
        'In-progress' => 'In-progress',
        'Completed' => 'Completed',
        // Add more options as needed
    ],
    // Add more select fields as needed
];