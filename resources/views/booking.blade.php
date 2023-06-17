<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/cormorant-2" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <title>Booking Layanan</title>
</head>

<body class="">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-[468px] bg-[#F4E7E6]">
            <!-- Logo -->
            <div class="flex items-center justify-center">
                <img src="{{ asset('WeddingLy.png') }}" alt="Logo" class="h-[277px] w-[230px]">
            </div>
            <!-- button hover bg -->
            <div class="flex flex-col items-center mt-8 justify-center gap-5">
                <a href="#"
                    class="bg-gray-300 rounded-full w-[270px] h-12 hover:animate-shake cursor-not-allowed flex items-center justify-center mx-auto">All in</a>
                <a href="catering.html"
                    class="bg-white rounded-full w-[270px] h-12 hover:bg-gray-300 cursor-pointer flex items-center justify-center mx-auto">Catering</a>
                <a href="venue.html"
                    class="bg-white rounded-full w-[270px] h-12 hover:bg-gray-300 cursor-pointer flex items-center justify-center mx-auto">Venue</a>
                <a href="decoration.html"
                    class="bg-white rounded-full w-[270px] h-12 hover:bg-gray-300 cursor-pointer flex items-center justify-center mx-auto">Decoration</a>
            </div>
        </div>

        <!-- Utama -->
        <div class="flex-1  my-12 bg-white">
            <div class="mx-[150px]">
                <div class="flex flex-col">
                    <div class="flex flex-row items-center justify-between">
                        <div class="text-[30px] font-semibold">
                            <h1>Dapatkan diskon 40%</h1>
                        </div>
                        <div class="flex flex-row gap-4">
                            <img src="img/bag.svg" class="w-12" alt="">
                            <div class="flex text-[12px] text-center flex-col">
                                <p class="text-[10px] text-gray-500 text-left">Welcome Back!</p>
                                <p id="DIPISAH SYAH nya HAHAHHA" class="font-semibold">Mr. Anang Ridwan Syah</p>
                                <p>&</p>
                                <p class="font-semibold">Mr. Ihsan Kamil Al Ghozi</p>
                            </div>
                        </div>
                    </div>
                    <h1 class="font-semibold text-lg ">Pesan Sekarang</h1>
                    <div class="flex flex-row gap-2 mt-4">
                        <p class="font-light">Package Available on</p>
                        <div class="w-[168px] pl-3 flex items-center rounded-full bg-[#F6F6F6] h-6">
                            <p class="font-light text-[8px]">DATE</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-[1235px] rounded-2xl ring-1 m-[52px] ring-black">
                <div class="mx-8 pt-8 pb-48">
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col">
                            <h1 class="text-2xl font-semibold">Intimate Wedding Package</h1>
                            <p class="text-sm font-light">by Pawonjani Catering Surabaya</p>
                            <p class="mt-12 text-sm font-light">Buffet Menu / 50 Pax</p>
                        </div>
                        <div class="flex flex-col gap-4">
                            <div
                                class="w-[494px] pt-4 px-4 rounded-2xl shadow-md drop-shadow-md shadow-gray-400 h-[202px]">
                                <h1 class="font-light mb-1">Harga</h1>
                                <p class=" text-black font-semibold">Rp. 3.500.000</p>
                                <hr class="h-[1px] my-6 border-0  bg-gray-600">
                                <h1 class="font-light mb-1">Kapasitas</h1>
                                <p class=" text-black font-semibold">50 Pax</p>
                            </div>
                            <div
                                class="w-[494px] pt-4 px-4 rounded-2xl shadow-md drop-shadow-md shadow-gray-400 h-[52px]">
                                <div class="flex flex-row justify-between">
                                    <p class="font-light">Jumlah</p>
                                    <div class="flex flex-row gap-2">
                                        <button id="decrementBtn"
                                            class="px-2 ring-1 ring-black rounded-full  font-semibold">
                                            -
                                        </button>
                                        <div id="countDisplay" class="px-4 ">
                                            0
                                        </div>
                                        <button id="incrementBtn"
                                            class="px-2 ring-1 ring-black rounded-full  font-semibold ">
                                            +
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <a class="w-[357px] mx-auto flex justify-center mt-2 h-[46px] bg-[#CEAAAA] rounded-full hover:opacity-80" href="">
                                <p class="flex justify-center hover:font-bold items-center">Pesan Sekarang</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const countDisplay = document.getElementById('countDisplay');
        const incrementBtn = document.getElementById('incrementBtn');
        const decrementBtn = document.getElementById('decrementBtn');

        let count = 0;

        incrementBtn.addEventListener('click', () => {
            count++;
            countDisplay.textContent = count;
        });

        decrementBtn.addEventListener('click', () => {
            count--;
            countDisplay.textContent = count;
        });
    </script>
</body>

</html>
