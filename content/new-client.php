<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

  <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-lg">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Contact Us</h2>

    <form action="#" method="POST" class="space-y-4">
      <div>
        <label for="name" class="block text-gray-700 font-medium mb-1">Name</label>
        <input
          type="text"
          id="name"
          name="name"
          required
          class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400"
        />
      </div>

      <div>
        <label for="email" class="block text-gray-700 font-medium mb-1">Email</label>
        <input
          type="email"
          id="email"
          name="email"
          required
          class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400"
        />
      </div>

      <div>
        <label for="subject" class="block text-gray-700 font-medium mb-1">Subject</label>
        <input
          type="text"
          id="subject"
          name="subject"
          class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400"
        />
      </div>

      <div>
        <label for="message" class="block text-gray-700 font-medium mb-1">Message</label>
        <textarea
          id="message"
          name="message"
          rows="5"
          required
          class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400 resize-none"
        ></textarea>
      </div>

      <div class="text-center">
        <button
          type="submit"
          class="bg-blue-500 text-white px-6 py-2 rounded-xl hover:bg-blue-600 transition"
        >
          Send Message
        </button>
      </div>
    </form>
  </div>

</body>
</html>
