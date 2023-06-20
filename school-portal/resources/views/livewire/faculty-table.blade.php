

 
 <div class="pl-2 pr-2 shadow-xl">
    <div class="w-full flex flex-col lg:flex-row  pb-10 ">
        <div class="w-full lg:w-3/6 mx-0 mb-2 lg:pr-2">
            <label class="text-sm">Search</label>
            <input wire:model.debounce.300ms="search" type="text" class="appearance-none block w-full mr-2 bg-gray-200 text-gray-700 border border-gray-200 rounded py-1 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 shadow-lg"  placeholder="Search Teacher...">
        </div>
        <div class="w-full  lg:w-1/6  mx-0 mb-2 lg:pr-2">
            <label class="text-sm">Filter by</label>
            <select wire:model="orderBy" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-1 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 shadow-lg" id="grid-state">
                <option value="id">ID</option>
                <option value="lastname">Last Name</option>
                <option value="email">Email</option>
                {{-- <option value="created_at">Sign Up Date</option> --}}
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
        </div>
        <div class= "w-full lg:w-1/6 mx-0 mb-2 lg:pr-2">
            <label class="text-sm">Sort by</label>
            <select wire:model="orderAsc" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-1 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 shadow-lg" id="grid-state">
                <option value="1">Ascending</option>
                <option value="0">Descending</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
        </div>
        <div class="w-full lg:w-1/6  mx-0 ">
            <label class="text-sm">Display by</label>
            <select wire:model="perPage" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-1 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 shadow-lg" id="grid-state">
                <option>10</option>
                <option>25</option>
                <option>50</option>
                <option>100</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
        </div>
    </div>
    <div class="overflow-auto">
    <table class="table-auto w-full mb-6">
        <thead>
            <tr>
                <th class="px-4 py-2">PHOTO</th>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">LAST NAME</th>
                <th class="px-4 py-2">FIRST NAME</th>
                <th class="px-4 py-2">MIDDLE NAME</th>
                <th class="px-4 py-2">GENDER</th>
                <th class="px-4 py-2">EMAIL</th>
                <th class="px-4 py-2">DATE OF BIRTH</th>
                <th class="px-4 py-2">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teachers as $teacher)
                <tr>

                    <td class="border px-4 py-2 rounded-full dark:border-gray-500">
                        <a href="{{url('edit-faculty/'.$teacher->id)}}"><img src="{{asset('uploads/faculty/'.$teacher->photo)}}" width="30" height="30" alt="image" class="border rounded-full"></a>
                    </td>
                    <td class="border px-4 py-2 dark:border-gray-500">{{ $teacher->id }}</td>
                    <td class="border px-4 py-2 dark:border-gray-500">{{ $teacher->lastname }}</td>
                    <td class="border px-4 py-2 dark:border-gray-500">{{ $teacher->firstname }}</td>
                    <td class="border px-4 py-2 dark:border-gray-500">{{ $teacher->middlename}}</td>
                    <td class="border px-4 py-2 dark:border-gray-500">{{ $teacher->gender }}</td>
                    <td class="border px-4 py-2 dark:border-gray-500">{{ $teacher->email }}</td>
                    <td class="border px-4 py-2 dark:border-gray-500">{{ $teacher->dateofbirth}}</td>
                    <td class="flex items-center border px-4 py-2 dark:border-gray-500">
                    
                        <a href="{{url('edit-faculty/'.$teacher->id)}}" >  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#3F83F8" class="w-6 h-6 mr-2">
                            <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                            <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                        </svg>
                        </a>
                    

                        
                        <a href="{{url('delete-faculty/'.$teacher->id)}}"  onclick="confirmation(event)"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#F05252" class="w-6 h-6" >
                            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
                        </svg>
                        
                        </a>

                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    {!! $teachers->links() !!}
    @include('sweetalert::alert')
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
      function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');  
        console.log(urlToRedirect); 
        swal({
            title: "Are you sure to Delete this data",
            text: "You will not be able to revert this!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willCancel) => {
            if (willCancel) {


                 
                window.location.href = urlToRedirect;
               
            }  


        });

        
    }
</script>