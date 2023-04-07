function cg_dodo_shortcodes( $attr, $content='')
{
 	$attr = shortcode_atts(
        		array('debug' => 0),
        		$attr,
        		'cg_dodo_shortcodes');
    $compiled = do_shortcode( $content );
    if ( $attr['debug'] != 0 )
        echo "dodo=".$content."=<br>";
	return ($compiled != $content
				? cg_dodo_shortcodes( $attr, $compiled)
				: $compiled);
}
add_shortcode('dodo_shortcodes', 'cg_dodo_shortcodes');