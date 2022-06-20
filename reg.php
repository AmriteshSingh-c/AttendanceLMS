<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="./reg.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#country').change(function() {
        var stateid = $(this).val()

        $.ajax({
          url: 'getstates.php',
          type: 'post',
          data: {
            state: stateid
          },
          dataType: 'json',
          success: function(response) {
            var len = response.length

            $('#states').empty()
            for (var i = 0; i < len; i++) {
              var id = response[i]['id']
              var name = response[i]['name']

              $('#states').append(
                "<option value='" + id + "'>" + name + '</option>'
              )
            }
          },
        })
      })
    })
  </script>
</head>


<body>
  <header>
    <div class="logo"><img src="./assets/image/64277794-d4f3-49fe-b7ed-26871933190a.jpg" alt="nophoto"></div>

  </header>
  <h1>Registration Form</h1>
  <div class="container">
    <form action="submit.html" target="_blank" method="post">
      <table>
        <tr class="row">
          <td>First name:</td>
          <td>
            <input type="text" id="fname" placeholder="enter first name here" title="enter first name" pattern="([a-zA-Z]{3,10})+$" required><br>
          </td>
        </tr>
        <tr>
          <td>Middle name:</td>
          <td>
            <input type="text" id="mname" placeholder="enter  middle name here" title="enter middle name" pattern="([a-zA-Z])+$">
          </td>
        </tr>
        <tr>
          <td>Last name:</td>
          <td>
            <input type="text" id="lname" placeholder="enter first last name here" title="enter last name" pattern="([a-zA-Z]{3,10})+$">
          </td>
        </tr>
        <tr>
          <td>Enter email-id:</td>
          <td>
            <input type="email" id="email" placeholder="enter id here" title="enter email-id" required>
          </td>
        </tr>
        <tr>
          <td>Enter birthdate:</td>
          <td>
            <input type="date" id="birthday" required>
          </td>
        </tr>
        <tr>
          <td>Enter contact number:</td>
          <td>
            <input type="text" id="number" placeholder="enter contact-no. here" title="enter contact-no.">

        <tr>
          <td>Select your age category:</td>
          <td> <input type="radio" id="male" value="age" name="age">
            <label for="1">Male</label>
          </td>
          <td> <input type="radio" id="female" value="age" name="age">
            <label for="2">Female</label>
          </td>
          <td> <input type="radio" id="3" value="age" name="age">
            <label for="3">Others</label>
          </td>
        <tr>
          <td>Select your time duration:</td>
          <td> <input type="radio" id="a" value="time" name="2">
            <label for="a">2 weeks</label>
          </td>
          <td> <input type="radio" id="b" value="time" name="4">
            <label for="b">4 weeks</label>
          </td>
          <td> <input type="radio" id="c" value="time" name="6">
            <label for="c">6 weeks</label>
          </td>

        <tr>
          <td> <label for="place">Choose your country:</label></td>

          <td>
            <select id="country">
              <option value="0">- Select -</option>
              <?php
              include "getcountry.php"
              ?>
          </td>
        </tr>
        <tr>
          <td> <label for="place">Choose your state:</label></td>

          <td>
            <select id="states">
              <option value="0">- Select -</option>
              <?php
              include "getstates.php"
              ?>
          </td>
        </tr>

        <tr>
          <td> <input type="submit"></td>
          <td> <input type="reset"></td>
        </tr>

      </table>
      <div class="add">
        <address>Created by Ashi Chhabra<br>
          For any query<br>
          Visit us at:<br>
          <a href="support@example.com">support@example.com</a><br>
          Or reach out to us at:<br>
          example@gmail.com<br>
          ALT center<br>
          Ghaziabad, India
        </address>
      </div>


    </form>
  </div>
</body>

</html>