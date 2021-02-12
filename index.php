<?php 

# Others blocks
# wp-includes/blocks

function myplugin_register_template() {
    $post_type_object = get_post_type_object( 'post' );
    $post_type_object->template = array(
        array( 'core/calendar' ),
    );
}
add_action( 'init', 'myplugin_register_template' );
