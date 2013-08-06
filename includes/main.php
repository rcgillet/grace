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
		$this->appSmarty->caching = 0;
		$this->TemplateSmarty->caching = 0;
    }    

    public function run() {  
		if(isset($_GET['page'])) {
			switch($_GET['page']) {
				case '1':
					$pageName = 'carousel';
					break;
				case '2':
					$pageName = 'staff';				
					break;
				case '3':
					$pageName = 'carousel';
					break;
				case '4':
					$pageName = 'preschool';				
					break;
				case '5':
					$pageName = 'elementary';				
					break;
				case '6':
					$pageName = 'highSchool';				
					break;				
				case '7':
					$pageName = 'signin';				
					break;
                case '8':
                    $pageName = 'general';     
                    break;	
				default:
					$pageName = 'index';									
			}
		} else {
			$pageName = 'carousel';				
		}
		$this->displayPage($pageName);
    }

    private function displayPage($mainContent) {
        include(FILE_ROOT . 'templates/' . $this->config->template['appTemplates'][$mainContent]);
        // $this->loadPages($mainContent);           
        // $this->TemplateSmarty->display($this->config->template['appTemplates']['mainTemplate']);
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