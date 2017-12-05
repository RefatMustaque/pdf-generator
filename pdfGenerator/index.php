<?php
set_time_limit(60);
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
$_SESSION['birthdate'] = 'Date of Birth: '.substr($_POST["birthdate"], 5, 2). '/' . substr($_POST["birthdate"], 8, 2).'/'.substr($_POST["birthdate"], 0, 4);
$_SESSION['socialNumber'] = 'Last 4 of SS#: '.substr($_POST["socialNumber"], 0, 3).'-'.substr($_POST["socialNumber"], 3, 2).'-'.substr($_POST["socialNumber"],5);
$_SESSION['date'] = substr($_POST["date"], 5, 2). '/' . substr($_POST["date"], 8, 2).'/'.substr($_POST["date"], 0, 4);

//$htmpPage -> html to convert into pdf
//$pdfName -> Desied name for the pdf
//$folderName -> Desired subdirectory name under Lgeal Notices folder
function createPdf ($htmpPage, $pdfName, $folderName){
    $mpdf =new mPDF();

    //to unlink file if already exist
    $filename = 'Legal Notices/'.$folderName. '/' .$pdfName. ".pdf";

    //Check if the directory exists.
    if(file_exists($filename)){
        //Directory exist, so lets delete it.
        unlink($filename);
    }

    ob_start();
    include($htmpPage);
    $content = ob_get_contents();
    ob_end_clean();
    
    $mpdf->WriteHTML($content);

    //The name of the directory that we need to create.
    $directoryName = 'Legal Notices';
    $subDirectoryName = 'Legal Notices/'.$folderName;
     //Check if the directory already exists.
    if(!is_dir($directoryName)){
        //Directory does not exist, so lets create it.
        mkdir($directoryName, 0755);
    }
    if(!is_dir($subDirectoryName)){
        //Sub Directory Does not exist, so lets create it
        mkdir($subDirectoryName, 0755);
    }

    $pdfDirectoryName = 'Legal Notices/'.$folderName;
    $mpdf->Output($pdfDirectoryName. '/'.$pdfName.'.pdf','F');

    unset($mpdf);
}


//$folderName -> path of the directory where the file exists
//$ZipName -> Desired Name for zip folder
function createZip ($folderName, $ZipName){
    $zip = new ZipArchive;

    if ($zip->open('Legal Notices '.$ZipName.'.zip', ZipArchive::CREATE) === TRUE)
    {
    
        if ($handle = opendir($folderName))
        {   
            // Add all files inside the directory
            while (false !== ($entry = readdir($handle)))
            {
                if ($entry != "." && $entry != ".." && !is_dir($folderName . $entry))
                {
                    $zip->addFile($folderName.'/'. $entry , $entry);
                }
                ob_end_clean();
            }
            closedir($handle);
        }
     
        $zip->close();
    }
}

     

include("../mpdf/mpdf60/mpdf.php");
$html = scandir('html');
// $files = scandir('files');
$i = 2;

while(!empty($html[$i]))
{
    $r = scandir('html'.'/'.$html[$i]);
    
    $j = 2;
    while(isset($r[$j]))
    {
        $name = explode(".", $r[$j]);
        $phpFilePath = 'html/'.$html[$i]. '/'.$r[$j];
        createPdf($phpFilePath, $name[0] , $html[$i]);
        $j++;
    }

    createZip ('Legal Notices/'.$html[$i], $html[$i]);

    $i++;
}


