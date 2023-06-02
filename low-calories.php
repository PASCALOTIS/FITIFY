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
    <h2>Low Calories</h2>
    <div class="meal">
      <img src="cucumber_roll_ups.jpg" alt="Cucumber Roll Ups">
      <div class="meal-info">
        <h3>Cucumber Roll Ups</h3>
        <p>Calories: 70</p>
        <p>Recipe: Slice cucumbers lengthwise and fill with a mixture of hummus, diced vegetables, and herbs. Roll up and enjoy as a refreshing low-calorie snack.</p>
        <form onsubmit="saveMeal(event, 'Cucumber Roll Ups', 70)">
          <input type="hidden" name="calories" value="70">
          <button type="submit">Select</button>
        </form>
      </div>
    </div>
    <div class="meal">
      <img src="fresh_vegetable_salad.jpg" alt="Fresh Vegetable Salad">
      <div class="meal-info">
        <h3>Fresh Vegetable Salad</h3>
        <p>Calories: 90</p>
        <p>Recipe: Toss together a variety of fresh vegetables like lettuce, cucumber, bell peppers, tomatoes, and onions. Drizzle with lemon juice and olive oil as a light dressing.</p>
        <form onsubmit="saveMeal(event, 'Fresh Vegetable Salad', 90)">
          <input type="hidden" name="calories" value="90">
          <button type="submit">Select</button>
        </form>
      </div>
    </div>
    <div class="meal">
      <img src="fresh_berries_bowl.jpg" alt="Fresh Berries Bowl">
      <div class="meal-info">
        <h3>Fresh Berries Bowl</h3>
        <p>Calories: 80</p>
        <p>Recipe: Combine a mix of fresh berries such as strawberries, blueberries, and raspberries. Serve as a light and antioxidant-rich dessert or snack.</p>
        <form onsubmit="saveMeal(event, 'Fresh Berries Bowl', 80)">
          <input type="hidden" name="calories" value="80">
          <button type="submit">Select</button>
        </form>
      </div>
    </div>
    <div class="meal">
      <img src="grilled_pineapple.jpg" alt="Grilled Pineapple">
      <div class="meal-info">
        <h3>Grilled Pineapple</h3>
        <p>Calories: 60</p>
        <p>Recipe: Slice fresh pineapple and grill until caramelized. Enjoy as a sweet and low-calorie treat.</p>
        <form onsubmit="saveMeal(event, 'Grilled Pineapple', 60)">
          <input type="hidden" name="calories" value="60">
          <button type="submit">Select</button>
        </form>
      </div>
    </div>
    <div class="meal">
      <img src="mixed_fruit_salad.jpg" alt="Mixed Fruit Salad">
      <div class="meal-info">
        <h3>Mixed Fruit Salad</h3>
        <p>Calories: 100</p>
        <p>Recipe: Combine a variety of fresh fruits such as melons, berries, grapes, and citrus fruits. Serve as a refreshing and vitamin-packed dessert or snack.</p>
        <form onsubmit="saveMeal(event, 'Mixed Fruit Salad', 100)">
          <input type="hidden" name="calories" value="100">
          <button type="submit">Select</button>
        </form>
      </div>
    </div>
    <div class="meal">
      <img src="pumpkin_and_carrot_cream.jpg" alt="Pumpkin and Carrot Cream">
      <div class="meal-info">
        <h3>Pumpkin and Carrot Cream</h3>
        <p>Calories: 110</p>
        <p>Recipe: Cook and blend pumpkin, carrots, onion, garlic, and vegetable broth until smooth. Season with herbs and spices for a creamy and low-calorie soup.</p>
        <form onsubmit="saveMeal(event, 'Pumpkin and Carrot Cream', 110)">
          <input type="hidden" name="calories" value="110">
          <button type="submit">Select</button>
        </form>
      </div>
    </div>
    <!-- Add more low-calorie meals here -->
    <!-- ... previous code ... -->

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
