<?php

require_once 'db/mysql.php';

$db = new Db_Mysql(array(
    'dbname' => 'shift_planning_test',
    'username' => 'root',
    'password' => '',
    'host' => 'localhost'
));

$db->connect();
//  // Insert
// if ($db->query(include 'insert.php')) {
//   echo '<script>console.log("User Added !")</script>';
//   echo 'User_id is: ' . $db->insertId();
// }


//  // Update
// if ($db->query(include 'update.php')) {
//   echo '<script>console.log("User Updated !")</script>';
// }

// //  Delete
// if ($db->query(include 'delete.php')) {
//   echo '<script>console.log("User Deleted !")</script>';
// }

$query = include 'select.php';
$result = $db->query($query);
while ($row = $db->fetch($result, MYSQLI_ASSOC)) {
    print $row['user_id'] . '.<br>Name is: '
        . $row['fullname'] . '<br>'
        . 'Email is: ' . $row['email'] . '<br>'
        . 'Countruy is: ' . $row['country'] . '<hr>';
}

// var_dump($db);
