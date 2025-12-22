<?php
include 'inc/header.php';
include 'actions/addStudent.php';
?>

<p class="flex justify-between items-center bg-gray-200 mx-auto my-8 p-4 rounded-md w-full max-w-5xl font-medium">
  <span class="text-2xl">Add Student</span>
  <a href="index.php" class="bg-gray-800 px-4 py-2 rounded-md text-white">
    Go back</a>
</p>

<div class="mx-auto w-full max-w-xl">
  <form method="post" class="flex flex-col justify-center gap-4">
    <div class="flex justify-between items-center">
      <label for="name" class="font-medium text-lg text-nowrap">Student Name:</label>
      <input type="text" name="name" id="name" value="<?php echo $name; ?>" required
        class="px-2 py-1 rounded ring-2 ring-black w-[71%]">
    </div>

    <div class="flex justify-between items-center">
      <label for="email" class="font-medium text-lg text-nowrap">Student Email:</label>
      <input type="email" name="email" id="email" value="<?php echo $email; ?>" required
        class="px-2 py-1 rounded ring-2 ring-black w-[71%]">
    </div>

    <div class="flex justify-between items-center">
      <label for="phone" class="font-medium text-lg text-nowrap">Student Phone No:</label>
      <input type="tel" name="phone" id="phone" value="<?php echo $phone; ?>" required
        class="px-2 py-1 rounded ring-2 ring-black w-[71%]">
    </div>


    <?php
    if (!empty($successMessage)) {
      echo "
          <p class='bg-green-100 mt-2.5 -mb-1 py-1.5 rounded-md font-medium text-green-700 text-center'><strong>$successMessage</strong></p>
        ";
    }

    if (!empty($errorMessage)) {
      echo "
          <p class='bg-red-100 mt-2.5 -mb-1 py-1.5 rounded-md font-medium text-red-700 text-center'><strong>$errorMessage</strong></p>
        ";
    }
    ?>

    <input type="submit" name="submit" value="Add Student"
      class="bg-gray-800 mt-1 py-2 rounded-md font-medium text-white text-lg cursor-pointer">
  </form>
</div>