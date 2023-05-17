<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="v.css">
  <title>INPUT PAGE- STEP 2</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method='post' action="p2.php">            
                    <h2>Tell us about your education</h2> <br>

                      <h4> Include every school, even if you're still there or didn't graduate.</h4> 

                      <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="text" name="school" multiple>
                        <label for="">School Name</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="text" name="schloc" multiple>
                        <label for="">School Location</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="text" name="degree" multiple>
                        <label for="">Degree</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="date" name="DOG" multiple>
                        <label for="">Date of graduation</label>
                    </div>
                        <button style="color:black">NEXT PAGE</button>
                      
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
