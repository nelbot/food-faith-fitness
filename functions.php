/* Begin Additions by Nelson @ Once Coupled, October 2017 */

/**
 * Add category indicators.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
add_action( 'genesis_entry_header', 'brunch_pro_category_indicators', 10 );
function brunch_pro_category_indicators() {
  if ( has_term( 'gluten-free', 'category' ) || has_term( 'dairy-free', 'category' ) || has_term( 'egg-free', 'category' ) || has_term( 'grain-free', 'category' ) || has_term( 'low-carb', 'category' ) || has_term( 'nut-free', 'category' ) || has_term( 'paleo', 'category' ) || has_term( 'vegetarian', 'category' ) || has_term( 'vegan', 'category' ) || has_term( 'whole30', 'category' )  && ( !is_archive) || ( !is_search) ) {
    echo '<div class="term-indicators">';
      if ( has_term( 'gluten-free', 'category' ) ) {
        echo '<div class="indicator-container"><a href="/category/gluten-free/" class="indicator"><span class="term gluten-free">Gluten Free</span></a></div>';
      }
      if ( has_term( 'dairy-free', 'category' ) ) {
        echo '<div class="indicator-container"><a href="/category/dairy-free/" class="indicator"><span class="term dairy-free">Dairy Free</span></a></div>';
      }
      if ( has_term( 'egg-free', 'category' ) ) {
        echo '<div class="indicator-container"><a href="/category/egg-free/" class="indicator"><span class="term egg-free">Egg Free</span></a></div>';
      }
      if ( has_term( 'grain-free', 'category' ) ) {
        echo '<div class="indicator-container"><a href="/category/grain-free/" class="indicator"><span class="term grain-free">Grain Free</span></a></div>';
      }
      if ( has_term( 'low-carb', 'category' ) ) {
        echo '<div class="indicator-container"><a href="/category/low-carb/" class="indicator"><span class="term low-carb">Low Carb</span></a></div>';
      }
      if ( has_term( 'nut-free', 'category' ) ) {
        echo '<div class="indicator-container"><a href="/category/nut-free/" class="indicator"><span class="term nut-free">Nut Free</span></a></div>';
      }
      if ( has_term( 'paleo', 'category' ) ) {
        echo '<div class="indicator-container"><a href="/category/paleo/" class="indicator"><span class="term paleo">Paleo</span></a></div>';
      }
      if ( has_term( 'vegetarian', 'category' ) ) {
        echo '<div class="indicator-container"><a href="/category/vegetarian/" class="indicator"><span class="term vegetarian">Vegetarian</span></a></div>';
      }
      if ( has_term( 'vegan', 'category' ) ) {
        echo '<div class="indicator-container"><a href="/category/vegan/" class="indicator"><span class="term vegan">Vegan</span></a></div>';
      }
      if ( has_term( 'whole30', 'category' ) ) {
        echo '<div class="indicator-container"><a href="/category/whole30/" class="indicator"><span class="term whole30">Whole 30</span></a></div>';
      }
    echo '</div>';
  }
}

add_action( 'genesis_entry_header', 'brunch_pro_category_indicators_special_diets_page', 10 );
function brunch_pro_category_indicators_special_diets_page() { 
  if (is_page ( 'special-diets')) {
    echo '
      <h4 style="text-align: center;">Please use the buttons to filter recipes by diet</h4>
      <div class="term-indicators">
      <div class="indicator-container"><a class="indicator" href="/category/gluten-free/" target="_blank" rel="noopener"><span class="term candida">Gluten Free</span></a></div>
      <div class="indicator-container"><a class="indicator" href="/category/dairy-free/" target="_blank" rel="noopener"><span class="term dairy-free">Dairy Free</span></a></div>
      <div class="indicator-container"><a class="indicator" href="/category/egg-free/" target="_blank" rel="noopener"><span class="term egg-free">Egg Free</span></a></div>
      <div class="indicator-container"><a class="indicator" href="/category/grain-free/" target="_blank" rel="noopener"><span class="term gaps">Grain Free</span></a></div>
      <div class="indicator-container"><a class="indicator" href="/category/low-carb/" target="_blank" rel="noopener"><span class="term low-carb">Low Carb</span></a></div>
      <div class="indicator-container"><a class="indicator" href="/category/nut-free/" target="_blank" rel="noopener"><span class="term nut-free">Nut Free</span></a></div>
      <div class="indicator-container"><a class="indicator" href="/category/paleo/" target="_blank" rel="noopener"><span class="term paleo">Paleo</span></a></div>
      <div class="indicator-container"><a class="indicator" href="/category/vegetarian/" target="_blank" rel="noopener"><span class="term scd">Vegetarian</span></a></div>
      <div class="indicator-container"><a class="indicator" href="/category/vegan/"><span class="term vegan">Vegan</span></a></div>
      <div class="indicator-container"><a class="indicator" href="/category/whole-30/"><span class="term whole30">Whole 30</span></a></div>
    </div>';
  }
}

/* End Additions by Nelson @ Once Coupled, October 2017 */