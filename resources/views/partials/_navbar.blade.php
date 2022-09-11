{{--Navigation bar--}}
<!-- Navbar goes here -->
		<nav class="bg-gray-900 shadow-lg">
			<div class="max-w-6xl mx-auto px-4">
				<div class="flex justify-between">
					<div class="flex space-x-7">
						<div>
							<!-- Website Logo -->
							<a href="/index" class="flex items-center py-4 px-2">
								<img src="/images/logo2.png" alt="Logo" class="h-8 w-8 mr-2">
								<span class="font-medium text-gray-500 text-sm"></span>
							</a>
						</div>
						<!-- Primary Navbar items -->
						<div class="hidden md:flex items-center space-x-1">
							<a href="/index" class="py-4 px-2 text-indigo-500 border-b-4 border-green-500 font-semibold ">Home</a>
							<a href="/pages/services" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Services</a>
							<a href="/pages/about" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">About</a>
							<a href="/pages/contact" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Contact</a>
                            <a href="/pages/pricing" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Pricing</a>
                            <a href="/pages/faq" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">FAQ</a>
                            <a href="/pages/team" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Team</a>
						</div>
					</div>
					<!-- Secondary Navbar items -->
					<div class="hidden md:flex items-center space-x-3 ">
						<a
                         class="px-5 py-2.5 text-sm font-medium text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br rounded-md shadow"
                         href="/users/login"
                        >
                        Login
                        </a>
						<a
                         class="px-5 py-2.5 text-sm font-medium text-indigo-600 bg-gray-100 rounded-md"
                         href="/users/register"
                         >
                         Register
                         </a>
					</div>
					<!-- Mobile menu button -->
					<div class="md:hidden flex items-center">
						<button class="outline-none mobile-menu-button">
						<svg class=" w-6 h-6 text-gray-500 hover:text-green-500 "
							x-show="!showMenu"
							fill="none"
							stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							viewBox="0 0 24 24"
							stroke="currentColor"
						>
							<path d="M4 6h16M4 12h16M4 18h16"></path>
						</svg>
					</button>
					</div>
				</div>
			</div>
			<!-- mobile menu -->
			<div class="hidden mobile-menu">
				<ul class="">
					<li class="active"><a href="/index" class="block text-sm px-2 py-4 text-white bg-indigo-500 font-semibold">Home</a></li>
					<li><a href="/pages/services" class="block text-sm px-2 py-4 text-white hover:bg-indigo-500 transition duration-300">Services</a></li>
					<li><a href="/pages/about" class="block text-sm px-2 py-4 text-white hover:bg-indigo-500 transition duration-300">About</a></li>
					<li><a href="/pages/contact" class="block text-sm px-2 py-4 text-white hover:bg-indigo-500 transition duration-300">Contact</a></li>
                    <li><a href="/pages/pricing" class="block text-sm px-2 py-4 text-white hover:bg-indigo-500 transition duration-300">Pricng</a></li>
                    <li><a href="/pages/faq" class="block text-sm px-2 py-4 text-white hover:bg-indigo-500 transition duration-300">FAQ</a></li>
                    <li><a href="/pages/team" class="block text-sm px-2 py-4 text-white hover:bg-indigo-500 transition duration-300">Team</a></li>
				</ul>
			</div>
			<script>
				const btn = document.querySelector("button.mobile-menu-button");
				const menu = document.querySelector(".mobile-menu");

				btn.addEventListener("click", () => {
					menu.classList.toggle("hidden");
				});
			</script>
		</nav>


{{--Navigation bar end--}}
