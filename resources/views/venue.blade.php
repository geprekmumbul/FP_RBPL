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
    <title>Venue | WeddingLy</title>
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
                <a
                href="/katalog"
                    class="bg-white rounded-full w-[270px] h-12 hover:bg-gray-300 cursor-pointer flex items-center justify-center mx-auto">All in</a>
                <a
                href="/catering"
                    class="bg-white rounded-full w-[270px] h-12 hover:bg-gray-300 cursor-pointer flex items-center justify-center mx-auto">Catering</a>
                <a
                href="#"
                    class="bg-gray-300 rounded-full w-[270px] h-12 hover:animate-shake cursor-not-allowed flex items-center justify-center mx-auto">Venue</a>
                <a
                href="/dekorasi"
                    class="bg-white rounded-full w-[270px] h-12 hover:bg-gray-300 cursor-pointer flex items-center justify-center mx-auto">Decoration</a>
            </div>
        </div>

        <!-- Utama -->
        <div class="flex-1 mx-[150px] my-12 bg-white">
            <div class="flex flex-col">
                <div class="flex flex-row items-center justify-between">
                    <div class="text-[30px] font-bold">
                        <h1>Dapatkan diskon 40%</h1>
                    </div>
                    <div class="flex flex-row gap-4">
                        <img src="{{ asset('bag.svg') }}" class="w-12" onclick="location.href = '/keranjang'" alt="Keranjang">
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
            <div class="grid grid-cols-5 mx-0 mt-16 gap-12">
                <div class="col-span-1">
                    <div class="bg-gray-100 w-[132px] relative rounded-2xl h-[154px]">
                        <img class="rounded-3xl object-center w-[132px] h-[154px]"
                            src="{{ asset('ven1.jpg') }}" alt="Private Venue">
                        <div class="text-center flex-col flex justify-center">
                            <p class="text-[10px] font-light">Private Venue</p>
                            <p class="text-[10px] text-black font-semibold">Rp 10.000.000</p>
                        </div>
                        <div class="absolute -right-3 -top-3">
                            <a href="">
                            <img src="img/Keranjang.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="bg-gray-100 w-[132px] relative rounded-2xl h-[154px]">
                        <img class="rounded-3xl object-center w-[132px] h-[154px]"
                            src="{{ asset('ven2.jpg') }}" alt="Bars & Lounge">
                        <div class="text-center flex-col flex justify-center">
                            <p class="text-[10px] font-light">Bars & Lounge</p>
                            <p class="text-[10px] text-black font-semibold">Rp 7.000.000</p>
                        </div>
                        <div class="absolute -right-3 -top-3">
                            <a href="">
                            <img src="img/Keranjang.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="bg-gray-100 w-[132px] relative rounded-2xl h-[154px]">
                        <img class="rounded-3xl object-center w-[132px] h-[154px]"
                            src="{{ asset('ven3.jpg') }}" alt="Beach Venue">
                        <div class="text-center flex-col flex justify-center">
                            <p class="text-[10px] font-light">Beach Venue</p>
                            <p class="text-[10px] text-black font-semibold">Rp 4.000.000</p>
                        </div>
                        <div class="absolute -right-3 -top-3">
                            <a href="">
                            <img src="img/Keranjang.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="bg-gray-100 w-[132px] relative rounded-2xl h-[154px]">
                        <img class="rounded-3xl object-center w-[132px] h-[154px]"
                            src="{{ asset('ven4.jpg') }}" alt="Park Venue">
                        <div class="text-center flex-col flex justify-center">
                            <p class="text-[10px] font-light">Park Wedding</p>
                            <p class="text-[10px] text-black font-semibold">Rp 4.000.000</p>
                        </div>
                        <div class="absolute -right-3 -top-3">
                            <a href="">
                            <img src="img/Keranjang.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="bg-gray-100 w-[132px] relative rounded-2xl h-[154px]">
                        <img class="rounded-3xl object-center w-[132px] h-[154px]"
                            src="{{ asset('ven5.jpg') }}" alt="Home Backyard">
                        <div class="text-center flex-col flex justify-center">
                            <p class="text-[10px] font-light">Home Backyard</p>
                            <p class="text-[10px] text-black font-semibold">Rp 2.000.000</p>
                        </div>
                        <div class="absolute -right-3 -top-3">
                            <a href="">
                            <img src="img/Keranjang.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="bg-gray-100 w-[132px] relative rounded-2xl h-[154px]">
                        <img class="rounded-3xl object-center w-[132px] h-[154px]"
                            src="{{ asset('ven6.jpg') }}" alt="Sport Club">
                        <div class="text-center flex-col flex justify-center">
                            <p class="text-[10px] font-light">Sport Club</p>
                            <p class="text-[10px] text-black font-semibold">Rp 4.000.000</p>
                        </div>
                        <div class="absolute -right-3 -top-3">
                            <a href="">
                            <img src="img/Keranjang.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="bg-gray-100 w-[132px] relative rounded-2xl h-[154px]">
                        <img class="rounded-3xl object-center w-[132px] h-[154px]"
                            src="{{ asset('ven7.png') }}" alt="Gallery & Museum">
                        <div class="text-center flex-col flex justify-center">
                            <p class="text-[10px] font-light">Gallery & Museum</p>
                            <p class="text-[10px] text-black font-semibold">Rp 5.000.000</p>
                        </div>
                        <div class="absolute -right-3 -top-3">
                            <a href="">
                            <img src="img/Keranjang.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="bg-gray-100 w-[132px] relative rounded-2xl h-[154px]">
                        <img class="rounded-3xl object-center w-[132px] h-[154px]"
                            src="{{ asset('ven8.webp') }}" alt="Hotel Wedding">
                        <div class="text-center flex-col flex justify-center">
                            <p class="text-[10px] font-light">Hotel Wedding</p>
                            <p class="text-[10px] text-black font-semibold">Rp 4.000.000</p>
                        </div>
                        <div class="absolute -right-3 -top-3">
                            <a href="">
                            <img src="img/Keranjang.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="bg-gray-100 w-[132px] relative rounded-2xl h-[154px]">
                        <img class="rounded-3xl object-center w-[132px] h-[154px]"
                            src="{{ asset('ven9.webp') }}" alt="Warehouse Wedding">
                        <div class="text-center flex-col flex justify-center">
                            <p class="text-[10px] font-light">Warehouse Wedding</p>
                            <p class="text-[10px] text-black font-semibold">Rp 2.000.000</p>
                        </div>
                        <div class="absolute -right-3 -top-3">
                            <a href="">
                            <img src="img/Keranjang.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="bg-gray-100 w-[132px] relative rounded-2xl h-[154px]">
                        <img class="rounded-3xl object-center w-[132px] h-[154px]"
                            src="{{ asset('ven10.webp') }}" alt="Restaurant Wedding">
                        <div class="text-center flex-col flex justify-center">
                            <p class="text-[10px] font-light">Restaurant Wedding</p>
                            <p class="text-[10px] text-black font-semibold">Rp 4.000.000</p>
                        </div>
                        <div class="absolute -right-3 -top-3">
                            <a href="">
                            <img src="img/Keranjang.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>

</body>

</html>
