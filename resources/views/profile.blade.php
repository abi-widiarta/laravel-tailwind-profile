<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="box-border">
    <div>
        {{-- <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
         </button> --}}
         
         <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-28 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
            <div class="h-full pt-10 overflow-y-auto bg-white dark:bg-gray-800 border border-e-[6px] border-[#EBE8FB]">
               <ul class="space-y-6 w-[100%] font-medium flex items-center flex-col">
                  <li class="mb-6 ">
                     <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white ">
                        <img class="w-11" src="img/logo.svg" alt="logo-college">
                     </a>
                  </li>
                  <li class="w-full flex justify-center border-s-4 border-e-4 border-s-white border-e-white cursor-pointer hover:border-e-[#6C5ECF] transition-all">
                     <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white">
                        <img class="w-8" src="img/home.svg" alt="home-sidebar">
                     </a>
                  </li>
                  <li class="w-full flex justify-center border-s-4 border-e-4 border-s-white border-e-white cursor-pointer hover:border-e-[#6C5ECF] transition-all">
                     <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white">
                        <img class="w-8" src="img/chat.svg" alt="chat-sidebar">
                     </a>
                  </li>
                  <li class="w-full flex justify-center border-s-4 border-e-4 border-s-white border-e-white cursor-pointer hover:border-e-[#6C5ECF] transition-all">
                     <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white">
                        <img class="w-8" src="img/user.svg" alt="user-sidebar">
                     </a>
                  </li>
                  <li class="w-full flex justify-center border-s-4 border-e-4 border-s-white border-e-white cursor-pointer hover:border-e-[#6C5ECF] transition-all">
                     <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white">
                        <img class="w-8" src="img/link.svg" alt="link-sidebar">
                     </a>
                  </li>
                  <li class="w-full flex justify-center border-s-4 border-e-4 border-s-white border-e-white cursor-pointer hover:border-e-[#6C5ECF] transition-all">
                     <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white">
                        <img class="w-8" src="img/info.svg" alt="info-sidebar">
                     </a>
                  </li>
               </ul>
            </div>
         </aside>
         
         <main class="ml-32 h-screen flex justify-center items-center">
            <div class="w-full max-w-5xl bg-white rounded-lg  sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <div class="flex items-center justify-between mb-4">
                    <h5 class="text-3xl font-bold leading-none text-gray-900 dark:text-white">Profil  Saya</h5>
                </div>
                <div class="mt-6">
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img class="w-[5rem] aspect-square rounded-full" src="img/profile-img.png" alt="James Wage">
                        </div>
                        <div class="flex-1 ps-5 space-y-1 min-w-0  h-full">
                            <p class="text-lg font-bold text-gray-900 truncate dark:text-white">
                                James Wage
                            </p>
                            <p class="text-lg text-gray-500 truncate dark:text-gray-400">
                                Free User
                            </p>
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            <button type="button"  class="transition-all text-white bg-[#F45050] hover:bg-[#DC4848] focus:ring-4 focus:ring-[#FCC9C9] leading-none font-medium rounded-lg text-md px-12 pt-3 pb-3.5 mr-2 mb-2">Langganan</button>
                        </div>
                    </div>
                </div >
                <div class="mt-8">  
                    <form>
                        <div class="grid gap-y-8 gap-x-10 mb-6 md:grid-cols-2">
                            <div>
                                <label for="nama_panggilan" class="block mb-4 text-md font-medium text-gray-900 dark:text-white">Nama Panggilan</label>
                                <input type="text" id="nama_panggilan" class="bg-[#EEEFF0] border border-gray-300 text-gray-900 text-md ps-4 py-3 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
                            </div>
                            <div>
                                <label for="nama_lengkap" class="block mb-4 text-md font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                                <input type="text" id="nama_lengkap" class="bg-[#EEEFF0] border border-gray-300 text-gray-900 text-md ps-4 py-3 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" required>
                            </div>
                            <div>
                                <label for="email" class="block mb-4 text-md font-medium text-gray-900 dark:text-white">Alamat Email</label>
                                <input type="email" id="email" class="bg-[#EEEFF0] border border-gray-300 text-gray-900 text-md ps-4 py-3 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required>
                            </div> 
                            <div>
                                <label for="phone" class="block mb-4 text-md font-medium text-gray-900 dark:text-white">Nomor Telepon</label>
                                <input type="tel" id="phone" class="bg-[#EEEFF0] border border-gray-300 text-gray-900 text-md ps-4 py-3 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                            </div>
                            <div>
                                <label for="universitas" class="block mb-4 text-md font-medium text-gray-900 dark:text-white">Universitas</label>
                                <input type="text" id="universitas" class="bg-[#EEEFF0] border border-gray-300 text-gray-900 text-md ps-4 py-3 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="flowbite.com" required>
                            </div>
                            <div>
                                <label for="jurusan" class="block mb-4 text-md font-medium text-gray-900 dark:text-white">Jurusan</label>
                                <input type="text" id="jurusan" class="bg-[#EEEFF0] border border-gray-300 text-gray-900 text-md ps-4 py-3 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="flowbite.com" required>
                            </div>
                        </div>
                        <div class="flex justify-center mt-12">
                            <button type="submit" class="transition-all text-white bg-[#7868E6] hover:bg-[#6C5ECF] focus:ring-4 focus:outline-none focus:ring-[#D5D0F7] font-medium rounded-xl text-lg w-full sm:w-auto px-8 py-3 text-center">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
         </main>
    </div>
    {{-- <div class="w-[60%] mx-auto border border-red-600">
        <h1>Profil Saya</h1>
        <div class="mx-auto profile__title">
            <div class="profile-avatar">
                <img src="" alt="">
                <p>John Doe</p>
                <p>John Doe</p>
            </div>
            <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Default</button>
        </div>
        
        <div class="mx-auto">
            <form>
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Panggilan</label>
                        <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
                    </div>
                    <div>
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                        <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" required>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Email</label>
                        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required>
                    </div> 
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telepon</label>
                        <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                    </div>
                    <div>
                        <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Universitas</label>
                        <input type="url" id="website" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="flowbite.com" required>
                    </div>
                    <div>
                        <label for="visitors" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jurusan</label>
                        <input type="number" id="visitors" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                    </div>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>
        </div>

    </div> --}}
</body>
</html>