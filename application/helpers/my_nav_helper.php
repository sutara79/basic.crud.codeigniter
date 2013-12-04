<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * my_nav Helpers
 */

// 記事1件の操作メニュー
if ( ! function_exists('myMenu')) {
	function myMenu($id, $action, $controller) {
		$return = '';
		// ---------------------------------------------------------
		$return .= '<li';
		$return .= ($action == 'view') ? ' class="active"' : '';
		$return .= '>';
		$return .= anchor(
			"{$controller}/view/{$id}", ' ',
			array(
				'class' => 'glyphicon glyphicon-arrow-right',
				'title' => lang('action_view')
			)
		);
		$return .= '</li>';
		// ---------------------------------------------------------
		$return .= '<li';
		$return .= ($action == 'edit') ? ' class="active"' : '';
		$return .= '>';
		$return .= anchor(
			"{$controller}/edit/{$id}", ' ',
			array(
				'class' => 'glyphicon glyphicon-pencil',
				'title' => lang('action_edit')
			)
		);
		$return .= '</li>';
		// ---------------------------------------------------------
		$return .= '<li>';
		$return .= anchor(
			"{$controller}/delete/{$id}", ' ',
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
