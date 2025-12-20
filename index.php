<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>
  <body>
    <h1 class="bg-gray-400 py-4 font-medium text-2xl text-center">
      Simple CRUD with PHP!!!
    </h1>

    <p class="flex justify-between items-center bg-gray-200 mx-auto my-8 p-4 rounded-md w-full max-w-5xl font-medium">
      <span class="text-2xl">Student list</span>
      <span class="bg-gray-800 px-4 py-2 text-white">Add Student</span>
    </p>  
    <table class="mx-auto my-8 p-4 w-full max-w-5xl">
      <thead>
        <tr>
          <th>Serial</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody class="mt-4">
        <tr class="space-x-6 text-center">
          <td>01</td>
          <td>Rahim</td>
          <td>Rahim@dev</td>
          <td>01234567890</td>
          <td>
            <a href="https://github.com/dhurjoy-paul/php-crud"
              class="bg-indigo-600 px-3 py-1.5 rounded-md text-white"
            >
            Edit</a>
            <button
            class="bg-red-600 px-3 py-1 rounded-md text-white"
            >Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>