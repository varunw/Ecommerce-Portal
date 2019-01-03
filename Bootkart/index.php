<?php include 'templates/header.php' ?>
<?php include 'Backend/getproducts.php'?>

<?php 
//$products=getallproducts();
//print_r($products);
//session_start();
//echo $_SESSION['username'];
echo $_GET['category'];
if(isset($_GET['category'])){
    $category = $_GET['category'];
    $products = getproductsbycategory($category);
}else{
    $category='Our Product';
    $products=getallproducts();
}
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    $id = $_SESSION['id'];

}else{
    $username='user';
}
?>



<div class="jumbotron">
    <h1 class="display-4">Hello,
        <?php echo $username; ?>
    </h1>
    <p class="lead">Find the best products here online now!</p>
    <hr class="my-4">
    <?php if(!isset($_SESSION['username'])){ ?>
    <p>Sign up for ordering now</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="signup.php" role="button">Sign Up</a>
    </p>
    <?php } ?>
</div>
<h1 class="text-center">
    <?php echo $category; ?>
</h1>
<div class="container">
    <div class="row">
    <?php foreach($products as $product){ ?>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;margin-top:20px;">
                <img class="card-img-top" src="<?php echo $product['img'] ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product['name'] ?> - Rs <?php echo $product['price'] ?></h5>
                    <p class="card-text"><?php echo $product['description'] ?></p>
                    <a href="details.php?id=<?php echo $product['id'] ?>" class="btn btn-primary">View Product</a>
                    <?php if(isset($_SESSION['username'])){ ?> 
                    <a onclick="addtocart('<?php echo $id ?>','<?php echo $product['id'] ?>')" class="btn btn-success">Add To Cart</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
</div>
<?php include 'templates/footer.php' ?>