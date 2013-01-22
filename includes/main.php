<?php

require_once(FILE_ROOT . 'includes/baseClass.php');

class main extends BaseClass {
    private $TemplateSmarty;
    private $appSmarty;
    private $page;
    
    public function __Construct($isAdminPage, $isIE) {
        parent::__construct();

        $this->loadSmarty();
        $this->loadDetails();          
    }
    
    private function loadSmarty() {
        $this->TemplateSmarty = new Smarty();
        $this->TemplateSmarty->template_dir = $this->config->template['mainTemplateDir'];
        $this->TemplateSmarty->compile_dir = $this->config->template['mainCompileDir'];
        
        $this->appSmarty = new Smarty();
        $this->appSmarty->template_dir = $this->config->template['appTemplateDir'];
        $this->appSmarty->compile_dir = $this->config->template['appCompileDir'];        
    }    

    public function run() {  
        $this->displayPage('index');
    }

    private function displayPage($mainContent) {
        $this->loadPages($mainContent);           
        $this->TemplateSmarty->display($this->config->template['appTemplates']['mainTemplate']);
    }

    private function loadDetails() {
        $this->page = array(
            'year' => time(),
            'title' => $this->config->appSettings['apptitle'],
            'customCss' => $this->config->appSettings['css'],
            'customJs' => $this->config->appSettings['js']
        );
    }
    
    private function loadPages($mainContent) {
        $this->TemplateSmarty->assign('page', $this->page);
        $this->TemplateSmarty->assign('mainContent', $this->appSmarty->fetch($this->config->template['appTemplates'][$mainContent])); 
    }    
}
?>