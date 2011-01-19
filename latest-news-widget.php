<?php
/*
	Plugin Name: Latest News Widget
	Plugin URI: http://taylorlovett.com/wordpress-plugins
	Description: Insert a "Latest News Widget" in to your sidebar. Very customizable and easy to use! Comes packed with options: choose up to three categories to pull posts from, show the excerpt or the content, optionally show the byline and post title, optionally show "Read More" text, etc.
	Version: 0.2
	Author: Taylor Lovett
	Author URI: http://www.taylorlovett.com
*/

/*
	If you have time to translate this plugin in to your native language, please contact me at 
	admin@taylorlovett.com and I will add you as a contributer with your name and website to the
	Wordpress plugin page.
	
	Languages: English

	Copyright (C) 2010-2011 Taylor Lovett, taylorlovett.com (admin@taylorlovett.com)
	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 3 of the License, or
	(at your option) any later version.
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
require_once('class.widget.php');
require_once('class.utils.php');

if (!class_exists('TL_Latest_News_Widget_Core')) {
	class TL_Latest_News_Widget_Core {
		function TL_Latest_News_Widget_Core() {
			add_action('widgets_init', create_function('', 'register_widget("TL_Latest_News_Widget");'));
		}
	}
} 
new TL_Latest_News_Widget_Core();
?>