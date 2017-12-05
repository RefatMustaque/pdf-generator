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
            height: 50%;
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
            line-height: 25px;
            letter-spacing: 2px;
        }

        .tableInfo p {
            padding-left: 1.5%;
            font-Weight: bold;
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
            letter-spacing: 2px;;
        }

        .tableReturnReceipt p {
            padding: 0px;
            margin: 0px;
        }


        div.tableDemandRequest {
            width: 50%;
            height:20%;
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
            padding-top:27px;
            margin-top: 27px;
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
            <div class="tableInfo .fontDescription" >
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
           <span style="padding-bottom:40px;font-weight: bold;line-height:3em; text-align:center; border-bottom:2px solid black">SECOND DEMAND REQUEST OF VERIFIABLE PROOF</span></p>
            
            <p>Please be advised this is my SECOND WRITTEN REQUEST SENT WITH CERTIFIED POSTAGE.</p>

            <p>The unverified items listed below remain on my credit report in violation of Federal Law.  You are required under the FCRA to have a copy of the original creditor’s documentation on file to verify that this information is mine and is correct. In the results of your first investigation, you stated in writing that you “verified” that these items are being “reported correctly”. Who verified these accounts and what proof are you basing this on?</p>

            <p>You have NOT provided me a copy of ANY original documentation required under the FCRA Section 609 (a)(1)(A) & Section 611 (a)(1)(A) (a consumer contract with my signature on it).</p>

            <p>Furthermore, under FCRA Section 611 (5)(A) – you are required to “…promptly DELETE all information which cannot be verified.”</p>

            <p>The law is very clear as to the Civil liability and the remedy available to me for “negligent noncompliance” (Section 617) if you fail to comply. I am a litigious consumer and fully intend turning this matter over to a consumer advocate attorney to begin litigation in this matter to enforce my rights under the FCRA.</p>

            <p style="text-align:center">Continued From Previous Page</p>

            <p>I demand the following accounts be verified or removed immediately:</p>

            <table>
                <tr>
                    <td style=" font-size: .75 em;font-weight: normal;letter-spacing: 2px;line-height: 25px;">Account Name</td>
                    <td style="padding-left: 200px;font-size: .75 em;font-weight: normal;letter-spacing: 2px;line-height: 25px;">Account Number</td>
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

            <p>Under the FCRA, unverified accounts must be removed. If you are unable to provide me a copy of the Verifiable Proof that you have on file (as outlined in Section 609 (a)(1)(A) of the FCRA) than you must remove these immediately.</p>

            <p style="margin-bottom:40px"><span>Sincerely,</span><br><?=$firstname?> <?=$lastname?></p>

            <p style="width:60%;margin-bottom:40px; font-size: .75 em;font-weight: normal;letter-spacing: 2px;line-height: 24px; border-bottom: 1px solid black"> <span>Signature:</span> </p>
            
            <p style="width:60%; font-size: .75 em;font-weight: normal;letter-spacing: 2px;line-height: 24px; border-bottom: 1px solid black"> <span>Date:</span> </p>
        </div>
</div>
    
</body>
</html>