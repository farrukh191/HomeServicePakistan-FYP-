<?php  

session_start();
include('db.php');

  //echo $email=$_SESSION['email'];
$phone = $_SESSION['phone'];
  echo  $pas=$_SESSION['password'];
  echo $provider_Id=$_SESSION['providerId'];
  echo $providerCat=$_SESSION['pcategory'];
  
if (!$pas) {
  header('location:ClientLogin.php?Access Denied..');
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>media profile - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    	body{margin-top:20px;
background:#eee;
}
.fs35 {
    font-size: 35px !important;
}

.mw50 {
    max-width: 50px !important;
}
.mn {
    margin: 0 !important;
}
.mw140 {
    max-width: 140px !important;
}
.mb20 {
    margin-bottom: 20px !important;
}
.mr25 {
    margin-right: 25px !important;
}

.mw40 {
    max-width: 40px !important;
}

.p30 {
    padding: 30px !important;
}

.page-heading {
  position: relative !important;
  padding: 30px 40px !important;
  margin: -45px -20px 25px !important;
  border-bottom: 1px solid #d9d9d9 !important;

 /* background-color: #f2f2f2 !important;
  background-color: #1b334b !important;*/
  background-image: url('images/slider/slide-2.jpg');
}
.page-tabs {
  margin: -25px -20px 30px !important;
  padding: 15px 25px 0 !important;
  border-bottom: 1px solid #ddd !important;
  background: #e9e9e9 !important;
}
.page-tabs .nav-tabs {
  border-bottom: 0 !important;
}
.page-tabs .nav-tabs > li > a {
  color: #AAA !important;
  padding: 10px 20px !important;
}
.page-tabs .nav-tabs > li:hover > a,
.page-tabs .nav-tabs > li:focus > a {
  border-color: #ddd !important;
}
.page-tabs .nav-tabs > li.active > a,
.page-tabs .nav-tabs > li.active > a:hover,
.page-tabs .nav-tabs > li.active > a:focus {
  color: #666 !important;
  font-weight: 600 !important;
  background-color: #eee !important;
  border-bottom-color: transparent !important;
}
@media (max-width: 800px) {
  .page-tabs {
    padding: 25px 20px 0 !important;
  }
  .page-tabs .nav-tabs li {
    float: none !important;
    margin-bottom: 5px !important;
  }
  .page-tabs .nav-tabs li:last-child,
  .page-tabs .nav-tabs li.active:last-child {
    margin-bottom: 10px !important;
  }
  .page-tabs .nav-tabs > li > a:hover,
  .page-tabs .nav-tabs > li > a:focus {
    border: 1px solid #DDD !important;
  }
  .page-tabs .nav-tabs > li.active > a,
  .page-tabs .nav-tabs > li.active > a:hover,
  .page-tabs .nav-tabs > li.active > a:focus {
    border-bottom-color: #ddd !important;
  }
}
.panel {
  position: relative !important;
  margin-bottom: 27px !important;
  background-color: #ffffff !important;
  border-radius: 3px v;
}
.panel.panel-transparent {
  background: none !important;
  border: 0 !important;
  margin: 0 !important;
  padding: 0 !important;
}
.panel.panel-border {
  border-style: solid !important;
  border-width: 0 !important;
}
.panel.panel-border.top {
  border-top-width: 5px !important;
}
.panel.panel-border.right {
  border-right-width: 5px !important;
}
.panel.panel-border.bottom {
  border-bottom-width: 5px !important;
}
.panel.panel-border.left {
  border-left-width: 5px !important;
}
.panel.panel-border > .panel-heading {
  background-color: #fafafa !important;
  border-color: #e2e2e2 !important;
  border-top: 1px solid transparen !importantt;
}
.panel.panel-border > .panel-heading > .panel-title {
  color: #999999 !important;
}
.panel.panel-border.panel-default {
  border-color: #DDD !important;
}
.panel.panel-border.panel-default > .panel-heading {
  border-top: 1px solid transparent !important;
}
.panel-menu {
  background-color: #fafafa !important;
  padding: 12px !important;
  border: 1px solid #e2e2e2 !important;
}
.panel-menu.dark {
  background-color: #f8f8f8 !important;
}
.panel-body .panel-menu {
  border-left: 0 !important;
  border-right: 0 !important;
}
.panel-heading + .panel-menu,
.panel-menu + .panel-body,
.panel-body + .panel-menu,
.panel-body + .panel-body {
  border-top: 0 !important;
}
.panel-body {
  position: relative !important;
  padding: 15px !important;
  border: 1px solid #e2e2e2 !important;
}
.panel-body + .panel-footer {
  border-top: 0 !important;
}
.panel-heading {
  position: relative !important;
  height: 52px !important;
  line-height: 49px !important;
  letter-spacing: 0.2px !important;
  color: #999999 !important;
  font-size: 15px !important;
  font-weight: 400 !important;
  padding: 0 8px !important;
  background: #fafafa !important;
  border: 1px solid #e2e2e2 !important;
  border-top-right-radius: 3px !important;
  border-top-left-radius: 3px !important;
}
.panel-heading, .panel-body {
  border-top: 0 !important;
}
.panel-heading > .dropdown .dropdown-toggle {
  color: inherit !important;
}
.panel-heading .widget-menu .btn-group {
  margin-top: -3px !important;
}
.panel-heading .widget-menu .form-control {
  margin-top: 6px !important;
  font-size: 11px !important;
  height: 27px !important;
  padding: 2px 10px !important;
  border-radius: 1px !important;
}
.panel-heading .widget-menu .form-control.input-sm {
  margin-top: 9px !important;
  height: 22px !important;
}
.panel-heading .widget-menu .progress {
  margin-top: 11px !important;
  margin-bottom: 0 !important;
}
.panel-heading .widget-menu .progress-bar-lg {
  margin-top: 10px !important;
}
.panel-heading .widget-menu .progress-bar-sm {
  margin-top: 15px !important;
}
.panel-heading .widget-menu .progress-bar-xs {
  margin-top: 17px !important;
}
.panel-icon {
  padding-left: 5px v;
}
.panel-title {
  padding-left: 6px !important;
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}
.panel-title > .fa,
.panel-title > .glyphicon,
.panel-title > .glyphicons,
.panel-title > .imoon {
  top: 2px !important;
  min-width: 22px !important;
  color: inherit !important;
  font-size: 14px !important;
}
.panel-title > a {
  color: inherit !important;
}
.panel-footer {
  padding: 10px 15px !important;
  background-color: #fafafa !important;
  border: 1px solid #e2e2e2 !important;
  border-bottom-right-radius: 2px !important;
  border-bottom-left-radius: 2px !important;
}
.panel > .list-group {
  margin-bottom: 0 !important;
}
.panel > .list-group .list-group-item {
  border-radius: 0 !important;
}
.panel > .list-group:first-child .list-group-item:first-child {
  border-top-right-radius: 2px !important;
  border-top-left-radius: 2px !important;
}
.panel > .list-group:last-child .list-group-item:last-child {
  border-bottom-right-radius: 2px !important;
  border-bottom-left-radius: 2px !important;
}
.panel-heading + .list-group .list-group-item:first-child {
  border-top-width: 0 !important;
}
.panel-body + .list-group .list-group-item:first-child {
  border-top-width: 0 !important;
}
.list-group + .panel-footer {
  border-top-width: 0 !important;
}
.panel > .table,
.panel > .table-responsive > .table,
.panel > .panel-collapse > .table {
  margin-bottom: 0 !important;
}
.panel > .table:first-child,
.panel > .table-responsive:first-child > .table:first-child {
  border-top-right-radius: 2px !important;
  border-top-left-radius: 2px !important;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child {
  border-top-left-radius: 2px !important;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child {
  border-top-right-radius: 2px !important;
}
.panel > .table:last-child,
.panel > .table-responsive:last-child > .table:last-child {
  border-bottom-right-radius: 2px !important;
  border-bottom-left-radius: 2px !important;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
  border-bottom-left-radius: 2px !important;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
  border-bottom-right-radius: 2px !important;
}
.panel > .panel-body + .table,
.panel > .panel-body + .table-responsive {
  border-top: 1px solid #eeeeee !important;
}
.panel > .table > tbody:first-child > tr:first-child th,
.panel > .table > tbody:first-child > tr:first-child td {
  border-top: 0 !important;
}
.panel > .table-bordered,
.panel > .table-responsive > .table-bordered {
  border: 0 !important;
}
.panel > .table-bordered > thead > tr > th:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:first-child,
.panel > .table-bordered > tbody > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
.panel > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-bordered > thead > tr > td:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
.panel > .table-bordered > tbody > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
.panel > .table-bordered > tfoot > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {
  border-left: 0 !important;
}
.panel > .table-bordered > thead > tr > th:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:last-child,
.panel > .table-bordered > tbody > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
.panel > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-bordered > thead > tr > td:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
.panel > .table-bordered > tbody > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
.panel > .table-bordered > tfoot > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {
  border-right: 0 !important;
}
.panel > .table-bordered > thead > tr:first-child > td,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > td,
.panel > .table-bordered > tbody > tr:first-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,
.panel > .table-bordered > thead > tr:first-child > th,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > th,
.panel > .table-bordered > tbody > tr:first-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > th {
  border-bottom: 0 !important;
}
.panel > .table-bordered > tbody > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
.panel > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-bordered > tbody > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
.panel > .table-bordered > tfoot > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
  border-bottom: 0 !important;
}
.panel > .table-responsive {
  border: 0 !important;
  margin-bottom: 0 !important;
}
.panel-group {
  margin-bottom: 19px !important;
}
.panel-group .panel-title {
  padding-left: 0 !important;
}
.panel-group .panel-heading,
.panel-group .panel-heading a {
  position: relative !important;
  display: block !important;
  width: 100% !important;
}
.panel-group.accordion-lg .panel + .panel {
  margin-top: 12px !important;
}
.panel-group.accordion-lg .panel-heading {
  font-size: 14px !important;
  height: 54px !important;
  line-height: 52px !important;
}
.panel-group .accordion-icon {
  padding-left: 35px !important;
}
.panel-group .accordion-icon:after {
  position: absolute !important;
  content: "\f068 !important";
  font-family: "FontAwesome";
  font-size: 12px !important;
  font-style: normal !important;
  font-weight: normal !important;
  -webkit-font-smoothing: antialiased !important;
  color: #555 !important;
  left: 10px !important;
  top: 0 !important;
}
.panel-group .accordion-icon.collapsed:after {
  content: "\f067";
}
.panel-group .accordion-icon.icon-right {
  padding-left: 10px !important;
  padding-right: 30px !important;
}
.panel-group .accordion-icon.icon-right:after {
  left: auto !important;
  right: 5px !important;
}
.panel-group .panel {
  margin-bottom: 0 !important;
  border-radius: 3px !important;
}
.panel-group .panel + .panel {
  margin-top: 5px !important;
}
.panel-group .panel-heading + .panel-collapse > .panel-body {
  border-top: 0 !important;
}
.panel-group .panel-footer {
  border-top: 0 !important;
}
.panel-group .panel-footer + .panel-collapse .panel-body {
  border-bottom: 1px solid #eeeeee !important;
}


.media {
  color: #999999 !important;
  font-weight: 600 !important;
  margin-top: 15px !important;
}
.media:first-child {
  margin-top: 0 !important;
}
.media-right,
.media > .pull-right {
  padding-left: 10px !important;
}
.media-left,
.media > .pull-left {
  padding-right: 10px !important;
}
.media-left,
.media-right,
.media-body {
  display: table-cell !important;
  vertical-align: top !important;
}
.media-middle {
  vertical-align: middle !important;
}
.media-bottom {
  vertical-align: bottom !important;
}
.media-heading {
  color: #555555 !important;
  margin-top: 0 !important;
  margin-bottom: 5px !important;
}
.media-list {
  padding-left: 0 !important;
  list-style: none !important;
}

/*===============================================
  Tabs
================================================= */
/* Tabs Wrapper */
.tab-block {
  position: relative !important;
}
/* Tabs Content */
.tab-block .tab-content {
  overflow: auto !important;
  position: relative !important;
  z-index: 10 !important;
  min-height: 125px !important;
  padding: 16px 12px !important;
  border: 1px solid #e2e2e2 !important;
  background-color: #FFF !important;
}
/*===============================================
  Tab Navigation
================================================= */
.tab-block .nav-tabs {
  position: relative !important;
  border: 0 !important;
}
/* nav tab item */
.tab-block .nav-tabs > li {
  float: left !important;
  margin-bottom: -1px !important;
}
/* nav tab link */
.tab-block .nav-tabs > li > a {
  z-index: 9 !important;
  position: relative !important;
  color: #AAA !important;
  font-size: 14px !important;
  font-weight: 400 !important;
  padding: 14px 20px !important;
  margin-right: -1px !important;
  border-color: #e2e2e2 !important;
  border-radius: 0 !important;
  background: #fafafa !important;
}
.tab-block .nav-tabs > li:first-child > a {
  margin-left: 0 !important;
}
/* nav tab link:hover */
.tab-block .nav-tabs > li > a:hover {
  background-color: #f4f4f4 !important;
}
/* nav tab active link:focus:hover */
.tab-block .nav-tabs > li.active > a,
.tab-block .nav-tabs > li.active > a:hover,
.tab-block .nav-tabs > li.active > a:focus {
  cursor: default !important;
  position: relative !important;
  z-index: 12 !important;
  color: #555555 !important;
  background: #FFF !important;
  border-color: #e2e2e2 !important;
  border-bottom: 1px solid #FFF !important;
}
/*===============================================
  Tab Navigation - Tabs Left
================================================= */
.tabs-left {
  float: left !important;
}
/* nav tab item */
.tabs-left > li {
  float: none !important;
  margin: 0 -1px -1px 0 !important;
}
/* nav tab item link */
.tabs-left > li > a {
  padding: 14px 16px !important;
  color: #777 !important;
  font-weight: 600 !important;
  border: 1px solid transparent !important;
  border-color: #DDD !important;
  background: #fafafa !important;
}
/* nav tab link:hover */
/* nav tab active link:focus:hover */
.tab-block .tabs-left > li.active > a,
.tab-block .tabs-left > li.active > a:hover,
.tab-block .tabs-left > li.active > a:focus {
  color: #555 !important;
  border-color: #DDD #FFF #DDD #DDD !important;
  cursor: default !important;
  position: relative !important;
  z-index: 12 !important;
  background: #FFF !important;
}
/*===============================================
  Tab Navigation - Tabs Right
================================================= */
.tabs-right {
  float: right !important;
}
/* nav tab item */
.tabs-right > li {
  float: none !important;
  margin: 0 0 -1px -1px !important;
}
/* nav tab item link */
.tabs-right > li > a {
  padding: 14px 16px !important;
  color: #777 !important;
  font-weight: 600 !important;
  border: 1px solid transparent !important;
  border-color: #DDD !important;
  background: #fafafa !important;
}
/* nav tab link:hover */
/* nav tab active link:focus:hover */
.tab-block .tabs-right > li.active > a,
.tab-block .tabs-right > li.active > a:hover,
.tab-block .tabs-right > li.active > a:focus {
  color: #555 !important;
  border-color: #DDD #DDD #DDD #FFF !important;
  cursor: default !important;
  position: relative !important;
  z-index: 12 !important;
  background: #FFF !important;
}
/*===============================================
  Tab Navigation - Tabs Right
================================================= */
.tabs-below {
  position: relative !important;
}
/* nav tab item */
.tabs-below > li {
  float: left !important;
  margin-top: -1px !important;
}
/* nav tab item link */
.tabs-below > li > a {
  position: relative !important;
  z-index: 9 !important;
  margin-right: -1px!important;
  padding: 11px 16px !important;
  color: #777 !important;
  font-weight: 600 !important;
  border: 1px solid #DDD !important;
  background: #fafafa !important;
}
/* nav tab link:hover */
/* nav tab active link:focus:hover */
.tab-block .tabs-below > li.active > a,
.tab-block .tabs-below > li.active > a:hover,
.tab-block .tabs-below > li.active > a:focus {
  cursor: default !important;
  position: relative !important;
  z-index: 12 !important;
  color: #555555 !important;
  background: #FFF !important;
  border-color: #DDD !important;
  border-top: 1px solid #FFF !important;
}

.panel-heading{
	padding-top: 15px !important;

}

.panel-body h6{
	text-align: left;
	line-height: 20px !important;
	font-size: 14px;
	font-weight: bold;

}
.panel-body .p2{
	text-align: left;
	padding-top: 10px;
	padding-bottom: 10px;
	line-height: 20px !important;
	font-size: 20px;
	color: black;
	font-weight: 30px;
}
.text-muted{
	text-align: left;
	line-height: 20px !important;

}

.panel-body span{
	margin: 10px;
}

  .main{
width: 100% !important;
margin-top: -6% !important;
margin-bottom: 4%;
    }
.register{
  line-height: 1.2;
  margin: 0;
  padding: 0;
  font-weight: 900;
  color: #fff;
  font-family: 'Poppins';
  font-size: 26px;
  text-transform: uppercase;
  margin-bottom: 10px; 
}

.while{
 line-height: 1.2;
  margin: 0;
  padding: 0;
  font-weight: 700;
  color: #fff;
  font-family: 'Poppins';
  font-size: 12px;
  text-transform: uppercase;
  margin-bottom: 10px;
}
label.required {
    position: relative !important;
}
label, .lo {
    font-weight: bold !important;
    text-transform: uppercase !important;
    margin-bottom: 7px !important;
    font-size: 14px !important;
}
label, input {
    display: block !important;
    width: 100% !important;
    color: black;

}
form-submit {
  text-align: right; }

.submit {
  width: 150px !important;
  height: 50px !important;
  display: inline-block !important;
  font-family: 'Poppins' !important;
  font-weight: bold !important;
  font-size: 14px !important;
  padding: 10px !important;
  border: none !important;
  cursor: pointer !important;
  text-transform: uppercase !important;
  border-radius: 5px !important;
  -moz-border-radius: 5px !important;
  -webkit-border-radius: 5px !important;
  -o-border-radius: 5px !important;
  -ms-border-radius: 5px !important; 
}

#reset {
  background: #fff;
  color: #999;
  border: 2px solid #ebebeb; }
  #reset:hover {
    border: 2px solid #329e5e;
    background: #329e5e;
    color: #fff; }

#submit {
  background: #329e5e;
  color: #fff;
  margin-right: 25px; }
  #submit:hover {
    background-color: #267747; }
    .form-input, .form-select {
  margin-bottom: 23px !important; 

}

 .form-input, .form-select {
  margin-bottom: 23px !important; 
}
.select-list {
  position: relative !important;
  display: inline-block !important;
  width: 100% !important;
 height: 45px;
 border-color: #ebebeb !important;
  margin-bottom: 47px !important; 
}

select{
  
  height: 50px !important;
  width: 100% !important;
  border-radius: 5px;
}
  </style>


 <link rel="stylesheet" href="fonts1/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style2.css">



</head>
<body>


<?php include('Navbar.php'); ?>


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<section id="content" class="container">
    <!-- Begin .page-heading -->
   <?php include('providerheader.php') ?>

    <!-- Begin .page-sidebar -->
    <div class="row">
        <div class="col-md-4">
          <?php include('providersidebar.php'); ?>
        </div>
        <div class="col-md-8">

          <div class="tab-block">
            <ul class="nav nav-tabs">
              <li class="active">
                <a href="#tab1" data-toggle="tab">Activity</a>
              </li>
              <li>
                <a href="#tab1" data-toggle="tab">Social</a>
              </li>
              <li>
                <a href="#tab1" data-toggle="tab">Media</a>
              </li>
            </ul>
            <div class="tab-content p30" >
              <div id="tab1" class="tab-pane active">





<!----  description detail  ---->




<?php  


if (isset($_POST['submit']) || isset($_FILES['gigimage'])) {
  
  $project_title=$_POST['project_title'];
  $projectDesc=$_POST['description'];
  $projectcomp=$_POST['date'];
  $jobCategory=$_POST['jobCategory'];
  //$gigimage=$_POST['gigimage'];


  $uploadfile=$_FILES["gigimage"]["name"];
  $uploadfile_temp=$_FILES["gigimage"]["tmp_name"];
  
  $move=move_uploaded_file($uploadfile_temp, "C:/xampp/htdocs/farrukh/farrukh/FYP_PROJECT/1/Assets1/gig/$uploadfile/");



  // double data is not insert write code below

  $select='select * from gig';
  $selegig=mysqli_query($con,$select);
  $selfetch=mysqli_fetch_assoc($selegig);

  $tit = $selfetch['project_title'];

  if ($project_title !== "" and $project_title !== $tit) {
        $gigSele="insert into gig(provider_id,project_title,project_desc,completionDate,jobCats,gigimage)values('$provider_Id',' $project_title','$projectDesc','$projectcomp','$jobCategory','$uploadfile')";
        $gigquery=mysqli_query($con,$gigSele);


        if ($gigquery) {
       //   echo "data is passing.";
          ?>
         header('location:gig.php');
         <script type="text/javascript">
           window.open('providerProfile.php','_self');
         </script>

         <?php
          exit();

        }
        else{
          echo "data is not passing.";
        }
  }

  else{
    echo "you have already this data please try another...";
  }





}




?>




                <div class="media" style="width: 100%; height: auto;;">
                 
                  <div class="media-body" style="">
                    <h5 class="media-heading mb20 " style="text-align: center; padding-top: 2%;">
                      Add Portfolio Projects
                    </h5>
                    




        <form class="form-detail"  method="POST" enctype="multipart/form-data" style="margin-top: 5%; padding: 10px;">


          <div class="tabcontent" id="sign-up">
          
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" class="required">Project Title</label>
                                   <p> <input type="text" name="project_title" id="first_name" style="color: black; font-size: 15px;" required /></p>
                                </div>
                              

                                <div class="form-input">
                                    <label for="Description" >Project Description (optional)</label>
                                    <p><textarea name="description"  style="word-wrap: break-word;  color: black; font-size: 15px; width: 100%; padding-left: -10%; height:100px; border-color: #ebebeb; font-weight: 1px; border-radius: 5px; " required>
                                      
                                    </textarea></p>
                                    <!-- <input type="text" name="Professional" id="company" required /> -->
                                 <!-- <p>   <input type="text" name="description"  style="word-wrap: break-word;  color: black; font-size: 15px; width: 100%; padding-left: -10%; height:100px; border-color: #ebebeb; border-radius: 5px; " required /></p> -->
                                  
                                </div>




              


              
                            </div>






                            <div class="form-group">

                              


                                <div class="form-input">
                                    <label for="blank_name">Completion date</label>
                                   <p> <input type="date" name="date" id="blank_name" required style="color: black; font-size: 15px; height: 54px;" /></p>

                                </div>
                               
                                <div class="form-select" style="margin-top: 7.5%;">
                
                <label for="meal_preference">Job Category</label>

                
                <p> <input type="text"  name="jobCategory" readonly value='<?php echo $providerCat; ?>' style="color: black; font-size: 15px; height: 54px;" /></p>
                           <!--  <p>  <select class="form-select select-list" name="jobCategory" style="color: black;"  aria-label=".form-select-lg example">
                                 <option selected>Open this select menu</option>
                        <option value="Electricians">Electrician</option>
                        <option value="Medical">Medical</option>
                        <option value="Plumber">Plumber</option>
                        <option value="Carpenter">Carpenter</option>
                        <option value="Welder">Welder</option>
                        <option value="Labour">Labour</option>
                        <option value="Beautician">Beautician</option>
                        <option value="Teaching">Teaching</option>
                        <option value="Mechanic">Mechanic</option>
                   -->

                </select></p>
              </div>



              <div class="form-input" style="margin-top: 0%;">
                                  
                  <label class="form-label" for="customFile">Optional image file</label>
                <p>  <input type="file" class="form-control" name="gigimage" id="customFile" style="height: 54px; border-color: #ebebeb;" /></p>
              </div>
                               





                            </div>
                        </div>
                        
                        <div class="form-submit" style="margin-top: -2%; margin-right: -3%;">
                            <input type="submit" value="submit" class="submit" id="submit" name="submit" onclick="return mess" />
                            <!-- <input type="submit" value="Reset" class="submit" id="reset" name="reset" /> -->
                        </div>

                        
                    
          </div>
        </form>









                    
                  </div>
                </div>



               
               
              </div>
              <div id="tab2" class="tab-pane"></div>
              <div id="tab3" class="tab-pane"></div>
              <div id="tab4" class="tab-pane"></div>
            </div>
          </div>
        </div>
      </div>
  </section>

<?php include('footer.php'); ?>



<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>