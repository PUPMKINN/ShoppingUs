<!--Hero-->
<section class="hero-section">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div class="hero-image lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
            <img class="object-cover object-center rounded" alt="hero" src="./html/img/shopping market.jpg">
        </div>
        <div class="text-content lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="hero-title sm:text-4xl text-3xl mb-4 font-medium text-gray-900">
                <span class="hero-title-text" style="font-size: 80px; font-family:'Montserrat', sans-serif; word-spacing: 8px; color: #00296b;">Welcome
                    to Shopping with Us</span>
            </h1>
            <p class="hero-description mb-8">
                <span class="hero-description-text" style="font-family:'Poppins', sans-serif; font-size: 18px;">Shopping Us is an e-commerce
                    user-friendly application where the customer can register and purchase their required
                    products.</span>
            </p>
            <div class="hero-button flex justify-center">
                <button class="cta-button"><a href="#signup" style="text-decoration: none; color: white;">Get
                        Started</a></button>
            </div>
        </div>
    </div>
</section>


<!--Sign up-->
<form action="t nghĩ code php dễ hơn" method="POST" class="text-gray-700 body-font" id="signup">
    <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
        <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
            <img src="./html/img/shopping-web.png" alt="" width="85%">
        </div>
        <div class="sign-card lg:w-2/6 md:w-1/2 bg-gray-200 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
            <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Sign Up as Customer</h2>
            <input class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4" placeholder="First Name" type="text" name="fname" required>
            <input class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4" placeholder="Last Name" type="text" name="lname" required>
            <input class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4" placeholder="DOB" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="dob" required>
            <input class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4" placeholder="Email" type="email" name="email" pattern="[a-z0-9_-]+@[a-z0-9_-]+\.[a-z]{2,4}$" title="xxx@ppp.yyy" required>
            <input class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4" placeholder="Contact Number" type="tel" maxlength="10" minlength="10" name="phoneno" required>
            <input class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4" placeholder="Password" minlength="8" type="password" name="password" pattern="((?=.*[0-9])(?=.*[A-Z])(?=.*[a-z])(?=.*[@#$%]).{8,15})" title="Password should contain at least 1 uppercase, 1 lowercase, 1 digit and 1 speacial character and should be of length between 8 and 15" required>
            <input class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4" placeholder="Payment Preference" type="text" name="paymentpreference" required>
            <textarea class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4" placeholder="Address" type="text" name="address" rows="4" required></textarea>
            <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" type="submit">Sign Up</button>
        </div>
    </div>
</form>


<!--Product img-->
<section class="text-gray-700 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl subheading-home font-medium title-font mb-4 text-gray-900" style="font-size: 50px; font-family: 'Montserrat', sans-serif; color: #00296b;">Shop Products</h1>
        </div>
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="./html/img/t-shirt adidas.avif">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Clothing</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">Colourful Hoodie</h2>
                        <p class="mt-1">$16.00</p>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="./html/img/shirt.jpg">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Clothing</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">Polo Tees</h2>
                        <p class="mt-1">$21.15</p>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="./html/img/belt.jpeg">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Accesories</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">Supreme Belts</h2>
                        <p class="mt-1">$12.00</p>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="./html/img/short .avif">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Clothing</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">Levis Shorts</h2>
                        <p class="mt-1">$18.40</p>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="./html/img/shoes.webp">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Shoe</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">Nike</h2>
                        <p class="mt-1">$16.00</p>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="./html/img/backpack.webp">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">BackPacks</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">Nike</h2>
                        <p class="mt-1">$21.15</p>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="./html/img/airpod.jpeg">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Accesories</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">Airpods Pro 2</h2>
                        <p class="mt-1">$300.00</p>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="./html/img/applewatch.jpeg">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Accesories</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">Apple Watch Ultra 2</h2>
                        <p class="mt-1">$1000.00</p>
                    </div>
                </div>
            </div>
        </div>
</section>

<!--About us-->
<section id="subscribe">
    <div class="text-center">
        <h1 class="subheading"><span class="subheading-text">About Us</span></h1>
        <p>Give your email to get all the Latest Updates from Us</p>
        <form class="subscribe-form">
            <input type="email" name="email" placeholder="Type Your Email Address">
            <input type="submit" class="subscribe-btn" value="Confirm">
        </form>
    </div>
</section>
<p>&emsp;</p>