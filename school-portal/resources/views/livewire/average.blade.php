@foreach($stud as $student)


@endforeach


<div class="flex items-center justify-center">
    <img src="/images/logo.webp" width="150">
</div>
<div class="flex flex-col items-center justify-center ">
<h1 class="flex items-center text-sm md:text-xl justify-center font-extrabold mb-2 ">Tipas Integrated National Highschool</h1>

    
</div>

<div class="overflow-auto pl-2 pr-2">
    
  <div >
    <h1 class="flex items-center justify-center text-sm md:text-xl mb-6 mt-4">Learning Progress and Achievement</h1>
<div class="overflow-auto pl-2 pr-2 flex items-center justify-center">
    <table class="table-auto w-full mb-6 text-xs md:text-base dark:bg-[#222738] " >
        <thead class="shadow-sm">
            <tr>
     
                <th class="border px-4 py-2"></th>
                <th class="border px-4 py-2">1</th>
                <th class="border px-4 py-2">2</th>
                <th class="border px-4 py-2">3</th>
                <th class="border px-4 py-2">4</th>
                <th class="border px-4 py-2">Final Grade</th>
              
            </tr>
        </thead>
        <tbody class="ml-2 mr-2 ">
             
            
        
              <tr class="shadow-sm">
                 
                  
                  <td class="border px-4 py-1  dark:border-gray-500 ">Mother Toungue</td>
                  <td class="border px-4 py-1 dark:border-gray-500 ">{{$student->mothertongue}}</td>  
                  <td class="border px-4 py-1 dark:border-gray-500">{{$student->mothertongue2}}</td>  
                  <td class="border px-4 py-1 dark:border-gray-500">{{$student->mothertongue3}}</td>  
                  <td class="border px-4 py-1 dark:border-gray-500">{{$student->mothertongue4}}</td>  
                  <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->mothertongue +$student->mothertongue2 + $student->mothertongue3 + $student->mothertongue4)/4)}}</td>  
              </tr>

            <tr class="shadow-sm">
              <td class="border px-4 py-1 dark:border-gray-500">Filipino</td>
              <td class="border px-4 py-1 dark:border-gray-500">{{$student->filipino}}</td>  
              <td class="border px-4 py-1 dark:border-gray-500">{{$student->filipino2}}</td>  
              <td class="border px-4 py-1 dark:border-gray-500">{{$student->filipino3}}</td>  
              <td class="border px-4 py-1 dark:border-gray-500">{{$student->filipino4}}</td>  
              <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->filipino +$student->filipino2 + $student->filipino3 + $student->filipino4)/4)}}</td>  
            </tr>

            <tr  class="shadow-sm">
                <td class="border px-4 py-1  dark:border-gray-500">English</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->english}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->english2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->english3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->english4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->english +$student->english2 + $student->english3 + $student->english4)/4)}}</td>  
            </tr>

            <tr  class="shadow-sm">
                <td class="border px-4 py-1  dark:border-gray-500">Math</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->mathematics}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->mathematics2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->mathematics3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->mathematics4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->mathematics +$student->mathematics2 + $student->mathematics3 + $student->mathematics4)/4)}}</td>  
            </tr>

            <tr  class="shadow-sm">
                <td class="border px-4 py-1  dark:border-gray-500">Science</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->science}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->science2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->science3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->science4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->science +$student->science2 + $student->science3 + $student->science4)/4)}}</td>  
            </tr>

            <tr  class="shadow-sm">
                <td class="border px-4 py-1  dark:border-gray-500">Araling Panlipunan</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->ap}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->ap2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->ap3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->ap4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->ap +$student->ap2 + $student->ap3 + $student->ap4)/4)}}</td>  
            </tr>

            <tr  class="shadow-sm">
                <td class="border px-4 py-1  dark:border-gray-500">ESP</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->esp}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->esp2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->esp3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->esp4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->esp +$student->esp2 + $student->esp3 + $student->esp4)/4)}}</td>  
            </tr>

            <tr  class="shadow-sm">
                <td class="border px-4 py-1  dark:border-gray-500">Music</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->music}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->music2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->music3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->music4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->music +$student->music2 + $student->music3 + $student->music4)/4)}}</td>  
            </tr>

            <tr  class="shadow-sm">
                <td class="border px-4 py-1  dark:border-gray-500">Arts</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->arts}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->arts2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->arts3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->arts4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->arts +$student->arts2 + $student->arts3 + $student->arts4)/4)}}</td>  
            </tr>

            <tr  class="shadow-sm">
                <td class="border px-4 py-1  dark:border-gray-500">Physical Education</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->pe}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->pe2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->pe3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->pe4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->pe +$student->pe2 + $student->pe3 + $student->pe4)/4)}}</td>  
            </tr>

            <tr  class="shadow-sm">
                <td class="border px-4 py-1  dark:border-gray-500">Health</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->health}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->health2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->health3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->health4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->health +$student->health2 + $student->health3 + $student->health4)/4)}}</td>  
            </tr>

            <tr  class="shadow-sm">
                <td class="border px-4 py-1  dark:border-gray-500">EPP</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->epp}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->epp2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->epp3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->epp4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->epp +$student->epp2 + $student->epp3 + $student->epp4)/4)}}</td>  
            </tr>

            <tr  class="shadow-sm">
                <td class="border px-4 py-1  dark:border-gray-500">TLE</td>
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->tle}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->tle2}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->tle3}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{$student->tle4}}</td>  
                <td class="border px-4 py-1 dark:border-gray-500">{{number_format(($student->tle +$student->tle2 + $student->tle3 + $student->tle4)/4)}}</td>  
            </tr>

            <tr  class="shadow-sm">
                <td class="border px-4 py-1  dark:border-gray-500 font-bold">General Average</td>

                <td class="border px-4 py-1 dark:border-gray-500 font-bold">
                    {{number_format(($student->tle +  $student->epp + $student->health +
                    $student->pe + $student->arts + $student->music +   $student->esp +
                    $student->ap + $student->science +  $student->mathematics + 
                    $student->english + $student->filipino + $student->mothertongue)/13)}}   
                </td>  

                <td class="border px-4 py-1 dark:border-gray-500 font-bold">
                    {{number_format(($student->tle2 +  $student->epp2 + $student->health2 +
                    $student->pe2 + $student->arts2 + $student->music2 +   $student->esp2 +
                    $student->ap2 + $student->science2 +  $student->mathematics2 + 
                    $student->english2 + $student->filipino2 + $student->mothertongue2)/13)}} 
                </td> 

                <td class="border px-4 py-1 dark:border-gray-500 font-bold">
                    {{number_format(($student->tle3 +  $student->epp3 + $student->health3 +
                    $student->pe3 + $student->arts3 + $student->music3 +   $student->esp3 +
                    $student->ap3 + $student->science3 +  $student->mathematics3 + 
                    $student->english3 + $student->filipino3 + $student->mothertongue3)/13)}} 
                </td>  

                <td class="border px-4 py-1 dark:border-gray-500 font-bold">
                    {{number_format(($student->tle4 +  $student->epp4 + $student->health4 +
                    $student->pe4 + $student->arts4 + $student->music4 +   $student->esp4 +
                    $student->ap4 + $student->science4 +  $student->mathematics4 + 
                    $student->english4 + $student->filipino4 + $student->mothertongue4)/13)}}   
                </td>  
                <td class="border px-4 py-1 dark:border-gray-500 font-bold">
                    
                    {{number_format(($student->tle +$student->tle2 + $student->tle3 + $student->tle4 +
                    $student->epp +$student->epp2 + $student->epp3 + $student->epp4 +
                    $student->health +$student->health2 + $student->health3 + $student->health4 +
                    $student->pe +$student->pe2 + $student->pe3 + $student->pe4 +
                    $student->arts +$student->arts2 + $student->arts3 + $student->arts4 +
                    $student->music +$student->music2 + $student->music3 + $student->music4 +
                    $student->esp +$student->esp2 + $student->esp3 + $student->esp4 +
                    $student->ap +$student->ap2 + $student->ap3 + $student->ap4 +
                    $student->science +$student->science2 + $student->science3 + $student->science4 +
                    $student->mathematics +$student->mathematics2 + $student->mathematics3 + $student->mathematics4 +
                    $student->english +$student->english2 + $student->english3 + $student->english4 +
                    $student->filipino +$student->filipino2 + $student->filipino3 + $student->filipino4 +
                    $student->mothertongue +$student->mothertongue2 + $student->mothertongue3 + $student->mothertongue4

                    )/52)}} 
                   
                </td>  
            </tr>


  
           

             
         
          
        </tbody>
    </table>
   </div>

