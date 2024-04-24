<?php
// Form id : 57
// Field id: 79

add_action( 'gform_after_submission_57', 'modify_select_field_value', 10, 2 );
function modify_select_field_value( $entry, $form ) {
	$entry_id = $entry['id'];
	$course = $entry['79'];
	$entry_data = GFAPI::get_entry( $entry_id );
	$dynamic_value = get_the_title( $course ). ' id:'.$course ;
	$entry_data['79'] = $dynamic_value;
	GFAPI::update_entry( $entry_data );
}