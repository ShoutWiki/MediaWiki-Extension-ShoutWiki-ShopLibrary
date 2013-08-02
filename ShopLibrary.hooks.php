<?php

class ShopLibraryHooks {

	public function buildSWShopHeader() {
		global $wgLang;

		$links = array();
		$links[] = Linker::link( Title::newMainPage(), wfMessage( 'mainpage' )->plain() );

		wfRunHooks( 'ShoutWikiShopHeaderItems', array( &$links ) );

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