// createPdf('html/R1/collectionEqR1.php','Collections on Equifax', 'R1');
// createPdf('html/R1/collectionExR1.php','Collections on Experian', 'R1');
// createPdf('html/R1/collectionTuR1.php','Collections on TransUnion', 'R1');
// createPdf('html/R1/inquiresEqR1.php','Credit Inquiries on Equifax', 'R1');
// createPdf('html/R1/inquiresExR1.php','Credit Inquiries on Experian', 'R1');
// createPdf('html/R1/inquiresTuR1.php','Credit Inquiries on TransUnion', 'R1');
// createPdf('html/R1/latePaymentEqR1.php','Late Payments on Equifax', 'R1');
// createPdf('html/R1/latePaymentExR1.php','Late Payments on Experian', 'R1');
// createPdf('html/R1/inquiresTuR1.php','Late Payments on TransUnion', 'R1');
// createPdf('html/R1/publicRecordsEqR1.php','Public Records on Equifax', 'R1');
// createPdf('html/R1/publicRecordsExR1.php','Public Records on Experian', 'R1');
// createPdf('html/R1/publicRecordsTuR1.php','Public Records on TransUnion', 'R1');
// createZip ('Legal Notices/R1', 'R1');





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
        .clear {
        clear: both;
    }
    </style>
