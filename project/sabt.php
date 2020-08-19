
<?php include ("meno.php")?>
<body>
<div class="loginbox">
    <p>صفحه ورود</p>
    <?php
    if (isset($_GET["empty"])){
        echo "<center style='color: red'>تمام فیلد ها باید پر باشد</center>";
    }



    ?>
    <form method="get" action="check.php">
        <label>نام کاربری</label>
        <input type="text" name="username" placeholder="username">
        <label>ایمیل </label>
        <input type="text" name="username" placeholder="Email">


        <label>رمز</label>
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="ورود" name="btnlogin">
    </form>

</div>
</body>
<script src="js.js"></script>
</html>

