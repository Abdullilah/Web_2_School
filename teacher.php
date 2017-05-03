<!DOCTYPE html>
<html>
<head>
    <title>Teacher Registration</title>
    
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/teacher.css">
    <style>
        #logOutForm{
            display: inline;
            margin-top: 10px;
        }
        #logOutForm input{
            margin-top: 13px;
            background-color: #333;
            color: #ccc;
            border: 0px;
        }
        
        #logOutForm input:hover{
            color: #FFF;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ourTarget" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">Abd2dev School</a>
            </div>
        <!-- Brand and toggle get grouped for better mobile display -->
        

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="ourTarget">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="myInfo.php">My Information</a></li>
            <?php
              session_start();
              if($_SESSION['newSession'] == null){
                  echo "<li><a href='login.php'>Sign in</a></li>";
              } else{
                  echo "<form action='some.php' method='post' id='logOutForm'>
                          <input type='submit' value='Log out'>
                      </form>";
              }
              ?>
          </ul>
          
          
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <table>
        <form action="regTeacher" method="post" name="myForm" onsubmit="return checkInp()">
            <tr>
                <td><label for="tName">Name</label></td>
                <td><input type="text" name="tName" id="tName"></td>
            </tr>
            <tr>
                <td><label for="tSurname">Surname</label></td>
                <td><input type="text" name="tSurname" id="tSurname"></td>
            </tr>
            <tr>
                <td><label for="ageInput">Age</label></td>
                <td><input type="number" name="tAge" pattern='[0-9]' id="ageInput"></td>
            </tr>
            <tr>
                <td><label for="salaryInput">Salary</label></td>
                <td><input type="text" name="tsalary" id="salaryInput"></td>
            </tr>
            <tr>
                <td>
                    <select name="time" multiple size="8" class="bloc" id="sel">
                        <optgroup label="Courses"></optgroup>
                        <option>Value1</option>
                        <option>Value2</option>
                        <option>Value3</option>
                        <option>Value4</option>
                        <option>Value5</option>
                        <option>Value6</option>
                        <option>Value7</option>
                    </select>
                </td>
                <td>
                    <select name="time" multiple size="8" class="bloc" id="sel1">
                        <optgroup label="Selected courses"></optgroup>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="specialTr"><button id="btnSelected">&rarr;</button></td>
                <td class="specialTr"><button id="btnDeleted">&larr;</button></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="tSubmit" id="submitBtn"></td>
            </tr>
            
        </form>
    </table>
    
    <script src="JS/jquery-3.1.1.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="JS/myScript.js"></script>
    

</body>
</html>