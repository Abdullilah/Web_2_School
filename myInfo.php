<!DOCTYPE html>
<html>
<head>
    <title>My Information</title>
    
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/myInfo.css">
    <style>
        table{
            margin: 100px auto;
            text-align: center;
        }
        table, th, td {
            border: 1px solid black;
        }
        td{
            width: 100px;
            font-size: 20px;
            padding: 3px;
        }
        
        td.courseName{
            font-weight: bold;
            background-color: dimgray;
            color: white;
        }
        
        h1.newSpan{
            margin: 50px;
            font-weight: bold;
            color: red;
            border-bottom: 1px dashed red;
        }
        span.newSpan{
            font-size: 30px;
            color: blue;
            margin: 50px 100px;
            border-bottom: 1px dashed blue;
        }
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
            <li  class="active"><a href="myInfo.php">My Information</a></li>
            <?php
              error_reporting(0);
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
    
    
    
    <?php
        if( $_SESSION['newSession'] == null ){
            echo '
                <section class="warning">
                    <div>
                        <h1><u>Warning</u></h1>
                        <ul>
                            <li><h4>If you are not a student in this schoold, you can not access to this page</h4></li>
                            <li><h4>If you are a student in this schoold, you should make <a href="login.php">sign in</a> with correct <span>username</span> and <span>password</span></h4></li>
                        </ul>
                    </div>
                </section>
            ';
        } else{
            mysql_connect("localhost","root","abdullilah706");
            mysql_select_db("loginStudents");
            
            $stu_id = $_SESSION['newSession'];
            $result = mysql_query("SELECT * FROM students WHERE stu_id = '$stu_id'") 
              or die("Faild query in the database" . mysql_error());
            $row = mysql_fetch_array($result);
            $table_name = "level_".$row['stu_level'];
            
            $result1 = mysql_query("SELECT * FROM $table_name WHERE stu_id = $stu_id") 
              or die("Faild query in the database" . mysql_error());
            $row1 = mysql_fetch_array($result1);

            $i = 0;
            echo "<h1 class='newSpan'>Student Marks</h1>" . "<span class='newSpan'>" . $row['stu_name'] ." " . $row['stu_surname'] . "</span>";
            echo "<table>";
            foreach($row1 as $key => $val){
                echo "<tr>";
                if($i%2 != 0 && $key != "stu_id"){
                    echo "<td class='courseName'>" . $key . "</td>";                    
                    echo "<td>" . $val . "</td>";
                } 
                echo "</tr>";
                $i++;
            }
            echo "</table>";
            
            
            
        }
    ?>
    
    <script src="JS/jquery-3.1.1.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    

</body>
</html>