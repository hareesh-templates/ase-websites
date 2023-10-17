<?php 
include "./backend/connection.php";
$key = $_GET['key'];

$sql = "SELECT * FROM blog WHERE key_url='$key'";
$result = $conn->query($sql);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    // $key_url = $row['key_url'];
    // $title = $row['title'];
    // $area = $row['area'];
    // $event_date = $row['date'];
    // $image = $row['image'];
    // $content = $row['content'];
    // $meta_desc = $row['meta_desc'];
 
    $page_title = $row["title"];
    $meta_description = $row["description"];
    $meta_keywords = $row["key_words"];
    $meta_keyurl = $row["key_url"];

}
?>


<?php
    
// $blog_page = basename($_SERVER['PHP_SELF']);


// if ($count > 0) {
//     // Output meta tags for current page
//     // $row = mysqli_fetch_assoc($sql);
// } else {
//     // Default meta tags
//     $page_title = "My Website";
//     $meta_description = "Welcome to my website.";
//     $meta_keywords = "website, welcome";
//     $meta_keyurl = "website, welcome";
// }
?>

