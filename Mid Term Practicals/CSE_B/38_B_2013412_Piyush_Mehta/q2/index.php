<html>
  <head>
    <title>FullStackPratical2</title>
  </head>
  <body>
    <form action="index.php" method="GET">
      <h3 class="a">Please Enter Your Details</h3>
      <h4 class="a">Fill the application form below and submit</h4>
      Username
      <input
        type="text"
        name="Username"
        placeholder="Username"
        required
      /><br />
      Email address
      <input
        type="email"
        name="email"
        placeholder="mail@example.com"
        required
      /><br />
      Phone Number
      <input
        type="number"
        maxlength="10"
        name="pno"
        placeholder="Phone Number"
        required
      /><br />
      Gender <input type="radio" name="gender" value="Male" required />Male
      <input type="radio" name="gender" value="Female" required />Female
      <input type="radio" name="gender" value="Other" required />Other <br />
      City
      <select id="city" name="city">
        <option selected>Mumbai</option>
        <option>Delhi</option>
        <option>Jaipur</option>
        <option>Mussoorie</option>
        <option>Nanital</option>
        <option>Chennai</option>
        <option>Pune</option>
        <option>Bangalore</option>
        <option>Hyderabad</option>
        <option>Lucknow</option></select
      ><br />
      <input type="submit" value="submit" />
    </form>
  </body>
</html>
