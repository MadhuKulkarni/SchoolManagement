<?php
<<<<<<< Updated upstream
error_reporting(E_ERROR | E_PARSE);

if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>
=======
   if(!isset($_SERVER['HTTP_REFERER'])){
       // redirect them to your desired location
       header('location:../index.php');
       exit;
   }
   ?>
>>>>>>> Stashed changes
<?php include_once('head.php'); ?>
<?php include_once('header_student.php'); ?>
<?php include_once('sidebar1.php'); ?>
<?php include_once('alert.php'); ?>
<style>
   @import url(https://fonts.googleapis.com/css?family=Roboto+Condensed);
   * {
   box-sizing: border-box;
   }
   body {
   background: #f0f0f0;
   line-height: normal;
   font-size: 16px;
   overflow-Y: scroll;
   font-family: 'Roboto Condensed', "Helvetica Neue", Helvetica, Arial, sans-serif;
   -webkit-font-smoothing: antialiased !important;
   }
   a, a:hover, a:visited, a:link, a:active {
   text-decoration: none;
   }
   a:active {
   color: #fff !important;
   }
   .sm-img {
   height: 30px !important;
   width: 30px !important;
   }
   ::-moz-selection {
   background: #5af;
   color: #fff;
   text-shadow: none;
   }
   ::selection {
   background: #5af;
   color: #fff;
   text-shadow: none;
   }
   .rad-page-title {
   margin-bottom: 20px;
   text-shadow: 1px 4px 6px #c6c6c6, 0 0 0 #000, 1px 4px 6px #c6c6c6;
   }
   .rad-page-title span {
   font-size: 22px;
   font-weight: 500;
   display: block;
   }
   .rad-navigation {
   position: fixed;
   left: 0;
   right: 0;
   top: 0;
   box-shadow: 0 0px 9px 4px rgba(0, 0, 0, 0.1), 0 -5px 2px 2px rgba(0, 0, 0, 0.1);
   background: white;
   z-index: 10000;
   text-align: center;
   }
   .rad-navigation ul {
   margin-bottom: 0;
   }
   .rad-logo-hidden {
   line-height: 75px;
   font-weight: 900;
   text-transform: uppercase;
   font-size: 22px;
   text-decoration: none;
   color: #222533;
   opacity: 0;
   visibility: hidden;
   position: absolute;
   left: 50%;
   transition: all 0.2s ease-in-out;
   }
   .links {
   margin-right: 10px;
   position: relative;
   }
   .links > li {
   list-style: none;
   position: relative;
   margin: 10px;
   display: inline-block;
   }
   .rad-dropmenu-item.active {
   display: block;
   -webkit-animation: flipInX 1s ease;
   }
   .lg-text {
   font-size: 13px;
   font-weight: 600;
   color: #333;
   }
   .sm-text {
   font-size: 11px;
   color: #c6c6c6;
   }
   .md-text {
   font-size: 12px;
   color: #c6c6c6;
   }
   .rad-notification-item {
   width: 100%;
   padding: 15px;
   border-bottom: 1px solid #EEEEEE;
   }
   .rad-notification-item:hover {
   background: #F5F5F5;
   }
   .rad-notification-item .rad-notification-content {
   color: #404040;
   }
   .rad-notification-body {
   color: black;
   vertical-align: middle;
   margin-left: 30px;
   }
   .rad-logo-container {
   width: 225px;
   text-align: center;
   height: 50px;
   float: left;
   transition: all 0.2s ease-in-out;
   }
   .rad-top-nav-container {
   float: right;
   transition: all 0.2s ease-in-out;
   }
   .rad-toggle-btn, .rad-logo {
   text-decoration: none;
   position: relative;
   height: 50px;
   line-height: 50px;
   padding: 0 15px;
   font-size: 22px;
   font-weight: 900;
   text-transform: uppercase;
   text-decoration: none;
   color: #222533;
   display: inline-block;
   }
   .rad-logo i {
   padding-top: 2px;
   vertical-align: middle;
   margin-right: 10px;
   }
   .rad-toggle-btn:hover {
   background: #f9f9f9;
   }
   .rad-menu-item {
   position: relative;
   padding: 0 5px;
   line-height: 30px;
   height: 30px;
   color: #89949B;
   z-index: 5;
   display: inline-block;
   }
   .rad-badge {
   height: 20px;
   color: white;
   border-radius: 10px;
   line-height: 20px;
   font-size: 12px;
   background: #E94B3B;
   box-shadow: 0.5px 0.2px 1px rgba(0, 0, 0, 0.5);
   display: inline-block;
   text-align: center;
   }
   .rad-menu-badge {
   position: absolute;
   min-width: 20px;
   min-height: 20px;
   line-height: 20px;
   font-weight: bold;
   color: white;
   border-radius: 100%;
   font-size: 12px;
   background: #E94B3B;
   box-shadow: 0.5px 0.2px 1px rgba(0, 0, 0, 0.5);
   display: inline-block;
   text-align: center;
   top: -10px;
   z-index: 1;
   }
   .sm-menu {
   min-width: 150px !important;
   }
   .sm-menu > li {
   padding: 10px;
   text-align: left;
   }
   .sm-menu > li i {
   margin: 0 10px 0 0;
   }
   .sm-menu > li > a {
   padding: 10px;
   }
   .rad-dropmenu-item {
   position: absolute;
   right: -6px;
   top: 45px;
   min-width: 250px;
   background: white;
   border: 1px solid #BDBDBD;
   border-top: 5px solid #515d6e;
   border-radius: 2px;
   box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
   display: none;
   }
   .rad-dropmenu-item:before {
   content: "";
   position: absolute;
   border-width: 0 10px 10px 10px;
   border-style: solid;
   border-color: #515d6e transparent;
   top: -14px;
   right: 8px;
   }
   .rad-dropmenu-item.rad-settings {
   right: 0 !important;
   left: auto !important;
   }
   .rad-dropmenu-item.rad-settings:before {
   right: 5px !important;
   left: auto !important;
   }
   .rad-dropmenu-item.rad-settings > .rad-notification-item:hover {
   background: #fff !important;
   }
   .rad-dropmenu-item.rad-settings > .rad-notification-item i {
   font-size: 24px;
   }
   .rad-dropmenu-footer, .rad-dropmenu-header {
   display: block !important;
   background: #CFD8DC;
   text-transform: uppercase;
   font-size: 12px;
   margin: 0 !important;
   padding: 6px;
   text-align: center;
   }
   .rad-dropmenu-footer > a, .rad-dropmenu-header > a {
   color: white;
   line-height: 12px;
   text-decoration: none;
   }
   .rad-dropmenu-header {
   border-bottom: 1px solid #CFD8DC;
   }
   .rad-dropmenu-footer {
   border-top: 1px solid #CFD8DC;
   }
   .rad-chk-pin {
   margin: 0 !important;
   }
   .rad-chk-pin span {
   display: inline-block;
   position: relative;
   height: 20px;
   width: 40px;
   border-radius: 4px;
   background: crimson;
   border: 1px solid #f6f6f6;
   }
   .rad-chk-pin span:after {
   content: "";
   position: absolute;
   background: white;
   width: 20px;
   height: 20px;
   border-radius: 4px;
   top: -1px;
   left: 0px;
   box-shadow: 0 0 0.5px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
   -webkit-transition: all 0.2s ease;
   transition: all 0.2s ease;
   }
   .rad-chk-pin input {
   display: none;
   }
   .rad-chk-pin input:checked + span {
   background: #23AE89;
   }
   .rad-chk-pin input:checked + span:after {
   left: 19px;
   }
   .hide {
   display: none;
   }
   .rad-option-selected {
   box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2), 0 -2px 4px rgba(0, 0, 0, 0.2);
   transform: scale(1.1);
   transition: all 0.2s linear;
   }
   .rad-color-swatch {
   display: table;
   width: 90px;
   height: 25px;
   border-radius: 4px;
   }
   .rad-color-swatch .colors {
   width: 25px;
   height: 25px;
   display: table-cell;
   cursor: pointer;
   }
   .rad-color-swatch .colors input[type="radio"] {
   display: none;
   }
   .rad-color-swatch .colors:first-child {
   border-top-left-radius: 4px;
   border-bottom-left-radius: 4px;
   }
   .rad-color-swatch .colors:last-child {
   border-top-right-radius: 4px;
   border-bottom-right-radius: 4px;
   }
   .rad-sidebar {
   z-index: 9999;
   position: fixed;
   font-weight: 600;
   background: white !important;
   width: 225px;
   height: 100vh;
   top: 50px;
   left: 0;
   bottom: 0;
   box-shadow: 0 0 4px rgba(0, 0, 0, 0.14), 2px 4px 8px rgba(0, 0, 0, 0.28);
   transition: all 0.2s ease-in-out;
   }
   .rad-sidebar li {
   text-align: left;
   height: 45px;
   font-size: 14px;
   font-weight: 500;
   letter-spacing: 0.025em;
   line-height: 1.5;
   }
   .rad-sidebar li a {
   text-decoration: none;
   display: block;
   color: #515d6e;
   }
   .rad-sidebar li a i {
   position: relative;
   width: 45px;
   line-height: 45px;
   text-align: center;
   }
   .rad-sidebar li a i:before {
   z-index: 10;
   position: relative;
   }
   .rad-sidebar li a > span {
   display: inline-block;
   visibility: visible;
   opacity: 1;
   padding-left: 10px;
   -webkit-transition: all 0.2s ease-in-out 0.2s;
   transform: translate3d(0, 0, 0);
   text-transform: uppercase;
   font-size: 11px;
   }
   .rad-sidebar li:hover {
   background: #f2f2f2;
   }
   .rad-sidebar li:hover .icon-bg {
   transform: translate3d(0, 0, 0);
   }
   .rad-sidebar li:hover a > i {
   color: white;
   }
   .icon-bg {
   position: absolute;
   left: 0;
   top: 0;
   bottom: 0;
   z-index: 1;
   width: 100%;
   transform: translate3d(-43px, 0, 0);
   transition: all 0.2s ease-in-out;
   }
   .rad-txt-primary {
   color: #1C7EBB;
   }
   .rad-bg-primary {
   background: #1C7EBB;
   }
   .rad-txt-success {
   color: #23AE89;
   }
   .rad-bg-success {
   background: #23AE89;
   }
   .rad-txt-danger {
   color: #E94B3B;
   }
   .rad-bg-danger {
   background: #E94B3B;
   }
   .rad-txt-warning {
   color: #F98E33;
   }
   .rad-bg-warning {
   background: #F98E33;
   }
   .rad-txt-violet {
   color: #6A55C2;
   }
   .rad-bg-violet {
   background: #6A55C2;
   }
   .rad-logo-container.rad-nav-min {
   transform: translate3d(-180px, 0, 0);
   }
   .rad-logo-container.rad-nav-min .rad-logo {
   opacity: 0;
   }
   .rad-logo-container.rad-nav-min + .rad-logo-hidden {
   opacity: 1;
   visibility: visible;
   }
   .rad-sidebar.rad-nav-min {
   width: 45px !important;
   }
   .rad-sidebar.rad-nav-min .rad-sidebar-item {
   opacity: 0;
   visibility: hidden;
   -webkit-transition: all 0.1s linear;
   transform: translate3d(-200px, 0, 0);
   }
   .rad-sidebar.rad-nav-min .icon-bg {
   transform: translate3d(0, 0, 0);
   }
   .rad-sidebar.rad-nav-min i {
   border: 0px;
   color: white;
   transition: all 0.2s linear;
   }
   .rad-sidebar.rad-nav-min li:hover .icon-bg {
   transform: scale(1.2, 1);
   }
   .rad-body-wrapper {
   position: absolute;
   left: 230px;
   top: 75px;
   width: auto;
   right: 0;
   transition: all 0.2s ease-in-out;
   }
   .rad-body-wrapper.rad-nav-min {
   left: 50px;
   }
   .rad-chart {
   height: 250px;
   }
   .rad-map {
   width: 100%;
   height: 100%;
   }
   .rad-map-container {
   height: 400px;
   position: relative;
   }
   .rad-collapse {
   height: 0px;
   padding: 0;
   opacity: 0;
   overflow: hidden;
   }
   @-webkit-keyframes rotating {
   from {
   -webkit-transform: rotate(0deg);
   }
   to {
   -webkit-transform: rotate(360deg);
   }
   }
   @-webkit-keyframes flipInX {
   0% {
   -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
   -webkit-transition-timing-function: ease-in;
   opacity: 0;
   }
   40% {
   -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
   -webkit-transition-timing-function: ease-in;
   }
   60% {
   -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
   opacity: 1;
   }
   80% {
   -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
   }
   100% {
   -webkit-transform: perspective(400px);
   }
   }
   @media screen and (max-width: 450px) {
   .rad-info-box i {
   opacity: 0.3;
   }
   .flat-theme .rad-toggle-btn {
   right: 20px !important;
   }
   .flat-theme .rad-top-nav-container .links:last-child {
   display: none;
   }
   }
   @media screen and (min-width: 850px) {
   .rad-logo-container {
   height: 75px;
   }
   .rad-logo-container .rad-logo {
   line-height: 75px;
   }
   .rad-logo-container .rad-toggle-btn {
   line-height: 75px;
   height: auto;
   }
   .rad-top-nav-container {
   padding: 10px;
   }
   .rad-sidebar {
   top: 75px;
   }
   .rad-body-wrapper {
   top: 100px;
   }
   .flat-theme .rad-toggle-btn {
   top: 20px !important;
   }
   }
   @media screen and (max-width: 850px) {
   .flat-theme .rad-menu-badge {
   top: -3px;
   }
   .flat-theme .rad-toggle-btn {
   right: 20px !important;
   }
   .flat-theme .rad-body-wrapper {
   top: 125px !important;
   }
   .flat-theme .rad-sidebar {
   position: absolute;
   }
   .flat-theme .rad-navigation {
   position: absolute;
   }
   .flat-theme .rad-navigation .links > li:first-child {
   margin-left: 15px !important;
   }
   .flat-theme.sticky .rad-logo-container {
   z-index: 10000;
   }
   .flat-theme.sticky .rad-logo-container .rad-toggle-btn {
   color: #89949B !important;
   position: fixed;
   right: 120px !important;
   background: #f6f6f6;
   top: 11px;
   }
   .flat-theme.sticky .rad-logo-container .rad-toggle-btn:hover {
   background: crimson;
   color: #fff !important;
   }
   .flat-theme.sticky .rad-navigation {
   height: 50px;
   }
   .flat-theme.sticky .rad-sidebar {
   top: 50px;
   position: fixed;
   }
   .flat-theme.sticky .rad-top-nav-container {
   background: #FFF important;
   box-shadow: 0 0px 9px 4px rgba(0, 0, 0, 0.1), 0 -5px 2px 2px rgba(0, 0, 0, 0.1);
   position: fixed;
   left: 0;
   top: 0;
   width: 100%;
   z-index: 1000;
   }
   .flat-theme.sticky .links {
   margin-left: 50px;
   }
   .flat-theme.sticky .brand-icon {
   margin-left: 0px;
   }
   .flat-theme.sticky .brand-icon:hover {
   color: #fff;
   }
   .rad-navigation {
   height: 100px;
   }
   .rad-logo-container.rad-nav-min {
   transform: translate3d(0, 0, 0);
   background: transparent;
   }
   .rad-logo-container.rad-nav-min .rad-logo {
   opacity: 1;
   }
   .rad-logo-container.rad-nav-min + .rad-logo-hidden {
   display: none;
   }
   .rad-logo-container {
   display: block;
   float: none;
   width: 100%;
   border-bottom: 1px solid #F2F2F2;
   }
   .rad-top-nav-container {
   display: block;
   float: none;
   height: 50px;
   background: white;
   }
   .rad-top-nav-container .links > li > a {
   font-size: 12px;
   }
   .rad-menu-badge {
   font-size: 10px;
   min-width: 15px;
   min-height: 15px;
   line-height: 15px;
   }
   .rad-sidebar {
   top: 100px;
   }
   .rad-sidebar.rad-nav-min {
   transform: translate3d(-200px, 0, 0);
   }
   .rad-body-wrapper {
   top: 125px;
   position: relative;
   }
   .rad-body-wrapper.rad-nav-min {
   left: 0px;
   }
   }
   .panel {
   box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
   border-radius: 0 !important;
   position: relative;
   -webkit-transition: all 0.2s linear;
   }
   .panel-close {
   transform: scale3d(0, 0, 0);
   }
   .panel-body {
   position: relative;
   -webkit-transition: all 0.2s linear;
   }
   .panel-heading {
   background: white !important;
   border-radius: 0;
   padding: 15px;
   border-bottom: 0 !important;
   }
   .panel-heading .panel-title {
   text-transform: uppercase;
   font-weight: 600;
   font-size: 13px;
   color: #515d6e;
   }
   .overlay {
   position: absolute;
   top: 0;
   left: 0;
   right: 0;
   bottom: 0;
   z-index: 1001;
   background: rgba(255, 255, 255, 0.75);
   text-align: center;
   }
   .overlay:before {
   content: "";
   height: 100%;
   vertical-align: middle;
   width: 1px;
   display: inline-block;
   margin-left: -5px;
   }
   .overlay .overlay-content {
   display: inline-block;
   vertical-align: middle;
   }
   .overlay i {
   display: block;
   position: inline-block;
   vertical-align: middle;
   color: black;
   }
   .rad-panel-action {
   list-style: none;
   display: inline-block;
   float: right;
   }
   .rad-panel-action li {
   display: inline-block;
   color: #515d6e;
   margin: 0 5px;
   cursor: pointer;
   }
   .rad-info-box {
   margin-bottom: 16px;
   box-shadow: 1px 1px 2px 0 #CCCCCC;
   padding: 20px;
   box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
   background: white !important;
   }
   .rad-info-box i {
   display: block;
   background-clip: padding-box;
   margin-right: 15px;
   height: 60px;
   width: 60px;
   border-radius: 100%;
   line-height: 60px;
   text-align: center;
   font-size: 4.4em;
   position: absolute;
   }
   .rad-info-box .value, .rad-info-box .heading {
   display: block;
   position: relative;
   color: #515d6e;
   text-align: right;
   z-index: 10;
   }
   .rad-info-box .heading {
   font-size: 1.2em;
   font-weight: 300;
   text-transform: uppercase;
   }
   .rad-info-box .value {
   font-size: 2.1em;
   font-weight: 600;
   margin-top: 5px;
   }
   .rad-list-group-item {
   margin: 5px 10px 25px 5px;
   }
   .rad-list-group-item:after {
   content: "";
   display: table;
   }
   .rad-chat {
   border: 1px solid rgba(198, 198, 198, 0.5);
   padding: 0 10px;
   border-radius: 2px;
   position: relative;
   }
   .rad-chat-body {
   position: relative;
   }
   .rad-list-group-item.left .rad-chat {
   margin-left: 50px;
   }
   .rad-list-group-item.left .rad-chat .sm-text {
   float: right;
   }
   .rad-list-group-item.left .rad-chat:after {
   content: "";
   border-top: 1px solid rgba(198, 198, 198, 0.5);
   border-left: 1px solid rgba(198, 198, 198, 0.5);
   height: 10px;
   width: 10px;
   background: white;
   position: absolute;
   left: -6px;
   top: 10px;
   transform: rotate(-45deg);
   }
   .rad-chat-msg {
   font-size: 14px;
   color: #585f69;
   }
   .rad-list-group-item.right .rad-chat {
   margin-right: 50px;
   }
   .rad-list-group-item.right .rad-chat .lg-text {
   float: right;
   }
   .rad-list-group-item.right .rad-chat:after {
   content: "";
   border-top: 1px solid rgba(198, 198, 198, 0.5);
   border-right: 1px solid rgba(198, 198, 198, 0.5);
   height: 10px;
   width: 10px;
   background: white;
   position: absolute;
   right: -6px;
   top: 10px;
   transform: rotate(45deg);
   }
   .rad-list-icon {
   position: relative;
   height: 40px;
   width: 40px;
   border-radius: 100%;
   line-height: 40px;
   text-align: center;
   color: white;
   top: -5px;
   }
   .icon-shadow {
   box-shadow: 0 0px 3px 1px rgba(0, 0, 0, 0.26);
   }
   .rad-list-img {
   border-radius: 100%;
   width: 32px;
   height: 32px;
   }
   .rad-list-group {
   position: relative;
   }
   .rad-list-group.group:before {
   content: "";
   position: absolute;
   background: rgba(198, 198, 198, 0.3);
   top: -20px;
   bottom: -20px;
   left: 25px;
   width: 1px;
   }
   .rad-list-content {
   line-height: 1.3;
   margin-left: 50px;
   }
   .rad-timeline {
   padding: 10px 0;
   position: relative;
   }
   .rad-timeline:before {
   content: "";
   position: absolute;
   border: 1px solid #c6c6c6;
   left: 50%;
   top: 0;
   height: 100%;
   bottom: 1px;
   box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2);
   }
   .rad-timeline .rad-timeline-item {
   list-style: none;
   padding: 10px;
   position: relative;
   vertical-align: middle;
   margin-bottom: 20px;
   font-size: 14px;
   }
   .rad-timeline .rad-timeline-item .rad-timeline-badge {
   position: absolute;
   left: 50%;
   top: 0;
   margin-left: -15px;
   color: #FFF;
   width: 30px;
   height: 30px;
   font-size: 12px;
   border-radius: 100%;
   text-align: center;
   line-height: 25px;
   box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.2);
   cursor: pointer;
   transition: all 0.2s easein-out;
   border: 2px solid #fff;
   }
   .rad-timeline .rad-timeline-item .rad-timeline-badge span {
   transition: all 200ms linear;
   transform: scale(0);
   opacity: 0;
   position: absolute;
   color: #e6e6e6;
   background: Grey;
   min-width: 70px;
   border-radius: 3px;
   }
   .rad-timeline .rad-timeline-item .rad-timeline-badge span.pull-right {
   right: 35px;
   }
   .rad-timeline .rad-timeline-item .rad-timeline-badge span.pull-left {
   left: 35px;
   }
   .rad-timeline .rad-timeline-item .rad-timeline-badge:hover span {
   opacity: 1;
   transform: scale(1);
   }
   .rad-timeline .rad-timeline-item .rad-timeline-panel {
   position: relative;
   width: 40%;
   background: #FFF;
   padding: 15px;
   top: -20px;
   margin-left: 10px;
   border-radius: 6px;
   border: 1px solid rgba(0, 0, 0, 0.2);
   }
   .rad-timeline .rad-timeline-item .rad-timeline-panel:after {
   content: "";
   width: 15px;
   height: 15px;
   background: #FFF;
   position: absolute;
   top: 30px;
   right: -8.5px;
   margin-top: -10px;
   transform: rotate(135deg);
   border-top: 1px solid rgba(0, 0, 0, 0.2);
   border-left: 1px solid rgba(0, 0, 0, 0.2);
   }
   .rad-timeline .rad-timeline-item:before {
   content: "";
   display: table;
   }
   .rad-timeline .rad-timeline-item:after {
   content: "";
   clear: both;
   display: block;
   overflow: hidden;
   }
   .rad-timeline .rad-timeline-item:first-child {
   margin-top: 20px;
   }
   .rad-timeline .rad-timeline-item .pull-right.rad-timeline-panel {
   background: #e6e6e6;
   margin-right: 10px;
   }
   .rad-timeline .rad-timeline-item .pull-right.rad-timeline-panel:after {
   content: "";
   left: -8.5px;
   transform: rotate(-45deg);
   background: #e6e6e6;
   }
   .rad-timeline-footer p {
   display: inline-block;
   font-weight: 600;
   color: #515d6e;
   }
   .rad-timeline-footer p i {
   font-size: 24px;
   color: crimson;
   }
   .rad-chart .morris-hover {
   display: none !important;
   }
   .rad-chart:hover .morris-hover {
   display: block !important;
   }
   .fa-spin {
   -webkit-animation: fa-spin 0.5s infinite linear;
   animation: fa-spin 0.5s infinite linear;
   }
   .brand-icon {
   font-size: 22px;
   height: 50px;
   display: inline-block;
   float: left;
   width: 50px;
   background-color: crimson;
   text-align: center;
   line-height: 50px;
   color: white;
   font-weight: 700;
   transition: all 0.2s linear;
   margin-left: -230px;
   display: none;
   }
   .flat-theme body {
   background: #f1f2f7;
   }
   .flat-theme .brand-icon {
   display: inline-block;
   }
   .flat-theme .rad-logo {
   color: white;
   }
   .flat-theme .rad-navigation {
   text-align: left;
   }
   .flat-theme .rad-navigation .rad-top-nav-container {
   float: none !important;
   }
   .flat-theme .rad-navigation .rad-top-nav-container .links:last-child {
   float: none !important;
   }
   .flat-theme .rad-navigation .rad-top-nav-container .links:last-child > li > ul.rad-dropmenu-item {
   left: 0;
   }
   .flat-theme .rad-navigation .rad-top-nav-container .links:last-child > li > ul.rad-dropmenu-item:before {
   left: 8px;
   right: 100%;
   }
   .flat-theme .rad-navigation .rad-top-nav-container .links:last-child > li:first-child {
   margin-left: 30px;
   }
   .flat-theme .rad-navigation .rad-top-nav-container .links > li {
   text-align: center;
   }
   .flat-theme .rad-navigation .rad-top-nav-container .links > li > a {
   border-radius: 50%;
   width: 32px;
   height: 32px;
   background: #f6f6f6;
   display: inline-block;
   line-height: 32px;
   }
   .flat-theme .rad-navigation .rad-top-nav-container .links > li:hover > a {
   color: white !important;
   }
   .flat-theme .rad-dropmenu-item {
   border-color: crimson !important;
   }
   .flat-theme .rad-dropmenu-item:before {
   border-color: crimson transparent;
   }
   .flat-theme .rad-logo-container.rad-nav-min {
   transform: none;
   }
   .flat-theme .rad-logo-container.rad-nav-min .rad-logo {
   opacity: 1;
   }
   .flat-theme .rad-logo-container.rad-nav-min + .rad-logo-hidden {
   opacity: 0;
   }
   .flat-theme .rad-logo-container {
   background: crimson !important;
   position: relative;
   z-index: 1000;
   }
   .flat-theme .rad-logo-container .rad-toggle-btn {
   color: #fff !important;
   font-size: 14px;
   width: 30px;
   height: 30px;
   display: inline-block;
   position: absolute;
   line-height: 30px;
   text-align: center;
   padding: 0;
   border-radius: 50%;
   right: -15px;
   background: red;
   top: 7.5px;
   transition: all 0.2s linear;
   }
   .flat-theme .rad-sidebar {
   background: #32323a !important;
   }
   .flat-theme .rad-sidebar li {
   border-bottom: 1px solid rgba(255, 255, 255, 0.05);
   }
   .flat-theme .rad-sidebar li:hover {
   background: #28282a !important;
   }
   .flat-theme .rad-sidebar li:hover span {
   color: crimson !important;
   }
   .flat-theme .rad-sidebar li a i {
   color: white;
   }
   .flat-theme .rad-sidebar li a > span {
   color: #aeb2b7 !important;
   -webkit-transition: none;
   }
   .flat-theme .rad-info-box {
   box-shadow: none !important;
   border-radius: 4px;
   }
   .flat-theme .panel {
   box-shadow: none !important;
   border-radius: 4px !important;
   border: none !important;
   }
   .flat-theme .panel .panel-heading {
   background: #fafafa !important;
   border-top-left-radius: 4px;
   border-top-right-radius: 4px;
   }
   .flat-theme .panel .panel-body {
   border-bottom-left-radius: 4px;
   border-bottom-right-radius: 4px;
   }
   .flat-theme .panel-default {
   border-color: none;
   }
   .rad-bg-crimson {
   background: crimson;
   }
   .flat-theme.crimson .rad-logo-container {
   background: crimson !important;
   }
   .flat-theme.crimson .rad-toggle-btn {
   background: #ad102f !important;
   }
   .flat-theme.crimson .rad-dropmenu-footer, .flat-theme.crimson .rad-dropmenu-header {
   background: #ad102f !important;
   }
   .flat-theme.crimson .links > li:not(.no-color):hover > a {
   background: #eb1f48 !important;
   }
   .flat-theme.crimson .rad-dropmenu-item {
   border-color: #ad102f !important;
   }
   .flat-theme.crimson .rad-dropmenu-item:before {
   border-color: #ad102f transparent;
   }
   .flat-theme.crimson .rad-sidebar li:hover a > span {
   color: crimson !important;
   }
   @media screen and (max-width: 850px) {
   .flat-theme.crimson.sticky .rad-toggle-btn {
   background: #fafafa !important;
   color: #89949B !important;
   }
   }
   .flat-theme.crimson.sticky .brand-icon, .flat-theme.crimson.sticky .rad-toggle-btn:hover {
   background: crimson !important;
   color: #fff !important;
   }
   .rad-bg-teal {
   background: #1fb5ad;
   }
   .flat-theme.teal .rad-logo-container {
   background: #1fb5ad !important;
   }
   .flat-theme.teal .rad-toggle-btn {
   background: #188983 !important;
   }
   .flat-theme.teal .rad-dropmenu-footer, .flat-theme.teal .rad-dropmenu-header {
   background: #188983 !important;
   }
   .flat-theme.teal .links > li:not(.no-color):hover > a {
   background: #23cbc2 !important;
   }
   .flat-theme.teal .rad-dropmenu-item {
   border-color: #188983 !important;
   }
   .flat-theme.teal .rad-dropmenu-item:before {
   border-color: #188983 transparent;
   }
   .flat-theme.teal .rad-sidebar li:hover a > span {
   color: #1fb5ad !important;
   }
   @media screen and (max-width: 850px) {
   .flat-theme.teal.sticky .rad-toggle-btn {
   background: #fafafa !important;
   color: #89949B !important;
   }
   }
   .flat-theme.teal.sticky .brand-icon, .flat-theme.teal.sticky .rad-toggle-btn:hover {
   background: #1fb5ad !important;
   color: #fff !important;
   }
   .rad-bg-orange {
   background: #ff503f;
   }
   .flat-theme.orange .rad-logo-container {
   background: #ff503f !important;
   }
   .flat-theme.orange .rad-toggle-btn {
   background: #ff220c !important;
   }
   .flat-theme.orange .rad-dropmenu-footer, .flat-theme.orange .rad-dropmenu-header {
   background: #ff220c !important;
   }
   .flat-theme.orange .links > li:not(.no-color):hover > a {
   background: #ff6759 !important;
   }
   .flat-theme.orange .rad-dropmenu-item {
   border-color: #ff220c !important;
   }
   .flat-theme.orange .rad-dropmenu-item:before {
   border-color: #ff220c transparent;
   }
   .flat-theme.orange .rad-sidebar li:hover a > span {
   color: #ff503f !important;
   }
   @media screen and (max-width: 850px) {
   .flat-theme.orange.sticky .rad-toggle-btn {
   background: #fafafa !important;
   color: #89949B !important;
   }
   }
   .flat-theme.orange.sticky .brand-icon, .flat-theme.orange.sticky .rad-toggle-btn:hover {
   background: #ff503f !important;
   color: #fff !important;
   }
   .rad-bg-purple {
   background: rebeccapurple;
   }
   .flat-theme.purple .rad-logo-container {
   background: rebeccapurple !important;
   }
   .flat-theme.purple .rad-toggle-btn {
   background: #4d2673 !important;
   }
   .flat-theme.purple .rad-dropmenu-footer, .flat-theme.purple .rad-dropmenu-header {
   background: #4d2673 !important;
   }
   .flat-theme.purple .links > li:not(.no-color):hover > a {
   background: #7339ac !important;
   }
   .flat-theme.purple .rad-dropmenu-item {
   border-color: #4d2673 !important;
   }
   .flat-theme.purple .rad-dropmenu-item:before {
   border-color: #4d2673 transparent;
   }
   .flat-theme.purple .rad-sidebar li:hover a > span {
   color: rebeccapurple !important;
   }
   @media screen and (max-width: 850px) {
   .flat-theme.purple.sticky .rad-toggle-btn {
   background: #fafafa !important;
   color: #89949B !important;
   }
   }
   .flat-theme.purple.sticky .brand-icon, .flat-theme.purple.sticky .rad-toggle-btn:hover {
   background: rebeccapurple !important;
   color: #fff !important;
   }
   .rad-bg-twitter {
   background: #55acee;
   }
   .flat-theme.twitter .rad-logo-container {
   background: #55acee !important;
   }
   .flat-theme.twitter .rad-toggle-btn {
   background: #2795e9 !important;
   }
   .flat-theme.twitter .rad-dropmenu-footer, .flat-theme.twitter .rad-dropmenu-header {
   background: #2795e9 !important;
   }
   .flat-theme.twitter .links > li:not(.no-color):hover > a {
   background: #6cb7f0 !important;
   }
   .flat-theme.twitter .rad-dropmenu-item {
   border-color: #2795e9 !important;
   }
   .flat-theme.twitter .rad-dropmenu-item:before {
   border-color: #2795e9 transparent;
   }
   .flat-theme.twitter .rad-sidebar li:hover a > span {
   color: #55acee !important;
   }
   @media screen and (max-width: 850px) {
   .flat-theme.twitter.sticky .rad-toggle-btn {
   background: #fafafa !important;
   color: #89949B !important;
   }
   }
   .flat-theme.twitter.sticky .brand-icon, .flat-theme.twitter.sticky .rad-toggle-btn:hover {
   background: #55acee !important;
   color: #fff !important;
   }
   .form-control-feedback {
   pointer-events: auto;
   }
   .set-width-tooltip + .tooltip > .tooltip-inner { 
   min-width:180px;
   }
   .msk-fade {  
   -webkit-animation-name: animatetop;
   -webkit-animation-duration: 0.5s;
   animation-name: animatetop;
   animation-duration: 0.5s;
   }
   .modal-content1 {
   height: auto;
   min-height: 100%;
   border-radius: 0;
   position: absolute;
   left: 25%; 
   }
   /* Add Animation */
   @-webkit-keyframes animatetop {
   from {top:-300px; opacity:0} 
   to {top:0; opacity:1}
   }
   @keyframes animatetop {
   from {top:-300px; opacity:0}
   to {top:0; opacity:1}
   }
   .cal-table{
   width:100%;
   padding:0;
   margin:0;	
   }
   #calendar_dates{
   padding:10px;
   margin-left:10px;
   width:95%;	
   }
   .tHead{
   height:40px;
   background-color:#8e1c82;
   color:#FFF;
   text-align:center;
   border:1px solid #FFF;
   width:70px;
   }
   .cal-tr{
   height:50px;
   }
   .td_no_number{
   border:1px solid white;
   width:70px;
   background-color:#979045;
   padding:0;
   }
   .cal-number-td{
   border:1px solid white;
   width:70px;
   background-color:#677be2 ;
   color:white;
   }
   .h5{
   color:#FFF;
   display: inline-block;
   background:#636;
   width:15px;
   height:15px;	
   font-size:11px;
   font-weight:bold;
   font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
   text-align:center;
   float:right;
   padding-top:1px;
   margin-bottom:50%;
   }
   .div-event-c{
   margin-top:65%;
   height:17px;
   }
   #cal_month{
   width:20%;
   border-radius:5%;
   padding:0;
   }
   #cal_year{
   width:15%;
   border-radius:5%;
   margin-left:5px;
   padding:0;
   }
   #btnShow{
   margin-left:5px;
   }
   @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@100;200;300;400;500;600;700&display=swap');
   :root {
   --calendar-bg-color: #262829;
   --calendar-font-color: #FFF;
   --weekdays-border-bottom-color: #404040;
   --calendar-date-hover-color: #505050;
   --calendar-current-date-color: #1b1f21;
   --calendar-today-color: linear-gradient(to bottom, #03a9f4, #2196f3);
   --calendar-today-innerborder-color: transparent;
   --calendar-nextprev-bg-color: transparent;
   --next-prev-arrow-color : #000;
   --calendar-border-radius: 16px;
   --calendar-prevnext-date-color: #484848
   }
   * {
   padding: 0;
   margin: 0;
   }
   .calendar {
   font-family: 'IBM Plex Sans', sans-serif;
   position: relative;
   max-width: 400px; /*change as per your design need */
   min-width: 320px;
   background: #ffffff;
   color: #000;
   margin: 20px auto;
   box-sizing: border-box;
   overflow: hidden;
   font-weight: normal;
   border-radius: var(--calendar-border-radius);
   border-color: #828789;
   border: 1px solid;
   }
   .calendar-inner {
   padding: 10px 10px;
   }
   .calendar .calendar-inner .calendar-body {
   display: grid;
   grid-template-columns: repeat(7, 1fr);
   text-align: center;
   }
   .calendar .calendar-inner .calendar-body div {
   padding: 4px;
   min-height: 30px;
   line-height: 30px;
   border: 1px solid transparent;
   margin: 10px 2px 0px;
   }
   .calendar .calendar-inner .calendar-body div:nth-child(-n+7) {
   border: 1px solid transparent;
   border-bottom: 1px solid var(--weekdays-border-bottom-color);
   }
   .calendar .calendar-inner .calendar-body div:nth-child(-n+7):hover {
   border: 1px solid transparent;
   border-bottom: 1px solid var(--weekdays-border-bottom-color);
   }
   .calendar .calendar-inner .calendar-body div>a {
   color: black;
   text-decoration: none;
   display: flex;
   justify-content: center;
   }
   .calendar .calendar-inner .calendar-body div:hover {
   border: 1px solid var(--calendar-date-hover-color);
   border-radius: 4px;
   }
   .calendar .calendar-inner .calendar-body div.empty-dates:hover {
   border: 1px solid transparent;
   }
   .calendar .calendar-inner .calendar-controls {
   display: grid;
   grid-template-columns: repeat(3, 1fr);
   }
   .calendar .calendar-inner .calendar-today-date {
   display: grid;
   text-align: center;
   cursor: pointer;
   margin: 3px 0px;
   background: #828789;
   padding: 8px 0px;
   border-radius: 10px;
   width: 80%;
   margin: auto;
   color: white;
   }
   .calendar .calendar-inner .calendar-controls .calendar-year-month {
   display: flex;
   min-width: 100px;
   justify-content: space-evenly;
   align-items: center;
   }
   .calendar .calendar-inner .calendar-controls .calendar-next {
   text-align: right;
   }
   .calendar .calendar-inner .calendar-controls .calendar-year-month .calendar-year-label,
   .calendar .calendar-inner .calendar-controls .calendar-year-month .calendar-month-label {
   font-weight: 500;
   font-size: 20px;
   }
   .calendar .calendar-inner .calendar-body .calendar-today {
   background: var(--calendar-today-color);
   border-radius: 4px;
   }
   .calendar .calendar-inner .calendar-body .calendar-today:hover {
   border: 1px solid transparent;
   }
   .calendar .calendar-inner .calendar-body .calendar-today a {
   outline: 2px solid var(--calendar-today-innerborder-color);
   }
   .calendar .calendar-inner .calendar-controls .calendar-next a,
   .calendar .calendar-inner .calendar-controls .calendar-prev a {
   color: var(--calendar-font-color);
   font-family: arial, consolas, sans-serif;
   font-size: 26px;
   text-decoration: none;
   padding: 4px 12px;
   display: inline-block;
   background: var(--calendar-nextprev-bg-color);
   margin: 10px 0 10px 0;
   }
   .calendar .calendar-inner .calendar-controls .calendar-next a svg,
   .calendar .calendar-inner .calendar-controls .calendar-prev a svg {
   height: 20px;
   width: 20px;
   }
   .calendar .calendar-inner .calendar-controls .calendar-next a svg path,
   .calendar .calendar-inner .calendar-controls .calendar-prev a svg path{
   fill: var(--next-prev-arrow-color);
   }
   .calendar .calendar-inner .calendar-body .prev-dates,
   .calendar .calendar-inner .calendar-body .next-dates {
   color: var(--calendar-prevnext-date-color);
   }
   .calendar .calendar-inner .calendar-body .prev-dates:hover,
   .calendar .calendar-inner .calendar-body .next-dates:hover {
   border: 1px solid transparent;
   pointer-events: none;
   }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header)-->
   <section class="content-header">
      <h1>
         Dashboard
         <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Dashboard</a></li>
      </ol>
   </section>
   <?php
      include_once('../controller/config.php');
      
      $my_index= $_SESSION["index_number"];
      
      $sql="SELECT * FROM student WHERE index_number='$my_index'";
      $result=mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($result);
      $name=$row['i_name'];
      
      ?>    
   <!-- Main content -->
   <section class="content">
   <!-- Info boxes -->
   <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
         <div class="rad-info-box rad-txt-success">
            <i class="ion ion-ios-people"></i>
            <span class="heading">Total Student</span>
            <?php
               include_once('../controller/config.php');
               
               $sql1="SELECT count(id) FROM student WHERE _status=''";
               $total_count1=0;
               
               $result1=mysqli_query($conn,$sql1);
               $row1=mysqli_fetch_assoc($result1);
               $total_count1=$row1['count(id)'];
               ?>
            <span class="value"><span><?php echo $total_count1; ?></span></span>
         </div>
         <!-- <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
            <div class="info-box-content">
               <span class="info-box-text">Total Student</span>
               <?php
               // include_once('../controller/config.php');
               
               // $sql1="SELECT count(id) FROM student WHERE _status=''";
               // $total_count1=0;
               
               // $result1=mysqli_query($conn,$sql1);
               // $row1=mysqli_fetch_assoc($result1);
               // $total_count1=$row1['count(id)'];
               
               ?>               
               <span class="info-box-number"><?php // echo $total_count1; ?></span>
            </div> -->
         <!-- /.info-box-content -->
         <!--</div> -->
         <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-6 col-sm-6 col-xs-12">
         <div class="rad-info-box rad-txt-primary">
            <i class="ion ion-ios-people"></i>
            <span class="heading">Total Teacher</span>
            <?php
               include_once('../controller/config.php');
               
               $sql2="SELECT count(id) FROM teacher";
               $total_count2=0;
               
               $result2=mysqli_query($conn,$sql2);
               $row2=mysqli_fetch_assoc($result2);
               $total_count2=$row2['count(id)'];
                  
               ?>
            <span class="value"><span><?php echo $total_count2; ?></span></span>
         </div>
         <!-- <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>
            <div class="info-box-content">
