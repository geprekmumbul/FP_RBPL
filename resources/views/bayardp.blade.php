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
    <title>Bayar DP</title>
</head>

<body class="bg-[#F4E7E6]">
    <div class="flex justify-center h-full items-center">
        <div class="w-[626px]  h-[587px] bg-white rounded-2xl">

            <div class="flex justify-between">
                <div class="flex mx-auto translate-x-4 text-center ">
                    <img class="w-[142px]" src="{{ asset('WeddingLy.png') }}" alt="WeddingLy">
                </div>
                <a class="mr-4 mt-4" href="/konfirmasidp">
                    <i class="fa-solid fa-x font-semibold"></i>
                </a>
            </div>
            <div class="px-[86px]">
                <p>Jumlah yang dibayarkan</p>
                <div class="flex flex-row justify-between">
                    <p class="font-semibold">DP 50%</p>
                    <p class="font-semibold">IDR 4.000.000</p>
                </div>
                <div class="flex justify-center mt-6">
                <img src="{{ asset('qris.png') }}" alt="QRIS">
                </div>
                <div class="flex justify-center font-medium mt-3 text-xl">
                <h1>Scan QRIS</h1>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
