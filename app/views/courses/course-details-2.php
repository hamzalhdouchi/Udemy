<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from html.themewin.com/edurcok-preview-tailwind/edurock/course-details-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jan 2025 14:27:39 GMT -->
<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Course Details | Edurock - Education LMS Template</title>
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="../assets/images/favicon.ico"
    >
    <!-- link stylesheet -->
    <link rel="stylesheet" href="../assets/css/icofont.min.css" >
    <link rel="stylesheet" href="../assets/css/popup.css" >

    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css" >
    <link rel="stylesheet" href="../assets/css/video-modal.css" >
    <link rel="stylesheet" href="../assets/css/aos.css" >
    <link rel="stylesheet" href="../assets/css/style.css" >
  </head>
  <body
    class="relative font-inter font-normal text-base leading-[1.8] bg-bodyBg dark:bg-bodyBg-dark"
  >
    <!-- preloader -->
    <div
      class="preloader flex fixed top-0 left-0 h-screen w-full items-center justify-center z-xxl bg-whiteColor opacity-100 visible transition-all duration-700"
    >
      <!-- spinner -->
      <div
        class="w-90px h-90px border-5px border-t-blue border-r-blue border-b-blue-light border-l-blue-light rounded-full animate-spin-infinit"
      ></div>
      <div class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2">
        <img src="../assets/images/pre.png" alt="Preloader" class="h-10 w-10 block" >
      </div>
    </div>
    <!-- theme fixed shadow -->
    <div>
      <div class="fixed-shadow left-[-250px]"></div>
      <div class="fixed-shadow right-[-250px]"></div>
    </div>

    <!-- theme controller -->
    <div
      class="fixed top-[100px] 2xl:top-[300px] transition-all duration-300 right-[-50px] hover:right-0 z-xl"
    >
      <button
        class="theme-controller w-90px h-10 bg-primaryColor dark:bg-whiteColor-dark rounded-l-lg2 text-whiteColor px-10px flex items-center dark:shadow-theme-controller"
      >
        <!-- dark -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="mr-10px w-5 block dark:hidden"
          viewBox="0 0 512 512"
        >
          <path
            d="M160 136c0-30.62 4.51-61.61 16-88C99.57 81.27 48 159.32 48 248c0 119.29 96.71 216 216 216 88.68 0 166.73-51.57 200-128-26.39 11.49-57.38 16-88 16-119.29 0-216-96.71-216-216z"
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="32"
          ></path>
        </svg>
        <span class="text-base block dark:hidden">Dark</span>
        <!-- light -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="hidden mr-10px w-5 dark:block"
          viewBox="0 0 512 512"
        >
          <path
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-miterlimit="10"
            stroke-width="32"
            d="M256 48v48M256 416v48M403.08 108.92l-33.94 33.94M142.86 369.14l-33.94 33.94M464 256h-48M96 256H48M403.08 403.08l-33.94-33.94M142.86 142.86l-33.94-33.94"
          ></path>
          <circle
            cx="256"
            cy="256"
            r="80"
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-miterlimit="10"
            stroke-width="32"
          ></circle>
        </svg>
        <span class="text-base hidden dark:block">Light</span>
      </button>
    </div>
    <!-- scroll up button -->
    <div>
      <button
        class="scroll-up w-50px h-50px leading-50px text-center text-primaryColor bg-white hover:text-whiteColor hover:bg-primaryColor rounded-full fixed right-5 bottom-[60px] shadow-scroll-up z-medium text-xl dark:text-whiteColor dark:bg-primaryColor dark:hover:text-whiteColor-dark hidden"
      >
        <i class="icofont-rounded-up"></i>
      </button>
    </div>
    <!--======= Header area start =======-->
    <header>
      <!-- header top start -->
      <div class="bg-blackColor2 dark:bg-lightGrey10-dark hidden lg:block">
        <div
          class="container 3xl:container-secondary-lg 4xl:container mx-auto text-whiteColor text-size-12 xl:text-sm py-5px xl:py-9px"
        >
          <div class="flex justify-between items-center">
            <div>
              <p>Call Us: +1 800 123 456 789 - Mail Us: Itcroc@mail.com</p>
            </div>
            <div class="flex gap-37px items-center">
              <div>
                <p>
                  <i
                    class="icofont-location-pin text-primaryColor text-size-15 mr-5px"
                  ></i>
                  <span>684 West College St. Sun City, USA</span>
                </p>
              </div>
              <div>
                <!-- header social list -->
                <ul class="flex gap-13px text-size-15">
                  <li>
                    <a class="hover:text-primaryColor" href="#"
                      ><i class="icofont-facebook"></i
                    ></a>
                  </li>
                  <li>
                    <a class="hover:text-primaryColor" href="#"
                      ><i class="icofont-twitter"></i
                    ></a>
                  </li>
                  <li>
                    <a class="hover:text-primaryColor" href="#"
                      ><i class="icofont-instagram"></i
                    ></a>
                  </li>
                  <li>
                    <a class="hover:text-primaryColor" href="#"
                      ><i class="icofont-youtube-play"></i
                    ></a>
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
        class="transition-all duration-500 sticky-header z-medium dark:bg-whiteColor-dark"
      >
        <nav>
          <div
            class="py-15px lg:py-0 px-15px lg:container 3xl:container-secondary-lg 4xl:container mx-auto relative"
          >
            <div class="grid grid-cols-2 lg:grid-cols-12 items-center gap-15px">
              <!-- navbar left -->
              <div class="lg:col-start-1 lg:col-span-2">
                <a href="index.html" class="block"
                  ><img
                    src="../assets/images/logo/logo_1.png"
                    alt="Logo"
                    class="w-logo-sm lg:w-auto py-2"
                ></a>
              </div>
              <!-- Main menu -->
              <div class="hidden lg:block lg:col-start-3 lg:col-span-7">
                <ul class="nav-list flex justify-center">
                  <li class="nav-item group">
                    <a
                      href="#"
                      class="px-5 lg:px-10px 2xl:px-15px 3xl:px-5 py-10 lg:py-5 2xl:py-30px 3xl:py-10 leading-sm 2xl:leading-lg text-base lg:text-sm 2xl:text-base font-semibold block group-hover:text-primaryColor dark:text-whiteColor"
                    >
                      Demos
                      <i class="icofont-rounded-down"></i>
                    </a>
                    <!-- dropdown menu -->
                    <div
                      class="dropdown absolute left-0 translate-y-10 z-medium hidden opacity-0"
                      style="transition: 0.3s"
                    >
                      <div
                        class="tab container 3xl:container2-lg 4xl:container shadow-dropdown px-30px mx-auto xl:px-30px py-15px max-h-dropdown 3xl:h-2000 xl:overflow-y-scroll rounded-standard bg-white dark:bg-whiteColor-dark"
                      >
                        <div
                          class="tab-links grid grid-cols-2 gap-22px text-blackColor text-lg font-semibold font-hind"
                        >
                          <button
                            class="py-3 hover:text-primaryColor dark:text-whiteColor dark:hover:text-primaryColor bg-white dark:bg-whiteColor-dark dark:hover:bg-whiteColor-dark hover:bg-white relative group/btn shadow-bottom hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard"
                          >
                            <span
                              class="absolute w-full h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"
                            ></span>

                            Light
                          </button>
                          <button
                            class="py-3 hover:text-primaryColor dark:hover:text-primaryColor dark:text-whiteColor bg-lightGrey7 dark:bg-lightGrey7-dark hover:bg-white dark:hover:bg-whiteColor-dark relative group/btn hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard"
                          >
                            <span
                              class="absolute w-0 h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"
                            ></span>

                            Dark
                          </button>
                        </div>

                        <div class="tab-contents">
                          <!-- light Demos-->
                          <div
                            id="light-demos"
                            class="block opacity-100 transition-opacity duration-150 ease-linear"
                          >
                            <ul
                              id="light-list"
                              class="grid grid-cols-5 gap-30px pt-30px pb-15px"
                            >
                              <li>
                                <a
                                  href="index.html"
                                  class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"
                                  ><img
                                    src="../assets/images/mega/home-1.png"
                                    class="w-full"
                                    alt="Mega Menu"
                                  >
                                  <span
                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor"
                                  >
                                    Home (Default)
                                  </span></a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-2.html"
                                  class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"
                                  ><img
                                    src="../assets/images/mega/home-2.png"
                                    alt="Mega Menu"
                                  >
                                  <span
                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor"
                                  >
                                    Home (Elegant)
                                  </span></a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-3.html"
                                  class="overflow-hidden group/light relative block box-border shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard"
                                  ><img
                                    src="../assets/images/mega/home-3.png"
                                    alt="Mega Menu"
                                    class="w-full"
                                  >
                                  <span
                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor"
                                  >
                                    Home (Classic)
                                  </span></a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-4.html"
                                  class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"
                                  ><img
                                    src="../assets/images/mega/home-4.png"
                                    alt="Mega Menu"
                                  >
                                  <span
                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor"
                                  >
                                    Home (Classic LMS)
                                  </span></a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-5.html"
                                  class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"
                                  ><img
                                    src="../assets/images/mega/home-5.png"
                                    alt="Mega Menu"
                                  >
                                  <span
                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor"
                                  >
                                    Home (Online Course)
                                  </span></a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-6.html"
                                  class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-5px"
                                  ><img
                                    src="../assets/images/mega/home-6.png"
                                    alt="Mega Menu"
                                  >
                                  <span
                                    class="bg-secondaryColor text-xs px-15px py-5px leading-1 text-white absolute top-5px left-5px rounded-standard"
                                    >New</span
                                  >
                                  <span
                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor"
                                  >
                                    Home (Marketplace)
                                  </span></a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-7.html"
                                  class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"
                                  ><img
                                    src="../assets/images/mega/home-7.png"
                                    alt="Mega Menu"
                                  >
                                  <span
                                    class="bg-secondaryColor text-xs px-15px py-5px leading-1 text-white absolute top-5px left-5px rounded-standard"
                                    >New</span
                                  >
                                  <span
                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor"
                                  >
                                    Home (University)
                                  </span></a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-8.html"
                                  class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"
                                  ><img
                                    src="../assets/images/mega/home-8.png"
                                    alt="Mega Menu"
                                  >
                                  <span
                                    class="bg-secondaryColor text-xs px-15px py-5px leading-1 text-white absolute top-5px left-5px rounded-standard"
                                    >New</span
                                  >
                                  <span
                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor"
                                  >
                                    Home (eCommerce)
                                  </span></a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-9.html"
                                  class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"
                                  ><img
                                    src="../assets/images/mega/home-9.png"
                                    alt="Mega Menu"
                                  >
                                  <span
                                    class="bg-secondaryColor text-xs px-15px py-5px leading-1 text-white absolute top-5px left-5px rounded-standard"
                                    >New</span
                                  >
                                  <span
                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor"
                                  >
                                    Home (Kindergarten)
                                  </span></a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-10.html"
                                  class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"
                                  ><img
                                    src="../assets/images/mega/home-10.png"
                                    alt="Mega Menu"
                                  >
                                  <span
                                    class="bg-secondaryColor text-xs px-15px py-5px leading-1 text-white absolute top-5px left-5px rounded-standard"
                                    >New</span
                                  >
                                  <span
                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor"
                                  >
                                    Home (Machine Learning)
                                  </span></a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-11.html"
                                  class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"
                                  ><img
                                    src="../assets/images/mega/home-11.png"
                                    alt="Mega Menu"
                                  >
                                  <span
                                    class="bg-secondaryColor text-xs px-15px py-5px leading-1 text-white absolute top-5px left-5px rounded-standard"
                                    >New</span
                                  >
                                  <span
                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor"
                                  >
                                    Home (Single Course)
                                  </span></a
                                >
                              </li>
                              <li>
                                <a
                                  href="#"
                                  class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"
                                  ><img
                                    src="../assets/images/mega/coming.png"
                                    alt="Mega Menu"
                                  >
                                  <span
                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor"
                                  >
                                    Layout Coming Soon 1
                                  </span></a
                                >
                              </li>
                              <li>
                                <a
                                  href="#"
                                  class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"
                                  ><img
                                    src="../assets/images/mega/coming.png"
                                    alt="Mega Menu"
                                  >
                                  <span
                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor"
                                  >
                                    Layout Coming Soon 2
                                  </span></a
                                >
                              </li>
                              <li>
                                <a
                                  href="#"
                                  class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"
                                  ><img
                                    src="../assets/images/mega/coming.png"
                                    alt="Mega Menu"
                                  >
                                  <span
                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor"
                                  >
                                    Layout Coming Soon 3
                                  </span></a
                                >
                              </li>
                              <li>
                                <a
                                  href="#"
                                  class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"
                                  ><img
                                    src="../assets/images/mega/coming.png"
                                    alt="Mega Menu"
                                  >
                                  <span
                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor"
                                  >
                                    Layout Coming Soon 4
                                  </span></a
                                >
                              </li>
                            </ul>
                          </div>

                          <!-- dark demos-->
                          <div
                            id="dark-demos"
                            class="hidden opacity-0 transition-opacity duration-150 ease-linear"
                          >
                            <ul
                              id="dark-list"
                              class="grid grid-cols-5 gap-30px pt-30px pb-15px"
                            >
                              <li>
                                <a
                                  href="index-dark.html"
                                  class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"
                                  ><img
                                    src="../assets/images/mega/home-1-dark.png"
                                    class="w-full"
                                    alt="Mega Menu"
                                  >
                                  <span
                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor"
                                  >
                                    Home (Default)
                                  </span></a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-2-dark.html"
                                  class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"
                                  ><img
                                    src="../assets/images/mega/home-2-dark.png"
                                    alt="Mega Menu"
                                  >
                                  <span
                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor"
                                  >
                                    Home (Elegant)
                                  </span></a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-3-dark.html"
                                  class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"
                                  ><img
                                    src="../assets/images/mega/home-3-dark.png"
                                    alt="Mega Menu"
                                  >
                                  <span
                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor"
                                  >
                                    Home (Classic)
                                  </span></a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-4-dark.html"
                                  class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"
                                  ><img
                                    src="../assets/images/mega/home-4-dark.png"
                                    alt="Mega Menu"
                                  >
                                  <span
                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor"
                                  >
                                    Home (Classic LMS)
                                  </span></a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-5-dark.html"
                                  class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"
                                  ><img
                                    src="../assets/images/mega/home-5-dark.png"
                                    alt="Mega Menu"
                                  >
                                  <span
                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor"
                                  >
                                    Home (Online Course)
                                  </span></a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-6-dark.html"
                                  class="overflow-hidden group relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-5px"
                                  ><img
                                    src="../assets/images/mega/home-6-dark.png"
                                    alt="Mega Menu"
                                  >
                                  <span
                                    class="bg-secondaryColor text-xs px-15px py-5px leading-1 text-white absolute top-5px left-5px rounded-standard"
                                    >New</span
                                  >
                                  <span
                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor"
                                  >
                                    Home (Marketplace)
                                  </span></a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-7-dark.html"
                                  class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"
                                  ><img
                                    src="../assets/images/mega/home-7-dark.png"
                                    alt="Mega Menu"
                                  >
                                  <span
                                    class="bg-secondaryColor text-xs px-15px py-5px leading-1 text-white absolute top-5px left-5px rounded-standard"
                                    >New</span
                                  >
                                  <span
                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor"
                                  >
                                    Home (University)
                                  </span></a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-8-dark.html"
                                  class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"
                                  ><img
                                    src="../assets/images/mega/home-8-dark.png"
                                    alt="Mega Menu"
                                  >
                                  <span
                                    class="bg-secondaryColor text-xs px-15px py-5px leading-1 text-white absolute top-5px left-5px rounded-standard"
                                    >New</span
                                  >
                                  <span
                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor"
                                  >
                                    Home (eCommerce)
                                  </span></a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-9-dark.html"
                                  class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"
                                  ><img
                                    src="../assets/images/mega/home-9-dark.png"
                                    alt="Mega Menu"
                                  >
                                  <span
                                    class="bg-secondaryColor text-xs px-15px py-5px leading-1 text-white absolute top-5px left-5px rounded-standard"
                                    >New</span
                                  >
                                  <span
                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor"
                                  >
                                    Home (Kindergarten)
                                  </span></a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-10-dark.html"
                                  class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"
                                  ><img
                                    src="../assets/images/mega/home-10-dark.png"
                                    alt="Mega Menu"
                                  >
                                  <span
                                    class="bg-secondaryColor text-xs px-15px py-5px leading-1 text-white absolute top-5px left-5px rounded-standard"
                                    >New</span
                                  >
                                  <span
                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor"
                                  >
                                    Home (Machine Learning)
                                  </span></a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-11-dark.html"
                                  class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"
                                  ><img
                                    src="../assets/images/mega/home-11-dark.png"
                                    alt="Mega Menu"
                                  >
                                  <span
                                    class="bg-secondaryColor text-xs px-15px py-5px leading-1 text-white absolute top-5px left-5px rounded-standard"
                                    >New</span
                                  >
                                  <span
                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor"
                                  >
                                    Home (Single Course)
                                  </span></a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-11-dark.html"
                                  class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"
                                  ><img
                                    src="../assets/images/mega/coming-dark.png"
                                    alt=""
                                  >
                                  <span
                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor"
                                  >
                                    Layout Coming Soon 1
                                  </span></a
                                >
                              </li>
                              <li>
                                <a
                                  href="#"
                                  class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"
                                  ><img
                                    src="../assets/images/mega/coming-dark.png"
                                    alt=""
                                  >
                                  <span
                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor"
                                  >
                                    Layout Coming Soon 2
                                  </span></a
                                >
                              </li>
                              <li>
                                <a
                                  href="#"
                                  class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"
                                  ><img
                                    src="../assets/images/mega/coming-dark.png"
                                    alt=""
                                  >
                                  <span
                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor"
                                  >
                                    Layout Coming Soon 3
                                  </span></a
                                >
                              </li>
                              <li>
                                <a
                                  href="#"
                                  class="overflow-hidden group/light relative block shadow-dropdown-card hover:shadow-dropdown-card-hover hover:-translate-y-[5px] rounded-standard dark:shadow-dropdown-card-dark"
                                  ><img
                                    src="../assets/images/mega/coming-dark.png"
                                    alt=""
                                  >
                                  <span
                                    class="absolute left-0 w-full top-full group-hover/light:-translate-y-full bg-primaryColor text-sm leading-[1] p-10px text-center font-semibold text-whiteColor"
                                  >
                                    Layout Coming Soon 4
                                  </span></a
                                >
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
                      class="px-5 lg:px-10px 2xl:px-15px 3xl:px-5 py-10 lg:py-5 2xl:py-30px 3xl:py-10 leading-sm 2xl:leading-lg text-base lg:text-sm 2xl:text-base font-semibold block group-hover:text-primaryColor dark:text-whiteColor"
                    >
                      Pages
                      <i class="icofont-rounded-down"></i>
                    </a>
                    <!-- dropdown menu -->
                    <div
                      class="dropdown absolute left-0 translate-y-10 z-medium hidden opacity-0"
                      style="transition: 0.3s"
                    >
                      <div
                        class="container 3xl:container2-lg 4xl:container w-2000 shadow-dropdown px-30px mx-auto xl:px-30px py-30px rounded-standard bg-white dark:bg-whiteColor-dark"
                      >
                        <div class="grid grid-cols-4 gap-x-30px">
                          <div>
                            <h3
                              class="text-lg text-blackColor font-semibold border-b border-borderColor dark:text-blackColor-dark p-10px mb-10px"
                            >
                              Get Started 1
                            </h3>
                            <ul>
                              <li>
                                <a
                                  href="about.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >About
                                  <span
                                    class="text-size-12 font-semibold text-primaryColor bg-whitegrey3 px-15px py-5px ml-5px rounded"
                                    >Sale Everything</span
                                  ></a
                                >
                              </li>
                              <li>
                                <a
                                  href="about-dark.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >About (Dark)
                                  <span
                                    class="text-size-12 font-semibold text-secondaryColor bg-whitegrey3 px-15px py-5px ml-5px rounded"
                                    >New</span
                                  >
                                </a>
                              </li>
                              <li>
                                <a
                                  href="blog.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Blog</a
                                >
                              </li>
                              <li>
                                <a
                                  href="blog-dark.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Blog (Dark)</a
                                >
                              </li>
                              <li>
                                <a
                                  href="blog-details.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Blog Details</a
                                >
                              </li>
                              <li>
                                <a
                                  href="blog-details-dark.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Blog Details (Dark)</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div>
                            <h3
                              class="text-lg text-blackColor font-semibold border-b border-borderColor dark:text-blackColor-dark p-10px mb-10px"
                            >
                              Get Started 2
                            </h3>
                            <ul>
                              <li>
                                <a
                                  href="error.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Error</a
                                >
                              </li>
                              <li>
                                <a
                                  href="error-dark.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Error (Dark)
                                </a>
                              </li>
                              <li>
                                <a
                                  href="event-details.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Event Details</a
                                >
                              </li>
                              <li>
                                <a
                                  href="pages/zoom/zoom-meetings.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Zoom
                                  <span
                                    class="text-size-12 font-semibold text-primaryColor bg-whitegrey3 px-15px py-5px ml-5px rounded"
                                    >Online Call</span
                                  ></a
                                >
                              </li>
                              <li>
                                <a
                                  href="pages/zoom/zoom-meetings-dark.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Zoom Meeting (Dark)</a
                                >
                              </li>
                              <li>
                                <a
                                  href="pages/zoom/zoom-meeting-details.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Zoom Meeting Details
                                </a>
                              </li>
                            </ul>
                          </div>
                          <div>
                            <h3
                              class="text-lg text-blackColor font-semibold border-b border-borderColor dark:text-blackColor-dark p-10px mb-10px"
                            >
                              Get Started 3
                            </h3>
                            <ul>
                              <li>
                                <a
                                  href="pages/zoom/zoom-meeting-details-dark.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Meeting Details (Dark)</a
                                >
                              </li>
                              <li>
                                <a
                                  href="login.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Login
                                </a>
                              </li>
                              <li>
                                <a
                                  href="login-dark.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Login (Dark)</a
                                >
                              </li>
                              <li>
                                <a
                                  href="maintenance.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Maintenance</a
                                >
                              </li>
                              <li>
                                <a
                                  href="maintenance-dark.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Maintenance (Dark)</a
                                >
                              </li>
                              <li>
                                <a
                                  href="#"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Terms & Condition</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div>
                            <h3
                              class="text-lg text-blackColor font-semibold border-b border-borderColor dark:text-blackColor-dark p-10px mb-10px"
                            >
                              Get Started 4
                            </h3>
                            <ul>
                              <li>
                                <a
                                  href="#"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Terms & Condition (Dark)</a
                                >
                              </li>
                              <li>
                                <a
                                  href="contact.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Contact
                                </a>
                              </li>
                              <li>
                                <a
                                  href="contact-dark.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Contact (Dark)</a
                                >
                              </li>
                              <li>
                                <a
                                  href="#"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Success Stories</a
                                >
                              </li>
                              <li>
                                <a
                                  href="#"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Success Stories (Dark)</a
                                >
                              </li>
                              <li>
                                <a
                                  href="#"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Work Policy</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>

                        <!-- dropdown banner -->
                        <div class="pt-30px">
                          <img
                            src="../assets/images/mega/mega_menu_2.png"
                            alt="Mega Menu"
                            class="w-full rounded-standard"
                          >
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item group">
                    <a
                      href="#"
                      class="px-5 lg:px-10px 2xl:px-15px 3xl:px-5 py-10 lg:py-5 2xl:py-30px 3xl:py-10 leading-sm 2xl:leading-lg text-base lg:text-sm 2xl:text-base font-semibold block group-hover:text-primaryColor dark:text-whiteColor"
                    >
                      Courses
                      <i class="icofont-rounded-down"></i>
                    </a>
                    <!-- dropdown menu -->
                    <div
                      class="dropdown absolute left-0 translate-y-10 z-medium hidden opacity-0"
                      style="transition: 0.3s"
                    >
                      <div
                        class="container 3xl:container2-lg 4xl:container w-2000 shadow-dropdown px-30px mx-auto xl:px-30px py-30px rounded-standard bg-white dark:bg-whiteColor-dark"
                      >
                        <div class="grid grid-cols-4 gap-x-30px">
                          <div>
                            <h3
                              class="text-lg text-blackColor font-semibold border-b border-borderColor dark:text-blackColor-dark p-10px mb-10px"
                            >
                              Get Started 1
                            </h3>
                            <ul>
                              <li>
                                <a
                                  href="course.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Grid
                                  <span
                                    class="text-size-12 font-semibold text-primaryColor bg-whitegrey3 px-15px py-5px ml-5px rounded"
                                    >All Courses</span
                                  ></a
                                >
                              </li>
                              <li>
                                <a
                                  href="course-dark.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Course Grid (Dark)
                                </a>
                              </li>
                              <li>
                                <a
                                  href="course-grid.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Course Grid</a
                                >
                              </li>
                              <li>
                                <a
                                  href="course-grid-dark.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Course Grid (Dark)</a
                                >
                              </li>
                              <li>
                                <a
                                  href="course-list.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Course List</a
                                >
                              </li>
                              <li>
                                <a
                                  href="course-list-dark.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Course List (Dark)</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div>
                            <h3
                              class="text-lg text-blackColor font-semibold border-b border-borderColor dark:text-blackColor-dark p-10px mb-10px"
                            >
                              Get Started 2
                            </h3>
                            <ul>
                              <li>
                                <a
                                  href="course-details.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Course Details</a
                                >
                              </li>
                              <li>
                                <a
                                  href="course-details-dark.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Course Details (Dark)
                                </a>
                              </li>
                              <li>
                                <a
                                  href="course-details-2.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Course Details 2</a
                                >
                              </li>
                              <li>
                                <a
                                  href="course-details-2-dark.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Details 2 (Dark)
                                </a>
                              </li>
                              <li>
                                <a
                                  href="course-details-3.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                >
                                  Coures Details 3</a
                                >
                              </li>
                              <li>
                                <a
                                  href="course-details-3-dark.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Details 3 (Dark)
                                </a>
                              </li>
                            </ul>
                          </div>
                          <div>
                            <h3
                              class="text-lg text-blackColor font-semibold border-b border-borderColor dark:text-blackColor-dark p-10px mb-10px"
                            >
                              Get Started 3
                            </h3>
                            <ul>
                              <li>
                                <a
                                  href="pages/dashboards/become-an-instructor.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Become An Instructor</a
                                >
                              </li>
                              <li>
                                <a
                                  href="pages/dashboards/create-course.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Careate Course
                                  <span
                                    class="text-size-12 font-semibold text-primaryColor bg-whitegrey3 px-15px py-5px rounded"
                                    >Career</span
                                  >
                                </a>
                              </li>
                              <li>
                                <a
                                  href="instructor.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Instructor
                                </a>
                              </li>
                              <li>
                                <a
                                  href="instructor-dark.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Instructor (Dark)</a
                                >
                              </li>
                              <li>
                                <a
                                  href="instructor-details.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Instructor Details</a
                                >
                              </li>
                              <li>
                                <a
                                  href="lesson.html"
                                  class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor p-10px block hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-whiteColor dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                                  >Course Lesson<span
                                    class="text-size-12 font-semibold text-secondaryColor bg-whitegrey3 px-15px py-5px ml-5px rounded"
                                    >New</span
                                  ></a
                                >
                              </li>
                            </ul>
                          </div>
                          <!-- dropdown banner -->
                          <div>
                            <img
                              src="../assets/images/mega/mega_menu_1.png"
                              alt="Mega Menu"
                              class="w-full rounded-standard"
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item group relative">
                    <a
                      href="pages/dashboards/instructor-dashboard.html"
                      class="px-5 lg:px-10px 2xl:px-15px 3xl:px-5 py-10 lg:py-5 2xl:py-30px 3xl:py-10 leading-sm 2xl:leading-lg text-base lg:text-sm 2xl:text-base font-semibold block group-hover:text-primaryColor dark:text-whiteColor"
                    >
                      Dashboard
                      <i class="icofont-rounded-down"></i>
                    </a>
                    <!-- dropdown menu -->
                    <div
                      class="dropdown absolute left-0 translate-y-10 z-medium hidden opacity-0"
                      style="transition: 0.3s"
                    >
                      <div
                        class="shadow-dropdown max-w-dropdown2 w-2000 py-14px rounded-standard bg-white dark:bg-whiteColor-dark"
                      >
                        <ul>
                          <li class="relative group/nested">
                            <a
                              href="pages/dashboards/admin-dashboard.html"
                              class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg flex justify-between items-center dark:bg-whiteColor-dark dark:text-contentColor-dark dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                              >Admin <i class="icofont-rounded-right"></i>
                            </a>

                            <!-- nested dropdown menu -->
                            <!-- dropdown menu -->
                            <div
                              class="nested-dropdown absolute left-full top-0 z-50 hidden opacity-0 group-hover/nested:block group-hover/nested:opacity-100"
                              style="transition: 0.3s"
                            >
                              <div
                                class="shadow-dropdown max-w-dropdown2 w-2000 py-14px rounded-standard bg-white dark:bg-whiteColor-dark"
                              >
                                <ul>
                                  <li>
                                    <a
                                      href="pages/dashboards/admin-dashboard.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >Admin Dashboard
                                    </a>
                                  </li>
                                  <li>
                                    <a
                                      href="pages/dashboards/admin-profile.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >Admin Profile
                                    </a>
                                  </li>
                                  <li>
                                    <a
                                      href="pages/dashboards/admin-message.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >Message</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="pages/dashboards/admin-course.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >Courses
                                    </a>
                                  </li>
                                  <li>
                                    <a
                                      href="pages/dashboards/admin-reviews.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >Review</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="pages/dashboards/admin-quiz-attempts.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >Admin Quiz</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="pages/dashboards/admin-settings.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >Setting</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </li>
                          <li class="relative group/nested">
                            <a
                              href="pages/dashboards/instructor-dashboard.html"
                              class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg flex justify-between items-center dark:bg-whiteColor-dark dark:text-contentColor-dark dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                              >Instructor <i class="icofont-rounded-right"></i>
                            </a>
                            <!-- nested dropdown menu -->
                            <!-- dropdown menu -->
                            <div
                              class="nested-dropdown absolute left-full top-0 z-50 hidden opacity-0 group-hover/nested:block group-hover/nested:opacity-100"
                              style="transition: 0.3s"
                            >
                              <div
                                class="shadow-dropdown max-w-dropdown2 w-2000 py-14px rounded-standard bg-white dark:bg-whiteColor-dark"
                              >
                                <ul>
                                  <li>
                                    <a
                                      href="pages/dashboards/instructor-dashboard.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >Ins. Dashboard
                                    </a>
                                  </li>
                                  <li>
                                    <a
                                      href="pages/dashboards/instructor-profile.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >Ins. Profile
                                    </a>
                                  </li>
                                  <li>
                                    <a
                                      href="pages/dashboards/instructor-message.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >Message</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="pages/dashboards/instructor-wishlist.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >Wishlist
                                    </a>
                                  </li>
                                  <li>
                                    <a
                                      href="pages/dashboards/instructor-reviews.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >Review</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="pages/dashboards/instructor-my-quiz-attempts.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >My Quiz</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="pages/dashboards/instructor-order-history.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >Order History</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="pages/dashboards/instructor-course.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >My Courses</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="pages/dashboards/instructor-announcments.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >Announcements</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="pages/dashboards/instructor-quiz-attempts.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >Quiz Attempts</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="pages/dashboards/instructor-assignments.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >Assignment</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="pages/dashboards/instructor-settings.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >Settings</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </li>
                          <li class="relative group/nested">
                            <a
                              href="pages/dashboards/student-dashboard.html"
                              class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg flex justify-between items-center dark:bg-whiteColor-dark dark:text-contentColor-dark dark:hover:bg-whitegrey1-dark dark:hover:text-primaryColor"
                              >Student <i class="icofont-rounded-right"></i
                            ></a>
                            <!-- nested dropdown menu -->
                            <!-- dropdown menu -->
                            <div
                              class="nested-dropdown absolute left-full top-0 z-50 hidden opacity-0 group-hover/nested:block group-hover/nested:opacity-100"
                              style="transition: 0.3s"
                            >
                              <div
                                class="shadow-dropdown max-w-dropdown2 w-2000 py-14px rounded-standard bg-white dark:bg-whiteColor-dark"
                              >
                                <ul>
                                  <li>
                                    <a
                                      href="pages/dashboards/student-dashboard.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >Dashboard
                                    </a>
                                  </li>
                                  <li>
                                    <a
                                      href="pages/dashboards/student-profile.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >Profile
                                    </a>
                                  </li>
                                  <li>
                                    <a
                                      href="pages/dashboards/student-message.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >Message</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="pages/dashboards/student-enrolled-courses.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >Enrolled Courses
                                    </a>
                                  </li>
                                  <li>
                                    <a
                                      href="pages/dashboards/student-wishlist.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >Wishlist
                                    </a>
                                  </li>
                                  <li>
                                    <a
                                      href="pages/dashboards/student-reviews.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >Review</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="pages/dashboards/student-my-quiz-attempts.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >My Quiz</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="pages/dashboards/student-assignments.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >Assignment</a
                                    >
                                  </li>
                                  <li>
                                    <a
                                      href="pages/dashboards/student-settings.html"
                                      class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                                      >Setting</a
                                    >
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
                      href="pages/ecommerce/shop.html"
                      class="px-5 lg:px-10px 2xl:px-15px 3xl:px-5 py-10 lg:py-5 2xl:py-30px 3xl:py-10 leading-sm 2xl:leading-lg text-base lg:text-sm 2xl:text-base font-semibold block group-hover:text-primaryColor dark:text-whiteColor"
                    >
                      eCommerce
                      <i class="icofont-rounded-down"></i>
                    </a>
                    <!-- dropdown menu -->
                    <div
                      class="dropdown absolute left-0 translate-y-10 z-medium hidden opacity-0"
                      style="transition: 0.3s"
                    >
                      <div
                        class="shadow-dropdown max-w-dropdown2 w-2000 py-14px rounded-standard bg-white dark:bg-whiteColor-dark"
                      >
                        <ul>
                          <li>
                            <a
                              href="pages/ecommerce/shop.html"
                              class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                              >Shop
                              <span
                                class="text-size-12 font-semibold text-primaryColor bg-whitegrey3 px-15px py-5px rounded"
                                >Online Store</span
                              >
                            </a>
                          </li>
                          <li>
                            <a
                              href="pages/ecommerce/product-details.html"
                              class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                              >Product Details
                            </a>
                          </li>
                          <li>
                            <a
                              href="pages/ecommerce/cart.html"
                              class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                              >Cart</a
                            >
                          </li>
                          <li>
                            <a
                              href="pages/ecommerce/checkout.html"
                              class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                              >Checkout
                            </a>
                          </li>
                          <li>
                            <a
                              href="pages/ecommerce/wishlist.html"
                              class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark"
                              >Wishlist</a
                            >
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
                    class="px-5 lg:px-10px 2xl:px-5 lg:py-4 2xl:py-26px 3xl:py-9 group"
                  >
                    <a href="pages/ecommerce/cart.html" class="relative block"
                      ><i
                        class="icofont-cart-alt text-2xl text-blackColor group-hover:text-secondaryColor transition-all duration-300 dark:text-blackColor-dark"
                      ></i>
                      <span
                        class="absolute -top-1 2xl:-top-[5px] -right-[10px] lg:right-3/4 2xl:-right-[10px] text-[10px] font-medium text-white dark:text-whiteColor-dark bg-secondaryColor px-1 py-[2px] leading-1 rounded-full z-50 block"
                        >3</span
                      ></a
                    >
                    <!-- dropdown menu -->
                    <div
                      class="dropdown absolute top-full right-0 lg:right-8 z-medium hidden opacity-0"
                      style="transition: 0.3s"
                    >
                      <div
                        class="shadow-dropdown-secodary max-w-dropdown3 w-2000 rounded-standard p-5 bg-white dark:bg-whiteColor-dark"
                      >
                        <ul
                          class="flex flex-col gap-y-5 pb-5 mb-30px border-b border-borderColor dark:border-borderColor-dark"
                        >
                          <li class="relative flex gap-x-15px items-center">
                            <a href="course-details.html"
                              ><img
                                src="../assets/images/grid/cart1.jpg"
                                alt="photo"
                                class="w-card-img py-[3px]"
                            ></a>
                            <div>
                              <a
                                href="course-details.html"
                                class="text-sm text-darkblack hover:text-secondaryColor leading-5 block pb-2 capitalize dark:text-darkblack-dark dark:hover:text-secondaryColor"
                                >web dictionary</a
                              >
                              <p
                                class="text-sm text-darkblack leading-5 block pb-5px dark:text-darkblack-dark"
                              >
                                1 x
                                <span class="text-secondaryColor">$ 80.00</span>
                              </p>
                            </div>

                            <button
                              class="absolute block top-0 right-0 text-base text-contentColor leading-1 hover:text-secondaryColor dark:text-contentColor-dark dark:hover:text-secondaryColor"
                            >
                              <i class="icofont-close-line"></i>
                            </button>
                          </li>
                          <li class="relative flex gap-x-15px items-center">
                            <a href="course-details.html"
                              ><img
                                src="../assets/images/grid/cart2.jpg"
                                alt="photo"
                                class="w-card-img py-[3px]"
                            ></a>
                            <div>
                              <a
                                href="course-details.html"
                                class="text-sm text-darkblack hover:text-secondaryColor leading-5 block pb-2 capitalize dark:text-darkblack-dark dark:hover:text-secondaryColor"
                                >Design Minois</a
                              >
                              <p
                                class="text-sm text-darkblack leading-5 block pb-5px dark:text-darkblack-dark"
                              >
                                1 x
                                <span class="text-secondaryColor">$ 60.00</span>
                              </p>
                            </div>

                            <button
                              class="absolute block top-0 right-0 text-base text-contentColor leading-1 hover:text-secondaryColor dark:text-contentColor-dark dark:hover:text-secondaryColor"
                            >
                              <i class="icofont-close-line"></i>
                            </button>
                          </li>
                          <li class="relative flex gap-x-15px items-center">
                            <a href="course-details.html"
                              ><img
                                src="../assets/images/grid/cart3.jpg"
                                alt="photo"
                                class="w-card-img py-[3px]"
                            ></a>
                            <div>
                              <a
                                href="course-details.html"
                                class="text-sm text-darkblack hover:text-secondaryColor leading-5 block pb-2 capitalize dark:text-darkblack-dark dark:hover:text-secondaryColor"
                                >Crash Course</a
                              >
                              <p
                                class="text-sm text-darkblack leading-5 block pb-5px dark:text-darkblack-dark"
                              >
                                1 x
                                <span class="text-secondaryColor">$ 70.00</span>
                              </p>
                            </div>

                            <button
                              class="absolute block top-0 right-0 text-base text-contentColor leading-1 hover:text-secondaryColor dark:text-contentColor-dark dark:hover:text-secondaryColor"
                            >
                              <i class="icofont-close-line"></i>
                            </button>
                          </li>
                        </ul>
                        <!-- total price -->
                        <div>
                          <p
                            class="text-size-17 text-contentColor dark:text-contentColor-dark pb-5 flex justify-between"
                          >
                            Total Price:
                            <span class="font-bold text-secondaryColor"
                              >$ 210.00</span
                            >
                          </p>
                        </div>

                        <!-- action buttons -->
                        <div class="flex flex-col gap-y-5">
                          <a
                            href="pages/ecommerce/cart.html"
                            class="text-sm font-bold text-contentColor dark:text-contentColor-dark hover:text-whiteColor hover:bg-secondaryColor text-center py-10px border border-secondaryColor"
                            >View Cart</a
                          >
                          <a
                            href="pages/ecommerce/checkout.html"
                            class="text-sm font-bold bg-darkblack dark:bg-darkblack-dark text-whiteColor dark:text-whiteColor-dark hover:bg-secondaryColor dark:hover:bg-secondaryColor text-center py-10px"
                            >Checkout</a
                          >
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="hidden lg:block">
                    <a
                      href="login.html"
                      class="text-size-12 2xl:text-size-15 px-15px py-2 text-blackColor hover:text-whiteColor bg-whiteColor block hover:bg-primaryColor border border-borderColor1 rounded-standard font-semibold mr-[7px] 2xl:mr-15px dark:text-blackColor-dark dark:bg-whiteColor-dark dark:hover:bg-primaryColor dark:hover:text-whiteColor dark:hover:border-primaryColor"
                      ><i class="icofont-user-alt-5"></i
                    ></a>
                  </li>
                  <li class="hidden lg:block">
                    <a
                      href="#"
                      class="text-size-12 2xl:text-size-15 text-whiteColor bg-primaryColor block border-primaryColor border hover:text-primaryColor hover:bg-white px-15px py-2 rounded-standard dark:hover:bg-whiteColor-dark dark: dark:hover:text-whiteColor"
                      >Get Start</a
                    >
                  </li>
                  <li class="block lg:hidden">
                    <button
                      class="open-mobile-menu text-3xl text-darkdeep1 hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                    >
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
        class="mobile-menu w-mobile-menu-sm md:w-mobile-menu-lg fixed top-0 -right-[280px] md:-right-[330px] transition-all duration-500 w-mobile-menu h-full shadow-dropdown-secodary bg-whiteColor dark:bg-whiteColor-dark z-high block lg:hidden"
      >
        <button
          class="close-mobile-menu text-lg bg-darkdeep1 hover:bg-secondaryColor text-white px-[11px] py-[6px] absolute top-0 right-full hidden"
        >
          <i class="icofont icofont-close-line"></i>
        </button>
        <!-- mobile menu wrapper -->
        <div
          class="px-5 md:px-30px pt-5 md:pt-10 pb-50px h-full overflow-y-auto"
        >
          <!-- search input  -->
          <div
            class="pb-10 border-b border-borderColor dark:border-borderColor-dark"
          >
            <form
              class="flex justify-between items-center w-full bg-whitegrey2 dark:bg-whitegrey2-dark px-15px py-[11px]"
            >
              <input
                type="text"
                placeholder="Search entire store..."
                class="bg-transparent w-4/5 focus:outline-none text-sm text-darkdeep1 dark:text-blackColor-dark"
              >
              <button
                class="block text-lg text-darkdeep1 hover:text-secondaryColor dark:text-blackColor-dark dark:hover:text-secondaryColor"
              >
                <i class="icofont icofont-search-2"></i>
              </button>
            </form>
          </div>

          <!-- mobile menu accordions -->
          <div
            class="pt-8 pb-6 border-b border-borderColor dark:border-borderColor-dark"
          >
            <ul class="accordion-container">
              <li class="accordion">
                <!-- accordion header -->
                <div class="flex items-center justify-between">
                  <a
                    class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                    href="index.html"
                    >Home</a
                  >
                  <button class="accordion-controller px-3 py-4">
                    <span
                      class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                    ></span
                    ><span
                      class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-500"
                    ></span>
                  </button>
                </div>
                <!-- accordion content -->
                <div
                  class="accordion-content h-0 overflow-hidden transition-all duration-500"
                >
                  <div class="content-wrapper">
                    <ul class="accordion-container">
                      <li class="accordion">
                        <!-- accordion header -->
                        <div class="flex items-center justify-between">
                          <a
                            href="index.html"
                            class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                            >Home Light</a
                          >
                          <button class="accordion-controller px-3 py-4">
                            <span
                              class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                            ></span
                            ><span
                              class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-500"
                            ></span>
                          </button>
                        </div>
                        <!-- accordion content -->
                        <div
                          class="accordion-content h-0 overflow-hidden transition-all duration-500"
                        >
                          <div class="content-wrapper">
                            <!-- Dropdown -->
                            <ul>
                              <li>
                                <a
                                  href="index.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Home (Default)</a
                                >
                              </li>

                              <li>
                                <a
                                  href="home-2.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Elegant</a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-3.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Classic</a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-4.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Classic LMS</a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-5.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Online Course</a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-6.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Marketplace</a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-7.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >University</a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-8.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >ECommerce</a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-9.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Kindergarten</a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-10.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Machine Learning</a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-11.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Single Course</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>

                      <li class="accordion">
                        <!-- accordion header -->
                        <div class="flex items-center justify-between">
                          <a
                            href="index-dark.html"
                            class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                            >Home Dark</a
                          >
                          <button class="accordion-controller px-3 py-4">
                            <span
                              class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                            ></span
                            ><span
                              class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-500"
                            ></span>
                          </button>
                        </div>
                        <!-- accordion content -->
                        <div
                          class="accordion-content h-0 overflow-hidden transition-all duration-500"
                        >
                          <div class="content-wrapper">
                            <!-- Dropdown -->
                            <ul>
                              <li>
                                <a
                                  href="index-dark.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Home Default (Dark)</a
                                >
                              </li>

                              <li>
                                <a
                                  href="home-2-dark.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Elegant (Dark)</a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-3-dark.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Classic (Dark)</a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-4-dark.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Classic LMS (Dark)</a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-5-dark.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Online Course (Dark)</a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-6-dark.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Marketplace (Dark)</a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-7-dark.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >University (Dark)</a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-8-dark.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >ECommerce (Dark)</a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-9-dark.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Kindergarten (Dark)</a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-10-dark.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Machine Learning (Dark)</a
                                >
                              </li>
                              <li>
                                <a
                                  href="home-11-dark.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Single Course (Dark)</a
                                >
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
                    href="#"
                    >Pages</a
                  >
                  <button class="accordion-controller px-3 py-4">
                    <span
                      class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                    ></span
                    ><span
                      class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-500"
                    ></span>
                  </button>
                </div>
                <!-- accordion content -->
                <div
                  class="accordion-content h-0 overflow-hidden transition-all duration-500"
                >
                  <div class="content-wrapper">
                    <ul class="accordion-container">
                      <li class="accordion">
                        <!-- accordion header -->
                        <div class="flex items-center justify-between">
                          <a
                            href="#"
                            class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                            >Get Started 1</a
                          >
                          <button class="accordion-controller px-3 py-4">
                            <span
                              class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                            ></span
                            ><span
                              class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"
                            ></span>
                          </button>
                        </div>
                        <!-- accordion content -->
                        <div
                          class="accordion-content h-0 overflow-hidden transition-all duration-300"
                        >
                          <div class="content-wrapper">
                            <!-- Dropdown -->
                            <ul>
                              <li>
                                <a
                                  href="about.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >About</a
                                >
                              </li>

                              <li>
                                <a
                                  href="about-dark.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >About (Dark)</a
                                >
                              </li>
                              <li>
                                <a
                                  href="blog.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Block</a
                                >
                              </li>
                              <li>
                                <a
                                  href="blog-dark.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Block (Dark)</a
                                >
                              </li>
                              <li>
                                <a
                                  href="blog-details.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Block Details</a
                                >
                              </li>
                              <li>
                                <a
                                  href="blog-details-dark.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Block Details (Dark)</a
                                >
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
                            class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                            >Get Started 2</a
                          >
                          <button class="accordion-controller px-3 py-4">
                            <span
                              class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                            ></span
                            ><span
                              class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"
                            ></span>
                          </button>
                        </div>
                        <!-- accordion content -->
                        <div
                          class="accordion-content h-0 overflow-hidden transition-all duration-300"
                        >
                          <div class="content-wrapper">
                            <!-- Dropdown -->
                            <ul>
                              <li>
                                <a
                                  href="error.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Error 404</a
                                >
                              </li>

                              <li>
                                <a
                                  href="error-dark.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Error (Dark)</a
                                >
                              </li>
                              <li>
                                <a
                                  href="event-details.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Event Details</a
                                >
                              </li>
                              <li>
                                <a
                                  href="pages/zoom/zoom-meetings.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Zoom
                                  <span
                                    class="px-15px py-5px text-primaryColor bg-whitegrey3 text-xs rounded ml-5px"
                                    >Online Call</span
                                  ></a
                                >
                              </li>
                              <li>
                                <a
                                  href="pages/zoom/zoom-meetings-dark.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Zoom Meeting (Dark)</a
                                >
                              </li>
                              <li>
                                <a
                                  href="pages/zoom/zoom-meeting-details.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Zoom Meeting Details</a
                                >
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
                            class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                            >Get Started 3</a
                          >
                          <button class="accordion-controller px-3 py-4">
                            <span
                              class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                            ></span
                            ><span
                              class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"
                            ></span>
                          </button>
                        </div>
                        <!-- accordion content -->
                        <div
                          class="accordion-content h-0 overflow-hidden transition-all duration-300"
                        >
                          <div class="content-wrapper">
                            <!-- Dropdown -->
                            <ul>
                              <li>
                                <a
                                  href="pages/zoom/zoom-meeting-details-dark.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Meeting Details (Dark)</a
                                >
                              </li>

                              <li>
                                <a
                                  href="login.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Login</a
                                >
                              </li>
                              <li>
                                <a
                                  href="login-dark.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Login (Dark)</a
                                >
                              </li>
                              <li>
                                <a
                                  href="maintenance.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Maintenance</a
                                >
                              </li>
                              <li>
                                <a
                                  href="maintenance-dark.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Maintenance (Dark)</a
                                >
                              </li>
                              <li>
                                <a
                                  href="#"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Term & Condition</a
                                >
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
                            class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                            >Get Started 4</a
                          >
                          <button class="accordion-controller px-3 py-4">
                            <span
                              class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                            ></span
                            ><span
                              class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"
                            ></span>
                          </button>
                        </div>
                        <!-- accordion content -->
                        <div
                          class="accordion-content h-0 overflow-hidden transition-all duration-300"
                        >
                          <div class="content-wrapper">
                            <!-- Dropdown -->
                            <ul>
                              <li>
                                <a
                                  href="#"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Term & Condition (Dark)</a
                                >
                              </li>

                              <li>
                                <a
                                  href="#"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Privacy Policy
                                </a>
                              </li>
                              <li>
                                <a
                                  href="#"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Privacy Policy (Dark)</a
                                >
                              </li>
                              <li>
                                <a
                                  href="#"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Success Stories</a
                                >
                              </li>
                              <li>
                                <a
                                  href="#"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Success Stories (Dark)</a
                                >
                              </li>
                              <li>
                                <a
                                  href="#"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Work Policy</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li>
                        <a href="#" class="pl-15px pt-3 pb-7px"
                          ><img
                            class="w-full"
                            src="../assets/images/mega/mega_menu_2.png"
                            alt=""
                        ></a>
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
                    href="course.html"
                    >Courses</a
                  >
                  <button class="accordion-controller px-3 py-4">
                    <span
                      class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                    ></span
                    ><span
                      class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-500"
                    ></span>
                  </button>
                </div>
                <!-- accordion content -->
                <div
                  class="accordion-content h-0 overflow-hidden transition-all duration-500"
                >
                  <div class="content-wrapper">
                    <ul class="accordion-container">
                      <li class="accordion">
                        <!-- accordion header -->
                        <div class="flex items-center justify-between">
                          <a
                            href="#"
                            class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                            >Get Started 1</a
                          >
                          <button class="accordion-controller px-3 py-4">
                            <span
                              class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                            ></span
                            ><span
                              class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"
                            ></span>
                          </button>
                        </div>
                        <!-- accordion content -->
                        <div
                          class="accordion-content h-0 overflow-hidden transition-all duration-300"
                        >
                          <div class="content-wrapper">
                            <!-- Dropdown -->
                            <ul>
                              <li>
                                <a
                                  href="course.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Grid</a
                                >
                              </li>

                              <li>
                                <a
                                  href="course-dark.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Course Grid (Dark)</a
                                >
                              </li>
                              <li>
                                <a
                                  href="course-dark.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Course Grid</a
                                >
                              </li>
                              <li>
                                <a
                                  href="course-grid-dark.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Course Grid (Dark)</a
                                >
                              </li>
                              <li>
                                <a
                                  href="course-list.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Course List</a
                                >
                              </li>
                              <li>
                                <a
                                  href="course-list-dark.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Course List (Dark)</a
                                >
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
                            class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                            >Get Started 2</a
                          >
                          <button class="accordion-controller px-3 py-4">
                            <span
                              class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                            ></span
                            ><span
                              class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"
                            ></span>
                          </button>
                        </div>
                        <!-- accordion content -->
                        <div
                          class="accordion-content h-0 overflow-hidden transition-all duration-300"
                        >
                          <div class="content-wrapper">
                            <!-- Dropdown -->
                            <ul>
                              <li>
                                <a
                                  href="course-details.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Course Details</a
                                >
                              </li>

                              <li>
                                <a
                                  href="course-details-dark.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Course Details (Dark)</a
                                >
                              </li>
                              <li>
                                <a
                                  href="course-details-2.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Course Details 2</a
                                >
                              </li>
                              <li>
                                <a
                                  href="course-details-2-dark.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Details 2 (Dark)
                                </a>
                              </li>
                              <li>
                                <a
                                  href="course-details-3.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Course Details 3</a
                                >
                              </li>
                              <li>
                                <a
                                  href="course-details-3-dark.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Details 3 (Dark)</a
                                >
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
                            class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                            >Get Started 3</a
                          >
                          <button class="accordion-controller px-3 py-4">
                            <span
                              class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                            ></span
                            ><span
                              class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"
                            ></span>
                          </button>
                        </div>
                        <!-- accordion content -->
                        <div
                          class="accordion-content h-0 overflow-hidden transition-all duration-300"
                        >
                          <div class="content-wrapper">
                            <!-- Dropdown -->
                            <ul>
                              <li>
                                <a
                                  href="pages/dashboards/become-an-instructor.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Become An Instructor</a
                                >
                              </li>

                              <li>
                                <a
                                  href="pages/dashboards/create-course.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Create Course
                                  <span
                                    class="px-15px py-5px text-primaryColor bg-whitegrey3 text-xs rounded ml-5px"
                                    >Career</span
                                  >
                                </a>
                              </li>
                              <li>
                                <a
                                  href="instructor.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Instructor</a
                                >
                              </li>
                              <li>
                                <a
                                  href="instructor-dark.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Instructor (Dark)</a
                                >
                              </li>
                              <li>
                                <a
                                  href="instructor-details.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Instructor Details</a
                                >
                              </li>
                              <li>
                                <a
                                  href="lesson.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Course Lesson
                                  <span
                                    class="px-15px py-5px text-secondaryColor bg-whitegrey3 text-xs rounded ml-5px"
                                    >New</span
                                  >
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>

                      <li>
                        <a href="#" class="pl-15px pt-3 pb-7px"
                          ><img
                            class="w-full"
                            src="../assets/images/mega/mega_menu_1.png"
                            alt=""
                        ></a>
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
                    href="pages/dashboards/instructor-dashboard.html"
                    >Dashboard</a
                  >
                  <button class="accordion-controller px-3 py-4">
                    <span
                      class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                    ></span
                    ><span
                      class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-500"
                    ></span>
                  </button>
                </div>
                <!-- accordion content -->
                <div
                  class="accordion-content h-0 overflow-hidden transition-all duration-500"
                >
                  <div class="content-wrapper">
                    <ul class="accordion-container">
                      <li class="accordion">
                        <!-- accordion header -->
                        <div class="flex items-center justify-between">
                          <a
                            href="pages/dashboards/admin-dashboard.html"
                            class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                            >Admin</a
                          >
                          <button class="accordion-controller px-3 py-4">
                            <span
                              class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                            ></span
                            ><span
                              class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"
                            ></span>
                          </button>
                        </div>
                        <!-- accordion content -->
                        <div
                          class="accordion-content h-0 overflow-hidden transition-all duration-300"
                        >
                          <div class="content-wrapper">
                            <!-- Dropdown -->
                            <ul>
                              <li>
                                <a
                                  href="pages/dashboards/admin-dashboard.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Admin Dashboard</a
                                >
                              </li>

                              <li>
                                <a
                                  href="pages/dashboards/admin-profile.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Admin Profile</a
                                >
                              </li>
                              <li>
                                <a
                                  href="pages/dashboards/admin-message.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Message</a
                                >
                              </li>
                              <li>
                                <a
                                  href="pages/dashboards/admin-course.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Courses</a
                                >
                              </li>
                              <li>
                                <a
                                  href="pages/dashboards/admin-reviews.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Review</a
                                >
                              </li>
                              <li>
                                <a
                                  href="pages/dashboards/admin-quiz-attempts.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Admin Quiz</a
                                >
                              </li>
                              <li>
                                <a
                                  href="pages/dashboards/admin-settings.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Settings</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li class="accordion">
                        <!-- accordion header -->
                        <div class="flex items-center justify-between">
                          <a
                            href="pages/dashboards/instructor-dashboard.html"
                            class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                            >Instructor</a
                          >
                          <button class="accordion-controller px-3 py-4">
                            <span
                              class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                            ></span
                            ><span
                              class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"
                            ></span>
                          </button>
                        </div>
                        <!-- accordion content -->
                        <div
                          class="accordion-content h-0 overflow-hidden transition-all duration-300"
                        >
                          <div class="content-wrapper">
                            <!-- Dropdown -->
                            <ul>
                              <li>
                                <a
                                  href="pages/dashboards/instructor-dashboard.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Inst. Dashboard</a
                                >
                              </li>

                              <li>
                                <a
                                  href="pages/dashboards/instructor-profile.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Inst. Profile</a
                                >
                              </li>
                              <li>
                                <a
                                  href="pages/dashboards/instructor-message.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Message</a
                                >
                              </li>
                              <li>
                                <a
                                  href="pages/dashboards/instructor-wishlist.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Wishlist
                                </a>
                              </li>
                              <li>
                                <a
                                  href="pages/dashboards/instructor-reviews.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Review</a
                                >
                              </li>
                              <li>
                                <a
                                  href="pages/dashboards/instructor-my-quiz-attempts.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >My Quiz</a
                                >
                              </li>
                              <li>
                                <a
                                  href="pages/dashboards/instructor-order-history.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Order History</a
                                >
                              </li>
                              <li>
                                <a
                                  href="pages/dashboards/instructor-course.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >My Courses</a
                                >
                              </li>
                              <li>
                                <a
                                  href="pages/dashboards/instructor-announcments.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Announcements</a
                                >
                              </li>
                              <li>
                                <a
                                  href="pages/dashboards/instructor-quiz-attempts.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Quiz Attempts</a
                                >
                              </li>
                              <li>
                                <a
                                  href="pages/dashboards/instructor-assignments.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Assignments</a
                                >
                              </li>
                              <li>
                                <a
                                  href="pages/dashboards/instructor-settings.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Settings</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li class="accordion">
                        <!-- accordion header -->
                        <div class="flex items-center justify-between">
                          <a
                            href="pages/dashboards/student-dashboard.html"
                            class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                            >Student</a
                          >
                          <button class="accordion-controller px-3 py-4">
                            <span
                              class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                            ></span
                            ><span
                              class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"
                            ></span>
                          </button>
                        </div>
                        <!-- accordion content -->
                        <div
                          class="accordion-content h-0 overflow-hidden transition-all duration-300"
                        >
                          <div class="content-wrapper">
                            <!-- Dropdown -->
                            <ul>
                              <li>
                                <a
                                  href="pages/dashboards/student-dashboard.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Dashboard</a
                                >
                              </li>

                              <li>
                                <a
                                  href="pages/dashboards/student-profile.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Profile
                                </a>
                              </li>
                              <li>
                                <a
                                  href="pages/dashboards/student-message.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Message</a
                                >
                              </li>
                              <li>
                                <a
                                  href="pages/dashboards/student-enrolled-courses.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Enrolled Courses</a
                                >
                              </li>
                              <li>
                                <a
                                  href="pages/dashboards/student-wishlist.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Wishlist</a
                                >
                              </li>
                              <li>
                                <a
                                  href="pages/dashboards/student-reviews.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Review
                                </a>
                              </li>
                              <li>
                                <a
                                  href="pages/dashboards/student-my-quiz-attempts.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >My Quiz
                                </a>
                              </li>
                              <li>
                                <a
                                  href="pages/dashboards/student-assignments.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Assignment
                                </a>
                              </li>
                              <li>
                                <a
                                  href="pages/dashboards/student-settings.html"
                                  class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                                  >Settings
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
                    href="pages/ecommerce/shop.html"
                    >ECommerce</a
                  >
                  <button class="accordion-controller px-3 py-4">
                    <span
                      class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"
                    ></span
                    ><span
                      class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-500"
                    ></span>
                  </button>
                </div>
                <!-- accordion content -->
                <div
                  class="accordion-content h-0 overflow-hidden transition-all duration-500"
                >
                  <div class="content-wrapper">
                    <ul>
                      <li>
                        <!-- accordion header -->
                        <div class="flex items-center justify-between">
                          <a
                            href="pages/ecommerce/shop.html"
                            class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                            >Shop
                            <span
                              class="px-15px py-5px text-primaryColor bg-whitegrey3 text-xs rounded ml-5px"
                              >Online Store</span
                            ></a
                          >
                        </div>
                      </li>
                      <li>
                        <!-- accordion header -->
                        <div class="flex items-center justify-between">
                          <a
                            href="pages/ecommerce/product-details.html"
                            class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                            >Product Details</a
                          >
                        </div>
                        <!-- accordion content -->
                      </li>
                      <li>
                        <!-- accordion header -->
                        <div class="flex items-center justify-between">
                          <a
                            href="pages/ecommerce/cart.html"
                            class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                            >Cart</a
                          >
                        </div>
                        <!-- accordion content -->
                      </li>
                      <li>
                        <!-- accordion header -->
                        <div class="flex items-center justify-between">
                          <a
                            href="pages/ecommerce/checkout.html"
                            class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                            >Checkout</a
                          >
                        </div>
                        <!-- accordion content -->
                      </li>
                      <li>
                        <!-- accordion header -->
                        <div class="flex items-center justify-between">
                          <a
                            href="pages/ecommerce/wishlist.html"
                            class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                            >Wishlist</a
                          >
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
              class="accordion-container mt-9 mb-30px pb-9 border-b border-borderColor dark:border-borderColor-dark"
            >
              <li class="accordion group">
                <!-- accordion header -->
                <div
                  class="accordion-controller flex items-center justify-between"
                >
                  <a
                    class="leading-1 text-darkdeep1 font-medium group-hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                    href="#"
                    >My Account</a
                  >
                  <button class="px-3 py-1">
                    <i
                      class="icofont-thin-down text-size-15 text-darkdeep1 group-hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                    ></i>
                  </button>
                </div>
                <!-- accordion content -->
                <div
                  class="accordion-content h-0 overflow-hidden transition-all duration-500 shadow-standard"
                >
                  <div class="content-wrapper">
                    <ul>
                      <li>
                        <!-- accordion header -->
                        <div class="flex items-center gap-1">
                          <a
                            href="login.html"
                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-7 pb-3 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                            >Login
                          </a>

                          <a
                            href="login.html"
                            class="leading-1 text-darkdeep1 text-sm pr-30px pt-7 pb-4 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                          >
                            <span>/</span> Create Account
                          </a>
                        </div>
                      </li>
                      <li>
                        <!-- accordion header -->
                        <div class="flex items-center justify-between">
                          <a
                            href="login.html"
                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                            >My Account</a
                          >
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
                <a class="facebook" href="#"
                  ><i
                    class="icofont icofont-facebook text-fb-color dark:text-whiteColor dark:hover:text-secondaryColor"
                  ></i
                ></a>
              </li>
              <li>
                <a class="twitter" href="#"
                  ><i
                    class="icofont icofont-twitter text-twiter-color dark:text-whiteColor dark:hover:text-secondaryColor"
                  ></i
                ></a>
              </li>
              <li>
                <a class="pinterest" href="#"
                  ><i
                    class="icofont icofont-pinterest dark:text-whiteColor dark:hover:text-secondaryColor"
                  ></i
                ></a>
              </li>
              <li>
                <a class="instagram" href="#"
                  ><i
                    class="icofont icofont-instagram dark:text-whiteColor dark:hover:text-secondaryColor"
                  ></i
                ></a>
              </li>
              <li>
                <a class="google" href="#"
                  ><i
                    class="icofont icofont-youtube-play dark:text-whiteColor dark:hover:text-secondaryColor"
                  ></i
                ></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>

    <!-- main body -->
    <main class="bg-transparent">
      <!-- banner section -->
      <section>
        <!-- banner section -->
        <div
          class="bg-lightGrey10 dark:bg-lightGrey10-dark relative z-0 overflow-y-visible py-50px"
        >
          <!-- animated icons -->
          <div>
            <img
              class="absolute left-0 bottom-0 md:left-[14px] lg:left-[50px] lg:bottom-[21px] 2xl:left-[165px] 2xl:bottom-[60px] animate-move-var z-10"
              src="../assets/images/herobanner/herobanner__1.png"
              alt=""
            ><img
              class="absolute left-0 top-0 lg:left-[50px] lg:top-[100px] animate-spin-slow"
              src="../assets/images/herobanner/herobanner__2.png"
              alt=""
            ><img
              class="absolute right-[30px] top-0 md:right-10 lg:right-[575px] 2xl:top-20 animate-move-var2 opacity-50 hidden md:block"
              src="../assets/images/herobanner/herobanner__3.png"
              alt=""
            >

            <img
              class="absolute right-[30px] top-[212px] md:right-10 md:top-[157px] lg:right-[45px] lg:top-[100px] animate-move-hor"
              src="../assets/images/herobanner/herobanner__5.png"
              alt=""
            >
          </div>
          <div class="container">
            <div>
              <ul class="flex gap-1">
                <li>
                  <a
                    href="index.html"
                    class="text-lg text-blackColor2 dark:text-blackColor2-dark"
                    >Home <i class="icofont-simple-right"></i
                  ></a>
                </li>
                <li>
                  <span
                    class="text-lg text-blackColor2 dark:text-blackColor2-dark"
                    >Course-Details</span
                  >
                </li>
              </ul>
              <div class="pt-70px">
                <div class="flex items center gap-6 mb-30px" data-aos="fade-up">
                  <button
                    class="text-sm text-whiteColor bg-primaryColor border border-primaryColor px-26px py-0.5 leading-23px font-semibold hover:text-primaryColor hover:bg-whiteColor rounded inline-block dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor"
                  >
                    Featured
                  </button>
                  <button
                    class="text-sm text-whiteColor bg-secondaryColor border border-secondaryColor px-22px py-0.5 leading-23px font-semibold hover:text-secondaryColor hover:bg-whiteColor rounded inline-block dark:hover:bg-whiteColor-dark dark:hover:text-secondaryColor"
                  >
                    Ux Design
                  </button>
                </div>
                <!-- titile -->
                <h4
                  class="text-size-32 md:text-4xl font-bold text-blackColor dark:text-blackColor-dark mb-15px leading-43px md:leading-14.5"
                  data-aos="fade-up"
                >
                  Making Music with Other People
                </h4>
                <!-- price and rating -->
                <div
                  class="flex gap-5 flex-wrap items-center mb-30px"
                  data-aos="fade-up"
                >
                  <div class="flex items-center">
                    <div>
                      <i
                        class="icofont-book-alt pr-5px text-primaryColor text-sm"
                      ></i>
                    </div>
                    <div>
                      <span
                        class="text-sm text-black dark:text-blackColor-dark font medium"
                        >23 Lesson</span
                      >
                    </div>
                  </div>
                  <div class="text-start md:text-end">
                    <i class="icofont-star text-size-15 text-yellow"></i>
                    <i class="icofont-star text-size-15 text-yellow"></i>
                    <i class="icofont-star text-size-15 text-yellow"></i>
                    <i class="icofont-star text-size-15 text-yellow"></i>
                    <i class="icofont-star text-size-15 text-yellow"></i>

                    <span
                      class="text-xs text-blackColor dark:text-blackColor-dark"
                      >(44)</span
                    >
                  </div>
                  <div>
                    <p
                      class="text-sm text-contentColor dark:text-contentColor-dark font-medium"
                    >
                      Last Update:
                      <span class="text-blackColor dark:text-blackColor-dark"
                        >Sep 29, 2024</span
                      >
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--course details section -->
      <section>
        <div class="container py-10 md:py-50px lg:py-60px 2xl:py-100px">
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-30px">
            <div class="lg:col-start-1 lg:col-span-8 space-y-[35px]">
              <!-- course 1 -->
              <div data-aos="fade-up">
                <!-- course content -->
                <div>
                  <!-- course tab -->
                  <div data-aos="fade-up" class="tab course-details-tab">
                    <div
                      class="tab-links flex flex-wrap md:flex-nowrap mb-30px rounded gap-0.5"
                    >
                      <button
                        class="is-checked relative p-10px md:px-25px md:py-15px lg:py-3 2xl:py-15px 2xl:px-45px text-blackColor bg-whiteColor hover:bg-primaryColor hover:text-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark dark:hover:bg-primaryColor dark:hover:text-whiteColor flex items-center"
                      >
                        <i class="icofont-book-alt mr-2"></i> Curriculum
                      </button>
                      <button
                        class="is-checked relative p-10px md:px-25px md:py-15px lg:py-3 2xl:py-15px 2xl:px-45px text-blackColor bg-whiteColor hover:bg-primaryColor hover:text-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark dark:hover:bg-primaryColor dark:hover:text-whiteColor flex items-center active"
                      >
                        <i class="icofont-paper mr-2"></i> Description
                      </button>

                      <button
                        class="is-checked relative p-10px md:px-25px md:py-15px lg:py-3 2xl:py-15px 2xl:px-45px text-blackColor bg-whiteColor hover:bg-primaryColor hover:text-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark dark:hover:bg-primaryColor dark:hover:text-whiteColor flex items-center"
                      >
                        <i class="icofont-star mr-2"></i> Reviews
                      </button>
                      <button
                        class="is-checked relative p-10px md:px-25px md:py-15px lg:py-3 2xl:py-15px 2xl:px-45px text-blackColor bg-whiteColor hover:bg-primaryColor hover:text-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark dark:hover:bg-primaryColor dark:hover:text-whiteColor flex items-center"
                      >
                        <i class="icofont-teacher mr-2"></i> Instructor
                      </button>
                    </div>

                    <div class="tab-contents">
                      <!-- curriculum -->
                      <div class="hidden">
                        <ul class="accordion-container curriculum">
                          <!-- accordion -->
                          <li class="accordion mb-25px overflow-hidden active">
                            <div
                              class="bg-whiteColor border border-borderColor dark:bg-whiteColor-dark dark:border-borderColor-dark rounded-t-md"
                            >
                              <!-- controller -->
                              <div>
                                <div
                                  class="cursor-pointer accordion-controller flex justify-between items-center text-xl text-headingColor font-bold w-full px-5 py-18px dark:text-headingColor-dark font-hind leading-[20px]"
                                >
                                  <div class="flex items-center">
                                    <span>Intro Course content</span>
                                    <p
                                      class="text-xs text-headingColor dark:text-headingColor-dark px-10px py-0.5 ml-10px bg-borderColor dark:bg-borderColor-dark rounded-full"
                                    >
                                      02hr 35min
                                    </p>
                                  </div>
                                  <svg
                                    class="transition-all duration-500 rotate-0"
                                    width="20"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 16 16"
                                    fill="#212529"
                                  >
                                    <path
                                      fill-rule="evenodd"
                                      d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"
                                    ></path>
                                  </svg>
                                </div>
                              </div>
                              <!-- content -->
                              <div
                                class="accordion-content transition-all duration-500"
                              >
                                <div class="content-wrapper p-10px md:px-30px">
                                  <ul>
                                    <li
                                      class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark"
                                    >
                                      <div>
                                        <h4
                                          class="text-blackColor dark:text-blackColor-dark leading-1 font-light"
                                        >
                                          <i
                                            class="icofont-video-alt mr-10px"
                                          ></i>
                                          <span class="font-medium">
                                            Video :
                                          </span>
                                          Lorem ipsum dolor sit amet.
                                        </h4>
                                      </div>
                                      <div
                                        class="text-blackColor dark:text-blackColor-dark text-sm flex items-center"
                                      >
                                        <p>
                                          <i class="icofont-clock-time"></i> 22
                                          minutes
                                        </p>
                                        <a
                                          href="lesson.html"
                                          class="bg-primaryColor text-whiteColor text-sm ml-5 rounded py-0.5"
                                        >
                                          <p class="px-10px">
                                            <i class="icofont-eye"></i> Preview
                                          </p>
                                        </a>
                                      </div>
                                    </li>
                                    <li
                                      class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark"
                                    >
                                      <div>
                                        <h4
                                          class="text-blackColor dark:text-blackColor-dark leading-1 font-light"
                                        >
                                          <i
                                            class="icofont-video-alt mr-10px"
                                          ></i>
                                          <span class="font-medium">
                                            Video :
                                          </span>
                                          Lorem ipsum dolor sit amet.
                                        </h4>
                                      </div>
                                      <div
                                        class="text-blackColor dark:text-blackColor-dark text-sm flex items-center"
                                      >
                                        <p>
                                          <i class="icofont-clock-time"></i> 22
                                          minutes
                                        </p>
                                        <a
                                          href="lesson.html"
                                          class="bg-primaryColor text-whiteColor text-sm ml-5 rounded py-0.5"
                                        >
                                          <p class="px-10px">
                                            <i class="icofont-eye"></i> Preview
                                          </p>
                                        </a>
                                      </div>
                                    </li>
                                    <li
                                      class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark"
                                    >
                                      <div>
                                        <h4
                                          class="text-blackColor dark:text-blackColor-dark leading-1 font-light"
                                        >
                                          <i
                                            class="icofont-video-alt mr-10px"
                                          ></i>
                                          <span class="font-medium">
                                            Video :
                                          </span>
                                          Lorem ipsum dolor sit amet.
                                        </h4>
                                      </div>
                                      <div
                                        class="text-contentColor dark:text-contentColor-dark text-sm"
                                      >
                                        <p>
                                          <i class="icofont-lock"></i>
                                        </p>
                                      </div>
                                    </li>
                                    <li
                                      class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark"
                                    >
                                      <div>
                                        <h4
                                          class="text-blackColor dark:text-blackColor-dark leading-1 font-light"
                                        >
                                          <i
                                            class="icofont-video-alt mr-10px"
                                          ></i>
                                          <span class="font-medium">
                                            Video :
                                          </span>
                                          Lorem ipsum dolor sit amet.
                                        </h4>
                                      </div>
                                      <div
                                        class="text-contentColor dark:text-contentColor-dark text-sm"
                                      >
                                        <p>
                                          <i class="icofont-lock"></i>
                                        </p>
                                      </div>
                                    </li>
                                    <li
                                      class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark"
                                    >
                                      <div>
                                        <h4
                                          class="text-blackColor dark:text-blackColor-dark leading-1 font-light"
                                        >
                                          <i
                                            class="icofont-video-alt mr-10px"
                                          ></i>
                                          <span class="font-medium">
                                            Video :
                                          </span>
                                          Lorem ipsum dolor sit amet.
                                        </h4>
                                      </div>
                                      <div
                                        class="text-contentColor dark:text-contentColor-dark text-sm"
                                      >
                                        <p>
                                          <i class="icofont-lock"></i>
                                        </p>
                                      </div>
                                    </li>
                                    <li
                                      class="py-15px flex items-center justify-between flex-wrap"
                                    >
                                      <div>
                                        <h4
                                          class="text-blackColor dark:text-blackColor-dark leading-1 font-light"
                                        >
                                          <i
                                            class="icofont-file-text mr-10px"
                                          ></i>
                                          <span class="font-medium">
                                            Lesson 03 Exam :
                                          </span>
                                        </h4>
                                      </div>
                                      <div
                                        class="text-blackColor dark:text-blackColor-dark text-sm"
                                      >
                                        <p>
                                          <i class="icofont-lock"> </i> 20 Ques
                                        </p>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </li>
                          <!-- accordion -->
                          <li class="accordion mb-25px overflow-hidden">
                            <div
                              class="bg-whiteColor border border-borderColor dark:bg-whiteColor-dark dark:border-borderColor-dark"
                            >
                              <!-- controller -->
                              <div>
                                <div
                                  class="cursor-pointer accordion-controller flex justify-between items-center text-xl text-headingColor font-bold w-full px-5 py-18px dark:text-headingColor-dark font-hind leading-[20px]"
                                >
                                  <div class="flex items-center">
                                    <span>Course Fundamentals</span>
                                    <p
                                      class="text-xs text-headingColor dark:text-headingColor-dark px-10px py-0.5 ml-10px bg-borderColor dark:bg-borderColor-dark rounded-full"
                                    >
                                      1hr 35min
                                    </p>
                                  </div>
                                  <svg
                                    class="transition-all duration-500 rotate-0"
                                    width="20"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 16 16"
                                    fill="#212529"
                                  >
                                    <path
                                      fill-rule="evenodd"
                                      d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"
                                    ></path>
                                  </svg>
                                </div>
                              </div>
                              <!-- content -->
                              <div
                                class="accordion-content transition-all duration-500 h-0"
                              >
                                <div class="content-wrapper p-10px md:px-30px">
                                  <ul>
                                    <li
                                      class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark"
                                    >
                                      <div>
                                        <h4
                                          class="text-blackColor dark:text-blackColor-dark leading-1 font-light"
                                        >
                                          <i
                                            class="icofont-video-alt mr-10px"
                                          ></i>
                                          <span class="font-medium">
                                            Video :
                                          </span>
                                          Lorem ipsum dolor sit amet.
                                        </h4>
                                      </div>
                                      <div
                                        class="text-contentColor dark:text-contentColor-dark text-sm"
                                      >
                                        <p>
                                          <i class="icofont-lock"></i>
                                        </p>
                                      </div>
                                    </li>
                                    <li
                                      class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark"
                                    >
                                      <div>
                                        <h4
                                          class="text-blackColor dark:text-blackColor-dark leading-1 font-light"
                                        >
                                          <i
                                            class="icofont-video-alt mr-10px"
                                          ></i>
                                          <span class="font-medium">
                                            Video :
                                          </span>
                                          Lorem ipsum dolor sit amet.
                                        </h4>
                                      </div>
                                      <div
                                        class="text-contentColor dark:text-contentColor-dark text-sm"
                                      >
                                        <p>
                                          <i class="icofont-lock"></i>
                                        </p>
                                      </div>
                                    </li>
                                    <li
                                      class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark"
                                    >
                                      <div>
                                        <h4
                                          class="text-blackColor dark:text-blackColor-dark leading-1 font-light"
                                        >
                                          <i
                                            class="icofont-video-alt mr-10px"
                                          ></i>
                                          <span class="font-medium">
                                            Video :
                                          </span>
                                          Lorem ipsum dolor sit amet.
                                        </h4>
                                      </div>
                                      <div
                                        class="text-contentColor dark:text-contentColor-dark text-sm"
                                      >
                                        <p>
                                          <i class="icofont-lock"></i>
                                        </p>
                                      </div>
                                    </li>
                                    <li
                                      class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark"
                                    >
                                      <div>
                                        <h4
                                          class="text-blackColor dark:text-blackColor-dark leading-1 font-light"
                                        >
                                          <i
                                            class="icofont-video-alt mr-10px"
                                          ></i>
                                          <span class="font-medium">
                                            Video :
                                          </span>
                                          Lorem ipsum dolor sit amet.
                                        </h4>
                                      </div>
                                      <div
                                        class="text-contentColor dark:text-contentColor-dark text-sm"
                                      >
                                        <p>
                                          <i class="icofont-lock"></i>
                                        </p>
                                      </div>
                                    </li>
                                    <li
                                      class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark"
                                    >
                                      <div>
                                        <h4
                                          class="text-blackColor dark:text-blackColor-dark leading-1 font-light"
                                        >
                                          <i
                                            class="icofont-video-alt mr-10px"
                                          ></i>
                                          <span class="font-medium">
                                            Video :
                                          </span>
                                          Lorem ipsum dolor sit amet.
                                        </h4>
                                      </div>
                                      <div
                                        class="text-contentColor dark:text-contentColor-dark text-sm"
                                      >
                                        <p>
                                          <i class="icofont-lock"></i>
                                        </p>
                                      </div>
                                    </li>
                                    <li
                                      class="py-15px flex items-center justify-between flex-wrap"
                                    >
                                      <div>
                                        <h4
                                          class="text-blackColor dark:text-blackColor-dark leading-1 font-light"
                                        >
                                          <i
                                            class="icofont-file-text mr-10px"
                                          ></i>
                                          <span class="font-medium">
                                            Lesson 03 Exam :
                                          </span>
                                        </h4>
                                      </div>
                                      <div
                                        class="text-blackColor dark:text-blackColor-dark text-sm"
                                      >
                                        <p>
                                          <i class="icofont-lock"> </i> 20 Ques
                                        </p>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </li>
                          <!-- accordion -->
                          <li class="accordion mb-25px overflow-hidden">
                            <div
                              class="bg-whiteColor border border-borderColor dark:bg-whiteColor-dark dark:border-borderColor-dark"
                            >
                              <!-- controller -->
                              <div>
                                <div
                                  class="cursor-pointer accordion-controller flex justify-between items-center text-xl text-headingColor font-bold w-full px-5 py-18px dark:text-headingColor-dark font-hind leading-[20px]"
                                >
                                  <div class="flex items-center">
                                    <span>Course Core Concept</span>
                                    <p
                                      class="text-xs text-headingColor dark:text-headingColor-dark px-10px py-0.5 ml-10px bg-borderColor dark:bg-borderColor-dark rounded-full"
                                    >
                                      3hr 10min
                                    </p>
                                  </div>
                                  <svg
                                    class="transition-all duration-500 rotate-0"
                                    width="20"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 16 16"
                                    fill="#212529"
                                  >
                                    <path
                                      fill-rule="evenodd"
                                      d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"
                                    ></path>
                                  </svg>
                                </div>
                              </div>
                              <!-- content -->
                              <div
                                class="accordion-content transition-all duration-500 h-0"
                              >
                                <div class="content-wrapper p-10px md:px-30px">
                                  <ul>
                                    <li
                                      class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark"
                                    >
                                      <div>
                                        <h4
                                          class="text-blackColor dark:text-blackColor-dark leading-1 font-light"
                                        >
                                          <i
                                            class="icofont-video-alt mr-10px"
                                          ></i>
                                          <span class="font-medium">
                                            Video :
                                          </span>
                                          Lorem ipsum dolor sit amet.
                                        </h4>
                                      </div>
                                      <div
                                        class="text-contentColor dark:text-contentColor-dark text-sm"
                                      >
                                        <p>
                                          <i class="icofont-lock"></i>
                                        </p>
                                      </div>
                                    </li>
                                    <li
                                      class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark"
                                    >
                                      <div>
                                        <h4
                                          class="text-blackColor dark:text-blackColor-dark leading-1 font-light"
                                        >
                                          <i
                                            class="icofont-video-alt mr-10px"
                                          ></i>
                                          <span class="font-medium">
                                            Video :
                                          </span>
                                          Lorem ipsum dolor sit amet.
                                        </h4>
                                      </div>
                                      <div
                                        class="text-contentColor dark:text-contentColor-dark text-sm"
                                      >
                                        <p>
                                          <i class="icofont-lock"></i>
                                        </p>
                                      </div>
                                    </li>
                                    <li
                                      class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark"
                                    >
                                      <div>
                                        <h4
                                          class="text-blackColor dark:text-blackColor-dark leading-1 font-light"
                                        >
                                          <i
                                            class="icofont-video-alt mr-10px"
                                          ></i>
                                          <span class="font-medium">
                                            Video :
                                          </span>
                                          Lorem ipsum dolor sit amet.
                                        </h4>
                                      </div>
                                      <div
                                        class="text-contentColor dark:text-contentColor-dark text-sm"
                                      >
                                        <p>
                                          <i class="icofont-lock"></i>
                                        </p>
                                      </div>
                                    </li>
                                    <li
                                      class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark"
                                    >
                                      <div>
                                        <h4
                                          class="text-blackColor dark:text-blackColor-dark leading-1 font-light"
                                        >
                                          <i
                                            class="icofont-video-alt mr-10px"
                                          ></i>
                                          <span class="font-medium">
                                            Video :
                                          </span>
                                          Lorem ipsum dolor sit amet.
                                        </h4>
                                      </div>
                                      <div
                                        class="text-contentColor dark:text-contentColor-dark text-sm"
                                      >
                                        <p>
                                          <i class="icofont-lock"></i>
                                        </p>
                                      </div>
                                    </li>
                                    <li
                                      class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark"
                                    >
                                      <div>
                                        <h4
                                          class="text-blackColor dark:text-blackColor-dark leading-1 font-light"
                                        >
                                          <i
                                            class="icofont-video-alt mr-10px"
                                          ></i>
                                          <span class="font-medium">
                                            Video :
                                          </span>
                                          Lorem ipsum dolor sit amet.
                                        </h4>
                                      </div>
                                      <div
                                        class="text-contentColor dark:text-contentColor-dark text-sm"
                                      >
                                        <p>
                                          <i class="icofont-lock"></i>
                                        </p>
                                      </div>
                                    </li>
                                    <li
                                      class="py-15px flex items-center justify-between flex-wrap"
                                    >
                                      <div>
                                        <h4
                                          class="text-blackColor dark:text-blackColor-dark leading-1 font-light"
                                        >
                                          <i
                                            class="icofont-file-text mr-10px"
                                          ></i>
                                          <span class="font-medium">
                                            Lesson 03 Exam :
                                          </span>
                                        </h4>
                                      </div>
                                      <div
                                        class="text-blackColor dark:text-blackColor-dark text-sm"
                                      >
                                        <p>
                                          <i class="icofont-lock"> </i> 20 Ques
                                        </p>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </li>
                          <!-- accordion -->
                          <li class="accordion mb-25px overflow-hidden">
                            <div
                              class="bg-whiteColor border border-borderColor dark:bg-whiteColor-dark dark:border-borderColor-dark"
                            >
                              <!-- controller -->
                              <div>
                                <div
                                  class="cursor-pointer accordion-controller flex justify-between items-center text-xl text-headingColor font-bold w-full px-5 py-18px dark:text-headingColor-dark font-hind leading-[20px]"
                                >
                                  <div class="flex items-center">
                                    <span>Course Key Features</span>
                                    <p
                                      class="text-xs text-headingColor dark:text-headingColor-dark px-10px py-0.5 ml-10px bg-borderColor dark:bg-borderColor-dark rounded-full"
                                    >
                                      2hr 10min
                                    </p>
                                  </div>
                                  <svg
                                    class="transition-all duration-500 rotate-0"
                                    width="20"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 16 16"
                                    fill="#212529"
                                  >
                                    <path
                                      fill-rule="evenodd"
                                      d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"
                                    ></path>
                                  </svg>
                                </div>
                              </div>
                              <!-- content -->
                              <div
                                class="accordion-content transition-all duration-500 h-0"
                              >
                                <div class="content-wrapper p-10px md:px-30px">
                                  <ul>
                                    <li
                                      class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark"
                                    >
                                      <div>
                                        <h4
                                          class="text-blackColor dark:text-blackColor-dark leading-1 font-light"
                                        >
                                          <i
                                            class="icofont-video-alt mr-10px"
                                          ></i>
                                          <span class="font-medium">
                                            Video :
                                          </span>
                                          Lorem ipsum dolor sit amet.
                                        </h4>
                                      </div>
                                      <div
                                        class="text-contentColor dark:text-contentColor-dark text-sm"
                                      >
                                        <p>
                                          <i class="icofont-lock"></i>
                                        </p>
                                      </div>
                                    </li>
                                    <li
                                      class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark"
                                    >
                                      <div>
                                        <h4
                                          class="text-blackColor dark:text-blackColor-dark leading-1 font-light"
                                        >
                                          <i
                                            class="icofont-video-alt mr-10px"
                                          ></i>
                                          <span class="font-medium">
                                            Video :
                                          </span>
                                          Lorem ipsum dolor sit amet.
                                        </h4>
                                      </div>
                                      <div
                                        class="text-contentColor dark:text-contentColor-dark text-sm"
                                      >
                                        <p>
                                          <i class="icofont-lock"></i>
                                        </p>
                                      </div>
                                    </li>
                                    <li
                                      class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark"
                                    >
                                      <div>
                                        <h4
                                          class="text-blackColor dark:text-blackColor-dark leading-1 font-light"
                                        >
                                          <i
                                            class="icofont-video-alt mr-10px"
                                          ></i>
                                          <span class="font-medium">
                                            Video :
                                          </span>
                                          Lorem ipsum dolor sit amet.
                                        </h4>
                                      </div>
                                      <div
                                        class="text-contentColor dark:text-contentColor-dark text-sm"
                                      >
                                        <p>
                                          <i class="icofont-lock"></i>
                                        </p>
                                      </div>
                                    </li>
                                    <li
                                      class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark"
                                    >
                                      <div>
                                        <h4
                                          class="text-blackColor dark:text-blackColor-dark leading-1 font-light"
                                        >
                                          <i
                                            class="icofont-video-alt mr-10px"
                                          ></i>
                                          <span class="font-medium">
                                            Video :
                                          </span>
                                          Lorem ipsum dolor sit amet.
                                        </h4>
                                      </div>
                                      <div
                                        class="text-contentColor dark:text-contentColor-dark text-sm"
                                      >
                                        <p>
                                          <i class="icofont-lock"></i>
                                        </p>
                                      </div>
                                    </li>
                                    <li
                                      class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark"
                                    >
                                      <div>
                                        <h4
                                          class="text-blackColor dark:text-blackColor-dark leading-1 font-light"
                                        >
                                          <i
                                            class="icofont-video-alt mr-10px"
                                          ></i>
                                          <span class="font-medium">
                                            Video :
                                          </span>
                                          Lorem ipsum dolor sit amet.
                                        </h4>
                                      </div>
                                      <div
                                        class="text-contentColor dark:text-contentColor-dark text-sm"
                                      >
                                        <p>
                                          <i class="icofont-lock"></i>
                                        </p>
                                      </div>
                                    </li>
                                    <li
                                      class="py-15px flex items-center justify-between flex-wrap"
                                    >
                                      <div>
                                        <h4
                                          class="text-blackColor dark:text-blackColor-dark leading-1 font-light"
                                        >
                                          <i
                                            class="icofont-file-text mr-10px"
                                          ></i>
                                          <span class="font-medium">
                                            Lesson 03 Exam :
                                          </span>
                                        </h4>
                                      </div>
                                      <div
                                        class="text-blackColor dark:text-blackColor-dark text-sm"
                                      >
                                        <p>
                                          <i class="icofont-lock"> </i> 20 Ques
                                        </p>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </li>
                          <!-- accordion -->
                          <li class="accordion mb-25px overflow-hidden">
                            <div
                              class="bg-whiteColor border border-borderColor dark:bg-whiteColor-dark dark:border-borderColor-dark rounded-b-md"
                            >
                              <!-- controller -->
                              <div>
                                <div
                                  class="cursor-pointer accordion-controller flex justify-between items-center text-xl text-headingColor font-bold w-full px-5 py-18px dark:text-headingColor-dark font-hind leading-[20px]"
                                >
                                  <div class="flex items-center">
                                    <span>Course Conclusion</span>
                                    <p
                                      class="text-xs text-headingColor dark:text-headingColor-dark px-10px py-0.5 ml-10px bg-borderColor dark:bg-borderColor-dark rounded-full"
                                    >
                                      2hr 10min
                                    </p>
                                  </div>
                                  <svg
                                    class="transition-all duration-500 rotate-0"
                                    width="20"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 16 16"
                                    fill="#212529"
                                  >
                                    <path
                                      fill-rule="evenodd"
                                      d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"
                                    ></path>
                                  </svg>
                                </div>
                              </div>
                              <!-- content -->
                              <div
                                class="accordion-content transition-all duration-500 h-0"
                              >
                                <div class="content-wrapper p-10px md:px-30px">
                                  <ul>
                                    <li
                                      class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark"
                                    >
                                      <div>
                                        <h4
                                          class="text-blackColor dark:text-blackColor-dark leading-1 font-light"
                                        >
                                          <i
                                            class="icofont-video-alt mr-10px"
                                          ></i>
                                          <span class="font-medium">
                                            Video :
                                          </span>
                                          Lorem ipsum dolor sit amet.
                                        </h4>
                                      </div>
                                      <div
                                        class="text-contentColor dark:text-contentColor-dark text-sm"
                                      >
                                        <p>
                                          <i class="icofont-lock"></i>
                                        </p>
                                      </div>
                                    </li>
                                    <li
                                      class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark"
                                    >
                                      <div>
                                        <h4
                                          class="text-blackColor dark:text-blackColor-dark leading-1 font-light"
                                        >
                                          <i
                                            class="icofont-video-alt mr-10px"
                                          ></i>
                                          <span class="font-medium">
                                            Video :
                                          </span>
                                          Lorem ipsum dolor sit amet.
                                        </h4>
                                      </div>
                                      <div
                                        class="text-contentColor dark:text-contentColor-dark text-sm"
                                      >
                                        <p>
                                          <i class="icofont-lock"></i>
                                        </p>
                                      </div>
                                    </li>
                                    <li
                                      class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark"
                                    >
                                      <div>
                                        <h4
                                          class="text-blackColor dark:text-blackColor-dark leading-1 font-light"
                                        >
                                          <i
                                            class="icofont-video-alt mr-10px"
                                          ></i>
                                          <span class="font-medium">
                                            Video :
                                          </span>
                                          Lorem ipsum dolor sit amet.
                                        </h4>
                                      </div>
                                      <div
                                        class="text-contentColor dark:text-contentColor-dark text-sm"
                                      >
                                        <p>
                                          <i class="icofont-lock"></i>
                                        </p>
                                      </div>
                                    </li>
                                    <li
                                      class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark"
                                    >
                                      <div>
                                        <h4
                                          class="text-blackColor dark:text-blackColor-dark leading-1 font-light"
                                        >
                                          <i
                                            class="icofont-video-alt mr-10px"
                                          ></i>
                                          <span class="font-medium">
                                            Video :
                                          </span>
                                          Lorem ipsum dolor sit amet.
                                        </h4>
                                      </div>
                                      <div
                                        class="text-contentColor dark:text-contentColor-dark text-sm"
                                      >
                                        <p>
                                          <i class="icofont-lock"></i>
                                        </p>
                                      </div>
                                    </li>
                                    <li
                                      class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark"
                                    >
                                      <div>
                                        <h4
                                          class="text-blackColor dark:text-blackColor-dark leading-1 font-light"
                                        >
                                          <i
                                            class="icofont-video-alt mr-10px"
                                          ></i>
                                          <span class="font-medium">
                                            Video :
                                          </span>
                                          Lorem ipsum dolor sit amet.
                                        </h4>
                                      </div>
                                      <div
                                        class="text-contentColor dark:text-contentColor-dark text-sm"
                                      >
                                        <p>
                                          <i class="icofont-lock"></i>
                                        </p>
                                      </div>
                                    </li>
                                    <li
                                      class="py-15px flex items-center justify-between flex-wrap"
                                    >
                                      <div>
                                        <h4
                                          class="text-blackColor dark:text-blackColor-dark leading-1 font-light"
                                        >
                                          <i
                                            class="icofont-file-text mr-10px"
                                          ></i>
                                          <span class="font-medium">
                                            Lesson 03 Exam :
                                          </span>
                                        </h4>
                                      </div>
                                      <div
                                        class="text-blackColor dark:text-blackColor-dark text-sm"
                                      >
                                        <p>
                                          <i class="icofont-lock"> </i> 20 Ques
                                        </p>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <!-- description -->
                      <div>
                        <h4
                          class="text-size-26 font-bold text-blackColor dark:text-blackColor-dark mb-15px !leading-14"
                          data-aos="fade-up"
                        >
                          Experience is over the world visit
                        </h4>
                        <p
                          class="text-lg text-darkdeep4 mb-5 !leading-30px"
                          data-aos="fade-up"
                        >
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit. Curabitur vulputate vestibulum Phasellus
                          rhoncus, dolor eget viverra pretium, dolor tellus
                          aliquet nunc, vitae ultricies erat elit eu lacus.
                          Vestibulum non justo consectetur, cursus ante,
                          tincidunt sapien. Nulla quis diam sit amet turpis
                          interdum accumsan quis nec enim. Vivamus faucibus ex
                          sed nibh egestas elementum. Mauris et bibendum dui.
                          Aenean consequat pulvinar luctus
                        </p>
                        <p
                          class="text-lg text-darkdeep4 mb-5 !leading-30px"
                          data-aos="fade-up"
                        >
                          We have covered many special events such as fireworks,
                          fairs, parades, races, walks, awards ceremonies,
                          fashion shows, sporting events, and even a memorial
                          service.
                        </p>
                        <p
                          class="text-lg text-darkdeep4 mb-5 !leading-30px"
                          data-aos="fade-up"
                        >
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit. Curabitur vulputate vestibulum Phasellus
                          rhoncus, dolor eget viverra pretium, dolor tellus
                          aliquet nunc, vitae ultricies erat elit eu lacus.
                          Vestibulum non justo consectetur, cursus ante,
                          tincidunt sapien. Nulla quis diam sit amet turpis
                          interdum accumsan quis nec enim. Vivamus faucibus ex
                          sed nibh egestas elementum. Mauris et bibendum dui.
                          Aenean consequat pulvinar luctus.
                        </p>
                      </div>
                      <!-- reviews  -->
                      <div class="hidden">
                        <div
                          class="grid grid-cols-1 lg:grid-cols-12 items-center gap-x-30px gap-y-5"
                        >
                          <div
                            class="lg:col-start-1 lg:col-span-4 px-10px py-30px bg-whiteColor dark:bg-whiteColor-dark shadow-review text-center"
                          >
                            <p
                              class="text-7xl font-extrabold text-blackColor dark:text-blackColor-dark leading-90px"
                            >
                              5.0
                            </p>
                            <div class="text-secondaryColor">
                              <i class="icofont-star"></i>
                              <i class="icofont-star"></i>
                              <i class="icofont-star"></i>
                              <i class="icofont-star"></i>
                              <i class="icofont-star"></i>
                            </div>
                            <p
                              class="text-blackColor dark:text-blackColor-dark leading-26px font-medium"
                            >
                              (17 Reviews)
                            </p>
                          </div>
                          <!-- progress bar -->
                          <div class="lg:col-start-5 lg:col-span-8 px-15px">
                            <ul class="flex flex-col gap-y-3">
                              <li
                                class="flex items-center text-blackColor dark:text-blackColor-dark"
                              >
                                <div>
                                  <span>5</span>
                                  <span
                                    ><i
                                      class="icofont-star text-secondaryColor"
                                    ></i
                                  ></span>
                                </div>
                                <div
                                  class="flex-grow relative mx-10px md:mr-10 lg:mr-10px"
                                >
                                  <span
                                    class="h-10px w-full bg-borderColor dark:bg-borderColor-dark rounded-full block"
                                  ></span>
                                  <span
                                    class="absolute left-0 top-0 h-10px w-full bg-secondaryColor rounded-full"
                                  ></span>
                                </div>
                                <div><span>10</span></div>
                              </li>
                              <li
                                class="flex items-center text-blackColor dark:text-blackColor-dark"
                              >
                                <div>
                                  <span>4</span>
                                  <span
                                    ><i
                                      class="icofont-star text-secondaryColor"
                                    ></i
                                  ></span>
                                </div>
                                <div
                                  class="flex-grow relative mx-10px md:mr-10 lg:mr-10px"
                                >
                                  <span
                                    class="h-10px w-full bg-borderColor dark:bg-borderColor-dark rounded-full block"
                                  ></span>
                                  <span
                                    class="absolute left-0 top-0 h-10px w-4/5 bg-secondaryColor rounded-full"
                                  ></span>
                                </div>
                                <div><span>5</span></div>
                              </li>
                              <li
                                class="flex items-center text-blackColor dark:text-blackColor-dark"
                              >
                                <div>
                                  <span>3</span>
                                  <span
                                    ><i
                                      class="icofont-star text-secondaryColor"
                                    ></i
                                  ></span>
                                </div>
                                <div
                                  class="flex-grow relative mx-10px md:mr-10 lg:mr-10px"
                                >
                                  <span
                                    class="h-10px w-full bg-borderColor dark:bg-borderColor-dark rounded-full block"
                                  ></span>
                                  <span
                                    class="absolute left-0 top-0 h-10px w-60% bg-secondaryColor rounded-full"
                                  ></span>
                                </div>
                                <div><span>3</span></div>
                              </li>
                              <li
                                class="flex items-center text-blackColor dark:text-blackColor-dark"
                              >
                                <div>
                                  <span>2</span>
                                  <span
                                    ><i
                                      class="icofont-star text-secondaryColor"
                                    ></i
                                  ></span>
                                </div>
                                <div
                                  class="flex-grow relative mx-10px md:mr-10 lg:mr-10px"
                                >
                                  <span
                                    class="h-10px w-full bg-borderColor dark:bg-borderColor-dark rounded-full block"
                                  ></span>
                                  <span
                                    class="absolute left-0 top-0 h-10px w-30% bg-secondaryColor rounded-full"
                                  ></span>
                                </div>
                                <div><span>2</span></div>
                              </li>
                              <li
                                class="flex items-center text-blackColor dark:text-blackColor-dark"
                              >
                                <div>
                                  <span>1</span>
                                  <span
                                    ><i
                                      class="icofont-star text-secondaryColor"
                                    ></i
                                  ></span>
                                </div>
                                <div
                                  class="flex-grow relative mx-10px md:mr-10 lg:mr-10px"
                                >
                                  <span
                                    class="h-10px w-full bg-borderColor dark:bg-borderColor-dark rounded-full block"
                                  ></span>
                                  <span
                                    class="absolute left-0 top-0 h-10px w-10% bg-secondaryColor rounded-full"
                                  ></span>
                                </div>
                                <div><span>1</span></div>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <!-- client reviews -->
                        <div class="mt-60px mb-10">
                          <h4
                            class="text-lg text-blackColor dark:text-blackColor-dark font-bold pl-2 before:w-0.5 relative before:h-[21px] before:bg-secondaryColor before:absolute before:bottom-[5px] before:left-0 leading-1.2 mb-25px"
                          >
                            Customer Reviews
                          </h4>
                          <ul>
                            <li
                              class="flex gap-30px pt-35px border-t border-borderColor2 dark:border-borderColor2-dark"
                            >
                              <div class="flex-shrink-0">
                                <div>
                                  <img
                                    src="../assets/images/teacher/teacher__2.png"
                                    alt=""
                                    class="w-25 h-25 rounded-full"
                                  >
                                </div>
                              </div>
                              <div class="flex-grow">
                                <div class="flex justify-between">
                                  <div>
                                    <h4>
                                      <a
                                        href="#"
                                        class="text-lg font-semibold text-blackColor hover:text-secondaryColor dark:text-blackColor-dark dark:hover:text-condaryColor leading-1.2"
                                      >
                                        Adam Smit</a
                                      >
                                    </h4>
                                    <div
                                      class="text-secondaryColor leading-1.8"
                                    >
                                      <i class="icofont-star"></i>
                                      <i class="icofont-star"></i>
                                      <i class="icofont-star"></i>
                                      <i class="icofont-star"></i>
                                      <i class="icofont-star"></i>
                                    </div>
                                  </div>
                                  <div class="author__icon">
                                    <p
                                      class="text-sm font-bold text-blackColor dark:text-blackColor-dark leading-9 px-25px mb-5px border-2 border-borderColor2 dark:border-borderColo2-dark hover:border-secondaryColor dark:hover:border-secondaryColor rounded-full transition-all duration-300"
                                    >
                                      September 2, 2024
                                    </p>
                                  </div>
                                </div>

                                <p
                                  class="text-sm text-contentColor dark:text-contentColor-dark leading-23px mb-15px"
                                >
                                  Lorem ipsum dolor sit amet, consectetur
                                  adipisicing elit. Doloribus, omnis fugit
                                  corporis iste magnam ratione.
                                </p>
                              </div>
                            </li>
                            <li
                              class="flex gap-30px pt-35px border-t border-borderColor2 dark:border-borderColor2-dark"
                            >
                              <div class="flex-shrink-0">
                                <div>
                                  <img
                                    src="../assets/images/teacher/teacher__1.png"
                                    alt=""
                                    class="w-25 h-25 rounded-full"
                                  >
                                </div>
                              </div>
                              <div class="flex-grow">
                                <div class="flex justify-between">
                                  <div>
                                    <h4>
                                      <a
                                        href="#"
                                        class="text-lg font-semibold text-blackColor hover:text-secondaryColor dark:text-blackColor-dark dark:hover:text-condaryColor leading-1.2"
                                      >
                                        Adam Smit</a
                                      >
                                    </h4>
                                    <div
                                      class="text-secondaryColor leading-1.8"
                                    >
                                      <i class="icofont-star"></i>
                                      <i class="icofont-star"></i>
                                      <i class="icofont-star"></i>
                                      <i class="icofont-star"></i>
                                      <i class="icofont-star"></i>
                                    </div>
                                  </div>
                                  <div class="author__icon">
                                    <p
                                      class="text-sm font-bold text-blackColor dark:text-blackColor-dark leading-9 px-25px mb-5px border-2 border-borderColor2 dark:border-borderColo2-dark hover:border-secondaryColor dark:hover:border-secondaryColor rounded-full transition-all duration-300"
                                    >
                                      September 2, 2024
                                    </p>
                                  </div>
                                </div>

                                <p
                                  class="text-sm text-contentColor dark:text-contentColor-dark leading-23px mb-15px"
                                >
                                  Lorem ipsum dolor sit amet, consectetur
                                  adipisicing elit. Doloribus, omnis fugit
                                  corporis iste magnam ratione.
                                </p>
                              </div>
                            </li>
                            <li
                              class="flex gap-30px pt-35px border-t border-borderColor2 dark:border-borderColor2-dark"
                            >
                              <div class="flex-shrink-0">
                                <div>
                                  <img
                                    src="../assets/images/teacher/teacher__3.png"
                                    alt=""
                                    class="w-25 h-25 rounded-full"
                                  >
                                </div>
                              </div>
                              <div class="flex-grow">
                                <div class="flex justify-between">
                                  <div>
                                    <h4>
                                      <a
                                        href="#"
                                        class="text-lg font-semibold text-blackColor hover:text-secondaryColor dark:text-blackColor-dark dark:hover:text-condaryColor leading-1.2"
                                      >
                                        Adam Smit</a
                                      >
                                    </h4>
                                    <div
                                      class="text-secondaryColor leading-1.8"
                                    >
                                      <i class="icofont-star"></i>
                                      <i class="icofont-star"></i>
                                      <i class="icofont-star"></i>
                                      <i class="icofont-star"></i>
                                      <i class="icofont-star"></i>
                                    </div>
                                  </div>
                                  <div class="author__icon">
                                    <p
                                      class="text-sm font-bold text-blackColor dark:text-blackColor-dark leading-9 px-25px mb-5px border-2 border-borderColor2 dark:border-borderColo2-dark hover:border-secondaryColor dark:hover:border-secondaryColor rounded-full transition-all duration-300"
                                    >
                                      September 2, 2024
                                    </p>
                                  </div>
                                </div>

                                <p
                                  class="text-sm text-contentColor dark:text-contentColor-dark leading-23px mb-15px"
                                >
                                  Lorem ipsum dolor sit amet, consectetur
                                  adipisicing elit. Doloribus, omnis fugit
                                  corporis iste magnam ratione.
                                </p>
                              </div>
                            </li>
                          </ul>
                        </div>

                        <!-- add reviews -->
                        <div
                          class="p-5 md:p-50px mb-50px bg-lightGrey12 dark:bg-transparent dark:shadow-brand-dark"
                        >
                          <h4
                            class="text-2xl font-bold text-blackColor dark:text-blackColor-dark mb-15px !leading-1.2"
                            data-aos="fade-up"
                          >
                            Add a Review
                          </h4>
                          <div class="flex gap-15px items-center mb-30px">
                            <h6
                              class="font-bold text-blackColor dark:text-blackColor-dark !leading-[19.2px]"
                            >
                              Your Ratings:
                            </h6>
                            <div class="text-secondaryColor leading-1.8">
                              <i
                                class="icofont-star hover:text-primaryColor"
                              ></i>
                              <i
                                class="icofont-star hover:text-primaryColor"
                              ></i>
                              <i
                                class="icofont-star hover:text-primaryColor"
                              ></i>
                              <i
                                class="icofont-star hover:text-primaryColor"
                              ></i>
                              <i
                                class="icofont-star hover:text-primaryColor"
                              ></i>
                            </div>
                          </div>
                          <form class="pt-5" data-aos="fade-up">
                            <textarea
                             
                              placeholder="Type you comments...."
                              class="w-full p-5 mb-8 bg-transparent text-sm text-blackColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border border-transparent dark:border-borderColor2-dark placeholder:text-placeholder k"
                              
                              cols="30"
                              rows="6"
                            ></textarea>
                            <div class="grid grid-cols-1 mb-10 gap-10">
                              <input
                                type="text"
                                placeholder="Type your name...."
                                class="w-full pl-5 bg-transparent text-sm focus:outline-none text-blackColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border border-transparent dark:border-borderColor2-dark placeholder:text-placeholder placeholder:opacity-80 h-15 leading-15 font-medium rounded"
                              >
                              <input
                                type="email"
                                placeholder="Type your email...."
                                class="w-full pl-5 bg-transparent text-sm focus:outline-none text-blackColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border border-transparent dark:border-borderColor2-dark placeholder:text-placeholder placeholder:opacity-80 h-15 leading-15 font-medium rounded"
                              >
                            </div>

                            <div class="grid grid-cols-1 mb-10 gap-10">
                              <input
                                type="text"
                                placeholder="Type your website...."
                                class="w-full pl-5 bg-transparent text-sm focus:outline-none text-blackColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark placeholder:text-placeholder border border-transparent dark:border-borderColor2-dark placeholder:opacity-80 h-15 leading-15 font-medium rounded"
                              >
                            </div>

                            <div>
                              <input type="checkbox" >
                              <span
                                class="text-size-15 text-darkBlue dark:text-darkBlue-dark"
                              >
                                Save my name, email, and website in this browser
                                for the next time I comment.</span
                              >
                            </div>
                            <div class="mt-30px">
                              <button
                                type="submit"
                                class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark"
                              >
                                Submit
                              </button>
                            </div>
                          </form>
                        </div>
                      </div>

                      <div class="hidden">
                        <div
                          class="p-5 md:p-30px lg:p-5 2xl:p-30px mb-30px flex flex-col md:flex-row shadow-autor"
                          data-aos="fade-up"
                        >
                          <!-- athor avatar -->
                          <div class="flex mb-30px mr-5 flex-shrink-0">
                            <img
                              src="../assets/images/blog/blog_10.png"
                              alt=""
                              class="w-24 h-24 rounded-full"
                            >
                          </div>
                          <div>
                            <!-- author name -->
                            <div class="mb-3">
                              <h3 class="mb-7px">
                                <a
                                  href="instructor-details.html"
                                  class="text-xl font-bold text-blackColor2 dark:text-blackColor2-dark hover:text-primaryColor dark:hover:text-primaryColor"
                                  >Rosalina D. Willaim</a
                                >
                              </h3>
                              <p
                                class="text-xs text-contentColor2 dark:text-contentColor2-dark"
                              >
                                Blogger/Photographer
                              </p>
                            </div>
                            <!-- description -->
                            <p
                              class="text-sm text-contentColor dark:text-contentColor-dark mb-15px leading-26px"
                            >
                              Lorem Ipsum is simply dummy text of the printing
                              and typesetting industry. Lorem Ipsum has been the
                              industry's standard dummy text ever since the
                              1500s, when an unknown printer took a galley
                            </p>
                            <!-- social -->
                            <div>
                              <ul class="flex gap-10px items-center">
                                <li>
                                  <a
                                    href="#"
                                    class="w-35px h-35px leading-35px text-center border border-borderColor2 text-contentColor hover:text-whiteColor hover:bg-primaryColor dark:text-contentColor-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:border-borderColor2-dark rounded"
                                    ><i class="icofont-facebook"></i
                                  ></a>
                                </li>
                                <li>
                                  <a
                                    href="#"
                                    class="w-35px h-35px leading-35px text-center border border-borderColor2 text-contentColor hover:text-whiteColor hover:bg-primaryColor dark:text-contentColor-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:border-borderColor2-dark rounded"
                                    ><i class="icofont-youtube-play"></i
                                  ></a>
                                </li>
                                <li>
                                  <a
                                    href="#"
                                    class="w-35px h-35px leading-35px text-center border border-borderColor2 text-contentColor hover:text-whiteColor hover:bg-primaryColor dark:text-contentColor-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:border-borderColor2-dark rounded"
                                    ><i class="icofont-instagram"></i
                                  ></a>
                                </li>
                                <li>
                                  <a
                                    href="#"
                                    class="w-35px h-35px leading-35px text-center border border-borderColor2 text-contentColor hover:text-whiteColor hover:bg-primaryColor dark:text-contentColor-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:border-borderColor2-dark rounded"
                                    ><i class="icofont-twitter"></i
                                  ></a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="md:col-start-5 md:col-span-8">
                    <h4
                        class="text-2xl font-bold text-blackColor dark:text-blackColor-dark mb-15px !leading-38px"
                        data-aos="fade-up"
                      >
                        Why search Is Important ?
                      </h4><ul class="space-y-[15px] max-w-127">
                      
                      <li class="flex items-center group" data-aos="fade-up">
                        <i
                          class="icofont-check px-2 py-2 text-primaryColor bg-whitegrey3 bg-opacity-40 group-hover:bg-primaryColor group-hover:text-white group-hover:opacity-100 mr-15px dark:bg-whitegrey1-dark"
                        ></i>
                        <p
                          class="text-sm lg:text-xs 2xl:text-sm font-medium leading-25px lg:leading-21px 2xl:leading-25px text-contentColor dark:text-contentColor-dark"
                        >
                          Lorem Ipsum is simply dummying text of the printing
                          andtypesetting industry most of the standard.
                        </p>
                      </li>
                      <li class="flex items-center group" data-aos="fade-up">
                        <i
                          class="icofont-check px-2 py-2 text-primaryColor bg-whitegrey3 bg-opacity-40 group-hover:bg-primaryColor group-hover:text-white group-hover:opacity-100 mr-15px dark:bg-whitegrey1-dark"
                        ></i>
                        <p
                          class="text-sm lg:text-xs 2xl:text-sm font-medium leading-25px lg:leading-21px 2xl:leading-25px text-contentColor dark:text-contentColor-dark"
                        >
                          Lorem Ipsum is simply dummying text of the printing
                          andtypesetting industry most of the standard.
                        </p>
                      </li>
                      <li class="flex items-center group" data-aos="fade-up">
                        <i
                          class="icofont-check px-2 py-2 text-primaryColor bg-whitegrey3 bg-opacity-40 group-hover:bg-primaryColor group-hover:text-white group-hover:opacity-100 mr-15px dark:bg-whitegrey1-dark"
                        ></i>
                        <p
                          class="text-sm lg:text-xs 2xl:text-sm font-medium leading-25px lg:leading-21px 2xl:leading-25px text-contentColor dark:text-contentColor-dark"
                        >
                          Lorem Ipsum is simply dummying text of the printing
                          andtypesetting industry most of the standard.
                        </p>
                      </li>
                      <li class="flex items-center group" data-aos="fade-up">
                        <i
                          class="icofont-check px-2 py-2 text-primaryColor bg-whitegrey3 bg-opacity-40 group-hover:bg-primaryColor group-hover:text-white group-hover:opacity-100 mr-15px dark:bg-whitegrey1-dark"
                        ></i>
                        <p
                          class="text-sm lg:text-xs 2xl:text-sm font-medium leading-25px lg:leading-21px 2xl:leading-25px text-contentColor dark:text-contentColor-dark"
                        >
                          Lorem Ipsum is simply dummying text of the printing
                          andtypesetting industry most of the standard.
                        </p>
                      </li>
                    </ul>
                  </div>
                  <!-- tag and share  -->

                  <div
                    class="flex justify-between items-center flex-wrap py-10 mb-10 border-y border-borderColor2 dark:border-borderColor2-dark gap-y-10px"
                    data-aos="fade-up"
                  >
                    <div>
                      <ul class="flex flex-wrap gap-10px">
                        <li>
                          <p
                            class="text-lg md:text-size-22 leading-7 md:leading-30px text-blackColor dark:text-blackColor-dark font-bold"
                          >
                            Tag
                          </p>
                        </li>
                        <li>
                          <a
                            href="blog-details.html"
                            class="px-2 py-5px md:px-3 md:py-9px text-contentColor text-size-11 md:text-xs font-medium uppercase border border-borderColor2 hover:text-whiteColor hover:bg-primaryColor hover:border-primaryColor dark:text-contentColor-dark dark:border-borderColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:hover:border-primaryColor rounded"
                            >Business</a
                          >
                        </li>
                        <li>
                          <a
                            href="blog-details.html"
                            class="px-2 py-5px md:px-3 md:py-9px text-contentColor text-size-11 md:text-xs font-medium uppercase border border-borderColor2 hover:text-whiteColor hover:bg-primaryColor hover:border-primaryColor dark:text-contentColor-dark dark:border-borderColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:hover:border-primaryColor rounded"
                            >DESIGN
                          </a>
                        </li>
                        <li>
                          <a
                            href="blog-details.html"
                            class="px-2 py-5px md:px-3 md:py-9px text-contentColor text-size-11 md:text-xs font-medium uppercase border border-borderColor2 hover:text-whiteColor hover:bg-primaryColor hover:border-primaryColor dark:text-contentColor-dark dark:border-borderColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:hover:border-primaryColor rounded"
                            >APPS
                          </a>
                        </li>

                        <li>
                          <a
                            href="blog-details.html"
                            class="px-2 py-5px md:px-3 md:py-9px text-contentColor text-size-11 md:text-xs font-medium uppercase border border-borderColor2 hover:text-whiteColor hover:bg-primaryColor hover:border-primaryColor dark:text-contentColor-dark dark:border-borderColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:hover:border-primaryColor rounded"
                            >DATA
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div>
                      <!-- social -->
                      <div>
                        <ul class="flex gap-10px justify-center items-center">
                          <li>
                            <p
                              class="text-lg md:text-size-22 leading-7 md:leading-30px text-blackColor dark:text-blackColor-dark font-bold"
                            >
                              Share
                            </p>
                          </li>
                          <li>
                            <a
                              href="#"
                              class="h-35px w-35px leading-35px md:w-38px md:h-38px md:leading-38px text-size-11 md:text-xs text-center border border-borderColor2 text-contentColor hover:text-whiteColor hover:bg-primaryColor dark:text-contentColor-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:border-borderColor2-dark rounded"
                              ><i class="icofont-twitter"></i
                            ></a>
                          </li>
                          <li>
                            <a
                              href="#"
                              class="h-35px w-35px leading-35px md:w-38px md:h-38px md:leading-38px text-size-11 md:text-xs text-center border border-borderColor2 text-contentColor hover:text-whiteColor hover:bg-primaryColor dark:text-contentColor-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:border-borderColor2-dark rounded"
                              ><i class="icofont-facebook"></i
                            ></a>
                          </li>

                          <li>
                            <a
                              href="#"
                              class="h-35px w-35px leading-35px md:w-38px md:h-38px md:leading-38px text-size-11 md:text-xs text-center border border-borderColor2 text-contentColor hover:text-whiteColor hover:bg-primaryColor dark:text-contentColor-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:border-borderColor2-dark rounded"
                              ><i class="icofont-instagram"></i
                            ></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- other courses -->
                  <div class="mt-50px mb-30px" data-aos="fade-up">
                    <!-- other courses heading -->
                    <div class="flex items-center justify-between mb-10px">
                      <h4
                        class="text-3xl font-bold text-blackColor dark:text-blackColor-dark leading-1.2"
                      >
                        Author More Courses
                      </h4>
                      <a
                        href="course.html"
                        class="text-contentColor dark:text-contentColor-dark"
                        >More Courses...</a
                      >
                    </div>
                    <div data-aos="fade-up" class="sm:-mx-15px">
                      <!-- Swiper -->
                      <div class="swiper other-courses">
                        <div class="swiper-wrapper">
                          <!-- card 1 -->
                          <div class="swiper-slide">
                            <div class="w-full group grid-item filter1 filter3">
                              <div
                                class="tab-content-wrapper sm:px-15px mb-30px"
                              >
                                <div
                                  class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                                >
                                  <!-- card image -->
                                  <div class="relative mb-4 overflow-hidden">
                                    <a href="course.html" class="w-full">
                                      <img
                                        src="../assets/images/grid/grid_1.png"
                                        alt=""
                                        class="w-full transition-all duration-300 group-hover:scale-110"
                                      >
                                    </a>
                                    <div
                                      class="absolute left-0 top-1 flex justify-between w-full items-center px-2"
                                    >
                                      <div>
                                        <p
                                          class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor rounded font-semibold"
                                        >
                                          Data & Tech
                                        </p>
                                      </div>
                                      <a
                                        class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                        href="#"
                                        ><i
                                          class="icofont-heart-alt text-base py-1 px-2"
                                        ></i
                                      ></a>
                                    </div>
                                  </div>
                                  <!-- card content -->
                                  <div>
                                    <div class="grid grid-cols-2 mb-15px">
                                      <div class="flex items-center">
                                        <div>
                                          <i
                                            class="icofont-book-alt pr-5px text-primaryColor text-lg"
                                          ></i>
                                        </div>
                                        <div>
                                          <span
                                            class="text-sm text-black dark:text-blackColor-dark"
                                            >23 Lesson</span
                                          >
                                        </div>
                                      </div>
                                      <div class="flex items-center">
                                        <div>
                                          <i
                                            class="icofont-clock-time pr-5px text-primaryColor text-lg"
                                          ></i>
                                        </div>
                                        <div>
                                          <span
                                            class="text-sm text-black dark:text-blackColor-dark"
                                            >1 hr 30 min</span
                                          >
                                        </div>
                                      </div>
                                    </div>
                                    <a
                                      href="course-details.html"
                                      class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                                    >
                                      Foundation course to under stand about
                                      softwere
                                    </a>
                                    <!-- price -->
                                    <div
                                      class="text-lg font-semibold text-primaryColor font-inter mb-4"
                                    >
                                      $32.00
                                      <del
                                        class="text-sm text-lightGrey4 font-semibold"
                                        >/ $67.00</del
                                      >
                                      <span class="ml-6"
                                        ><del
                                          class="text-base font-semibold text-secondaryColor3"
                                          >Free</del
                                        ></span
                                      >
                                    </div>
                                    <!-- author and rating-->
                                    <div
                                      class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor"
                                    >
                                      <div>
                                        <a
                                          href="instructor-details.html"
                                          class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                          ><img
                                            class="w-[30px] h-[30px] rounded-full mr-15px"
                                            src="../assets/images/grid/grid_small_1.jpg"
                                            alt=""
                                          >
                                          <span class="flex">Micle john</span>
                                        </a>
                                      </div>
                                      <div class="text-start md:text-end">
                                        <i
                                          class="icofont-star text-size-15 text-yellow"
                                        ></i>
                                        <i
                                          class="icofont-star text-size-15 text-yellow"
                                        ></i>
                                        <i
                                          class="icofont-star text-size-15 text-yellow"
                                        ></i>
                                        <i
                                          class="icofont-star text-size-15 text-yellow"
                                        ></i>
                                        <i
                                          class="icofont-star text-size-15 text-yellow"
                                        ></i>
                                        <span class="text-xs text-lightGrey6"
                                          >(44)</span
                                        >
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- card 2 -->
                          <div class="swiper-slide">
                            <div class="w-full group grid-item filter1 filter3">
                              <div
                                class="tab-content-wrapper sm:px-15px mb-30px"
                              >
                                <div
                                  class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                                >
                                  <!-- card image -->
                                  <div class="relative mb-4 overflow-hidden">
                                    <a href="course.html" class="w-full">
                                      <img
                                        src="../assets/images/grid/grid_2.png"
                                        alt=""
                                        class="w-full transition-all duration-300 group-hover:scale-110"
                                      >
                                    </a>
                                    <div
                                      class="absolute left-0 top-1 flex justify-between w-full items-center px-2"
                                    >
                                      <div>
                                        <p
                                          class="text-xs text-whiteColor px-4 py-[3px] bg-yellow rounded font-semibold"
                                        >
                                          Data & Tech
                                        </p>
                                      </div>
                                      <a
                                        class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                        href="#"
                                        ><i
                                          class="icofont-heart-alt text-base py-1 px-2"
                                        ></i
                                      ></a>
                                    </div>
                                  </div>
                                  <!-- card content -->
                                  <div>
                                    <div class="grid grid-cols-2 mb-15px">
                                      <div class="flex items-center">
                                        <div>
                                          <i
                                            class="icofont-book-alt pr-5px text-primaryColor text-lg"
                                          ></i>
                                        </div>
                                        <div>
                                          <span
                                            class="text-sm text-black dark:text-blackColor-dark"
                                            >23 Lesson</span
                                          >
                                        </div>
                                      </div>
                                      <div class="flex items-center">
                                        <div>
                                          <i
                                            class="icofont-clock-time pr-5px text-primaryColor text-lg"
                                          ></i>
                                        </div>
                                        <div>
                                          <span
                                            class="text-sm text-black dark:text-blackColor-dark"
                                            >1 hr 30 min</span
                                          >
                                        </div>
                                      </div>
                                    </div>
                                    <a
                                      href="course-details.html"
                                      class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                                    >
                                      Foundation course to under stand about
                                      softwere
                                    </a>
                                    <!-- price -->
                                    <div
                                      class="text-lg font-semibold text-primaryColor font-inter mb-4"
                                    >
                                      $32.00
                                      <del
                                        class="text-sm text-lightGrey4 font-semibold"
                                        >/ $67.00</del
                                      >
                                      <span class="ml-6"
                                        ><del
                                          class="text-base font-semibold text-secondaryColor3"
                                          >Free</del
                                        ></span
                                      >
                                    </div>
                                    <!-- author and rating-->
                                    <div
                                      class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor"
                                    >
                                      <div>
                                        <a
                                          href="instructor-details.html"
                                          class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                          ><img
                                            class="w-[30px] h-[30px] rounded-full mr-15px"
                                            src="../assets/images/grid/grid_small_1.jpg"
                                            alt=""
                                          >
                                          <span class="flex">Micle john</span>
                                        </a>
                                      </div>
                                      <div class="text-start md:text-end">
                                        <i
                                          class="icofont-star text-size-15 text-yellow"
                                        ></i>
                                        <i
                                          class="icofont-star text-size-15 text-yellow"
                                        ></i>
                                        <i
                                          class="icofont-star text-size-15 text-yellow"
                                        ></i>
                                        <i
                                          class="icofont-star text-size-15 text-yellow"
                                        ></i>
                                        <i
                                          class="icofont-star text-size-15 text-yellow"
                                        ></i>
                                        <span class="text-xs text-lightGrey6"
                                          >(44)</span
                                        >
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- card 3 -->
                          <div class="swiper-slide">
                            <div class="w-full group grid-item filter1 filter3">
                              <div
                                class="tab-content-wrapper sm:px-15px mb-30px"
                              >
                                <div
                                  class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                                >
                                  <!-- card image -->
                                  <div class="relative mb-4 overflow-hidden">
                                    <a href="course.html" class="w-full">
                                      <img
                                        src="../assets/images/grid/grid_3.png"
                                        alt=""
                                        class="w-full transition-all duration-300 group-hover:scale-110"
                                      >
                                    </a>
                                    <div
                                      class="absolute left-0 top-1 flex justify-between w-full items-center px-2"
                                    >
                                      <div>
                                        <p
                                          class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor rounded font-semibold"
                                        >
                                          Data & Tech
                                        </p>
                                      </div>
                                      <a
                                        class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                        href="#"
                                        ><i
                                          class="icofont-heart-alt text-base py-1 px-2"
                                        ></i
                                      ></a>
                                    </div>
                                  </div>
                                  <!-- card content -->
                                  <div>
                                    <div class="grid grid-cols-2 mb-15px">
                                      <div class="flex items-center">
                                        <div>
                                          <i
                                            class="icofont-book-alt pr-5px text-primaryColor text-lg"
                                          ></i>
                                        </div>
                                        <div>
                                          <span
                                            class="text-sm text-black dark:text-blackColor-dark"
                                            >23 Lesson</span
                                          >
                                        </div>
                                      </div>
                                      <div class="flex items-center">
                                        <div>
                                          <i
                                            class="icofont-clock-time pr-5px text-primaryColor text-lg"
                                          ></i>
                                        </div>
                                        <div>
                                          <span
                                            class="text-sm text-black dark:text-blackColor-dark"
                                            >1 hr 30 min</span
                                          >
                                        </div>
                                      </div>
                                    </div>
                                    <a
                                      href="course-details.html"
                                      class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                                    >
                                      Foundation course to under stand about
                                      softwere
                                    </a>
                                    <!-- price -->
                                    <div
                                      class="text-lg font-semibold text-primaryColor font-inter mb-4"
                                    >
                                      $32.00
                                      <del
                                        class="text-sm text-lightGrey4 font-semibold"
                                        >/ $67.00</del
                                      >
                                      <span class="ml-6"
                                        ><del
                                          class="text-base font-semibold text-secondaryColor3"
                                          >Free</del
                                        ></span
                                      >
                                    </div>
                                    <!-- author and rating-->
                                    <div
                                      class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor"
                                    >
                                      <div>
                                        <a
                                          href="instructor-details.html"
                                          class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                          ><img
                                            class="w-[30px] h-[30px] rounded-full mr-15px"
                                            src="../assets/images/grid/grid_small_1.jpg"
                                            alt=""
                                          >
                                          <span class="flex">Micle john</span>
                                        </a>
                                      </div>
                                      <div class="text-start md:text-end">
                                        <i
                                          class="icofont-star text-size-15 text-yellow"
                                        ></i>
                                        <i
                                          class="icofont-star text-size-15 text-yellow"
                                        ></i>
                                        <i
                                          class="icofont-star text-size-15 text-yellow"
                                        ></i>
                                        <i
                                          class="icofont-star text-size-15 text-yellow"
                                        ></i>
                                        <i
                                          class="icofont-star text-size-15 text-yellow"
                                        ></i>
                                        <span class="text-xs text-lightGrey6"
                                          >(44)</span
                                        >
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- card 4 -->
                          <div class="swiper-slide">
                            <div class="w-full group grid-item filter1 filter3">
                              <div
                                class="tab-content-wrapper sm:px-15px mb-30px"
                              >
                                <div
                                  class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                                >
                                  <!-- card image -->
                                  <div class="relative mb-4 overflow-hidden">
                                    <a href="course.html" class="w-full">
                                      <img
                                        src="../assets/images/grid/grid_4.png"
                                        alt=""
                                        class="w-full transition-all duration-300 group-hover:scale-110"
                                      >
                                    </a>
                                    <div
                                      class="absolute left-0 top-1 flex justify-between w-full items-center px-2"
                                    >
                                      <div>
                                        <p
                                          class="text-xs text-whiteColor px-4 py-[3px] bg-greencolor2 rounded font-semibold"
                                        >
                                          Data & Tech
                                        </p>
                                      </div>
                                      <a
                                        class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                        href="#"
                                        ><i
                                          class="icofont-heart-alt text-base py-1 px-2"
                                        ></i
                                      ></a>
                                    </div>
                                  </div>
                                  <!-- card content -->
                                  <div>
                                    <div class="grid grid-cols-2 mb-15px">
                                      <div class="flex items-center">
                                        <div>
                                          <i
                                            class="icofont-book-alt pr-5px text-primaryColor text-lg"
                                          ></i>
                                        </div>
                                        <div>
                                          <span
                                            class="text-sm text-black dark:text-blackColor-dark"
                                            >23 Lesson</span
                                          >
                                        </div>
                                      </div>
                                      <div class="flex items-center">
                                        <div>
                                          <i
                                            class="icofont-clock-time pr-5px text-primaryColor text-lg"
                                          ></i>
                                        </div>
                                        <div>
                                          <span
                                            class="text-sm text-black dark:text-blackColor-dark"
                                            >1 hr 30 min</span
                                          >
                                        </div>
                                      </div>
                                    </div>
                                    <a
                                      href="course-details.html"
                                      class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                                    >
                                      Foundation course to under stand about
                                      softwere
                                    </a>
                                    <!-- price -->
                                    <div
                                      class="text-lg font-semibold text-primaryColor font-inter mb-4"
                                    >
                                      $32.00
                                      <del
                                        class="text-sm text-lightGrey4 font-semibold"
                                        >/ $67.00</del
                                      >
                                      <span class="ml-6"
                                        ><del
                                          class="text-base font-semibold text-secondaryColor3"
                                          >Free</del
                                        ></span
                                      >
                                    </div>
                                    <!-- author and rating-->
                                    <div
                                      class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor"
                                    >
                                      <div>
                                        <a
                                          href="instructor-details.html"
                                          class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                          ><img
                                            class="w-[30px] h-[30px] rounded-full mr-15px"
                                            src="../assets/images/grid/grid_small_1.jpg"
                                            alt=""
                                          >
                                          <span class="flex">Micle john</span>
                                        </a>
                                      </div>
                                      <div class="text-start md:text-end">
                                        <i
                                          class="icofont-star text-size-15 text-yellow"
                                        ></i>
                                        <i
                                          class="icofont-star text-size-15 text-yellow"
                                        ></i>
                                        <i
                                          class="icofont-star text-size-15 text-yellow"
                                        ></i>
                                        <i
                                          class="icofont-star text-size-15 text-yellow"
                                        ></i>
                                        <i
                                          class="icofont-star text-size-15 text-yellow"
                                        ></i>
                                        <span class="text-xs text-lightGrey6"
                                          >(44)</span
                                        >
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- card 5 -->
                          <div class="swiper-slide">
                            <div class="w-full group grid-item filter1 filter3">
                              <div
                                class="tab-content-wrapper sm:px-15px mb-30px"
                              >
                                <div
                                  class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                                >
                                  <!-- card image -->
                                  <div class="relative mb-4 overflow-hidden">
                                    <a href="course.html" class="w-full">
                                      <img
                                        src="../assets/images/grid/kid_5.jpg"
                                        alt=""
                                        class="w-full transition-all duration-300 group-hover:scale-110"
                                      >
                                    </a>
                                    <div
                                      class="absolute left-0 top-1 flex justify-between w-full items-center px-2"
                                    >
                                      <div>
                                        <p
                                          class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor2 rounded font-semibold"
                                        >
                                          Data & Tech
                                        </p>
                                      </div>
                                      <a
                                        class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                        href="#"
                                        ><i
                                          class="icofont-heart-alt text-base py-1 px-2"
                                        ></i
                                      ></a>
                                    </div>
                                  </div>
                                  <!-- card content -->
                                  <div>
                                    <div class="grid grid-cols-2 mb-15px">
                                      <div class="flex items-center">
                                        <div>
                                          <i
                                            class="icofont-book-alt pr-5px text-primaryColor text-lg"
                                          ></i>
                                        </div>
                                        <div>
                                          <span
                                            class="text-sm text-black dark:text-blackColor-dark"
                                            >23 Lesson</span
                                          >
                                        </div>
                                      </div>
                                      <div class="flex items-center">
                                        <div>
                                          <i
                                            class="icofont-clock-time pr-5px text-primaryColor text-lg"
                                          ></i>
                                        </div>
                                        <div>
                                          <span
                                            class="text-sm text-black dark:text-blackColor-dark"
                                            >1 hr 30 min</span
                                          >
                                        </div>
                                      </div>
                                    </div>
                                    <a
                                      href="course-details.html"
                                      class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                                    >
                                      Foundation course to under stand about
                                      softwere
                                    </a>
                                    <!-- price -->
                                    <div
                                      class="text-lg font-semibold text-primaryColor font-inter mb-4"
                                    >
                                      $32.00
                                      <del
                                        class="text-sm text-lightGrey4 font-semibold"
                                        >/ $67.00</del
                                      >
                                      <span class="ml-6"
                                        ><del
                                          class="text-base font-semibold text-secondaryColor3"
                                          >Free</del
                                        ></span
                                      >
                                    </div>
                                    <!-- author and rating-->
                                    <div
                                      class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor"
                                    >
                                      <div>
                                        <a
                                          href="instructor-details.html"
                                          class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                          ><img
                                            class="w-[30px] h-[30px] rounded-full mr-15px"
                                            src="../assets/images/grid/grid_small_1.jpg"
                                            alt=""
                                          >
                                          <span class="flex">Micle john</span>
                                        </a>
                                      </div>
                                      <div class="text-start md:text-end">
                                        <i
                                          class="icofont-star text-size-15 text-yellow"
                                        ></i>
                                        <i
                                          class="icofont-star text-size-15 text-yellow"
                                        ></i>
                                        <i
                                          class="icofont-star text-size-15 text-yellow"
                                        ></i>
                                        <i
                                          class="icofont-star text-size-15 text-yellow"
                                        ></i>
                                        <i
                                          class="icofont-star text-size-15 text-yellow"
                                        ></i>
                                        <span class="text-xs text-lightGrey6"
                                          >(44)</span
                                        >
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- card 6 -->
                          <div class="swiper-slide">
                            <div class="w-full group grid-item filter1 filter3">
                              <div
                                class="tab-content-wrapper sm:px-15px mb-30px"
                              >
                                <div
                                  class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                                >
                                  <!-- card image -->
                                  <div class="relative mb-4 overflow-hidden">
                                    <a href="course.html" class="w-full">
                                      <img
                                        src="../assets/images/grid/kid_6.jpg"
                                        alt=""
                                        class="w-full transition-all duration-300 group-hover:scale-110"
                                      >
                                    </a>
                                    <div
                                      class="absolute left-0 top-1 flex justify-between w-full items-center px-2"
                                    >
                                      <div>
                                        <p
                                          class="text-xs text-whiteColor px-4 py-[3px] bg-blue rounded font-semibold"
                                        >
                                          Mnided
                                        </p>
                                      </div>
                                      <a
                                        class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                        href="#"
                                        ><i
                                          class="icofont-heart-alt text-base py-1 px-2"
                                        ></i
                                      ></a>
                                    </div>
                                  </div>
                                  <!-- card content -->
                                  <div>
                                    <div class="grid grid-cols-2 mb-15px">
                                      <div class="flex items-center">
                                        <div>
                                          <i
                                            class="icofont-book-alt pr-5px text-primaryColor text-lg"
                                          ></i>
                                        </div>
                                        <div>
                                          <span
                                            class="text-sm text-black dark:text-blackColor-dark"
                                            >23 Lesson</span
                                          >
                                        </div>
                                      </div>
                                      <div class="flex items-center">
                                        <div>
                                          <i
                                            class="icofont-clock-time pr-5px text-primaryColor text-lg"
                                          ></i>
                                        </div>
                                        <div>
                                          <span
                                            class="text-sm text-black dark:text-blackColor-dark"
                                            >1 hr 30 min</span
                                          >
                                        </div>
                                      </div>
                                    </div>
                                    <a
                                      href="course-details.html"
                                      class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                                    >
                                      Foundation course to under stand about
                                      softwere
                                    </a>
                                    <!-- price -->
                                    <div
                                      class="text-lg font-semibold text-primaryColor font-inter mb-4"
                                    >
                                      $32.00
                                      <del
                                        class="text-sm text-lightGrey4 font-semibold"
                                        >/ $67.00</del
                                      >
                                      <span class="ml-6"
                                        ><del
                                          class="text-base font-semibold text-secondaryColor3"
                                          >Free</del
                                        ></span
                                      >
                                    </div>
                                    <!-- author and rating-->
                                    <div
                                      class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor"
                                    >
                                      <div>
                                        <a
                                          href="instructor-details.html"
                                          class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                          ><img
                                            class="w-[30px] h-[30px] rounded-full mr-15px"
                                            src="../assets/images/grid/grid_small_1.jpg"
                                            alt=""
                                          >
                                          <span class="flex">Micle john</span>
                                        </a>
                                      </div>
                                      <div class="text-start md:text-end">
                                        <i
                                          class="icofont-star text-size-15 text-yellow"
                                        ></i>
                                        <i
                                          class="icofont-star text-size-15 text-yellow"
                                        ></i>
                                        <i
                                          class="icofont-star text-size-15 text-yellow"
                                        ></i>
                                        <i
                                          class="icofont-star text-size-15 text-yellow"
                                        ></i>
                                        <i
                                          class="icofont-star text-size-15 text-yellow"
                                        ></i>
                                        <span class="text-xs text-lightGrey6"
                                          >(44)</span
                                        >
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- previous comment area -->
                  <div
                    class="pt-50px pb-15px border-y border-borderColor2 dark:border-borderColor2-dark"
                  >
                    <h4
                      class="text-size-26 font-bold text-blackColor dark:text-blackColor-dark mb-30px !leading-30px"
                      data-aos="fade-up"
                    >
                      (04) Comment
                    </h4>
                    <ul>
                      <li class="flex gap-30px mb-10" data-aos="fade-up">
                        <div class="flex-shrink-0">
                          <div>
                            <img
                              src="../assets/images/blog-details/blog-details__1.png"
                              alt=""
                              class="w-20 h-20 rounded-full"
                            >
                          </div>
                        </div>
                        <div class="flex-grow">
                          <div class="flex justify-between items-center">
                            <div>
                              <h4>
                                <a
                                  href="#"
                                  class="text-lg font-semibold text-blackColor hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor leading-25px"
                                >
                                  Rohan De Spond</a
                                >
                              </h4>
                              <p
                                class="text-xs font-medium text-contentColor dark:text-contentColor-dark leading-29px uppercase mb-5px"
                              >
                                25 JANUARY 2024
                              </p>
                            </div>
                            <div class="author__icon">
                              <button class="group">
                                <svg
                                  width="26"
                                  height="19"
                                  viewBox="0 0 26 19"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    class="group-hover:fill-primaryColor dark:fill-blackColor-dark dark:group-hover:fill-primaryColor block"
                                    d="M5.91943 10.2031L12.1694 16.4531C13.3413 17.625 15.3726 16.8047 15.3726 15.125V12.3516C19.9819 12.5469 20.0991 13.5625 19.4351 15.8672C18.9272 17.5469 20.8413 18.9141 22.2866 17.9375C24.2788 16.5703 25.3726 14.8516 25.3726 12.3516C25.3726 6.76562 20.3726 5.67188 15.3726 5.47656V2.66406C15.3726 0.984375 13.3413 0.164062 12.1694 1.33594L5.91943 7.58594C5.17725 8.28906 5.17725 9.5 5.91943 10.2031ZM7.24756 8.875L13.4976 2.625V7.3125C18.1851 7.3125 23.4976 7.58594 23.4976 12.3516C23.4976 14.5391 22.3647 15.6328 21.2319 16.375C22.8335 11.0625 18.8491 10.4375 13.4976 10.4375V15.125L7.24756 8.875ZM0.919434 7.58594C0.177246 8.28906 0.177246 9.5 0.919434 10.2031L7.16943 16.4531C7.95068 17.2734 9.12256 17.1562 9.82568 16.4531L2.24756 8.875L9.82568 1.33594C9.12256 0.632812 7.95068 0.515625 7.16943 1.33594L0.919434 7.58594Z"
                                    fill="#121416"
                                  ></path>
                                </svg>
                              </button>
                            </div>
                          </div>

                          <p
                            class="text-sm text-contentColor dark:text-contentColor-dark leading-23px mb-15px"
                          >
                            There are many variations of passages of Lorem Ipsum
                            available, but the majority have. There are many
                            variations of passages of Lorem Ipsum available, but
                            the majority have
                          </p>
                        </div>
                      </li>
                      <li
                        class="flex gap-30px mb-10 lg:pl-100px"
                        data-aos="fade-up"
                      >
                        <div class="flex-shrink-0">
                          <div>
                            <img
                              src="../assets/images/blog-details/blog-details__2.png"
                              alt=""
                              class="w-20 h-20 rounded-full"
                            >
                          </div>
                        </div>
                        <div class="flex-grow">
                          <div class="flex justify-between items-center">
                            <div>
                              <h4>
                                <a
                                  href="#"
                                  class="text-lg font-semibold text-blackColor hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor leading-25px"
                                >
                                  Rohan De Spond</a
                                >
                              </h4>
                              <p
                                class="text-xs font-medium text-contentColor dark:text-contentColor-dark leading-29px uppercase mb-5px"
                              >
                                25 JANUARY 2024
                              </p>
                            </div>
                            <div class="author__icon">
                              <button class="group">
                                <svg
                                  width="26"
                                  height="19"
                                  viewBox="0 0 26 19"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    class="group-hover:fill-primaryColor dark:fill-blackColor-dark dark:group-hover:fill-primaryColor block"
                                    d="M5.91943 10.2031L12.1694 16.4531C13.3413 17.625 15.3726 16.8047 15.3726 15.125V12.3516C19.9819 12.5469 20.0991 13.5625 19.4351 15.8672C18.9272 17.5469 20.8413 18.9141 22.2866 17.9375C24.2788 16.5703 25.3726 14.8516 25.3726 12.3516C25.3726 6.76562 20.3726 5.67188 15.3726 5.47656V2.66406C15.3726 0.984375 13.3413 0.164062 12.1694 1.33594L5.91943 7.58594C5.17725 8.28906 5.17725 9.5 5.91943 10.2031ZM7.24756 8.875L13.4976 2.625V7.3125C18.1851 7.3125 23.4976 7.58594 23.4976 12.3516C23.4976 14.5391 22.3647 15.6328 21.2319 16.375C22.8335 11.0625 18.8491 10.4375 13.4976 10.4375V15.125L7.24756 8.875ZM0.919434 7.58594C0.177246 8.28906 0.177246 9.5 0.919434 10.2031L7.16943 16.4531C7.95068 17.2734 9.12256 17.1562 9.82568 16.4531L2.24756 8.875L9.82568 1.33594C9.12256 0.632812 7.95068 0.515625 7.16943 1.33594L0.919434 7.58594Z"
                                    fill="#121416"
                                  ></path>
                                </svg>
                              </button>
                            </div>
                          </div>

                          <p
                            class="text-sm text-contentColor dark:text-contentColor-dark leading-23px mb-15px"
                          >
                            There are many variations of passages of Lorem Ipsum
                            available, but the majority have. There are many
                            variations of passages of Lorem Ipsum available, but
                            the majority have
                          </p>
                        </div>
                      </li>
                      <li class="flex gap-30px mb-10" data-aos="fade-up">
                        <div class="flex-shrink-0">
                          <div>
                            <img
                              src="../assets/images/blog-details/blog-details__3.png"
                              alt=""
                              class="w-20 h-20 rounded-full"
                            >
                          </div>
                        </div>
                        <div class="flex-grow">
                          <div class="flex justify-between items-center">
                            <div>
                              <h4>
                                <a
                                  href="#"
                                  class="text-lg font-semibold text-blackColor hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor leading-25px"
                                >
                                  Rohan De Spond</a
                                >
                              </h4>
                              <p
                                class="text-xs font-medium text-contentColor dark:text-contentColor-dark leading-29px uppercase mb-5px"
                              >
                                25 JANUARY 2024
                              </p>
                            </div>
                            <div class="author__icon">
                              <button class="group">
                                <svg
                                  width="26"
                                  height="19"
                                  viewBox="0 0 26 19"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    class="group-hover:fill-primaryColor dark:fill-blackColor-dark dark:group-hover:fill-primaryColor block"
                                    d="M5.91943 10.2031L12.1694 16.4531C13.3413 17.625 15.3726 16.8047 15.3726 15.125V12.3516C19.9819 12.5469 20.0991 13.5625 19.4351 15.8672C18.9272 17.5469 20.8413 18.9141 22.2866 17.9375C24.2788 16.5703 25.3726 14.8516 25.3726 12.3516C25.3726 6.76562 20.3726 5.67188 15.3726 5.47656V2.66406C15.3726 0.984375 13.3413 0.164062 12.1694 1.33594L5.91943 7.58594C5.17725 8.28906 5.17725 9.5 5.91943 10.2031ZM7.24756 8.875L13.4976 2.625V7.3125C18.1851 7.3125 23.4976 7.58594 23.4976 12.3516C23.4976 14.5391 22.3647 15.6328 21.2319 16.375C22.8335 11.0625 18.8491 10.4375 13.4976 10.4375V15.125L7.24756 8.875ZM0.919434 7.58594C0.177246 8.28906 0.177246 9.5 0.919434 10.2031L7.16943 16.4531C7.95068 17.2734 9.12256 17.1562 9.82568 16.4531L2.24756 8.875L9.82568 1.33594C9.12256 0.632812 7.95068 0.515625 7.16943 1.33594L0.919434 7.58594Z"
                                    fill="#121416"
                                  ></path>
                                </svg>
                              </button>
                            </div>
                          </div>

                          <p
                            class="text-sm text-contentColor dark:text-contentColor-dark leading-23px mb-15px"
                          >
                            There are many variations of passages of Lorem Ipsum
                            available, but the majority have. There are many
                            variations of passages of Lorem Ipsum available, but
                            the majority have
                          </p>
                        </div>
                      </li>
                      <li
                        class="flex gap-30px mb-10 lg:pl-100px"
                        data-aos="fade-up"
                      >
                        <div class="flex-shrink-0">
                          <div>
                            <img
                              src="../assets/images/blog-details/blog-details__4.png"
                              alt=""
                              class="w-20 h-20 rounded-full"
                            >
                          </div>
                        </div>
                        <div class="flex-grow">
                          <div class="flex justify-between items-center">
                            <div>
                              <h4>
                                <a
                                  href="#"
                                  class="text-lg font-semibold text-blackColor hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor leading-25px"
                                >
                                  Rohan De Spond</a
                                >
                              </h4>
                              <p
                                class="text-xs font-medium text-contentColor dark:text-contentColor-dark leading-29px uppercase mb-5px"
                              >
                                25 JANUARY 2024
                              </p>
                            </div>
                            <div class="author__icon">
                              <button class="group">
                                <svg
                                  width="26"
                                  height="19"
                                  viewBox="0 0 26 19"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    class="group-hover:fill-primaryColor dark:fill-blackColor-dark dark:group-hover:fill-primaryColor block"
                                    d="M5.91943 10.2031L12.1694 16.4531C13.3413 17.625 15.3726 16.8047 15.3726 15.125V12.3516C19.9819 12.5469 20.0991 13.5625 19.4351 15.8672C18.9272 17.5469 20.8413 18.9141 22.2866 17.9375C24.2788 16.5703 25.3726 14.8516 25.3726 12.3516C25.3726 6.76562 20.3726 5.67188 15.3726 5.47656V2.66406C15.3726 0.984375 13.3413 0.164062 12.1694 1.33594L5.91943 7.58594C5.17725 8.28906 5.17725 9.5 5.91943 10.2031ZM7.24756 8.875L13.4976 2.625V7.3125C18.1851 7.3125 23.4976 7.58594 23.4976 12.3516C23.4976 14.5391 22.3647 15.6328 21.2319 16.375C22.8335 11.0625 18.8491 10.4375 13.4976 10.4375V15.125L7.24756 8.875ZM0.919434 7.58594C0.177246 8.28906 0.177246 9.5 0.919434 10.2031L7.16943 16.4531C7.95068 17.2734 9.12256 17.1562 9.82568 16.4531L2.24756 8.875L9.82568 1.33594C9.12256 0.632812 7.95068 0.515625 7.16943 1.33594L0.919434 7.58594Z"
                                    fill="#121416"
                                  ></path>
                                </svg>
                              </button>
                            </div>
                          </div>

                          <p
                            class="text-sm text-contentColor dark:text-contentColor-dark leading-23px mb-15px"
                          >
                            There are many variations of passages of Lorem Ipsum
                            available, but the majority have. There are many
                            variations of passages of Lorem Ipsum available, but
                            the majority have
                          </p>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <!-- write comment area -->
                  <div class="pt-50px">
                    <h4
                      class="text-size-26 font-bold text-blackColor dark:text-blackColor-dark mb-30px !leading-30px"
                      data-aos="fade-up"
                    >
                      Write your comment
                    </h4>
                    <form class="pt-5" data-aos="fade-up">
                      <div
                        class="grid grid-cols-1 xl:grid-cols-2 xl:gap-x-30px mb-10 gap-10"
                      >
                        <input
                          type="text"
                          placeholder="Enter your name*"
                          class="w-full pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor2 dark:border-borderColor2-dark placeholder:text-placeholder placeholder:opacity-80 h-15 leading-15 font-medium rounded"
                          data-aos="fade-up"
                        >
                        <input
                          type="email"
                          placeholder="Enter your email*"
                          class="w-full pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor2 dark:border-borderColor2-dark placeholder:text-placeholder placeholder:opacity-80 h-15 leading-15 font-medium rounded"
                          data-aos="fade-up"
                        >
                      </div>

                      <div
                        class="grid grid-cols-1 xl:grid-cols-2 xl:gap-x-30px mb-10 gap-10"
                      >
                        <input
                          type="text"
                          placeholder="Enter your number*"
                          class="w-full pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor2 dark:border-borderColor2-dark placeholder:text-placeholder placeholder:opacity-80 h-15 leading-15 font-medium rounded"
                          data-aos="fade-up"
                        >
                        <input
                          type="text"
                          placeholder="Website*"
                          class="w-full pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor2 dark:border-borderColor2-dark placeholder:text-placeholder placeholder:opacity-80 h-15 leading-15 font-medium rounded"
                          data-aos="fade-up"
                        >
                      </div>

                      <textarea
                       
                        class="w-full p-5 mb-2 bg-transparent text-sm text-contentColor dark:text-contentColor-dark border border-borderColor2 dark:border-borderColor2-dark rounded"
                        data-aos="fade-up"
                        
                        cols="30"
                        rows="8"
                      >