<<<<<<< Updated upstream
            	<span class="info-box-text">Total Teacher</span>
<?php
include_once('../controller/config.php');

$sql2="SELECT count(id) FROM teacher";
$total_count2=0;

$result2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_assoc($result2);
$total_count2=$row2['count(id)'];

?> 
              	<span class="info-box-number"><?php echo $total_count2; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

      </div>
      <!-- /.row -->
     <h5><?php echo $name; ?>,<strong><span style="color:#cf4ed4;"> Welcome back! </span></strong></h5>
     
     <div class="row" id="table1"><!--MSK-000132-1-->    
        	<div class="col-md-8">
           		<center><h4 class="box-title">Monthly Attendance</h4></center>
                <canvas id="barChart" width="800" height="438"></canvas>
  			</div>

<script>

function showBarChart(monthly_attendance){	
 
	var monthly_attendance1 = JSON.parse("[" + monthly_attendance + "]");

	new Chart(document.getElementById("barChart"), {
		type: 'bar',
		data: {
			
		   labels: ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"],
		  datasets: [
			{
			  label: "Monthly Attendants",
			  backgroundColor: ["#e80a68", "#d74340","#8e3d87","#40b9d7","#26ab8d","#7e5c3e", "#3e447e","#638e3d","#766677","#f35df8","#e49e23","#f68b98"],
			  data: monthly_attendance1
				//data: [12, 19, 3, 5, 10, 3,12, 19, 10, 5, 10, 15],
			}
		  ]
		},
		options: {
		  legend: { display: false },
		  title: {
			display: true,
			text: ''
		  },
		  scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});

};
</script>

<?php
include_once('../controller/config.php');
$current_year=date("Y");
$prefix="";
$monthly_attendance="";

$month=array("January","February","March","April","May","June","July","August","September","October","November","December");

for($i=0; $i<count($month); $i++){
	$sql="SELECT COUNT(id) FROM student_attendance WHERE year='$current_year' AND month='$month[$i]' AND index_number='$my_index' AND _status1='intime'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
	$monthly_attendance.=$prefix.'"'.$row['COUNT(id)'].'"';
	$prefix=',';
	
}

echo "<script>showBarChart('$monthly_attendance');</script>";

?>            
          
        	<div class="col-md-4">
                <div id="calendar-container">
                	<div id="calendar-header">
                    	<center><h4><span id="calendar_month_year"></span> <?php echo $current_year; ?> </h4></center>
        			</div>
                    <input type="hidden" id="my_index" value="<?php echo $my_index; ?>">  
                    <input type="hidden" id="my_type" value="<?php echo $my_type; ?>">                         
                 </div>
                 <div class="row1" id="row">
                        
                 </div>
       		</div>
        </div>  
	
    <div id="cEvent">
    
    </div>  
    
<script>

var m2 = 0;

function ShowEvents(status,my_index,my_type){
	
	var d = new Date();    //new Date('2017','08','25');
	var month_name = ['January','February','March','April','May','June','July','August','September','Octomber','November','December'];	
		
	var m1 = d.getMonth(); //0-11
	var y1 = d.getFullYear(); //2017
	
	var current_date = d.getDate();
		
	if(status == 'K'){
		var m3 = m1;
	}
		
	if(status == 'N'){
		m2++;
		var m3 = m1 + m2;
	}
				
	if(status == 'P'){
		m2--;
		var m3 = m1 + m2;
	}
				
	if(m3 == 0){
		$('#btn1').css('pointer-events', 'none');
	}
				
	if(m3 == 11){
		$('#btn2').css('pointer-events', 'none');
	}
		
	var xhttp = new XMLHttpRequest();//MSK-00105-Ajax Start  
		xhttp.onreadystatechange = function() {
				
			if (this.readyState == 4 && this.status == 200){
					//MSK-00107 
				document.getElementById('row').innerHTML = this.responseText;//MSK-000132
				
				var start_date = $('#start_date').val().split(',');
				var end_date = $('#end_date').val().split(',');
				var color = $('#color').val().split(',');
				var event_id = $('#event_id').val().split(',');
			
				var month = m3; //0-11
				var year = y1; //2017 
				var first_date = month_name[month] + " " + 1 + " " + year;
				
				var tmp = new Date(first_date).toDateString();
				// Tue Aug 01 2017...
				
				var first_day = tmp.substring(0,3); //Thu
				var day_name = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
				var day_no = day_name.indexOf(first_day);  //4
				var days = new Date(year, month+1, 0).getDate(); //31
				// Thu Aug 31 2017...
				
				var calendar = get_calendar(day_no,days);
				
				document.getElementById("calendar_month_year").innerHTML = month_name[month];
				document.getElementById("calendar_dates").appendChild(calendar);
				$("#td_"+current_date).css("background-color", "#319a5b ");
				var count1 = start_date.length;
				var k=0;
				for(var i=0; i<count1; i++){
					var s_date = parseInt(start_date[i], 10);
					var e_date = parseInt(end_date[i], 10);
					
					var count = e_date - s_date;
				
					for(var j=0; j<=count; j++){
					
						k = s_date+j;
						
						$("#td_"+k).append('<div class="div-event-c" style="background-color:'+color[i]+'"><a id="event_"+'+[i]+' style="color:white;" href="#" onclick="showEvent('+event_id[i]+')"><i class="fa fa-calendar" aria-hidden="true"></i></a></div>');
													
					}
					
					
				}

			}
				
		};	
		
		xhttp.open("GET", "all_events1.php?year=" + y1 + "&month="+m3 + "&my_type="+my_type + "&my_index="+my_index , true);	
		xhttp.send();//MSK-00105-Ajax End
		
						
};

</script>

	<div id="showEvent">
    
    </div>
    
<script>

function showEvent(event_id){
	
	var xhttp = new XMLHttpRequest();//MSK-00105-Ajax Start  
		xhttp.onreadystatechange = function() {
				
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById('showEvent').innerHTML = this.responseText;//MSK-000132
				$('#modalviewEvent').modal('show');
			}
				
		};	
		
		xhttp.open("GET", "show_events1.php?event_id="+event_id , true);												
		xhttp.send();//MSK-00105-Ajax End
};

