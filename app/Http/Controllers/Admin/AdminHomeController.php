<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class AdminHomeController extends Controller
{
public function index()
{
$viewData = [];
$viewData["title"] = "Admin Page - Admin - Online Store";
return view('layouts.admin.home.index')->with("viewData", $viewData);
}
}
