<html>
<head>
</head>
<body>

<?php

echo 'You are logged in! 111<br>';


$connect = mysqli_connect(
    'srv1503.hstgr.io',
    'u235058084_sw_user',
    'sw_Password1',
    'u235058084_sw_database'
);

$query = 'SELECT *
        FROM categories
        ORDER BY Name';

$result = mysqli_query($connect, $query);

while($record = mysqli_fetch_assoc($result))
{
    echo '<h2>'.$record['name'].'</h2> <hr>';
}

//            <div style="width: 200px; height: 200px; background-color: '.$record['rgb'].';"></div>
//echo phpinfo();

?>
</body>
</html>
