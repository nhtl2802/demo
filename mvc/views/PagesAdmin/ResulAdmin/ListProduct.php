<?php 
// if (mysqli_num_rows($data)>0){
// while($r= mysqli_fetch_assoc($data)){
// 	echo $r["ID"]; echo '<br>';
// 	echo $r["IDKindProduct"];echo '<br>';
// 	echo $r["Name"];echo '<br>';
// 	echo $r["ShortName"];echo '<br>';
// 	echo $r["FullName"];echo '<br>';
// 	echo $r["Price"];echo '<br>';
// 	echo $r["PriceSaleOff"];echo '<br>';
// 	echo $r["SummaryDetail"];echo '<br>';
// 	echo $r["Detail"];echo '<br>';
// 	echo $r["IMG"];echo '<br>';
?>

<?php
$img = 5;
if(mysqli_num_rows($data)>0){
	while($r = mysqli_fetch_assoc($data)){
		echo '<div class="Div_Product">
		<a href="#">
		<img  src="../../../../RickShop/public/images/'.$img.'.jpg">

		<h3>'.$r["FullName"].'</h3>

		<div class="price">
		<strong>'.$r["Price"].'</strong>
		<span>'.$r["PriceSaleOff"].'</span>
		<i>-7%</i>
		</div>

		<div class="Buy_Detail">
		<input type="submit" name="BT_Detail" value="Chi tiết">
		<input type="submit" name="BT_Buy" value="Mua hàng">
		</div>

		</a>
		</div>
		';
		$img ++;
	}
}

?>




