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
    <link rel="stylesheet" type="text/css" href="{{ asset('app.js') }}">
    <link href="https://fonts.cdnfonts.com/css/playfair-display" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <title>Confirmation</title>
</head>

<body class="bg-[#F4E7E6]">
<div class="flex justify-center h-full items-center">
    <div class="w-[626px]  h-[587px] bg-white rounded-2xl">

        <div class="flex justify-end">
            <a class="mr-8 mt-4" href="/keranjang">
                <i class="fa-solid fa-x font-semibold"></i>
            </a>
        </div>
        <div class="px-[86px]">
            <div class="flex justify-center flex-col items-center mt-12">
                <img src="{{ asset('successmark.png') }}" alt="">
                <p class="text-3xl text-center mt-12  text-[#201A17] font-medium">
                    @php
                        $status = App\Models\Customer::where('IdCust', session('IdCust'))->first()->Status;
                    @endphp
                    @if($status == 'DP')
                        Pembayaran down payment berhasil.
                        Jangan lupa untuk membayar pelunasan maksimal 7 hari sebelum acara.
                    @elseif($status == 'LUNAS')
                        Pembayaran pelunasan berhasil.
                        Terima kasih telah menggunakan WeddingLy!
                    @endif
            </div>
        </div>
    </div>
</div>
</body>

</html>
