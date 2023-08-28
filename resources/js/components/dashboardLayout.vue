<script setup>
</script>
<template>
  <!-- component -->
  <div class="">
    <nav class="flex flex-col bg-zinc-950 text-white w-64 h-full px-4    ">
      <div class="flex flex-wrap mt-8">
        <div class="w-1/2">
          <img src="../../../public/pharmacy.png.jpg" class="mx-auto w-20 h-20 rounded-full" />
        </div>

      </div>
      <div class="mt-10 mb-4">
        <ul class="ml-4">
         
          <li
            class="m-5  text-white font-bold text-2xl flex flex-row  border-gray-300 hover:text-black   hover:bg-gray-300  hover:font-bold  rounded-lg">
            <span>
              <svg class="fill-current h-5 w-5 " viewBox="0 0 24 24">
                <path d="M16 20h4v-4h-4m0-2h4v-4h-4m-6-2h4V4h-4m6
                        4h4V4h-4m-6 10h4v-4h-4m-6 4h4v-4H4m0 10h4v-4H4m6
                        4h4v-4h-4M4 8h4V4H4v4z"></path>
              </svg>
            </span>
            <Link href="/">
            <span class="ml-2">Liste des pharmacies</span>
            </Link>
          </li>
          <li
            class="m-5  text-white font-bold text-2xl flex flex-row  border-gray-300 hover:text-black   hover:bg-gray-300  hover:font-bold  rounded-lg">
            <span>
              <svg class="fill-current h-5 w-5 " viewBox="0 0 24 24">
                <path d="M12 13H7v5h5v2H5V10h2v1h5v2M8
                        4v2H4V4h4m2-2H2v6h8V2m10 9v2h-4v-2h4m2-2h-8v6h8V9m-2
                        9v2h-4v-2h4m2-2h-8v6h8v-6z"></path>
              </svg>
            </span>
            <Link href="/produits/user">
            <span class="ml-2">Liste des Produits</span>
            </Link>
          </li>
          
         
          

        </ul>
      </div>
    </nav>
  </div>
</template>