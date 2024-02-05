<!DOCTYPE html>
<html class="h-full bg-white" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Laravel allaw</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
  @vite('resources/css/app.css')
 <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    </head>
    <body class="w-full font-bold text-3xl">

                    <div>
            <header>

<nav class="bg-white dark:bg-gray-900   z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <div class="items-center justify-center w-full flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex gap-8 p-4 md:p-0 mt-8 align-middle font-bold border border-gray-100 rounded-lg bg-gray-50 flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="{{route('homepage')}}" class="block py-2 font-bold text-4xl pl-3 pr-4 text-white bg-blue-500 rounded " aria-current="page">back</a>


      </li>
      <li>

                     <form action="{{route('create.histry')}}" method ="POST" enctype="multipart/form-data">
                       @csrf
                      <div class="hidden">
                        <input id="start_date" name="start_date" value={{$start_date}} type="text">
                       <input id="end_date" name="end_date" type="text" value={{$end_date}}>
                      </div>
                     </li>

                     </form>



                     </ul>
                   </div>
                   </div>
                    </nav>

            </header>
    </div>
    <button class="btn btn-primary" id="download"> download pdf</button>

    <div id="invoice" class="w-2/3 border m-auto  ">
                                        <div class="text-center text-4xl p-4">
                                            <h1 class="p-4 text-5xl m-1 underline underline-offset-4">የፋይናስ የስራ ሂደት</h1>
                                        <h2 class="py-2 underline underline-offset-4">በኢፌደሪ መንግስት የወሎ ዩንቨርሲቲ አበልና መጓጓዣ ወጭ መጠየቂያ ና መፍቀጃ ቅፅ</h2>
                                        </div>
                                        <div class="my-6 ">
                                            <ol class="list-decimal ml-24 leading-10">
                                            <li>የመስሪያ ቤቱ ስም የወሎ ዩንቨርሲቲ </li>
                                            <li>የፕሮግራም /የስራ ሂደት --------------------------------------------</li>
                                            <li> የፕሮጀክት ስምናኮድ--------------------------------------------</li>
                                            <li>የሰራተኛዉ ስም <span class="pl-8 tracking-wider underline underline-offset-4"> {{$name}}</li>
                                            <li>የወር ደሞዝ<span class="pl-8 tracking-wider underline underline-offset-4">{{$salary->salary}} ብር</li>
                                            <li>የጉዞዉ አላማ/ምክንያት /<span class="px-8 tracking-wider underline underline-offset-4">ለስራ</li>
                                            <li>የጉዞዉ መነሻ ቦታ<span class="px-8 tracking-wider underline underline-offset-4">{{$start_city}}<span>የጉዞዉ መድረሻ ቦታ <span class="px-8 tracking-wider underline underline-offset-4">{{$end_city}}</li>
                                            <li>የቆይታ ጊዜ ከ. <span class="px-8 tracking-wider underline underline-offset-4">{{$start_date}} እስከ<span class="px-8 tracking-wider underline underline-offset-4">{{$end_date}}</li>
                                            <li>በጉዞዉ የሚቆይበት ጊዜ<span class="px-8 tracking-wider underline underline-offset-4">{{$date_diference + 0.35}}</span></li>
                                            <li>በቅድሚያ የተከፈሉ
                                                <ul class="indent-2">
                                                    <li>ሀ.ለዉሎ አበል ብር.........</li>
                                                    <li>ለ.ለትራንስፖርት ብር ........</li>
                                                    <li>ሐ.ለነዳጅ ቅባት ብር..........</li>
                                                    <li>መ.የአየር ፀባይ ብር...........</li>
                                                    <li>ሰ.መጠባበቂያ ብር ............<span>ድምር የተከፈለ ብር.......</span><br>የጠያቂው ፊርማ.......</li>

                                                </ul>
                                            </li>
                                            <li> ጉዞውን የፈቀደው የስራ ክፍልሃላፊ ስም.......<br><span>ፊርማ.......</span></li>
                                            <li>በስራውበጀት የተያዘበት መሆኑን ያረጋገጠውየስራ ክፍልሃላፊ ስም.......<br><span>ፊርማ............</span></li>
                                            <li>ከዚህ በላይ በተራቁጥር 10 የተመለከተው ጠቅላላ ድምርብር/...........<br>
                                                /...............................................................<br>.............
                                                /<span> ወጪ ሆኖእንዲከፈል ተፈቅዳል።</span></li>

                                        </ol>
                                        </div>
                                        <p class="text-end pr-20 pb-48">ከሰላምታ ጋር</p>





                                <!-- page breake  -->
                                <div id="break">
                                    <div>
                                    <u><h2 class=" text-center text-5xl" >የመንግስት ሰራተኞች ዉሎ አበል ክፍያ ማወራረጃ ቅፅ</h2></u><br>
                                    <h3 class="text-center text-4xl" >የመስሪያ ቤቱ ስም ወሎ ዩንቨርስቲ ቴክኖሎጂ ኢንስቲትዩት ፕሮግራም የስራ ሂደት---------------</h3><br>
                                    <h3>የሰራተኛዉ ስም <u class="px-8">{{$name}} </u><span>የደሞዝ መጠን <u class="px-8">{{$salary->salary}} ብር </u></span><span>የመጓጓዣ አይነት----------  </span></h3>
                                    <h3 class="p-4">የዉሎ አበል አከፋፈል ስሌት ሰንጠረዥ     </h3>
                                    <u> <h3 class="text-center text-3xl p-4" >ሀ.ሰራተኛዉ በጉዞ ላይ የቆዩበት ቦታዎች /ለቁርስ፣ለምሳ፣ለእራት/መግለጫ ሰንጠረዥ </h3></u>




                                    <table class="min-w-full  border text-center text-xl font-light dark:border-neutral-500">
                                        <thead class="border-b font-medium dark:border-neutral-500">
                                        <tr class="trow">
                                            <th
                                                class="theade" colspan="3">መነሻ</th>
                                            <th
                                                class="theade" colspan="4">የደረሰበት ቦታ</th>
                                            <th
                                                class="theade" colspan="4">በፋይናንስ ብቻ የሚሞላ</th>
                                        </t>
                                        </thead>
                                        <tr class="trow">
                                        <th class="tableheade">ቦታ</th>
                                        <th class="tableheade">ቀን</th>
                                        <th class="tableheade">ሰዓት</th>
                                        <th class="tableheade" >ቁርስ</th>
                                        <th class="tableheade">ምሳ</th>
                                        <th class="tableheade">እራት</th>
                                        <th class="tableheade">የቀን ብዛት</th>
                                        <th class="tableheade">የዉሎአበልመጠን</th>
                                        <th class="tableheade">የበርሃ አበል</th>
                                        <th class="tableheade">ድምር</th>
                                        </tr>
                                        <tr class="trow">
                                        <td class="tabledata">{{$start_city}}</td>
                                        <td class="tabledata">{{$start_date}}</td>
                                        <td class="tabledata">12:00</td>
                                        <td class="tabledata">{{$brake_fast}}</td>
                                        <td class="tabledata">{{$lanch}}</td>
                                        <td class="tabledata">{{$end_city}}</td>
                                        <td class="tabledata">{{$guzo_value}}<span>%</span></td>
                                        <td class="tabledata">{{$guzo_price}}</td>
                                        <td class="tabledata">{{$desertalw > 0 ? $desertalw : ''}}</td>
                                        <td class="tabledata">{{$guzo_price + $desertalw}}</td>
                                        </tr>
                                        <tr class="trow">
                                        <td class="tabledata">{{$end_city}}</td>
                                        <td class="tabledata">{{$end_date}}</td>
                                        <td class="tabledata">12:00</td>
                                        <td class="tabledata">{{$lanch}}</td>
                                        <td class="tabledata">{{$brake_fast}}</td>
                                        <td class="tabledata">{{$start_city}}</td>
                                        <td class="tabledata">{{$memeles}}<span>%</span></td>
                                        <td class="tabledata">{{$memeles_price}}</td>
                                        <td class="tabledata">{{$desertalw > 0 ? $desertalw : ''}}</td>
                                        <td class="tabledata">{{$memeles_price + $desertalw}}</td>
                                        </tr>
                                        <tr class="trow">
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        </tr>
                                        <tr class="trow">
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        </tr>
                                        <tr class="trow">
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        </tr>
                                        <tr class="trow">
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        </tr>
                                        <tr class="trow">
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        </tr>
                                        <tr class="trow">
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        </tr>
                                        </tbody>
                                    </table>



                                    </div>


                                    <u><h3 class="text-center text-3xl p-4">ለ.ሰራተኛው ለስራ በቆዩባቸው ቦታዎች መግለጫ ሰንጠረዥ</h3></u>

                                <table class="min-w-full border text-center text-xl font-bold dark:border-neutral-500">

                                        <tr >
                                            <th class="theade" rowspan=3>ቀን</th>
                                            <th class="theade" rowspan="3">ለስራ የታደረበት ቦታ<br> ክልል፣ዞን፣ወረዳ፣ከተማ </th>
                                            <th class="theade" rowspan="3">የቀን ብዛት </th>
                                            <th class="theade trow" colspan="3" >በፋይናንስ ብቻ የሚሞላ</th>

                                        </tr>
                                        <tr class="trow">
                                            <th class="theade" rowspan="2">የዉሎ አበል </th>
                                            <th class="theade" rowspan="2">የበርሃ አበል</th>
                                            <th class="theade" rowspan="2">ድምር</th>
                                        </tr>
                                        <tr class="trow"></tr>
                                        </tr>
                                        <tr class="trow">

                                        </tr>
                                        <tr class="trow">
                                        <td class="tabledata">{{$start_date}}</td>
                                        <td class="tabledata">{{$end_city}}</td>
                                        <td class="tabledata">{{$night_value * 100}}<span>%</span></td>
                                        <td class="tabledata">{{$night_price}}</td>
                                        <td class="tabledata">{{$desertalw > 0 ? $desertalw : ''}}</td>
                                        <td class="tabledata">{{$night_price + $desertalw}}</td>
                                        </tr>
                                        <tr class="trow">
                                @if (is_numeric($start_day[0]) && is_numeric($start_day[1]) && is_numeric($start_day[2]))
                                    @if (($start_day[0] + 1) > 30)
                                        <?php
                                            $workmonth = $start_day[1] + 1;
                                            $workday = $start_day[0] - 29;
                                        ?>
                                        <td class="tabledata"><span>{{$workday}}/{{$workmonth}}/{{$start_day[2]}}</span> - <span>{{$end_date}}</span></td>
                                    @else
                                        <td class="tabledata"><span>{{$start_day[0] + 1}}/{{$start_day[1]}}/{{$start_day[2]}}</span> - <span>{{$end_date}}</span></td>
                                    @endif
                                @endif

                                        <td class="tabledata">{{$end_city}}</td>
                                        <td class="tabledata">{{$date_diference - 1 }}</td>
                                        <td class="tabledata">{{$wuloabel}}</td>
                                        <td class="tabledata">{{$desertalw > 0 ? $desertalw * ($date_diference - 1) : ''}}</td>
                                        <td class="tabledata">{{$wuloabel + ($desertalw* ($date_diference - 1))}}</td>
                                        </tr>
                                        <tr class="trow">
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        </tr>
                                                </tr>
                                        <tr class="trow">
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        </tr>
                                                </tr>
                                        <tr class="trow">
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        </tr>
                                                </tr>
                                        <tr class="trow">
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        </tr>
                                                </tr>
                                        <tr class="trow">
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        </tr>
                                                </tr>
                                        <tr class="trow">
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        </tr>
                                </tbody>
                                    </table>
                                    <u><h3 class="text-center text-3xl p-4">ሐ.አጠቃላይ የዉሎ አበልና ነዳጅ ክፍያ ማጠቃለያ ሰንጠረዥ </h3></u>
                                    <table class="min-w-full border text-center text-xl font-bold dark:border-neutral-500">
                                    <thead class="border-b font-bold dark:border-neutral-500">
                                    <tr class="trow">
                                        <th class="tabledata" >ተ/ቁ</th>
                                        <th class="tabledata" >የክፍያ አይነት </th>
                                        <th class="tabledata" >ቅድሚያ የተከፈለ<br> የገንዘብ መጠን</th>
                                        <th class="tabledata" >ተጨማሪ ክፍያ</th>
                                        <th class="tabledata" > ተመላሽ የሚደረግ <br>ገንዘብ መጠን</th>
                                        <th class="tabledata" >ድምር /ልዩነት</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="trow">

                                        <td class="tabledata">1</td>
                                        <td class="tabledata">የዉሎ አበል</td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                    </tr>
                                    <tr class="trow">

                                        <td class="tabledata">2</td>
                                        <td class="tabledata">የነዳጅ</td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                    </tr>
                                    <tr class="trow">

                                        <td class="tabledata">3</td>
                                        <td class="tabledata">የጥገና</td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                    </tr>
                                    <tr class="trow">

                                        <td class="tabledata">4</td>
                                        <td class="tabledata">ሌላ</td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                    </tr>
                                    <tr class="trow">
                                    <td class="tabledata"></td>
                                        <td class="tabledata">ጠቅላላ ወጪ</td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                    </tr>
                                    <tr class="trow">
                                        <td class="tabledata"></td>
                                        <td class="tabledata">ጠቅላላ ወጪ</td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata"></td>
                                        <td class="tabledata">{{$wuloabel + ($desertalw* ($date_diference - 1)) + $night_price + $desertalw + $memeles_price + $desertalw + $guzo_price + $desertalw}}</td>
                                    </tr>
                                    </tbody>
                                </table>




                                <div class="grid grid-cols-2 my-20">
                                    <div class="ml-10">
                                    <u><h3>መስክ ስራ የቆየዉ ሰራተኛ</h3></u>

                                <h4>ስም<u class="px-4">{{$name}} </u><span>ፊርማ----------------</span></h4>

                                <u><h3>ያረጋገጠዉ ሃላፊ</h3></u>
                                <h4>ስም----------------<span>ፊርማ----------------</span></h4>
                                </div>

                                <div class="pr-20">
                                    <u  style="text-align: right;"><h3>ሂሳቡን ያዘጋጀው  ሰራተኛ</h3></u>
                                <h4 style="text-align: right;">ስም----------------<span>ፊርማ----------------</span></h4>
                                <u  style="text-align: right;"><h3>ሂሳቡን ያረጋገጠዉ  ሃላፊ</h3></u>
                                <h4 style="text-align: right;">ስም----------------<span>ፊርማ----------------</span></h4>

                                </div>
                                </div>
                              </div>
    </div>





    <script>
       window.onload = function () {
         document.getElementById("download").addEventListener("click", () => {
            const invoice = this.document.getElementById("invoice");
              console.log(invoice);
               console.log(window);
              let  opt = {
                margin: [0,0,0,0],
                filename: 'allowance.pdf',
                image: { type: 'jpeg', quality: 1 },
                pagebreak: {  before: "break", after: "1cm" },
                html2canvas: { scale: 4 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
            html2pdf().from(invoice).set(opt).save();
        });
        }
    </script>








    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

</html>