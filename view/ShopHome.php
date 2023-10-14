<div class="content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4 ">
    <nav class="flex px-5 py-3 text-gray-700  rounded-lg bg-gray-50 dark:bg-[#1E293B] " aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="#"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                        </path>
                    </svg>
                    รายการคิว
                </a>
            </li>
        </ol>
    </nav>
    <div class="flex flex-wrap my-5 mx-2 ">
        <?php foreach ($List as $value) : ?>
        <div class="w-full  lg:w-1/4 p-2">
            <div
                class='bg-white rounded-3xl shadow-xl overflow-hidden hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0 '>
                <div class='max-w-md mx-auto'>
                    <div class='modal p-4 sm:p-6'>
                        <p class='font-bold text-red text-[22px] leading-7 mb-1'><?=$value['Queue']?></p>
                        <div class='flex flex-row'>
                            <p class='text-[17px] font-bold text-[#0FB478]'><?=$value['Count']?> ท่าน</p>
                        </div>
                        <p class='font-bold text-gray-700 text-[22px] leading-7 mb-1 mt-6'>คุณ <?=$value['UserName']?>
                        </p>
                        <p class='font-bold text-gray-700 text-[22px] leading-7 mb-1'>เบอร์โทร <?=$value['UserPhone']?>
                        </p>

                        <!-- จะให้ปริ้นใบเสร็จออกมาและชำระเงินก่อนออกจากร้าน-->
                        <div class="id hidden"><?=$value['Id']?></div>
                        <div class="user hidden"><?=$value['UserEmail']?></div>
                        <div class="shop hidden"><?=$value['ShopEmail']?></div>
                        <button
                            class='done mt-10 w-full px-4 py-3 font-medium tracking-wide text-black text-center capitalize transition-colors duration-300 transform bg-[#EFF2F8]
                                rounded-[14px] hover:bg-[#666FC1] hover:text-white  focus:outline-none focus:ring focus:ring-teal-300 focus:ring-opacity-80'>
                            ยืนยัน
                        </button>
                        <a data-modal-toggle=<?=$value['Id']?>
                            class='mt-2 block w-full px-4 py-3 font-medium tracking-wide text-black text-center capitalize transition-colors duration-300 transform bg-[#EFF2F8] 
                            rounded-[14px] hover:bg-[#666FC1] hover:text-white  focus:outline-none focus:ring focus:ring-teal-300 focus:ring-opacity-80'>
                            ยกเลิก
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <?php endforeach ?>
    </div>

</div>
<?php foreach ($List as $value): ?>
    <div id=<?=$value['Id']?> aria-hidden="true"
        class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative w-full max-w-md px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                <div class="flex justify-end p-2">
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                        data-modal-toggle=<?=$value['Id']?>>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="modal space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" >
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">ลูกค้ายกเลิก?</h3>
                    <div>
                        <label class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">สาเหตุยกเลิก</label>
                        <!-- voidqueue go history -> รายการยกเลิก -->
                        <input type="post" name="voidqueue"
                            class="reason bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500
                                focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required="">
                    </div>
                    <div class="id hidden"><?=$value['Id']?></div>
                    <div class="user hidden"><?=$value['UserEmail']?></div>
                    <div class="shop hidden"><?=$value['ShopEmail']?></div>
                    <button type="submit"
                        class="cancel class='mt-2 block w-full px-4 py-3 font-medium tracking-wide text-black text-center capitalize transition-colors duration-300 transform bg-[#EFF2F8] 
                                rounded-[14px] hover:bg-[#666FC1] hover:text-white  focus:outline-none focus:ring focus:ring-teal-300 focus:ring-opacity-80">ยืนยันการยกเลิก</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>
<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>

<script>
    $(document).ready(function() {
        $('.cancel').click(function() {
            var id = $(this).closest('.modal').find('.id').text() ;
            var usermail = $(this).closest('.modal').find('.user').text() ;
            var shopemail = $(this).closest('.modal').find('.shop').text() ;
            var reason = $(this).closest('.modal').find('.reason').val()  ;

            $.ajax({
                url : 'Book.php?id=cancel' ,
                type : "POST" ,
                data : {
                    id : id ,
                    shopemail : shopemail ,
                    reason : reason ,
                    formshop : true 
                },
                success : function(res) {
                    location.reload() ;
                }
            })
        })
        $('.done').click(function() {
            var id = $(this).closest('.modal').find('.id').text() ;
            var usermail = $(this).closest('.modal').find('.user').text() ;
            var shopemail = $(this).closest('.modal').find('.shop').text() ;

            $.ajax({
                url : 'Book.php?id=done' ,
                type : "POST" ,
                data : {
                    id : id ,
                    shopemail : shopemail ,
                    formshop : true 
                },
                success : function(res) {
                    location.reload() ;
                }
            })
        })
    })
</script>