<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @font-face {
            font-family: 'Kanit';
            src: url('../font/Kanit-Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        body {
            font-family: 'Kanit', sans-serif;
        }
    </style>
</head>

<body class="bg-[#EFF2F8]">

    <body class="body bg-white ">
        <div class="fixed w-full z-30 flex bg-[#EFF2F8]  p-2 items-center  h-16 px-10">
            <div
                class="logo ml-12 dark:text-white  transform ease-in-out duration-500 flex-none h-full flex items-center justify-center">
                MONGKOL
            </div>

            <!-- SPACER -->
            <div class="grow h-full flex items-center justify-center"></div>
            <div class="flex-none h-full text-center flex items-center justify-center">
                <div class="flex space-x-3 items-center ">
                    <div class="flex-none flex justify-center">
                    </div>
                    <div class="hidden md:block  md:text-md text-black "><?=$_SESSION['row']['FristName']?></div>
                </div>
            </div>
        </div>

        <aside
            class="w-60 -translate-x-48 fixed transition transform ease-in-out duration-1000 z-50 flex h-screen bg-[#6A75CA]">
            <!-- open sidebar button -->
            <div
                class="max-toolbar translate-x-24 scale-x-0 w-full -right-6 transition transform ease-in duration-300 flex items-center justify-between border-4 border-white dark:border-[#0F172A] bg-[#6A75CA]  absolute top-2 rounded-full h-12">
                <div
                    class="flex items-center space-x-3 group bg-[#6A75CA] dark:from-cyan-500 dark:to-blue-500 from-indigo-500 via-purple-500 to-purple-500  pl-10 pr-2 py-1 rounded-full text-white  ">
                    <div class="transform ease-in-out duration-300 mr-12">
                        MONGKOL
                    </div>
                </div>
            </div>
            <div onclick="openNav()"
                class="-right-6 transition transform ease-in-out duration-500 flex border-4 border-white bg-[#6A75CA] dark:hover:bg-blue-500 hover:bg-purple-500 absolute top-2 p-3 rounded-full text-white hover:rotate-45">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={3}
                    stroke="currentColor" class="w-4 h-4">
                    <path strokeLinecap="round" strokeLinejoin="round"
                        d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                </svg>
            </div>
            <!-- MAX SIDEBAR-->
            <div class="max hidden text-white mt-20 flex-col space-y-2 w-full h-[calc(100vh)]">
                <a href="mainres.php"
                    class="hover:ml-4 w-full text-white hover:text-black   bg-[#6A75CA] hover:bg-[#EFF2F8] p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                        stroke="currentColor" class="w-4 h-4">
                        <path strokeLinecap="round" strokeLinejoin="round"
                            d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                    <div>
                        รายการคิว
                    </div>
                </a>
                <a href="Shop.php?id=menu-history"
                    class="hover:ml-4 w-full text-white hover:text-black   bg-[#6A75CA] hover:bg-[#EFF2F8] p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                    </svg>
                    <div>
                        ประวัติรายการ
                    </div>
                </a>
                <li class="px-5 hidden md:block">
                    <div class="flex flex-row items-center mt-5 h-8">
                        <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Settings</div>
                    </div>
                </li>

                <a href="Profile.php?id=view"
                    class="hover:ml-4 w-full text-white hover:text-black   bg-[#6A75CA] hover:bg-[#EFF2F8] p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>

                    <div>
                        โปรไฟล์
                    </div>
                </a>

                <a href="Logout.php"
                    class="hover:ml-4 w-full text-white hover:text-black   bg-[#6A75CA] hover:bg-[#EFF2F8] p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                    </svg>
                    <div>
                        ออกจากระบบ
                    </div>
                </a>
            </div>
            <!-- MINI SIDEBAR-->
            <div class="mini mt-20 flex flex-col space-y-2 w-full h-[calc(100vh)]">
                <a href="mainres.php"
                    class="hover:ml-4 justify-end pr-5 text-white   w-full bg-[#6A75CA] p-3 rounded-full transform ease-in-out duration-300 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                        stroke="currentColor" class="w-4 h-4">
                        <path strokeLinecap="round" strokeLinejoin="round"
                            d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                </a>
                <a href="Shop.php?id=menu-history"
                    class="hover:ml-4 justify-end pr-5 text-white   w-full bg-[#6A75CA] p-3 rounded-full transform ease-in-out duration-300 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                    </svg>
                </a>

                <a href="profileres.php"
                    class="hover:ml-4 justify-end pr-5 text-white   w-full bg-[#6A75CA] p-3 rounded-full transform ease-in-out duration-300 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </a>
                <a href="../config/logout.php"
                    class="hover:ml-4 justify-end pr-5 text-white   w-full bg-[#6A75CA] p-3 rounded-full transform ease-in-out duration-300 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                    </svg>
                </a>
            </div>

        </aside>

        <script>
            const sidebar = document.querySelector("aside");
            const maxSidebar = document.querySelector(".max")
            const miniSidebar = document.querySelector(".mini")
            const roundout = document.querySelector(".roundout")
            const maxToolbar = document.querySelector(".max-toolbar")
            const logo = document.querySelector('.logo')
            const content = document.querySelector('.content')
            const moon = document.querySelector(".moon")
            const sun = document.querySelector(".sun")

            function setDark(val) {
                if (val === "dark") {
                    document.documentElement.classList.add('dark')
                    moon.classList.add("hidden")
                    sun.classList.remove("hidden")
                } else {
                    document.documentElement.classList.remove('dark')
                    sun.classList.add("hidden")
                    moon.classList.remove("hidden")
                }
            }

            function openNav() {
                if (sidebar.classList.contains('-translate-x-48')) {
                    // max sidebar 
                    sidebar.classList.remove("-translate-x-48")
                    sidebar.classList.add("translate-x-none")
                    maxSidebar.classList.remove("hidden")
                    maxSidebar.classList.add("flex")
                    miniSidebar.classList.remove("flex")
                    miniSidebar.classList.add("hidden")
                    maxToolbar.classList.add("translate-x-0")
                    maxToolbar.classList.remove("translate-x-24", "scale-x-0")
                    logo.classList.remove("ml-12")
                    content.classList.remove("ml-12")
                    content.classList.add("ml-12", "md:ml-60")
                } else {
                    // mini sidebar
                    sidebar.classList.add("-translate-x-48")
                    sidebar.classList.remove("translate-x-none")
                    maxSidebar.classList.add("hidden")
                    maxSidebar.classList.remove("flex")
                    miniSidebar.classList.add("flex")
                    miniSidebar.classList.remove("hidden")
                    maxToolbar.classList.add("translate-x-24", "scale-x-0")
                    maxToolbar.classList.remove("translate-x-0")
                    logo.classList.add('ml-12')
                    content.classList.remove("ml-12", "md:ml-60")
                    content.classList.add("ml-12")
                }
            }
        </script>
        </div>
    </body>

</html>