<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
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
  padding: 50px;
  text-align: center;
  background-color: pink;
  color: white;
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

<div class="about-section">
  <h1>My Skills</h1>
  <p> I have experienced with following technologies </p>
</div>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="img5.jpg" alt="Jane" style="width:400px; height:300px">
      <div class="container">
        <h2>HTML</h2>
       
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img6.jpg" alt="Mike" style="width:400px; height:300px">
      <div class="container">
        <h2>PHP</h2>
       
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="img7.jpg" alt="John" style="width:400px; height:300px">
      <div class="container">
        <h2>PYTHON</h2>
      </div>
    </div>
  </div>
</div>

</body>
</html>