function get_calendar(day_no,days){
	
	var table = document.createElement('table');
	var tr = document.createElement('tr');
	
	table.className = 'cal-table';
	
	// row for the day letters
	for(var c=0; c<=6; c++){
		var th = document.createElement('th');
		th.innerHTML =  ['S','M','T','W','T','F','S'][c];
		tr.appendChild(th);
		th.className = "tHead";
		
		
	}
	
	table.appendChild(tr);
	
	//create 2nd row
	
	tr = document.createElement('tr');
	
	var c;
	for(c=0; c<=6; c++){
		
		if(c== day_no){
			break;
		}
		var td = document.createElement('td');
		td.innerHTML = "";
		tr.appendChild(td);
		td.className = "td_no_number";
		tr.className = 'cal-tr';
	}
	
	var count = 1;
	for(; c<=6; c++){
		var td = document.createElement('td');
		td.id = "td_"+count;
		td.className = 'cal-number-td';
		tr.appendChild(td);
		tr.className = 'cal-tr';
		
		var h5 = document.createElement('h5');
		h5.className = 'h5';
		td.appendChild(h5);
		h5.innerHTML = count;
		count++;
		
		
	}
	table.appendChild(tr);
	
	//rest of the date rows
	
	for(var r=3; r<=7; r++){
		tr = document.createElement('tr');
		for(var c=0; c<=6; c++){
			
			if(count > days){
				for(; c<=6; c++){
		
					var td = document.createElement('td');
					td.innerHTML = "";
					tr.appendChild(td);
					td.className = "td_no_number";
					tr.className = 'cal-tr';
				}
				table.appendChild(tr);
				return table;
			}
			
			var td = document.createElement('td');
			//td.innerHTML = count;
			td.id = "td_"+count;
			//td.style.padding = 0;
			td.className = 'cal-number-td';
			
			tr.appendChild(td);
			
			var h5 = document.createElement('h5');
			h5.className = 'h5';
			td.appendChild(h5);
			h5.innerHTML = count;
			count++;
			tr.className = 'cal-tr';
			
		}
		table.appendChild(tr);
		
		
	}
	
	
	
};	
</script>
    

