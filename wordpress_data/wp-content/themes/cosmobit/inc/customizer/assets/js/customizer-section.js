( function( api ) {
	// Extends our custom "example-1" section.
	api.sectionConstructor['plugin-section'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );
} )( wp.customize );

function cosmobitfrontpagesectionsnavigattion( cosmobit_section_id ){
    var navigation_id = "dt__slider";

    var $contents = jQuery('#customize-preview iframe').contents();

    switch ( cosmobit_section_id ) {
        case 'accordion-section-information_options':
        navigation_id = "information_options";
        break;
		
        case 'accordion-section-service_options':
        navigation_id = "service_options";
        break;
		
		case 'accordion-section-cta2_options':
        navigation_id = "cta2_options";
        break;
		
		case 'accordion-section-why_choose_options':
        navigation_id = "why_choose_options";
        break;
		
		case 'accordion-section-blog_options':
        navigation_id = "blog_options";
        break;
		
    }

    if( $contents.find('#'+navigation_id).length > 0 ){
        $contents.find("html, body").animate({
        scrollTop: $contents.find( "#" + navigation_id ).offset().top
        }, 1000);
    }
}



 jQuery('body').on('click', '#sub-accordion-panel-cosmobit_frontpage_options .control-subsection .accordion-section-title', function(event) {
        var cosmobit_section_id = jQuery(this).parent('.control-subsection').attr('id');
        cosmobitfrontpagesectionsnavigattion( cosmobit_section_id );
});