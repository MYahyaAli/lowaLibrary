@extends('layout.dashboard')

@section('dash-content')
    <section>
        <nav>
            <div class="container mx-auto flex justify-evenly p-4">
                <ul class="flex justify-between ">
                    <li class="px-5 mx-5">
                        <a href="" class="text-white hover:text-pink-500 transition">Catergory</a>
                    </li>
                    <li class="px-5 mx-5">
                        <a href="" class="text-white hover:text-pink-500 transition">Computer Science</a>
                    </li>
                    <li class="px-5 mx-5">
                        <a href="" class="text-white hover:text-pink-500 transition">Software Engineering</a>
                    </li>
                    <li class="px-5 mx-5">
                        <a href="" class="text-white hover:text-pink-500 transition">Network engineering</a>
                    </li>
                    <li class="px-5 mx-5">
                        <a href="" class="text-white hover:text-pink-500 transition">Cyber Security</a>
                    </li>
                    <li class="px-5 mx-5">
                        <a href="" class="text-white hover:text-pink-500 transition">Cloud Computing</a>
                    </li>
                    <li class="px-5 mx-5">
                        <a href="" class="text-white hover:text-pink-500 transition">Web Developing</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    <section class="py-5">
        <div class="container h-100 mt-40 mb-40">
            <div class="row justify-center">
                <div class="col-md-4">
                    @if (session('status'))
                        <h6 class="bg-stone-300 border-solid border-2 border-stone-500 text-emerald-500">{{session('status')}}</h6>                        
                    @endif
                    <div class="card">
                        <h3 class="text-2xl font-black italic text-center">Add or Delete Book</h3>
                        <div class="card-body flex justify-center py-10">
                            <form method="POST" action="">
                                @csrf
                                <!--//bookname-->
                                <div class="form-group mb-5">
                                    <input type="text" placeholder="Book Title" id="bookname" class="form-control w-80" name="bookname" required
                                        autofocus>
                                    @if ($errors->has('bookname'))
                                    <span class="text-danger">{{ $errors->first('bookname') }}</span>
                                    @endif
                                </div>
                                <!--authorname-->
                                <div class="form-group mb-5">
                                    <input type="text" placeholder="Author Name" id="authorname" class="form-control w-80" name="authorname" required
                                        autofocus>
                                    @if ($errors->has('authorname'))
                                    <span class="text-danger">{{ $errors->first('authorname') }}</span>
                                    @endif
                                </div>
                                <!--//description-->
                                <div class="form-group mb-5">
                                    <input type="text" placeholder="Description" id="descrip" class="form-control w-80" name="descrip"
                                        autofocus>
                                </div>
                                <!--//image-->
                                <div class="form-group mb-5 ">
                                    <h4 class="text-xl font-black py-2">Product Image</h4>
                                    <input type="file" id="img" class="form-control" name="img" required>
                                </div>
                                <div class="d-grid mx-auto flex justify-center text-white flex justify-between">
                                    <button type="submit" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-pink-700 transition font-black">Add Book</button>
                                    <button type="submit" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-pink-700 transition font-black">Delete Book</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection