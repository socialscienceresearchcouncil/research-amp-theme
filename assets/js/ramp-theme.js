(function(){
	const isMobile = () => {
		const mq = window.matchMedia("(max-width: 600px)")
		return mq.matches
	}

	const positionReadMoreLinks = () => {
		const readMoreLinks = document.querySelectorAll( '.item-type-block-all-link' )

		if ( ! readMoreLinks ) {
			return
		}

		for ( const readMoreLink of readMoreLinks ) {
			positionReadMoreLink( readMoreLink )
		}
	}

	const positionReadMoreLink = ( readMoreLink ) => {
		const itemTypeBlock = readMoreLink.closest( '.item-type-block' )

		if ( ! itemTypeBlock ) {
			return
		}

		const isNowMobile = isMobile()
		const isNowInHeader = readMoreLinkIsInHeader( readMoreLink )

		if ( isNowMobile && isNowInHeader ) {
			itemTypeBlock.append( readMoreLink )
		} else if ( ! isNowMobile && ! isNowInHeader ) {
			itemTypeBlock.querySelector( '.item-type-block-header' ).append( readMoreLink )
		}
	}

	const readMoreLinkIsInHeader = ( readMoreLink ) => {
		return !! readMoreLink.closest( '.item-type-block-header' )
	}

	const setUpSwipeables = () => {
		const swipeables = document.querySelectorAll( '.allow-horizontal-swipe' )

		for ( const swipeable of swipeables ) {
			const itemTypeBlock = swipeable.closest( '.item-type-block.ramp-container' )

			if ( ! itemTypeBlock ) {
				continue;
			}

			itemTypeBlock.classList.add( 'contains-swipeable' )
		}
	}

	positionReadMoreLinks()
	window.addEventListener( 'resize', positionReadMoreLinks )

	setUpSwipeables()
}())