<?php 

$my_index=$_SESSION['index_number'];
$my_type=$_SESSION['type'];

echo '<script>','ShowEvents("K",'.$my_index.',"'.$my_type.'");','</script>';

?>
<br>

       <div class="row" >
            <div class="col-md-9" ><!-- left column -->
                <center><h4>My Exam Marks</h4></center>
                <canvas id="lineChart" width="800" height="450"></canvas>
             </div>  
         </div>

<script>
                    
function showLineChart(subject,term1,term2,term3){	

	var subject1 = JSON.parse("[" + subject + "]");
	var terms1 = JSON.parse("[" + term1 + "]");
	var terms2 = JSON.parse("[" + term2 + "]");
	var terms3 = JSON.parse("[" + term3 + "]");

	new Chart(document.getElementById("lineChart"), {
		type: 'line',
		data: {
		  //labels: ["January", "February", "March"],
		  labels: subject1,
		  datasets: [
			{
			  label: "Term 1",
			  borderColor: "#00c0ef",
			  fill: false,
			  data: terms1
			 
			}, {
			  label: "Term 2",
			  borderColor: "#ec00ef",
			  fill: false,
			  data: terms2
			 
			}, {
			  label: "Term 3",
			  borderColor: "#17ef00",
			  fill: false,
			  data: terms3
			 
			}
		  ]
		},
		options: {
		  legend: { display: false },
		  title: {
			display: true,
			text: ''
		  },
		  scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});

};

</script>

<?php
include_once('../controller/config.php');
$index=$_SESSION["index_number"];
$year=date("Y");
        
$prefix="";

$subject='';
$marks='';
$mark_range='';
$mark_grade='';

 $term2="";

 
 $prefix1="";
 $prefix2="";
 $prefix3="";
 
 $terms1="";
 $terms2="";
 $terms3="";   
 $g=0; 

$sql="SELECT * FROM exam";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
while($row=mysqli_fetch_assoc($result)){
	$id=$row['id'];
	
	$sql1="select subject.name as s_name,student_exam.marks as e_marks
	       from student_exam 
		   inner join subject
		   on student_exam.subject_id=subject.id
		   where student_exam.exam_id='$id' and student_exam.index_number='$index' and year='$year'";
	
	$result1=mysqli_query($conn,$sql1);
	
	$fail=false;
	while($row1=mysqli_fetch_assoc($result1)){
		
		$term2.=$prefix1.'"'.$row1['e_marks'].'"';
		$prefix1=',';
			
		$subject.=$prefix2.'"'.$row1['s_name'].'"';
		$prefix2=',';
			
		$g++;
		
		$fail=true;
	}
		   
	$term2.="k";
	$subject.="k";
	
}

	$o=$term2;
	$o=explode("k",$term2);
	$p=explode("k",$subject);
	
	$terms1=$o[0];
	$terms2=$o[1];
	$terms2 = substr($terms2, 1);
	$terms3=$o[2]; 
	$terms3 = substr($terms3, 1);
	$subject=$p[0];
	
}
echo "<script>showLineChart('$subject','$terms1','$terms2','$terms3');</script>";

