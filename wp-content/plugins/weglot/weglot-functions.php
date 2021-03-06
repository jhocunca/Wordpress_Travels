<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Get a service Weglot
 * @since 2.0
 *
 * @param string $service
 * @return object
 */
function weglot_get_service( $service ) {
	return Context_Weglot::weglot_get_context()->get_service( $service );
}

/**
 * Get all options
 * @since 2.0
 *
 * @return array
 */
function weglot_get_options() {
	return Context_Weglot::weglot_get_context()->get_service( '' )->get_options();
}

/**
 * Get option
 * @since 2.0
 * @param string $key
 * @return any
 */
function weglot_get_option( $key ) {
	return Context_Weglot::weglot_get_context()->get_service( 'Option_Service_Weglot' )->get_option( $key );
}

/**
 * Get original language
 * @since 2.0
 * @return string
 */
function weglot_get_original_language() {
	return weglot_get_option( 'original_language' );
}

/**
 * Get current language
 * @since 2.0
 * @return string
 */
function weglot_get_current_language() {
	return Context_Weglot::weglot_get_context()->get_service( 'Request_Url_Service_Weglot' )->get_current_language();
}

/**
 * Get destination language
 * @since 2.0
 * @return string
 */
function weglot_get_destination_language() {
	return weglot_get_option( 'destination_language' );
}

/**
 * Get Request Url Service
 * @since 2.0
 * @return Request_Url_Service_Weglot
 */
function weglot_get_request_url_service() {
	return Context_Weglot::weglot_get_context()->get_service( 'Request_Url_Service_Weglot' );
}

/**
 * Get an array with current and original language
 * @since 2.0
 * @return array
 */
function weglot_get_current_and_original_language() {
	return [
		'current'  => weglot_get_current_language(),
		'original' => weglot_get_original_language(),
	];
}

/**
 * Get languages available on Weglot
 * @since 2.0
 * @return array
 */
function weglot_get_languages_available() {
	return Context_Weglot::weglot_get_context()->get_service( 'Language_Service_Weglot' )->get_languages_available();
}

/**
 * @since 2.0
 *
 * @param null|string $type
 * @return array
 */
function weglot_get_languages_configured( $type = null ) {
	return Context_Weglot::weglot_get_context()->get_service( 'Language_Service_Weglot' )->get_languages_configured( $type );
}

/**
 * Get button selector HTML
 * @since 2.0
 * @param string $add_class
 * @return string
 */
function weglot_get_button_selector_html( $add_class = '' ) {
	return Context_Weglot::weglot_get_context()->get_service( 'Button_Service_Weglot' )->get_html( $add_class );
}


/**
 * Get exclude urls
 * @since 2.0
 * @return array
 */
function weglot_get_exclude_urls() {
	return Context_Weglot::weglot_get_context()->get_service( 'Option_Service_Weglot' )->get_exclude_urls();
}

/**
 * Get translate AMP option
 * @since 2.0
 * @return bool
 */
function weglot_get_translate_amp_translation() {
	return weglot_get_option( 'translate_amp' );
}

/**
 * Get current full url
 * @since 2.0
 * @return string
 */
function weglot_get_current_full_url() {
	return Context_Weglot::weglot_get_context()->get_service( 'Request_Url_Service_Weglot' )->get_full_url();
}

/**
 * Is eligible url
 * @since 2.0
 * @param string $url
 * @return boolean
 */
function weglot_is_eligible_url( $url ) {
	return Context_Weglot::weglot_get_context()->get_service( 'Request_Url_Service_Weglot' )->is_eligible_url( $url );
}

/**
 * Get API KEY Weglot
 * @since 2.0
 * @return string
 */
function weglot_get_api_key() {
	return weglot_get_option( 'api_key' );
}

/**
 * Get auto redirect option
 * @since 2.0
 * @return boolean
 */
function weglot_has_auto_redirect() {
	return weglot_get_option( 'auto_redirect' );
}
