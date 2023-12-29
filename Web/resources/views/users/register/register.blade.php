<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>REGISTER</title>
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
    <style>
        @media (max-width: 768px) {
            .reponsive {
                display: none;
            }
        }
    </style>
</head>
<body class="">
    <div class=" text-slate-50 h-full w-full grid lg:grid-cols-3 md:grid-cols-2 ">
        <div class=" reponsive w-full  lg:col-span-2 md:col-span-1  col-span-1  h-full  bg-cover bg-center bg-[url('{{asset('backend/image/bg.jpg')}}')] ">
            <div class="p-16 h-3/4 whitespace-pre-wrap">
                <h2 class="text-3xl"> TITLE....</h2>
                <p class="text-5xl">TEXT CONTENT CONTENT CONTENT CONTENT CONTENT CONTENT CONTENT CONTENT...</p>
                <ul class=" flex mt-80 ">
                    <li class=""> Home </li>
                    <li class="pl-6"> About Us </li>
                    <li class="pl-6"> Blog </li>
                    <li class="pl-6"> Error Page </li>
                    <li class="pl-6"> Contact Us</li>
                </ul>
            </div>
        </div>
        <div class=" bg-slate-950  ">
            <div class="px-16 pt-12 pb-10 w-full">
                <div class="style-form">
                    <h2 class="text-4xl font-bold"> Signup Now </h2>
                    <h2 class="text-xl pt-2"> Creating an account is free.. </h2>
                    <h6 class="text-gray-300"> and won't take longer than a couple os seconds </h6>
                    <form action="process-registration.php" method="POST">
                        <div class="mt-5">
                            <label for="full-name" > Full Name </label>
                            <div class="bg-slate-50 px-4 py-3 rounded-md mt-2">
                                <span class="fa fa-user text-[#e84601]"></span>
                                <input  id="full-name" placeholder=" Your Name" type="text" name="full-name" required>
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="email" > Email </label>
                            <div class="bg-slate-50 px-4 py-3 rounded-md mt-2">
                                <span class="fa fa-envelope-open text-[#e84601]"></span>
                                <input id="email" placeholder=" Email" type="email" name="email" required>
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="password"> Password </label>
                            <div class="bg-slate-50 px-4 py-3 rounded-md mt-2">
                                <span class="fa fa-key text-[#e84601]"></span>
                                <input  id="password" placeholder=" Password" type="password" name="password" required>
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="confirm-password" > Confirm Password </label>
                            <div class="bg-slate-50 px-4 py-3 rounded-md mt-2">
                                <span class="fa fa-key text-[#e84601]"></span>
                                <input  id="confirm-password" placeholder=" Confirm Password" type="password" name="confirm-password" required>
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="phone"> Phone </label>
                            <div class="bg-slate-50 px-4 py-3 rounded-md mt-2">
                                <span class="fa fa-phone text-[#e84601]"></span>
                                <input  id="phone" placeholder=" Phone Number" type="text" name="phone" >
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="date"> Date Of Birth</label>
                            <div class="text-slate-500 bg-slate-50 px-4 py-3 rounded-md mt-2">
                                <span class="fa fa-calendar-days text-[#e84601]"></span>
                                <input id="date" placeholder=" Date Of Birth" type="date" name="date">
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="address" > Address</label>
                            <div class="text-slate-500 bg-slate-50 px-4 py-3 rounded-md mt-2">
                                <span class="fa fa-address-card text-[#e84601]"></span>
                                <input  id="address" placeholder=" Your Address" type="text" name="address">
                            </div>
                        </div>
                        <div class="mt-3">
                            <input type="checkbox" id="check">
                            <label for="check">
                                I Accept to the Terms & Conditions
                            </label>
                        </div>
                        <input name="submit" type="submit" value="Submit">
                    </form>
                </div>
            </div>
            <div class="text-slate-50 block text-center pb-10">
                <h3 class="text-2xl"> or Login with</h3>
                <ul class="style-icon flex justify-center text-center">
                    <li class="bg-[#3b5998]"><a href="#"> <span class="fa-brands fa-facebook"></span></a></li>
                    <li class="bg-[#00acee]"><a href="#"> <span class="fa-brands fa-google"></span></a></li>
                    <li class="bg-[#f77737]"><a href="#"> <span class="fa-brands fa-twitter"></span></a></li>
                    <li class="bg-[#bd081c]"><a href="#"> <span class="fa-brands fa-tiktok"></span></a></li>
                </ul>
            </div>
        </div>

    </div>
</body>
</html>