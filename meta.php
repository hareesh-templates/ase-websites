<?php
// $page_title = "Index";
// $description = "Learn more Index our company and our mission.";
// $key_url = "Key url provided by the seo team";
// $key_words = "Index us, mission, company, values";
?>
<?php
 
    // This is the code need to place at all the webpages for sample I pasted at index.php file. 
    // Same as all the files need to paste the meta description, key_words, key_url and page_title

 ?>

<?php
    
$meta_data = json_decode(file_get_contents('meta.json'), true);
$current_page = basename($_SERVER['PHP_SELF']);

if(isset($meta_data[$current_page])) {
    $page_title = $meta_data[$current_page]['title'];
    $meta_description = $meta_data[$current_page]['description'];
    $meta_keywords = $meta_data[$current_page]['key_words'];
    // $meta_keyurl = $meta_data[$current_page]['key_url'];
} else {
    $page_title = "My Website";
    $meta_description = "Welcome to my website.";
    $meta_keywords = "website, welcome";
    // $meta_keyurl = "website url, welcome";
}
?>

