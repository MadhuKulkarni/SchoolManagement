<?php
   if(!isset($_SERVER['HTTP_REFERER'])){
       // redirect them to your desired location
       header('location:../index.php');
       exit;
   }
   ?>
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

#chartdiv {
	width		: 100%;
	height		: 240px;
	font-size	: 11px;
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
   <section class="content" style="min-height: auto;">
  	





   <div class="row">
					<div class="col-xs-12 col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Strength Chart<ul class="rad-panel-action"></h3> </div>
							<div class="panel-body">
								<div id="stuTeaAdminChart" class="rad-chart">
                  <div id="chartdiv"></div>
                  <div class="container-fluid" style="margin-top:-40px;">
                    <div class="row text-center" style="overflow:hidden;">
                      <div class="col-sm-3" style="float: none !important;display: inline-block;">
                        <label class="text-left">Angle:</label>
                        <input class="chart-input" data-property="angle" type="range" min="0" max="60" value="30" step="1"/>	
                      </div>
                      <div class="col-sm-3" style="float: none !important;display: inline-block;">
                        <label class="text-left">Depth:</label>
                        <input class="chart-input" data-property="depth3D" type="range" min="1" max="25" value="10" step="1"/>
                      </div>
                      <div class="col-sm-3" style="float: none !important;display: inline-block;">
                        <label class="text-left">Inner-Radius:</label>
                        <input class="chart-input" data-property="innerRadius" type="range" min="0" max="80" value="0" step="1"/>
                      </div>
                    </div>
                  </div>
                </div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Student Chart</h3> </div>
							<div class="panel-body">
								<div id="areaChart2" class="rad-chart"></div>
							</div>
						</div>
					</div>
   <!-- Info boxes -->
      <!-- <div class="row">
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
          
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="rad-info-box rad-txt-primary">
              <i class="ion ion-ios-people"></i>
              <span class="heading">Total Teacher</span>       
          
           </div>        
        </div>   
      </div> -->
   <!-- /.col -->
    </section>
   <!-- fix for small devices only -->



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




  <div class="row content" id="table1">
    <!--MSK-000132-1-->
    <div class="col-md-12" style="padding: 0;">
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
  </div>
    <!-- Attendance Graph Starts Here -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/c3/0.7.20/c3.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.16.0/d3.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.7.20/c3.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/pie.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
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
          $attendanceQuery = "SELECT MONTH(date) AS month_num, YEAR(date) AS year, COUNT(*) AS attendance_count FROM my_attendance WHERE studId=".$my_index." AND attendance='Present' GROUP BY MONTH(date)";
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
          // console.log(matchFlag);
          if(!matchFlag) {
            x.push(tempDate);
            y.push(0);
          }
        
          return tempDate;
        });
        let data = [x, y];
        // console.log(data);
        let attendanceChart = c3.generate({
          bindto: '#attendanceChart',
          data: {
              x:'Month',
              columns: data,
              order:false,
              type: 'bar',
              color: function (color, d) {
                // console.log(d);
                if(d.value <= 30) {
                  return '#FF0000';
                }else if(d.value > 30 && d.value <= 60) {
                  return '#FFA500';
                }else if(d.value > 60 && d.value <= 100) {
                  return '#00FF00';
                }
              }
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
                  format: '%b-%y',//javascript date format
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
<?php
    $sql2="SELECT type, COUNT(*) AS count FROM user GROUP BY type";
    $result=mysqli_query($conn,$sql2);
    $students = 0;
    $teachers = 0;
    $admins = 0;
    if(mysqli_num_rows($result) > 0){
      while($row=mysqli_fetch_assoc($result)){
        // echo "<pre>";
        // print_r ($row); 
        // echo "</pre>"; 
        if($row['type'] == 'Admin') {
          $admins = $row['count'];
        } else if($row['type'] == 'Student') {
          $students = $row['count'];
        } else if($row['type'] == 'Teacher') {
          $teachers = $row['count'];
        }
      }
    }
?>
  <script>
    // var stuTeaAdminChart = c3.generate({
    //   bindto: '#stuTeaAdminChart',
    //     data: {
    //         columns: [
    //             ['Students', <?php echo $students;?>],
    //             ['Teachers', <?php echo $teachers;?>],
    //             ['Admins', <?php echo $admins;?>]
    //         ],
    //         type : 'pie'
    //     }
    // });

  </script>

<script>

var chart = AmCharts.makeChart( "chartdiv", {
  "type": "pie",
  "theme": "light",
  "dataProvider": [
    {
      "userType": "Students",
      "numberOfUsers": <?php echo $students;?>
    },
    {
      "userType": "Teachers",
      "numberOfUsers": <?php echo $teachers;?>
    },
    {
      "userType": "Admins",
      "numberOfUsers": <?php echo $admins;?>
    }
  ],
  "valueField": "numberOfUsers",
  "titleField": "userType",
  "outlineAlpha": 0.4,
  "depth3D": 15,
  "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
  "angle": 30,
  "export": {
    "enabled": true
  }
} );

$(document).ready(function() {
  // setInterval(() => {
  //   $('#chartdiv').find('a').remove();
  // }, 100);
  // $('#stuTeaAdminChart').find('.container-fluid').css('margin-top', '-40px');
});

jQuery( '.chart-input' ).off().on( 'input change', function() {
  var property = jQuery( this ).data( 'property' );
  var target = chart;
  var value = Number( this.value );
  chart.startDuration = 0;

  if ( property == 'innerRadius' ) {
    value += "%";
  }

  target[ property ] = value;
  chart.validateNow();
} );
</script>

</div>
<?php include_once('footer.php'); ?>