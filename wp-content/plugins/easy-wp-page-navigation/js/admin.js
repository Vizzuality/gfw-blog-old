(function ( $ )
{
	/**
	 *    Tabs in back-end
	 */
	function ewpnTab()
	{
		var anchor = window.location.hash;
		console.log( anchor );
		if ( anchor === '#posts-per-page-taxonomies-option' )
		{
			$( '.kang-tabs a' ).removeClass( 'nav-tab-active' );
			$( '.kang-tabs a.posts-per-page-taxonomies-option' ).addClass( 'nav-tab-active' );
			$( '.kang-tabs-content > div' ).hide();
			$( '.posts-per-page-taxonomies-option' ).show();
		}

		$( '.kang-tabs a' ).click( function ()
		{
			var $this = $( this ),
				$tabID = $this.attr( 'href' );

			$tabClass = $tabID.replace( '#', '.' );

			$( '.kang-tabs a' ).removeClass( 'nav-tab-active' );
			$this.addClass( 'nav-tab-active' );
			$( '.kang-tabs-content > div' ).hide();
			$( $tabClass ).show();
		} );
	}

	ewpnTab();

})( jQuery );