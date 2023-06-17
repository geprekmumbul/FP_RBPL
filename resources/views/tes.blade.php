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
    <title>Katalog</title>
</head>
<body>
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-[468px] bg-[#F4E7E6]">
            <!-- Logo -->
            <div class="flex items-center justify-center">
                <img src="{{ asset('WeddingLy.png') }}" alt="Logo" class="h-[277px] w-[230px]">
            </div>
        </div>
        <div class="flex flex-col items-center mt-8 justify-center gap-5">
            @php
                $curr = request()->route()->uri;
                $layanan = [
                    'venue',
                    'catering',
                    'decoration',
                    'photography',
                    'entertainment'
                ];
            @endphp
            @foreach($layanan as $l)
                <a  href="/{{ $l }}"
                    @php $selected = ($curr == $l) @endphp
                    @class([
                        'bg-white' => !$selected, 'bg-gray-300' => $selected,
                        'rounded-full', 'w-[270x]', 'h-12',
                        'hover:bg-gray-300' => !$selected, 'hover:animate-shake' => $selected,
                        'cursor-pointer' => !$selected, 'cursor-not-allowed' => $selected,
                        'flex', 'items-center', 'justify-center', 'mx-auto'
                    ])> {{ ucfirst($l) }}
                </a>
            @endforeach
        </div>
        @php
            $paket = App\Models\Paket::where('Layanan', strtoupper($curr))->get();
        @endphp
        @foreach($paket as $p)
            <div class="col-span-1">
                <div class="bg-gray-100 w-[132px] relative rounded-2xl h-[154px]">
                    <img class="rounded-3xl object-center w-[132px] h-[154px]"
                         src="{{ asset($curr . $loop->iteration . '.jpg') }}" alt="{{ $p->NamaPaket }}">
                    <div class="text-center flex-col flex justify-center">
                        <p class="text-[10px] font-light"> {{ $p->NamaPaket }}</p>
                        <p class="text-[10px] text-black font-semibold"> {{ $p->Harga }} </p>
                    </div>
                    <div class="absolute -right-3 -top-3">
                        <img src="{{ asset('bag.svg') }}" alt="">
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
