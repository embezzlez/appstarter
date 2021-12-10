<!DOCTYPE html>
<html  lang="en">
<head>
	<meta charset="utf-8">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://badyouth.net/m.png" type="image/x-icon">
	<title>:: BadPanel ::</title>
</head>
<body class="bg-gray-100" id="ryu">
<style>
    input[type="radio"] + label span {
        transition: background .2s,
        transform .2s;
    }

    input[type="radio"] + label span:hover,
    input[type="radio"] + label:hover span{
        transform: scale(1.2);
    } 

    input[type="radio"]:checked + label span {
        background-color: #3490DC; //bg-blue
        box-shadow: 0px 0px 0px 2px white inset;
    }

    input[type="radio"]:checked + label{
        color: #3490DC; //text-blue
    }
    .loader {
	border-top-color: #3498db;
	-webkit-animation: spinner 1.5s linear infinite;
	animation: spinner 1.5s linear infinite;
}

@-webkit-keyframes spinner {
	0% {
		-webkit-transform: rotate(0deg);
	}
	100% {
		-webkit-transform: rotate(360deg);
	}
}

@keyframes spinner {
	0% {
		transform: rotate(0deg);
	}
	100% {
		transform: rotate(360deg);
	}
}


</style>

	<div class="container w-2/3 mx-auto bg-gray-500 p-10 min-h-screen h-auto shadow-inner rounded-lg">
    <header class="flex flex-row w-full items-center">
        <img src="https://badyouth.net/m.png" class="w-24 animate-bounce">
        <hgroup class="ml-8">
            <h1 class="text-xl font-bold tracking-widest animate-pulse">Embezzle</h1>
            <h4><?=getApp();?></h4>
        </hgroup>
    </header>
    <nav class="w-full flex flex-row my-5 bg-gray-100 rounded-lg shadow-lg">
        <a href="#" onclick="goTo('home','Home - RyuPanel' , '?rp=home');" class="hover:bg-blue-500 hover:rounded-l-lg rounded-l-lg py-3 px-6 bg-blue-400">Home</a>
        <a href="#" onclick="goTo('configuration','Configuration - RyuPanel' ,'?rp=configuration');" class="hover:bg-yellow-500 py-3 px-6 bg-yellow-400">Config</a>
        <a href="?rp=reset" class="hover:bg-red-500 py-3 px-6 bg-red-400">Reset</a>
        <a href="#" onclick="goTo('statistic','Statistic - RyuPanel','?rp=statistic');" class="hover:bg-green-500 py-3 px-6 bg-green-400">Statistic</a>
        <a href="?rp=visit" class="hover:bg-indigo-500 py-3 px-6 bg-indigo-400">Visit</a>
        <a href="?rp=logout" class=" hover:bg-red-700 py-3 px-6 text-red-500 ">Logout</a>
    </nav>
    <div wire:loading class="fixed top-0 left-0 right-0 bottom-0 w-full h-screen z-50 overflow-hidden bg-gray-700 opacity-75 flex flex-col items-center justify-center" id="loader" style="display:none">
	<div class="loader ease-linear rounded-full border-4 border-t-4 border-gray-200 h-12 w-12 mb-4"></div>
	<h2 class="text-center text-white text-xl font-semibold">Loading...</h2>
	<p class="w-1/3 text-center text-white">This may take a few seconds, please don't close this page.</p>
</div>