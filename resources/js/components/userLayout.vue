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
            class="m-0  text-white text-3xl font-black flex flex-row  border-gray-300 hover:text-black   hover:bg-gray-300  hover:font-bold  rounded-lg">
            <span>
              <svg class="fill-current h-5 w-5 " viewBox="0 0 24 24">
                <path d="M16 20h4v-4h-4m0-2h4v-4h-4m-6-2h4V4h-4m6
                        4h4V4h-4m-6 10h4v-4h-4m-6 4h4v-4H4m0 10h4v-4H4m6
                        4h4v-4h-4M4 8h4V4H4v4z"></path>
              </svg>
            </span>
            
            <Link href="/dashboard">
            <span class="ml-2">Dashboard</span>
            </Link>
          </li>
          <li
            class="m-5  text-amber-200 text-2xl font-semibold flex flex-row  border-gray-300 hover:text-black   hover:bg-gray-300  hover:font-bold  rounded-lg">
            <span>
              <svg class="fill-current h-5 w-5 " viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7ZM14 7C14 8.10457 13.1046 9 12 9C10.8954 9 10 8.10457 10 7C10 5.89543 10.8954 5 12 5C13.1046 5 14 5.89543 14 7Z"
                  fill="currentColor" />
                <path
                  d="M16 15C16 14.4477 15.5523 14 15 14H9C8.44772 14 8 14.4477 8 15V21H6V15C6 13.3431 7.34315 12 9 12H15C16.6569 12 18 13.3431 18 15V21H16V15Z"
                  fill="currentColor" />
              </svg>
            </span>
            <Link href="/users">

            <span class="ml-2">Utilisateurs</span>
            </Link>
          </li>
          <ul>
            
          </ul>
          
          <li
            class="m-5  text-white font-bold text-2xl flex flex-row  border-gray-300 hover:text-black   hover:bg-gray-300  hover:font-bold  rounded-lg">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                  d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 4a1 1 0 000 2 1 1 0 011 1v1H7a1 1 0 000 2h1v3a3 3 0 106 0v-1a1 1 0 10-2 0v1a1 1 0 11-2 0v-3h3a1 1 0 100-2h-3V7a3 3 0 00-3-3z"
                  clip-rule="evenodd" />
              </svg>
            </span>
            <Link href="/pharmacies">
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
            <Link href="/produits">
            <span class="ml-2">Liste des Produits</span>
            </Link>
          </li>
          
          <li
            class="m-5  text-red-500 text-2xl font-black flex flex-row  border-gray-300 hover:text-black   hover:bg-gray-300  hover:font-bold  rounded-lg">
            <span>
              <svg class="fill-current h-5 w-5 " viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M7 3C8.86384 3 10.4299 4.27477 10.874 6H19V8H10.874C10.4299 9.72523 8.86384 11 7 11C4.79086 11 3 9.20914 3 7C3 4.79086 4.79086 3 7 3ZM7 9C8.10457 9 9 8.10457 9 7C9 5.89543 8.10457 5 7 5C5.89543 5 5 5.89543 5 7C5 8.10457 5.89543 9 7 9Z"
                  fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M17 20C15.1362 20 13.5701 18.7252 13.126 17H5V15H13.126C13.5701 13.2748 15.1362 12 17 12C19.2091 12 21 13.7909 21 16C21 18.2091 19.2091 20 17 20ZM17 18C18.1046 18 19 17.1046 19 16C19 14.8954 18.1046 14 17 14C15.8954 14 15 14.8954 15 16C15 17.1046 15.8954 18 17 18Z"
                  fill="currentColor" />
              </svg>
            </span>
            <Link href="/roles">

            <span class="ml-2">Roles</span>
            </Link>
          </li>
          <li
            class="m-5  text-red-500  text-2xl font-black  flex flex-row  border-gray-300 hover:text-black   hover:bg-gray-300  hover:font-bold  rounded-lg">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
              </svg>

            </span>
            <Link href="/permissions">

            <span class="ml-2">Permissions</span>
            </Link>
          </li>
          

        </ul>
      </div>
    </nav>
  </div>
</template>