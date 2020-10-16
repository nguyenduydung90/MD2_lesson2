<?php
include_once 'data.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <div>
        <input type="text" name="user" placeholder="user name">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="phone" placeholder="phone number">
        <button type="submit">add</button>
    </div>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_REQUEST['user'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];

    $contact = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone
    ];
    $contact1 = Data::loadData();
    if ($name = null || $email = null || $phone = null) {
        echo 'Vui lòng nhập đầy đủ thông tin';
    } else {
                    array_push($contact1,$contact);
                    Data::saveData($contact1);

    }

}
?>
</body>
</html>
