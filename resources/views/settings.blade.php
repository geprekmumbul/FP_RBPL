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
    <title>Settings</title>
</head>

<body class="bg-[#F4E7E6]">
<div class="flex justify-center h-full items-center">
    <div class="w-[626px]  h-[1000px] bg-white rounded-2xl">

        <div class="flex justify-end">
            <a class="mr-4 mt-4" href="/katalog">
                <i class="fa-solid fa-x font-semibold"></i>
            </a>
        </div>
        <div class="px-[86px]">
            <div class="flex flex-col mt-4 items-center text-center ">
                <h1 class="font-semibold mb-5 text-4xl">Data</h1>
            </div>
            <form action="/settings" method="post">
                @csrf
                @php
                    $data = array('NamaSuami', 'NamaIstri', 'TanggalPernikahan', 'LokasiPernikahan');
                @endphp
                @foreach($data as $d)
                    <div class="flex flex-col mt-20">
                        {{$d}}
                        <div class="relative flex flex-row">
                            <label for={{ $d }}></label>
                            <input type="text" id={{ $d }} name={{ $d }}
                                   class="rounded-r-md rounded-l-md p-2 border-2
                               border-opacity-80 border-gray-400 w-[400px] h-14" />
                        </div>
                    </div>
                @endforeach

                <button type="submit" class="w-[450px] mt-28 bg-[#3988FF] text-white h-14 rounded-lg hover:opacity-80">
                    SIMPAN
                </button>
            </form>
        </div>
    </div>
</div>
</body>

</html>
