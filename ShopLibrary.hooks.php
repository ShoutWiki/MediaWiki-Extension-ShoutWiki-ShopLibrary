<?php

class ShopLibraryHooks {
	
	public function buildSWShopHeader() {
		wfRunHooks( 'ShoutWikiShopHeaderItems', $links );
		//similar crap from Linker.php line 1164 to format
		
		if ( $links ) {
			return wfMessage( 'word-separator' )->plain()
			. '<span class="sw-shopheaderlinks">'
			. wfMessage( 'parentheses' )->rawParams( $wgLang->pipeList( $links ) )->escaped()
			. '</span>';
		} else {
			return '';
		}
		
	}
	
}