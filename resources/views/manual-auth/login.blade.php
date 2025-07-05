<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login UI</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="w-full max-w-sm p-6 bg-white rounded-2xl shadow-lg">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Form Login</h2>
    <form action="{{ route('loginProses') }}" method="post">
        @csrf
    <div class="space-y-4">
      <div>
        <label class="block text-sm font-medium text-gray-700">Email</label>
        <div class="mt-1">
          <input type="text" name="email" placeholder="Masukkan email"
                 class="w-full px-4 py-2 border rounded-lg bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>  
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700">Password</label>
        <div class="mt-1">
          <input type="password" name="password" placeholder="••••••••"
                 class="w-full px-4 py-2 border rounded-lg bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>
      </div>

      <div class="flex items-center justify-between text-sm">
        <label class="flex items-center">
          <input type="checkbox" class="mr-1"> Remember me
        </label>
        <a href="#" class="text-blue-500 hover:underline">Forgot password?</a>
      </div>

      <div>
      <button type="submit"
              class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition">
          Login
        </button>
       </form>
      </div>
    </div>
  </div>

</body>
</html>
