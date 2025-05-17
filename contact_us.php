 <?php include "partial/_navbar.php"; ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us - Wellnesssty</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#c8c1b8] font-sans">
 

  <div class="min-h-screen flex items-center justify-center py-10">
    <div class="bg-[#fef6e7] max-w-7xl w-full rounded-3xl shadow-xl p-6 md:p-12 flex flex-col lg:flex-row gap-10">

      <!-- Left Side Content -->
      <div class="flex-1 text-[#111]">
        <h1 class="text-4xl font-bold mb-4">Contact Us</h1>
        <p class="text-lg mb-6">Tell us a little bit about who you are, and we'll tell you a whole lot more about who we are.</p>

        <h2 class="text-xl font-semibold mb-2">Talk to our team to day</h2>
        <ul class="list-decimal list-inside space-y-1 mb-6">
          <li>Understanding how our product may fulfill you need</li>
          <li>Discover the capabilities and get answer to your questions</li>
          <li>Get a customized quote</li>
        </ul>

        <h2 class="text-xl font-semibold mb-2">Find Wellnesssty Group</h2>
        <div class="space-y-3">
          <div class="flex items-center gap-2">
            <span class="text-yellow-600">📍</span>
            <span>4517 Washington Ave. Manchester, Kentucky 39495</span>
          </div>
          <div class="flex items-center gap-2">
            <span class="text-yellow-600">📞</span>
            <span>(603) 555-0123</span>
          </div>
          <div class="flex items-center gap-2">
            <span class="text-yellow-600">✉</span>
            <span>curtis.weaver@example.com</span>
          </div>
        </div>
      </div>

      <!-- Right Side Form -->
      <div class="flex-1 bg-[#a6d8dd] rounded-xl shadow-lg p-8">
        <form id="contactForm" class="space-y-4">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label class="font-semibold">First Name *</label>
              <input type="text" id="firstName" class="w-full p-3 rounded-md bg-[#fdf6ec] border" placeholder="Enter Your Name" />
            </div>
            <div>
              <label class="font-semibold">Last Name *</label>
              <input type="text" id="lastName" class="w-full p-3 rounded-md bg-[#fdf6ec] border" placeholder="Enter Your Name" />
            </div>
          </div>
          <div>
            <label class="font-semibold">Your Email *</label>
            <input type="email" id="email" class="w-full p-3 rounded-md bg-[#fdf6ec] border" placeholder="Enter Your Email" />
          </div>
          <div>
            <label class="font-semibold">Company Name *</label>
            <input type="text" id="company" class="w-full p-3 rounded-md bg-[#fdf6ec] border" placeholder="Enter Your Company Name" />
          </div>
          <div>
            <label class="font-semibold">Industry *</label>
            <select id="industry" class="w-full p-3 rounded-md bg-[#fdf6ec] border">
              <option value="">Select your Industry</option>
              <option>Healthcare</option>
              <option>Technology</option>
              <option>Finance</option>
              <option>Education</option>
            </select>
          </div>
          <div>
            <label class="font-semibold">Your Message *</label>
            <textarea id="message" rows="4" class="w-full p-3 rounded-md bg-[#fdf6ec] border" placeholder="Enter Your Message"></textarea>
          </div>
          <button type="submit" class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-6 rounded-md">
            Send
          </button>
        </form>
      </div>
    </div>
  </div>

  <script>
    const form = document.getElementById('contactForm');

    form.addEventListener('submit', function (e) {
      e.preventDefault();

      // Collect input values
      const fields = {
        firstName: document.getElementById('firstName'),
        lastName: document.getElementById('lastName'),
        email: document.getElementById('email'),
        company: document.getElementById('company'),
        industry: document.getElementById('industry'),
        message: document.getElementById('message')
      };

      let isValid = true;
      const emailRegex = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+$/;

      // Reset previous errors
      Object.values(fields).forEach(field => field.classList.remove('border-red-500'));

      // Validate fields
      if (!fields.firstName.value.trim()) {
        fields.firstName.classList.add('border-red-500');
        isValid = false;
      }

      if (!fields.lastName.value.trim()) {
        fields.lastName.classList.add('border-red-500');
        isValid = false;
      }

      if (!emailRegex.test(fields.email.value.trim())) {
        fields.email.classList.add('border-red-500');
        isValid = false;
      }

      if (!fields.company.value.trim()) {
        fields.company.classList.add('border-red-500');
        isValid = false;
      }

      if (!fields.industry.value.trim()) {
        fields.industry.classList.add('border-red-500');
        isValid = false;
      }

      if (fields.message.value.trim().length < 10) {
        fields.message.classList.add('border-red-500');
        isValid = false;
      }

      if (isValid) {
        alert('Form submitted successfully!');
        form.reset();
      } else {
        alert('Please fill all required fields correctly.');
      }
    });
  </script>
  <?php include "partial/_footer.php";  ?>
</body>

</html>