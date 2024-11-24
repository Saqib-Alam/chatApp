<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chatApp</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Realtime data</header>
            <form action="#">
                <div class="error-text">This is an error message!</div>
                    <div class="field input">
                        <label for="">Email Address</label>
                        <input type="text" placeholder="Enter your email">
                    </div>
                    <div class="field input">
                        <label for="">Password</label>
                        <input type="password" placeholder="Enter Your Password">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="continue to chat">
                    </div>
                    
                </form>
                <div class="link">Not Yet Signed Up?<a href="#">Signup Now</a></div>
        </section>
    </div>
    
</body>
<script src="javascript/pass-show-hide.js"></script>

</html>