<?php
class AdminDashboard extends Controller{
    function index(){
        $data['judul'] = 'NAIK - DASHBOARD ADMIN';
        $this -> view('templates/header');
        $this -> view('adminDashboard/index');
    }
}