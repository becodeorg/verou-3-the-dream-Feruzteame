
<?php
ini_set('display_errors','Off');
// value of different currency
$ero = 1;
$dollar = 0.88;
$rand = 0.058;
$rupee = 0.012;
$AUD = 0.63;
$pound = 0.056;

// value of the input
$value = $_GET["currency"];
$place = $_GET["place"];


if(empty($value)){
    $value = 0;
    $result = "please put some amount";
}


$result = "See Your Change Here.";

// checking of currency
switch (!empty($place)) {
    case "USA":
         $result =  "You have ". $dollar * $value." dollar";
        break;
    case "Europe":
        $result =   "You have ". $ero * $value. " ero";
        break;
    case "South Africa":
        $result =   "You have ". $rand * $value. " rand";
        break;
    case "India":
        $result =   "You have ". $rupee * $value. " rupee";
        break;
    case "Australia":
        $result =   "You have ". $AUD * $value." AUD";
        break;
    case "Egypt":
        $result =   "You have ". $pound * $value." pound";
        break;
    default:
        $result = "Please choose the Country name and Put amount of money !";
}
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" name="description" content="This is my personal web-site">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Change currency</title>
        <link rel="stylesheet" href="style.css">
   </head>
      <body>
      <div id="result">
          <?php echo $result ?>
      </div>
        <form action="" method="get">
            <input type="radio" id="place" name="place" value="USA"> USA
            <input type="radio" id="place" name="place" value="Europe"> Europe
            <input type="radio" id="place" name="place" value="South Africa"> South Africa
            <input type="radio" id="place" name="place" value="India"> India
            <input type="radio" id="place" name="place" value="Australia"> Australia
            <input type="radio" id="place" name="place" value="Egypt"> Egypt<br>
            <label for="currency" id="label" >Put amount of money</label><br><br>
            <input type="number"  name="currency" id="currency"><br>
            <input type="submit" value="Submit" id="submit">
        </form>

    </body>
</html>





