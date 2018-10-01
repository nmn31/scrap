<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	.grid_filter {
    padding: 20px 3px;
}
ul, menu, dir {
    display: block;
    list-style-type: disc;
    -webkit-margin-before: 1em;
    -webkit-margin-after: 1em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    -webkit-padding-start: 40px;
}
input, textarea, keygen, select, button {
    text-rendering: auto;
    color: initial;
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: start;
    margin: 0em 0em 0em 0em;
    font: 13.3333px Arial;
}

    
</style>
<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

//echo $_SERVER['DOCUMENT_ROOT'];
//exit;


//exit;

?>
<div class="grid_filter" style="margin-left: 220px">
					<form action="" method="post">
					<ul>
																	    
					    <li>
<select name="filters[date][month]" id="filters_date_month">
<option value=""></option>
<option value="1">01</option>
<option value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option value="5">05</option>
<option value="6">06</option>
<option value="7">07</option>
<option value="8">08</option>
<option value="9" selected="selected">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>/<select name="filters[date][day]" id="filters_date_day">
<option value=""></option>
<option value="1">01</option>
<option value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option value="5">05</option>
<option value="6">06</option>
<option value="7">07</option>
<option value="8">08</option>
<option value="9">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25" selected="selected">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>/<select name="filters[date][year]" id="filters_date_year">
<option value=""></option>
<option value="1950">1950</option>
<option value="1951">1951</option>
<option value="1952">1952</option>
<option value="1953">1953</option>
<option value="1954">1954</option>
<option value="1955">1955</option>
<option value="1956">1956</option>
<option value="1957">1957</option>
<option value="1958">1958</option>
<option value="1959">1959</option>
<option value="1960">1960</option>
<option value="1961">1961</option>
<option value="1962">1962</option>
<option value="1963">1963</option>
<option value="1964">1964</option>
<option value="1965">1965</option>
<option value="1966">1966</option>
<option value="1967">1967</option>
<option value="1968">1968</option>
<option value="1969">1969</option>
<option value="1970">1970</option>
<option value="1971">1971</option>
<option value="1972">1972</option>
<option value="1973">1973</option>
<option value="1974">1974</option>
<option value="1975">1975</option>
<option value="1976">1976</option>
<option value="1977">1977</option>
<option value="1978">1978</option>
<option value="1979">1979</option>
<option value="1980">1980</option>
<option value="1981">1981</option>
<option value="1982">1982</option>
<option value="1983">1983</option>
<option value="1984">1984</option>
<option value="1985">1985</option>
<option value="1986">1986</option>
<option value="1987">1987</option>
<option value="1988">1988</option>
<option value="1989">1989</option>
<option value="1990">1990</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
<option value="1993">1993</option>
<option value="1994">1994</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018" selected="selected">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
</select>					    
<input type="submit" name="submit" />
</li>					    					</ul>
								</form><br>
			</div>
<div class="table-responsive"> 
<?php     
 //if(isset($_POST['submit'])){

 	//print_r($_GET);

// }   
 //exit;

 if(isset($_POST['filters'])){
 	require_once('WebScraping.class.php');
 	$scarp_url = 'http://www.tvtango.com/listings?filters%5Bdate%5D%5Bmonth%5D='.$_POST['filters']['date']['month'].'&filters%5Bdate%5D%5Bday%5D='.$_POST['filters']['date']['day'].'&filters%5Bdate%5D%5Byear%5D='.$_POST['filters']['date']['year'].'&commit.x=21&commit.y=5';
	$PostsData = new WebScraping($scarp_url);
	$partDescription = $PostsData->pathObj->query('//table[@class="broadcast_grid"]');
  ?>
  <h1>On Date MM/DD/YYY</h1><BR>
  <h2><?PHP ECHO $_POST['filters']['date']['month'].'/'.$_POST['filters']['date']['day'].'/'.$_POST['filters']['date']['year']; ?></h2>
  <?php
 	
	echo "<table class = table";
$count = 0;
foreach ($partDescription as $Numbers) {
	
    $PartNumber[]['part_number'] = $Numbers->nodeValue;
    foreach ($Numbers->childNodes as $child) {
      ?> 
      <tr>

      <?php

      if(count($child->childNodes)>0){

		foreach ($child->childNodes as $child2) {
            if(count($child2->attributes)>0){
			foreach ($child2->attributes as $key) {
				if($key->name == 'colspan' || $key->value =='grid_network'){

					if($count == 0){ ?>

	           
			           <th></th><th style = "width:200px" colspan = "<?php echo $key->value; ?>" ><?php echo $child2->nodeValue ; ?></th>
			          
			         <?php

					}else{
						?>

	           
			           <td  style = "border: aquamarine 1px solid;" colspan = "<?php echo $key->value; ?>" ><?php echo $child2->nodeValue ; ?></td>
			          
			         <?php

					}


				}


				
			}
           

            }

			
		 }

    	echo "</tr>";
    }
    $count++;
  }
}
    
 ?>
</div>
 <?php 

 }   
 

  //print_r($PartNumber);
   exit;

