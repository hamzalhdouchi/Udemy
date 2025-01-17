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
var_dump($idC);
$categorei = new Categorie();

$categoreis = $categorei->getCategories();
$coursVideo = new CoursVideo();
$coursDecoment = new CoursDocument();
$coursDecoment->setid($idE);
$coursDecoment->setid($idE);
$resultVideo = $coursVideo->modiferCours($idC);
$resultDocument = $coursDecoment->modiferCours($idC);

var_dump($resultVideo, $resultDocument);

// if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['CreateVidio'])) {

//     $title = htmlspecialchars($_POST['Title']);
//     $slug = htmlspecialchars($_POST['Slug']);
//     $Categorei = $_POST['Categorei'];
//     $Tags = $_POST['Tags'];
//     $About = htmlspecialchars($_POST['About']);
//     $centenu = $_POST['centenu_video'];
//     $image = $_FILES['image'];
//     $coursVideo->setid($idE);
//     $coursVideo->setTitre($title);
//     $coursVideo->setSlgun($slug);
//     $coursVideo->setDescription($About);
//     $coursVideo->setVideo($centenu);
//     $coursVideo->setcategorie_id($Categorei);
//     $coursVideo->setTags_id($Tags);
//     $coursVideo->setImage($image);
//     $coursVideo->ajouterCours();
// }

// if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['CreateDocument'])) {

//     $title = htmlspecialchars($_POST['Title']);
//     $slug = htmlspecialchars($_POST['Slug']);
//     $Categorei = $_POST['Categorei'];
//     $Tags = $_POST['Tags'];
//     $About = htmlspecialchars($_POST['About']);
//     $image = $_FILES['image'];

//     $centenu = $_FILES['centenu_pdf'];
//     $coursDecoment->setid($idE);
//     $coursDecoment->setTitre($title);
//     $coursDecoment->setSlgun($slug);
//     $coursDecoment->setDescription($About);
//     $coursDecoment->setDocument($centenu);
//     $coursDecoment->setcategorie_id($Categorei);
//     $coursDecoment->setTags_id($Tags);
//     $coursDecoment->setImage($image);
//     $coursDecoment->ajouterCours();
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<body>
<div class="container py-100px">
        <div class="tab md:w-2/3 mx-auto">
          <!-- tab controller -->

          <div
            class="tab-links grid grid-cols-2 gap-11px text-blackColor text-lg lg:text-size-22 font-semibold font-hind mb-43px mt-30px md:mt-0">
            <button
              class="py-9px lg:py-6 hover:text-primaryColor dark:text-whiteColor dark:hover:text-primaryColor bg-white dark:bg-whiteColor-dark dark:hover:bg-whiteColor-dark hover:bg-white relative group/btn shadow-bottom hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard">
              <span
                class="absolute w-full h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"></span>

              Create Course Video
            </button>
            <button
              class="py-9px lg:py-6 hover:text-primaryColor dark:hover:text-primaryColor dark:text-whiteColor bg-lightGrey7 dark:bg-lightGrey7-dark hover:bg-white dark:hover:bg-whiteColor-dark relative group/btn hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard">
              <span
                class="absolute w-0 h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"></span>

              Create Course Document
            </button>
          </div>

          <!--  tab contents -->
          <div
            class="shadow-container bg-whiteColor dark:bg-whiteColor-dark pt-10px px-5 pb-10 md:p-50px md:pt-30px rounded-5px">
            <div class="tab-contents">
              <!-- login form-->
              <div
                class="block opacity-100 transition-opacity duration-150 ease-linear">
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
                                          placeholder="Course Title"
                                          class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                      </div>
                                      <div>
                                        <label class="mb-3 block font-semibold">Course Slug</label>
                                        <input
                                          type="text"
                                          name="Slug"
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
                              </textarea>
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
                            name="CreateVidio"
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
                                          placeholder="Course Title"
                                          class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                      </div>
                                      <div>
                                        <label class="mb-3 block font-semibold">Course Slug</label>
                                        <input
                                          type="text"
                                          name="Slug"
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
                              </textarea>
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
                            name="CreateDocument"
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
</body>
</html>