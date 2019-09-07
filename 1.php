<?php


function bio (string $name, string $address, array $hobbies, bool $is_married, array $school, array $skills)
{
    $result = [
        "name" => $name,
        "address" => $address,
        "hobbies" => $hobbies,
        "is_married" => $is_married,
        "school" => $school,
        "skills" => $skills
    ];
    return json_encode($result);
}

//Expected Data
$name = "Rinaldi";
$address = "Jl. Ir H Juanda Lk.1";
$hobbies = ["Think", "Game", "Programming", "Reading"];
$is_married = FALSE;
$school = [
    "highSchool" => "SMK Negeri 4",
    "university" => NULL
];
$skills = ["PHP", "OOP", "SQL", "Javascript", "HTML", "CSS"];


//Caller
echo bio($name, $address, $hobbies, $is_married, $school, $skills);


