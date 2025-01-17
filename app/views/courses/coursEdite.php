<?php
session_start();
require __DIR__ . "/../../controllers/CourseController.php";
require __DIR__ . "/../../controllers/categorei.php";
require __DIR__ . "/../../controllers/TagController.php";
require __DIR__ . "/../../controllers/CoursDocument.php";
require __DIR__ . "/../../controllers/CoursVideo.php";

$tags = new Tags();

$tag =  $tags->getTags();
$idE = $_SESSION["user_id"];
$idC = $_GET["id"];
$categorei = new Categorie();

$categoreis = $categorei->getCategories();
$coursVideo = new CoursVideo();
$coursDecoment = new CoursDocument();
$coursDecoment->setid($idE);
$coursDecoment->setid($idE);
$resultVideo = $coursVideo->modiferCours($idC);
$Document = $coursDecoment->modiferCours($idC);


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ModiferVidio'])) {

    $title = htmlspecialchars($_POST['Title']);
    $slug = htmlspecialchars($_POST['Slug']);
    $Categorei = $_POST['Categorei'];
    $Tags = $_POST['Tags'];
    $About = htmlspecialchars($_POST['About']);
    $centenu = $_POST['centenu_video'];
    $image = $_FILES['image'];
    $coursVideo->setid($idE);
    $coursVideo->setTitre($title);
    $coursVideo->setSlgun($slug);
    $coursVideo->setDescription($About);
    $coursVideo->setVideo($centenu);
    $coursVideo->setcategorie_id($Categorei);
    $coursVideo->setTags_id($Tags);
    $coursVideo->setImage($image);
    $coursVideo->Modifer($idC);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ModifierDocument'])) {

    $title = htmlspecialchars($_POST['Title']);
    $slug = htmlspecialchars($_POST['Slug']);
    $Categorei = $_POST['Categorei'];
    $Tags = $_POST['Tags'];
    var_dump($_POST['Tags']);
    $About = htmlspecialchars($_POST['About']);
    $image = $_FILES['image'];

    $centenu = $_FILES['centenu_pdf'];
    var_dump($centenu);
    $coursDecoment->setid($idE);
    $coursDecoment->setTitre($title);
    $coursDecoment->setSlgun($slug);
    $coursDecoment->setDescription($About);
    $coursDecoment->setDocument($centenu);
    $coursDecoment->setcategorie_id($Categorei);
    var_dump($Categorei);
    $coursDecoment->setTags_id($Tags);
    $coursDecoment->setImage($image);
    $coursDecoment->Modifier($idC);
}

