<?php
if (!$this->ion_auth->logged_in()) {
    redirect('auth/login');
}
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo.png" type="image/ico" />
        <title>KIDS Development Assessement System</title>

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/bootstrap.min.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/w3.css">

        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/adminlte.min.css">
		
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.min.css">


        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
		
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/highcharts-more.js"></script>
		<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
		<script src="https://code.highcharts.com/modules/exporting.js"></script>
		<script src="https://code.highcharts.com/modules/export-data.js"></script>
		<script src="https://code.highcharts.com/modules/accessibility.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
        <script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>

    </head>
    <body class="hold-transition">
	
        <div class="wrapper">
