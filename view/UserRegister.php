<body>
    <!-- component -->
    <div class="bg-no-repeat bg-cover bg-center relative" style="background-image: url();">
        <div class="absolute bg-[#A780DA] from-green-500 to-green-400 opacity-75 inset-0 z-0"></div>
        <div class="min-h-screen sm:flex sm:flex-row mx-0 justify-center">

            <div class="flex justify-center self-center  z-10">
                <div  class="p-12 bg-white mx-auto rounded-2xl w-100 ">
                    <div class="mb-4">
                        <h3 class="font-semibold text-2xl text-gray-800">สมัครสมาชิก</h3>
                        <p class="text-gray-500">คุณต้องสมัครสมาชิกก่อนเข้าใช้งานนนะ</p>
                    </div>
                    <div class="space-y-5">
                        <div class="space-y-2">
                            <label class="text-sm font-medium text-gray-700 tracking-wide">username</label>
                            <input
                                class=" w-full text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-[#7F61A7]"
                                type="text" id = 'username' name="username">
                        </div>
                        <div class="space-y-2">
                            <label class="mb-5 text-sm font-medium text-gray-700 tracking-wide">
                                Number
                            </label>
                            <input
                                class="w-full content-center text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-[#7F61A7]"
                                type="text" id = 'phone' name="number">
                        </div>
                        <div class="space-y-2">
                            <label class="mb-5 text-sm font-medium text-gray-700 tracking-wide">
                                Email
                            </label>
                            <input
                                class="w-full content-center text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-[#7F61A7]"
                                type="text" id = 'email'  name="email">
                        </div>
                        <div class="space-y-2">
                            <label class="mb-5 text-sm font-medium text-gray-700 tracking-wide">
                                Password
                            </label>
                            <input
                                class="w-full content-center text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-[#7F61A7]"
                                type="text"  id = 'password' name="password">
                        </div>
                        <div>
                            <button  id = 'submit' type="submit"
                                class="w-full flex justify-center text-black bg-[#F8EDEC]  hover:bg-[#EBB1C5]  hover:text-white text-gray-600 p-3  rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">
                                Singin
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script>
    $("#submit").click(function() {
        var data = {
            Email: $('#email').val() ,
            Pass : $('#password').val() ,
            FristName : $("#username").val() ,
            Phone: $("#phone").val() 
        };

        $.ajax({
            url : '?id=register' ,
            method : "POST" ,
            data : {
                role : "User" ,
                data : data 
            } ,
            success : function(res) {
                console.log(res)
                if (res) {
                    location.href = "LoginRegister.php?id=view-login" ;
                }else {
                    console.log('asd') ;
                }
            }
        })
    });
</script>

