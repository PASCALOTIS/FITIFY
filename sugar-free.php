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
    <h2>Sugar-Free</h2>
    <div class="meal">
      <img src="garlic.jpg" alt="Garlic Mushroom">
      <div class="meal-info">
        <h3>Garlic Mushroom</h3>
        <p>Calories: 150</p>
        <p>Recipe: Sauté mushrooms with garlic, olive oil, and herbs until tender. Season with salt and pepper. Serve as a side dish or with rice or pasta.</p>
        <form onsubmit="saveMeal(event, 'Garlic Mushroom', 150)">
          <input type="hidden" name="calories" value="150">
          <button type="submit">Select</button>
        </form>
      </div>
    </div>
    <div class="meal">
      <img src="smoothie.jpg" alt="Strawberry Smoothie">
      <div class="meal-info">
        <h3>Strawberry Smoothie</h3>
        <p>Calories: 180</p>
        <p>Recipe: Blend fresh or frozen strawberries with unsweetened almond milk, a scoop of protein powder, and a handful of spinach. Enjoy chilled.</p>
        <form onsubmit="saveMeal(event, 'Strawberry Smoothie', 180)">
          <input type="hidden" name="calories" value="180">
          <button type="submit">Select</button>
        </form>
      </div>
    </div>
    <div class="meal">
      <img src="coconut.jpg" alt="Coconut Milk">
      <div class="meal-info">
        <h3>Coconut Milk</h3>
        <p>Calories: 120</p>
        <p>Recipe: Extract fresh coconut milk from grated coconut and strain it. Use it as a dairy-free alternative in recipes or as a creamy addition to smoothies.</p>
        <form onsubmit="saveMeal(event, 'Coconut Milk', 120)">
          <input type="hidden" name="calories" value="120">
          <button type="submit">Select</button>
        </form>
      </div>
    </div>
    <div class="meal">
      <img src="muffins.jpg" alt="Healthy Banana Muffins">
      <div class="meal-info">
        <h3>Healthy Banana Muffins</h3>
        <p>Calories: 200</p>
        <p>Recipe: Mash ripe bananas and mix with almond flour, eggs, baking powder, and a touch of honey. Bake in a muffin tin until golden and enjoy as a guilt-free treat.</p>
        <form onsubmit="saveMeal(event, 'Healthy Banana Muffins', 200)">
          <input type="hidden" name="calories" value="200">
          <button type="submit">Select</button>
        </form>
      </div>
    </div>
    <div class="meal">
      <img src="soup.jpg" alt="Easy Carrot Soup">
      <div class="meal-info">
        <h3>Easy Carrot Soup</h3>
        <p>Calories: 120</p>
        <p>Recipe: Sauté chopped carrots, onions, and garlic in olive oil. Add vegetable broth and simmer until the carrots are tender. Blend until smooth and season to taste.</p>
        <form onsubmit="saveMeal(event, 'Easy Carrot Soup', 120)">
          <input type="hidden" name="calories" value="120">
          <button type="submit">Select</button>
        </form>
      </div>
    </div>
    <div class="meal">
      <img src="smoothie.jpg" alt="Green Smoothie">
      <div class="meal-info">
        <h3>Green Smoothie</h3>
        <p>Calories: 150</p>
        <p>Recipe: Blend spinach, kale, cucumber, green apple, lemon juice, and water or unsweetened almond milk. Add a handful of ice and blend until smooth.</p>
        <form onsubmit="saveMeal(event, 'Green Smoothie', 150)">
          <input type="hidden" name="calories" value="150">
          <button type="submit">Select</button>
        </form>
      </div>
    </div>

    <a href="nutrition.php">Back to Nutrition Page</a>
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
