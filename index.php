<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <title>KAVIA chat system</title>
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>KAVIA</header>
            <form action="">
                <div class="eror-txt">
                    This is an error
                </div>
                <div class="name-details">
                    <div class="field">
                        <label for="name">First Name</label>
                        <input type="text" name ="name" id="name" placeholder="Enter your first name">
                    </div>
                    <div class="field">
                        <label for="lname">Last Name</label>
                        <input type="text" name ="lname" id="lname" placeholder="Enter your last name">
                    </div>
                    <div class="field">
                        <label for="name">E-mail address</label>
                        <input type="email" name ="email" id="email" placeholder="Enter your E-mail address">
                    </div>
                    <div class="field">
                        <label for="password">Password</label>
                        <input type="password" name ="password" id="password" placeholder="Enter your password">
                    </div>
                    <div class="field">
                        <label for="password2">Confirm password</label>
                        <input type="password" name ="password2" id="password2" placeholder="Confirm your password">
                    </div>
                    <div class="field">
                        <label>Select image</label>
                        <input type="file">
                    </div>
                    <div class="field">
                        <input type="submit" name="submit" id="submit" value="CREATE">
                    </div>
                </div>
            </form>
            <div class="link">
                already have an account? <a href="">Login now</a>
            </div>
        </section>
    </div>
    
</body>
</html>