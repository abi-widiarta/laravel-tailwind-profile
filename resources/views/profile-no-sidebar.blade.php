<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="box-border">
    {{-- container --}}
    <div>
        {{-- main start --}}
        <main class="h-screen flex justify-center items-center">
            <div class="w-full max-w-5xl bg-white rounded-lg  sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                {{-- main title --}}
                <div class="flex items-center justify-between mb-4">
                    <h5 class="text-3xl font-bold leading-none text-gray-900 dark:text-white">Profil  Saya</h5>
                </div>
                {{-- main profile card --}}
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
                {{-- main form --}}
                <div class="mt-8">  
                    <form>
                        <div class="grid gap-y-8 gap-x-10 mb-6 md:grid-cols-2">
                            <div>
                                <label for="nama_panggilan" class="block mb-4 text-md font-medium text-gray-900 dark:text-white">Nama Panggilan</label>
                                <input type="text" id="nama_panggilan" class="bg-[#EEEFF0] border border-gray-300 text-gray-900 text-md ps-4 py-3 rounded-lg focus:ring-[#D5D0F7] focus:border-[#D5D0F7] block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#D5D0F7] dark:focus:border-[#D5D0F7]" placeholder="Wage" required>
                            </div>
                            <div>
                                <label for="nama_lengkap" class="block mb-4 text-md font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                                <input type="text" id="nama_lengkap" class="bg-[#EEEFF0] border border-gray-300 text-gray-900 text-md ps-4 py-3 rounded-lg focus:ring-[#D5D0F7] focus:border-[#D5D0F7] block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#D5D0F7] dark:focus:border-[#D5D0F7]" placeholder="James Wage Hamilton" required>
                            </div>
                            <div>
                                <label for="email" class="block mb-4 text-md font-medium text-gray-900 dark:text-white">Alamat Email</label>
                                <input type="email" id="email" class="bg-[#EEEFF0] border border-gray-300 text-gray-900 text-md ps-4 py-3 rounded-lg focus:ring-[#D5D0F7] focus:border-[#D5D0F7] block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#D5D0F7] dark:focus:border-[#D5D0F7]" placeholder="jameswage@student.telkomuniversity.ac.id" required>
                            </div> 
                            <div>
                                <label for="phone" class="block mb-4 text-md font-medium text-gray-900 dark:text-white">Nomor Telepon</label>
                                <input type="tel" id="phone" class="bg-[#EEEFF0] border border-gray-300 text-gray-900 text-md ps-4 py-3 rounded-lg focus:ring-[#D5D0F7] focus:border-[#D5D0F7] block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#D5D0F7] dark:focus:border-[#D5D0F7]" placeholder="(+62) 822 4690 5357" required>
                            </div>
                            <div>
                                <label for="universitas" class="block mb-4 text-md font-medium text-gray-900 dark:text-white">Universitas</label>
                                <input type="text" id="universitas" class="bg-[#EEEFF0] border border-gray-300 text-gray-900 text-md ps-4 py-3 rounded-lg focus:ring-[#D5D0F7] focus:border-[#D5D0F7] block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#D5D0F7] dark:focus:border-[#D5D0F7]" placeholder="Universitas Telkom" required>
                            </div>
                            <div>
                                <label for="jurusan" class="block mb-4 text-md font-medium text-gray-900 dark:text-white">Jurusan</label>
                                <input type="text" id="jurusan" class="bg-[#EEEFF0] border border-gray-300 text-gray-900 text-md ps-4 py-3 rounded-lg focus:ring-[#D5D0F7] focus:border-[#D5D0F7] block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#D5D0F7] dark:focus:border-[#D5D0F7]" placeholder="S1 Informatika" required>
                            </div>
                        </div>
                        <div class="flex justify-center mt-12">
                            <button type="submit" class="transition-all text-white bg-[#7868E6] hover:bg-[#6C5ECF] focus:ring-4 focus:outline-none focus:ring-[#D5D0F7] font-medium rounded-xl text-lg w-full sm:w-auto px-8 py-3 text-center">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        {{-- main end --}}
    </div>
</body>
</html>