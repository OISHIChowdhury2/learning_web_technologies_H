

<?php


if(isset($_GET['add'])) {

    $query = query("SELECT * FROM products WHERE product_id=".escape_string($_GET['add'])." ");
    confirm($query);

    while($row = fetch_array($query)) {

        if($row['product_quantity'] != $_SESSION['product_' . $_GET['add']]) {

$_SESSION['product_' . $_GET['add']] +=1;

redirect("../public/checkout.php");
}else{

    set_message("We only have" . $row['product_quantity'] . " " . " available");

    redirect("../public/checkout.php");
}
}
}

if(isset($_GET['remove'])) {

    $_SESSION['product_' . $_GET['remove']]--;

    if($_SESSION['product_' . $_GET['remove']] < 1) {

        unset($_SESSION['item_total']);

        redirect("../public/checkout.php");
    }else{

        redirect("../public/checkout.php");
    }
}


if(isset($_GET['delete'])) {

    $_SESSION['product_' . $_GET['delete']] = '0';

    unset($_SESSION['item_total']);

    redirect("../public/checkout.php");
}

function cart() {

    $total = 0;
    $item_quantity = 0;
    $item_name = 1;
    $item_number = 1;
    $amount = 1;
    $quantity = 1;

    foreach ($_SESSION as $name => $value) {


        if($value > 0 ) {

        if(substr($name, 0, 8) == "product_"){

            $length = strlen($name - 8);

            $id = substr($name, 8 , $length);

    $query = query("SELECT * FROM products WHERE product_id = " . escape_string($id)." ");
    confirm($query);

    while($row = fetch_array($query)) {

        $sub = $row['product_price']*$value;
        $item_quantity +=$value;

        $product = <<<DELIMETER

<tr>
<td data-th="Product">
<div class="row">
<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
<div class="col-sm-10">
<h4 class="nomargin">{$row['product_title']}</h4>
</div>
</div>
</td>
<td data-th="Price">&#8377;{$row['product_price']}</td>
<td data-th="Quantity">
<button class="btn btn-info btn-sm"><a href="../resources/cart.php?remove={$row['product_id']}"><i class="fa fa-minus"></i></a></button>
{$value} <button class="btn btn-info btn-sm"><a href="../resources/cart.php?add={$row['product_id']}"><i class="fa fa-plus"></i></a></button>
</td>
<td data-th="Subtotal" class="text-center">&#8377;{$sub}</td>
<td class="actions" data-th="">
<button class="btn btn-info btn-sm"><a href="../resources/cart.php?delete={$row['product_id']}"><i class="fa fa-trash-o"></i></a></button>

</td>
</tr>
<input type="hidden" name="item_name_{$item_name}" value="{$row['product_title']}">
<input type="hidden" name="item_number_{$item_number}" value="{$row['product_id']}">
<input type="hidden" name="amount_{$amount}" value="{$row['product_price']}">
<input type="hidden" name="quantity_{$quantity}" value="{$value}">



DELIMETER;

echo $product;

$item_name++;
$item_number++;
$amount++;
$quantity++;
    }

    $_SESSION['item_total'] = $total += $sub;
    $_SESSION['item_quantity'] = $item_quantity;

        }
    }
}


}

function show_checkout(){

    if(isset($_SESSION['item_quantity'])){
            $query = query(" SELECT * FROM products");
    confirm($query);

    while ($row = fetch_array($query)) {

    $checkout_button = <<<DELIMETER


<td><a name="checkout" href="thank_you.php?pi={$row['product_title']}" type="submit" class="btn btn-success btn-block">Checkout<i class="fa fa-angle-right"></i></a></td>




DELIMETER;

return $checkout_button;
}
}
}


?>