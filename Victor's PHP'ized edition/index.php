<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" href="/style.css">

</head>
<body>
<h1>Elias Gideon Bruhn</h1>
<h2>My life</h2>
<h4><p>I am Elias Gideon Bruhn and I am 13 years old. I was born in Hiller�d, Denmark. <br> I lived in Denmark until I was 12 years old, and then I moved to the Czech Republic.<br></p></h4>
<p> <h3>Click on the links below to see more about me... </h3></p>

  <div class="btn-group">
    <button>Sport and food</button>
  </div>


  <div class="btn-group">
    <button>Pets</button>
  </div>


<table id="customers">
  <tr>
    <th>Best Friends</th>
    <th>Friend's Mom</th>
    <th>Friend's Dad</th>
  </tr>
  <tr>
    <td>Joseph Kristiansen</td>
    <td>Naomi</td>
    <td>Joseph</td>
  </tr>
  <tr>
    <td>Nathanael Christensen</td>
    <td>Eliza</td>
    <td>Peter</td>
  </tr>
  <tr>
    <td>Samuel Dalgaard</td>
    <td>Dorthe</td>
    <td>Joshua</td>
  </tr>
  <tr>
    <td>Victor Fink</td>
    <td>Helle</td>
    <td>Peter</td>
  </tr>
  <tr>
    <td>Simeon Kristiansen</td>
    <td>Naomi</td>
    <td>Joseph</td>
  </tr>
  <tr>
    <td>Noah Adelgaard</td>
    <td>Maria</td>
    <td>John</td>

  </tr>
</table>


<h3>Things you should know about me</h3>
<ul><li>I like soccer</li>
  <li>I like food</li>
  <li>I like the Czech Republic</li>
  <li>I like Denmark</li>
  <li>I am the oldest of my siblings</li>
  <li>I have two younger brothers</li>
  <li>My mom is called Anna</li>
  <li>My dad is called Andreas (Andrew)</li>
  <li>My parents still work at a hotel in Denmark</li></ul>
<p></p>
<p></p>
<p></p>


<h3>Participate in our Competition!</h3>

<div>
  <form action="competition.php" method="post" netlify><!-- //go to a new page-->
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="email">Email</label>
    <input type="text" id="email" name="email_address" placeholder="Your Email..">

    <label for="country">Where do you want to live the most?</label>
    <select id="country" name="country">
      <option value="denmark">Denmark</option>
      <option value="czechia">Czechia</option>
      <option value="usa">USA</option>
    </select>


    <input type="submit" value="Submit">
  </form>
</div>

<button type="button"
        onclick="document.getElementById('demo').innerHTML = Date()">
  <a href="mailto:eliasbruhn123@gmail.com">Feedback!</a>
</button>
<button type="button"
        onclick="document.getElementById('demo').innerHTML = Date()">
  <a href="index.php">To the top!</a>
</button>
</body>
</html>
