<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  


<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $groupErr = "";
$name = $email = $gender = $comment = $termsErr =$courses= $group = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["group"])) {
    $group = "";
  } else {
    $group = test_input($_POST["group"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["courses"])) {
    $courses = "";
  } else {
    $courses = test_input($_POST["courses"]);
  }


  if (empty($_POST["terms"])) {
    $termsErr = "You must agree to the terms";
  } else {
    $terms = test_input($_POST["terms"]);
  }

}

function test_input($data) {
  if (is_array($data)) {
    return array_map('test_input', $data);
  }
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Application name: AAST_BIS class registration</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Group: <input type="text" name="group">
  <span class="error"><?php echo $groupErr;?></span>
  <br><br>
  Class details: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Courses:
  <select name="courses[]" multiple>
    <option value="php">PHP</option>
    <option value="js">JS</option>
    <option value="mysql">MySQL</option>
    <option value="html">HTML</option>
  </select>
  <br><br>
  <label for="checked">Agree</label>
  <input  type="checkbox" id="checked" name="terms" value="agree">
  <span class="error">* <?php echo $termsErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Given Values are:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $group;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
echo is_array($courses) ? implode(', ', $courses) : '';
echo "<br>";
?>

</body>
</html>

