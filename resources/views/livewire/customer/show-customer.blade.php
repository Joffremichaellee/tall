<div class="vs jj ttm vl ou uf na">

    <!-- Page header -->
    <div class="je jd jc rc">

        <!-- Left: Title -->
        <div class="ri _y">
            <h1 class="gu teu text-slate-800 font-bold">Customers ✨</h1>
        </div>

        <!-- Right: Actions -->
        <div class="sn am jo az jp ft">

            <!-- Delete button -->
            <div class="table-items-action hidden">
                <div class="flex items-center">
                    <div class="hidden xl:block text-sm gm mr-2 lm"><span class="table-items-count"></span> items selected</div>
                    <button class="btn bg-white border-slate-200 hover--border-slate-300 yl xy">Delete</button>
                </div>
            </div>

            <!-- Dropdown -->
            <div class="y" x-data="{ open: false, selected: 2 }">
                <button class="btn fe un bg-white border-slate-200 hover--border-slate-300 text-slate-500 hover--text-slate-600" aria-label="Select date range" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open" aria-expanded="false">
                    <span class="flex items-center">
                        <svg class="oo sl du text-slate-500 ub mr-2" viewBox="0 0 16 16">
                            <path d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z"></path>
                        </svg>
                        <span x-text="$refs.options.children[selected].children[1].innerHTML">Last Month</span>
                    </span>
                    <svg class="ub nz du gq" width="11" height="7" viewBox="0 0 11 7">
                        <path d="M5.4 6.8L0 1.4 1.4 0l4 4 4-4 1.4 1.4z"></path>
                    </svg>
                </button>
                <div class="tk g z q ou bg-white border border-slate-200 va rounded bd la re" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="wt wa ws au" x-transition:enter-start="opacity-0 uq" x-transition:enter-end="ba uj" x-transition:leave="wt wa ws" x-transition:leave-start="ba" x-transition:leave-end="opacity-0" style="display: none;">
                    <div class="gp text-sm g_" x-ref="options">
                        <button tabindex="0" class="flex items-center ou xr vf vn al" :class="selected === 0 &amp;&amp; 'text-indigo-500'" @click="selected = 0;open = false" @focus="open = true" @focusout="open = false">
                            <svg class="ub mr-2 du text-indigo-500 invisible" :class="selected !== 0 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                            </svg>
                            <span>Today</span>
                        </button>
                        <button tabindex="0" class="flex items-center ou xr vf vn al" :class="selected === 1 &amp;&amp; 'text-indigo-500'" @click="selected = 1;open = false" @focus="open = true" @focusout="open = false">
                            <svg class="ub mr-2 du text-indigo-500 invisible" :class="selected !== 1 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                            </svg>
                            <span>Last 7 Days</span>
                        </button>
                        <button tabindex="0" class="flex items-center ou xr vf vn al text-indigo-500" :class="selected === 2 &amp;&amp; 'text-indigo-500'" @click="selected = 2;open = false" @focus="open = true" @focusout="open = false">
                            <svg class="ub mr-2 du text-indigo-500" :class="selected !== 2 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                            </svg>
                            <span>Last Month</span>
                        </button>
                        <button tabindex="0" class="flex items-center ou xr vf vn al" :class="selected === 3 &amp;&amp; 'text-indigo-500'" @click="selected = 3;open = false" @focus="open = true" @focusout="open = false">
                            <svg class="ub mr-2 du text-indigo-500 invisible" :class="selected !== 3 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                            </svg>
                            <span>Last 12 Months</span>
                        </button>
                        <button tabindex="0" class="flex items-center ou xr vf vn al" :class="selected === 4 &amp;&amp; 'text-indigo-500'" @click="selected = 4;open = false" @focus="open = true" @focusout="open = false">
                            <svg class="ub mr-2 du text-indigo-500 invisible" :class="selected !== 4 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                            </svg>
                            <span>All Time</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Filter button -->
            <div class="y inline-flex">
                <button class="btn bg-white border-slate-200 hover--border-slate-300 text-slate-500 hover--text-slate-600">
                    <span class="d">Filter</span><wbr>
                    <svg class="oo sl du" viewBox="0 0 16 16">
                        <path d="M9 15H7a1 1 0 010-2h2a1 1 0 010 2zM11 11H5a1 1 0 010-2h6a1 1 0 010 2zM13 7H3a1 1 0 010-2h10a1 1 0 010 2zM15 3H1a1 1 0 010-2h14a1 1 0 010 2z"></path>
                    </svg>
                </button>
            </div>

            <!-- Add customer button -->
            <a class="btn ho xi ye" href={{route('customer.create')}}>
                <svg class="oo sl du bf ub" viewBox="0 0 16 16">
                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                </svg>
                <span class="hidden xs:block nq" >Add Customer</span>
            </a>                            
            
        </div>

    </div>

    <!-- Table -->
    <div class="bg-white bd rounded-sm border border-slate-200">
        <header class="vc vu">
            <h2 class="gh text-slate-800">All Customers <span class="gq gp">248</span></h2>
        </header>
        <div x-data="handleSelect">

            <!-- Table -->
            <div class="lf">
                <table class="ux ou">
                    <!-- Table header -->
                    <thead class="go gh gv text-slate-500 hp co cs border-slate-200">
                        <tr>
                            <th class="vi wy w_ vo lm of">
                                <div class="flex items-center">
                                    <label class="inline-flex">
                                        <span class="d">Select all</span>
                                        <input id="parent-checkbox" class="i" type="checkbox" @click="toggleAll">
                                    </label>
                                </div>
                            </th>
                            <th class="vi wy w_ vo lm of">
                                <span class="d">Favourite</span>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Order</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Email</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Location</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh">Orders</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Last order</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Total spent</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh">Refunds</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <span class="d">Menu</span>
                            </th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody class="text-sm le lr">
                        <!-- Row -->
                        <tr>
                            <td class="vi wy w_ vo lm of">
                                <div class="flex items-center">
                                    <label class="inline-flex">
                                        <span class="d">Select</span>
                                        <input class="table-item i" type="checkbox" @click="uncheckParent">
                                    </label>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm of">
                                <div class="flex items-center y">
                                    <button>
                                        <svg class="oo sl ub du yn" viewBox="0 0 16 16">
                                            <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="flex items-center">
                                    <div class="od sy ub mr-2 _b">
                                        <img class="rounded-full" src="./images/user-40-01.jpg" width="40" height="40" alt="User 01">
                                    </div>
                                    <div class="gp text-slate-800">Patricia Semklo</div>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt">patricia.semklo@app.com</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt">🇬🇧 London, UK</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gn">24</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt gp yv">#123567</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt gp yt">$2,890.66</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gn">-</div>
                            </td>
                            <td class="vi wy w_ vo lm of">
                                <button class="gq xv rounded-full">
                                    <span class="d">Menu</span>
                                    <svg class="os sf du" viewBox="0 0 32 32">
                                        <circle cx="16" cy="16" r="2"></circle>
                                        <circle cx="10" cy="16" r="2"></circle>
                                        <circle cx="22" cy="16" r="2"></circle>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <!-- Row -->
                        <tr>
                            <td class="vi wy w_ vo lm of">
                                <div class="flex items-center">
                                    <label class="inline-flex">
                                        <span class="d">Select</span>
                                        <input class="table-item i" type="checkbox" @click="uncheckParent">
                                    </label>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="flex items-center y">
                                    <button>
                                        <svg class="oo sl ub du yf" viewBox="0 0 16 16">
                                            <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="flex items-center">
                                    <div class="od sy ub mr-2 _b">
                                        <img class="rounded-full" src="./images/user-40-02.jpg" width="40" height="40" alt="User 02">
                                    </div>
                                    <div class="gp text-slate-800">Dominik Lamakani</div>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt">dominik.lamakani@gmail.com</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt">🇩🇪 Dortmund, DE</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gn">77</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt gp yv">#779912</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt gp yt">$14,767.04</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gn">4</div>
                            </td>
                            <td class="vi wy w_ vo lm of">
                                <button class="gq xv rounded-full">
                                    <span class="d">Menu</span>
                                    <svg class="os sf du" viewBox="0 0 32 32">
                                        <circle cx="16" cy="16" r="2"></circle>
                                        <circle cx="10" cy="16" r="2"></circle>
                                        <circle cx="22" cy="16" r="2"></circle>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <!-- Row -->
                        <tr>
                            <td class="vi wy w_ vo lm of">
                                <div class="flex items-center">
                                    <label class="inline-flex">
                                        <span class="d">Select</span>
                                        <input class="table-item i" type="checkbox" @click="uncheckParent">
                                    </label>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="flex items-center y">
                                    <button>
                                        <svg class="oo sl ub du yn" viewBox="0 0 16 16">
                                            <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="flex items-center">
                                    <div class="od sy ub mr-2 _b">
                                        <img class="rounded-full" src="./images/user-40-03.jpg" width="40" height="40" alt="User 03">
                                    </div>
                                    <div class="gp text-slate-800">Ivan Mesaros</div>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt">imivanmes@gmail.com</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt">🇫🇷 Paris, FR</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gn">44</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt gp yv">#889924</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt gp yt">$4,996.00</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gn">1</div>
                            </td>
                            <td class="vi wy w_ vo lm of">
                                <button class="gq xv rounded-full">
                                    <span class="d">Menu</span>
                                    <svg class="os sf du" viewBox="0 0 32 32">
                                        <circle cx="16" cy="16" r="2"></circle>
                                        <circle cx="10" cy="16" r="2"></circle>
                                        <circle cx="22" cy="16" r="2"></circle>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <!-- Row -->
                        <tr>
                            <td class="vi wy w_ vo lm of">
                                <div class="flex items-center">
                                    <label class="inline-flex">
                                        <span class="d">Select</span>
                                        <input class="table-item i" type="checkbox" @click="uncheckParent">
                                    </label>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="flex items-center y">
                                    <button>
                                        <svg class="oo sl ub du yf" viewBox="0 0 16 16">
                                            <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="flex items-center">
                                    <div class="od sy ub mr-2 _b">
                                        <img class="rounded-full" src="./images/user-40-04.jpg" width="40" height="40" alt="User 04">
                                    </div>
                                    <div class="gp text-slate-800">Maria Martinez</div>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt">martinezhome@gmail.com</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt">🇮🇹 Bologna, IT</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gn">29</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt gp yv">#897726</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt gp yt">$3,220.66</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gn">2</div>
                            </td>
                            <td class="vi wy w_ vo lm of">
                                <button class="gq xv rounded-full">
                                    <span class="d">Menu</span>
                                    <svg class="os sf du" viewBox="0 0 32 32">
                                        <circle cx="16" cy="16" r="2"></circle>
                                        <circle cx="10" cy="16" r="2"></circle>
                                        <circle cx="22" cy="16" r="2"></circle>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <!-- Row -->
                        <tr>
                            <td class="vi wy w_ vo lm of">
                                <div class="flex items-center">
                                    <label class="inline-flex">
                                        <span class="d">Select</span>
                                        <input class="table-item i" type="checkbox" @click="uncheckParent">
                                    </label>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="flex items-center y">
                                    <button>
                                        <svg class="oo sl ub du yn" viewBox="0 0 16 16">
                                            <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="flex items-center">
                                    <div class="od sy ub mr-2 _b">
                                        <img class="rounded-full" src="./images/user-40-05.jpg" width="40" height="40" alt="User 05">
                                    </div>
                                    <div class="gp text-slate-800">Vicky Jung</div>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt">itsvicky@contact.com</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt">🇬🇧 London, UK</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gn">22</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt gp yv">#123567</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt gp yt">$2,890.66</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gn">-</div>
                            </td>
                            <td class="vi wy w_ vo lm of">
                                <button class="gq xv rounded-full">
                                    <span class="d">Menu</span>
                                    <svg class="os sf du" viewBox="0 0 32 32">
                                        <circle cx="16" cy="16" r="2"></circle>
                                        <circle cx="10" cy="16" r="2"></circle>
                                        <circle cx="22" cy="16" r="2"></circle>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <!-- Row -->
                        <tr>
                            <td class="vi wy w_ vo lm of">
                                <div class="flex items-center">
                                    <label class="inline-flex">
                                        <span class="d">Select</span>
                                        <input class="table-item i" type="checkbox" @click="uncheckParent">
                                    </label>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="flex items-center y">
                                    <button>
                                        <svg class="oo sl ub du yn" viewBox="0 0 16 16">
                                            <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="flex items-center">
                                    <div class="od sy ub mr-2 _b">
                                        <img class="rounded-full" src="./images/user-40-06.jpg" width="40" height="40" alt="User 06">
                                    </div>
                                    <div class="gp text-slate-800">Tisho Yanchev</div>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt">tisho.y@kurlytech.com</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt">🇬🇧 London, UK</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gn">14</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt gp yv">#896644</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt gp yt">$1,649.99</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gn">1</div>
                            </td>
                            <td class="vi wy w_ vo lm of">
                                <button class="gq xv rounded-full">
                                    <span class="d">Menu</span>
                                    <svg class="os sf du" viewBox="0 0 32 32">
                                        <circle cx="16" cy="16" r="2"></circle>
                                        <circle cx="10" cy="16" r="2"></circle>
                                        <circle cx="22" cy="16" r="2"></circle>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <!-- Row -->
                        <tr>
                            <td class="vi wy w_ vo lm of">
                                <div class="flex items-center">
                                    <label class="inline-flex">
                                        <span class="d">Select</span>
                                        <input class="table-item i" type="checkbox" @click="uncheckParent">
                                    </label>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="flex items-center y">
                                    <button>
                                        <svg class="oo sl ub du yn" viewBox="0 0 16 16">
                                            <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="flex items-center">
                                    <div class="od sy ub mr-2 _b">
                                        <img class="rounded-full" src="./images/user-40-07.jpg" width="40" height="40" alt="User 07">
                                    </div>
                                    <div class="gp text-slate-800">James Cameron</div>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt">james.ceo@james.tech</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt">🇫🇷 Marseille, FR</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gn">34</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt gp yv">#136988</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt gp yt">$3,569.87</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gn">2</div>
                            </td>
                            <td class="vi wy w_ vo lm of">
                                <button class="gq xv rounded-full">
                                    <span class="d">Menu</span>
                                    <svg class="os sf du" viewBox="0 0 32 32">
                                        <circle cx="16" cy="16" r="2"></circle>
                                        <circle cx="10" cy="16" r="2"></circle>
                                        <circle cx="22" cy="16" r="2"></circle>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <!-- Row -->
                        <tr>
                            <td class="vi wy w_ vo lm of">
                                <div class="flex items-center">
                                    <label class="inline-flex">
                                        <span class="d">Select</span>
                                        <input class="table-item i" type="checkbox" @click="uncheckParent">
                                    </label>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="flex items-center y">
                                    <button>
                                        <svg class="oo sl ub du yf" viewBox="0 0 16 16">
                                            <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="flex items-center">
                                    <div class="od sy ub mr-2 _b">
                                        <img class="rounded-full" src="./images/user-40-08.jpg" width="40" height="40" alt="User 08">
                                    </div>
                                    <div class="gp text-slate-800">Haruki Masuno</div>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt">haruki@supermail.jp</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt">🇯🇵 Tokio, JP</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gn">112</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt gp yv">#442206</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt gp yt">$19,246.07</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gn">6</div>
                            </td>
                            <td class="vi wy w_ vo lm of">
                                <button class="gq xv rounded-full">
                                    <span class="d">Menu</span>
                                    <svg class="os sf du" viewBox="0 0 32 32">
                                        <circle cx="16" cy="16" r="2"></circle>
                                        <circle cx="10" cy="16" r="2"></circle>
                                        <circle cx="22" cy="16" r="2"></circle>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <!-- Row -->
                        <tr>
                            <td class="vi wy w_ vo lm of">
                                <div class="flex items-center">
                                    <label class="inline-flex">
                                        <span class="d">Select</span>
                                        <input class="table-item i" type="checkbox" @click="uncheckParent">
                                    </label>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="flex items-center y">
                                    <button>
                                        <svg class="oo sl ub du yn" viewBox="0 0 16 16">
                                            <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="flex items-center">
                                    <div class="od sy ub mr-2 _b">
                                        <img class="rounded-full" src="./images/user-40-09.jpg" width="40" height="40" alt="User 09">
                                    </div>
                                    <div class="gp text-slate-800">Joe Huang</div>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt">joehuang@hotmail.com</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt">🇨🇳 Shanghai, CN</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gn">64</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt gp yv">#764321</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt gp yt">$12,276.92</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gn">-</div>
                            </td>
                            <td class="vi wy w_ vo lm of">
                                <button class="gq xv rounded-full">
                                    <span class="d">Menu</span>
                                    <svg class="os sf du" viewBox="0 0 32 32">
                                        <circle cx="16" cy="16" r="2"></circle>
                                        <circle cx="10" cy="16" r="2"></circle>
                                        <circle cx="22" cy="16" r="2"></circle>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <!-- Row -->
                        <tr>
                            <td class="vi wy w_ vo lm of">
                                <div class="flex items-center">
                                    <label class="inline-flex">
                                        <span class="d">Select</span>
                                        <input class="table-item i" type="checkbox" @click="uncheckParent">
                                    </label>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="flex items-center y">
                                    <button>
                                        <svg class="oo sl ub du yf" viewBox="0 0 16 16">
                                            <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="flex items-center">
                                    <div class="od sy ub mr-2 _b">
                                        <img class="rounded-full" src="./images/user-40-10.jpg" width="40" height="40" alt="User 10">
                                    </div>
                                    <div class="gp text-slate-800">Carolyn McNeail</div>
                                </div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt">carolynlove@gmail.com</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt">🇮🇹 Milan, IT</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gn">19</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt gp yv">#908764</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gt gp yt">$1,289.97</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gn">2</div>
                            </td>
                            <td class="vi wy w_ vo lm of">
                                <button class="gq xv rounded-full">
                                    <span class="d">Menu</span>
                                    <svg class="os sf du" viewBox="0 0 32 32">
                                        <circle cx="16" cy="16" r="2"></circle>
                                        <circle cx="10" cy="16" r="2"></circle>
                                        <circle cx="22" cy="16" r="2"></circle>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <script>
        // A basic demo function to handle "select all" functionality
        document.addEventListener('alpine:init', () => {
            Alpine.data('handleSelect', () => ({
                selectall: false,
                selectAction() {
                    countEl = document.querySelector('.table-items-action');
                    if (!countEl) return;
                    checkboxes = document.querySelectorAll('input.table-item:checked');
                    document.querySelector('.table-items-count').innerHTML = checkboxes.length;
                    if (checkboxes.length > 0) {
                        countEl.classList.remove('hidden');
                    } else {
                        countEl.classList.add('hidden');
                    }
                },
                toggleAll() {
                    this.selectall = !this.selectall;
                    checkboxes = document.querySelectorAll('input.table-item');
                    [...checkboxes].map((el) => {
                        el.checked = this.selectall;
                    });
                    this.selectAction();
                },
                uncheckParent() {
                    this.selectall = false;
                    document.getElementById('parent-checkbox').checked = false;
                    this.selectAction();
                }
            }))
        })    
    </script>
    
    <!-- Pagination -->
    <div class="rx">
        <div class="flex ak ja jc jd">
            <nav class="ri _y _f" role="navigation" aria-label="Navigation">
                <ul class="flex justify-center">
                    <li class="ml-3 first--ml-0">
                        <a class="btn bg-white border-slate-200 yf af" href="#0" disabled="">&lt;- Previous</a>
                    </li>
                    <li class="ml-3 first--ml-0">
                        <a class="btn bg-white border-slate-200 hover--border-slate-300 text-indigo-500" href="#0">Next -&gt;</a>
                    </li>
                </ul>
            </nav>
            <div class="text-sm text-slate-500 gn qe">
                Showing <span class="gp g_">1</span> to <span class="gp g_">10</span> of <span class="gp g_">467</span> results
            </div>
        </div>
    </div>

</div>