?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.themewin.com/edurcok-preview-tailwind/edurock/pages/dashboards/create-course.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jan 2025 14:27:41 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-Details | Edurock - Education LMS Template</title>
    <link
        rel="shortcut icon"
        type="image/x-icon"
        href="../assets/images/favicon.ico">
    <!-- link stylesheet -->
    <link rel="stylesheet" href="../assets/css/icofont.min.css">
    <link rel="stylesheet" href="../assets/css/popup.css">

    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../assets/css/video-modal.css">

    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body
    class="relative font-inter font-normal text-base leading-[1.8] bg-bodyBg dark:bg-bodyBg-dark">
    <!-- preloader
    <div
        class="preloader flex fixed top-0 left-0 h-screen w-full items-center justify-center z-xxl bg-whiteColor opacity-100 visible transition-all duration-700">
        
        <div
            class="w-90px h-90px border-5px border-t-blue border-r-blue border-b-blue-light border-l-blue-light rounded-full animate-spin-infinit"></div>
        <div class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2">
            <img src="../assets/images/pre.png" alt="" class="h-10 w-10 block">
        </div>
    </div> -->
    <!-- theme fixed shadow -->
    <div>
        <div class="fixed-shadow left-[-250px]"></div>
        <div class="fixed-shadow right-[-250px]"></div>
    </div>

    <!-- theme controller -->
    <div
        class="fixed top-[100px] 2xl:top-[300px] transition-all duration-300 right-[-50px] hover:right-0 z-xl">
        <button
            class="theme-controller w-90px h-10 bg-primaryColor dark:bg-whiteColor-dark rounded-l-lg2 text-whiteColor px-10px flex items-center dark:shadow-theme-controller">
            <!-- dark -->
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="mr-10px w-5 block dark:hidden"
                viewBox="0 0 512 512">
                <path
                    d="M160 136c0-30.62 4.51-61.61 16-88C99.57 81.27 48 159.32 48 248c0 119.29 96.71 216 216 216 88.68 0 166.73-51.57 200-128-26.39 11.49-57.38 16-88 16-119.29 0-216-96.71-216-216z"
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="32"></path>
            </svg>
            <span class="text-base block dark:hidden">Dark</span>
            <!-- light -->
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="hidden mr-10px w-5 dark:block"
                viewBox="0 0 512 512">
                <path
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-miterlimit="10"
                    stroke-width="32"
                    d="M256 48v48M256 416v48M403.08 108.92l-33.94 33.94M142.86 369.14l-33.94 33.94M464 256h-48M96 256H48M403.08 403.08l-33.94-33.94M142.86 142.86l-33.94-33.94"></path>
                <circle
                    cx="256"
                    cy="256"
                    r="80"
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-miterlimit="10"
                    stroke-width="32"></circle>
            </svg>
            <span class="text-base hidden dark:block">Light</span>
        </button>
    </div>
    <!-- scroll up button -->
    <div>
        <button
            class="scroll-up w-50px h-50px leading-50px text-center text-primaryColor bg-white hover:text-whiteColor hover:bg-primaryColor rounded-full fixed right-5 bottom-[60px] shadow-scroll-up z-medium text-xl dark:text-whiteColor dark:bg-primaryColor dark:hover:text-whiteColor-dark hidden">
            <i class="icofont-rounded-up"></i>
        </button>
    </div>
    <!--======= Header area start =======-->
    <header>
        <!-- header top start -->
        <div class="bg-blackColor2 dark:bg-lightGrey10-dark hidden lg:block">
            <div
                class="container 3xl:container-secondary-lg 4xl:container mx-auto text-whiteColor text-size-12 xl:text-sm py-5px xl:py-9px">
                <div class="flex justify-between items-center">
                    <div>
                        <p>Call Us: +1 800 123 456 789 - Mail Us: Itcroc@mail.com</p>
                    </div>
                    <div class="flex gap-37px items-center">
                        <div>
                            <p>
                                <i
                                    class="icofont-location-pin text-primaryColor text-size-15 mr-5px"></i>
                                <span>684 West College St. Sun City, USA</span>
                            </p>
                        </div>
                        <div>
                            <!-- header social list -->
                            <ul class="flex gap-13px text-size-15">
                                <li>
                                    <a class="hover:text-primaryColor" href="#"><i class="icofont-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="hover:text-primaryColor" href="#"><i class="icofont-twitter"></i></a>
                                </li>
                                <li>
                                    <a class="hover:text-primaryColor" href="#"><i class="icofont-instagram"></i></a>
                                </li>
                                <li>
                                    <a class="hover:text-primaryColor" href="#"><i class="icofont-youtube-play"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header top end -->

        <!-- navbar start -->
        <div
            class="transition-all duration-500 sticky-header z-medium dark:bg-whiteColor-dark">
            <nav>
                <div
                    class="py-15px lg:py-0 px-15px lg:container 3xl:container-secondary-lg 4xl:container mx-auto relative">
                    <div class="grid grid-cols-2 lg:grid-cols-12 items-center gap-15px">
                        <!-- navbar left -->
                        <div class="lg:col-start-1 lg:col-span-2">
                            <a href="../index.html" class="block"><img
                                    src="../assets/images/logo/logo_1.png"
                                    alt="log"
                                    class="w-logo-sm lg:w-auto py-2"></a>
                        </div>
                        <!-- Main menu -->
                        <div class="hidden lg:block lg:col-start-3 lg:col-span-7">
                            <ul class="nav-list flex justify-center">
                                <li class="nav-item group">
                                    <a
                                        href="#"
                                        class="px-5 lg:px-10px 2xl:px-15px 3xl:px-5 py-10 lg:py-5 2xl:py-30px 3xl:py-10 leading-sm 2xl:leading-lg text-base lg:text-sm 2xl:text-base font-semibold block group-hover:text-primaryColor dark:text-whiteColor">
                                        Demos
                                        <i class="icofont-rounded-down"></i>
                                    </a>
                                    <!-- dropdown menu -->
                                    <div
                                        class="dropdown absolute left-0 translate-y-10 z-medium hidden opacity-0"
                                        style="transition: 0.3s">
                                        <div
                                            class="tab container 3xl:container2-lg 4xl:container shadow-dropdown px-30px mx-auto xl:px-30px py-15px max-h-dropdown 3xl:h-2000 xl:overflow-y-scroll rounded-standard bg-white dark:bg-whiteColor-dark">
                                            <div
                                                class="tab-links grid grid-cols-2 gap-22px text-blackColor text-lg font-semibold font-hind">
                                                <button
                                                    class="py-3 hover:text-primaryColor dark:text-whiteColor dark:hover:text-primaryColor bg-white dark:bg-whiteColor-dark dark:hover:bg-whiteColor-dark hover:bg-white relative group/btn shadow-bottom hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard">
                                                    <span
                                                        class="absolute w-full h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"></span>

                                                    Light
                                                </button>
                                                <button
                                                    class="py-3 hover:text-primaryColor dark:hover:text-primaryColor dark:text-whiteColor bg-lightGrey7 dark:bg-lightGrey7-dark hover:bg-white dark:hover:bg-whiteColor-dark relative group/btn hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard">
                                                    <span
                                                        class="absolute w-0 h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"></span>

                                                    Dark
                                                </button>
                                            </div>

                                            <div class="tab-contents">
                                                <!-- light Demos-->
                                                <div
                                                    id="light-demos"
                                                    class="block opacity-100 transition-opacity duration-150 ease-linear">
                                                    <ul
                                                        id="light-list"
                                                        class="grid grid-cols-5 gap-30px pt-30px pb-15px">
                                                        <li>
                                                            <a
                                                                href="../index.html"
                                                                class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"><img
                                                                    src="../assets/images/mega/home-1.png"
                                                                    class="w-full"
                                                                    alt="">
                                                                <span
                                                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor">
                                                                    Home (Default)
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-2.html"
                                                                class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"><img
                                                                    src="../assets/images/mega/home-2.png"
                                                                    alt="">
                                                                <span
                                                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor">
                                                                    Home (Elegant)
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-3.html"
                                                                class="overflow-hidden group/light relative block box-border shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard"><img
                                                                    src="../assets/images/mega/home-3.png"
                                                                    alt=""
                                                                    class="w-full">
                                                                <span
                                                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor">
                                                                    Home (Classic)
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-4.html"
                                                                class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"><img
                                                                    src="../assets/images/mega/home-4.png"
                                                                    alt="">
                                                                <span
                                                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor">
                                                                    Home (Classic LMS)
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-5.html"
                                                                class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"><img
                                                                    src="../assets/images/mega/home-5.png"
                                                                    alt="">
                                                                <span
                                                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor">
                                                                    Home (Online Course)
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-6.html"
                                                                class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-5px"><img
                                                                    src="../assets/images/mega/home-6.png"
                                                                    alt="">
                                                                <span
                                                                    class="bg-secondaryColor text-xs px-15px py-5px leading-1 text-white absolute top-5px left-5px rounded-standard">New</span>
                                                                <span
                                                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor">
                                                                    Home (Marketplace)
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-7.html"
                                                                class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"><img
                                                                    src="../assets/images/mega/home-7.png"
                                                                    alt="">
                                                                <span
                                                                    class="bg-secondaryColor text-xs px-15px py-5px leading-1 text-white absolute top-5px left-5px rounded-standard">New</span>
                                                                <span
                                                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor">
                                                                    Home (University)
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-8.html"
                                                                class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"><img
                                                                    src="../assets/images/mega/home-8.png"
                                                                    alt="">
                                                                <span
                                                                    class="bg-secondaryColor text-xs px-15px py-5px leading-1 text-white absolute top-5px left-5px rounded-standard">New</span>
                                                                <span
                                                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor">
                                                                    Home (eCommerce)
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-9.html"
                                                                class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"><img
                                                                    src="../assets/images/mega/home-9.png"
                                                                    alt="">
                                                                <span
                                                                    class="bg-secondaryColor text-xs px-15px py-5px leading-1 text-white absolute top-5px left-5px rounded-standard">New</span>
                                                                <span
                                                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor">
                                                                    Home (Kindergarten)
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-10.html"
                                                                class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"><img
                                                                    src="../assets/images/mega/home-10.png"
                                                                    alt="">
                                                                <span
                                                                    class="bg-secondaryColor text-xs px-15px py-5px leading-1 text-white absolute top-5px left-5px rounded-standard">New</span>
                                                                <span
                                                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor">
                                                                    Home (Machine Learning)
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-11.html"
                                                                class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"><img
                                                                    src="../assets/images/mega/home-11.png"
                                                                    alt="">
                                                                <span
                                                                    class="bg-secondaryColor text-xs px-15px py-5px leading-1 text-white absolute top-5px left-5px rounded-standard">New</span>
                                                                <span
                                                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor">
                                                                    Home (Single Course)
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="#"
                                                                class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"><img
                                                                    src="../assets/images/mega/coming.png"
                                                                    alt="">
                                                                <span
                                                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor">
                                                                    Layout Coming Soon 1
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="#"
                                                                class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"><img
                                                                    src="../assets/images/mega/coming.png"
                                                                    alt="">
                                                                <span
                                                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor">
                                                                    Layout Coming Soon 2
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="#"
                                                                class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"><img
                                                                    src="../assets/images/mega/coming.png"
                                                                    alt="">
                                                                <span
                                                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor">
                                                                    Layout Coming Soon 3
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="#"
                                                                class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"><img
                                                                    src="../assets/images/mega/coming.png"
                                                                    alt="">
                                                                <span
                                                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor">
                                                                    Layout Coming Soon 4
                                                                </span></a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <!-- dark demos-->
                                                <div
                                                    id="dark-demos"
                                                    class="hidden opacity-0 transition-opacity duration-150 ease-linear">
                                                    <ul
                                                        id="dark-list"
                                                        class="grid grid-cols-5 gap-30px pt-30px pb-15px">
                                                        <li>
                                                            <a
                                                                href="../index-dark.html"
                                                                class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"><img
                                                                    src="../assets/images/mega/home-1-dark.png"
                                                                    class="w-full"
                                                                    alt="">
                                                                <span
                                                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor">
                                                                    Home (Default)
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-2-dark.html"
                                                                class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"><img
                                                                    src="../assets/images/mega/home-2-dark.png"
                                                                    alt="">
                                                                <span
                                                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor">
                                                                    Home (Elegant)
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-3-dark.html"
                                                                class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"><img
                                                                    src="../assets/images/mega/home-3-dark.png"
                                                                    alt="">
                                                                <span
                                                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor">
                                                                    Home (Classic)
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-4-dark.html"
                                                                class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"><img
                                                                    src="../assets/images/mega/home-4-dark.png"
                                                                    alt="">
                                                                <span
                                                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor">
                                                                    Home (Classic LMS)
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-5-dark.html"
                                                                class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"><img
                                                                    src="../assets/images/mega/home-5-dark.png"
                                                                    alt="">
                                                                <span
                                                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor">
                                                                    Home (Online Course)
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-6-dark.html"
                                                                class="overflow-hidden group relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-5px"><img
                                                                    src="../assets/images/mega/home-6-dark.png"
                                                                    alt="">
                                                                <span
                                                                    class="bg-secondaryColor text-xs px-15px py-5px leading-1 text-white absolute top-5px left-5px rounded-standard">New</span>
                                                                <span
                                                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor">
                                                                    Home (Marketplace)
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-7-dark.html"
                                                                class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"><img
                                                                    src="../assets/images/mega/home-7-dark.png"
                                                                    alt="">
                                                                <span
                                                                    class="bg-secondaryColor text-xs px-15px py-5px leading-1 text-white absolute top-5px left-5px rounded-standard">New</span>
                                                                <span
                                                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor">
                                                                    Home (University)
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-8-dark.html"
                                                                class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"><img
                                                                    src="../assets/images/mega/home-8-dark.png"
                                                                    alt="">
                                                                <span
                                                                    class="bg-secondaryColor text-xs px-15px py-5px leading-1 text-white absolute top-5px left-5px rounded-standard">New</span>
                                                                <span
                                                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor">
                                                                    Home (eCommerce)
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-9-dark.html"
                                                                class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"><img
                                                                    src="../assets/images/mega/home-9-dark.png"
                                                                    alt="">
                                                                <span
                                                                    class="bg-secondaryColor text-xs px-15px py-5px leading-1 text-white absolute top-5px left-5px rounded-standard">New</span>
                                                                <span
                                                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor">
                                                                    Home (Kindergarten)
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-10-dark.html"
                                                                class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"><img
                                                                    src="../assets/images/mega/home-10-dark.png"
                                                                    alt="">
                                                                <span
                                                                    class="bg-secondaryColor text-xs px-15px py-5px leading-1 text-white absolute top-5px left-5px rounded-standard">New</span>
                                                                <span
                                                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor">
                                                                    Home (Machine Learning)
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-11-dark.html"
                                                                class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"><img
                                                                    src="../assets/images/mega/home-11-dark.png"
                                                                    alt="">
                                                                <span
                                                                    class="bg-secondaryColor text-xs px-15px py-5px leading-1 text-white absolute top-5px left-5px rounded-standard">New</span>
                                                                <span
                                                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor">
                                                                    Home (Single Course)
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-11-dark.html"
                                                                class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"><img
                                                                    src="../assets/images/mega/coming-dark.png"
                                                                    alt="">
                                                                <span
                                                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor">
                                                                    Layout Coming Soon 1
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="#"
                                                                class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"><img
                                                                    src="../assets/images/mega/coming-dark.png"
                                                                    alt="">
                                                                <span
                                                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor">
                                                                    Layout Coming Soon 2
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="#"
                                                                class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"><img
                                                                    src="../assets/images/mega/coming-dark.png"
                                                                    alt="">
                                                                <span
                                                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor">
                                                                    Layout Coming Soon 3
                                                                </span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="#"
                                                                class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"><img
                                                                    src="../assets/images/mega/coming-dark.png"
                                                                    alt="">
                                                                <span
                                                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor">
                                                                    Layout Coming Soon 4
                                                                </span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item group">
                                    <a
                                        href="#"
                                        class="px-5 lg:px-10px 2xl:px-15px 3xl:px-5 py-10 lg:py-5 2xl:py-30px 3xl:py-10 leading-sm 2xl:leading-lg text-base lg:text-sm 2xl:text-base font-semibold block group-hover:text-primaryColor dark:text-whiteColor">
                                        Pages
                                        <i class="icofont-rounded-down"></i>
                                    </a>
                                    <!-- dropdown menu -->
                                    <div
                                        class="dropdown absolute left-0 translate-y-10 z-medium hidden opacity-0"
                                        style="transition: 0.3s">
                                        <div
                                            class="container 3xl:container2-lg 4xl:container w-2000 shadow-dropdown px-30px mx-auto xl:px-30px py-30px rounded-standard bg-white dark:bg-whiteColor-dark">
                                            <div class="grid grid-cols-4 gap-x-30px">
                                                <div>
                                                    <h3
                                                        class="text-lg text-blackColor font-semibold border-b border-borderColor dark:text-blackColor-dark p-10px mb-10px">
                                                        Get Started 1
                                                    </h3>
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="../about.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">About
                                                                <span
                                                                    class="text-size-12 font-semibold text-primaryColor bg-whitegrey3 px-15px py-5px ml-5px rounded">Sale Everything</span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../about-dark.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">About (Dark)
                                                                <span
                                                                    class="text-size-12 font-semibold text-secondaryColor bg-whitegrey3 px-15px py-5px ml-5px rounded">New</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../blog.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Blog</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../blog-dark.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Blog (Dark)</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../blog-details.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Blog Details</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../blog-details-dark.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Blog Details (Dark)</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h3
                                                        class="text-lg text-blackColor font-semibold border-b border-borderColor dark:text-blackColor-dark p-10px mb-10px">
                                                        Get Started 2
                                                    </h3>
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="../error.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Error</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../error-dark.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Error (Dark)
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../event-details.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Event Details</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../zoom/zoom-meetings.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Zoom
                                                                <span
                                                                    class="text-size-12 font-semibold text-primaryColor bg-whitegrey3 px-15px py-5px ml-5px rounded">Online Call</span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../zoom/zoom-meetings-dark.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Zoom Meeting (Dark)</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../zoom/zoom-meeting-details.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Zoom Meeting Details
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h3
                                                        class="text-lg text-blackColor font-semibold border-b border-borderColor dark:text-blackColor-dark p-10px mb-10px">
                                                        Get Started 3
                                                    </h3>
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="../zoom/zoom-meeting-details-dark.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Meeting Details (Dark)</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../login.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Login
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../login-dark.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Login (Dark)</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../maintenance.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Maintenance</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../maintenance-dark.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Maintenance (Dark)</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="#"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Terms & Condition</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h3
                                                        class="text-lg text-blackColor font-semibold border-b border-borderColor dark:text-blackColor-dark p-10px mb-10px">
                                                        Get Started 4
                                                    </h3>
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="#"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Terms & Condition (Dark)</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../contact.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Contact
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../contact-dark.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Contact (Dark)</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="#"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Success Stories</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="#"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Success Stories (Dark)</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="#"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Work Policy</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- dropdown banner -->
                                            <div class="pt-30px">
                                                <img
                                                    src="../assets/images/mega/mega_menu_2.png"
                                                    alt="Mega Menu"
                                                    class="w-full rounded-standard">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item group">
                                    <a
                                        href="#"
                                        class="px-5 lg:px-10px 2xl:px-15px 3xl:px-5 py-10 lg:py-5 2xl:py-30px 3xl:py-10 leading-sm 2xl:leading-lg text-base lg:text-sm 2xl:text-base font-semibold block group-hover:text-primaryColor dark:text-whiteColor">
                                        Courses
                                        <i class="icofont-rounded-down"></i>
                                    </a>
                                    <!-- dropdown menu -->
                                    <div
                                        class="dropdown absolute left-0 translate-y-10 z-medium hidden opacity-0"
                                        style="transition: 0.3s">
                                        <div
                                            class="container 3xl:container2-lg 4xl:container w-2000 shadow-dropdown px-30px mx-auto xl:px-30px py-30px rounded-standard bg-white dark:bg-whiteColor-dark">
                                            <div class="grid grid-cols-4 gap-x-30px">
                                                <div>
                                                    <h3
                                                        class="text-lg text-blackColor font-semibold border-b border-borderColor dark:text-blackColor-dark p-10px mb-10px">
                                                        Get Started 1
                                                    </h3>
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="../course.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Grid
                                                                <span
                                                                    class="text-size-12 font-semibold text-primaryColor bg-whitegrey3 px-15px py-5px ml-5px rounded">All Courses</span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../course-dark.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Course Grid (Dark)
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../course-dark.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Course Grid</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../course-grid-dark.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Course Grid (Dark)</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../course-list.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Course List</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../course-list-dark.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Course List (Dark)</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h3
                                                        class="text-lg text-blackColor font-semibold border-b border-borderColor dark:text-blackColor-dark p-10px mb-10px">
                                                        Get Started 2
                                                    </h3>
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="../course-details.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Course Details</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../course-details-dark.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Course Details (Dark)
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../course-details-2.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Course Details 2</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../course-details-2-dark.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Details 2 (Dark)
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../course-details-3.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">
                                                                Coures Details 3</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../course-details-3-dark.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Details 3 (Dark)
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h3
                                                        class="text-lg text-blackColor font-semibold border-b border-borderColor dark:text-blackColor-dark p-10px mb-10px">
                                                        Get Started 3
                                                    </h3>
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="become-an-instructor.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Become An Instructor</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="create-course.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Careate Course
                                                                <span
                                                                    class="text-size-12 font-semibold text-primaryColor bg-whitegrey3 px-15px py-5px rounded">Career</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../instructor.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Instructor</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../instructor-dark.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Instructor (Dark)</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../instructor-details.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Instructor Details</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../lesson.html"
                                                                class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Course Lesson<span
                                                                    class="text-size-12 font-semibold text-secondaryColor bg-whitegrey3 px-15px py-5px ml-5px rounded">New</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- dropdown banner -->
                                                <div>
                                                    <img
                                                        src="../assets/images/mega/mega_menu_1.png"
                                                        alt="Mega Menu"
                                                        class="w-full rounded-standard">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item group relative">
                                    <a
                                        href="instructor-dashboard.html"
                                        class="px-5 lg:px-10px 2xl:px-15px 3xl:px-5 py-10 lg:py-5 2xl:py-30px 3xl:py-10 leading-sm 2xl:leading-lg text-base lg:text-sm 2xl:text-base font-semibold block group-hover:text-primaryColor dark:text-whiteColor">
                                        Dashboard
                                        <i class="icofont-rounded-down"></i>
                                    </a>
                                    <!-- dropdown menu -->
                                    <div
                                        class="dropdown absolute left-0 translate-y-10 z-medium hidden opacity-0"
                                        style="transition: 0.3s">
                                        <div
                                            class="shadow-dropdown max-w-dropdown2 w-2000 py-14px rounded-standard bg-white dark:bg-whiteColor-dark">
                                            <ul>
                                                <li class="relative group/nested">
                                                    <a
                                                        href="admin-dashboard.html"
                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg flex justify-between items-center dark:bg-whiteColor-dark dark:text-contentColor-dark dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Admin <i class="icofont-rounded-right"></i>
                                                    </a>

                                                    <!-- nested dropdown menu -->
                                                    <!-- dropdown menu -->
                                                    <div
                                                        class="nested-dropdown absolute left-full top-0 z-50 hidden opacity-0 group-hover/nested:block group-hover/nested:opacity-100"
                                                        style="transition: 0.3s">
                                                        <div
                                                            class="shadow-dropdown max-w-dropdown2 w-2000 py-14px rounded-standard bg-white dark:bg-whiteColor-dark">
                                                            <ul>
                                                                <li>
                                                                    <a
                                                                        href="admin-dashboard.html"
                                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Admin Dashboard
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="admin-profile.html"
                                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Admin Profile
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="admin-message.html"
                                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Message</a>
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="admin-course.html"
                                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Courses
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="admin-reviews.html"
                                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Review</a>
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="admin-quiz-attempts.html"
                                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Admin Quiz</a>
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="admin-settings.html"
                                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Setting</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="relative group/nested">
                                                    <a
                                                        href="instructor-dashboard.html"
                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg flex justify-between items-center dark:bg-whiteColor-dark dark:text-contentColor-dark dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Instructor <i class="icofont-rounded-right"></i>
                                                    </a>
                                                    <!-- nested dropdown menu -->
                                                    <!-- dropdown menu -->
                                                    <div
                                                        class="nested-dropdown absolute left-full top-0 z-50 hidden opacity-0 group-hover/nested:block group-hover/nested:opacity-100"
                                                        style="transition: 0.3s">
                                                        <div
                                                            class="shadow-dropdown max-w-dropdown2 w-2000 py-14px rounded-standard bg-white dark:bg-whiteColor-dark">
                                                            <ul>
                                                                <li>
                                                                    <a
                                                                        href="instructor-dashboard.html"
                                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Ins. Dashboard
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="instructor-profile.html"
                                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Ins. Profile
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="instructor-message.html"
                                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Message</a>
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="instructor-wishlist.html"
                                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Wishlist
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="instructor-reviews.html"
                                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Review</a>
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="instructor-my-quiz-attempts.html"
                                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">My Quiz</a>
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="instructor-order-history.html"
                                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Order History</a>
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="instructor-course.html"
                                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">My Courses</a>
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="instructor-announcments.html"
                                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Announcements</a>
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="instructor-quiz-attempts.html"
                                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Quiz Attempts</a>
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="instructor-assignments.html"
                                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Assignment</a>
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="instructor-settings.html"
                                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Settings</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="relative group/nested">
                                                    <a
                                                        href="student-dashboard.html"
                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg flex justify-between items-center dark:bg-whiteColor-dark dark:text-contentColor-dark dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor">Student <i class="icofont-rounded-right"></i></a>
                                                    <!-- nested dropdown menu -->
                                                    <!-- dropdown menu -->
                                                    <div
                                                        class="nested-dropdown absolute left-full top-0 z-50 hidden opacity-0 group-hover/nested:block group-hover/nested:opacity-100"
                                                        style="transition: 0.3s">
                                                        <div
                                                            class="shadow-dropdown max-w-dropdown2 w-2000 py-14px rounded-standard bg-white dark:bg-whiteColor-dark">
                                                            <ul>
                                                                <li>
                                                                    <a
                                                                        href="student-dashboard.html"
                                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Dashboard
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="student-profile.html"
                                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Profile
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="student-message.html"
                                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Message</a>
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="student-enrolled-courses.html"
                                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Enrolled Courses
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="student-wishlist.html"
                                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Wishlist
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="student-reviews.html"
                                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Review</a>
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="student-my-quiz-attempts.html"
                                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">My Quiz</a>
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="student-assignments.html"
                                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Assignment</a>
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        href="student-settings.html"
                                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Setting</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item group relative">
                                    <a
                                        href="../ecommerce/shop.html"
                                        class="px-5 lg:px-10px 2xl:px-15px 3xl:px-5 py-10 lg:py-5 2xl:py-30px 3xl:py-10 leading-sm 2xl:leading-lg text-base lg:text-sm 2xl:text-base font-semibold block group-hover:text-primaryColor dark:text-whiteColor">
                                        eCommerce
                                        <i class="icofont-rounded-down"></i>
                                    </a>
                                    <!-- dropdown menu -->
                                    <div
                                        class="dropdown absolute left-0 translate-y-10 z-medium hidden opacity-0"
                                        style="transition: 0.3s">
                                        <div
                                            class="shadow-dropdown max-w-dropdown2 w-2000 py-14px rounded-standard bg-white dark:bg-whiteColor-dark">
                                            <ul>
                                                <li>
                                                    <a
                                                        href="../ecommerce/shop.html"
                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Shop
                                                        <span
                                                            class="text-size-12 font-semibold text-primaryColor bg-whitegrey3 px-15px py-5px rounded">Online Store</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="../ecommerce/product-details.html"
                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Product Details
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="../ecommerce/cart.html"
                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Cart</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="../ecommerce/checkout.html"
                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Checkout
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="../ecommerce/wishlist.html"
                                                        class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Wishlist</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- navbar right -->
                        <div class="lg:col-start-10 lg:col-span-3">
                            <ul class="relative nav-list flex justify-end items-center">
                                <li
                                    class="px-5 lg:px-10px 2xl:px-5 lg:py-4 2xl:py-26px 3xl:py-9 group">
                                    <a href="../ecommerce/cart.html" class="relative block"><i
                                            class="icofont-cart-alt text-2xl text-blackColor group-hover:text-secondaryColor transition-all duration-300 dark:text-blackColor-dark"></i>
                                        <span
                                            class="absolute -top-1 2xl:-top-[5px] -right-[10px] lg:right-3/4 2xl:-right-[10px] text-[10px] font-medium text-white dark:text-whiteColor-dark bg-secondaryColor px-1 py-[2px] leading-1 rounded-full z-50 block">3</span></a>
                                    <!-- dropdown menu -->
                                    <div
                                        class="dropdown absolute top-full right-0 lg:right-8 z-medium hidden opacity-0"
                                        style="transition: 0.3s">
                                        <div
                                            class="shadow-dropdown-secodary max-w-dropdown3 w-2000 rounded-standard p-5 bg-white dark:bg-whiteColor-dark">
                                            <ul
                                                class="flex flex-col gap-y-5 pb-5 mb-30px border-b border-borderColor dark:border-borderColor-dark">
                                                <li class="relative flex gap-x-15px items-center">
                                                    <a href="../course-details.html"><img
                                                            src="../assets/images/grid/cart1.jpg"
                                                            alt="photo"
                                                            class="w-card-img py-[3px]"></a>
                                                    <div>
                                                        <a
                                                            href="../course-details.html"
                                                            class="text-sm text-darkblack hover:text-secondaryColor leading-5 block pb-2 capitalize dark:text-darkblack-dark dark:hover:text-secondaryColor">web dictionary</a>
                                                        <p
                                                            class="text-sm text-darkblack leading-5 block pb-5px dark:text-darkblack-dark">
                                                            1 x
                                                            <span class="text-secondaryColor">$ 80.00</span>
                                                        </p>
                                                    </div>

                                                    <button
                                                        class="absolute block top-0 right-0 text-base text-contentColor leading-1 hover:text-secondaryColor dark:text-contentColor-dark dark:hover:text-secondaryColor">
                                                        <i class="icofont-close-line"></i>
                                                    </button>
                                                </li>
                                                <li class="relative flex gap-x-15px items-center">
                                                    <a href="../course-details.html"><img
                                                            src="../assets/images/grid/cart2.jpg"
                                                            alt="photo"
                                                            class="w-card-img py-[3px]"></a>
                                                    <div>
                                                        <a
                                                            href="../course-details.html"
                                                            class="text-sm text-darkblack hover:text-secondaryColor leading-5 block pb-2 capitalize dark:text-darkblack-dark dark:hover:text-secondaryColor">Design Minois</a>
                                                        <p
                                                            class="text-sm text-darkblack leading-5 block pb-5px dark:text-darkblack-dark">
                                                            1 x
                                                            <span class="text-secondaryColor">$ 60.00</span>
                                                        </p>
                                                    </div>

                                                    <button
                                                        class="absolute block top-0 right-0 text-base text-contentColor leading-1 hover:text-secondaryColor dark:text-contentColor-dark dark:hover:text-secondaryColor">
                                                        <i class="icofont-close-line"></i>
                                                    </button>
                                                </li>
                                                <li class="relative flex gap-x-15px items-center">
                                                    <a href="../course-details.html"><img
                                                            src="../assets/images/grid/cart3.jpg"
                                                            alt="photo"
                                                            class="w-card-img py-[3px]"></a>
                                                    <div>
                                                        <a
                                                            href="../course-details.html"
                                                            class="text-sm text-darkblack hover:text-secondaryColor leading-5 block pb-2 capitalize dark:text-darkblack-dark dark:hover:text-secondaryColor">Crash Course</a>
                                                        <p
                                                            class="text-sm text-darkblack leading-5 block pb-5px dark:text-darkblack-dark">
                                                            1 x
                                                            <span class="text-secondaryColor">$ 70.00</span>
                                                        </p>
                                                    </div>

                                                    <button
                                                        class="absolute block top-0 right-0 text-base text-contentColor leading-1 hover:text-secondaryColor dark:text-contentColor-dark dark:hover:text-secondaryColor">
                                                        <i class="icofont-close-line"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                            <!-- total price -->
                                            <div>
                                                <p
                                                    class="text-size-17 text-contentColor dark:text-contentColor-dark pb-5 flex justify-between">
                                                    Total Price:
                                                    <span class="font-bold text-secondaryColor">$ 210.00</span>
                                                </p>
                                            </div>

                                            <!-- action buttons -->
                                            <div class="flex flex-col gap-y-5">
                                                <a
                                                    href="../ecommerce/cart.html"
                                                    class="text-sm font-bold text-contentColor dark:text-contentColor-dark hover:text-whiteColor hover:bg-secondaryColor text-center py-10px border border-secondaryColor">View Cart</a>
                                                <a
                                                    href="../ecommerce/checkout.html"
                                                    class="text-sm font-bold bg-darkblack dark:bg-darkblack-dark text-whiteColor dark:text-whiteColor-dark hover:bg-secondaryColor dark:hover:bg-secondaryColor text-center py-10px">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="hidden lg:block">
                                    <a
                                        href="../login.html"
                                        class="text-size-12 2xl:text-size-15 px-15px py-2 text-blackColor hover:text-whiteColor bg-whiteColor block hover:bg-primaryColor border border-borderColor1 rounded-standard font-semibold mr-[7px] 2xl:mr-15px dark:text-blackColor-dark dark:bg-whiteColor-dark dark:hover:bg-primaryColor dark:hover:text-whiteColor dark:hover:border-primaryColor"><i class="icofont-user-alt-5"></i></a>
                                </li>
                                <li class="hidden lg:block">
                                    <a
                                        href="#"
                                        class="text-size-12 2xl:text-size-15 text-whiteColor bg-primaryColor block border-primaryColor border hover:text-primaryColor hover:bg-white px-15px py-2 rounded-standard dark:hover:bg-whiteColor-dark dark: dark:hover:text-whiteColor">Get Start</a>
                                </li>
                                <li class="block lg:hidden">
                                    <button
                                        class="open-mobile-menu text-3xl text-darkdeep1 hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">
                                        <i class="icofont-navigation-menu"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- navbar end -->

        <!-- mobile menu -->
        <div
            class="mobile-menu w-mobile-menu-sm md:w-mobile-menu-lg fixed top-0 -right-[280px] md:-right-[330px] transition-all duration-500 w-mobile-menu h-full shadow-dropdown-secodary bg-whiteColor dark:bg-whiteColor-dark z-high block lg:hidden">
            <button
                class="close-mobile-menu text-lg bg-darkdeep1 hover:bg-secondaryColor text-white px-[11px] py-[6px] absolute top-0 right-full hidden">
                <i class="icofont icofont-close-line"></i>
            </button>
            <!-- mobile menu wrapper -->
            <div
                class="px-5 md:px-30px pt-5 md:pt-10 pb-50px h-full overflow-y-auto">
                <!-- search input  -->
                <div
                    class="pb-10 border-b border-borderColor dark:border-borderColor-dark">
                    <form
                        class="flex justify-between items-center w-full bg-whitegrey2 dark:bg-whitegrey2-dark px-15px py-[11px]">
                        <input
                            type="text"
                            placeholder="Search entire store..."
                            class="bg-transparent w-4/5 focus:outline-none text-sm text-darkdeep1 dark:text-blackColor-dark">
                        <button
                            class="block text-lg text-darkdeep1 hover:text-secondaryColor dark:text-blackColor-dark dark:hover:text-secondaryColor">
                            <i class="icofont icofont-search-2"></i>
                        </button>
                    </form>
                </div>

                <!-- mobile menu accordions -->
                <div
                    class="pt-8 pb-6 border-b border-borderColor dark:border-borderColor-dark">
                    <ul class="accordion-container">
                        <li class="accordion">
                            <!-- accordion header -->
                            <div class="flex items-center justify-between">
                                <a
                                    class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                    href="../index.html">Home</a>
                                <button class="accordion-controller px-3 py-4">
                                    <span
                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"></span><span
                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-500"></span>
                                </button>
                            </div>
                            <!-- accordion content -->
                            <div
                                class="accordion-content h-0 overflow-hidden transition-all duration-500">
                                <div class="content-wrapper">
                                    <ul class="accordion-container">
                                        <li class="accordion">
                                            <!-- accordion header -->
                                            <div class="flex items-center justify-between">
                                                <a
                                                    href="../index.html"
                                                    class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Home Light</a>
                                                <button class="accordion-controller px-3 py-4">
                                                    <span
                                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"></span><span
                                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-500"></span>
                                                </button>
                                            </div>
                                            <!-- accordion content -->
                                            <div
                                                class="accordion-content h-0 overflow-hidden transition-all duration-500">
                                                <div class="content-wrapper">
                                                    <!-- Dropdown -->
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="../index.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Home (Default)</a>
                                                        </li>

                                                        <li>
                                                            <a
                                                                href="../home-2.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Elegant</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-3.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Classic</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-4.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Classic LMS</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-5.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Online Course</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-6.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Marketplace</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-7.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">University</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-8.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">ECommerce</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-9.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Kindergarten</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-10.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Machine Learning</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-11.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Single Course</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="accordion">
                                            <!-- accordion header -->
                                            <div class="flex items-center justify-between">
                                                <a
                                                    href="../index-dark.html"
                                                    class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Home Dark</a>
                                                <button class="accordion-controller px-3 py-4">
                                                    <span
                                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"></span><span
                                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-500"></span>
                                                </button>
                                            </div>
                                            <!-- accordion content -->
                                            <div
                                                class="accordion-content h-0 overflow-hidden transition-all duration-500">
                                                <div class="content-wrapper">
                                                    <!-- Dropdown -->
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="../index-dark.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Home Default (Dark)</a>
                                                        </li>

                                                        <li>
                                                            <a
                                                                href="../home-2-dark.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Elegant (Dark)</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-3-dark.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Classic (Dark)</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-4-dark.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Classic LMS (Dark)</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-5-dark.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Online Course (Dark)</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-6-dark.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Marketplace (Dark)</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-7-dark.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">University (Dark)</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-8-dark.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">ECommerce (Dark)</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-9-dark.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Kindergarten (Dark)</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-10-dark.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Machine Learning (Dark)</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../home-11-dark.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Single Course (Dark)</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="accordion">
                            <!-- accordion header -->
                            <div class="flex items-center justify-between">
                                <a
                                    class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                    href="#">Pages</a>
                                <button class="accordion-controller px-3 py-4">
                                    <span
                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"></span><span
                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-500"></span>
                                </button>
                            </div>
                            <!-- accordion content -->
                            <div
                                class="accordion-content h-0 overflow-hidden transition-all duration-500">
                                <div class="content-wrapper">
                                    <ul class="accordion-container">
                                        <li class="accordion">
                                            <!-- accordion header -->
                                            <div class="flex items-center justify-between">
                                                <a
                                                    href="#"
                                                    class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Get Started 1</a>
                                                <button class="accordion-controller px-3 py-4">
                                                    <span
                                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"></span><span
                                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"></span>
                                                </button>
                                            </div>
                                            <!-- accordion content -->
                                            <div
                                                class="accordion-content h-0 overflow-hidden transition-all duration-300">
                                                <div class="content-wrapper">
                                                    <!-- Dropdown -->
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="../about.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">About</a>
                                                        </li>

                                                        <li>
                                                            <a
                                                                href="../about-dark.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">About (Dark)</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../blog.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Block</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../blog-dark.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Block (Dark)</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../blog-details.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Block Details</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../blog-details-dark.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Block Details (Dark)</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="accordion">
                                            <!-- accordion header -->
                                            <div class="flex items-center justify-between">
                                                <a
                                                    href="#"
                                                    class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Get Started 2</a>
                                                <button class="accordion-controller px-3 py-4">
                                                    <span
                                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"></span><span
                                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"></span>
                                                </button>
                                            </div>
                                            <!-- accordion content -->
                                            <div
                                                class="accordion-content h-0 overflow-hidden transition-all duration-300">
                                                <div class="content-wrapper">
                                                    <!-- Dropdown -->
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="../error.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Error 404</a>
                                                        </li>

                                                        <li>
                                                            <a
                                                                href="../error-dark.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Error (Dark)</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../event-details.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Event Details</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../zoom/zoom-meetings.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Zoom
                                                                <span
                                                                    class="px-15px py-5px text-primaryColor bg-whitegrey3 text-xs rounded ml-5px">Online Call</span></a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../zoom/zoom-meetings-dark.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Zoom Meeting (Dark)</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../zoom/zoom-meeting-details.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Zoom Meeting Details</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="accordion">
                                            <!-- accordion header -->
                                            <div class="flex items-center justify-between">
                                                <a
                                                    href="#"
                                                    class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Get Started 3</a>
                                                <button class="accordion-controller px-3 py-4">
                                                    <span
                                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"></span><span
                                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"></span>
                                                </button>
                                            </div>
                                            <!-- accordion content -->
                                            <div
                                                class="accordion-content h-0 overflow-hidden transition-all duration-300">
                                                <div class="content-wrapper">
                                                    <!-- Dropdown -->
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="../zoom/zoom-meeting-details-dark.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Meeting Details (Dark)</a>
                                                        </li>

                                                        <li>
                                                            <a
                                                                href="../login.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Login</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../login-dark.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Login (Dark)</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../maintenance.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Maintenance</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../maintenance-dark.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Maintenance (Dark)</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="#"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Term & Condition</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="accordion">
                                            <!-- accordion header -->
                                            <div class="flex items-center justify-between">
                                                <a
                                                    href="#"
                                                    class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Get Started 4</a>
                                                <button class="accordion-controller px-3 py-4">
                                                    <span
                                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"></span><span
                                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"></span>
                                                </button>
                                            </div>
                                            <!-- accordion content -->
                                            <div
                                                class="accordion-content h-0 overflow-hidden transition-all duration-300">
                                                <div class="content-wrapper">
                                                    <!-- Dropdown -->
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="#"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Term & Condition (Dark)</a>
                                                        </li>

                                                        <li>
                                                            <a
                                                                href="#"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Privacy Policy
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="#"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Privacy Policy (Dark)</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="#"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Success Stories</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="#"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Success Stories (Dark)</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="#"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Work Policy</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#" class="pl-15px pt-3 pb-7px"><img
                                                    class="w-full"
                                                    src="../assets/images/mega/mega_menu_2.png"
                                                    alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="accordion">
                            <!-- accordion header -->
                            <div class="flex items-center justify-between">
                                <a
                                    class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                    href="../course.html">Courses</a>
                                <button class="accordion-controller px-3 py-4">
                                    <span
                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"></span><span
                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-500"></span>
                                </button>
                            </div>
                            <!-- accordion content -->
                            <div
                                class="accordion-content h-0 overflow-hidden transition-all duration-500">
                                <div class="content-wrapper">
                                    <ul class="accordion-container">
                                        <li class="accordion">
                                            <!-- accordion header -->
                                            <div class="flex items-center justify-between">
                                                <a
                                                    href="#"
                                                    class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Get Started 1</a>
                                                <button class="accordion-controller px-3 py-4">
                                                    <span
                                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"></span><span
                                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"></span>
                                                </button>
                                            </div>
                                            <!-- accordion content -->
                                            <div
                                                class="accordion-content h-0 overflow-hidden transition-all duration-300">
                                                <div class="content-wrapper">
                                                    <!-- Dropdown -->
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="../course.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Grid</a>
                                                        </li>

                                                        <li>
                                                            <a
                                                                href="../course-dark.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Course Grid (Dark)</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../course-dark.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Course Grid</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../course-grid-dark.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Course Grid (Dark)</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../course-list.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Course List</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../course-list-dark.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Course List (Dark)</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="accordion">
                                            <!-- accordion header -->
                                            <div class="flex items-center justify-between">
                                                <a
                                                    href="#"
                                                    class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Get Started 2</a>
                                                <button class="accordion-controller px-3 py-4">
                                                    <span
                                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"></span><span
                                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"></span>
                                                </button>
                                            </div>
                                            <!-- accordion content -->
                                            <div
                                                class="accordion-content h-0 overflow-hidden transition-all duration-300">
                                                <div class="content-wrapper">
                                                    <!-- Dropdown -->
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="../course-details.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Course Details</a>
                                                        </li>

                                                        <li>
                                                            <a
                                                                href="../course-details-dark.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Course Details (Dark)</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../course-details-2.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Course Details 2</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../course-details-2-dark.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Details 2 (Dark)
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../course-details-3.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Course Details 3</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../course-details-3-dark.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Details 3 (Dark)</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="accordion">
                                            <!-- accordion header -->
                                            <div class="flex items-center justify-between">
                                                <a
                                                    href="#"
                                                    class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Get Started 3</a>
                                                <button class="accordion-controller px-3 py-4">
                                                    <span
                                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"></span><span
                                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"></span>
                                                </button>
                                            </div>
                                            <!-- accordion content -->
                                            <div
                                                class="accordion-content h-0 overflow-hidden transition-all duration-300">
                                                <div class="content-wrapper">
                                                    <!-- Dropdown -->
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="become-an-instructor.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Become An Instructor</a>
                                                        </li>

                                                        <li>
                                                            <a
                                                                href="create-course.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Create Course
                                                                <span
                                                                    class="px-15px py-5px text-primaryColor bg-whitegrey3 text-xs rounded ml-5px">Career</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../instructor.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Instructor</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../instructor-dark.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Instructor (Dark)</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../instructor-details.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Instructor Details</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="../lesson.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Course Lesson
                                                                <span
                                                                    class="px-15px py-5px text-secondaryColor bg-whitegrey3 text-xs rounded ml-5px">New</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <a href="#" class="pl-15px pt-3 pb-7px"><img
                                                    class="w-full"
                                                    src="../assets/images/mega/mega_menu_1.png"
                                                    alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="accordion">
                            <!-- accordion header -->
                            <div class="flex items-center justify-between">
                                <a
                                    class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                    href="instructor-dashboard.html">Dashboard</a>
                                <button class="accordion-controller px-3 py-4">
                                    <span
                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"></span><span
                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-500"></span>
                                </button>
                            </div>
                            <!-- accordion content -->
                            <div
                                class="accordion-content h-0 overflow-hidden transition-all duration-500">
                                <div class="content-wrapper">
                                    <ul class="accordion-container">
                                        <li class="accordion">
                                            <!-- accordion header -->
                                            <div class="flex items-center justify-between">
                                                <a
                                                    href="admin-dashboard.html"
                                                    class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Admin</a>
                                                <button class="accordion-controller px-3 py-4">
                                                    <span
                                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"></span><span
                                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"></span>
                                                </button>
                                            </div>
                                            <!-- accordion content -->
                                            <div
                                                class="accordion-content h-0 overflow-hidden transition-all duration-300">
                                                <div class="content-wrapper">
                                                    <!-- Dropdown -->
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="admin-dashboard.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Admin Dashboard</a>
                                                        </li>

                                                        <li>
                                                            <a
                                                                href="admin-profile.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Admin Profile</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="admin-message.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Message</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="admin-course.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Courses</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="admin-reviews.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Review</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="admin-quiz-attempts.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Admin Quiz</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="admin-settings.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Settings</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="accordion">
                                            <!-- accordion header -->
                                            <div class="flex items-center justify-between">
                                                <a
                                                    href="instructor-dashboard.html"
                                                    class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Instructor</a>
                                                <button class="accordion-controller px-3 py-4">
                                                    <span
                                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"></span><span
                                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"></span>
                                                </button>
                                            </div>
                                            <!-- accordion content -->
                                            <div
                                                class="accordion-content h-0 overflow-hidden transition-all duration-300">
                                                <div class="content-wrapper">
                                                    <!-- Dropdown -->
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="instructor-dashboard.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Inst. Dashboard</a>
                                                        </li>

                                                        <li>
                                                            <a
                                                                href="instructor-profile.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Inst. Profile</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="instructor-message.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Message</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="instructor-wishlist.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Wishlist
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="instructor-reviews.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Review</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="instructor-my-quiz-attempts.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">My Quiz</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="instructor-order-history.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Order History</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="instructor-course.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">My Courses</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="instructor-announcments.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Announcements</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="instructor-quiz-attempts.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Quiz Attempts</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="instructor-assignments.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Assignments</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="instructor-settings.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Settings</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="accordion">
                                            <!-- accordion header -->
                                            <div class="flex items-center justify-between">
                                                <a
                                                    href="student-dashboard.html"
                                                    class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Student</a>
                                                <button class="accordion-controller px-3 py-4">
                                                    <span
                                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"></span><span
                                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"></span>
                                                </button>
                                            </div>
                                            <!-- accordion content -->
                                            <div
                                                class="accordion-content h-0 overflow-hidden transition-all duration-300">
                                                <div class="content-wrapper">
                                                    <!-- Dropdown -->
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="student-dashboard.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Dashboard</a>
                                                        </li>

                                                        <li>
                                                            <a
                                                                href="student-profile.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Profile
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="student-message.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Message</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="student-enrolled-courses.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Enrolled Courses</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="student-wishlist.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Wishlist</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="student-reviews.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Review
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="student-my-quiz-attempts.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">My Quiz
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="student-assignments.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Assignment
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="student-settings.html"
                                                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Settings
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="accordion">
                            <!-- accordion header -->
                            <div class="flex items-center justify-between">
                                <a
                                    class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                    href="../ecommerce/shop.html">ECommerce</a>
                                <button class="accordion-controller px-3 py-4">
                                    <span
                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"></span><span
                                        class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-500"></span>
                                </button>
                            </div>
                            <!-- accordion content -->
                            <div
                                class="accordion-content h-0 overflow-hidden transition-all duration-500">
                                <div class="content-wrapper">
                                    <ul>
                                        <li>
                                            <!-- accordion header -->
                                            <div class="flex items-center justify-between">
                                                <a
                                                    href="../ecommerce/shop.html"
                                                    class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Shop
                                                    <span
                                                        class="px-15px py-5px text-primaryColor bg-whitegrey3 text-xs rounded ml-5px">Online Store</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <!-- accordion header -->
                                            <div class="flex items-center justify-between">
                                                <a
                                                    href="../ecommerce/product-details.html"
                                                    class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Product Details</a>
                                            </div>
                                            <!-- accordion content -->
                                        </li>
                                        <li>
                                            <!-- accordion header -->
                                            <div class="flex items-center justify-between">
                                                <a
                                                    href="../ecommerce/cart.html"
                                                    class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Cart</a>
                                            </div>
                                            <!-- accordion content -->
                                        </li>
                                        <li>
                                            <!-- accordion header -->
                                            <div class="flex items-center justify-between">
                                                <a
                                                    href="../ecommerce/checkout.html"
                                                    class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Checkout</a>
                                            </div>
                                            <!-- accordion content -->
                                        </li>
                                        <li>
                                            <!-- accordion header -->
                                            <div class="flex items-center justify-between">
                                                <a
                                                    href="../ecommerce/wishlist.html"
                                                    class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Wishlist</a>
                                            </div>
                                            <!-- accordion content -->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- my account accordion -->
                <div>
                    <ul
                        class="accordion-container mt-9 mb-30px pb-9 border-b border-borderColor dark:border-borderColor-dark">
                        <li class="accordion group">
                            <!-- accordion header -->
                            <div
                                class="accordion-controller flex items-center justify-between">
                                <a
                                    class="leading-1 text-darkdeep1 font-medium group-hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                    href="#">My Account</a>
                                <button class="px-3 py-1">
                                    <i
                                        class="icofont-thin-down text-size-15 text-darkdeep1 group-hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"></i>
                                </button>
                            </div>
                            <!-- accordion content -->
                            <div
                                class="accordion-content h-0 overflow-hidden transition-all duration-500 shadow-standard">
                                <div class="content-wrapper">
                                    <ul>
                                        <li>
                                            <!-- accordion header -->
                                            <div class="flex items-center gap-1">
                                                <a
                                                    href="../login.html"
                                                    class="leading-1 text-darkdeep1 text-sm pl-30px pt-7 pb-3 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Login
                                                </a>

                                                <a
                                                    href="../login.html"
                                                    class="leading-1 text-darkdeep1 text-sm pr-30px pt-7 pb-4 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">
                                                    <span>/</span> Create Account
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <!-- accordion header -->
                                            <div class="flex items-center justify-between">
                                                <a
                                                    href="../login.html"
                                                    class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">My Account</a>
                                            </div>
                                            <!-- accordion content -->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Mobile menu social area -->
                <div>
                    <ul class="flex gap-6 items-center mb-5">
                        <li>
                            <a class="facebook" href="#"><i
                                    class="icofont icofont-facebook text-fb-color dark:text-whiteColor dark:hover:text-secondaryColor"></i></a>
                        </li>
                        <li>
                            <a class="twitter" href="#"><i
                                    class="icofont icofont-twitter text-twiter-color dark:text-whiteColor dark:hover:text-secondaryColor"></i></a>
                        </li>
                        <li>
                            <a class="pinterest" href="#"><i
                                    class="icofont icofont-pinterest dark:text-whiteColor dark:hover:text-secondaryColor"></i></a>
                        </li>
                        <li>
                            <a class="instagram" href="#"><i
                                    class="icofont icofont-instagram dark:text-whiteColor dark:hover:text-secondaryColor"></i></a>
                        </li>
                        <li>
                            <a class="google" href="#"><i
                                    class="icofont icofont-youtube-play dark:text-whiteColor dark:hover:text-secondaryColor"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main class="bg-transparent">
        <!-- banner section -->


        <!--create course section -->
        <section class="relative">
            <div class="container py-100px">
                <div class="tab md:w-2/3 mx-auto">
                    <!-- tab controller -->

                    <div
                        class="tab-links grid grid-cols-2 gap-11px text-blackColor text-lg lg:text-size-22 font-semibold font-hind mb-43px mt-30px md:mt-0">
                        <button
                            class="py-9px lg:py-6 hover:text-primaryColor dark:text-whiteColor dark:hover:text-primaryColor bg-white dark:bg-whiteColor-dark dark:hover:bg-whiteColor-dark hover:bg-white relative group/btn shadow-bottom hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard">
                            <span
                                class="absolute w-full h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"></span>

                            Modifier as Course Video
                        </button>
                        <button
                            class="py-9px lg:py-6 hover:text-primaryColor dark:hover:text-primaryColor dark:text-whiteColor bg-lightGrey7 dark:bg-lightGrey7-dark hover:bg-white dark:hover:bg-whiteColor-dark relative group/btn hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard">
                            <span
                                class="absolute w-0 h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"></span>

                            Modifier as Course Document
                        </button>
                    </div>

                    <!--  tab contents -->
                    <div
                        class="shadow-container bg-whiteColor dark:bg-whiteColor-dark pt-10px px-5 pb-10 md:p-50px md:pt-30px rounded-5px">
                        <div class=" tab-contents">
                            <!-- login form-->
                            <div
                                class=" block opacity-100 transition-opacity duration-150 ease-linear">
                                <!-- heading   -->
                                <div class="text-center">
                                    <h3
                                        class="text-size-32 font-bold text-blackColor dark:text-blackColor-dark mb-2 leading-normal">
                                        Cours Video
                                    </h3>
                                </div>

                                <div class="container pt-100px pb-100px" data-aos="fade-up">
                                    <div class="grid grid-cols-1 lg:grid-cols-1 gap-x-30px gap-y-5">
                                        <!-- create course left -->
                                        <div data-aos="fade-up" class="lg:col-start-1 lg:col-span-8">
                                            <ul class="accordion-container curriculum create-course">
                                                <!-- accordion -->
                                                <li class="accordion mb-5 active">
                                                    <div
                                                        class="bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-t-md">
                                                        <!-- controller -->
                                                        <div class="py-5 px-30px">
                                                            <div
                                                                class="cursor-pointer accordion-controller flex justify-between items-center text-lg text-headingColor font-semibold w-full dark:text-headingColor-dark font-hind leading-27px rounded-t-md">
                                                                <div>
                                                                    <span>Course Info</span>
                                                                </div>
                                                                <svg
                                                                    class="transition-all duration-500 rotate-0"
                                                                    width="20"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 16 16"
                                                                    fill="#212529">
                                                                    <path
                                                                        fill-rule="evenodd"
                                                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <!-- content -->
                                                        <div
                                                            class="accordion-content transition-all duration-500 overflow-hidden">
                                                            <div class="content-wrapper py-4 px-5">
                                                                <div>
                                                                    <form
                                                                        method="POST"
                                                                        action=""
                                                                        enctype="multipart/form-data"
                                                                        class="p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8"
                                                                        data-aos="fade-up">
                                                                        <div class="grid grid-cols-1 mb-15px gap-15px">
                                                                            <div>
                                                                                <label class="mb-3 block font-semibold">Course Title</label>
                                                                                <input
                                                                                    type="text"
                                                                                    name="Title"
                                                                                    value="<?= isset($resultVideo['titre']) ? $resultVideo['titre'] : "" ?>"
                                                                                    placeholder="Course Title"
                                                                                    class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                                                            </div>
                                                                            <div>
                                                                                <label class="mb-3 block font-semibold">Course Slug</label>
                                                                                <input
                                                                                    type="text"
                                                                                    name="Slug"
                                                                                    value="<?= isset($resultVideo['Slgan']) ? $resultVideo['Slgan'] : "" ?>"
                                                                                    placeholder="Course Slug"
                                                                                    class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                                                            </div>

                                                                            <div>
                                                                                <div class="file-upload-container">
                                                                                    <label class="file-label" for="course-image">Course Image</label>
                                                                                    <input
                                                                                        type="file"
                                                                                        name="image"
                                                                                        id="course-image"
                                                                                        class="file-input">
                                                                                </div>

                                                                                <div
                                                                                    class="grid grid-cols-1 md:grid-cols-2 gap-30px">
                                                                                    <div>
                                                                                        <label
                                                                                            class="text-xs uppercase text-placeholder block font-semibold text-opacity-50 leading-1.8">COURSES</label>
                                                                                        <div
                                                                                            class="bg-whiteColor relative rounded-md">
                                                                                            <select
                                                                                                name="Categorei"
                                                                                                class="text-base bg-transparent text-blackColor2 w-full p-13px pr-30px focus:outline-none block appearance-none relative z-20 focus:shadow-select rounded-md">
                                                                                                <option selected="">Categorei</option>
                                                                                                <?php
                                                                                                foreach ($categoreis as $row):
                                                                                                ?>
                                                                                                    <option value="<?= $row['id_categorei'] ?>"><?= $row['nom_categorei'] ?></option>
                                                                                                <?php
                                                                                                endforeach
                                                                                                ?>
                                                                                            </select>
                                                                                            <i
                                                                                                class="icofont-simple-down absolute top-1/2 right-3 -translate-y-1/2 block text-lg z-10"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div>
                                                                                        <label
                                                                                            class="text-xs uppercase text-placeholder block font-semibold text-opacity-50 leading-1.8">SHORT BY OFFER</label>
                                                                                        <div
                                                                                            class="bg-whiteColor relative rounded-md">
                                                                                            <div class="relative w-full">
                                                                                                <div class="w-full">
                                                                                                    <label for="tags" class="block mb-2 text-sm font-medium text-gray-700">Select Tags</label>
                                                                                                    <select
                                                                                                        name="Tags[]"
                                                                                                        id="tags"
                                                                                                        multiple
                                                                                                        class="w-full bg-white text-gray-700 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 p-3 h-40 overflow-y-auto">
                                                                                                        <option disabled selected class="text-gray-500">Tags</option>
                                                                                                        <?php foreach ($tag as $row): ?>
                                                                                                            <option value="<?= $row['id_Tag'] ?>" class="p-2"><?= htmlspecialchars($row['nom_Tag']) ?></option>
                                                                                                        <?php endforeach ?>
                                                                                                    </select>
                                                                                                </div>

                                                                                            </div>
                                                                                            <i
                                                                                                class="icofont-simple-down absolute top-1/2 right-3 -translate-y-1/2 block text-lg z-10"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-15px">
                                                                            <label class="mb-3 block font-semibold">About Course</label>
                                                                            <textarea
                                                                                name="About"
                                                                                class="w-full py-10px px-5 text-sm text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md"

                                                                                cols="30"
                                                                                rows="10">
                                        <?= isset($resultVideo['description']) ? $resultVideo['description'] : "" ?></textarea>
                                                                        </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- accordion -->
                                                <li class="accordion mb-5">
                                                    <div
                                                        class="bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark">
                                                        <!-- controller -->
                                                        <div class="py-5 px-30px">
                                                            <div
                                                                class="cursor-pointer accordion-controller flex justify-between items-center text-lg text-headingColor font-semibold w-full dark:text-headingColor-dark font-hind leading-27px">
                                                                <div>
                                                                    <span>Course Video</span>
                                                                </div>
                                                                <svg
                                                                    class="transition-all duration-500 rotate-0"
                                                                    width="20"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 16 16"
                                                                    fill="#212529">
                                                                    <path
                                                                        fill-rule="evenodd"
                                                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <!-- content -->
                                                        <div
                                                            class="accordion-content transition-all duration-500 overflow-hidden h-0">
                                                            <div class="content-wrapper py-4 px-5">
                                                                <div>
                                                                    <div
                                                                        class="p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8"
                                                                        data-aos="fade-up">
                                                                        <div class="grid grid-cols-1 mb-15px gap-15px">

                                                                            <div>

                                                                                <div>
                                                                                    <label class="mb-3 block font-semibold">Add Your Video URL</label>
                                                                                    <input
                                                                                        type="text"
                                                                                        name="centenu_video"
                                                                                        placeholder="Add your Video URL here"
                                                                                        class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                                                                </div>
                                                                                <div>
                                                                                    <div class="mb-3 block">
                                                                                        Example:
                                                                                        <a
                                                                                            class="hover:text-primaryColor"
                                                                                            href="https://www.youtube.com/watch?v=yourvideoid">https://www.youtube.com/watch?v=yourvideoid</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </li>
                                                <!-- accordion -->

                                            </ul>
                                            <div
                                                class="mt-10 leading-1.8 grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-x-30px gap-y-5">
                                                <div data-aos="fade-up" class="lg:col-start-0 lg:col-span-8 w-full">
                                                    <button
                                                        type="submit"
                                                        name="ModiferVidio"
                                                        class="text-whiteColor bg-primaryColor w-full p-13px hover:text-whiteColor hover:bg-secondaryColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-secondaryColor text-center">
                                                        Course Document
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <!-- sign up form-->
                            <div
                                class="hidden opacity-0 transition-opacity duration-150 ease-linear">
                                <!-- heading   -->
                                <div class="text-center">
                                    <h3
                                        class="text-size-32 font-bold text-blackColor dark:text-blackColor-dark mb-2 leading-normal">
                                        Cours Document
                                    </h3>
                                </div>


                                <div class="container pt-100px pb-100px" data-aos="fade-up">
                                    <div class="grid grid-cols-1 lg:grid-cols-1 gap-x-30px gap-y-5">
                                        <!-- create course left -->
                                        <div data-aos="fade-up" class="lg:col-start-1 lg:col-span-8">
                                            <ul class="accordion-container curriculum create-course">
                                                <!-- accordion -->
                                                <li class="accordion mb-5 active">
                                                    <div
                                                        class="bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-t-md">
                                                        <!-- controller -->
                                                        <div class="py-5 px-30px">
                                                            <div
                                                                class="cursor-pointer accordion-controller flex justify-between items-center text-lg text-headingColor font-semibold w-full dark:text-headingColor-dark font-hind leading-27px rounded-t-md">
                                                                <div>
                                                                    <span>Course Info</span>
                                                                </div>
                                                                <svg
                                                                    class="transition-all duration-500 rotate-0"
                                                                    width="20"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 16 16"
                                                                    fill="#212529">
                                                                    <path
                                                                        fill-rule="evenodd"
                                                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <!-- content -->
                                                        <div
                                                            class="accordion-content transition-all duration-500 overflow-hidden">
                                                            <div class="content-wrapper py-4 px-5">
                                                                <div>
                                                                    <form
                                                                        method="POST"
                                                                        enctype="multipart/form-data"
                                                                        action=""
                                                                        class="p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8"
                                                                        data-aos="fade-up">
                                                                        <div class="grid grid-cols-1 mb-15px gap-15px">
                                                                            <div>
                                                                                <label class="mb-3 block font-semibold">Course Title</label>
                                                                                <input
                                                                                    type="text"
                                                                                    name="Title"
                                                                                    value="<?= isset($Document['titre']) ? $Document['titre'] : "" ?>"
                                                                                    placeholder="Course Title"
                                                                                    class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                                                            </div>
                                                                            <div>
                                                                                <label class="mb-3 block font-semibold">Course Slug</label>
                                                                                <input
                                                                                    type="text"
                                                                                    name="Slug"
                                                                                    value="<?= isset($Document['Slgan']) ? $Document['Slgan'] : "" ?>"
                                                                                    placeholder="Course Slug"
                                                                                    class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                                                            </div>
                                                                            <div>
                                                                                <div class="file-upload-container">
                                                                                    <label class="file-label" for="course-image">Course Image</label>
                                                                                    <input
                                                                                        type="file"
                                                                                        name="image"

                                                                                        id="course-image"
                                                                                        class="file-input">
                                                                                </div>
                                                                                <div
                                                                                    class="grid grid-cols-1 md:grid-cols-2 gap-30px">
                                                                                    <div>
                                                                                        <label
                                                                                            class="text-xs uppercase text-placeholder block font-semibold text-opacity-50 leading-1.8">COURSES</label>
                                                                                        <div
                                                                                            class="bg-whiteColor relative rounded-md">
                                                                                            <select
                                                                                                name="Categorei"
                                                                                                class="text-base bg-transparent text-blackColor2 w-full p-13px pr-30px focus:outline-none block appearance-none relative z-20 focus:shadow-select rounded-md">
                                                                                                <option selected="">Categorei</option>
                                                                                                <?php
                                                                                                foreach ($categoreis as $row):
                                                                                                ?>
                                                                                                    <option value="<?= $row['id_categorei'] ?>"><?= $row['nom_categorei'] ?></option>
                                                                                                <?php
                                                                                                endforeach
                                                                                                ?>
                                                                                            </select>
                                                                                            <i
                                                                                                class="icofont-simple-down absolute top-1/2 right-3 -translate-y-1/2 block text-lg z-10"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div>
                                                                                        <label
                                                                                            class="text-xs uppercase text-placeholder block font-semibold text-opacity-50 leading-1.8">SHORT BY OFFER</label>
                                                                                        <div
                                                                                            class="bg-whiteColor relative rounded-md">
                                                                                            <div class="relative w-full">
                                                                                                <div class="w-full">
                                                                                                    <label for="tags" class="block mb-2 text-sm font-medium text-gray-700">Select Tags</label>
                                                                                                    <select
                                                                                                        name="Tags[]"
                                                                                                        id="tags"
                                                                                                        multiple
                                                                                                        class="w-full bg-white text-gray-700 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 p-3 h-40 overflow-y-auto">
                                                                                                        <option disabled selected class="text-gray-500">Tags</option>
                                                                                                        <?php foreach ($tag as $row): ?>
                                                                                                            <option value="<?= $row['id_Tag'] ?>" class="p-2"><?= htmlspecialchars($row['nom_Tag']) ?></option>
                                                                                                        <?php endforeach ?>
                                                                                                    </select>
                                                                                                </div>

                                                                                            </div>
                                                                                            <i
                                                                                                class="icofont-simple-down absolute top-1/2 right-3 -translate-y-1/2 block text-lg z-10"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-15px">
                                                                            <label class="mb-3 block font-semibold">About Course</label>
                                                                            <textarea
                                                                                name="About"
                                                                                class="w-full py-10px px-5 text-sm text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md"

                                                                                cols="30"
                                                                                rows="10">
                                        <?= isset($Document['description']) ? $Document['description'] : "" ?></textarea>
                                                                        </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- accordion -->
                                                <li class="accordion mb-5">
                                                    <div
                                                        class="bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark">
                                                        <!-- controller -->
                                                        <div class="py-5 px-30px">
                                                            <div
                                                                class="cursor-pointer accordion-controller flex justify-between items-center text-lg text-headingColor font-semibold w-full dark:text-headingColor-dark font-hind leading-27px">
                                                                <div>
                                                                    <span>Course decument</span>
                                                                </div>
                                                                <svg
                                                                    class="transition-all duration-500 rotate-0"
                                                                    width="20"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 16 16"
                                                                    fill="#212529">
                                                                    <path
                                                                        fill-rule="evenodd"
                                                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <!-- content -->
                                                        <div
                                                            class="accordion-content transition-all duration-500 overflow-hidden h-0">
                                                            <div class="content-wrapper py-4 px-5">
                                                                <div>
                                                                    <div
                                                                        class="p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8"
                                                                        data-aos="fade-up">
                                                                        <div class="grid grid-cols-1 mb-15px gap-15px">

                                                                            <div>

                                                                                <div>
                                                                                    <label class="mb-3 block font-semibold">Add Your document URL</label>
                                                                                    <input
                                                                                        type="file"
                                                                                        name="centenu_pdf"
                                                                                        placeholder="Add your Document URL here"
                                                                                        class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                                                                </div>
                                                                                <div>
                                                                                    <div class="mb-3 block">
                                                                                        Example:
                                                                                        <a
                                                                                            class="hover:text-primaryColor"
                                                                                            href="">https://www.example.com/path/to/your/file.pdf</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </li>
                                                <!-- accordion -->

                                            </ul>

                                            <div
                                                class="mt-10 leading-1.8 grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-x-30px gap-y-5">
                                                <div data-aos="fade-up" class="lg:col-start-0 lg:col-span-8 w-full">
                                                    <button
                                                        type="submit"
                                                        name="ModifierDocument"
                                                        class="text-whiteColor bg-primaryColor w-full p-13px hover:text-whiteColor hover:bg-secondaryColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-secondaryColor text-center">
                                                        Create Course
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- animated icons -->
            <div>
                <img
                    loading="lazy"
                    class="absolute right-[14%] top-[30%] animate-move-var"
                    src="../assets/images/education/hero_shape2.png"
                    alt="Shape">
                <img
                    loading="lazy"
                    class="absolute left-[5%] top-1/2 animate-move-hor"
                    src="../assets/images/education/hero_shape3.png"
                    alt="Shape">
                <img
                    loading="lazy"
                    class="absolute left-1/2 bottom-[60px] animate-spin-slow"
                    src="../assets/images/education/hero_shape4.png"
                    alt="Shape">
                <img
                    loading="lazy"
                    class="absolute left-1/2 top-10 animate-spin-slow"
                    src="../assets/images/education/hero_shape5.png"
                    alt="Shape">
            </div>

    </main>
    <script src="../assets/js/swiper-bundle.min.js"></script>
    <script src="../assets/js/isotope.pkgd.min.js"></script>
    <script src="../assets/js/accordion.js"></script>
    <script src="../assets/js/chart.js"></script>
    <script src="../assets/js/count.js"></script>
    <script src="../assets/js/countdown.js"></script>
    <script src="../assets/js/counterup.js"></script>
    <script src="../assets/js/dropdown.js"></script>
    <script src="../assets/js/filter.js"></script>
    <script src="../assets/js/mobileMenu.js"></script>
    <script src="../assets/js/modal.js"></script>
    <script src="../assets/js/popup.js"></script>
    <script src="../assets/js/preloader.js"></script>
    <script src="../assets/js/scrollUp.js"></script>
    <script src="../assets/js/slider.js"></script>
    <script src="../assets/js/smoothScroll.js"></script>
    <script src="../assets/js/stickyHeader.js"></script>
    <script src="../assets/js/tabs.js"></script>
    <script src="../assets/js/theme.js"></script>
    <script src="../assets/js/videoModal.js"></script>
    <script src="../assets/js/vanilla-tilt.js"></script>
    <script src="../assets/js/aos.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>