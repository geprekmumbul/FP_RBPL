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
    <title>One Time Password</title>
</head>

<body class="bg-[#F4E7E6]">
    <div class="flex justify-center h-full items-center">
        <div class="w-[626px]  h-[587px] bg-white rounded-2xl">
            <!-- <div class="flex justify-end">
                <a class="mr-4 mt-4" href="">
                    <i class="fa-solid fa-x font-semibold"></i>
                </a>
            </div> kalo mau ada x nya bisa ini ga di command wkwk-->
            <div class="px-[86px] py-8">
                <div class="flex flex-col mt-4 items-center text-center ">
                    <h1 class="font-semibold mb-5 text-4xl">Kode OTP</h1>
                    <p>Masukkan kode OTP 4 digit yang</p>
                    <p>telah terkirim ke nomor Anda</p>
                </div>
                <form method="post">
                    @csrf
                    <div class="flex justify-center mt-12">
                        <input class="otp-input" type="text" name="digit1" maxlength="1" autofocus
                            oninput="moveToNext(this, 'digit2')">
                        <input class="otp-input" type="text" name="digit2" maxlength="1"
                            oninput="moveToNext(this, 'digit3')">
                        <input class="otp-input" type="text" name="digit3" maxlength="1"
                            oninput="moveToNext(this, 'digit4')">
                        <input class="otp-input" type="text" name="digit4" maxlength="1">
                    </div>
                    <a class="block text-center text-gray-500 underline-offset-4 hover:underline mt-4" href="#">Kirim ulang OTP</a>
                    <button type="submit"
                        class="w-[450px] mt-12 bg-[#3988FF] text-white h-14 rounded-lg hover:opacity-80">
                        LANJUTKAN
                    </button>
                </form>
            </div>
        </div>
    </div>
    <script>
        function moveToNext(currentInput, nextInputName) {
            if (currentInput.value.length === 1) {
                const nextInput = document.getElementsByName(nextInputName)[0];
                nextInput.focus();
            }
        }
    </script>
</body>

</html>
