<!DOCTYPE html>
<html>
<head>
  <title>About US</title>
  <link rel = "icon" href = 
"images/vp_logo.jfif" 
        type = "image/x-icon">
 <link rel="stylesheet" href="css/style2.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family:"https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap";
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  color: Black;
  font-weight: bold;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>
<nav>
        <div class="title">
            <center><h3>Alumni Directory</h3></center>
        </div>
        <div class="list">
       <UL class="nav-links" >
            <li><a class="middle" href="index.php">Home</a></li>
            <li><a class="middle" href="Alumni.php">Alumni</a></li>
            <li> <a class="middle" href="aboutus.php"> About Us</a></li>
            <li> <a class="middle" href="logout.php"> Logout</a></li>
        </UL>
        <div class="burger">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
    
</div>
</nav>
<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <div class="container">
        <b><h2>Lokesh Patil</h2></b>
        <p class="title"></p>
        <p>lokeshpatil3618@gmail.com</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Ritik gohil</h2>
        <p class="title"></p>
        <p>ritikgohil@gmail.com</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Tejas mali</h2>
        <p class="title"></p>
        <p>tejas@gmail.com</p>
      </div>
    </div>
  </div>
</div>

<div class="column">
    <div class="card">
      <div class="container">
        <h2>Abhay Kulkarni</h2>
        <p class="title"></p>
        <p>abhay@gmail.com</p>
      </div>
    </div>
  </div>
</div>

<!-- <div class="column">
    <div class="card">
      <div class="container">
        <h2></h2>
        <p class="title"></p>
        <p>@gmail.com</p>
      </div> -->
    </div>
  </div>
</div>
</body>
</html>
