<?php $value = $_SESSION['row'] ; ?>

<div
    class="lg:ml-10 lg:mr-10  mr-0 ml-0 content item-center transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4 ">
    <div class="container mx-auto my-20">

        <div class="bg-white relative shadow rounded-lg w-5/6 md:w-5/6  lg:w-4/6 xl:w-3/6 mx-auto">
            <div class="flex justify-center">
                <img src="<?=$value['Img']?>"
                    alt=""
                    id = "myimg" 
                    class="rounded-full mx-auto absolute -top-20 w-32 h-32 shadow-md border-4 border-white transition duration-200 transform hover:scale-110">
                <div class="mt-16">
                    <h1 id = 'name-text' class="font-bold text-center text-3xl text-gray-900"><?= $value['FristName']." ".$value['LastName'] ?></h1>

                    <div class="w-full">
                        <h3 class="font-medium text-gray-900 text-left px-6">ข้อมูลของคุณ</h3>
                        <div class="px-6 mt-5 w-full flex flex-col items-center overflow-hidden ">
                            <div class="text-gray-700">

                                <div class="grid grid-cols-4">
                                    <div class="px-4 py-2 ">number</div>
                                    <div class="px-4 py-2" id = 'phone-text'><?= $value['Phone']?></div>
                                </div>

                                <div class="grid grid-cols-4">
                                    <div class="px-4 py-2 ">Email</div>
                                    <div class="px-4 py-2" id = 'email-text'><?= $value['Email']?></div>
                                    <div class="px-4 py-2">
                                        <a class="text-blue-800" href="mailto:jane@example.com"></a>
                                    </div>
                                </div>
                            </div>
                            <button data-modal-toggle="edit" class="block w-full text-blue-800 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100
                         hover:shadow-xs p-3 my-4 ">edit profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="edit" aria-hidden="true"
    class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
    <div class="relative w-full max-w-md px-4 h-full md:h-auto">
        <!-- Modal content -->
        <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
            <div class="flex justify-end p-2">
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-toggle="edit">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

            <div class="">

                <form enctype="multipart/form-data" action="" id = 'form' 
                    class="space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" method="POST">
                    <div class="mb-5">
                        <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                            Name
                        </label>
                        <input type="text" name="username" id="username"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" />
                    </div>
                    <div class="mb-5">
                        <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                            Number
                        </label>
                        <input type="number" name="number" id="phone"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" />
                    </div>
                    <div class="mb-5">
                        <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                            email
                        </label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" />
                    </div>
                    <div class="mb-6 pt-4">
                        <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                            Upload File
                        </label>

                        <div class="mb-8">
                            <!-- component -->
                            <div class="flex = w-full items-center justify-center ">
                                <div class="rounded-md border border-gray-100 bg-white p-4 shadow-md">
                                    <label for="upload" class="flex flex-col items-center gap-2 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-10 w-10 fill-white stroke-indigo-500" viewBox="0 0 24 24"
                                            stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                        <span class="text-gray-600 font-medium">Upload file</span>
                                    </label>
                                    <input id="upload" type="file" name='img' class="hidden" />
                                </div>
                            </div>
                        </div>

                    </div>

                    <div>
                        <button
                            class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                            Send File
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>

<script>
    $('#form').submit(function(e){
        e.preventDefault() ;

        var fdata = new FormData() ;

        var img = $('#upload')[0].files[0] ;
        var username = $('#username').val() ;
        var phone = $('#phone').val() ;
        var email = $('#email').val() ;

        fdata.append('FristName',username) ;
        fdata.append('Phone',phone) ;
        fdata.append('Email',email) ;
        fdata.append('Img',img) ;
        fdata.append('Id',<?=$_SESSION['row']['Id']?>)

        $.ajax({
            url : "Profile.php?id=edit" ,
            type : 'post',
            contentType: false,
            processData: false,
            data : fdata ,
            success: function(res) {
                // console.log(res)
                res = $.parseJSON(res) ;
                 $('#myimg').attr('src',res.Img) ;
                 $('#name-text').html(res.FristName) ;
                 $('#phone-text').html(res.Phone) ;
                 $('#email-text').html(res.Email) ;
            }
        })

    })
</script>