
<form action="<?php echo $_SERVER['PHP_SELF']; ?>"method="post">
    <label>Email:</label>
    <input type="text" name="email"><br>

    <label>Subscribe:</label>
    <input type="checkbox" name="subscribe"><br>
    <input type="submit" name="submit" value="Send">

</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['email'] == "") {
        echo "You didn't input your email";
        header("Refresh: 4");
    } else if ($_POST['subscribe'] == 'on') {
        echo "Thank you for subscribing!";
    }
    else{
        header("Refresh: 2");
    }
}
?>
</body>
</html>
