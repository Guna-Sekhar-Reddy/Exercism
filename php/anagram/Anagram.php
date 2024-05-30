



<?php

function detectAnagrams(string $word, array $candidates): array
{
    $data = [];

    $chars = array_count_values(str_split(mb_strtolower($word)));
    ksort($chars);

    foreach ($candidates as $candidate) {
        $candidateChars = array_count_values(str_split(mb_strtolower($candidate)));
        ksort($candidateChars);
        if ($chars === $candidateChars && mb_strtolower($word) != mb_strtolower($candidate)) {
            array_push($data, $candidate);
        }
    }

    return $data;
}