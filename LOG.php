<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="ell.css">
  <title>LOGIN PAGE</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="post" action="process.php">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="username" required />
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <label for="">Password</label>
                        <input type="password" required name="pass_word"></input>
                    </div>
                    <button style="color:black">LOG IN</button>
                    <div class="register">
                        <p>Don't have an account? <a href="register.php">REGISTER</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
        
</body>
</html>