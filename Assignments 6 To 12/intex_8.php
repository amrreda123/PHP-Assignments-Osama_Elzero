<?php

echo "<pre>";
print_r([
    "FrontEnd" => [
        "HTML", 
        "CSS", 
        "JS" => [
                "Vuejs" =>[
                    "2" => "v2",
                    "3" => "v3"
                ], 
                "Reactjs",
                "Svelte"
        ]
    ],
    "BackEnd" => [
        "PHP",
        "MySql",
        "Security"
    ],
    "Git",
    "GitHub",
    "Testing"=>[
        "Unit Testing",
        "End To End Testing",
        "Integration Testing"
    ]
]);
echo "</pre>";
?>