<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="v.css">
  <title>INPUT PAGE-STEP 1</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="post" action="p1.php">
                    <h2> What's the best way for employers to contact you?</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" name="name" required>
                        <label for="">Name</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="text" name="city" required>
                        <label for="">City</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="text" name="age" required>
                        <label for="">Age</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="text" name="country" required>
                        <label for="">Country</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="text" name="phone" required>
                        <label for="">Phone No.</label>
                    </div>
                
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" required>
                        <label for="">E-mail</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="text" name="pin_code" required>
                        <label for="">Pin-Code</label>
                    </div>

                    <button style="color:black"> NEXT PAGE</button>
                    
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>