?>
		<div class="row" id="table1"><!--MSK-000132-1-->
        	<div class="col-md-12">
            	<center><h4 class="box-title">My Timetable</h4></center>
                <div class="box">
                    <div class="box-body table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead style="color:white; background-color:#666;">
                                <th class="col-md-1">Time</th>
                                <th class="col-md-1">Sunday</th>
                                <th class="col-md-1">Monday</th>
                                <th class="col-md-1">Tuesday</th>
                                <th class="col-md-1">Wednesday</th>
                                <th class="col-md-1">Thursday</th>
                                <th class="col-md-1">Friday</th>
                                <th class="col-md-1">Saturday</th>
                             </thead>
                             <tbody>
                                
<?php
include_once('../controller/config.php');
            
$index=$_SESSION["index_number"];
$current_year=date('Y');
=======
               <span class="info-box-text">Total Teacher</span>
               <?php
               // include_once('../controller/config.php');
               
               // $sql2="SELECT count(id) FROM teacher";
               // $total_count2=0;
               
               // $result2=mysqli_query($conn,$sql2);
               // $row2=mysqli_fetch_assoc($result2);
               // $total_count2=$row2['count(id)'];
               
               ?> 
               <span class="info-box-number"><?php // echo $total_count2; ?></span>
            </div> -->
         <!-- /.info-box-content -->
         <!-- </div> -->
         <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <!-- fix for small devices only -->
      <!-- <div class="clearfix visible-sm-block"></div> -->
      <!-- <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
            <div class="info-box-content">
               <span class="info-box-text">Monthly Fee</span>
               <?php
            // include_once('../controller/config.php');
            // $my_index= $_SESSION["index_number"];
            // $current_year=date('Y'); 
            // $current_month=date('F'); 
            // $monthly_fee=0;
