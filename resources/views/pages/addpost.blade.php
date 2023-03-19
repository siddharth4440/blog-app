<x-app>
    <div class="relative h-[75%] flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover relative items-center"
        style="background-image: url({{ asset('images/addPostBackground.png') }});">
        <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
        <div class="sm:max-w-lg w-full p-10 bg-white rounded-xl z-10">
            <div class="text-center">
                <h2 class="mt-5 text-3xl font-bold text-gray-900">
                    File Upload!
                </h2>
                <p class="mt-2 text-sm text-gray-400">Lorem ipsum is placeholder text.</p>
            </div>
            <form class="mt-8 space-y-3" action="#" method="POST">
                <div class="grid grid-cols-1 space-y-2">
                    <label class="text-sm font-bold text-gray-500 tracking-wide">Title</label>
                    <input
                        class="text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                        type="" placeholder="Enter title">
                </div>
                <div class="grid grid-cols-1 space-y-2">
                    <label class="text-sm font-bold text-gray-500 tracking-wide">Attach Document</label>
                    <div class="flex items-center justify-center w-full">
                        <label
                            class="flex flex-col rounded-lg border-4 border-dashed w-full h-60 p-10 group text-center"
                            for="selectImage">
                            <div
                                class="h-full w-full text-center flex flex-col items-center justify-center items-center  ">
                                <!---<svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-blue-400 group-hover:text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                    </svg>-->
                                <input type="file" class="hidden" id="selectImage">
                                <div class="flex flex-auto max-h-48 w-2/5 mx-auto -mt-10">
                                    <img class="has-mask h-36 object-center"
                                        src="https://img.freepik.com/free-vector/image-upload-concept-landing-page_52683-27130.jpg?size=338&ext=jpg"
                                        alt="freepik image">
                                </div>
                                <p class="pointer-none text-gray-500 "><span class="text-sm">
                                        Select Image
                                </p>
                            </div>

                        </label>
                    </div>
                </div>
                <p class="text-sm text-gray-300">
                    <span>File type: doc,pdf,types of images</span>
                </p>
                <div>
                    <button type="submit"
                        class="my-5 w-full flex justify-center bg-blue-500 text-gray-100 p-4  rounded-full tracking-wide
                                    font-semibold  focus:outline-none focus:shadow-outline hover:bg-blue-600 shadow-lg cursor-pointer transition ease-in duration-300">
                        Upload
                    </button>
                </div>
            </form>
        </div>
    </div>

    <style>
        .has-mask {
            position: absolute;
            clip: rect(10px, 150px, 130px, 10px);
        }
    </style>
</x-app>