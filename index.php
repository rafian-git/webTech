<!DOCTYPE html>
<html>
<head>
<style>
* {
    box-sizing: border-box;
}

input[type=text],[type=password], select, textarea{
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
    background-color: blue;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: skyblue;
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
  Username:<br>
  <input type="text" name="un" >
  <br>
 Password:<br>
  <input type="password" name="pw" >
  <br><br>
  <input type="submit" onclick="myFunction()" value="Submit">
</form> 
</div>
</body>
<script>
function validateForm() {
    var x = document.forms["myForm"]["un"].value;
	 var y = document.forms["myForm"]["pw"].value;
    if (x == "" || y=="") {
        alert("UserName & Password must be filled out");
        return false;
    }
	    
}
</script>

</html>
