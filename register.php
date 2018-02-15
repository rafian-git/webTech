<!DOCTYPE html>
<html>
<style>
* {
    box-sizing: border-box;
}

input[type=text],[type=password],[type=email],[type=tel], select, textarea{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: skyblue;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #purple;
}

.container {
	margin: auto;
    width: 50%;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 30px;
}

</style>
<body>
<div class="container">
<form name="myForm"  action="/action_page.php" onsubmit="return validateForm()" method="post">
  Fullname:<br>
  <input type="text" name="fn" >
  <br>

  Username:<br>
  <input type="text" name="un" required>
  <br>
 Password:<br>
  <input type="password" name="pw" required>
  <br>
  Re-type Password:<br>
  <input type="password" name="pw2" >
  <br>
  E-mail:<br>
  <input type="email" name="email" >
  <br>
  phone no:<br>
  <input type="tel" name="usrtel" >
  <br><br>
  <input type="submit" onclick="myFunction()" value="Submit">
</form> 
</div>
</body>
<script>
function validateForm() {
    var x = document.forms["myForm"]["un"].value;
    if (x == "") {
        alert("UserName must be filled out");
        return false;
    }
	    var y = document.forms["myForm"]["un"].value;
    if (y == "") {
        alert("Password must be filled out");
        return false;
    }
}
</script>

</html>
