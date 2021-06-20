<?php
    include "ressources/header.php";
?>

<div class="container">
    <div class="row mt-5">
        <div class="col-3" style="font-size:14px">
            <?php
            // Affichage des catégories
                $query = "SELECT * FROM categories";
                $statement = $cnx->prepare($query);
                $statement->execute();
                $result = $statement->fetchAll();
                echo "<h6 class=\"mb-3\">Filter by Category :</h6>
                <div class=\"list-group-item\" style=\"height:500px; overflow-y:auto; overflow-x:hidden;\">";
                foreach($result as $row) {
                    $sql = "SELECT COUNT(sku) AS nbProduits FROM prodcategs WHERE id = '".$row['id']."'";
                    $req = $cnx->prepare($sql);
                    $req->execute();
                    $res = $req->fetchAll();
                    echo "
                    <p class=\"breadcrumb bg-light\"><a class=\"categories\" href=\"?id={$row['id']}\">{$row['name']} ({$res[0]['nbProduits']})</a></p>
                    ";
                }
                echo "</div>";
            ?>
        </div>
        <div class="col-9">
            <?php
            // Affichage des produits
                $query2 = "SELECT * FROM products";
                $stat = $cnx->prepare($query2);
                $stat->execute();
                $res = $stat->fetchAll();
                echo "
                <div class=\"row products\">";
                foreach($res as $row2) {
                    echo "
                    <div class=\"card products\" style=\"width: 15rem;margin:10px\">
                        <img class=\"card-img-top\" src=\"{$row2['image']}\" alt=\"Product Image\" style=\"padding:20px;height:200px;align-self:center\">
                        <div class=\"card-body\">
                            <h6 class=\"card-title\" style=\"height:100px;\">{$row2['name']}</h6>
                            <p class=\"card-text\">
                                <a>Manufacturer : <span>{$row2['manufacturer']}</span></a><br>
                                <a>Model : <span>{$row2['model']}</span></a><br>
                                <a>Price : <span class=\"text-success\">{$row2['price']} $</span></a><br>
                            </p>
                            <a href=\"#\" class=\"btn btn-success btn-block\"><i class=\"fa fa-cart-plus\"></i></a>
                        </div>
                    </div>
                    ";
                }
                echo "<hr></div>";
            ?>
        </div>
    </div>
</div>

<?php        
    include "ressources/footer.php";
?>