</head>
<body style="background-color:#f8f7d6">
        <!-- <div style="text-align:center; color: Black; font-size:30px; margin-top:30px">
            <p><a style="text-decoration: none; color:Green; Border: 1px solid green; font-size:35px; padding:5px;" align="center" href="../../index.php">Click Here to Go to Home Page</a></p>
        </div>

        <div style="text-align:center; color: Black; font-size:30px; margin-top:30px">
            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices R1.zip" download>Download Legal Notices R1.zip</a></p>
        </div>
        
        <div style="text-align:left; color: Black; font-size:18px; float:left; margin: auto; margin-left:7%;">
            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R1\Collections on Equifax.pdf" download>Collections on Equifax</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R1\Collections on Experian.pdf" download>Collections on Experian</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R1\Collections on TransUnion.pdf" download>Collections on TransUnion</a></p>
        </div>

        <div style="text-align:left; color: Black; font-size:18px; float:left; margin: auto; margin-left:7%;">
            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R1\Credit Inquiries on Equifax.pdf" download>Credit Inquiries on Equifax</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R1\Credit Inquiries on Experian.pdf" download>Credit Inquiries on Experian</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R1\Credit Inquiries on TransUnion.pdf" download>Credit Inquiries on TransUnion</a></p>
        </div>


        <div style="text-align:left; color: Black; font-size:18px; float:left; margin: auto; margin-left:7%;">
            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R1\Late Payments on Equifax.pdf" download>Late Payments on Equifax</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R1\Late Payments on Experian.pdf" download>Late Payments on Experian</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R1\Late Payments on TransUnion.pdf" download>Late Payments on TransUnion</a></p>        
        </div>

        <div style="text-align:left; color: Black; font-size:18px; float:left; margin: auto; margin-left:7%;">
            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R1\Public Records on Equifax.pdf" download>Public Records on Equifax</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R1\Public Records on Experian.pdf" download>Public Records on Experian</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R1\Public Records on TransUnion.pdf" download>Public Records on TransUnion</a></p>
        </div> -->

        <div class="clear"></div>

        <div style="text-align:center; color: Black; font-size:30px; margin-top:30px">
            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R2.zip" download>Download Legal Notices R2.zip</a></p>
        </div>
        
        <div style="text-align:left; color: Black; font-size:18px; float:left; margin: auto; margin-left:7%;">
            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R2\Collections on Equifax.pdf" download>Collections on Equifax</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R2\Collections on Experian.pdf" download>Collections on Experian</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R2\Collections on TransUnion.pdf" download>Collections on TransUnion</a></p>
        </div>

        <div style="text-align:left; color: Black; font-size:18px; float:left; margin: auto; margin-left:7%;">
            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R2\Credit Inquiries on Equifax.pdf" download>Credit Inquiries on Equifax</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R2\Credit Inquiries on Experian.pdf" download>Credit Inquiries on Experian</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R2\Credit Inquiries on TransUnion.pdf" download>Credit Inquiries on TransUnion</a></p>
        </div>


        <div style="text-align:left; color: Black; font-size:18px; float:left; margin: auto; margin-left:7%;">
            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R2\Late Payments on Equifax.pdf" download>Late Payments on Equifax</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R2\Late Payments on Experian.pdf" download>Late Payments on Experian</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R2\Late Payments on TransUnion.pdf" download>Late Payments on TransUnion</a></p>        
        </div>

        <div style="text-align:left; color: Black; font-size:18px; float:left; margin: auto; margin-left:7%;">
            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R2\Public Records on Equifax.pdf" download>Public Records on Equifax</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R2\Public Records on Experian.pdf" download>Public Records on Experian</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R2\Public Records on TransUnion.pdf" download>Public Records on TransUnion</a></p>
        </div>

        <div class="clear"></div>

        <!-- <div style="text-align:center; color: Black; font-size:30px; margin-top:30px">
            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices R3.zip" download>Download Legal Notices R3.zip</a></p>
        </div>
        
        <div style="text-align:left; color: Black; font-size:18px; float:left; margin: auto; margin-left:7%;">
            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R3\Collections on Equifax.pdf" download>Collections on Equifax</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R3\Collections on Experian.pdf" download>Collections on Experian</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R3\Collections on TransUnion.pdf" download>Collections on TransUnion</a></p>
        </div>

        <div style="text-align:left; color: Black; font-size:18px; float:left; margin: auto; margin-left:7%;">
            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R3\Credit Inquiries on Equifax.pdf" download>Credit Inquiries on Equifax</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R3\Credit Inquiries on Experian.pdf" download>Credit Inquiries on Experian</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R3\Credit Inquiries on TransUnion.pdf" download>Credit Inquiries on TransUnion</a></p>
        </div>


        <div style="text-align:left; color: Black; font-size:18px; float:left; margin: auto; margin-left:7%;">
            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R3\Late Payments on Equifax.pdf" download>Late Payments on Equifax</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R3\Late Payments on Experian.pdf" download>Late Payments on Experian</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R3\Late Payments on TransUnion.pdf" download>Late Payments on TransUnion</a></p>        
        </div>

        <div style="text-align:left; color: Black; font-size:18px; float:left; margin: auto; margin-left:7%;">
            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R3\Public Records on Equifax.pdf" download>Public Records on Equifax</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R3\Public Records on Experian.pdf" download>Public Records on Experian</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R3\Public Records on TransUnion.pdf" download>Public Records on TransUnion</a></p>
        </div>


        <div class="clear"></div>

        <div style="text-align:center; color: Black; font-size:30px; margin-top:30px">
            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices R4.zip" download>Download Legal Notices R4.zip</a></p>
        </div>
        
        <div style="text-align:left; color: Black; font-size:18px; float:left; margin: auto; margin-left:7%;">
            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R4\Collections on Equifax.pdf" download>Collections on Equifax</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R4\Collections on Experian.pdf" download>Collections on Experian</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R4\Collections on TransUnion.pdf" download>Collections on TransUnion</a></p>
        </div>

        <div style="text-align:left; color: Black; font-size:18px; float:left; margin: auto; margin-left:7%;">
            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R4\Credit Inquiries on Equifax.pdf" download>Credit Inquiries on Equifax</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R4\Credit Inquiries on Experian.pdf" download>Credit Inquiries on Experian</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R4\Credit Inquiries on TransUnion.pdf" download>Credit Inquiries on TransUnion</a></p>
        </div>


        <div style="text-align:left; color: Black; font-size:18px; float:left; margin: auto; margin-left:7%;">
            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R4\Late Payments on Equifax.pdf" download>Late Payments on Equifax</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R4\Late Payments on Experian.pdf" download>Late Payments on Experian</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R4\Late Payments on TransUnion.pdf" download>Late Payments on TransUnion</a></p>        
        </div>

        <div style="text-align:left; color: Black; font-size:18px; float:left; margin: auto; margin-left:7%;">
            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R4\Public Records on Equifax.pdf" download>Public Records on Equifax</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R4\Public Records on Experian.pdf" download>Public Records on Experian</a></p>

            <p><a style="text-decoration: none; color:Black; Border: 1px solid black; padding:5px;" href="Legal Notices\R4\Public Records on TransUnion.pdf" download>Public Records on TransUnion</a></p>
        </div> -->
        
</body>


