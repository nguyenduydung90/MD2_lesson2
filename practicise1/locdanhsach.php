<?php
include("Customer.php");
$person1=new Customer("Teo","01/01/1999","Laos");
$person2=new Customer("Tai","01/01/2000","Phú Quốc");
$person3=new Customer("Tinh","01/01/1991","Tây Nguyên");
$person4=new Customer("Tu","01/01/1997","Phnompenh");
$person5=new Customer("Tin","03/05/1995","Con Cuông");

$customer_list=[
        "0"=>$person1,
        "1"=>$person2,
        "2"=>$person3,
        "3"=>$person4,
        "4"=>$person5
];
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
    <input type="text" name="_name" placeholder="fullName">
    <input type="text" name="_birthday" placeholder="dayofbirth">
    <input type="text" name="_address" placeholder="address">
    <button type="submit">ADD</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_REQUEST["_name"];
    $birthday=$_REQUEST["_birthday"];
    $address=$_REQUEST["_address"];

    $customer=new Customer($name,$birthday,$address);
    array_push($customer_list,$customer);
}
?>

<table border="1">
    <caption><h2>Danh Sach Khach Hang</h2></caption>
    <tr>
        <th>STT</th><?php
        //$customer_list = array(
        //    "0" => array("name" => "Mai Văn Hoàn", "day_of_birth" => "1983/08/20", "address" => "Hà Nội", "image" => "images/img1.jpg"),
        //    "1" => array("name" => "Nguyễn Văn Nam", "day_of_birth" => "1983/08/21", "address" => "Bắc Giang", "image" => "images/img2.jpg"),
        //    "2" => array("name" => "Nguyễn Thái Hòa", "day_of_birth" => "1983/08/22", "address" => "Nam Định", "image" => "images/img3.jpg"),
        //    "3" => array("name" => "Trần Đăng Khoa", "day_of_birth" => "1983/08/17", "address" => "Hà Tây", "image" => "images/img4.jpg"),
        //    "4" => array("name" => "Nguyễn Đình Thi", "day_of_birth" => "1983/08/19", "address" => "Hà Nội", "image" => "images/img5.jpg")
        //);
        //?>
        <th>Name</th>
        <th>Birthday</th>
        <th>Adress</th>
        <th>Image</th>
    </tr>
    <?php
    foreach ($customer_list as $index=>$customer):?>
    <tr>
        <td><?php echo $index +1;?></td>
        <td><?php echo $customer->getName();?></td>
        <td><?php echo $customer->getBirthday();?></td>
        <td><?php echo $customer->getAddress();?></td>
        <td></td>
    </tr>
    <?php endforeach;?>
</table>

</body>
</html>
