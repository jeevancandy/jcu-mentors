<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<title>Material Design Lite</title>

	<!-- Add to homescreen for Chrome on Android -->
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="icon" sizes="192x192" href="images/android-desktop.png">

	<!-- Add to homescreen for Safari on iOS -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-title" content="Material Design Lite">
	<link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

	<!-- Tile icon for Win8 (144x144 + tile color) -->
	<meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
	<meta name="msapplication-TileColor" content="#3372DF">

	<link rel="shortcut icon" href="images/favicon.png">

	<!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
	<!--
	<link rel="canonical" href="http://www.example.com/">
	-->

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<style>
		#view-source {
			position: fixed;
			display: block;
			right: 0;
			bottom: 0;
			margin-right: 40px;
			margin-bottom: 40px;
			z-index: 900;
		}
	</style>
</head>
<body>
<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
	<header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
		<div class="mdl-layout__header-row">
			<span class="mdl-layout-title">Spread the Wings</span>
			<div class="mdl-layout-spacer"></div>
			<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
				<i class="material-icons">more_vert</i>
			</button>
			<ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
				<li class="mdl-menu__item"><a href="{{ route("sample.login") }}">About</a></li>
				<li class="mdl-menu__item">Contact</li>
				<li class="mdl-menu__item">Legal information</li>
			</ul>
		</div>
	</header>
	<div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
		<header class="demo-drawer-header">
			<div style="padding: 20px; margin-left: 10px;">
				<div style="display: inline-block; margin-top: -10px">Hi, Jeevan</div>
			</div>
		</header>
		<nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800" style="height: 100%">
			<a class="mdl-navigation__link" href="{{ route("sample.my-profile") }}"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i> My Profile</a>
			<a class="mdl-navigation__link" href="{{ route("sample.my-mentee") }}"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i> Mentee</a>
		</nav>
	</div>
	<main class="mdl-layout__content mdl-color--grey-100">
		<div class="mdl-grid demo-content">
			<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
			<!------ Include the above in your HEAD tag ---------->

			<div class="container">
				<h2 class="page-header" style="margin-top: 10px">Mentee <span style="font-size: 16px">(+91 8667663517)</span></h2>
				<table class="mdl-data-table mdl-js-data-table">
					<thead>
					<tr>
						<th class="mdl-data-table__cell--non-numeric">Call Log</th>
						<th class="mdl-data-table__cell--non-numeric">Notes</th>
						<th>Recording</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td class="mdl-data-table__cell--non-numeric">29th May 2019<br>10:00 AM</td>
						<td class="mdl-data-table__cell--non-numeric" style="color: green">Introduction<br>with the girl</td>
						<td><a href="">Link</a></td>
					</tr>
					<tr>
						<td class="mdl-data-table__cell--non-numeric">29th May 2019<br>10:00 AM</td>
						<td class="mdl-data-table__cell--non-numeric" style="color: green">She shared her<br> day at school</td>
						<td><a href="">Link</a></td>
					</tr>
					<tr>
						<td class="mdl-data-table__cell--non-numeric">29th May 2019<br>10:00 AM</td>
						<td class="mdl-data-table__cell--non-numeric" style="color: green">She started<br>expressing her<br>day to day<br>problems</td>
						<td><a href="">Link</a></td>
					</tr>
					<tr>
						<td class="mdl-data-table__cell--non-numeric">29th May 2019<br>10:00 AM</td>
						<td class="mdl-data-table__cell--non-numeric" style="color: green">Gave some tips<br>on how to<br>improve her<br> English</td>
						<td><a href="">Link</a></td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
	</main>
</div>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>