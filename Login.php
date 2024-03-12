<?php
// Start session
session_start();

// Check if the user is already logged in
if (isset($_SESSION['user_id'])) {
    // Redirect to the main page or any other desired page
    header('Location: main2.php');
    exit;
}

// Check if the login form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the file containing database connection and user validation logic
    include_once "db_connection.php";

    // Retrieve username and password from the form submission
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform user authentication
    // This is a basic example. You should use secure methods like password hashing and prepared statements to prevent SQL injection.
    $query = "SELECT id FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connection, $query);

    // Check if the query returned a row, indicating successful login
    if (mysqli_num_rows($result) == 1) {
        // Fetch the user ID from the result
        $row = mysqli_fetch_assoc($result);
        $user_id = $row['id'];

        // Set session variables to indicate that the user is logged in
        $_SESSION['user_id'] = $user_id;

        // Redirect to the main page or any other desired page
        header('Location: main2.php');
        exit;
    } else {
        // Display an error message if login fails
        $error_message = "Invalid username or password. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutureForge.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<style>
    *{
        border-radius: 1.5mm;
        font-family: cursive;
    }

    body{
        background-image: url('wallpaper.jpg');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        opacity: 400%;
        
    }
    .account{
    margin-left: 33cm;
    margin-top: -2.7cm;
    color: white;
    width: 7cm;
    

}
.f1{
    
    width: 40%;
    margin-top:3.90cm;
    margin-left: 3cm;
    border: none;

}
.f2{
    width: 40%;
    margin-top: -10cm;
    margin-left: 23cm;
    padding: 0.3cm;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    animation: slideInRight 2s ease-in-out;
   height: 13cm;
   background: transparent;
   border: 2px solid rgba(255, 255,255, .5);
   border-radius: 20px;
   backdrop-filter: grayscale(100%);
   box-shadow: 0 0 90px regba(0, 0, 0, .5);
   display: flex;
   justify-content: center;
   align-items: center;
   overflow: hidden;
   transition: transform .5s ease, height .2s ease;
}
.f2 .icon-close {
    position: absolute;
    top: 0;
    right: 0;
    width: 45px;
    height: 45px;
    background-color: #162938;
    font-size: 2em;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    border-bottom-left-radius: 20px;
    cursor: pointer;
    z-index: 1;
 }
@keyframes slideInRight {
    from {
        opacity: 0;
        transform: translateX(-100%);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

h1{
    color: green;
}
.un{
    opacity: 80%;
    width: 12cm;
    height: 1cm;
    font-size: 1rem;
    padding: 3mm;
    
}
/* CSS */
.un:focus,
.pw:focus {
  border: 3px solid blue;
  outline: none; /* Remove the default outline */
}
.icon {
   position: absolute;
   right: 8px;
   font-size: 1.2em;
   color:blue;
   line-height: 57px;
}    
.pw{
    opacity: 80%;
    width: 12cm;
    height: 1cm;
    font-size: 1rem;
    padding: 3mm;
    

}
.logo{
    
    background-image: url(kyb.png);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    width: 3cm;
    height: 3.5cm;
    margin-left: 1.8cm;
    margin-top: 1cm;
    border: none;
}
.logo_meaning{
    border: none;
    width: 2cm;
    height: 2.5cm;
    margin-left: 5.2cm;
    margin-top: -2.5cm;
    color: white;
}
header{
    width: 103%;
    height: 4cm;
    margin-left: -1cm;
    margin-top: -1cm;
    margin-bottom: -3cm;
    background-color: #455d7a;
}
.f1p{
    font-size: 1.5rem;
}
.login{
    
    border: green;
    opacity: 80%;
    background-color: green;
    width: 8cm;
    height: 1cm;
    
}
.f2 h2 {
    color: rgb(41, 41, 101); /* Change color of the title */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Add a subtle shadow to the title */
    animation: fadeInDown 2s ease-in-out; /* Add a fade in down animation to the title */
}
.fp{
    width: 12cm;
    height: 1cm;
    border: none;
    background-color: transparent;
    

}
.cna{
    background-color: green;
    width: 7cm;
    height: 1cm;
}
.cp{
    
    margin-left: 27cm;
}
.fter{
   
   margin-left: 3cm;
   border: none;
   font-size: 1.2rem ;
}
footer{
    background-color: rgb(187, 181, 166);
    margin-left: -2cm;
    margin-bottom: -1cm;
    margin-right: -1cm;
    background-color: rgb(3, 31, 46);
}
.navigation  .btnLogin-popup {
   width: 130px;
   height: 50px;
   background: transparent;
   border: 2px solid #fff;
   outline: none;
   border-radius: 6px;
   cursor: pointer;
   font-size: 1.1em;
   color: #fff;
   font-weight: 500;
   float: right;
   margin-right:2cm;
   margin-top:-3cm;
   transition: .5s;

 }
 .navigation  .btnLogin-popup:hover {
   background: #fff;
   color: #162938;

 }
/* Correct the class name by adding a period before 'active' */
.f2.active-popup {
  transform: scale(1);
}
 /* Correct the class name by adding a period before 'active' */
.f2.active {
  height: 520px;
}
</style>
<header>
    <fieldset class="logo"></fieldset>

    <fieldset class="logo_meaning">
        Forge <br>Your <br> Future
    </fieldset>
  <nav class="navigation">
  <button class="btnLogin-popup"> Log In </button> 
  </nav>
</header>   

    <fieldset class="f1">

        <h1> Welcome on Future Forge   <br></h1>
        <br>
        <p style="color:white" class="f1p">
        This website have supprted by business managers while they was seeking <br>
        the best way to organise, manage, controll and be more profitable according to <br>
        daily basic profitable information that website publishes. 
        <br><br>

        </p>

    </fieldset>
    <div class="wrapper active-popup">
    <span class="icon-close">
            <ion-icon name="close-circle"></ion-icon>
        </span>
    <fieldset class="f2">
    <span class="icon-close">
            <ion-icon name="close-circle"></ion-icon>
        </span>
        <center>
            <h2>Log In</h2>
            <!-- Display error message if login fails -->
            <?php if (isset($error_message)) { ?>
                <p style="color: red;"><?php echo $error_message; ?></p>
            <?php } ?>
            <!-- Login form -->
        <br>                                   
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <span class="icon"> <i class="fas fa-envelope icon"></i></span>
        <input style="background-color:transparent;" type="text" name="username" class="un" placeholder="Please Enter your username" required="required"> <br><br>
        <span class="icon"><ion-icon name="lock-closed"></ion-icon></i></span>
        <input style="background-color:transparent;" type="password" name="password" class="pw" placeholder="Please Enter your password" required='required'> <br><br>
        <input type="submit" class="login" value="Log In"><br>
        <input type="button" class="fp" value="Forgot Password"> <br><br>
        </form>
        Don't have An Account! <a href="http://localhost/kyb/registration_form2.php" style="color:white;"> Sign Up </a>
    </fieldset> <p class="cp"><b>create a page</b> for celebrity, brand or business</p></center>
   </div>
    <footer>
    <?php include "footerog.php" ?>
</footer>
<script>
    const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');
const loginForm = document.querySelector('.form-box.login');
const registerForm = document.querySelector('.form-box.register');

registerLink.addEventListener('click', () => {
    wrapper.classList.add('active');
    registerForm.style.transform = 'translateX(0)'; // Move the registration form in from the right
    loginForm.style.transform = 'translateX(-400px)'; // Move the login form out to the left
  });
  

loginLink.addEventListener('click', () => {
  wrapper.classList.remove('active');
  loginForm.style.transform = 'translateX(0)';
  registerForm.style.transform = 'translateX(400px)';
});

btnPopup.addEventListener('click', () => {
  wrapper.classList.add('active-popup');
});

iconClose.addEventListener('click', () => {
  wrapper.classList.remove('active-popup');
});

</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>