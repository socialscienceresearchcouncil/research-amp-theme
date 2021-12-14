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

function modifyGroupBlockSettings( settings, name ) {
    if ( name !== 'core/group' ) {
        return settings;
    }

    return assign( {}, settings, {
        supports: assign( {}, settings.supports, {
						spacing: assign( {}, settings.supports.spacing, {
							'margin': true,
							'blockGap': true
						} )
        } ),
    } );
}

addFilter(
    'blocks.registerBlockType',
    'ramp-theme/modify-group-block-settings',
    modifyGroupBlockSettings
);
