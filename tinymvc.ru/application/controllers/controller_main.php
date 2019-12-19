<?php
class Controller_Main extends Controller
{
    function action_index()
    {
        parent::action_index();
        $this->view->generate('main_view.php' , 'template_view.php');
    }
    function action_registration()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this-> model = new Model_mail();
            if (isset($_POST['mail']) && isset($_POST['subject']) && isset($_POST['text'])) {
                $this->model->mail = $_POST['mail'];
                $this->model->subject = $_POST['subject'];
                $this->model->text= $_POST['text'];
            }
            $data = $this->model->check_err();
            $this->view->generate('main_view.php', 'template_view.php', $data);
        } else {
            $this->view->generate('main_view.php', 'template_view.php');
        }
    }

}
