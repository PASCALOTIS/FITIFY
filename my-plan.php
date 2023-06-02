<!DOCTYPE html>
<html>
<head>
  <title>Fitify - My Plan</title>
  <style>
    /* Styles for the page */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
  
    .header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
  
    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }
  
    h1 {
      text-align: center;
      margin-bottom: 30px;
    }
  
    .plan-option {
      background-color: #fff;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      cursor: pointer;
      display: flex;
      align-items: center;
    }
  
    .plan-option h2 {
      margin-bottom: 10px;
    }
  
    .plan-option p {
      margin-bottom: 20px;
    }
  
    .sub-plan-option {
      background-color: #f2f2f2;
      padding: 15px;
      margin-bottom: 10px;
      border-radius: 3px;
      cursor: pointer;
    }
  
    .sub-plan-option p {
      margin: 0;
    }
  
    .plan-option a {
      display: block;
      background-color: #333;
      color: #fff;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 4px;
      text-align: center;
    }
  
    .plan-option a:hover {
      background-color: #555;
    }
  
    .footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
  
    .footer a {
      color: #fff;
    }
    
    .image-container {
      width: 100px;
      height: 100px;
      margin-right: 20px;
    }
    
    .image-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 50%;
    }
  </style>
</head>
<body>
  <div class="header">
    <h1>My Plan</h1>
  </div>

  <div class="container">
    <div class="plan-option" onclick="showAlert('Gain Muscle')">
      <div class="image-container">
        <img src="gain muscle.jpg" alt="Gain Muscle">
      </div>
      <div>
        <h2>Gain Muscle</h2>
        <p>Duration: 12 weeks</p>
      </div>
      <div class="sub-plan-option" onclick="showAlert('Upper Body Workout')">
        <p>Upper Body Workout</p>
      </div>
      <div class="sub-plan-option" onclick="showAlert('Lower Body Workout')">
        <p>Lower Body Workout</p>
      </div>
      <div class="sub-plan-option" onclick="showAlert('Core Workout')">
        <p>Core Workout</p>
      </div>
      <a href="#">Start Plan</a>
    </div>

    <div class="plan-option" onclick="showAlert('Get Fitter')">
      <div class="image-container">
        <img src="get fitter.jpg" alt="Get Fitter">
      </div>
      <div>
        <h2>Get Fitter</h2>
        <p>Duration: 8 weeks</p>
      </div>
      <div class="sub-plan-option" onclick="showAlert('Cardiovascular Training')">
        <p>Cardiovascular Training</p>
      </div>
      <div class="sub-plan-option" onclick="showAlert('Strength Training')">
        <p>Strength Training</p>
      </div>
      <div class="sub-plan-option" onclick="showAlert('Flexibility Exercises')">
        <p>Flexibility Exercises</p>
      </div>
      <a href="#">Start Plan</a>
    </div>

    <div class="plan-option" onclick="showAlert('Lose Fat')">
      <div class="image-container">
        <img src="lose fat.jpg" alt="Lose Fat">
      </div>
      <div>
        <h2>Lose Fat</h2>
        <p>Duration: 10 weeks</p>
      </div>
      <div class="sub-plan-option" onclick="showAlert('Full Body Workout')">
        <p>Full Body Workout</p>
      </div>
      <div class="sub-plan-option" onclick="showAlert('HIIT Training')">
        <p>HIIT Training</p>
      </div>
      <div class="sub-plan-option" onclick="showAlert('Abdominal Workout')">
        <p>Abdominal Workout</p>
      </div>
      <a href="#">Start Plan</a>
    </div>
  </div>

  <div class="footer">
    <a href="menu.php">Go Back to Menu</a>
  </div>

  <script>
    // JavaScript function to display an alert message
    function showAlert(planName) {
      alert("You selected the " + planName + " plan.");
    }
  </script>
</body>
</html>

