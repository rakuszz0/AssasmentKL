<?php

// function answer($data, $n) {
//     $freq = array_count_values($data)

//     $result = array_filter($data, function($id) use  ($freq, $n) {
//         return $freq[$id] == $n;
//     })

//     return array_values($result);

// }

// print_r(answer([5,10,15,10,7],1))

function answer(array $data, int $n): array {
    $counts = array_count_values($data);
    return array_values(array_filter($data, fn($id) => $counts[$id] <= $n ));
}
echo "[" . implode(", ", answer([5, 10, 15, 10, 7], 1)) . "]";


// function answer($data, $n) {
//     $counts = array_reduce($data,  function($carry, $item) {
//         $carry[$item] = ($carry[$item] ?? 0) + 1;
//         return $carry;
//     }, []);
//     return array_values(array_filter($data, funtion($x) use ($counts, $n)
//     {
//         return $counts[$x] == $n;

//     }));  
// }

// print_r(answer([5,10,15,10,7],1))

?>