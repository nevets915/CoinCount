<?php include("include/header.php"); ?>

<div class ="jumbotron col-sm-12">
    <header class="content" style = "text-align: center">
        <h1>Cash Calculator</h2>
        <span class="cent">&cent;&cent;&cent;&cent;</span>
        <span class="and">&amp;</span>&nbsp;
        <span class="dollar">$$$$</span>&nbsp;
        <h3>Please enter your coin count and denominations:</h3>
        <br />
    </header>
</div>
    
<form action="coincount.php" method="post">
<div class = "container">    
    <span style= "color:red;">
<?php
    if (isset($_GET["msg"])) {
        echo "Error: " . $_GET["msg"];
    }?></span>
    <br/>
    <br/>
<table class = "table">
    <div class = "row">
        <div class ="col-sm-2">
            <label>&nbsp</label>
        </div>
        <div class ="col-sm-2">
            <label for = "pennies">Pennies (1 &cent;):</label>
        </div>
        <div class ="col-sm-7">
            <input class= "form-control" type="text" name="pennies" size="6" placeholder="Enter pennies" />
        </div>
    </div>
    
    <div class ="row">
        <div class ="col-sm-2">
            <label>&nbsp</label>
        </div>
        <div class ="col-sm-2">
            <label for = "nickels">Nickels (5 &cent;):</label>
        </div>
        <div class= "col-sm-7">
            <input class= "form-control" type="text" name="nickels" size="6" placeholder="Enter nickles" />
        </div>
    </div>
    
    <div class="row">
        <div class ="col-sm-2">
            <label>&nbsp</label>
        </div>
        <div class="col-sm-2">
            <label for = "dimes">Dimes (10 &cent;):</label>
        </div>
        <div class="col-sm-7">
            <input class= "form-control" type="text" name="dimes" size="6" placeholder="Enter dimes" />
        </div>
    </div>
    
    <div class="row">
        <div class ="col-sm-2">
            <label>&nbsp</label>
        </div>
        <div class="col-sm-2">
            <label for = "quarters">Quarters (25 &cent;):</label>
        </div>
        <div class ="col-sm-7">
            <input class= "form-control" type="text" name="quarters" size="6" placeholder="Enter quarters"/>
        </div>
    </div>
    
    <div class="row">
        <div class ="col-sm-2">
            <label>&nbsp</label>
        </div>
        <div class="col-sm-2">
            <label for = "dollar">1 Dollar Coins:</label>
        </div>
        <div class="col-sm-7">
            <input class= "form-control" type="text" name="dollar" size="6" placeholder="Enter one dollar coins" />
        </div>
    </div>
    
    <div class="row">
        <div class ="col-sm-2">
            <label>&nbsp</label>
        </div>
        <div class = "col-sm-2">    
            <label for = "twodollar">2 Dollar Coins:</label>
        </div>
        <div class ="col-sm-7">
            <input class= "form-control" type="text" name="twodollar" size="6" placeholder="Enter two dollar coins" />
        </div>
    </div>
    
    <div class ="row">
        <div class ="col-sm-3">
            <label>&nbsp</label>
        </div>
        <div class ="col-xs-2">
            <input class="btn btn-info" type="submit" name="submit" value="Calculate Coins" />
        </div>
        <div class ="col-xs-1">
            &nbsp
        </div>
        <div class ="col-xs-2">
            <input class ="btn btn-info" type="reset" name="reset" value="Clear form" />
        </div>
    </div>
</div>
</table>
</form>
<?php include("include/footer.php"); ?>

