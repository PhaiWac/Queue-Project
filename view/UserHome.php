<body class="bg-white">

    <div
        class="lg:ml-10 lg:mr-10  mr-0 ml-0 content item-center transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4 ">
        
    </div>

    <div class="xl:container m-auto px-6 md:px-12 lg:px-6">
        <p class="font-bold text-gray-900 mt-6 text-2xl my-5 mx-5 ">ร้านอาหาร</p>

        <div class="flex flex-wrap my-5 mx-2">

            <?php foreach ($Lists as $value) : ?>

            <div class="w-full lg:w-1/5  p-2">
                <button data-modal-toggle="res<?=$value['Id']?>"
                    class="flex items-center flex-row w-full bg-white rounded-3xl shadow-xl overflow-hidden  p-3 hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0">
                    <div class="h-full w-full">
                        <div class="relative w-full">
                            <img src="https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/media/Nft3.3b3e6a4b3ada7618de6c.png"
                                class="mb-3  w-full rounded-xl 3xl:h-full 3xl:w-full" alt="">
                        </div>
                        <div class="mb-3 flex items-center justify-between px-1 md:items-start">
                            <div class="mb-2">
                                <p class="text-lg font-bold text-navy-700 "><?=$value['FristName']?></p>
                            </div>
                        </div>
                    </div>
                </button>
            </div>

            <div id="res<?=$value['Id']?>" aria-hidden="true"
                class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
                <div class="relative w-full max-w-md px-4 h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                        <div class="flex justify-end p-2">
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                data-modal-toggle="res<?=$value['Id']?>">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="form space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8">
                            <h3 class="text-xl font-medium text-gray-900 dark:text-white Shop-Name"
                                id="<?=$value['Email']?>"> <?=$value['FristName']?>
                            </h3>
                            <div>
                                <label for="email"
                                    class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">จำนวนคิว</label>
                                <div class="custom-number-input h-10 w-full">
                                    </label>
                                    <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">

                                        <input type="number"
                                            class="input-field outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none"
                                            name="custom-input-number"></input>

                                    </div>

                                </div>
                                <button
                                    class="mt-3 w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center 
                                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 btn-submit">comfrim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php endforeach ?>

        </div>

        <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>

        <!-- component -->

        <style>
            input[type='number'],
            input[type='number'] {
                -webkit-appearance: none;
                margin: 0;
            }

            .custom-number-input input:focus {
                outline: none;
            }

            .custom-number-input button:focus {
                outline: none;
            }
        </style>

</body>

<script>
    $(document).ready(function() {
        $('.btn-submit').click(function() {
         

            var shopdata = $(this).closest('.form').find('h3.Shop-Name')
            var shopname = shopdata.text() ;
            var shopemail = shopdata.attr('id') ;

            var count = $(this).closest('.form').find('.input-field').val() ; 

            $.ajax({
                url : 'Shop.php?id=addqueue' ,
                method : "POST",
                data : {
                    shopname : shopname ,
                    shopemail : shopemail, 
                    count : count
                } ,
                success : function(res) {
                    console.log(res)
                    // if (res == 0) {
                    //     location.reload() ;
                    // }
                }
            })
            
        });
    });
</script>