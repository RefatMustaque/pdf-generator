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
            height: 40%;
        }
        
        div.tableInfo {
            width: 47%;
            height: 40%;
            float: left;
           /* background-color: blue;*/
            border-right: 2px solid black;
            padding-top: 1%;
            padding-left: 1%;
            font-size: .75 em;
            font-weight: normal;
            line-height: 20px;
			letter-spacing:2px;
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
            letter-spacing: 2px;
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
            line-height: 18px;
            
        }

        .hr {
            padding-top:22px;
            margin-top: 22px;
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

<div class="container">
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
            <p style="text-align:center; margin-top:35px; margin-bottom:40px;">
           <span style="padding-bottom:40px;font-weight: bold;line-height:30px; text-align:center; border-bottom:2px solid black;letter-spacing:0.5px">DEMAND REQUEST OF UPDATED REPORT AND SUPPORTING EVIDENCE</span></p>
  
            <p>I am exercising my right to have an updated or corrected report along with all supporting evidence sent to me immediately if you wish to continue reporting any of the negative information listed below. This is my legal right and you MUST comply or be in violation of FTC and the FCRA.</p>

            <p style="margin-bottom:-10px"><span style="padding-bottom:40px;font-weight: normal;line-height:20px; border-bottom:1px solid black;letter-spacing:2px; ">Public Records</span></p>

            <p style="margin-top: 0px; padding-top:0px">Please verify and <span style="padding-bottom:40px;font-weight: normal;line-height:25px; border-bottom:1px solid black;letter-spacing:2px;">SEND ME PROOF</span> of the filing date, asset liability, social security number, discharge date, and docket number for the public record listed below or take it off right away. This is seriously harmful to my credit status:</p>

            <table>
                <tr>
                    <td style=" font-size: .75 em;font-weight: normal;letter-spacing: 2px;line-height: 25px;">Name</td>
                    <td style="padding-left: 200px;font-size: .75 em;font-weight: normal;letter-spacing: 2px;line-height: 25px;">Docket Number</td>
                </tr>
            </table>

            <hr style="padding-top:0px; margin-top: 0px;">

            <hr class="hr">

            <hr class="hr">

            <hr class="hr">

            <hr class="hr">

            <hr class="hr">

            <p>Thank you for your attention to this matter.</p>

            <p><span>Signature:</span><span style="letter-spacing:0px">___________________________________________</span><span>Date:</span><span style="letter-spacing:0px">_________________________________</span></p>

            <p style="text-align:center">Continued From Previous Page</p>

            <p style="margin-bottom:-10px"><span style="padding-bottom:40px;font-weight: normal;line-height:25px; border-bottom:1px solid black;letter-spacing:2px; ">Additional Public Records</span></p>

            <p style="margin-top: 0px; padding-top:0px">Please verify and <span style="padding-bottom:40px;font-weight: normal;line-height:20px; border-bottom:1px solid black;letter-spacing:2px;">SEND ME PROOF</span> of the filing date, asset liability, social security number, discharge date, and docket number for the public record listed below or take it off right away. This is seriously harmful to my credit status:</p>

            <table>
                <tr>
                    <td style=" font-size: .75 em;font-weight: normal;letter-spacing: 2px;line-height: 25px;">Name</td>
                    <td style="padding-left: 200px;font-size: .75 em;font-weight: normal;letter-spacing: 2px;line-height: 25px;">Docket Number</td>
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

            <p>Thank you for your attention to this matter.</p>

            <p style="line-height:40px;"><span>Sincerely,</span><br><?=$firstname?> <?=$lastname?></p>

            <p style="width:60%; margin-bottom:40px; font-size: .75 em;font-weight: normal;letter-spacing: 2px;line-height: 24px; border-bottom: 1px solid black"> <span>Signature:</span> </p>

            <p style="width:60%; font-size: .75 em;font-weight: normal;letter-spacing: 2px;line-height: 24px; border-bottom: 1px solid black"> <span>Date:</span> </p>


        </div>
</div>
    
</body>
</html>