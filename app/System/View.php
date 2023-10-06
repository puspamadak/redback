<?php
namespace App\System;

class View {
	public $_data = [];
	public $_subViews = [];
	public $_file;
	private $_frags = [];
	private $_fragName;

	function __construct(string $file) {
		$this->_file = $file;
	}

	static function create(string $file) {
		$view = new static($file);
		return $view;
	}

	function data(array $data) {
		$this->_data = $data;
		return $this;
	}

	function subView(View $subView, $index = 0) {
		$this->_subViews[$index] = $subView->render();
		foreach($subView->_frags as $i => $frag) {
			if(!isset($this->_frags[$i])) $this->_frags[$i] = '';
			$this->_frags[$i] .= $frag;
		}
		return $this;
	}

	private function loadSubView($index = 0) {
		if(!isset($this->_subViews[$index])) return;
		return $this->_subViews[$index];
	}

	private function loadFrag($index = 0) {
		if(!isset($this->_frags[$index])) return;
		return $this->_frags[$index];
	}

	function render() {
		ob_start();
		foreach($this->_data as $k => $v) $$k = $v;
		include DIR['view'].$this->_file.'.php';
		return ob_get_clean();
	}

	function fragStart($name) {
		$this->_fragName = $name;
		ob_start();
	}
	
	function fragEnd() {
		if(!isset($this->_frags[$this->_fragName])) $this->_frags[$this->_fragName] = '';
		$this->_frags[$this->_fragName] .= ob_get_clean();
	}
}
?>