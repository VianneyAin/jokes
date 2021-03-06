<?php
class Profile_Controller extends Application {

    public function __construct(){
        parent::__construct();//get parent's variables
        require_once(dirname(__FILE__).'/../models/model.profile.php');
        $this->model = new Profile_Model();
        require_once(dirname(__FILE__).'/../views/view.profile.php');
        $this->view = new Profile_View($this->user_object);
        Application::cloudinary();
        \Cloudinary::config(array(
          "cloud_name" => "dzfbgwvgr",
          "api_key" => "368456582725284",
          "api_secret" => "7Lqf6jDfM2FO8EEMNSaX9tte5t8"
        ));
    }

    public function layout_request() {
        $this->user = $this->model->get_current_user($this->registration->GetSessionInfos('username'));
        $this->data = $this->model->get_posted_jokes($this->user);
    }

    public function partials_request() {
        $this->view->profile_current_user_view($this->registration, $this->user, $this->data);
    }
}
?>
