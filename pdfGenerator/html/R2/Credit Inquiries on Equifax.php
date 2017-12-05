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
            height: 4%;
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
            letter-spacing: 1.8px;
            line-height: 20px;
            
        }

        .hr {
            padding-top:40px;
            margin-top: 40px;
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
                <p>Equifax Information Services </p>
                <p>P.O. Box 740256</p>
                <p>Atlanta, GA.</p>
                <p>30374</p>
                    
            </div>
        </div>

        <div class="proof">
            <p style="text-align:center">
           <span style="padding-bottom:40px;font-weight: bold;line-height:3em; text-align:center; border-bottom:2px solid black">SECOND DEMAND REQUEST OF PROOF OF WRITTEN REQUEST</span></p>
            
            <p>Please be advised this is my SECOND WRITTEN REQUEST SENT WITH CERTIFIED POSTAGE.</p>

            <p>According to Section 604.(a)(2) of the FCRA, it states that the circumstance in which a CRA (Bureau) may furnish a consumer report is to be "In accordance with the written instructions of the consumer to whom it relates." The aforementioned section clearly refers to a credit inquiry. In addition, it is an indication that the CRA is to have proof of the written instructions.</p>

            <p>Furthermore, Section 604.(f)(2) states a person shall not use or obtain a consumer report for any purpose "unless the purpose is certified in accordance with section 607 [15 U.S.C. § 1681e] by a prospective user of the report through a general or specific certification."</p>

            <p>Whereas Section 610.(a)(1) states, a consumer reporting agency shall require, as a condition of making the disclosures required under section 609 [§ 1681g], that the consumer furnish proper identification.</p>

            <p>Pursuant to these 3 sectionsyou are required under the FCRA to provide me with Valid Proof of my Written Request, the Proper Identification and the Certification required for the inquiries on my credit profile.</p>

            <p>You have NOT provided me a copy of ANY original documentation. The law is very clear as to the Civil liability and the remedy available to me for “negligent noncompliance” (Section 617) if you fail to comply.</p>

            <p style="text-align:center">Continued From Previous Page</p>

            <p>I am a litigious consumer and fully intend turning this matter over to a consumer advocate attorney to begin litigation in this matter to enforce my rights under the FCRA. Please either send me a copy of any original documentation for the following inquiries OR please remove them.</p>

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

            <p>Please be warned, in accordance with section § 611.(5)(A)(i) "If, after any reinvestigation under paragraph (1) of any information disputed by a consumer, an item of the information is found to be inaccurate or incomplete or cannot be verified, the consumer reporting agency shall promptly delete that item of information from the file of the consumer."</p>

            <p>In the event the aforementioned requirements to furnish proof of the disputed items on a credit report have not been obtained and per the FCRA, I request the inquiries to be removed immediately. This is a certified request within my rights.</p>

            <p>Thank you for yourimmediate attention to this matter.</p>

            <p style="margin-bottom:50px"><span>Sincerely,</span><br><?=$firstname?> <?=$lastname?></p>

            <p style="width:60%;margin-bottom:50px; font-size: .75 em;font-weight: normal;letter-spacing: 2px;line-height: 25px; border-bottom: 1px solid black"> <span>Signature:</span> </p>

            <p style="width:60%; font-size: .75 em;font-weight: normal;letter-spacing: 2px;line-height: 25px; border-bottom: 1px solid black"> <span>Date:</span> </p>


        </div>
</div>
    
</body>
</html>