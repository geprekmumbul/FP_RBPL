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
                        'rounded-full', 'w-[270px]', 'h-12',
                        'hover:bg-gray-300' => !$selected, 'hover:animate-shake' => $selected,
                        'cursor-pointer' => !$selected, 'cursor-not-allowed' => $selected,
                        'flex', 'items-center', 'justify-center', 'mx-auto'
                    ])> {{ ucfirst($l) }}
                </a>
            @endforeach
        </div>
    </div>

    <!-- Utama -->
    <div class="flex-1 mx-[150px] my-12 bg-white">
        <div class="flex flex-col">
            <div class="flex flex-row items-center justify-between">
                <div class="text-[35px] font-bold">
                    <h1>Dapatkan paket termurah !</h1>
                </div>
                <div class="flex flex-row gap-4">
                    @php
                        $opsi = array('keranjang', 'logout', 'settings');
                    @endphp
                    @foreach($opsi as $o)
                        <a class="hover:font-semibold hover:underline" href="/{{$o}}">
                            {{ ucfirst($o) }}
                        </a>
                    @endforeach
                    <p></p>

                    <div class="flex text-[12px] text-center flex-col">
                        <p class="text-[10px] text-gray-500 text-left">Welcome Back!</p>
                        @php
                            $cust = App\Models\Customer::where('IdCust', session('IdCust'))->first();
                            $NamaSuami = $cust->NamaSuami;
                            $NamaIstri = $cust->NamaIstri;
                            $tanggal = $cust->Tanggal;
                        @endphp
                        <p class="font-semibold"> {{ $NamaSuami }} </p>
                        <p>&</p>
                        <p class="font-semibold"> {{ $NamaIstri }} </p>
                    </div>

                </div>
            </div>
            <h1 class="font-bold text-lg ">Pesan Sekarang</h1>
            <div class="flex flex-row gap-2 mt-4">
                <p class="font-light">Package Available on</p>
                <div class="w-[168px] pl-3 flex items-center rounded-full bg-[#F6F6F6] h-6">
                    <p class="font-light text-[8px]">{{ $tanggal }}</p>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-5 mx-0 mt-16 gap-12">
            @php
                $paket = App\Models\Paket::where('Layanan', strtoupper($curr))->get();
            @endphp
            @foreach($paket as $p)
                <div class="col-span-1">
                    <div class="bg-gray-100 w-[132px] relative rounded-2xl h-[154px]">
                        <img class="rounded-3xl object-center w-[132px] h-[154px]"
                             src="{{ asset('/paket/' . $curr . $loop->iteration . '.jpg') }}" alt="{{ $p->NamaPaket }}">
                        <div class="text-center flex-col flex justify-center">
                            <p class="text-[10px] font-light"> {{ $p->NamaPaket }}</p>
                            <p class="text-[10px] text-black font-semibold"> @currency($p->Harga) </p>
                        </div>
                        <div class="absolute -right-3 -top-3 w-[40px] h-[40px] ">
                            <form method="post" action="/addtocart">
                                @csrf
                                <button id={{$p->IdPaket}} name='id' value={{$p->IdPaket}} type="submit">
                                    <img src="{{ asset('addtocart.png') }}" alt="">
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

</body>

</html>
