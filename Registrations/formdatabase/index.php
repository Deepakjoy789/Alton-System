<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <h1> HTML FORM </h1>
    <div class="conatainer">
        <form action="index.php" method="POST" >
            <div>
                <label> Name </label>
                <input type="text" name="name" placeholder="Enter Name">
            </div>
            <div>
                <label> Email </label>
                <input type="email" name="email" placeholder="Enter mail">
            </div>
            <div>
                <label> Gender</label>
                <input type="radio" name="gender" value="M"> Male
                <input type="radio" name="gender" VALUE="F"> Female
            </div> 
            <div class ="input field"> <input type="submit" value="Register" class="btn" name="register">
        </form></div>

</body>
</html>
