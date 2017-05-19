<?php include("include/header.php"); ?>

<div class ="jumbotron col-sm-12">
    <header class="content">
        <h1>Coin Count</h1>
        <h3>The following coins were counted and valued</h3>
        <br />
    </header>
</div>

<?php
$pennies = $_POST["pennies"];
$nickels = $_POST["nickels"];
$dimes = $_POST["dimes"];
$quarters = $_POST["quarters"];
$dollar = $_POST["dollar"];
$twodollar = $_POST["twodollar"];
$error = false;
$msg = "You must enter a number for ";
if(is_numeric($pennies)|| empty($pennies)) {
    
}else{
    $error = true;
    $msg .= "Pennies must be a number.  ";
}

if(is_numeric($nickels)|| empty($nickels)){
    
}else{
    $error = true;
    $msg .= "Nickels must be a number.  ";
}

if(is_numeric($dimes)|| empty($dimes)){
    
}else{
    $error = true;
    $msg .= "Dimes must be a number.  ";
}

if(is_numeric($quarters)|| empty($quarters)){
    
}else{
    $error = true;
    $msg .= "Quarters must be a number.  ";
}

if(is_numeric($dollar)|| empty($dollar)){
    
}else{
    $error = true;
    $msg .= "One dollar coins must be a number.  ";
}

if(is_numeric($twodollar)|| empty($twodollar)){
    
}else{
    $error = true;
    $msg .= "Two dollar coins must be a number.  ";
}

if($error === true){
    header("Location: index.php?msg=$msg"); die();
}
$total = 0;
foreach ($_POST as $key => $value) {
   
        if ($key == "pennies") {
            $total += $value;
        }
        if ($key == "nickels") {
            $total += $value * 5;
        }
    
        if ($key == "dimes") {
            $total += $value * 10;
        }
        if ($key == "quarters") {
            $total += $value * 25;
        }
        if ($key == "dollar") {
            $total += $value * 100;
        }
        if ($key == "twodollar") {
            $total += $value * 200;
        }   
}
$money = $total/100;
?>

<form action="index.php" method="post">
<div class = "container">    
    <table class = "table">
        <div class ="col-sm-6">
        <div class ="col-xs-6">
            <label for = "pennies">Pennies</label>
        </div>
        <div class ="col-xs-6">
            <label><?php echo $_POST["pennies"]?>&nbsp</label>
        </div>
        </div>
        <div class ="col-sm-6">
            <div class ="col-xs-6">
                <label for = "nickels">Nickels</label>
            </div>
            <div class ="col-xs-6">
                <label><?php echo $_POST["nickels"]?>&nbsp</label>
            </div>
        </div>
        <div class ="col-sm-6">
            <div class ="col-xs-6">
                <label for = "dimes">Dimes</label>
            </div>
            <div class ="col-xs-6">
                <label><?php echo $_POST["dimes"]?>&nbsp</label>
            </div>
        </div>
        <div class ="col-sm-6">
            <div class ="col-xs-6">
                <label for = "quarters">Quarters</label>
            </div>
            <div class ="col-xs-6">
                <label><?php echo $_POST["quarters"]?>&nbsp</label>
            </div>
        </div>
        <div class ="col-sm-6">
            <div class ="col-xs-6">
                <label for = "dollar">Dollar coin</label>
            </div>
            <div class ="col-xs-6">
                <label><?php echo $_POST["dollar"]?>&nbsp</label>
            </div>
        </div>
        <div class ="col-sm-6">
            <div class ="col-xs-6">
                <label for = "twodollar">Two Dollar coin</label>
            </div>
            <div class ="col-xs-6">
                <label><?php echo $_POST["twodollar"]?>&nbsp</label>
            </div>
        </div>
</table>

<h1>You therefore have:</h1>   
<table class = "table">
    <div class ="col-sm-6">
        <div class ="col-xs-6">
            <label for = "pennies">Total cents</label>
        </div>
        <div class ="col-xs-6">
            <label><?php echo $total ?></label>
        </div>
    </div>
    <div class ="col-sm-6">
        <div class ="col-xs-6">
            <label for = "nickels">Total dollars</label>
        </div>
        <div class ="col-xs-6">
            <label><?php echo $money ?></label>
        </div>
    </div>
</table>
<div class ="row">
        <div class ="col-xs-4">
            <input class="btn btn-success " type="submit" name="submit" value="Back to home page" />
        </div>
    </div>
</div>
</form>
<?php include("include/footer.php"); ?>