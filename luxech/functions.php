<?php
/**
 * Luxeritas WordPress Theme - free/libre wordpress platform
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * @copyright Copyright (C) 2015 Thought is free.
 * @link http://thk.kanzae.net/
 * @license http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 * @author LunaNuko
 */

/* 以下、好みに応じて子テーマ用の関数をお書きください。
 ( Below here, please write down your own functions for the child theme. ) */

/* タイトル直後にアイキャッチ画像を表示するための設定 */
function display_post_top_thumbnail( $content ){
	if( has_post_thumbnail() === true ) {
		global $post;
		$content = '<div class="post-top-thumbnail">' .  get_the_post_thumbnail( $post->ID, 'full' ) . '</div>' . $content;
	}
	return $content;
}
add_filter( 'thk_content', 'display_post_top_thumbnail', 11, 1 );