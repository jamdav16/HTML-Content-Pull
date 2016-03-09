<?php 
header('Content-Type: application/json');
include_once('html_pull.php');

try {
    
    // grabs the url from the query
    $html = html_pull($_GET['url']);
    // Callback query for JSON use
    $callback = $_GET['callback'];

    // Finds a h1 tag
    foreach($html->find('h1') as $title);

    // Finds a link with the ID tag 'image'
    foreach($html->find('a[id=image]') as $img);

    // Finds a div with the ID tag 'description'
    foreach($html->find('div[id=description]') as $desscription);

    // Finds a span (with the ID 'inner' within a span with the ID named 'price'
    foreach($html->find('span[id=inner] span[id=price]') as $price);

?>
<?php echo $callback; ?>({
    "title":"<?php echo $title->content; ?>", 
    "image":"<?php echo 'http://www.mywebsite.com'.$img->content; ?>", 
    "description":"<?php echo preg_replace( "/\r|\n/", "", substr($desscription->content, 0, 255).'...') ?>", 
    "price":"<?php echo $price->content; ?>"
})

<?php
} catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>