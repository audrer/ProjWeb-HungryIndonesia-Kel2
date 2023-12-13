<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log In Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap"
    />
    
    <style>
      body,
      h1,
      p,
      a {
        font-family: "Ubuntu", sans-serif;
      }

      .font-extrabold {
        font-family: "Poppins", sans-serif;
      }
    </style>
  </head>
  <body class="bg-[#fff9e5]">
    <div class="min-w-full">
      <!--Navbar-->
      <nav
        class="flex items-center justify-between px-16 bg-[#5F5D2D] bg-opacity-100 fixed-w-full h-20 z-10"
      >
        <a href="#" class="font-bold text-2xl text-[#fff9e5]"
          >HungryIndonesia</a
        >
        <div>
          <a href="#"><img src="Image/menu.png" alt="menu" class="w-9" /></a>
          <ul class="">
            <li class="mx-4 md:my-0">
              <a href="#" class="text-xl hover:text-[#5F5D2D] duration-500"
                ></a
              >
            </li>
            <li class="mx-4 md:my-0">
              <a href="#" class="text-xl hover:text-[#5F5D2D] duration-500"
                ></a
              >
            </li>
            <li class="mx-4 md:my-0">
              <a href="#" class="text-xl hover:text-[#5F5D2D] duration-500"
                ></a
              >
            </li>
            <li class="mx-4 md:my-0">
              <a href="#" class="text-xl hover:text-[#5F5D2D] duration-500"
                ></a
              >
            </li>
            <li class="mx-4 md:my-0">
              <a href="#" class="text-xl hover:text-[#5F5D2D] duration-500"
                ></a
              >
            </li>
            <li class="mx-4 md:my-0">
              <a href="#" class="text-xl hover:text-[#5F5D2D] duration-500"
                ></a
              >
            </li>
            <li class="mx-4 md:my-0">
              <a href="#" class="text-xl hover:text-[#5F5D2D] duration-500"
                ></a
              >
            </li>
            <li class="mx-4 md:my-0">
              <a href="#" class="text-xl hover:text-[#5F5D2D] duration-500"
                ></a
              >
            </li>
            <li class="mx-4 md:my-0">
              <a href="#" class="text-xl hover:text-[#5F5D2D] duration-500"
                ></a
              >
            </li>
          </ul>
        </div>
      </nav>

      <a href="#"
        ><img
          src="Image/left arrow.png"
          alt="left arrow"
          class="w-8 mt-14 ml-24"
      /></a>

      <p class="flex justify-center mt-1 text-[#5F5D2D] text-2xl font-bold">
        HungryIndonesia
      </p>

      <section class="flex justify-center items-center mt-5">
        <div
          class="bg-[#5F5D2D] h-14 w-1/4 border-lime-800 text-xl rounded-l-3xl text-amber-50 font-bold text-center mt-7 flex items-center justify-center shadow-inner border border-opacity-20 cursor-pointer"
        >
          <p>Log In</p>
        </div>
        <a
          href="../Project Hungry Indonesia_Sidney/SignUp_Page.php"
          class="bg-white h-14 w-1/4 border-lime-800 rounded-r-3xl text-xl text-[#5F5D2D] font-bold text-center mt-7 flex items-center justify-center shadow-inner border border-opacity-20 cursor-pointer hover:bg-[#c8c7ae]"
          ><p>Sign Up</p></a
        >
      </section>
      <form method="post" action="../Project Hungry Indonesia_Sidney/connectsignup.php">

      <div class="items-center flex w-full flex-col items-center">
        <input
          type="text"
          placeholder="Email"
          class="h-14 text-xl border block rounded-3xl py-3 px-2 w-2/4 mb-3 mt-3 shadow-inner"
        />
        <input
          type="text"
          placeholder="Password"
          class="h-14 text-xl border block rounded-3xl py-3 px-2 w-2/4 mb-3 shadow-inner"
        />
        <button
          class="h-14 text-xl w-2/4 py-3 font-semibold text-center text-amber-50 border bg-[#5F5D2D] rounded-3xl shadow-inner hover:bg-[#c8c7ae]"
        >
          Continue
        </button>
        <p class="flex justify-center mt-36 text-amber-500 text-2xl font-bold">
          Uncover Tasty Treasures, One Recipe and Restaurant at a Time
        </p>
      </div>
    </form>
    </div>

    <footer class="">
      <hr class="h-px my-7 bg-stone-300 border-0 dark:bg-stone-300" />

      <div class="flex justify-center text-center gap-x-56">
        <div>
          <p class="mb-6 text-xl font-bold text-[#5f5D2D]">Company</p>
          <ul class="text-stone-400 text-lg font-medium">
            <li class="mb-4">
              <a href="#" class="hover:underline block">About us</a>
              <a href="#" class="hover:underline">FAQ</a>
            </li>
          </ul>
        </div>

        <div>
          <p class="mb-6 text-md font-bold text-xl text-[#5f5D2D]">Products</p>
          <ul class="text-stone-400 text-lg font-medium">
            <li class="mb-4">
              <a href="#" class="hover:underline block">Indonesian Recipe</a>
              <a href="#" class="hover:underline">Indonesian Restaurant</a>
            </li>
          </ul>
        </div>

        <div>
          <p class="mb-6 text-md font-bold text-xl text-[#5f5D2D]">Support</p>
          <ul class="text-stone-400 text-lg font-medium">
            <li class="mb-4">
              <a href="#" class="hover:underline block">Help</a>
              <a href="#" class="hover:underline block">Terms</a>
              <a href="#" class="hover:underline">Privacy</a>
            </li>
          </ul>
        </div>
      </div>

      <hr class="h-px my-7 bg-stone-300 border-0 dark:bg-stone-300" />
      <div class="flex justify-center">
        <a href="#"
          ><img src="Image/instagram.png" alt="instagram" class="w-7 mr-2"
        /></a>
        <a href="#"
          ><img src="Image/facebook.png" alt="facebook" class="w-7 mr-2"
        /></a>
        <a href="#"
          ><img src="Image/twitter.png" alt="twitter" class="w-7"
        /></a>
      </div>
      <h3
        class="flex justify-center text-[#5F5D2D] text-sm mt-1 mb-14 font-bold"
      >
        @ 2023 HungryIndonesia. All Right Reserved.
      </h3>
    </footer>
  </body>
</html>
