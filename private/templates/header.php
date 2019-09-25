<!-- Made by Matthijs -->

<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=$file_uri?>css/style.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:800&display=swap" rel="stylesheet"> -->
    <title>Invisual<?php if ($main_route != "home") echo " | " . $main_route;?></title>
</head>
<body>
    <nav>
        <div class="nav_links template__nav-item">
           <a href="/"><img class="logo" src="<?=$file_uri?>img/logo.png" alt="logo"></a>
        </div>

        <div class="nav_rechts template__nav-item ">
            <a class="nav-link" href="/">home</a>
            <a class="nav-link" href="<?=$nav_uri?>projects">projecten</a>
            <a class="nav-link" href="<?=$nav_uri?>shop">diensten</a>
            <a class="nav-link" href="<?=$nav_uri?>contact">contact</a>
        </div>

        <div class="nav_rechts1">
            <input type="checkbox" id="nav-toggle" style="display:none;">
            <label class="nav-toggle-label" for="nav-toggle">
                <span class="nav-toggle-label-span-1"></span>
                <span class="nav-toggle-label-span-2"></span>
                <span class="nav-toggle-label-span-3"></span>
            </label>
            <div class="nav-links-container">
            <a class="nav-link" href="/">home</a>
            <a class="nav-link" href="<?=$nav_uri?>projects">projecten</a>
            <a class="nav-link" href="<?=$nav_uri?>shop">diensten</a>
            <a class="nav-link" href="<?=$nav_uri?>contact">contact</a>
            </div>
        </div>
    </nav>
    <header>

    </header>