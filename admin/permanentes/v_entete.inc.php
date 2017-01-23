<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gaxieu Administration</title>
<?php $infos = GestionAdmin::getUserByMail($_SESSION['membre']); 
?>

        <!-- Bootstrap -->
        <link href="public/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="public/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="public/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="public/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- bootstrap-progressbar -->
        <link href="public/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
        <!-- JQVMap -->
        <link href="public/admin/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
        <!-- bootstrap-daterangepicker -->
        <link href="public/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        
        <!-- Formulaire -->
        <link href="public/admin/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
        <link href="public/admin/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
        <link href="public/admin/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
        <link href="public/admin/vendors/starrr/dist/starrr.css" rel="stylesheet">
        
        <!-- Datatables -->
    <link href="public/admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="public/admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="public/admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="public/admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="public/admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
        
        <!-- Custom Theme Style -->
        <link href="public/admin/build/css/custom.min.css" rel="stylesheet">
    </head>