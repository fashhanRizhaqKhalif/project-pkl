<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='img/favicon.ico' rel='shortcut icon'>
</head>

<body class="bg-gray-100">
    <x-header title="Welcome to PLN" />

    <div class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0">
        <div class="absolute inset-0 -z-10 overflow-hidden">
          <svg class="absolute top-0 left-[max(50%,25rem)] h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]" aria-hidden="true">
            <defs>
              <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
                <path d="M100 200V.5M.5 .5H200" fill="none" />
              </pattern>
            </defs>
            <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
              <path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z" stroke-width="0" />
            </svg>
            <rect width="100%" height="100%" stroke-width="0" fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
          </svg>
        </div>
        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
          <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
            <div class="lg:pr-4">
              <div class="lg:max-w-lg">
                <p class="text-base/7 font-semibold text-indigo-600">Visi dan Misi PLN</p>
                <h1 class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl">Mewujudkan Listrik untuk Kehidupan yang Lebih Baik</h1>
                <p class="mt-6 text-xl/8 text-gray-700">Menjadi perusahaan global dengan menyediakan solusi energi yang tidak hanya memenuhi kebutuhan pelanggan, tetapi juga mendorong pertumbuhan ekonomi dan kesejahteraan masyarakat.</p>
              </div>
            </div>
          </div>
          <div class="-mt-12 -ml-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
            <img class="w-[48rem] max-w-none rounded-xl bg-gray-900 ring-1 shadow-xl ring-gray-400/10 sm:w-[57rem] sticky top-[100px]" src="img/fotojalan.jpeg" alt="">
          </div>
          <div class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
            <div class="lg:pr-4">
              <div class="max-w-xl text-base/7 text-gray-700 lg:max-w-lg">
                <p>Penyediaan tenaga listrik yang memadai untuk mendukung pertumbuhan ekonomi masyarakat menjadi komitmen utama PLN. Dengan misi meningkatkan kualitas hidup, PLN juga berupaya untuk terus berinovasi dan menjaga lingkungan hidup melalui kebijakan berkelanjutan.</p>
                <ul role="list" class="mt-8 space-y-8 text-gray-600">
                  <li class="flex gap-x-3">
                    <svg class="mt-1 size-5 flex-none text-blue-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                      </svg>
                    <span><strong class="font-semibold text-gray-900">Menjaga Kepercayaan</strong> PLN selalu menjaga amanah dan kepercayaan yang diberikan oleh masyarakat dan pemerintah dalam penyediaan tenaga listrik.</span>
                  </li>
                  <li class="flex gap-x-3">
                    <svg class="mt-1 size-5 flex-none text-blue-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                      </svg>
                    <span><strong class="font-semibold text-gray-900">Keberlanjutan dan Inovasi</strong> PLN berkomitmen untuk terus berinovasi dalam menjaga keberlanjutan pasokan listrik dan beradaptasi dengan perubahan teknologi dan lingkungan.</span>
                  </li>
                  <li class="flex gap-x-3">
                    <svg class="mt-1 size-5 flex-none text-blue-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                      </svg>
                    <span><strong class="font-semibold text-gray-900">Listrik untuk Kesejahteraan</strong> Listrik menjadi pendorong utama dalam meningkatkan kualitas hidup masyarakat dan mendukung perkembangan ekonomi.</span>
                  </li>
                </ul>
                <p class="mt-8">PLN berkomitmen untuk menyediakan energi listrik yang andal dan terjangkau, dengan tetap memegang teguh nilai-nilai keberlanjutan dan pengembangan teknologi dalam pelayanan publik.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <x-footer></x-footer>
</body>

</html>
