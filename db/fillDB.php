<?php 
include "../ressources/connexion.php";

$json = file_get_contents('./products.json');
$products = json_decode($json,true);
$counter=0;
$rows = '';
foreach($products as $product){
    $categories=$product['category'];
    $rows .= $product['sku'].' => '.$product['name'].' => '.$product['type'].' => '.$product['price'].' => '.$product['upc'].' => '.$product['shipping'].' => '.$product['description'].' => '.$product['manufacturer'].' => '.$product['model'].' => '.$product['url'].' => '.$product['image'].' => '.$categories[0]['id'].' => '.$categories[0]['name'].'<br>';
    if($counter<=100) {
        $prods = $cnx->prepare('INSERT INTO products VALUES(?,?,?,?,?,?,?,?,?,?,?)');
        $prods->execute(array(
            $product['sku'],
            $product['name'],
            $product['type'],
            $product['price'],
            $product['upc'],
            $product['shipping'],
            $product['description'],
            $product['manufacturer'],
            $product['model'],
            $product['url'],
            $product['image']
        ));
    }
    for($i=0;$i<count($categories);$i++) {
        $check = $cnx->query('SELECT * FROM categories WHERE id="'.$categories[$i]['id'].'"');
        if($check->rowCount()==0){
            $categs = $cnx->prepare('INSERT INTO categories(id,name) VALUES (?,?)');
            $categs->execute(array($categories[$i]['id'],$categories[$i]['name']));
        }
        $req = $cnx->prepare('INSERT INTO prodcategs (id,sku) VALUES (?,?)');
        $req->execute(array($categories[$i]['id'],$product['sku']));
    }
    
    $counter++;
}


if(isset($rows)) echo $rows;
?>