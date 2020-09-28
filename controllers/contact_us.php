<?php 
class contact_us extends Controller {
    function __construct()
    {
        parent::__construct();
        $this->view->render_web('contact-us');
    }

}
?>