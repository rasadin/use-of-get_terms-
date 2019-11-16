function get_terms_fun()
{

$terms = get_terms('category');
echo '<ul>';
foreach ($terms as $term) {
    echo '<li><a href="'.get_term_link($term->slug, 'category').'">'.$term->name.'</a></li>';
}
echo '</ul>';
}
