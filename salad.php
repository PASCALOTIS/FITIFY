<!DOCTYPE html>
<html>
<head>
  <title>Fitness Tracker - Nutrition</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f2f2f2;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    h1 {
      text-align: center;
      color: #3bdc23;
      margin-bottom: 30px;
    }

    .meal {
      display: flex;
      align-items: center;
      margin-bottom: 30px;
    }

    .meal img {
      width: 200px;
      height: 200px;
      object-fit: cover;
      margin-right: 20px;
    }

    .meal-info {
      flex-grow: 1;
    }

    .meal-info h3 {
      margin-top: 0;
      margin-bottom: 10px;
      color: #3b73ef;
    }

    .meal-info p {
      margin-bottom: 10px;
    }

    form button {
      background-color: #3bdc23;
      color: #fff;
      border: none;
      border-radius: 3px;
      padding: 10px 15px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Nutrition</h1>
    <h2>Salad</h2>
    <div class="meal">
      <img src="peac.jpg" alt="Peach and Broccoli Salad">
      <div class="meal-info">
        <h3>Peach and Broccoli Salad</h3>
        <p>Calories: 200</p>
        <p>Recipe: Combine fresh peaches, broccoli florets, mixed greens, and a light dressing. Toss well and serve.</p>
        <form onsubmit="saveMeal(event, 'Peach and Broccoli Salad', 200)">
          <input type="hidden" name="calories" value="200">
          <button type="submit">Select</button>
        </form>
      </div>
    </div>
    <div class="meal">
      <img src="creamy.jpg" alt="Creamy Chicken and Spinach Pasta">
      <div class="meal-info">
        <h3>Creamy Chicken and Spinach Pasta</h3>
        <p>Calories: 400</p>
        <p>Recipe: Cook pasta according to package instructions. In a separate pan, cook chicken and spinach. Add cooked pasta and a creamy sauce. Mix well and serve.</p>
        <form onsubmit="saveMeal(event, 'Creamy Chicken and Spinach Pasta', 400)">
          <input type="hidden" name="calories" value="400">
          <button type="submit">Select</button>
        </form>
      </div>
    </div>
    <div class="meal">
      <img src="asia.jpg" alt="Asian Spicy Beef">
      <div class="meal-info">
        <h3>Asian Spicy Beef</h3>
        <p>Calories: 350</p>
        <p>Recipe: Marinate beef with soy sauce, ginger, garlic, and spices. Stir-fry with vegetables and a spicy sauce. Serve with rice or noodles.</p>
        <form onsubmit="saveMeal(event, 'Asian Spicy Beef', 350)">
          <input type="hidden" name="calories" value="350">
          <button type="submit">Select</button>
        </form>
      </div>
    </div>
    <div class="meal">
      <img src="noodle.jpg" alt="Noodles with Pesto">
      <div class="meal-info">
        <h3>Noodles with Pesto</h3>
        <p>Calories: 320</p>
        <p>Recipe: Cook noodles according to package instructions. Mix with homemade or store-bought pesto sauce. Serve with grated Parmesan cheese.</p>
        <form onsubmit="saveMeal(event, 'Noodles with Pesto', 320)">
          <input type="hidden" name="calories" value="320">
          <button type="submit">Select</button>
        </form>
      </div>
    </div>
    <div class="meal">
      <img src="whit.jpg" alt="White Beans Salad">
      <div class="meal-info">
        <h3>White Beans Salad</h3>
        <p>Calories: 250</p>
        <p>Recipe: Combine white beans, cherry tomatoes, cucumber, red onion, and herbs. Toss with a simple dressing and serve chilled.</p>
        <form onsubmit="saveMeal(event, 'White Beans Salad', 250)">
          <input type="hidden" name="calories" value="250">
          <button type="submit">Select</button>
        </form>
      </div>
    </div>
    <a href="nutrition.php">Back to Nutrition</a>
  </div>

  <script>
    function saveMeal(event, mealName, calories) {
      event.preventDefault();

      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'save_meal.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          console.log('Meal saved successfully!');
        }
      };
      xhr.send('mealName=' + encodeURIComponent(mealName) + '&calories=' + encodeURIComponent(calories));
    }
  </script>
</body>
</html>