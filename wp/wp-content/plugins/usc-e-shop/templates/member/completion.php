<?php

$member_compmode = $this->page;
$html = '<div id="memberpages">

<div class="post">';

$html .= '<div class="header_explanation">';
$header = '';
$html .= apply_filters('usces_filter_membercompletion_page_header', $header);
$html .= '</div>';


if ( $member_compmode == 'newcompletion' ) {
	$html .= '<p>' . __('Thank you in new membership.', 'usces') . '</p>';
}else if ( $member_compmode == 'editcompletion' ) {
	$html .= '<p>' . __('Membership information has been updated.', 'usces') . '</p>';
}else if ( $member_compmode == 'lostcompletion' ) {
	$html .= '<p>' . __('I transmitted an email.', 'usces') . '</p>
		<p>' . __('Change your password by following the instruction in this mail.', 'usces') . '</p>';
}else if ( $member_compmode == 'changepasscompletion' ) {
	$html .= '<p>' . __('Password has been changed.', 'usces') . '</p>';
}


$html .= '<div class="footer_explanation">';
$footer = '';
$html .= apply_filters('usces_filter_membercompletion_page_footer', $footer);
$html .= '</div>';

$html .= '<p><a href="' . USCES_MEMBER_URL . '">' . __('to vist membership information page', 'usces') . '</a></p>'."\n";
$html .= '<div class="send"><a href="' . home_url() . '" class="back_to_top_button">' . __('Back to the top page.', 'usces') . '</a></div>'."\n";

	
$html .= '</div>

	</div>';
