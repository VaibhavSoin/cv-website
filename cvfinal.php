<?php 
 include('database.php'); ?>
<html>
  <head>
    <link rel="stylesheet" href="scss.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300;400;500&display=swap">
    <script type="text/javascript">
    window.addEventListener("beforeprint", () => {
  document.querySelector("body").style.display = "block";
});
window.addEventListener("afterprint", () => {
  document.querySelector("body").style.display = "grid";
});
</script>
</head>
<body>
<?php 
 include('database.php'); ?>
 <?php
 $userdata = mysqli_query($connect,"SELECT * FROM userdata ORDER BY serial_number DESC");
 $row=mysqli_fetch_array($userdata);
 $userdata1 = mysqli_query($connect,"SELECT * FROM userdata1 ORDER BY serial_number DESC");
 $row1=mysqli_fetch_array($userdata1);
 $userdata2 = mysqli_query($connect,"SELECT * FROM userdata2 ORDER BY serial_number DESC");
 $row2=mysqli_fetch_array($userdata2);
 $userdata3 = mysqli_query($connect,"SELECT * FROM userdata3 ORDER BY serial_number DESC");
 $row3=mysqli_fetch_array($userdata3);
 $userdata4 = mysqli_query($connect,"SELECT * FROM userdata4 ORDER BY serial_number DESC");
 $row4=mysqli_fetch_array($userdata4);
 ?>
  <main id='portfolio' class='portfolio'>
  <!-- Left Side of Portfolio -->
  <div class="left">
    <section>
      <h1 class="name"><?php echo $row["name"]; ?><br></h1>
      <p><?php echo $row["age"] ?> years</p>
    </section>

    <article class="about">
      <h2>About Me</h2>
      <p><?php echo $row4["summary"]?></p>
    </article>

    <article class="stats">
      <h2>Skills</h2>
      <p><?php echo $row3["skills"]?></p>
    </article>

    <article class="blogs">
      <h2>Place</h2>
      <br>
    <p><?php echo $row["city"]?></p><br>
    <p><?php echo $row["country"]?></p><br>
    <p><?php echo $row["pin_code"]?></p>
    </article>

    <article class="address">
      <h2>Contacts</h2>
      <p><?php echo $row["phone"]?></p><br>
    <p><?php echo $row["email"]?></p>
    </article>
  </div>

  <!-- Right side of portfolio -->
  <div class="right">
    <article class="bg-grey experience">
      <h2>Experience</h2>
      <h3><?php echo $row2["cmpny"]?></h3>
      <p>Worked here from <?php echo $row2["SD"]?> to <?php echo $row2["ED"]?> as a <?php echo $row2["title"]?>.</p>
</article>

    <article class="bg-cream education">
      <h2>Education</h2>
      <h3><?php echo $row1["degree"]?></h3>
      <h4><?php echo $row1["school"]?></h4>
      <ul>
        <li>
        <?php echo $row1["schloc"]?>        </li>
        <li>On 
        <?php echo $row1["DOG"]?>        </li>
      </ul>
    </article>
  </div>
</main>
          </body>
          </html>
