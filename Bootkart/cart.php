<?php include 'templates/header.php';
    include 'Backend/getproducts.php';
    $id=$_SESSION['id'];
    $cart=getcart($id);
    //print_r($cart);
?>

<div class="container">
    <h1 class=text-center>Your Cart</h1>
    <ul class="list-unstyled">
    <?php foreach ($cart as $element){
       $productid = $element['productid'];
       $product = getsingleproduct($productid);
        
        ?>
        <li class="media my-5">
            <img class="mr-3" src="<?php echo $product['img'] ?>" style="width:200px" alt="Generic placeholder image">
            <div class="media-body">
                <h5 class="mt-0 mb-1"><?php echo $product['name'] ?> -Rs.<?php echo $product['price'] ?></h5>
                <?php echo $product['description'] ?><br>
                <button class="btn btn-success btn-block">Place order</button>
            </div>
        </li>
    <?php } ?>
    </ul>
</div>



<?php include 'templates/footer.php';?>