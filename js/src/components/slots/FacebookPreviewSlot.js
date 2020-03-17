import { Slot } from "@wordpress/components";
import React from "react";

/**
 * Renders a slot for the Facebook preview.
 *
 * @returns {null|ReactElement} The element.
 */
export default function FacebookPreviewSlot( { location } ) {
	return ( <Slot name="YoastFacebookPreview" /> );
}
