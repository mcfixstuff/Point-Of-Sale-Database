<!-- Signup page for new users -->

<!DOCTYPE html>
<head>
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="img/pizza.ico" type="image/x-icon">
</head>
<body>
    <div class="navbar">
        <a href="index.php">Home</a>
        <!-- <a href="#">Order Now</a>
        <a href="#">Profile</a> -->
    </div>
    <form action="valid_signup.php" method="post">
        <h2>Create your POS Pizza Account</h2>
        <div>       
            <label for="first_name">Name  </label>
            <input type="text" id="first_name" name="first_name" placeholder="First" style="width: 75px;" required>
            <label for="middle_initial"></label>
            <input type="text" id="middle_initial" name="middle_initial" maxlength="1"  placeholder="M.I." style="width: 30px;">
            <label for="last_name"></label>
            <input type="text" id="last_name" name="last_name" placeholder="Last" style="width: 75px;" required>
        </div><br>

        <div>
            <label for="birthday_month">Birthday  </label>
            <input type="number" id="birthday_month" name="birthday_month" min="1" max="12" placeholder="Month" style="width: 60px;">
            <label for="birthday_day"></label>
            <input type="number" id="birthday_day" name="birthday_day" min="1" max="31" placeholder = "Day" style="width: 60px;">
        </div><br>

        <div>
            <label for="address">Address  </label>
            <input type="text" id="address" name="address" placeholder="Enter address" required>
        </div><br>

        <div>
            <label for="address2">Address 2  </label>
            <input type="text" id="address2" name="address2" placeholder="Optional">
        </div><br>

        <div>
            <label for="city">City  </label>
            <input type="text" id="city" name="city" placeholder="Enter city" required>
        </div><br>

        <div>
            <label for="state">State  </label>
            <select id="state" name="state" placeholder="Select state" style="width: 100px;"required>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
        </select>
            <label for="zip_code">Zip Code  </label>
            <input type="text" id="zip_code" name="zip_code" placeholder="Enter Zip Code" pattern="\d{5}(-\d{4})?" style="width: 100px;" required>
        </div><br>

        <div>
            <label for="phone_number">Phone Number  </label>
            <input type="tel" id="phone_number" name="phone_number" placeholder="Enter 10 digits" pattern="[0-9]{10}" style="width: 100px;" required>
        </div><br>

        <div>
            <label for="email">Email  </label>
            <input type="email" id="email" name="email" placeholder="Enter email address" required>
        </div><br>

        <div>
            <label for="password">Password  </label>
            <input type="password" id="password" name="password" placeholder="Create password" required>
        </div><br>

        <div>
            <input class = button type="submit" value="Sign Up">
        </form>
</body>
</html>



