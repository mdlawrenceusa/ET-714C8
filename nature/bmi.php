<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- bmi.html -->
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Nature's Source - Body Mass Index Calculator</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta http-equiv="refresh" content="60" />
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <script type="text/javascript" src="scripts/menu.js">
    </script>
    <script type="text/javascript" src="scripts/bmiValidate.js">
    </script>
  </head>
  <body>
    <div id="page">
      <?php
      include("common/banner.php");
      include("common/mainmenu.html");
      ?>
      <div id="content">
        <div id="textOnly" class="BMIForm">
          <h4 class="Centered">Body Mass Index Calculator</h4>
          <p>Body Mass Index (BMI) is used as an indicator of total body fat. In
          order to calculate your BMI, please input your height and weight.</p>
          <form id="bmiForm" onsubmit="return validateInput()"
          action="scripts/processBMI.php" method="post">
            <fieldset>
              <legend>Vital statistics</legend> 
              <table summary="Vital Statistics">
                <tr>
                  <td><label for="height">Height:</label></td>
                  <td><input id="height" type="text" name="height" size="7" /></td>
                  <td><label for="heightUnit">Units:</label></td>
                  <td><select id="heightUnit" name="heightUnit">
                    <option>inches</option>
                    <option>centimeters</option>
                  </select></td>
                </tr>
                <tr>
                  <td><label for="weight">Weight:</label></td>
                  <td><input id="weight" type="text" name="weight" size="7" /></td>
                  <td><label for="weightUnit">Units:</label></td>
                  <td><select id="weightUnit" name="weightUnit">
                    <option >pounds</option>
                    <option>kilograms</option>
                  </select></td>
                </tr>
                <tr>
                  <td colspan="4"><label for="details">Check here for a
                  detailed analysis of your BMI:</label> <input id="details"
                  type="checkbox" name="details" value="yes" /></td>
                </tr>
              </table>
            </fieldset>
            <fieldset>
              <legend>E-mail record?</legend> 
              <table summary="E-mail">
                <tr>
                  <td colspan="2"><label for="wantMail">Do you want your BMI sent
                  to you by e-mail?</label> <input id="wantMail" type="checkbox"
                  name="wantMail" value="yes" /></td>
                </tr>
                <tr>
                  <td><label for="email">E-mail Address:</label></td>
                  <td><input id="email" type="text" name="email" size="40" /></td>
                </tr>
              </table>
            </fieldset>
            <fieldset>
              <legend>Processing</legend> 
              <table summary="Processing">
                <tr>
                  <td><input type="submit" value="Compute your BMI" /></td>
                  <td align="right"><input type="reset" value="Reset form" /></td>
                </tr>
              </table>
            </fieldset>
          </form>
          <p>Total body fat is correlated to the risk of certain diseases which
          can be potentially fatal. BMI is valid for both men and women. However,
          it should only be used as a guideline as it has some limitations. It may
          overestimate the body fat in muscular persons and underestimate the body
          fat in persons who have lost muscle mass.</p>
          <p>More information can be found at the <a
          href="http://www.nhlbisupport.com/bmi/bmicalc.htm">National Institute
          of Health</a> website. This Calculator is based on the formula obtained
          from that site.</p>
        </div>
      </div>
      <?php
      include("common/footer.html");
      ?>
    </div>
  </body>
</html>
