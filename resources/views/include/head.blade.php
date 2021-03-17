<!DOCTYPE html>
<html x-data="data()" lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Afifah X Iskandar</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/@tailwindcss/typography@0.2.x/dist/typography.min.css"/>

    <link rel="stylesheet" href="{{ asset('css/app.css')}}" />
    {{-- <link rel="stylesheet" href="{{ asset('css/vanilla.css')}}" /> --}}

    <script src="{{ mix('/js/app.js') }}"></script>
    {{-- <script src="{{ asset('js/vanilla.js')}}"></script> --}}
    {{-- <script src="{{!!mix('js/app.js') !!}}"></script> --}}


    


</head>
<body>
    
  <div class="border-t-8 border-blue-500 p-32">

    <div class="max-w-4xl mx-auto prose xl:prose-xl">
      @yield('content')
    </div> 

   </div>

<script>
    const scroll = new LocomotiveScroll({
      el: document.querySelector('[data-scroll-container]'),
      smooth: true
    });
</script>
</body>


</html>
