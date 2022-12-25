<nav class="header">
    <div class="logo-container">
        <div class="logo-img"></div>
        <div class="logo-text ws-nowrap text-md text-800">HAPPY PET</div>
    </div>
    <menu class="navigation">
        <dt class="active-nav"><a href="">Главная</a></dt>
        <dt class=""><a href="./products.php">Друзья</a></dt>
        <dt class=""><a href="">О сервисе</a></dt>
        <dt class=""><a href="">Контакты</a></dt>
    </menu>
    <nav class="number">
        <div class="number-icon"></div>
        <div class="number-text ws-nowrap text-800 text-s">+ 7 968 658-23-65</div>
    </nav>
    <div class="card">
        <div class="card-img">
            <div class="cart-count"><?php echo count($_SESSION['cart']) ?></div>
            <div class="card-img img"></div>
        </div>
        <div class="card-text ws-nowrap">8 940 р.</div>
        <div class="card-dropdown">
            <div class="cart-popup">
                <div class="cart-popup-list">
                    <?php 
	 
                    if(isset($_SESSION['cart'])) { 
                        
                        $sql = "SELECT * FROM products WHERE id IN ("; 
                        
                        foreach($_SESSION['cart'] as $id => $value) { 
                            $sql .= $id.","; 
                        } 
                        
                        $sql = substr($sql, 0, -1).") ORDER BY name ASC";
                        $result = mysqli_query($connection, $sql);
                        
                        while ($row = mysqli_fetch_array($result)) { 
                            echo '
                                <div class="cart-popup-item">
                                    <div class="cart-popup-item-name">'. $row['name'] .'</div>
                                    <div class="cart-popup-item-col">
                                        <span class="cart-popup-item-price">'. $row['price'] .' р.</span>
                                        <button class="cart-popup-item-delete">Удалить</button>
                                    </div>
                                </div>
                            ';
                        }
                            
                    ?>

                    <!-- <p><?php echo $row['name'] ?> x <?php echo $_SESSION['cart'][$row['id']]['quantity'] ?></p> -->

                    <?php 
                            
                        } else{ 
                            echo "Пустая корзина"; 
                        } 
  
                    ?>
                </div>
            </div>
        </div>


    </div>
</nav>