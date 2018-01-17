<?php
/**
 *
 */
class Shares extends Controller
{

  protected function Index() {
    $viewmodel = new ShareModel();
    $this->ReturnView($viewmodel->Index(), true);
  }

  protected function Add() {

    if(!isset($_SESSION['is_logged_in'])) {
      header('Location: '.ROOT_URL.'shares');
      return;
    }
    $viewmodel = new ShareModel();
    $this->ReturnView($viewmodel->Add(), true);

  }

}
