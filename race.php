<?php include 'header.php'?>

<style>
<?php include 'css/style.css'; ?>
</style>


<body>

<main>
   <div class="mainPage">
<?php
$country = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
?>

<div class="myForm">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
<h1>Where do you want to watch a race ? </h1>
<select class="myRaces" name="races">

<?php 

foreach($country as $races=>$capital){
    echo "<option value ='$races'> $races </option>"; 
}
?>;

<option value="another-country">Other Country</option>
</select>



<input type="submit" name="submit" value="send">




<?php
if(!isset($_POST['submit'])){
  //
  }
  else if (isset($_REQUEST['races']) && $_REQUEST['races'] == 'another-country')
  // 
  {
      echo "<p> Sorry this country is not listed to a race, subscribe your email to get when a race arrive in your country</p>";
      echo "Email: <input   type='email' name='email'><br>";
      echo "Country: <input  type='text' name='name' placeholder='Input the country'>";
      echo "<input  type='submit' value='subscribe'>"; 
      }
  else{
    //
    $racer=$_POST['races'];
    //
    $racerInputed=$country[$racer];

    $timestamp = mt_rand(1, time());
 
    //Format that timestamp into a readable date string.
    $randomDate = date("d M 2020", $timestamp);

    //
    echo "<p class='replyForm'>Will happen a race in $racer in the capital $racerInputed at $randomDate </p>"; 
        
}
?>

</div>
<img src="images/background.png">
   </div>
</main>
</body>


<?php include 'footer.php'?>