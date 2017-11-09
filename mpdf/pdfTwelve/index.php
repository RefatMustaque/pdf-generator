<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);
session_start();
$_SESSION['firstname'] = $_POST["firstname"];
$_SESSION['lastname'] = $_POST["lastname"];
$_SESSION['streetAddress'] = $_POST["streetAddress"];
$_SESSION['city'] = $_POST["city"];
$_SESSION['state'] = $_POST["state"];
$_SESSION['zip'] = $_POST["zip"];
$_SESSION['telephone'] = '('.substr($_POST["telephone"], 0, 3).') '.substr($_POST["telephone"], 3, 3).'-'.substr($_POST["telephone"],6);
$_SESSION['birthdate'] = substr($_POST["birthdate"], 5, 2). '-' . substr($_POST["birthdate"], 8, 2).'-'.substr($_POST["birthdate"], 0, 4);
$_SESSION['socialNumber'] = substr($_POST["socialNumber"], 0, 3).'-'.substr($_POST["socialNumber"], 3, 2).'-'.substr($_POST["socialNumber"],5);
$_SESSION['date'] = substr($_POST["date"], 5, 2). '-' . substr($_POST["date"], 8, 2).'-'.substr($_POST["date"], 0, 4);

function createPdf ($htmpPage, $pdfName, $mpdf){

    $filename = 'Legal Notices R1/' .$htmpPage. ".pdf";
    //Check if the directory exists.
    if(file_exists($filename)){
        //Directory exist, so lets delete it.
        unlink($filename);
    }

    ob_start();
    include($htmpPage.'.php');
    $content = ob_get_contents();
    ob_end_clean();
    
    $mpdf->WriteHTML($content);

    //The name of the directory that we need to create.
    $directoryName = 'Legal Notices R1';
    
     //Check if the directory already exists.
    if(!is_dir($directoryName)){
        //Directory does not exist, so lets create it.
        mkdir($directoryName, 0755);
    }

    $mpdf->Output('Legal Notices R1/'.$pdfName.'.pdf','F');

    unset($mpdf);
}

     

include("../mpdf60/mpdf.php");
$mpdf1 =new mPDF();
$mpdf2 =new mPDF();
$mpdf3 =new mPDF();
$mpdf4 =new mPDF();
$mpdf5 =new mPDF();
$mpdf6 =new mPDF();
$mpdf7 =new mPDF();
$mpdf8 =new mPDF();
$mpdf9 =new mPDF();
$mpdf10 =new mPDF();
$mpdf11 =new mPDF();
$mpdf12 =new mPDF();

createPdf('collectionEq','Collections on Equifax', $mpdf1);
createPdf('collectionEx','Collections on Experian', $mpdf2);
createPdf('collectionTu','Collections on TransUnion', $mpdf3);
createPdf('inquiresEq','Credit Inquiries on Equifax', $mpdf4);
createPdf('inquiresEx','Credit Inquiries on Experian', $mpdf5);
createPdf('inquiresTu','Credit Inquiries on TransUnion', $mpdf6);
createPdf('latePaymentEq','Late Payments on Equifax', $mpdf7);
createPdf('latePaymentEx','Late Payments on Experian', $mpdf8);
createPdf('inquiresTu','Late Payments on TransUnion', $mpdf9);
createPdf('publicRecordsEq','Public Records on Equifax', $mpdf10);
createPdf('publicRecordsEx','Public Records on Experian', $mpdf11);
createPdf('publicRecordsTu','Public Records on TransUnion', $mpdf12);

$zip = new ZipArchive;

if ($zip->open('Legal Notices R1.zip', ZipArchive::CREATE) === TRUE)
{


    if ($handle = opendir('Legal Notices R1'))
    {
        // Add all files inside the directory
        while (false !== ($entry = readdir($handle)))
        {
            if ($entry != "." && $entry != ".." && !is_dir('Legal Notices R1/' . $entry))
            {
                $zip->addFile('Legal Notices R1/' . $entry);
            }
            ob_end_clean();
        }
        closedir($handle);
    }
 
    $zip->close();
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        a:hover {
            background-color: #f0f1b2;
            border: 1px solid #ece6b2;
            outline: 2px solid #d9ee6d;
        }
    </style>
</head>
<body style="background-color:#f8f7d6">
        <div style="text-align:center; color: Black; font-size:30px; margin-top:30px">
            <p><a style="text-decoration: none; color:Green; Border: 1px solid green; font-size:35px; padding:5px;" align="center" href="../../index.php">Click Here to Go to Home Page</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices R1.zip" download>Download Legal Notices R1.zip</a></p>
        </div>
        
        <div style="text-align:left; color: Black; font-size:18px; float:left; margin: auto; margin-left:7%;">
            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices R1\Collections on Equifax.pdf" download>Collections on Equifax</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices R1\Collections on Experian.pdf" download>Collections on Experian</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices R1\Collections on TransUnion.pdf" download>Collections on TransUnion</a></p>
        </div>

        <div style="text-align:left; color: Black; font-size:18px; float:left; margin: auto; margin-left:7%;">
            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices R1\Credit Inquiries on Equifax.pdf" download>Credit Inquiries on Equifax</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices R1\Credit Inquiries on Experian.pdf" download>Credit Inquiries on Experian</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices R1\Credit Inquiries on TransUnion.pdf" download>Credit Inquiries on TransUnion</a></p>
        </div>


        <div style="text-align:left; color: Black; font-size:18px; float:left; margin: auto; margin-left:7%;">
            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices R1\Late Payments on Equifax.pdf" download>Late Payments on Equifax</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices R1\Late Payments on Experian.pdf" download>Late Payments on Experian</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices R1\Late Payments on TransUnion.pdf" download>Late Payments on TransUnion</a></p>        
        </div>

        <div style="text-align:left; color: Black; font-size:18px; float:left; margin: auto; margin-left:7%;">
            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices R1\Public Records on Equifax.pdf" download>Public Records on Equifax</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices R1\Public Records on Experian.pdf" download>Public Records on Experian</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices R1\Public Records on TransUnion.pdf" download>Public Records on TransUnion</a></p>
        </div>
</body>


