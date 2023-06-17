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
    <title>WeddingLy - Registrasi</title>
</head>

<body class="bg-[#F4E7E6]">
    <div class="flex justify-center h-full items-center">
        <div class="w-[626px]  h-[587px] bg-white rounded-2xl">

            <div class="flex justify-end">
                <a class="mr-4 mt-4" href="">
                    <i class="fa-solid fa-x font-semibold"></i>
                </a>
            </div>
            <div class="px-[86px]">
                <div class="flex flex-col mt-4 items-center text-center ">
                    <h1 class="font-semibold mb-5 text-4xl">Login/Register</h1>
                    <p>Selamat datang!</p>
                    <p>Silahkan masukkan nomor telepon Anda</p>
                </div>
                <form action="/login" method="post">
                    @csrf
                    <div class="flex flex-col mt-20">
                        <label class="font-light" for="tel">Nomor Telepon</label>
                        <div class="relative flex flex-row">
                            <select
                                class="rounded-l-md p-2 border-2 border-r-0 border-opacity-80 border-gray-400 h-14 bg-white text-gray-600 ">
                                <option>+62</option>
                            </select>
                            <input type="tel" id="telp" name="telepon"
                                class="rounded-r-md border-l-0 p-2 border-2 border-opacity-80 border-gray-400 w-[400px] h-14" />
                        </div>
                    </div>
                    <button type="submit" class="w-[450px] mt-28 bg-[#3988FF] text-white h-14 rounded-lg hover:opacity-80">
                        LANJUTKAN
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
