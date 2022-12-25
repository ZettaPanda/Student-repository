<div class="card">
    <div class="card-img">
        <div class="cart-count"><?php echo count($_SESSION['cart']) ?></div>
        <div class="card-img img"></div>
    </div>
    <div class="card-text ws-nowrap"> <?php 
	 
     if(isset($_SESSION['cart'])) {    
         $sql = "SELECT * FROM products WHERE id IN ("; 
         
         foreach($_SESSION['cart'] as $id => $value) { 
             $sql .= $id.","; 
         } 
         
         $sql = substr($sql, 0, -1).") ORDER BY name ASC";
         $result = mysqli_query($connection, $sql);
         $summ = 0;
         
         if ($result) {

         while ($row = mysqli_fetch_array($result)) { 
            $summ += intval($row['price']);
         }
        }
         
         echo "{$summ} р."
    ?>

        <?php 
                        
        } else{ 
            echo "0 р."; 
        } 

    ?>
    </div>
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

                
                if ($result) {
                    while ($row = mysqli_fetch_array($result)) { 
                        echo '
                            <div class="cart-popup-item">
                            <div class="cart-popup-item-col">
                                <div class="cart-popup-item-name">'. $row['name'] .'</div>
                                <span class="cart-popup-item-price">'. $row['price'] .' р.</span>
                            </div>
                            <a href="?action=delete&id='. $row['id'] .'" class="cart-popup-item-delete">Удалить</a>
                            </div>
                        ';
                    }
                }
                else{ 
                    echo "Пустая корзина"; 
                } 
                
        ?>

                <?php 
                            
            } else{ 
                echo "Пустая корзина"; 
            } 
  
        ?>
            </div>
        </div>
    </div>
</div>