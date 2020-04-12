	function downloadPage(stOldPage,stNewPage)
	{
		event.preventDefault();
		$(stOldPage).css( "display", "none" ) ;
		$(stNewPage).show();
	};
