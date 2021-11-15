
  
  <link href="/css/app.css" rel="stylesheet">
  <script src="/js/app.js" defer ></script>
  
<div  class="flex justify-center pt-16" style="background-color: rgb(175, 198, 248)" >
           
  <div class="text-white mb-8 ">
    <div class="places-input text-gray-800">
     <form class="w-full" method="post" action="/">
        <input type="text" class="text" placeholder="Enter city name" name="search" value=" "/>
        <input type="submit" value="Submit" class="submit" name="submit"/>
      </form>
    </div>
    
    <div class="weather-container font-sans w-128 max-w-lg rounded-lg overflow-hidden bg-gray-900 shadow-lg mt-4 ">
      <div class="current-weather flex items-center justify-between px-6 py-8">
        <div class="flex items-center">
           <div>
              <div class="text-6xl font-semibold "></div>
              <div>Feels like 2°C</div>
           </div>
        <div class="mx-5">
        <div class="font-semibold">Cloudy</div>
        <div>Toronto, Canada</div>
        </div>
        </div>
        <div>icon</div>
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
   </div> 
       
    
 </div> 
  
   





<script>
    export default {
        mounted() {
           this.fetchData()
        },
        methods:{
            fetchData(){
                fetch('https://cors-anywhere.herokuapp.com/http://api.openweathermap.org/data/2.5/weather?q=$city&appid=49c0bad2c7458f1c76bec9654081a661')
                .then(response => response.json())
                .then(data => {
                    console.log(data)
                })
            }
        }
    }
</script>