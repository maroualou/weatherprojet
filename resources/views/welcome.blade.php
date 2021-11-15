<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Weather App</title>

        <!-- Fonts -->
        <link href="/css/app.css" rel="stylesheet">
       <script src="/js/app.js" defer ></script>
    </head>
    <body style="background-color: rgb(175, 198, 248)" >

<div  class="flex justify-center pt-16"  >
           
            <div class="text-white mb-8 ">
              <div class="places-input text-gray-800">
               <form class="w-full" method="post" action="/">
                  <input type="text" class="text" placeholder="Enter city name" name="search" value=" "/>
                  <input type="submit" value="Submit" class="submit" name="submit"/>
                </form>
              </div>
        @if($status=="yes")
        <div class="weather-container font-sans w-128 max-w-lg rounded-lg overflow-hidden bg-gray-900 shadow-lg mt-4 ">
            <div class="current-weather flex items-center justify-between px-6 py-8">
              <div class="flex items-center">
                 <div>
                    <div class="text-6xl font-semibold ">{{round($results['main']['temp']-273.15)}}</div>
                    <div>{{round($results['main']['feels_like']-273.15)}}</div>
                 </div>
              <div class="mx-5">
              <div class="font-semibold">{{$results['weather'][0]['main']}}</div>
              <div>{{$results['name']}}</div>
              </div>
              </div>
              <div>
                <img src="http://openweathermap.org/img/wn/{{$results['weather'][0]['icon']}}@4x.png"/>
              </div>
            </div><!-- end current-weather -->
            <div class="future-weather text-sm bg-gray-800 px-6 py-8 overflow-hidden">
              <div class="flex items-center mt-8">
              <div class="w-1/6 text-lg text-gray-200">MON</div>
              <div class="w-4/6 px-4 flex items-center">
              <div>icon</div>
              <div class="ml-3">Cloudy with a chance of showers</div>
              </div>
              <div class="w-1/6 text-right">
                 <div>5°C</div>
                 <div>-2 °C</div>
              </div>
              </div>       
            </div><!-- end future-weather -->
          </div><!-- end weather-container-->
        @endif
    </div>    
</div> 
    </body>
</html>
