<?php
session_start();
$userName = $_SESSION['user_name'];
require_once __DIR__. "/../../controllers/TagController.php";


$idT = $_GET['id'];
$tag = new Tags();

$tags =  $tag->ModiferTage($idT);
if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['modiferTag'])) {
    $color = $_POST['tag_color'];
    $nom = $_POST['tag_name'];
  $id = $_POST['id'];
    $tag->Modifer($id,$nom,$color);
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div id="modal" class="flex inset-0 bg-gray-900 bg-opacity-50 justify-center items-center z-50">
        <!-- Content of the modal (form) -->
        <div class="bg-gradient-to-br from-gray-100 to-gray-300 p-8 rounded-lg shadow-lg max-w-[50vw] mx-auto">
            <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Add Tag</h2>
            <!-- Form -->
            <form action="" method="POST" class="space-y-4 w-[40vw] h-[30vh] overflow-y-auto p-4 bg-gray-100 rounded-lg">
                <!-- Tag Name Input -->

                <div id="formTage">
                  <input type="hidden" name="id" value="<?= $tags['id_Tag'] ?>">
                <!-- Champ "Tag Name" -->
                <div class="relative mb-4">
                  <label for="tag_name" class="block text-sm font-medium text-gray-700">
                    Tag Name
                  </label>
                  <input
                    type="text"
                    name="tag_name"
                    value="<?= $tags['nom'] ?>"
                    id="tag_name"
                    class="block w-full mt-2 px-4 py-2 text-sm text-gray-700 bg-white border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none focus:border-blue-500"
                    placeholder="Enter tag name"
                    required
                  />
                </div>

                <!-- Champ "Tag Color" -->
                <div class="relative mb-4">
                  <label for="tag_color" class="block text-sm font-medium text-gray-700">
                    Tag Color
                  </label>
                  <input
                    type="color"
                    name="tag_color"
                    id="tag_color"
                    class="block w-full mt-2 h-10 p-1 text-sm border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none focus:border-blue-500 cursor-pointer"
                    required
                  />
                </div>
                              </div>

  
                <!-- Submit Button -->
                <div class="flex justify-around items-center">
                    <button type="submit" name="modiferTag" class="w-[10vw] py-2 text-sm text-white bg-blue-600 rounded-md shadow-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>