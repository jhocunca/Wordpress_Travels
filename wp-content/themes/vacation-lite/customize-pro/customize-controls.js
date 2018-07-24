( function( api ) {

	// Extends our custom "vacation-lite" section.
	api.sectionConstructor['vacation-lite'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );