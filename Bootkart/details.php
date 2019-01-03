<?php include 'templates/header.php';?>
<?php include 'Backend/getproducts.php';?>
<?php $product=getsingleproduct($_GET['id']);
$id = $_SESSION['id']; ?>
<div class="container text-center">
<h1><?php echo $product['name']; ?></h1>
<img src="<?php echo $product['img'] ?>" alt="">
<h1>Price - Rs.<?php echo $product['price'] ?></h1>
<p><?php echo $product['description'] ?></p>
<?php if(isset($_SESSION['username'])){ ?>
<button onclick="addtocart('<?php echo $id ?>','<?php echo $product['id'] ?>')" class="btn btn-success">Add to cart</button>
<?php } ?>
</div>



<?php include 'templates/footer.php';?>