/**
 * Import blocks
 */

/*
import './blocks/quote/index';
*/

/**
 * Components
 */
import { addFilter } from '@wordpress/hooks';
import { assign } from 'lodash'

/*
import renderAssociatedProgramsToggle from './components/AssociatedProgramsToggle';
registerPlugin(
	'associated-programs-toggle',
	{
		icon: 'visibility',
		render: renderAssociatedProgramsToggle,
	}
);
*/

function modifyButtonBlockSettings( settings, name ) {
    if ( name !== 'core/button' ) {
        return settings;
    }

    return assign( {}, settings, {
        styles: [
					{ "name": "primary", "label": "Primary", "isDefault": true },
					{ "name": "secondary", "label": "Secondary" },
					{ "name": "tertiary", "label": "Tertiary" },
					{ "name": "outline", "label": "Outline" }
        ],
    } );
}

addFilter(
    'blocks.registerBlockType',
    'ramp-theme/modify-button-block-settings',
    modifyButtonBlockSettings
);
