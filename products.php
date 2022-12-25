<?php require_once 'includes/header.php' ?>
<?php require_once 'includes/connection.php' ?>
<?php require_once 'includes/layouts/header.php' ?>

<?php 
    if (isset($_GET['action']) && $_GET['action'] == 'add') {
        $id = intval($_GET['id']);

        if (isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]['quantity']++;
        } else {
            $result = $connection->query("SELECT * FROM products WHERE id={$id}");
            
            if (mysqli_num_rows($result) != 0) {
                $row_s = mysqli_fetch_array($result);

                $_SESSION['cart'][$row_s['id']] = array( 
                    "quantity" => 1, 
                    "price" => $row_s['price'] 
                );

                header('Location: products.php');
                unset($_GET['action']);


            } else { 
				$message="This product id invalid"; 
			} 
        }
    }
?>

<?php 
    if (isset($message)){ 
        echo "<h2>$message</h2>"; 
    } 
?>

<section class="catalog-animal">
    <div class="container-catalog-animal">
        <h1 class="text-l text-900">Каталог питомцев</h1>
        <nav class="sort-animal">
            <ol>
                <dt>
                    <input type="button" class="sort-button" value="Все">
                </dt>
                <dt>
                    <input type="button" class="sort-button" value="Собаки">
                </dt>
                <dt>
                    <input type="button" class="sort-button" value="Кошки">
                </dt>
                <dt>
                    <input type="button" class="sort-button" value="Хомяки">
                </dt>
                <dt>
                    <input type="button" class="sort-button" value="Рыбы">
                </dt>
                <dt>
                    <input type="button" class="sort-button" value="Птицы">
                </dt>
            </ol>
        </nav>
        <div class="list-animal-container">

            <?php 
 
	       $result = $connection->query('SELECT * FROM products ORDER BY name ASC'); 
	 
           if($result){
                foreach($result as $row) {
                    echo '
                            <div class="animal-card">
                            <div class="items-catalog-container">
                                <div class="up-info-items-catalog">
                                    <div class="age">
                                        <h7>'. $row['age'] .'</h7>
                                    </div>
                                    <div>лет</div>
                                </div>
                                <div class="animal-img-card-helper">
                                    <img src="'. $row['img_url'] .'" alt="" class="img-up-card">
                                </div>
                                <div class="down-info-items-catalog">
                                    <h4>'. $row['name'] .'</h4>
                                    <h6 class="text-500">'. $row['description'] .'</h6>
                                    <div class="down-info-items-catalog-footer">
                                        <h2 class="price">'. $row['price'] .' р.</h2>
                                        <a href="?action=add&id='. $row['id'] .'" class="add-cart-btn">+</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ';
                }	
            }
	
            ?>
        </div>

    </div>
</section>
<?php require_once 'includes/footer.php' ?>