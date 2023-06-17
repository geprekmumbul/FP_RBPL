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
    <title>Pelunasan | WeddingLy</title>
</head>

<body>
    <div class="mx-[129px]">
        <div class="flex items-center flex-row gap-20">
            <img src="{{ asset('WeddingLy.png') }}" onclick="location.href = '/katalog'" alt="">
            <img class="h-[277px] w-[1315px]" src="{{ asset('header.png') }}" alt="">
            <!-- section ini aneh tp gapapa sesuai figma aja ya wkwk 🙏 -->
        </div>
        <div class="flex flex-col mt-6">
            <p class="font-light text-xs">Welcome Back!</p>
            <h1 class="font-semibold">Mr. Anang Ridwan Syah</h1>
        </div>
        <div class="text-lg mt-8 font-semibold">
            <h1>Pesanan Saya</h1>
        </div>
        <div class="flex mt-4 flex-row gap-11">
            <a class="hover:font-semibold hover:underline hover:underline-offset-2 hover:cursor-pointer" href="/keranjang">
                Keranjang
            </a>
            <a class="hover:font-semibold hover:underline hover:underline-offset-2 cursor-pointer" href="/downpayment">
                Down Payment
            </a>
            <a class="font-semibold underline underline-offset-2 cursor-not-allowed" href="#">
                Pelunasan
            </a>
        </div>
        <div class="w-full rounded-xl ring-1 mt-6 ring-black">
            <div class="m-4">
                <div class="flex flex-col">
                    <h1 class="font-semibold text-xl">Catering - Vegan Choice</h1>
                    <!-- Start Foreach -->
                    <div class="flex flex-row w-full justify-between">
                        <div class="flex flex-row mt-3 w-max gap-4">
                            <img class="w-[110px] h-[132px]"
                                src="https://i.pinimg.com/474x/53/24/75/5324759d78506730482ac1a505bbc5d2.jpg" alt="">
                            <div class="flex flex-col">
                                <p class="text-lg">Vegan Choice Package</p>
                                <p class="text-sm">Buffet Menu / 30 Pax</p>
                            </div>
                        </div>
                        <div id="Harga" class="flex flex-row justify-end self-end">
                            <div class="flex flex-col">
                                <p class="self-end" id="Quant">x 1</p>
                                <p>IDR 8.000.000</p>
                            </div>
                        </div>
                    </div>
                    <!-- end foreach -->
                </div>
                <div class="flex flex-col mt-5">
                    <div class="flex flex-row justify-end">
                        <h1 class="w-[158px] font-semibold">Total Pesanan</h1>
                        <p>IDR 8.000.000</p>
                    </div>
                    <div class="self-end my-8">
                    <a class="w-[193px] flex items-center justify-center font-medium h-[40px] cursor-not-allowed bg-gray-400 rounded-lg"  href="?">
                        DELIVERED
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
