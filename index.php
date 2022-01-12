<?php
include "db.php";

/* V1 هنا يتم ارجاع كل الكولم */

// $select = " SELECT * FROM instructors ";
// $result = $mysqli->query($select);

/* V2 هنا يتم ارجاع كولم معينة اقوم انا بتحددها */

$select = "SELECT `id`, `name`, `img`, `email`, `role`, `salary` FROM `instructors` ";
$result = $mysqli->query($select);


// $row = $result->fetch_all(MYSQLI_ASSOC);
// echo json_encode($row);



// while ($row = $result->fetch_assoc()) {
//     $row['img'] = "http://localhost/GDSC/api/img/" . $row['img'];
//     $rows[] = $row;
// }
// echo json_encode($rows);





// $row = $result->fetch_all(MYSQLI_ASSOC);
//     foreach ($row as $key => $value) {
//         $rows[] = $value;
//         $rows[$key]['img'] = "http://localhost/GDSC/api/img/" . $rows[$key]['img'];
//     }
// echo json_encode($rows);

?>