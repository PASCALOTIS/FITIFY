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
    <h2>Dinner</h2>
    <div class="meal">
      <img src="matcha.jpg" alt="Matcha Smoothie with Bowl">
      <div class="meal-info">
        <h3>Matcha Smoothie with Bowl</h3>
        <p>Calories: 250</p>
        <p>Blend matcha powder, spinach, banana, almond milk, and a sweetener of your choice. Serve in a bowl and top with your favorite toppings.</p>
        <form onsubmit="saveMeal(event, 'Matcha Smoothie with Bowl', 250)">
          <input type="hidden" name="calories" value="200">
          <button type="submit">Select</button>
        </form>
      </div>
    </div>
    <div class="meal">
      <img src="tomato.jpg" alt="Tomato and Avocado Toast">
      <div class="meal-info">
        <h3>Tomato and Avocado Toast</h3>
        <p>Calories: 200</p>
        <p>Recipe: Cook pasta according to package instructions. In a separate pan, cook chicken and spinach. Add cooked pasta and a creamy sauce. Mix well and serve.</p>
        <form onsubmit="saveMeal(event, 'Tomato and Avocado Toast', 200)">
          <input type="hidden" name="calories" value="400">
          <button type="submit">Select</button>
        </form>
      </div>
    </div>
    <div class="meal">
      <img src="nana.jpg" alt="Healthy Banana Pancakes">
      <div class="meal-info">
        <h3>Healthy Banana Pancakes</h3>
        <p>Calories: 350</p>
        <p>Mash ripe bananas and mix with eggs, oats, baking powder, and a pinch of salt. Cook the batter in a pan and serve with your favorite toppings.</p>
        <form onsubmit="saveMeal(event, 'Healthy Banana Pancakes', 350)">
          <input type="hidden" name="calories" value="350">
          <button type="submit">Select</button>
        </form>
      </div>
    </div>
    <div class="meal">
      <img src="rice.jpg" alt="Rice Cake with Avocado and Ham">
      <div class="meal-info">
        <h3>Rice Cake with Avocado and Ham</h3>
        <p>Calories: 180</p>
        <p>Recipe: Cook noodles according to package instructions. Mix with homemade or store-bought pesto sauce. Serve with grated Parmesan cheese.</p>
        <form onsubmit="saveMeal(event, 'Rice Cake with Avocado and Ham', 180)">
          <input type="hidden" name="calories" value="180">
          <button type="submit">Select</button>
        </form>
      </div>
    </div>
    <div class="meal">
      <img src="snack.jpg" alt="White Beans Salad">
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
