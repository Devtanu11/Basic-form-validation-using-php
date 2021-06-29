<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is My from</title>   
   <style>
        .error{
            color:red;
        }
    </style>
</head>


<body>
<?php
$name = $website = $position = $estatus = $comments = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if(empty($_POST["name"])){
        echo"<span class=\"error\"><strong>Error: Name is required</strong></span>";
    }
    
    
    elseif(empty($_POST["website"])){
        echo "<span class=\"error\"><strong>Error: Website is required</strong></span>";
    }
    
    else{
    
    $name = val($_POST["name"]);
    $website = val($_POST["website"]);
    $position = val($_POST["position"]);
    $experience = val($_POST["experience"]);
    $estatus  = val($_POST["estatus"]);
    $comments = val($_POST["comments"]);
    }
}

function val($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}
?>



                    <h1><center>Application Form</center></h1>
                    <form  name="employment" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> "  method="post">
                    
                    <table width="600" border=3px solid black  cellspacing = 1 cellpadding = 1>
                        <tr>
                        <td>Employee Name</td>
                        <td><input type = "text" name="name" placeholder="Enter your name" maxlength ="50"</td>
                        </tr>
                    

                        <tr>
                        <td>Website</td>
                        <td><input type = "text" name="website" placeholder="Enter your website" maxlength ="50"</td>
                        </tr>

                        <tr>
                        <td>Position</td>
                        <td>
                               <select name = "position">
                                    <option value="Accountant">Accountant</option>
                                    <option value="Receptionist"> Receptionist</option>
                                    <option value="Administrator">Administrator</option>
                                    <option value="Supervisor">Supervisor</option>
                               </select> 
                        
                        </td>    
                        </tr>

                        <tr>
                        <td>Experience Level</td>
                        <td>
                               <select name = "experience">
                                    <option value="Entry Level">Entry Level</option>
                                    <option value="Some Experience"> Some Experience</option>
                                    <option value="Very Experienced">Very Experienced</option>
                                    
                               </select> 
                        </td>    
                        </tr>

                        <tr>
                            <td>Employement Status</td>
                            <td>
                                <input type="radio" name="estatus" value = "Employed" checked/>Employed
                                <input type="radio" name ="estatus " value = "Unemployed"/>Unemployed
                                <input type="radio" name ="estatus " value = "Student"/>Student
                            
                            </td>
                        </tr>

                        <tr>
                            <td>Additional Text</td>
                            <td><textarea name="comments" cols ="45" rows = "5" placeholder="Enter some addtional content"></textarea></td>
                        </tr>    

                        <td>
                        <input type = "submit" name = "submit" value = "submit">
                        <input type = "reset" name = "reset" value = "reset">
                        </td>
                        
                         


                    </table>
                    </form>    


<?php
    echo"<h2>User Input</h2>";
    echo" <h3>Name</h3>: " . $name;
    echo"<br>";
    echo"<h3>website</h3>: " . $website;
    echo"<br>";
    echo"<h3>position:</h3> ". $position;
    echo"<br>";
    echo"<h3>experience:</h3> ". $experience;
    echo"<br>";
    echo"<h3>employment Status:</h3> " .$estatus;
    echo"<br>";
    echo"<h3>additional text:</h3> " . $comments; 
?>

</body>
</html>