>>>>>>> Stashed changes
            
            // $sql="select subject_routing.fee as s_fee 
            //       from student_subject
            // 	  inner join subject_routing
            // 	  on student_subject.sr_id=subject_routing.id 
            //       where student_subject.index_number='$my_index' and year='$current_year'";
            
            // $result=mysqli_query($conn,$sql);
                
            // if(mysqli_num_rows($result) > 0){
            //     while($row=mysqli_fetch_assoc($result)){
                    
            // 		$monthly_fee+=$row['s_fee'];
            // 		$monthly_fee = number_format($monthly_fee, 2, '.', '');
            // 	}
            	
            // }
            
            ?>  
               <span class="info-box-number"><small>$</small><?php // echo $monthly_fee ?></span>
            </div> -->
      <!-- /.info-box-content -->
      <!-- </div> -->
      <!-- /.info-box -->
      <!-- </div> -->
      <!-- /.col -->
      <!-- <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
            <div class="info-box-content">
               <span class="info-box-text">Total Paid</span>
               <?php
            // include_once('../controller/config.php');
            
            // $sql3="SELECT SUM(paid) FROM student_payment WHERE index_number='$my_index'";
            // $total_paid=0;
            
            // $result3=mysqli_query($conn,$sql3);
            // $row3=mysqli_fetch_assoc($result3);
            // $total_paid=$row3['SUM(paid)'];
            
            ?>              
               <span class="info-box-number"><small>$</small><?php // echo $total_paid; ?></span>
            </div> -->
      <!-- /.info-box-content -->
      <!-- </div> -->
      <!-- /.info-box -->
      <!-- </div> -->
      <!-- /.col -->
   </div>
   <!-- /.row -->
   <!-- <h5><?php echo $name; ?>,<strong><span style="color:#cf4ed4;"> Welcome back! </span></strong></h5> -->
   <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
         <div class="panel panel-default">
            <div class="panel-heading">
               <h3 class="panel-title">Attendance Chart</h3>
            </div>
            <div class="panel-body">
               <div id="attendanceChart" class="rad-chart"></div>
            </div>
         </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
         <div class="calendar"></div>
      </div>
   
   </div>
   <div id="cEvent">
   </div>
   <script>
      //check the console for date click event
      //Fixed day highlight
      //Added previous month and next month view
      
      function CalendarControl() {
         const calendar = new Date();
         const calendarControl = {
           localDate: new Date(),
           prevMonthLastDate: null,
           calWeekDays: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
           calMonthName: [
             "Jan",
             "Feb",
             "Mar",
             "Apr",
             "May",
             "Jun",
             "Jul",
             "Aug",
             "Sep",
             "Oct",
             "Nov",
             "Dec"
           ],
           daysInMonth: function (month, year) {
             return new Date(year, month, 0).getDate();
           },
           firstDay: function () {
             return new Date(calendar.getFullYear(), calendar.getMonth(), 1);
           },
           lastDay: function () {
             return new Date(calendar.getFullYear(), calendar.getMonth() + 1, 0);
           },
           firstDayNumber: function () {
             return calendarControl.firstDay().getDay() + 1;
           },
           lastDayNumber: function () {
             return calendarControl.lastDay().getDay() + 1;
           },
           getPreviousMonthLastDate: function () {
             let lastDate = new Date(
               calendar.getFullYear(),
               calendar.getMonth(),
               0
             ).getDate();
             return lastDate;
           },
           navigateToPreviousMonth: function () {
             calendar.setMonth(calendar.getMonth() - 1);
             calendarControl.attachEventsOnNextPrev();
           },
           navigateToNextMonth: function () {
             calendar.setMonth(calendar.getMonth() + 1);
             calendarControl.attachEventsOnNextPrev();
           },
           navigateToCurrentMonth: function () {
             let currentMonth = calendarControl.localDate.getMonth();
             let currentYear = calendarControl.localDate.getFullYear();
             calendar.setMonth(currentMonth);
             calendar.setYear(currentYear);
             calendarControl.attachEventsOnNextPrev();
           },
           displayYear: function () {
             let yearLabel = document.querySelector(".calendar .calendar-year-label");
             yearLabel.innerHTML = calendar.getFullYear();
           },
           displayMonth: function () {
             let monthLabel = document.querySelector(
               ".calendar .calendar-month-label"
             );
             monthLabel.innerHTML = calendarControl.calMonthName[calendar.getMonth()];
           },
           selectDate: function (e) {
             console.log(
               `${e.target.textContent} ${
                 calendarControl.calMonthName[calendar.getMonth()]
               } ${calendar.getFullYear()}`
             );
           },
           plotSelectors: function () {
             document.querySelector(
               ".calendar"
             ).innerHTML += `<div class="calendar-inner"><div class="calendar-controls">
               <div class="calendar-prev"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#666" d="M88.2 3.8L35.8 56.23 28 64l7.8 7.78 52.4 52.4 9.78-7.76L45.58 64l52.4-52.4z"/></svg></a></div>
               <div class="calendar-year-month">
               <div class="calendar-month-label"></div>
               <div>-</div>
               <div class="calendar-year-label"></div>
               </div>
               <div class="calendar-next"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#666" d="M38.8 124.2l52.4-52.42L99 64l-7.77-7.78-52.4-52.4-9.8 7.77L81.44 64 29 116.42z"/></svg></a></div>
               </div>
               <div class="calendar-today-date">Today: 
                 ${calendarControl.calWeekDays[calendarControl.localDate.getDay()]}, 
                 ${calendarControl.localDate.getDate()}, 
                 ${calendarControl.calMonthName[calendarControl.localDate.getMonth()]} 
                 ${calendarControl.localDate.getFullYear()}
               </div>
               <div class="calendar-body"></div></div>`;
           },
           plotDayNames: function () {
             for (let i = 0; i < calendarControl.calWeekDays.length; i++) {
               document.querySelector(
                 ".calendar .calendar-body"
               ).innerHTML += `<div>${calendarControl.calWeekDays[i]}</div>`;
             }
           },
           plotDates: function () {
             document.querySelector(".calendar .calendar-body").innerHTML = "";
             calendarControl.plotDayNames();
             calendarControl.displayMonth();
             calendarControl.displayYear();
             let count = 1;
             let prevDateCount = 0;
       
             calendarControl.prevMonthLastDate = calendarControl.getPreviousMonthLastDate();
             let prevMonthDatesArray = [];
             let calendarDays = calendarControl.daysInMonth(
               calendar.getMonth() + 1,
               calendar.getFullYear()
             );
             // dates of current month
             for (let i = 1; i < calendarDays; i++) {
               if (i < calendarControl.firstDayNumber()) {
                 prevDateCount += 1;
                 document.querySelector(
                   ".calendar .calendar-body"
                 ).innerHTML += `<div class="prev-dates"></div>`;
                 prevMonthDatesArray.push(calendarControl.prevMonthLastDate--);
               } else {
                 document.querySelector(
                   ".calendar .calendar-body"
                 ).innerHTML += `<div class="number-item" data-num=${count}><a class="dateNumber" href="#">${count++}</a></div>`;
               }
             }
             //remaining dates after month dates
             for (let j = 0; j < prevDateCount + 1; j++) {
               document.querySelector(
                 ".calendar .calendar-body"
               ).innerHTML += `<div class="number-item" data-num=${count}><a class="dateNumber" href="#">${count++}</a></div>`;
             }
             calendarControl.highlightToday();
             calendarControl.plotPrevMonthDates(prevMonthDatesArray);
             calendarControl.plotNextMonthDates();
           },
           attachEvents: function () {
             let prevBtn = document.querySelector(".calendar .calendar-prev a");
             let nextBtn = document.querySelector(".calendar .calendar-next a");
             let todayDate = document.querySelector(".calendar .calendar-today-date");
             let dateNumber = document.querySelectorAll(".calendar .dateNumber");
             prevBtn.addEventListener(
               "click",
               calendarControl.navigateToPreviousMonth
             );
             nextBtn.addEventListener("click", calendarControl.navigateToNextMonth);
             todayDate.addEventListener(
               "click",
               calendarControl.navigateToCurrentMonth
             );
             for (var i = 0; i < dateNumber.length; i++) {
                 dateNumber[i].addEventListener(
                   "click",
                   calendarControl.selectDate,
                   false
                 );
             }
           },
           highlightToday: function () {
             let currentMonth = calendarControl.localDate.getMonth() + 1;
             let changedMonth = calendar.getMonth() + 1;
             let currentYear = calendarControl.localDate.getFullYear();
             let changedYear = calendar.getFullYear();
             if (
               currentYear === changedYear &&
               currentMonth === changedMonth &&
               document.querySelectorAll(".number-item")
             ) {
               document
                 .querySelectorAll(".number-item")
                 [calendar.getDate() - 1].classList.add("calendar-today");
             }
           },
           plotPrevMonthDates: function(dates){
             dates.reverse();
             for(let i=0;i<dates.length;i++) {
                 if(document.querySelectorAll(".prev-dates")) {
                     document.querySelectorAll(".prev-dates")[i].textContent = dates[i];
                 }
             }
           },
           plotNextMonthDates: function(){
            let childElemCount = document.querySelector('.calendar-body').childElementCount;
            //7 lines
            if(childElemCount > 42 ) {
                let diff = 49 - childElemCount;
                calendarControl.loopThroughNextDays(diff);
            }
      
            //6 lines
            if(childElemCount > 35 && childElemCount <= 42 ) {
             let diff = 42 - childElemCount;
             calendarControl.loopThroughNextDays(42 - childElemCount);
            }
      
           },
           loopThroughNextDays: function(count) {
             if(count > 0) {
                 for(let i=1;i<=count;i++) {
                     document.querySelector('.calendar-body').innerHTML += `<div class="next-dates">${i}</div>`;
                 }
             }
           },
           attachEventsOnNextPrev: function () {
             calendarControl.plotDates();
             calendarControl.attachEvents();
           },
           init: function () {
             calendarControl.plotSelectors();
             calendarControl.plotDates();
             calendarControl.attachEvents();
           }
         };
         calendarControl.init();
       }
       
       const calendarControl = new CalendarControl();
      
   </script>

   <div class="row" id="table1">
      <!--MSK-000132-1-->    
      <div class="col-md-8">
         <center>
            <h4 class="box-title">Monthly Attendance</h4>
         </center>
         <canvas id="barChart" width="800" height="438"></canvas>
      </div>
      <script>
         function showBarChart(monthly_attendance){	
          
         	var monthly_attendance1 = JSON.parse("[" + monthly_attendance + "]");
         
         	new Chart(document.getElementById("barChart"), {
         		type: 'bar',
         		data: {
         			
         		   labels: ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"],
         		  datasets: [
         			{
         			  label: "Monthly Attendants",
         			  backgroundColor: ["#e80a68", "#d74340","#8e3d87","#40b9d7","#26ab8d","#7e5c3e", "#3e447e","#638e3d","#766677","#f35df8","#e49e23","#f68b98"],
         			  data: monthly_attendance1
         				//data: [12, 19, 3, 5, 10, 3,12, 19, 10, 5, 10, 15],
         			}
         		  ]
         		},
         		options: {
         		  legend: { display: false },
         		  title: {
         			display: true,
         			text: ''
         		  },
         		  scales: {
         				yAxes: [{
         					ticks: {
         						beginAtZero:true
         					}
         				}]
         			}
         		}
         	});
         
         };
      </script>
      <?php
         include_once('../controller/config.php');
         $current_year=date("Y");
         $prefix="";
         $monthly_attendance="";
         
         $month=array("January","February","March","April","May","June","July","August","September","October","November","December");
         
         for($i=0; $i<count($month); $i++){
         	$sql="SELECT COUNT(id) FROM student_attendance WHERE year='$current_year' AND month='$month[$i]' AND index_number='$my_index' AND _status1='intime'";
         	$result=mysqli_query($conn,$sql);
         	$row=mysqli_fetch_assoc($result);
         	$monthly_attendance.=$prefix.'"'.$row['COUNT(id)'].'"';
         	$prefix=',';
         	
         }
         
         echo "<script>showBarChart('$monthly_attendance');</script>";
         
         ?>            
      <!-- <div class="col-md-4">
         <!-- <div id="calendar-container">
            <div id="calendar-header">
               <center>
                  <h4><span id="calendar_month_year"></span> <?php echo $current_year; ?></h4>
               </center>
            </div>
            <input type="hidden" id="my_index" value="<?php echo $my_index; ?>">  
            <input type="hidden" id="my_type" value="<?php echo $my_type; ?>">                         
            </div>
            <div class="row1" id="row">
            </div> -->
         <!--<div class="calendar"></div>
      </div> -->
   </div>
   <div id="cEvent">
   </div>
   <script>
      //check the console for date click event
      //Fixed day highlight
      //Added previous month and next month view
      
      function CalendarControl() {
         const calendar = new Date();
         const calendarControl = {
           localDate: new Date(),
           prevMonthLastDate: null,
           calWeekDays: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
           calMonthName: [
             "Jan",
             "Feb",
             "Mar",
             "Apr",
             "May",
             "Jun",
             "Jul",
             "Aug",
             "Sep",
             "Oct",
             "Nov",
             "Dec"
           ],
           daysInMonth: function (month, year) {
             return new Date(year, month, 0).getDate();
           },
           firstDay: function () {
             return new Date(calendar.getFullYear(), calendar.getMonth(), 1);
           },
           lastDay: function () {
             return new Date(calendar.getFullYear(), calendar.getMonth() + 1, 0);
           },
           firstDayNumber: function () {
             return calendarControl.firstDay().getDay() + 1;
           },
           lastDayNumber: function () {
             return calendarControl.lastDay().getDay() + 1;
           },
           getPreviousMonthLastDate: function () {
             let lastDate = new Date(
               calendar.getFullYear(),
               calendar.getMonth(),
               0
             ).getDate();
             return lastDate;
           },
           navigateToPreviousMonth: function () {
             calendar.setMonth(calendar.getMonth() - 1);
             calendarControl.attachEventsOnNextPrev();
           },
           navigateToNextMonth: function () {
             calendar.setMonth(calendar.getMonth() + 1);
             calendarControl.attachEventsOnNextPrev();
           },
           navigateToCurrentMonth: function () {
             let currentMonth = calendarControl.localDate.getMonth();
             let currentYear = calendarControl.localDate.getFullYear();
             calendar.setMonth(currentMonth);
             calendar.setYear(currentYear);
             calendarControl.attachEventsOnNextPrev();
           },
           displayYear: function () {
             let yearLabel = document.querySelector(".calendar .calendar-year-label");
             yearLabel.innerHTML = calendar.getFullYear();
           },
           displayMonth: function () {
             let monthLabel = document.querySelector(
               ".calendar .calendar-month-label"
             );
             monthLabel.innerHTML = calendarControl.calMonthName[calendar.getMonth()];
           },
           selectDate: function (e) {
             console.log(
               `${e.target.textContent} ${
                 calendarControl.calMonthName[calendar.getMonth()]
               } ${calendar.getFullYear()}`
             );
           },
           plotSelectors: function () {
             document.querySelector(
               ".calendar"
             ).innerHTML += `<div class="calendar-inner"><div class="calendar-controls">
               <div class="calendar-prev"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#666" d="M88.2 3.8L35.8 56.23 28 64l7.8 7.78 52.4 52.4 9.78-7.76L45.58 64l52.4-52.4z"/></svg></a></div>
               <div class="calendar-year-month">
               <div class="calendar-month-label"></div>
               <div>-</div>
               <div class="calendar-year-label"></div>
               </div>
               <div class="calendar-next"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#666" d="M38.8 124.2l52.4-52.42L99 64l-7.77-7.78-52.4-52.4-9.8 7.77L81.44 64 29 116.42z"/></svg></a></div>
               </div>
               <div class="calendar-today-date">Today: 
                 ${calendarControl.calWeekDays[calendarControl.localDate.getDay()]}, 
                 ${calendarControl.localDate.getDate()}, 
                 ${calendarControl.calMonthName[calendarControl.localDate.getMonth()]} 
                 ${calendarControl.localDate.getFullYear()}
               </div>
               <div class="calendar-body"></div></div>`;
           },
           plotDayNames: function () {
             for (let i = 0; i < calendarControl.calWeekDays.length; i++) {
               document.querySelector(
                 ".calendar .calendar-body"
               ).innerHTML += `<div>${calendarControl.calWeekDays[i]}</div>`;
             }
           },
           plotDates: function () {
             document.querySelector(".calendar .calendar-body").innerHTML = "";
             calendarControl.plotDayNames();
             calendarControl.displayMonth();
             calendarControl.displayYear();
             let count = 1;
             let prevDateCount = 0;
       
             calendarControl.prevMonthLastDate = calendarControl.getPreviousMonthLastDate();
             let prevMonthDatesArray = [];
             let calendarDays = calendarControl.daysInMonth(
               calendar.getMonth() + 1,
               calendar.getFullYear()
             );
             // dates of current month
             for (let i = 1; i < calendarDays; i++) {
               if (i < calendarControl.firstDayNumber()) {
                 prevDateCount += 1;
                 document.querySelector(
                   ".calendar .calendar-body"
                 ).innerHTML += `<div class="prev-dates"></div>`;
                 prevMonthDatesArray.push(calendarControl.prevMonthLastDate--);
               } else {
                 document.querySelector(
                   ".calendar .calendar-body"
                 ).innerHTML += `<div class="number-item" data-num=${count}><a class="dateNumber" href="#">${count++}</a></div>`;
               }
             }
             //remaining dates after month dates
             for (let j = 0; j < prevDateCount + 1; j++) {
               document.querySelector(
                 ".calendar .calendar-body"
               ).innerHTML += `<div class="number-item" data-num=${count}><a class="dateNumber" href="#">${count++}</a></div>`;
             }
             calendarControl.highlightToday();
             calendarControl.plotPrevMonthDates(prevMonthDatesArray);
             calendarControl.plotNextMonthDates();
           },
           attachEvents: function () {
             let prevBtn = document.querySelector(".calendar .calendar-prev a");
             let nextBtn = document.querySelector(".calendar .calendar-next a");
             let todayDate = document.querySelector(".calendar .calendar-today-date");
             let dateNumber = document.querySelectorAll(".calendar .dateNumber");
             prevBtn.addEventListener(
               "click",
               calendarControl.navigateToPreviousMonth
             );
             nextBtn.addEventListener("click", calendarControl.navigateToNextMonth);
             todayDate.addEventListener(
               "click",
               calendarControl.navigateToCurrentMonth
             );
             for (var i = 0; i < dateNumber.length; i++) {
                 dateNumber[i].addEventListener(
                   "click",
                   calendarControl.selectDate,
                   false
                 );
             }
           },
           highlightToday: function () {
             let currentMonth = calendarControl.localDate.getMonth() + 1;
             let changedMonth = calendar.getMonth() + 1;
             let currentYear = calendarControl.localDate.getFullYear();
             let changedYear = calendar.getFullYear();
             if (
               currentYear === changedYear &&
               currentMonth === changedMonth &&
               document.querySelectorAll(".number-item")
             ) {
               document
                 .querySelectorAll(".number-item")
                 [calendar.getDate() - 1].classList.add("calendar-today");
             }
           },
           plotPrevMonthDates: function(dates){
             dates.reverse();
             for(let i=0;i<dates.length;i++) {
                 if(document.querySelectorAll(".prev-dates")) {
                     document.querySelectorAll(".prev-dates")[i].textContent = dates[i];
                 }
             }
           },
           plotNextMonthDates: function(){
            let childElemCount = document.querySelector('.calendar-body').childElementCount;
            //7 lines
            if(childElemCount > 42 ) {
                let diff = 49 - childElemCount;
                calendarControl.loopThroughNextDays(diff);
            }
      
            //6 lines
            if(childElemCount > 35 && childElemCount <= 42 ) {
             let diff = 42 - childElemCount;
             calendarControl.loopThroughNextDays(42 - childElemCount);
            }
      
           },
           loopThroughNextDays: function(count) {
             if(count > 0) {
                 for(let i=1;i<=count;i++) {
                     document.querySelector('.calendar-body').innerHTML += `<div class="next-dates">${i}</div>`;
                 }
             }
           },
           attachEventsOnNextPrev: function () {
             calendarControl.plotDates();
             calendarControl.attachEvents();
           },
           init: function () {
             calendarControl.plotSelectors();
             calendarControl.plotDates();
             calendarControl.attachEvents();
           }
         };
         calendarControl.init();
       }
       
       const calendarControl = new CalendarControl();
      
   </script>
   <!-- <script>
      var m2 = 0;
      
      function ShowEvents(status,my_index,my_type){
      	
      	var d = new Date();    //new Date('2017','08','25');
      	var month_name = ['January','February','March','April','May','June','July','August','September','Octomber','November','December'];	
      		
      	var m1 = d.getMonth(); //0-11
      	var y1 = d.getFullYear(); //2017
      	
      	var current_date = d.getDate();
      		
      	if(status == 'K'){
      		var m3 = m1;
      	}
      		
      	if(status == 'N'){
      		m2++;
      		var m3 = m1 + m2;
      	}
      				
      	if(status == 'P'){
      		m2--;
      		var m3 = m1 + m2;
      	}
      				
      	if(m3 == 0){
      		$('#btn1').css('pointer-events', 'none');
      	}
      				
      	if(m3 == 11){
      		$('#btn2').css('pointer-events', 'none');
      	}
      		
      	var xhttp = new XMLHttpRequest();//MSK-00105-Ajax Start  
      		xhttp.onreadystatechange = function() {
      				
      			if (this.readyState == 4 && this.status == 200){
      					//MSK-00107 
      				document.getElementById('row').innerHTML = this.responseText;//MSK-000132
      				
      				var start_date = $('#start_date').val().split(',');
      				var end_date = $('#end_date').val().split(',');
      				var color = $('#color').val().split(',');
      				var event_id = $('#event_id').val().split(',');
      			
      				var month = m3; //0-11
      				var year = y1; //2017 
      				var first_date = month_name[month] + " " + 1 + " " + year;
      				
      				var tmp = new Date(first_date).toDateString();
      				// Tue Aug 01 2017...
      				
      				var first_day = tmp.substring(0,3); //Thu
      				var day_name = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
      				var day_no = day_name.indexOf(first_day);  //4
      				var days = new Date(year, month+1, 0).getDate(); //31
      				// Thu Aug 31 2017...
      				
      				var calendar = get_calendar(day_no,days);
      				
      				document.getElementById("calendar_month_year").innerHTML = month_name[month];
      				document.getElementById("calendar_dates").appendChild(calendar);
      				$("#td_"+current_date).css("background-color", "#319a5b ");
      				var count1 = start_date.length;
      				var k=0;
      				for(var i=0; i<count1; i++){
      					var s_date = parseInt(start_date[i], 10);
      					var e_date = parseInt(end_date[i], 10);
      					
      					var count = e_date - s_date;
      				
      					for(var j=0; j<=count; j++){
      					
      						k = s_date+j;
      						
      						$("#td_"+k).append('<div class="div-event-c" style="background-color:'+color[i]+'"><a id="event_"+'+[i]+' style="color:white;" href="#" onclick="showEvent('+event_id[i]+')"><i class="fa fa-calendar" aria-hidden="true"></i></a></div>');
      													
      					}  					
      					
      				}
      
      			}
      				
      		};	
      		
      		xhttp.open("GET", "all_events1.php?year=" + y1 + "&month="+m3 + "&my_type="+my_type + "&my_index="+my_index , true);	
      		xhttp.send();//MSK-00105-Ajax End
      		
      						
      };
      
      </script> -->
   <div id="showEvent">
   </div>
   <script>
      function showEvent(event_id){
      	
      	var xhttp = new XMLHttpRequest();//MSK-00105-Ajax Start  
      		xhttp.onreadystatechange = function() {
      				
      			if (this.readyState == 4 && this.status == 200) {
      				document.getElementById('showEvent').innerHTML = this.responseText;//MSK-000132
      				$('#modalviewEvent').modal('show');
      			}
      				
      		};	
      		
      		xhttp.open("GET", "show_events1.php?event_id="+event_id , true);												
      		xhttp.send();//MSK-00105-Ajax End
      };
      
      function get_calendar(day_no,days){
      	
      	var table = document.createElement('table');
      	var tr = document.createElement('tr');
      	
      	table.className = 'cal-table';
      	
      	// row for the day letters
      	for(var c=0; c<=6; c++){
      		var th = document.createElement('th');
      		th.innerHTML =  ['S','M','T','W','T','F','S'][c];
      		tr.appendChild(th);
      		th.className = "tHead";
      		
      		
      	}
      	
      	table.appendChild(tr);
      	
      	//create 2nd row
      	
      	tr = document.createElement('tr');
      	
      	var c;
      	for(c=0; c<=6; c++){
      		
      		if(c== day_no){
      			break;
      		}
      		var td = document.createElement('td');
      		td.innerHTML = "";
      		tr.appendChild(td);
      		td.className = "td_no_number";
      		tr.className = 'cal-tr';
      	}
      	
      	var count = 1;
      	for(; c<=6; c++){
      		var td = document.createElement('td');
      		td.id = "td_"+count;
      		td.className = 'cal-number-td';
      		tr.appendChild(td);
      		tr.className = 'cal-tr';
      		
      		var h5 = document.createElement('h5');
      		h5.className = 'h5';
      		td.appendChild(h5);
      		h5.innerHTML = count;
      		count++;
      		
      		
      	}
      	table.appendChild(tr);
      	
      	//rest of the date rows
      	
      	for(var r=3; r<=7; r++){
      		tr = document.createElement('tr');
      		for(var c=0; c<=6; c++){
      			
      			if(count > days){
      				for(; c<=6; c++){
      		
      					var td = document.createElement('td');
      					td.innerHTML = "";
      					tr.appendChild(td);
      					td.className = "td_no_number";
      					tr.className = 'cal-tr';
      				}
      				table.appendChild(tr);
      				return table;
      			}
      			
      			var td = document.createElement('td');
      			//td.innerHTML = count;
      			td.id = "td_"+count;
      			//td.style.padding = 0;
      			td.className = 'cal-number-td';
      			
      			tr.appendChild(td);
      			
      			var h5 = document.createElement('h5');
      			h5.className = 'h5';
      			td.appendChild(h5);
      			h5.innerHTML = count;
      			count++;
      			tr.className = 'cal-tr';
      			
      		}
      		table.appendChild(tr);   		
      		
      	}	
      	
      };	
   </script>
   <?php 
      $my_index=$_SESSION['index_number'];
      $my_type=$_SESSION['type'];      
      // echo '<script>','ShowEvents("K",'.$my_index.',"'.$my_type.'");','</script>';
      ?>
   <br>
   <div class="row" >
      <div class="col-md-9" >
         <!-- left column -->
         <center>
            <h4>My Exam Marks</h4>
         </center>
         <canvas id="lineChart" width="800" height="450"></canvas>
      </div>
   </div>
   <script>
      function showLineChart(subject,term1,term2,term3){	
      
      	var subject1 = JSON.parse("[" + subject + "]");
      	var terms1 = JSON.parse("[" + term1 + "]");
      	var terms2 = JSON.parse("[" + term2 + "]");
      	var terms3 = JSON.parse("[" + term3 + "]");
      
      	new Chart(document.getElementById("lineChart"), {
      		type: 'line',
      		data: {
      		  //labels: ["January", "February", "March"],
      		  labels: subject1,
      		  datasets: [
      			{
      			  label: "Term 1",
      			  borderColor: "#00c0ef",
      			  fill: false,
      			  data: terms1
      			 
      			}, {
      			  label: "Term 2",
      			  borderColor: "#ec00ef",
      			  fill: false,
      			  data: terms2
      			 
      			}, {
      			  label: "Term 3",
      			  borderColor: "#17ef00",
      			  fill: false,
      			  data: terms3
      			 
      			}
      		  ]
      		},
      		options: {
      		  legend: { display: false },
      		  title: {
      			display: true,
      			text: ''
      		  },
      		  scales: {
      				yAxes: [{
      					ticks: {
      						beginAtZero:true
      					}
      				}]
      			}
      		}
      	});
      
      };
      
   </script>
   <?php
      include_once('../controller/config.php');
      $index=$_SESSION["index_number"];
      $year=date("Y");
              
      $prefix="";
      
      $subject='';
      $marks='';
      $mark_range='';
      $mark_grade='';
      
       $term2="";
      
       
       $prefix1="";
       $prefix2="";
       $prefix3="";
       
       $terms1="";
       $terms2="";
       $terms3="";   
       $g=0; 
      
      $sql="SELECT * FROM exam";
      $result=mysqli_query($conn,$sql);
      if(mysqli_num_rows($result) > 0){
      while($row=mysqli_fetch_assoc($result)){
      	$id=$row['id'];
      	
      	$sql1="select subject.name as s_name,student_exam.marks as e_marks
      	       from student_exam 
      		   inner join subject
      		   on student_exam.subject_id=subject.id
      		   where student_exam.exam_id='$id' and student_exam.index_number='$index' and year='$year'";
      	
      	$result1=mysqli_query($conn,$sql1);
      	
      	$fail=false;
      	while($row1=mysqli_fetch_assoc($result1)){
      		
      		$term2.=$prefix1.'"'.$row1['e_marks'].'"';
      		$prefix1=',';
      			
      		$subject.=$prefix2.'"'.$row1['s_name'].'"';
      		$prefix2=',';
      			
      		$g++;
      		
      		$fail=true;
      	}
      		   
      	$term2.="k";
      	$subject.="k";
      	
      }
      
      	$o=$term2;
      	$o=explode("k",$term2);
      	$p=explode("k",$subject);
      	
      	$terms1=$o[0];
      	$terms2=$o[1];
      	$terms2 = substr($terms2, 1);
      	$terms3=$o[2]; 
      	$terms3 = substr($terms3, 1);
      	$subject=$p[0];
      	
      }
      echo "<script>showLineChart('$subject','$terms1','$terms2','$terms3');</script>";
      
      ?>
   <div class="row" id="table1">
      <!--MSK-000132-1-->
      <div class="col-md-12">
         <center>
            <h4 class="box-title">My Timetable</h4>
         </center>
         <div class="box">
            <div class="box-body table-responsive">
               <table class="table table-bordered table-striped">
                  <thead style="color:white; background-color:#666;">
                     <th class="col-md-1">Time</th>
                     <th class="col-md-1">Sunday</th>
                     <th class="col-md-1">Monday</th>
                     <th class="col-md-1">Tuesday</th>
                     <th class="col-md-1">Wednesday</th>
                     <th class="col-md-1">Thursday</th>
                     <th class="col-md-1">Friday</th>
                     <th class="col-md-1">Saturday</th>
                  </thead>
                  <tbody>
                     <?php
                        include_once('../controller/config.php');
                                    
                        $index=$_SESSION["index_number"];
                        $current_year=date('Y');
                                    
                        $sql1="SELECT * FROM student_grade WHERE index_number='$index'";
                        $result1=mysqli_query($conn,$sql1);
                        $row1=mysqli_fetch_assoc($result1);
                        $grade=$row1['grade_id'];
                                    
                        $sql2="select  subject_routing.grade_id as g_id,subject_routing.subject_id as s_id,subject_routing.teacher_id as t_id
                               from student_subject
                               inner join subject_routing
                               on student_subject.sr_id=subject_routing.id
                               where student_subject.index_number='$index' and student_subject.year='$current_year'";
                        	   
                        $result2=mysqli_query($conn,$sql2);
                        while($row2=mysqli_fetch_assoc($result2)){
                                        
                        	$g_id=$row2['g_id'];
                            $s_id=$row2['s_id'];
                            $t_id=$row2['t_id'];
                                        
                            $sql3="SELECT 
                                   DISTINCT start_time,end_time
                                   FROM
                                      timetable
                                   WHERE
                                      grade_id='$g_id' AND subject_id='$s_id' AND teacher_id='$t_id'  
                                   ORDER BY
                                      start_time";
                                        
                            $result3=mysqli_query($conn,$sql3);
                            while($row3=mysqli_fetch_assoc($result3)){
                                            
                        		$s_time=$row3['start_time'];
                                $e_time=$row3['end_time'];
                                            
                        ?>    
                     <tr>
                        <th  style="color:white; background-color:#666;">
                           <?php echo $s_time." - ".$e_time; ?>		
                        </th>
                        <td bgcolor="#d74340" style="color:white;">
                           <?php 
                              include_once('../controller/config.php');
                                          
                              $sql="select subject.name as s_name,teacher.i_name as t_name,class_room.name as c_name
                                    from timetable
                                    inner join subject
                                    on timetable.subject_id=subject.id
                                    inner join teacher
                                    on timetable.teacher_id=teacher.id
                                    inner join class_room
                                    on timetable.classroom_id=class_room.id
                                    where timetable.grade_id='$g_id' and timetable.subject_id='$s_id' and timetable.teacher_id='$t_id' and timetable.start_time='$s_time' and timetable.end_time='$e_time' and timetable.day='Sunday'";
                                                
                              $result=mysqli_query($conn,$sql);
                              if (mysqli_num_rows($result) > 0) { // 1#
                              	while($row=mysqli_fetch_assoc($result)){ // while loop 1#
                                                  
                              ?>    	
                           <?php echo $row['s_name']; ?><br>
                           <?php echo $row['t_name']; ?><br>
                           <?php echo $row['c_name']; ?><br>
                           <?php }} ?>
                        </td>
                        <td bgcolor="#d7cb40" style="color:white;">
                           <?php 
                              include_once('../controller/config.php');
                                              
                              $sql="select subject.name as s_name,teacher.i_name as t_name,class_room.name as c_name
                                    from timetable
                                    inner join subject
                                    on timetable.subject_id=subject.id
                                    inner join teacher
                                    on timetable.teacher_id=teacher.id
                                    inner join class_room
                                    on timetable.classroom_id=class_room.id
                                    where timetable.grade_id='$g_id' and timetable.subject_id='$s_id' and timetable.teacher_id='$t_id' and timetable.start_time='$s_time' and timetable.end_time='$e_time' and timetable.day='Monday'";
                                                
                              $result=mysqli_query($conn,$sql);
                              if (mysqli_num_rows($result) > 0) { // 2#
                              	while($row=mysqli_fetch_assoc($result)){ // while loop 2#
                              	
                              ?>    	
                           <?php echo $row['s_name']; ?><br>
                           <?php echo $row['t_name']; ?><br>
                           <?php echo $row['c_name']; ?><br>
                           <?php } }?>
                        </td>
                        <td bgcolor="#40b9d7" style="color:white;">
                           <?php 
                              include_once('../controller/config.php');
                                              
                              $sql="select subject.name as s_name,teacher.i_name as t_name,class_room.name as c_name
                                    from timetable
                                    inner join subject
                                    on timetable.subject_id=subject.id
                                    inner join teacher
                                    on timetable.teacher_id=teacher.id
                                    inner join class_room
                                    on timetable.classroom_id=class_room.id
                                    where timetable.grade_id='$g_id' and timetable.subject_id='$s_id' and timetable.teacher_id='$t_id' and timetable.start_time='$s_time' and timetable.end_time='$e_time' and timetable.day='Tuesday'";
                                                
                              $result=mysqli_query($conn,$sql);
                              if (mysqli_num_rows($result) > 0) { // 3#
                              	while($row=mysqli_fetch_assoc($result)){ // while loop 3#
                                          
                              ?>    	
                           <?php echo $row['s_name']; ?><br>
                           <?php echo $row['t_name']; ?><br>
                           <?php echo $row['c_name']; ?><br>
                           <?php  } } ?>
                        </td>
                        <td bgcolor="#f39037" style="color:white;">
                           <?php 
                              include_once('../controller/config.php');
                                              
                              $sql="select subject.name as s_name,teacher.i_name as t_name,class_room.name as c_name
                                    from timetable
                                    inner join subject
                                    on timetable.subject_id=subject.id
                                    inner join teacher
                                    on timetable.teacher_id=teacher.id
                                    inner join class_room
                                    on timetable.classroom_id=class_room.id
                                    where timetable.grade_id='$g_id' and timetable.subject_id='$s_id' and timetable.teacher_id='$t_id' and timetable.start_time='$s_time' and timetable.end_time='$e_time' and timetable.day='Wednesday'";
                              	  
                              $result=mysqli_query($conn,$sql);                  
                              if (mysqli_num_rows($result) > 0) { // 4#
                              	while($row=mysqli_fetch_assoc($result)){ // while loop 4# 
                              
                              ?>    	
                           <?php echo $row['s_name']; ?><br>
                           <?php echo $row['t_name']; ?><br>
                           <?php echo $row['c_name']; ?><br>
                           <?php } }?>
                        </td>
                        <td bgcolor="#7e5c3e" style="color:white;">
                           <?php 
                              include_once('../controller/config.php');
                                              
                              $sql="select subject.name as s_name,teacher.i_name as t_name,class_room.name as c_name
                                    from timetable
                                    inner join subject
                                    on timetable.subject_id=subject.id
                                    inner join teacher
                                    on timetable.teacher_id=teacher.id
                                    inner join class_room
                                    on timetable.classroom_id=class_room.id
                                    where timetable.grade_id='$g_id' and timetable.subject_id='$s_id' and timetable.teacher_id='$t_id' and timetable.start_time='$s_time' and timetable.end_time='$e_time' and timetable.day='Thursday'";
                                                
                              $result=mysqli_query($conn,$sql);
                              if (mysqli_num_rows($result) > 0) { //5#
                              	while($row=mysqli_fetch_assoc($result)){ // while loop 5#
                                          
                              ?>    	
                           <?php echo $row['s_name']; ?><br>
                           <?php echo $row['t_name']; ?><br>
                           <?php echo $row['c_name']; ?><br>
                           <?php } } ?>
                        </td>
                        <td bgcolor="#3e447e" style="color:white;">
                           <?php 
                              include_once('../controller/config.php');
                                              
                              $sql="select subject.name as s_name,teacher.i_name as t_name,class_room.name as c_name
                                    from timetable
                                    inner join subject
                                    on timetable.subject_id=subject.id
                                    inner join teacher
                                    on timetable.teacher_id=teacher.id
                                    inner join class_room
                                    on timetable.classroom_id=class_room.id
                                    where timetable.grade_id='$g_id' and timetable.subject_id='$s_id' and timetable.teacher_id='$t_id' and timetable.start_time='$s_time' and timetable.end_time='$e_time' and timetable.day='Friday'";
                                                
                              $result=mysqli_query($conn,$sql);
                              if (mysqli_num_rows($result) > 0) { // 6#
                              	while($row=mysqli_fetch_assoc($result)){// while loop 6#
                                          
                              ?>    	
                           <?php echo $row['s_name']; ?><br>
                           <?php echo $row['t_name']; ?><br>
                           <?php echo $row['c_name']; ?><br>
                           <?php  } }?>
                        </td>
                        <td bgcolor="#638e3d" style="color:white;">
                           <?php 
                              include_once('../controller/config.php');
                                              
                              $sql="select subject.name as s_name,teacher.i_name as t_name,class_room.name as c_name
                                    from timetable
                                    inner join subject
                                    on timetable.subject_id=subject.id
                                    inner join teacher
                                    on timetable.teacher_id=teacher.id
                                    inner join class_room
                                    on timetable.classroom_id=class_room.id
                                    where timetable.grade_id='$g_id' and timetable.subject_id='$s_id' and timetable.teacher_id='$t_id' and timetable.start_time='$s_time' and timetable.end_time='$e_time' and timetable.day='Saturday'";
                                               
                              $result=mysqli_query($conn,$sql);
                              if (mysqli_num_rows($result) > 0) { // 7#
                              	while($row=mysqli_fetch_assoc($result)){ // while loop 7#
                                              
                              ?>    	
                           <?php echo $row['s_name']; ?><br>
                           <?php echo $row['t_name']; ?><br>
                           <?php echo $row['c_name']; ?><br>
                           <?php } } ?>
                        </td>
                     </tr>
                     <?php  } }  ?>
                  </tbody>
               </table>
            </div>
            <!-- /.box-body -->	
         </div>
         <!-- /.box -->
      </div>
      <!-- /.col-md-10 -->
   </div>
   <!-- /.row -->
   <!--redirect your own url when clicking browser back button -->
   <script>
      (function(window, location) {
      history.replaceState(null, document.title, location.pathname+"#!/history");
      history.pushState(null, document.title, location.pathname);
      
      window.addEventListener("popstate", function() {
        if(location.hash === "#!/history") {
          history.replaceState(null, document.title, location.pathname);
          setTimeout(function(){
            location.replace("../index.php");//path to when click back button
          },0);
        }
      }, false);
      }(window, location));
   </script> 
