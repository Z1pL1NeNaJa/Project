@include('layouts/adminedit/head')

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('layouts/adminedit/menu')

        <div class="flex flex-col flex-1 w-full">
            @include('layouts/adminedit/header')
            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">
                    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                        หน้า PRODUCT
                    </h2>
                    <form action="{{route('product.c')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Cards -->
                        <div class="container-fluid" id="container-wrapper">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- Form Basic -->
                                    <div class="card mb-4">
                                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-semibold text-gray-700 dark:text-gray-200">
                                                เพิ่มข้อมูลหน้า PRODUCT</h6>
                                        </div>
                                        <div class="">
                                            <form>
                                                <div class="form-group">
                                                    <label class="block text-sm">
                                                        <span class="text-gray-700 dark:text-gray-400">NAME</span>
                                                        <input name="name" type="name" id="name" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="กรอกข้อมูล" />
                                                    </label>
                                                    @error('name')
                                                    <span class="font-semibold text-3xl text-red-600 dark:text-red-400">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="block text-sm">
                                                        <span class="text-gray-700 dark:text-gray-400">DETAILS</span>
                                                        <input name="description" type="description" id="description" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="กรอกข้อมูล" />
                                                    </label>
                                                    @error('description')
                                                    <span class="font-semibold text-3xl text-red-600 dark:text-red-400">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="block text-sm">
                                                        <span class="text-gray-700 dark:text-gray-400">IMAGE</span>
                                                        <input name="image" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="file" id="file" />
                                                    </label>
                                                    @error('image')
                                                    <span class="font-semibold text-3xl text-red-600 dark:text-red-400">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="block text-sm">
                                                        <span class="text-gray-700 dark:text-gray-400">PRICE</span>
                                                        <input name="price" type="price" id="price" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="กรอกข้อมูล" />
                                                    </label>
                                                    @error('price')
                                                    <span class="font-semibold text-3xl text-red-600 dark:text-red-400">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group"> 
                                                    <span class="text-gray-700 dark:text-gray-400">
                                                        TYPE
                                                    </span>
                                                    <select name="category" class="form-control block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-multiselect focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" >
                                                        @foreach ($categories as $category)
                                                        <option value="{{$category->category_id}}" >{{$category->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>    
                                                <!--  <div class="form-group">
                                                    <label class="block text-sm">
                                                        <span class="text-gray-700 dark:text-gray-400">TYPE</span>
                                                        <input
                                                            name="category" type="category" id="category"
                                                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                                            placeholder="กรอกข้อมูล" />
                                                    </label>
                                                    @error('category')
                                                    <span class="dark:text-gray-200">{{$message}}</span>
                                                    @enderror
                                                </div>-->
                                        </div>
                                        <button @click="openModal" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red">
                                            SUBMIT
                                        </button>
                                        <!-- Modal backdrop. This what you want to place close to the closing body tag -->
                                        <div x-show="isModalOpen" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
                                            <!-- Modal -->
                                            <div x-show="isModalOpen" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-1/2" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0  transform translate-y-1/2" @click.away="closeModal" @keydown.escape="closeModal" class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl" role="dialog" id="modal">
                                                <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
                                                <header class="flex justify-end">
                                                    <button class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700" aria-label="close" @click="closeModal">
                                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
                                                            <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                                        </svg>
                                                    </button>
                                                </header>
                                                <!-- Modal body -->
                                                <div class="mt-4 mb-6">
                                                    <!-- Modal title -->
                                                    <p class="mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300">
                                                        SAVE
                                                    </p>
                                                    <!-- Modal description -->
                                                    <p class="text-sm text-gray-700 dark:text-gray-400">
                                                        SAVE SUCCESS
                                                    </p>
                                                </div>
                                                <footer class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800">
                                                    <button @click="closeModal" class="w-full px-5 py-3 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                                                        Cancel
                                                    </button>
                                                </footer>
                                            </div>
                                        </div>
                                        <a href="{{ asset('productfrom') }}" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">BACK</a>
                    </form>
                </div>
        </div>



    </div>


    </div>

    <!--Row-->


    </div>
    @include('layouts/adminedit/footer')

    </div>
    </div>
    </div>
    </div>
    </div>
    </main>
    </div>
    </div>
</body>

</html>