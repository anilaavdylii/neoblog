<?php
$categories = get_categories(array(
    "orderedby"=> "name",
    "parent" => 0
));

forEach($categories as $category){
    printf('<a href="%1$s" class="link"><span>%2$s</span>',
    esc_url(get_category_link($category->term_id)),
    esc_html($category->name));
}
?>
