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
			letter-spacing:2px;
        }

        .tableInfo p {
            padding-left: 1.5%;
            font-weight:bold;
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
            letter-spacing:2px;
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
            line-height: 22px;
            
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
            <div class="tableInfo" >
                <p class="compactAddress"><span><?=$firstname?></span>  <span><?=$lastname?></span></p>
                <p class="compactAddress"><?=$streetAddress?></p>
                <p class="compactAddress"><?=$city.','.$state.','.$zip?></p>
                <p class="compactAddress"><?=$telephone?></p>
                <br>
                <br>
                <p ><?=$socialNumber?></p>
                <p ><?=$birthdate?></p>
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
                <p>Equifax Information Services</p>
                <p>P.O. Box 740256</p>
                <p>Atlanta, GA</p>
                <p>30374</p>
                    
            </div>
        </div>

        <div class="proof">
            <p style="text-align:center">
           <span style="padding-bottom:40px;font-weight: bold;line-height:3em; text-align:center; border-bottom:2px solid black">DEMAND REQUEST OF VERIFIABLE PROOF</span></p>
            
            <p>According to the Fair Credit Reporting Act, Section 609 (a)(1)(A), you are required by Federal law to verify - through the “physical verification of the original signed consumer contract” any and all accounts you post on a credit report.  Otherwise, anyone paying for your reporting services could fax, mail or email in a fraudulent account.</p>

            <p>With this legally certified document, I demand to see Verifiable Proof in the form of an original Consumer Contract with my Signature on it for the accounts listed below. </p>

            <p>I make this request pursuant to the right afforded me by Section 609 (a)(1)(A) of the FCRA. I demand to see the Verifiable Proof, the original signed Consumer Contract that you must have on file to report these accounts.</p>

            <p>Your failure to positively verify these accounts has adversely affected and hurt my ability to obtain credit.</p>

            <p>Under the FCRA, Unverified Accounts must be removed and if you are unable to provide me a Copy of the Verifiable Proof you have on file than you must remove them immediately.</p>

            <p style="text-align:center">Continued From Previous Page</p>

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

            <p>Under the FCRA, unverified accounts must be removed. If you are unable to provide me a copy of the Verifiable Proof that you have on file (as outlined in Section 609 (a)(1)(A) of the FCRA) than you must remove these immediately. </p>

            <p style="margin-bottom:50px;"><span>Sincerely,</span><br><?=$firstname?> <?=$lastname?></p>

            <p style="width:60%;margin-bottom:50px; font-size: .75 em;font-weight: normal;letter-spacing: 2px;line-height: 24px; border-bottom: 1px solid black"> <span>Signature:</span> </p>
            
            <p style="width:60%; font-size: .75 em;font-weight: normal;letter-spacing: 2px;line-height: 24px; border-bottom: 1px solid black"> <span>Date:</span> </p>
        </div>
</div>
    
</body>
</html>