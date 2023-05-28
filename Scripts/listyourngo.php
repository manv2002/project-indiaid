<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $ngocategory = $_POST['ngocategory'];
    $website = $_POST['website'];
    $image = $_POST['image'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $areaofinterest = $_POST['areaofinterest'];
    /*$ageing = $_POST['ageing'];
    $agricult = $_POST['agricult'];
    $animal = $_POST['animal'];
    $business = $_POST['business'];
    $childrenyouth = $_POST['childrenyouth'];
    $communication = $_POST['communication'];
    $conflictresolution = $_POST['conflictresolution'];
    $development = $_POST['development'];
    $education = $_POST['education'];
    $environment = $_POST['environment'];
    $family = $_POST['family'];
    $education = $_POST['education'];
    $healthnutrition = $_POST['healthnutrition'];
    $humanright = $_POST['humanright'];
    $indigenous = $_POST['indigenous'];
    $internationalorg = $_POST['internationalorg'];
    $labor = $_POST['labor'];
    $lawlegal = $_POST['lawlegal'];
    $narcotics = $_POST['narcotics'];
    $peacesec = $_POST['peacesec'];
    $population = $_POST['population'];
    $refugees = $_POST['refugees'];
    $relief = $_POST['relief'];
    $religion = $_POST['religion'];
    $science = $_POST['science'];
    $social = $_POST['social'];
    $sports = $_POST['sports'];
    $trade = $_POST['trade'];
    $transportation = $_POST['transportation'];
    $women = $_POST['women'];
    $other = $_POST['other'];*/

    #connection
    $conn = new mysqli('localhost','root','1234','listyourngo');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    } 
    else{
        $stmt = $conn->prepare("insert into ngoinfo(id,name,email,ngocategory,website,image,address,city,state,zip,country,phone,areaofinterest) values(0,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssssisss",$name,$email,$ngocategory,$website,$image,$address,$city,$state,$zip,$country,$phone,$areaofinterest);
        $stmt->execute();
        echo "Posted your NGO successfully";
        $stmt->close();
        $conn->close();
    }
?>