</div>
<!-- /.content-wrapper -->    
<?php include_once('footer.php'); ?>
<!-- Attendance Graph Starts Here -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/c3/0.7.20/c3.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.16.0/d3.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.7.20/c3.min.js"></script>
<script>
   let record = [];
   let months = ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"];
   let selectedYear = '';
   <?php
      function total_sundays($month, $year) {
         $sundays=0;
         $total_days=cal_days_in_month(CAL_GREGORIAN, $month, $year);
         for($i=1;$i<=$total_days;$i++) {
            if(date('N',strtotime($year.'-'.$month.'-'.$i))==7) {
               $sundays++;
            }
         }
         return $sundays;
      }
      $attendanceQuery = "SELECT MONTHNAME(date), MONTH(date) AS month_num, YEAR(date) AS year, COUNT(*) AS attendance_count FROM student_attendance WHERE index_number=".$my_index." AND _status2='Present' GROUP BY MONTH(date)";
      $attendanceResult = mysqli_query($conn,$attendanceQuery);
      while($row = mysqli_fetch_assoc($attendanceResult)) {
         $monthNum = $row['month_num'] - 1;// converting monthnumeric value from php to js
         $sundays = total_sundays(intval($row['month_num']), intval($row['year']));
         $yValue = number_format(((intval($row['attendance_count']) / (cal_days_in_month(CAL_GREGORIAN, intval($row['month_num']), intval($row['year'])) - $sundays)) * 100), 2);
         // echo 'x.push(new Date(' . $row['year'] . ', ' . $monthNum . '));';
         // echo 'y.push(' . $yValue . ');'; // passing variable inside javascript- so concatenating
         echo 'record.push(['.$monthNum.', '.$row['year'].', '.$yValue.']);';
         echo 'selectedYear = ' . $row['year'] . ';';
      //       echo '<pre>';
      //       print_r($row);
      //       echo '</pre>';
      }
      ?>
    let x = ['Month'];
    let y = ['Attendance'];
    let xAxisValues = months.map((month, index) => {
      let tempDate = new Date(selectedYear, index);
      let matchFlag = false;

      record.forEach(function(arr) {
        let month = arr[0];
        let year = arr[1];
        let yValue = parseFloat(arr[2]);
        let dateFromRecord = new Date(year, month);
        if(dateFromRecord.getTime() === tempDate.getTime()) {
          x.push(dateFromRecord);
          y.push(yValue);
          matchFlag = true;
        }
      });
      console.log(matchFlag);
      if(!matchFlag) {
        x.push(tempDate);
        y.push(0);
      }

      return tempDate;
    });
    let data = [x, y];
    console.log(data);
   let chart = c3.generate({
      bindto: '#attendanceChart',
      data: {
         x:'Month',
         columns: data,
         order:false,
         type: 'bar'
      },
      bar: {
         width: {
            ratio: 0.40 
         }
      },
      axis: {
         x: {
            type: 'timeseries',
            tick: {
              values: xAxisValues,
              rotate: 0,
              format: '%b-%Y',//javascript date format
              // culling: false
            }
         },
         y: {
            tick: {
              values: [0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100],
              format: function(d) {
                  return d + '%';
              }
            }
         }
      }
   });
</script>
<<<<<<< Updated upstream

</div><!-- /.content-wrapper -->    
<?php include_once('footer.php'); ?>
=======
<!-- Attendance Graph Ends Here -->
>>>>>>> Stashed changes
