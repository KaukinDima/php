<?php
/**
 *
 */
class Admin extends Controller
{

  protected function Index() {
    $viewmodel = new AdminModel();
    $this->ReturnView($viewmodel->Index(), false);
  }

  protected function asd() {
    $viewmodel = new AdminModel();
    $this->ReturnView($viewmodel->asd(), false);
  }

  protected function ShowPage() {
    $viewmodel = new AdminModel();
    $this->ReturnView($viewmodel->ShowPage(), false);
  }

}
