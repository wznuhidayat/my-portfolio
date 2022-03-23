<nav class="bg-white z-40 fixed inset-x-0 top-0 transition-all duration-500" id="navbar">
    <div class="container flex justify-between items-center mx-auto px-8 md:px-6 py-2 md:py-4">
      <div>
        <img src="{{ asset('img/mwh.png') }}" alt="" class="object-cover w-6">
      </div>
      
      <span class="text-3xl text-blackcursor-pointer mx-2 md:hidden block">
        <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
      </span>
      <ul class="md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
        <li class="mx-4 my-6 md:my-0">
          <a href="/main" class="text-md hover:text-yellow-400 duration-500 text-black">Home</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="/main/matches" class="text-md hover:text-yellow-400 duration-500 text-black">About Me</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="/main/standigs" class="text-md hover:text-yellow-400 duration-500 text-black">My Service</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="#" class="text-md hover:text-yellow-400 duration-500 text-black">My Projects</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="/main/clubs" class="text-md hover:text-yellow-400 duration-500 text-black">Contact</a>
        </li>
      </ul>
    </div>
  </nav>