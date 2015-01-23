<?php
/**
 * Created by PhpStorm.
 * User: Sander
 * Date: 10-1-2015
 * Time: 14:09
 */

Class StudentController extends BaseController{

    public function getDashboard(){
        $this->layout->page = View::make('pages.dashboard_student');
    }



}