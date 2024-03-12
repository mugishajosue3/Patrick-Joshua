<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="short cut icon" type="x-icon" href="kyb.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutureForge.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
   
    <!-- what are remaining are:
     1. account icon and the name of account owner name
     2. replace words like fb, youtube and others with respective icons
     3. replace these field with most needed professional fields about business managers websites
     
    -->
<style>
    *{
        border-radius: 1.5mm;
        font-family: cursive;
    }

    body{
        background-image: url('resize.jpg');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        opacity: 400%;      
    }
.f1{   
    width: 25%;
    margin-top:6cm;
    margin-left: 3cm;
    border: none;
}
.f2{
    background-color: #455d7a;
    width: 50%;
    border: none;
    margin-top: -12.7cm;
    margin-left: 18cm;
    padding: 0.3cm;


}
h1{
    color: green;
    margin-left: -1cm;
}
.un{
    width: 12cm;
    height: 0.5cm;
    font-size: 1rem;
    padding: 3mm;
    
}
/* CSS */
.un:focus,
.pw:focus,
.nationality:focus,
.telephone:focus,
.cpw:focus,
.mpw:focus,
.bd:focus {
  border: 3px solid blue;
  outline: none; /* Remove the default outline */
  background-color: rgb(215, 223, 231);
  border-left: none;
  border-right: none;
  border-top: none;
}    
.pw{
    width: 12cm;
    height: 0.5cm;
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
.account{
    margin-left: 33cm;
    margin-top: -2.7cm;
    color: white;
    width: 7cm;
    

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
    background-color: blue;
    width: 12cm;
    height: 1cm;
    
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
   font-size: 1.5rem ;
}
footer{
    background-color: rgb(3, 31, 46);
    margin-left: -2cm;
    margin-bottom: -1cm;
    margin-right: -1cm;
}
.bd{
    width: 5cm;
    height: 0.5cm;
    margin-left: -7cm;
    font-size: 1rem;
    padding: 3mm;
}
.nationality{
    width: 6cm;
    height: 0.5cm;
    margin-left: 1mm;
    font-size: 1rem;
    padding: 3mm;
}
.telephone{
    width: 5cm;
    height: 0.5cm;
    margin-left: cm;
    font-size: 1rem;
    padding: 3mm;
}
.cpw{
    width: 5cm;
    height: 0.5cm;
    margin-left: cm;
    font-size: 1rem;
    padding: 3mm;
}
.mpw{
    width: 6cm;
    height: 0.5cm;
    margin-left: -0.2cm;
    font-size: 1rem;
    padding: 3mm;
}
.gender{
    width: 6cm;
    height: 0.5cm;
    margin-left: 3cm;
    margin-top: -1.2cm;
    border: none;
    font-size: 1rem;
    padding: 5mm;

}
</style>
<header>
    <fieldset class="logo"></fieldset>

    <fieldset class="logo_meaning">
        Forge <br>Your <br> Future
    </fieldset>

</header>


    <fieldset class="f1">

        <h1> Welcome on Future Forge <br></h1>
        <br>
        
        <p class="f1p">
        This website have supprted by business managers while they was seeking <br>
        the best way to organise, manage, controll and be more profitable according to <br>
        daily basic profitable information that website publishes. 
        <br><br>

        </p>

    </fieldset>

    <fieldset class="f2"><center>
        <h1> REGISTRATION </h1>
            
        </form>
        <br> 
        <form action="process_registration2.php" method="post">
        <input type="text" id="name" name="name" class="un" placeholder="Please Enter your Names" required="required"> <br><br>
        <input type="email" id="email" name="email" class="pw" placeholder="Please Enter your email" required="required"> <br><br>
        <input type="tel" id="number" name="number" class="telephone" value="+250 " required="required"> 
        <input type="text" id="Nationality" name="Nationality" class="nationality" placeholder="     Nationality" required="required"> <br><br>
        <input type="text" id="company_name" name="company_name" class="pw" placeholder="     Write the name of your company" required="required"> <br><br>
        <input type="text" id="business_type" name="business_type" class="pw" placeholder="     Specify type of your business" required="required"> <br><br>
        <input type="text" id="address" name="address" class="pw" placeholder="     Specify the address of your job" required="required"> <br><br>
        <input type="text" id="username" name="username" class="pw" placeholder="     Enter username" required="required"> <br><br>
        <input type="text" id="password" name="password" class="mpw" placeholder="   Make 4 characters password" required="required"> 
        <input type="text" id="conf_password" name="conf_password" class="cpw" placeholder="     Confirm the password" required="required"> <br><br>
        <input type="date" id="birth_year" name="birth_year" class="bd" placeholder="     Enter your birth year" required="required"> 
        <fieldset class="gender"><input type="radio" id="male" name="male"  >Male <input type="radio" id="female" name="female" > Female  <br><br></fieldset>
        <textarea name="note" id="note" name="note" cols="30" rows="3" placeholder="Write small note about your self, who are you in 5 words"></textarea><br><br>
        <input type="submit" name="submit" class="cna" value="Create New Account"> <br><br>
    Already have an account! <a href="http://localhost/kyb/login.php" style="color:white;"> Log In </a>
</form>

    </fieldset> </p></center>
    

    <footer>
        <?php include "footerog.php" ?>
    </footer>
</body>
</html>