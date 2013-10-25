<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * my_nav Helpers
 */

// 記事1件の操作メニュー
if ( ! function_exists('myMenu')) {
	function myMenu($id, $method) {
		$return = '';

		// ---------------------------------------------------------
		$return .= '<li';
		$return .= ($method == 'view') ? ' class="active"' : '';
		$return .= '>';
		$return .= anchor(
			"entries/view/{$id}", ' ',
			array(
				'class' => 'glyphicon glyphicon-arrow-right',
				'title' => lang('action_view')
			)
		);
		$return .= '</li>';
		// ---------------------------------------------------------
		$return .= '<li';
		$return .= ($method == 'edit') ? ' class="active"' : '';
		$return .= '>';
		$return .= anchor(
			"entries/edit/{$id}", ' ',
			array(
				'class' => 'glyphicon glyphicon-pencil',
				'title' => lang('action_edit')
			)
		);
		$return .= '</li>';
		// ---------------------------------------------------------
		$return .= '<li>';
		$return .= anchor(
			"entries/delete/{$id}", ' ',
			array(
				'class' => 'glyphicon glyphicon-trash',
				'title' => lang('action_delete'),
				'onclick' => 'return confirmDelete()'
			)
		);
		$return .= '</li>';

		return $return;
	}
}