Enter your Massage*</textarea
                      >
                      <div data-aos="fade-up " class="text-center">
                        <input type="checkbox" checked >
                        <span
                          class="text-size-15 text-contentColor dark:text-contentColor-dark font-medium text-center"
                        >
                          Save my name, email, and website in this browser for
                          the next time I comment.</span
                        >
                      </div>
                      <div class="mt-30px text-center" data-aos="fade-up">
                        <button
                          type="submit"
                          class="text-size-15 text-whiteColor bg-primaryColor px-70px py-13px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark"
                        >
                          Post a Comment
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- course sidebar -->
            <div class="lg:col-start-9 lg:col-span-4 relative lg:top-[-340px]">
              <div class="flex flex-col">
                <!-- enroll section -->
                <div
                  class="py-33px px-25px shadow-event mb-30px bg-whiteColor dark:bg-whiteColor-dark rounded-md"
                  data-aos="fade-up"
                >
                  <!-- meeting thumbnail -->
                  <div class="overflow-hidden relative mb-5">
                    <img
                      src="../assets/images/blog/blog_7.png"
                      alt=""
                      class="w-full"
                    >
                    <div
                      class="absolute top-0 right-0 left-0 bottom-0 flex items-center justify-center z-10"
                    >
                      <div>
                        <button
                          data-url="https://youtu.be/WyoscGICLzY?si=VRZq743i4-iTXiKG"
                          class="lvideo relative w-15 h-15 md:h-20 md:w-20 lg:w-15 lg:h-15 2xl:h-70px 2xl:w-70px 3xl:h-20 3xl:w-20 bg-secondaryColor rounded-full flex items-center justify-center"
                        >
                          <span
                            class="animate-buble absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 block w-[180px] h-[180px] border-secondaryColor rounded-full"
                          ></span
                          ><span
                            class="animate-buble2 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 block w-[180px] h-[180px] border-secondaryColor rounded-full"
                          ></span>
                          <img src="../assets/images/icon/video.png" alt="" >
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="flex justify-between mb-50px">
                    <div
                      class="text-size-21 font-bold text-primaryColor font-inter leading-25px"
                    >
                      $32.00
                      <del class="text-sm text-lightGrey4 font-semibold"
                        >/ $67.00</del
                      >
                    </div>
                    <div>
                      <a
                        href="#"
                        class="uppercase text-sm font-semibold text-secondaryColor2 leading-27px px-2 bg-whitegrey1 dark:bg-whitegrey1-dark"
                        >68% OFF</a
                      >
                    </div>
                  </div>
                  <div class="mb-5" data-aos="fade-up">
                    <button
                      type="submit"
                      class="w-full text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border mb-10px leading-1.8 border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark"
                    >
                      Add To Cart
                    </button>
                    <button
                      type="submit"
                      class="w-full text-size-15 text-whiteColor bg-secondaryColor px-25px py-10px mb-10px leading-1.8 border border-secondaryColor hover:text-secondaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-secondaryColor dark:hover:bg-whiteColor-dark"
                    >
                    Buy Now
                    </button>

                    <span
                      class="text-size-13 text-contentColor dark:text-contentColor-dark leading-1.8"
                      ><i class="icofont-ui-rotation"></i> 45-Days Money-Back
                      Guarantee</span
                    >
                  </div>
                  <ul>
                    <li
                      class="flex items-center justify-between py-10px border-b border-borderColor dark:border-borderColor-dark"
                    >
                      <p
                        class="text-sm font-medium text-contentColor dark:text-contentColor-dark leading-1.8"
                      >
                        Instructor:
                      </p>
                      <p
                        class="text-xs text-contentColor dark:text-contentColor-dark px-10px py-6px bg-borderColor dark:bg-borderColor-dark rounded-full leading-13px"
                      >
                        D. Willaim
                      </p>
                    </li>
                    <li
                      class="flex items-center justify-between py-10px border-b border-borderColor dark:border-borderColor-dark"
                    >
                      <p
                        class="text-sm font-medium text-contentColor dark:text-contentColor-dark leading-1.8"
                      >
                        Start Date
                      </p>
                      <p
                        class="text-xs text-contentColor dark:text-contentColor-dark px-10px py-6px bg-borderColor dark:bg-borderColor-dark rounded-full leading-13px"
                      >
                        05 Dec 2024
                      </p>
                    </li>
                    <li
                      class="flex items-center justify-between py-10px border-b border-borderColor dark:border-borderColor-dark"
                    >
                      <p
                        class="text-sm font-medium text-contentColor dark:text-contentColor-dark leading-1.8"
                      >
                        Total Duration
                      </p>
                      <p
                        class="text-xs text-contentColor dark:text-contentColor-dark px-10px py-6px bg-borderColor dark:bg-borderColor-dark rounded-full leading-13px"
                      >
                        08Hrs 32Min
                      </p>
                    </li>
                    <li
                      class="flex items-center justify-between py-10px border-b border-borderColor dark:border-borderColor-dark"
                    >
                      <p
                        class="text-sm font-medium text-contentColor dark:text-contentColor-dark leading-1.8"
                      >
                        Enrolled
                      </p>
                      <p
                        class="text-xs text-contentColor dark:text-contentColor-dark px-10px py-6px bg-borderColor dark:bg-borderColor-dark rounded-full leading-13px"
                      >
                        100
                      </p>
                    </li>
                    <li
                      class="flex items-center justify-between py-10px border-b border-borderColor dark:border-borderColor-dark"
                    >
                      <p
                        class="text-sm font-medium text-contentColor dark:text-contentColor-dark leading-1.8"
                      >
                        Lectures
                      </p>
                      <p
                        class="text-xs text-contentColor dark:text-contentColor-dark px-10px py-6px bg-borderColor dark:bg-borderColor-dark rounded-full leading-13px"
                      >
                        30
                      </p>
                    </li>
                    <li
                      class="flex items-center justify-between py-10px border-b border-borderColor dark:border-borderColor-dark"
                    >
                      <p
                        class="text-sm font-medium text-contentColor dark:text-contentColor-dark leading-1.8"
                      >
                        Skill Level
                      </p>
                      <p
                        class="text-xs text-contentColor dark:text-contentColor-dark px-10px py-6px bg-borderColor dark:bg-borderColor-dark rounded-full leading-13px"
                      >
                        Basic
                      </p>
                    </li>
                    <li
                      class="flex items-center justify-between py-10px border-b border-borderColor dark:border-borderColor-dark"
                    >
                      <p
                        class="text-sm font-medium text-contentColor dark:text-contentColor-dark leading-1.8"
                      >
                        Language
                      </p>
                      <p
                        class="text-xs text-contentColor dark:text-contentColor-dark px-10px py-6px bg-borderColor dark:bg-borderColor-dark rounded-full leading-13px"
                      >
                        Spanish
                      </p>
                    </li>
                    <li
                      class="flex items-center justify-between py-10px border-b border-borderColor dark:border-borderColor-dark"
                    >
                      <p
                        class="text-sm font-medium text-contentColor dark:text-contentColor-dark leading-1.8"
                      >
                        Quiz
                      </p>
                      <p
                        class="text-xs text-contentColor dark:text-contentColor-dark px-10px py-6px bg-borderColor dark:bg-borderColor-dark rounded-full leading-13px"
                      >
                        Yes
                      </p>
                    </li>
                    <li
                      class="flex items-center justify-between py-10px border-b border-borderColor dark:border-borderColor-dark"
                    >
                      <p
                        class="text-sm font-medium text-contentColor dark:text-contentColor-dark leading-1.8"
                      >
                        Certificate
                      </p>
                      <p
                        class="text-xs text-contentColor dark:text-contentColor-dark px-10px py-6px bg-borderColor dark:bg-borderColor-dark rounded-full leading-13px"
                      >
                        Yes
                      </p>
                    </li>
                  </ul>
                  <div class="mt-5" data-aos="fade-up">
                    <p
                      class="text-sm text-contentColor dark:text-contentColor-dark leading-1.8 text-center mb-5px"
                    >
                      More inquery about course
                    </p>
                    <button
                      type="submit"
                      class="w-full text-xl text-primaryColor bg-whiteColor px-25px py-10px mb-10px font-bold leading-1.8 border border-primaryColor hover:text-whiteColor hover:bg-primaryColor inline-block rounded group dark:bg-whiteColor-dark dark:text-whiteColor dark:hover:bg-primaryColor"
                    >
                      <i class="icofont-phone"></i> +47 333 78 901
                    </button>
                  </div>
                </div>
                <!-- social area -->
                <div
                  class="p-5 md:p-30px lg:p-5 2xl:p-30px mb-30px border border-borderColor2 dark:border-borderColor2-dark"
                  data-aos="fade-up"
                >
                  <h4
                    class="text-size-22 text-blackColor dark:text-blackColor-dark font-bold pl-2 before:w-0.5 relative before:h-[21px] before:bg-primaryColor before:absolute before:bottom-[5px] before:left-0 leading-30px mb-25px"
                  >
                    Follow Us
                  </h4>
                  <div>
                    <ul class="flex gap-4 items-center">
                      <li>
                        <a
                          href="#"
                          class="w-38px h-38px leading-38px text-center text-blackColor2 bg-whitegrey2 hover:text-whiteColor hover:bg-primaryColor dark:bg-whitegrey2-dark dark:text-blackColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor rounded"
                          ><i class="icofont-facebook"></i
                        ></a>
                      </li>
                      <li>
                        <a
                          href="#"
                          class="w-38px h-38px leading-38px text-center text-blackColor2 bg-whitegrey2 hover:text-whiteColor hover:bg-primaryColor dark:bg-whitegrey2-dark dark:text-blackColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor rounded"
                          ><i class="icofont-youtube-play"></i
                        ></a>
                      </li>
                      <li>
                        <a
                          href="#"
                          class="w-38px h-38px leading-38px text-center text-blackColor2 bg-whitegrey2 hover:text-whiteColor hover:bg-primaryColor dark:bg-whitegrey2-dark dark:text-blackColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor rounded"
                          ><i class="icofont-instagram"></i
                        ></a>
                      </li>
                      <li>
                        <a
                          href="#"
                          class="w-38px h-38px leading-38px text-center text-blackColor2 bg-whitegrey2 hover:text-whiteColor hover:bg-primaryColor dark:bg-whitegrey2-dark dark:text-blackColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor rounded"
                          ><i class="icofont-twitter"></i
                        ></a>
                      </li>
                      <li>
                        <a
                          href="#"
                          class="w-38px h-38px leading-38px text-center text-blackColor2 bg-whitegrey2 hover:text-whiteColor hover:bg-primaryColor dark:bg-whitegrey2-dark dark:text-blackColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor rounded"
                          ><i class="icofont-instagram"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- popular course -->
                <div
                  class="p-5 md:p-30px lg:p-5 2xl:p-30px mb-30px border border-borderColor2 dark:border-borderColor2-dark"
                  data-aos="fade-up"
                >
                  <h4
                    class="text-size-22 text-blackColor dark:text-blackColor-dark font-bold pl-2 before:w-0.5 relative before:h-[21px] before:bg-primaryColor before:absolute before:bottom-[5px] before:left-0 leading-30px mb-25px"
                  >
                    Populer Course
                  </h4>
                  <ul class="flex flex-col gap-y-25px">
                    <li class="flex items-center">
                      <div class="w-[91px] h-auto mr-5 flex-shrink-0">
                        <a href="#" class="w-full"
                          ><img
                            src="../assets/images/blog-details/blog-details__6.png"
                            alt=""
                            class="w-full"
                        ></a>
                      </div>
                      <div class="flex-grow">
                        <h3
                          class="text-sm text-primaryColor font-medium leading-[17px]"
                        >
                          $32,000
                        </h3>
                        <a
                          href="#"
                          class="text-blackColor dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor font-semibold leading-22px"
                          >Making Music with Other People</a
                        >
                      </div>
                    </li>
                    <li class="flex items-center">
                      <div class="w-[91px] h-auto mr-5 flex-shrink-0">
                        <a href="#" class="w-full"
                          ><img
                            src="../assets/images/blog-details/blog-details__7.png"
                            alt=""
                            class="w-full"
                        ></a>
                      </div>
                      <div class="flex-grow">
                        <h3
                          class="text-sm text-primaryColor font-medium leading-[17px]"
                        >
                          $32,000
                        </h3>
                        <a
                          href="#"
                          class="text-blackColor dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor font-semibold leading-22px"
                          >Making Music with Other People</a
                        >
                      </div>
                    </li>
                    <li class="flex items-center">
                      <div class="w-[91px] h-auto mr-5 flex-shrink-0">
                        <a href="#" class="w-full"
                          ><img
                            src="../assets/images/blog-details/blog-details__8.png"
                            alt=""
                            class="w-full"
                        ></a>
                      </div>
                      <div class="flex-grow">
                        <h3
                          class="text-sm text-primaryColor font-medium leading-[17px]"
                        >
                          $32,000
                        </h3>
                        <a
                          href="#"
                          class="text-blackColor dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor font-semibold leading-22px"
                          >Making Music with Other People</a
                        >
                      </div>
                    </li>
                  </ul>
                </div>

                <!-- contact form -->
                <div
                  class="p-5 md:p-30px lg:p-5 2xl:p-30px mb-30px border border-borderColor2 dark:border-borderColor2-dark"
                  data-aos="fade-up"
                >
                  <h4
                    class="text-size-22 text-blackColor dark:text-blackColor-dark font-bold pl-2 before:w-0.5 relative before:h-[21px] before:bg-primaryColor before:absolute before:bottom-[5px] before:left-0 leading-30px mb-25px"
                  >
                    Get in Touch
                  </h4>
                  <form class="space-y-5">
                    <input
                      type="text"
                      placeholder="Enter Name*"
                      class="w-full text-contentColor leading-7 pb-10px bg-transparent focus:outline-none placeholder:text-placeholder placeholder:opacity-80 border-b border-borderColor2 dark:text-contentColor-dark dark:border-borderColor2-dark"
                    >
                    <input
                      type="email"
                      placeholder="Enter your mail*"
                      class="w-full text-contentColor leading-7 pb-10px bg-transparent focus:outline-none placeholder:text-placeholder placeholder:opacity-80 border-b border-borderColor2 dark:text-contentColor-dark dark:border-borderColor2-dark"
                    >
                    <input
                      type="text"
                      placeholder="Message*"
                      class="w-full text-contentColor leading-7 pb-10px bg-transparent focus:outline-none placeholder:text-placeholder placeholder:opacity-80 border-b border-borderColor2 dark:text-contentColor-dark dark:border-borderColor2-dark"
                    >
                    <button
                      type="submit"
                      class="text-size-15 text-whiteColor uppercase bg-primaryColor border border-primaryColor px-55px py-13px hover:text-primaryColor hover:bg-whiteColor rounded inline-block dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor"
                    >
                      Send Message
                    </button>
                  </form>
                </div>

                <!-- tags
                 -->
                <div
                  class="p-5 md:p-30px lg:p-5 2xl:p-30px mb-30px border border-borderColor2 dark:border-borderColor2-dark"
                  data-aos="fade-up"
                >
                  <h4
                    class="text-size-22 text-blackColor dark:text-blackColor-dark font-bold pl-2 before:w-0.5 relative before:h-[21px] before:bg-primaryColor before:absolute before:bottom-[5px] before:left-0 leading-30px mb-25px"
                  >
                    Popular tag
                  </h4>
                  <ul class="flex flex-wrap gap-x-5px">
                    <li>
                      <a
                        href="blog-details.html"
                        class="m-5px px-19px py-3px text-contentColor text-xs font-medium uppercase border border-borderColor2 hover:text-whiteColor hover:bg-primaryColor hover:border-primaryColor leading-30px dark:text-contentColor-dark dark:border-borderColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:hover:border-primaryColor"
                        >Business</a
                      >
                    </li>
                    <li>
                      <a
                        href="blog-details.html"
                        class="m-5px px-19px py-3px text-contentColor text-xs font-medium uppercase border border-borderColor2 hover:text-whiteColor hover:bg-primaryColor hover:border-primaryColor leading-30px dark:text-contentColor-dark dark:border-borderColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:hover:border-primaryColor"
                        >DESIGN
                      </a>
                    </li>
                    <li>
                      <a
                        href="blog-details.html"
                        class="m-5px px-19px py-3px text-contentColor text-xs font-medium uppercase border border-borderColor2 hover:text-whiteColor hover:bg-primaryColor hover:border-primaryColor leading-30px dark:text-contentColor-dark dark:border-borderColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:hover:border-primaryColor"
                        >APPS
                      </a>
                    </li>
                    <li>
                      <a
                        href="blog-details.html"
                        class="m-5px px-19px py-3px text-contentColor text-xs font-medium uppercase border border-borderColor2 hover:text-whiteColor hover:bg-primaryColor hover:border-primaryColor leading-30px dark:text-contentColor-dark dark:border-borderColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:hover:border-primaryColor"
                        >LANDING PAGE
                      </a>
                    </li>
                    <li>
                      <a
                        href="blog-details.html"
                        class="m-5px px-19px py-3px text-contentColor text-xs font-medium uppercase border border-borderColor2 hover:text-whiteColor hover:bg-primaryColor hover:border-primaryColor leading-30px dark:text-contentColor-dark dark:border-borderColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:hover:border-primaryColor"
                        >DATA
                      </a>
                    </li>
                    <li>
                      <a
                        href="blog-details.html"
                        class="m-5px px-19px py-3px text-contentColor text-xs font-medium uppercase border border-borderColor2 hover:text-whiteColor hover:bg-primaryColor hover:border-primaryColor leading-30px dark:text-contentColor-dark dark:border-borderColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:hover:border-primaryColor"
                        >BOOK
                      </a>
                    </li>
                    <li>
                      <a
                        href="blog-details.html"
                        class="m-5px px-19px py-3px text-contentColor text-xs font-medium uppercase border border-borderColor2 hover:text-whiteColor hover:bg-primaryColor hover:border-primaryColor leading-30px dark:text-contentColor-dark dark:border-borderColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:hover:border-primaryColor"
                        >DESIGN
                      </a>
                    </li>
                    <li>
                      <a
                        href="blog-details.html"
                        class="m-5px px-19px py-3px text-contentColor text-xs font-medium uppercase border border-borderColor2 hover:text-whiteColor hover:bg-primaryColor hover:border-primaryColor leading-30px dark:text-contentColor-dark dark:border-borderColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:hover:border-primaryColor"
                        >BOOK
                      </a>
                    </li>
                    <li>
                      <a
                        href="blog-details.html"
                        class="m-5px px-19px py-3px text-contentColor text-xs font-medium uppercase border border-borderColor2 hover:text-whiteColor hover:bg-primaryColor hover:border-primaryColor leading-30px dark:text-contentColor-dark dark:border-borderColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:hover:border-primaryColor"
                        >LANDING PAGE
                      </a>
                    </li>
                    <li>
                      <a
                        href="blog-details.html"
                        class="m-5px px-19px py-3px text-contentColor text-xs font-medium uppercase border border-borderColor2 hover:text-whiteColor hover:bg-primaryColor hover:border-primaryColor leading-30px dark:text-contentColor-dark dark:border-borderColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:hover:border-primaryColor"
                        >DATA</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="bg-darkblack">
      <div class="container pt-65px pb-5 lg:pb-10">
        <!-- footer top or subscription -->
        <section>
          <div
            class="grid grid-cols-1 md:grid-cols-2 gap-y-30px md:gap-y-0 items-center pb-45px border-b border-darkcolor"
          >
            <div data-aos="fade-up">
              <h4
                class="text-4xl md:text-size-25 lg:text-size-40 font-bold text-whiteColor leading-50px md:leading-10 lg:leading-16"
              >
                Still You Need Our
                <span class="text-primaryColor">Support</span> ?
              </h4>
              <p class="text-whiteColor text-opacity-65">
                Don’t wait make a smart & logical quote here. Its pretty easy.
              </p>
            </div>
            <div data-aos="fade-up">
              <form
                class="max-w-form-xl md:max-w-form-md lg:max-w-form-lg xl:max-w-form-xl 2xl:max-w-form-2xl bg-deepgray ml-auto rounded relative"
              >
                <input
                  type="email"
                  placeholder="Enter your email here"
                  class="text-whiteColor h-62px pl-15px focus:outline-none border border-deepgray focus:border-whitegrey bg-transparent rounded w-full"
                >
                <button
                  type="submit"
                  class="px-3 md:px-10px lg:px-5 bg-primaryColor hover:bg-deepgray text-xs lg:text-size-15 text-whiteColor border border-primaryColor block rounded absolute right-0 top-0 h-full"
                >
                  Subscribe Now
                </button>
              </form>
            </div>
          </div>
        </section>

        <!-- footer main -->
        <section>
          <div
            class="grid grid-cols-12 gap-30px md:gap-y-5 lg:gap-y-0 pt-60px pb-50px md:pt-30px md:pb-30px lg:pt-110px lg:pb-20"
          >
            <!-- left -->
            <div
              class="col-start-1 col-span-12 md:col-span-6 lg:col-span-4 mr-30px"
              data-aos="fade-up"
            >
              <h4 class="text-size-22 font-bold text-whiteColor mb-3">
                About us
              </h4>
              <p
                class="text-base lg:text-sm 2xl:text-base text-darkgray mb-30px leading-1.8 2xl:leading-1.8"
              >
                orporate clients and leisure travelers has been relying on
                Groundlink for dependable safe, and professional chauffeured car
                end service in major cities across World.
              </p>
              <div class="flex items-center">
                <div>
                  <i
                    class="icofont-clock-time text-3xl text-whiteColor h-78px w-78px bg-primaryColor leading-78px mr-22px block text-center"
                  ></i>
                </div>
                <div>
                  <h6 class="text-lg text-whiteColor font-medium leading-29px">
                    OPENING HOURES
                  </h6>
                  <p class="text-sm text-whiteColor text-opacity-60 mb-1">
                    Mon - Sat(8.00 - 6.00)
                  </p>
                  <p class="text-sm text-whiteColor text-opacity-60">
                    Sunday - Closed
                  </p>
                </div>
              </div>
            </div>
            <!-- middle 1 -->
            <div
              class="col-start-1 col-span-12 md:col-start-7 lg:col-start-5 md:col-span-6 lg:col-span-2"
              data-aos="fade-up"
            >
              <h4 class="text-size-22 font-bold text-whiteColor mb-3">
                Usefull Links
              </h4>
              <ul class="flex flex-col gap-y-3">
                <li>
                  <a
                    href="#"
                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                    >About Us</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                    >Teachers</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                    >Partner</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                    >Room-Details</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                    >Gallery</a
                  >
                </li>
              </ul>
            </div>
            <!-- middle 2 -->
            <div
              class="col-start-1 col-span-12 md:col-start-1 lg:col-start-7 md:col-span-6 lg:col-span-3 pl-0 2xl:pl-60px"
              data-aos="fade-up"
            >
              <h4 class="text-size-22 font-bold text-whiteColor mb-3">
                Course
              </h4>
              <ul class="flex flex-col gap-y-3">
                <li>
                  <a
                    href="#"
                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                    >Ui Ux Design</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                    >Web Development</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                    >Business Strategy</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                    >Softwere Development</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                    >Business English</a
                  >
                </li>
              </ul>
            </div>
            <!-- right -->
            <div
              class="col-start-1 col-span-12 md:col-start-7 lg:col-start-10 md:col-span-6 lg:col-span-3 pl-0 2xl:pl-50px"
              data-aos="fade-up"
            >
              <h4 class="text-size-22 font-bold text-whiteColor mb-3">
                Recent Post
              </h4>
              <ul class="flex flex-col gap-y-5">
                <li>
                  <a class="flex items-center gap-3 group cursor-pointer">
                    <div>
                      <img
                        src="../assets/images/footer/footer__1.png"
                        alt=""
                        class="w-61px h-54px"
                      >
                    </div>
                    <div>
                      <p class="text-xs text-darkgray mb-7px">02 Apr 2024</p>
                      <h6
                        class="text-size-15 text-whiteColor font-bold group-hover:text-primaryColor transition-all duration-300"
                      >
                        Best Your Business
                      </h6>
                    </div>
                  </a>
                </li>

                <li>
                  <a class="flex items-center gap-3 group cursor-pointer">
                    <div>
                      <img
                        src="../assets/images/footer/footer__2.png"
                        alt=""
                        class="w-61px h-54px"
                      >
                    </div>
                    <div>
                      <p class="text-xs text-darkgray mb-7px">02 Apr 2024</p>
                      <h6
                        class="text-size-15 text-whiteColor font-bold group-hover:text-primaryColor transition-all duration-300"
                      >
                        Keep Your Business
                      </h6>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="flex items-center gap-3 group cursor-pointer">
                    <div>
                      <img
                        src="../assets/images/footer/footer__3.png"
                        alt=""
                        class="w-61px h-54px"
                      >
                    </div>
                    <div>
                      <p class="text-xs text-darkgray mb-7px">02 Apr 2024</p>
                      <h6
                        class="text-size-15 text-whiteColor font-bold group-hover:text-primaryColor transition-all duration-300"
                      >
                        Nice Your Business
                      </h6>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </section>

        <!-- footer copyright  -->
        <div>
          <div
            class="grid grid-cols-1 lg:grid-cols-12 gap-5 lg:gap-30px pt-10 items-center"
          >
            <div class="lg:col-start-1 lg:col-span-3">
              <a href="#">
                <img src="../assets/images/logo/logo_2.png" alt="" >
              </a>
            </div>

            <div class="lg:col-start-4 lg:col-span-6">
              <p class="text-whiteColor">
                Copyright © <span class="text-primaryColor">2024 </span> by
                edurock. All Rights Reserved.
              </p>
            </div>

            <div class="lg:col-start-10 lg:col-span-3">
              <ul class="flex gap-3 lg:gap-2 2xl:gap-3 lg:justify-end">
                <li>
                  <a
                    href="#"
                    class="w-40.19px lg:w-35px 2xl:w-40.19px h-37px lg:h-35px 2xl:h-37px leading-37px lg:leading-35px 2xl:leading-37px text-whiteColor bg-whiteColor bg-opacity-10 hover:bg-primaryColor text-center"
                    ><i class="icofont-facebook"></i
                  ></a>
                </li>
                <li>
                  <a
                    href="#"
                    class="w-40.19px lg:w-35px 2xl:w-40.19px h-37px lg:h-35px 2xl:h-37px leading-37px lg:leading-35px 2xl:leading-37px text-whiteColor bg-whiteColor bg-opacity-10 hover:bg-primaryColor text-center"
                    ><i class="icofont-twitter"></i
                  ></a>
                </li>
                <li>
                  <a
                    href="#"
                    class="w-40.19px lg:w-35px 2xl:w-40.19px h-37px lg:h-35px 2xl:h-37px leading-37px lg:leading-35px 2xl:leading-37px text-whiteColor bg-whiteColor bg-opacity-10 hover:bg-primaryColor text-center"
                    ><i class="icofont-vimeo"></i
                  ></a>
                </li>
                <li>
                  <a
                    href="#"
                    class="w-40.19px lg:w-35px 2xl:w-40.19px h-37px lg:h-35px 2xl:h-37px leading-37px lg:leading-35px 2xl:leading-37px text-whiteColor bg-whiteColor bg-opacity-10 hover:bg-primaryColor text-center"
                    ><i class="icofont-linkedin"></i
                  ></a>
                </li>
                <li>
                  <a
                    href="#"
                    class="w-40.19px lg:w-35px 2xl:w-40.19px h-37px lg:h-35px 2xl:h-37px leading-37px lg:leading-35px 2xl:leading-37px text-whiteColor bg-whiteColor bg-opacity-10 hover:bg-primaryColor text-center"
                    ><i class="icofont-skype"></i
                  ></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
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
    <script  src="../assets/js/vanilla-tilt.js"></script>
    <script  src="../assets/js/aos.js"></script>
    <script src="../assets/js/main.js"></script>
  </body>

<!-- Mirrored from html.themewin.com/edurcok-preview-tailwind/edurock/course-details-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jan 2025 14:27:39 GMT -->
</html>
