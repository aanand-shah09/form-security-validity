<html>
    <head>
        <title> input test</title>
    </head>
    <body>
    <?php
    $ageerr=$nameerr=$countryerr="";
    $age=$name=$country="";
    if(isset($_POST['submit'])){
    if(empty($_POST['age'])){
        echo "age is required";
    }
    echo"<br>";

    if(empty($_POST['name'])){
        echo "name is required";}
        echo"<br>";
       if(!empty($_POST['name'])){
    if(!preg_match("/^[a-zA-Z ]/",$_POST['name'])){
      echo "only letters and space is allowed";
      echo "<br>";
    }
    if(!preg_match("/^([A-Z]+[a-z ])+([A-Z]*[a-z ])/",$_POST['name'])) {
    echo "enter your full name properly ";
  }
}
  echo"<br>";
  if(!empty($_POST['age'])){
    $agee=$_POST['age'];
    if($agee>110){
    echo "enter your age properly";
    echo "<br>";
  }
  }
    if(!empty($_POST['name']) && $_POST['age']!=null && preg_match("/^([A-Z]+[a-z ])+([A-Z]*[a-z ])/",$_POST['name']) && $_POST['age']<110 )
    {



      function data($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
        }
        $age=data($_POST['age']);
        $name=data($_POST['name']);
        $country=data($_POST['country']);

    echo $country;
    echo "<br>";
    echo $age;
    echo "<br>";
    echo $name;
    echo "<br>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    }
}

?>
        <h2> this is form validation</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>"  method="post">
        NAME:<input type="text" name="name">
        AGE:<input type="number" name="age" >
        <label for="country" > COUNTRY</label>
        <select id="country" name="country">
            <option value="Nepal">NEPAL</option>
            <option value="Nigeria">NIGERIA</option>
            <option value="Islambad">ISLAMBAD</option>
        </select>

        <input type="submit" value="register" name="submit">
        </form>

      </body>
      </html>
