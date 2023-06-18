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
    <title>Keranjang | WeddingLy</title>
</head>

<body>
<div class="mx-[129px]">
    <div class="flex items-center flex-row gap-20">
        <a href='/katalog'>
            <img src="{{ asset('WeddingLy.png') }}" alt="WeddingLy" class="h-[120px] w-[100px]">
        </a>
    </div>
    <div class="text-lg mt-8 font-semibold">
        <h1>Pesanan Saya</h1>
    </div>
    <div class="flex mt-4 flex-row gap-11">
        @php
            $cust = App\Models\Customer::where('IdCust', session('IdCust'))->first();
            $status = $cust->Status;
            $pages = array('AWAL' => 'Keranjang', 'DP' => 'Down Payment', 'LUNAS' => 'Pelunasan');
            $curr = $pages[$status];

            $paket = $cust->paket;
            $total = $cust->paket()->sum('Harga');
        @endphp
        @foreach($pages as $page)
            @if($page == $curr) <a class="font-semibold underline underline-offset-2">{{ $page }}</a>
            @else <a class="underline-offset-2">{{ $page }}</a>
            @endif
        @endforeach
    </div>
    <div class="w-full rounded-xl ring-1 mt-6 ring-black">
        <div class="m-4">
            <div class="flex flex-col">
                @foreach($paket as $p)
                <div class="flex flex-row w-full justify-between">
                    <div class="flex flex-row mt-3 w-max gap-4">
                        <img class="w-[110px] h-[110px]"
                             src="{{ '/paket/' . $p->Layanan . $loop->iteration}}.jpg" alt="">
                        <div class="flex flex-col">
                            <p class="text-lg"> {{$p->NamaPaket}}</p>
                            @if($p->Layanan == 'Catering')
                                <p class="text-sm"> {{ $p->Layanan }}
                                    / 50 pax
                                </p>
                            @endif
                        </div>
                    </div>
                    <div id="Harga" class="flex flex-row justify-end self-end">
                        <div class="flex flex-col">
                            <p class="self-end" id="Quant">x 1</p>
                            <p> @currency($p->Harga) </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="flex flex-col mt-5">
                <div class="flex flex-row justify-end">
                    <h1 class="w-[158px] font-semibold">Total Pesanan</h1>
                    <p> @currency($total) </p>
                </div>
                <div class="flex flex-row justify-end">
                    <h1 class="w-[158px] font-semibold">
                        @if($status == 'AWAL') DP 50%
                        @elseif($status == 'DP') Pelunasan 50%
                        @endif
                    </h1>
                    @if($status != 'LUNAS')
                        <p> @currency($total / 2)</p>
                    @endif
                </div>
                <div class="self-end my-8">
                    <a class="w-[193px] flex items-center justify-center font-medium h-[40px] bg-[#CEAAAA] rounded-lg" href="/bayar">
                        @php
                            $status = App\Models\Customer::where('IdCust', session('IdCust'))->first()->Status;
                            $texts = array('AWAL' => 'Bayar DP Sekarang', 'DP' => 'Bayar Pelunasan', 'LUNAS' => 'Delivered');
                            $curr = $texts[$status];
                        @endphp
                        {{ $curr }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
