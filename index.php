<!DOCTYPE HTML>
<?php
session_start();

?>

<html>  
<head>
    <style>
        input:hover {
            background-color: #ebf6ad;
        }

        label:hover {
            background-color: #ebf6ad;
        }

        textarea:hover {
            background-color: #ebf6ad;
        }

        #submit:hover {
            background-color: #d8f09d;
            border: 1px solid #ece6b2;
            outline: 1px solid black;
        }
    </style>
</head>
<body style="background-color:#f8f7d6">



<form name="form" action="pdfGenerator/index.php" method="post" >
    <table style="margin:auto; margin-top:10%;">
        <tr>
            <td><label>First Name:</label></td>
            <td><input type="text" name="firstname"  required><br></td>
        </tr>
        <tr>
            <td><label>Last Name:</label></td>
            <td><input type="text" name="lastname" required><br></td>
        </tr>
        <tr>
            <td><label>Street Address:</label></td>
            <td><input name="streetAddress" size="30" required></input><br></td>
        </tr>
        <tr>
            <td><label>City:</label></td>
            <td><input name="city" size="30" required></input><br></td>
        </tr>
        <tr>
            <td><label>State:</label></td>
            <td><input name="state" size="30" required></input><br></td>
        </tr>
        <tr>
            <td><label>Zip:</label></td>
            <td><input name="zip" size="30" required></input><br></td>
        </tr>
        <tr>
            <td><label>Telephone:</label></td>
            <td><input type="text" minlength=10 maxlength=10 name="telephone" size="16" required><br></td>
        </tr>
        <tr>
            <td><label>Birthdate:</label></td>
            <td><input class="dateInput" type="date" name="birthdate" required><br></td>
        </tr>
        <tr>
            <td><label>Social Number:<label></td>
            <td><input type="text" minlength=9 maxlength=9 name="socialNumber" size="16" required><br></td>
        </tr>
        <tr>
            <td><label>Today's Date:<label></td>
            <td><input type="date" name="date" value="<?=date("Y-m-d")?>" required><br></td>
        </tr>
        <tr>
            <td style="position:relative; top: 20px; left:150px;"><input id="submit" style="background-color:#d8d69d;
            border: 2px solid black; color: black;" type="submit" value="Create PDF"></td>
        </tr>
    </table>
</form>

</body>
</html>
