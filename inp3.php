<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="v.css">
  <title>INPUT PAGE- STEP 3</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method='post' action="p3.php">            
                    <h2>Tell us about your work experience</h2> <br>

                    <h4>Start with your most recent experience and work backward.</h4>

                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" name="title" multiple>
                        <label for="">Title</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="text" name="cmpny" multiple>
                        <label for="">Organisation/Company </label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="text" name="cmpnycity" multiple>
                        <label for="">City and country </label>
                    </div>

                    <div class="inputbox">
                        <input type="date" name="SD" multiple>
                        <label for="">Start date</label>
                    </div>
                    <div class="inputbox">
                        
                        <input type="date" name="ED" multiple>
                        <label for="">End date</label>
                    </div>
                    <br>


                    <button style="color:black">NEXT PAGE</button>
                
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
