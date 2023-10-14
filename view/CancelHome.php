
<div class="content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4 ">

    <nav class="flex px-5 py-3 text-gray-700  rounded-lg bg-gray-50 dark:bg-[#1E293B] " aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="historyres.php"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                        </path>
                    </svg>
                    ประวัติ
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fillRule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clipRule="evenodd"></path>
                    </svg>
                    <a href="voidqueue.php"
                        class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">รายการยกเลิกคิว</a>
                </div>
            </li>
        </ol>
    </nav>
    <div class="flex flex-wrap my-5 mx-2 ">
        <?php foreach ($List as $value) : ?> 
        <div class="w-full  lg:w-1/4 p-2">
            <div class='bg-red-200 rounded-3xl shadow-xl overflow-hidden hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0 '>
                <div class='max-w-md mx-auto'>
                    <div class='p-4 sm:p-6'>
                        <p class='font-bold text-red text-[22px] leading-7 mb-1'><?=$value['Queue']?></p>
                        <div class='flex flex-row'>
                            <p class='text-[17px] font-bold text-[#0FB478]'><?=$value['Count']?> ท่าน</p>
                        </div>
                        <p class='font-bold text-gray-700 text-[22px] leading-7 mb-1 mt-6'>คุณ <?=$value['UserName']?></p>
                        <p class='font-bold text-gray-700 text-[22px] leading-7 mb-1'>เบอร์โทร <?=$value['UserPhone']?> </p>
                        <p class='text-[17px] font-bold text-gray-700'>สาเหตุ : <?=$value['Reason']?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
</div>
