
 <?php
$img = 5;
if(mysqli_num_rows($data["dt"])>0){
    while($r = mysqli_fetch_assoc($data["dt"])){
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