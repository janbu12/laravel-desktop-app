<div class="min-w-3xs max-w-3xs h-svh bg-slate-800 flex flex-col">
    <div class="flex flex-col items-center justify-center w-full h-fit p-4 shadow-2xl">
        <h1>Laravel Dekstop App</h1>
    </div>
    <ul class="w-full flex flex-col gap-2 px-6 py-4">
        <li>
            <a href="{{route('home')}}" class="flex items-center gap-4 hover:cursor-pointer {{ Request::routeIs('home') ? 'bg-slate-700': 'bg-slate-800 hover:bg-slate-700'}} px-4 py-2 rounded-md transition-all duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-house-door-fill size-5" viewBox="0 0 16 16">
                  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
                </svg>
                Home
            </a>
        </li>
        <li>
            <a href="{{route('about')}}" class="flex items-center gap-4 hover:cursor-pointer {{ Request::routeIs('about') ? 'bg-slate-700': 'bg-slate-800 hover:bg-slate-700'}}  px-4 py-2 rounded-md transition-all duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-badge-fill size-5" viewBox="0 0 16 16">
                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6m5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1z"/>
                </svg>
                About
            </a>
        </li>
        <li>
            <a href="{{route('contact')}}" class="flex items-center gap-4 hover:cursor-pointer {{ Request::routeIs('contact') ? 'bg-slate-700': 'bg-slate-800 hover:bg-slate-700'}}  px-4 py-2 rounded-md transition-all duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-envelope-at-fill size-5" viewBox="0 0 16 16">
                    <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671"/>
                    <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791"/>
                </svg>
                Contact
            </a>
        </li>
    </ul>
</div>
