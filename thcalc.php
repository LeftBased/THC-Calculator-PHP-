<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <style>
            html, body {
				background-color: black;
				color: white;
                height: 100%;
            }
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'system-ui';
            }
            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }
            .content {
                text-align: center;
                display: inline-block;
			}
			.TG{ color:lightgreen }
			.TY{ color:red }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                      <form action="" method="post">
<label>Enter THC%:</label><input type="text" name="thcperc" value=''/><br><br>
<input name="form" type="submit" value="Submit"/><br><br>
</form>
<?php 
$THCPerc= $_POST['thcperc'];
$THCGram = $THCPerc / 0.1;
$THCHalfG = $THCGram / 2;
$THC8th = $THCGram * 3.5;
$THCQuarter = $THCGram * 7;
$THCHalfZ = $THCGram * 14;
$THCOunce = $THCGram * 28;
$THCQuartG = $THCGram / 4;
$THCTwoTenths = $THCGram / 5;
$THCTenth = $THCGram / 10;
$THCHalfTen = $THCGram / 20;

echo "$THCPerc% THC<br>One Gram (1g) = 
<span class='TY'>$THCGram mg</span><span class='TG'> of THC Available</span> 
in about 1,000 miligrams
<br>Half Gram (0.5g) = <span class='TY'>$THCHalfG mg</span> <span class='TG'>of THC Available</span> 
in about 500 mg
<br>An 8th (3.5g) = <span class='TY'>$THC8th mg</span><span class='TG'> of THC Available</span>
in about 3,500 mg
<br>A Quarter Oz (7g) = <span class='TY'>$THCQuarter mg</span><span class='TG'> of THC Available</span>
in about 7,000 mg
<br>A Half Oz (14g) = <span class='TY'>$THCHalfZ mg</span><span class='TG'> of THC Available</span>
in about 14,000 mg
<br>One Ounce (28g) = <span class='TY'>$THCOunce mg</span><span class='TG'> of THC Available</span>
in about 28,000 mg
<br>Quarter Gram (0.25g) = <span class='TY'>$THCQuartG mg</span><span class='TG'> of THC Available</span>
in about 250 mg
<br>Two Tenths (0.20g) = <span class='TY'>$THCTwoTenths mg</span><span class='TG'> of THC Available</span>
in about 200 mg
<br>One Tenth (0.10g) = <span class='TY'>$THCTenth mg</span><span class='TG'> of THC Available</span>
in about 100 mg
<br>Half Tenth (0.05g) = <span class='TY'>$THCHalfTen mg</span><span class='TG'> of THC Available</span>
in about 50 mg";
?>
                </div>
            </div>

        </div>
    </body>
</html>