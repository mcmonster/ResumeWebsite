<?php
class RecommendationsController extends AppController {
	public $helpers = array('Html');

	function download($fileName) {
		$this->view = 'Media';
		$params = array(
			'id' => $fileName.'.pdf',
			'name' => $fileName,
			'download' => true,
			'extension' => 'pdf',
			'path' => APP . 'files' . DS);
		$this->set($params);
	}

	public function index() {
		$this->set('recommendations', $this->Recommendation->find('all', array(
			'conditions' => array(
				'Recommendation.enabled' => '1')
			)
		));
	}
}
?>