foreach($result as $key =>$value){

  $scarp_url = $value['URL'];
  $url_id = $value['id'];
  $year_m = $value['Year'];
  


$PartNumbers = $PostsData->pathObj->query('//td[@class="broadcast_grid"]');

 
if($PartNumbers->length < 1 ){
  exit;
};
if (!is_null($PartNumbers)) {
  $all_recent_posts = array();
  foreach ($PartNumbers as $Numbers) {
    $PartNumber[]['part_number'] = $Numbers->nodeValue;
  }
}
print_r($PartNumbers);

$partDescription = $PostsData->pathObj->query('//td[@class="description"]');
if (!is_null($partDescription)) {
  $all_recent_posts = array();
  foreach ($partDescription as $Description) {
    $Partdesc[]['description'] = $Description->nodeValue;
  }
}


$partregqty = $PostsData->pathObj->query('//td[@class="regqty"]');
if (!is_null($partregqty)) {
  $all_recent_posts = array();
  foreach ($partregqty as $qty) {
    $partqty[]['min_qty'] = $qty->nodeValue;
  }
}



$partprice = $PostsData->pathObj->query('//td[@class="price"]');
if (!is_null($partprice)) {
  $all_recent_posts = array();
  foreach ($partprice as $price) {
    $Partpr[]['price'] = $price->nodeValue;
  }
}


echo "<pre/>";
// print_r($partqty);
// print_r($Partdesc);
// print_r($PartNumber);
// print_r($Partpr);

$arr = [];
foreach($Partdesc as $key=>$value){

    $arr[] = array('descript' => trim($Partdesc[$key]['description']), 'part_number' => trim($PartNumber[$key]['part_number']), 'price' => trim($Partpr[$key]['price']), 'min_qty' => trim($partqty[$key]['min_qty']) );
}

foreach($arr as $data){
 //print_r($data);
 //exit;
  $part_number = $data['part_number'];
  $check_name = $data['descript'];
  $addName = $data['descript'];
  $r ="ok";
  try {
   $dublicate = "SELECT name FROM qwerty_2 WHERE name = '$check_name'";
   $check = $db->prepare($dublicate);
   $check->execute();
   $r = $check->fetch(PDO::FETCH_ASSOC);
  }
  catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  //  exit;
  }
  try {
   $dublicate = "SELECT name FROM qwerty_1 WHERE name = '$check_name'";
   $check = $db->prepare($dublicate);
   $check->execute();
   $r2 = $check->fetch(PDO::FETCH_ASSOC);
  }
  catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  //  exit;
  }
  if($r || $r2)
   {
    echo "dublicate";
    $addName = $data['descript'].'('.$part_number.')-'.$modalName;
    //exit;
  }else{
    echo "ok";
  }

  try {
   $dublicateProducts = "SELECT description FROM Products WHERE description = '$check_name'";
   $check1 = $db->prepare($dublicateProducts);
   $check1->execute();
   $ro = $check1->fetch(PDO::FETCH_ASSOC);
  }
  catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
    //exit;
  }
  if($ro)
   {
    echo "ROOOO dublicate";
    $addName = $data['descript'].'('.$part_number.')-'.$modalName;
    //exit;
  }else{
  }
  ECHO "<br>";
  echo $addName;
  //exit;
  $insert_db_query = "SELECT part_number FROM Products WHERE part_number = '$part_number' and url_id = '$url_id'";
  $stmt = $db->prepare($insert_db_query);
  $stmt->execute();
  $row = $stmt->fetch(PDO::FETCH_ASSOC);

   if( ! $row)
  {

    $insert_db_query = "INSERT INTO Products SET
    part_number=:part_number, description=:description, min_qty= :min_qty, price= :price, url_id=:url_id";
    //prepare the query
    $exec = $db->prepare($insert_db_query);
    //bind parameters
    $exec->bindParam(":part_number", $data['part_number']);
    $exec->bindParam(":description", $addName);
    $exec->bindParam(":min_qty", $data['min_qty']);
    $exec->bindParam(":price", $data['price']);
    $exec->bindParam(":url_id", $url_id);

    if($exec->execute()){
      echo "Data Inserted into db";
      echo "<br>";

    }
    else{
      print_r($exec->errorInfo());

    }
  }else{
    echo "already exist";
    //exit;
  }
}

$sql = "UPDATE scraping_urls SET status=1 WHERE id=$url_id and Year = '$year_m'";
$stmt = $db->prepare($sql);
$stmt->execute();

// echo a message to say the UPDATE succeeded
echo $stmt->rowCount() . " records UPDATED successfully";


}

?>

<script>

function myFunction() {

    location.reload();
}
setInterval(function(){ myFunction(); }, 15000);

</script>
