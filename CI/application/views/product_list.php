<h1>Product List</h1>

<?php
    foreach ($productList as $v) {
        echo $v['id']. " <a href='".base_url('product_details/'.$v['id'])."'>".$v['title']."</a><br> ";
    }
?>
