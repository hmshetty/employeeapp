<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Employee Listing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Employees</h1>
    <ul>
    <?php
        $json = file_get_contents("http://employeesvc");
        $employees = json_decode($json)->employees;
        
        foreach($employees as $emp){
            echo "<li>$emp</li>";
        }
    ?>
    </ul>
</body>
</html>