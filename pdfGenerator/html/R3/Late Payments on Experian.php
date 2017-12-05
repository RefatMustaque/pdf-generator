<?php
    $firstname = (isset($_SESSION['firstname']) ? $_SESSION['firstname'] : '');
    $lastname = (isset($_SESSION['lastname']) ? $_SESSION['lastname'] : '');
    $streetAddress = (isset($_SESSION['streetAddress']) ? $_SESSION['streetAddress'] : '');
    $city = (isset($_SESSION['city']) ? $_SESSION['city'] : '');
    $state = (isset($_SESSION['state']) ? $_SESSION['state'] : '');
    $zip = (isset($_SESSION['zip']) ? $_SESSION['zip'] : '');
    $telephone = (isset($_SESSION['telephone']) ? $_SESSION['telephone'] : '');
    $birthdate = (isset($_SESSION['birthdate']) ? $_SESSION['birthdate'] : '');
    $socialNumber = (isset($_SESSION['socialNumber']) ? $_SESSION['socialNumber'] : '');
    $date= (isset($_SESSION['date']) ? $_SESSION['date'] : '');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @page toc { sheet-size: A4; }

        body {
            margin: 0px;
            padding: 0px;
        }
  
        div.container {
            margin-top: 8Px;
            margin-bottom: 8px;
            margin-left: 3%;
            margin-right: 3%;
          /*  background-color: lightgray;*/
            border-color: 1px solid black;
        }

        div.pageFirstHalf {
            height: 48%;
        }
        
        div.tableInfo {
            width: 47%;
            height: 40%;
            float: left;
           /* background-color: blue;*/
            border-right: 2px solid #000000;
            padding-top: 1%;
            padding-left: 1%;
            font-size: .75 em;
            font-weight: normal;
            line-height: 25px;
            letter-spacing: 2px;
        }

        .tableInfo p {
            padding-left: 1.5%;
            font-weight: bold;
        }

        .compactAddress {
            line-height: 5px;
        }

        div.tableReturnReceipt {
            width: 50%;
            height:20%;
            float: right;
           /* background-color: green;*/
            font-size: .75 em;
            font-weight: normal;
            padding-top: 3%;
            padding-left: 1%;
            letter-spacing:2px;
        }

        .tableReturnReceipt p {
            padding: 0px;
            margin: 0px;
        }


        div.tableDemandRequest {
            width: 50%;
            height:15%;
            float: right;
           /* background-color: red;*/
            font-size: .75 em;
            font-weight: normal;
            letter-spacing: 2px;
        }

        .tableDemandRequest p {
            padding: 0px;
            margin: 0px;
        }

        div.proof {
            width: 100%;
            font-size: .75em;
            font-weight: normal;
            letter-spacing: 2px;
            line-height: 20px;
            
        }

        .hr {
            padding-top:32px;
            margin-top: 32px;
        }

        .bold {
            font-weight: bold;
            line-height: 4em;
        }

        .clear {
            clear: both;
        }

    </style>
</head>
<body>

<div class="container .fontDescription">
        <div class="pageFirstHalf">
            <div class="tableInfo" >
                <p class="compactAddress"><span><?=$firstname?></span>  <span><?=$lastname?></span></p>
                <p class="compactAddress"><?=$streetAddress?></p>
                <p class="compactAddress"><?=$city. ',' .$state. ',' .$zip;?></p>
                <p class="compactAddress"><?=$telephone?></p>
                <br>
                <br>
                <p><?=$socialNumber?></p>
                <p><?=$birthdate?></p>
                <br>
                <br>
                <p><?=$date?></p>
            </div>

            <div class="tableReturnReceipt">
                <p class="bold">Certified Mail-Return Receipt</p>
                <p>Enclosures:</p>
                <p>Driver License</p>
                <p>Personal Bill</p>
                <p>Social Security Doc</p>
            </div>

            <div class="tableDemandRequest">

                <p class="bold receiptDemand">DEMAND REQUEST FOR</p>
                <p>Experian / NCAC</p>
                <p>P.O. Box 9701</p>
                <p>Allen, TX.</p>
                <p>75013-9701</p>
                    
            </div>
        </div>

        <div class="proof">
            <p style="text-align:center">
           <span style="padding-bottom:40px;font-weight: bold;line-height:3em; text-align:center; border-bottom:2px solid black">DEMAND REQUEST OF PROOF OF WRITTEN REQUEST</span></p>

           <p style="text-align:center">
           <span style="padding-bottom:40px;font-weight: bold;line-height:3em; text-align:center; border-bottom:2px solid black">TO ALL CONCERNED PARTIES</span></p>
            
            <p>According to section § 607.(b) of the FCRA regarding the "Accuracy of report. Whenever a consumer reporting agency prepares a consumer report it shall follow reasonable procedures to assure maximum possible accuracy of the information concerning the individual about whom the report relates."</p>

            <p>However, it appears that you have failed to follow the procedures necessary to assure maximum possible accuracy of my credit report, otherwise the late payments listed below would not be on my credit report.</p>

            <p>Furthermore, and in accordance with section § 609 off the FCRA <span style="padding-bottom:40px; border-bottom:1px solid black">I formally request to be provided proof of the alleged late payments.</span></p>

            <p>Finally, in the event there is no such proof to support the claim that I made any late payment and according to section § 611.(5)(A)(i) you must "promptly delete that item of information from the file of the consumer, or modify that item of information"</p>

            <p>Therefore, I am requesting that you reinvestigate and correctly update and provide proof or positively update the following late payments:</p>


            <p style="text-align:center">Continued From Previous Page</p>

            <table>
                <tr>
                    <td style=" font-size: .75 em;font-weight: normal;letter-spacing: 2px;line-height: 25px;">Date Inquiry Made By</td>
                    <td style="padding-left: 200px;font-size: .75 em;font-weight: normal;letter-spacing: 2px;line-height: 25px;">Date</td>
                </tr>
            </table>

            <hr style="padding-top:0px; margin-top: 0px;">

            <hr class="hr">

            <hr class="hr">

            <hr class="hr">

            <hr class="hr">

            <hr class="hr">

            <hr class="hr">

            <hr class="hr">

            <hr class="hr">

            <hr class="hr">

            <hr class="hr">

            <hr class="hr">

            <hr class="hr">

            <hr class="hr">

            <hr class="hr">

            <hr class="hr">

            <p>Please positively update the above information as quickly as possible.</p>

            <p style="line-height:40px"><span>Sincerely,</span><br><?=$firstname?> <?=$lastname?></p>

            <p style="width:60%; margin-bottom:40px; font-size: .75 em;font-weight: normal;letter-spacing: 2px;line-height: 24px; border-bottom: 1px solid black"> <span>Signature:</span> </p>

            <p style="width:60%; font-size: .75 em;font-weight: normal;letter-spacing: 2px;line-height: 24px; border-bottom: 1px solid black"> <span>Date:</span> </p>


        </div>
</div>
    
</body>
</html>