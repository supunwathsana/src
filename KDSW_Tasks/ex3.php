<?php $title="Exercise 3" ;
include 'header.php'; ?>
<h4>Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an tag.<br><br></h4>
<form method="post" name="userRegForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
  <div class="mb-3">
    <label for="Firstname" class="form-label col-sm-3"><h4>First Name</h4></label>
    <div class="col-sm-6">
    <input type="Text" class="form-control" name = "Firstname" >
    </div>
  </div>
  <div class="mb-3">
    <label for="Lastname" class="form-label"><h4>Last Name</h4></label>
    <div class="col-sm-6">
    <input type="Text" class="form-control" name = "Lastname" >
  </div>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$Firstname=$_POST["Firstname"] ;
$Lastname=$_POST["Lastname"] ;


echo "<h6><strong><br><br>Hello $Firstname $Lastname, You are welcome to my site.<br><br></strong></h6>";
}
?>

<br><br><h4>String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). Join them together and print the length of the string.<br><br></h4>



<?php
$str1 = "Hello"; 
$str2 = "World";
$str_full= $str1.$str2;
echo "<h6>Length of the $str_full is : ".strlen($str_full)."</h6>";

?>

<h4><br><br> Number Addition: Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and an echo statement to output your answer.<br><br></h4>

<?php
$number1=298;
$number2=234;
$number3=46;
$total=$number1+$number2+$number3;
echo "<h6> Toal is : ".$total."</h6>"

?>

<h4><br><br> Browser Detection: Write a PHP script to detect the browser being used to view your pages. Hint: Use predefined variables: $_SERVER<br><br></h4>
<?php

function get_browser_name($user_agent)
{
    if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return 'Opera';
    elseif (strpos($user_agent, 'Edge')) return 'Edge';
    elseif (strpos($user_agent, 'Chrome')) return 'Chrome';
    elseif (strpos($user_agent, 'Safari')) return 'Safari';
    elseif (strpos($user_agent, 'Firefox')) return 'Firefox';
    elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) return 'Internet Explorer';
    
    return 'Other';
}



echo "<h6>My Browser is : " .get_browser_name($_SERVER['HTTP_USER_AGENT'])."</h6>";

?>



?>
<?php include 'footer.php'; ?>