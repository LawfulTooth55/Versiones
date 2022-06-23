<title>School Camp</title>
@extends('layouts.Myapp')
@section('title', __('Dashboard'))
@section('content2')
<!-- -->
<!--Header-->
<div class="w-full m-0 p-0 bg-cover bg-bottom" style="background-image:url('https://w.wallhaven.cc/full/4o/wallhaven-4o511l.jpg'); height: 60vh; max-height:460px;">
			<div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
				<!--Title-->
					<p class="text-white font-extrabold text-3xl md:text-5xl">
						Bienvenido
					</p>
					<p class="text-xl md:text-2xl text-gray-500">Un famoso explorador una vez dijo que lo extraordinario está en lo que hacemos, no en quiénes somos. (Lara Croft, Tomb Raider)</p>
			</div>
		</div>
		
		<!--Container-->
		<div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">
			
			<div class="mx-0 sm:mx-6">
				
				<!--Nav-->
				<nav class="mt-0 w-full">
					<div class="container mx-auto flex items-center">


						<div class="flex w-1/2 justify-end content-center">		
							
							<a class="inline-block text-gray-500 no-underline hover:text-white hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 avatar" data-tippy-content="School Camp" href="https://www.facebook.com/SchoolCamp2020">
								<svg class="fill-current h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M19 6h5V0h-5c-3.86 0-7 3.14-7 7v3H8v6h4v16h6V16h5l1-6h-6V7c0-.542.458-1 1-1z"></path></svg>
							</a>
						</div>

					</div>
				</nav>

				<div class="bg-gray-200 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
					
				<!--Lead Card-->
				<div class="flex h-full bg-white rounded overflow-hidden shadow-lg">
					<a class="flex flex-wrap no-underline hover:no-underline">
						<div class="w-full md:w-2/3 rounded-t">	
							<img src="https://w.wallhaven.cc/full/96/wallhaven-96813x.jpg" class="h-full w-full shadow">
						</div>

						<div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
							<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
								<p class="w-full text-gray-600 text-xs md:text-sm pt-6 px-6">Comencemos</p>
								<div class="w-full font-bold text-xl text-gray-900 px-6">👋 Hola, esperemos que estar aquí sea de tu agrado, recuerda que el conocimiento es poder</div>
								<br>
								<p class="text-gray-800 font-serif text-base px-6 mb-5">
									Recuerda Leer bien los talleres y escoger bien el que más te guste, también revisa las sedes para que el taller te quede más cerca
								</p>
							</div>

							<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
								<div class="flex items-center justify-between">
									<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="School Camp" src="http://i.pravatar.cc/300" alt="Avatar of School">
									<p class="text-gray-600 text-xs md:text-sm"></p>
								</div>
							</div>
						</div>

					</a>
				</div>
				<!--/Lead Card-->


				<!--Posts Container-->
				<div class="flex flex-wrap justify-between pt-12 -mx-6">

					<!--1/3 col -->
					<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
						<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
							<a href="{{ url('/registroalumno/create') }}" class="flex flex-wrap no-underline hover:no-underline">
								<img src="http://rockbotic.com/wp-content/uploads/2019/10/20190319_110333-3-min.jpg" class="h-64 w-full rounded-t pb-6">
								
								<div class="w-full font-bold text-xl text-gray-900 px-6">ROBOTICA</div>
								<p class="text-gray-800 font-serif text-base px-6 mb-5">
									Aprende las normas de la robótica, desde las leyes teóricas, hasta la contrucción de proyectos como un brazo robótico y un seguidor de líena 
								</p>
							</a>
						</div>
						<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
							<div class="flex items-center justify-between">
								<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="School Camp" src="http://i.pravatar.cc/300" alt="Avatar of">
								
							</div>
						</div>
					</div>
				
					
					<!--1/3 col -->
					<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
						<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
							<a href="{{ url('/registroalumno/create') }}" class="flex flex-wrap no-underline hover:no-underline">
								<img src="https://acogida.upct.es/wp-content/uploads/2019/09/taller_cocina.png" class="h-64 w-full rounded-t pb-6">
								
								<div class="w-full font-bold text-xl text-gray-900 px-6">COCINA</div>
								<p class="text-gray-800 font-serif text-base px-6 mb-5">
									¿Quieres competir en Master Junior? Esta es tu oportunidad para ser un gran cocinero, y poder impresionar a tu paladar 
								</p>
							</a>
							</div>
						<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
							<div class="flex items-center justify-between">
								<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="School Camp" src="http://i.pravatar.cc/300" alt="Avatar of School">
								
							</div>
						</div>
					</div>

					<!--1/3 col -->
					<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
						<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
							<a href="{{ url('/registroalumno/create') }}" class="flex flex-wrap no-underline hover:no-underline">
								<img src="https://www.hogarmania.com/archivos/201908/decorar-un-estudio-de-taller-y-pintura-en-casa-colores-calidos-buhardilla-XxXx80.jpg" class="h-64 w-full rounded-t pb-6">
								
								<div class="w-full  font-bold text-xl text-gray-900 px-6">PINTURA</div>
								<p class="text-gray-800 font-serif text-base px-6 mb-5">
									Entra y conviertete en el próximo Vincent van Gogh pero con ambas orejas o podrías ser la próxima Angelina Beloff
								</p>
							</a>
						</div>
						<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
							<div class="flex items-center justify-between">
								<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="School Camp" src="http://i.pravatar.cc/300" alt="Avatar of School">
								
							</div>
						</div>
					</div>


					<!--1/2 col -->
					<div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
						<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
							<a href="{{ url('/registroalumno/create') }}" class="flex flex-wrap no-underline hover:no-underline">
								<img src="https://i.blogs.es/1e25b6/ajedrez/840_560.jpeg" class="h-full w-full rounded-t pb-6">
								
								<div class="w-full font-bold text-xl text-gray-900 px-6">AJEDREZ</div>
								<p class="text-gray-800 font-serif text-base px-6 mb-5">
									Aprende las técnicas básicas del ajedrez y conviértete en el próximo campeón mundial
								</p>
							</a>
						</div>
						<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
							<div class="flex items-center justify-between">
								<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="School Camp" src="http://i.pravatar.cc/300" alt="Avatar of School">
								
							</div>
						</div>
					</div>

					<!--1/2 col -->
					<div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
						<div class="flex-1 flex-row bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
							<a href="{{ url('/registroalumno/create') }}" class="flex flex-wrap no-underline hover:no-underline">	
								<img src="https://elcapitalino.mx/wp-content/uploads/2020/10/esports-logo.png" class="h-full w-full rounded-t pb-6">
								
								<div class="w-full font-bold text-xl text-gray-900 px-6">ESPORTS</div>
								<p class="text-gray-800 font-serif text-base px-6 mb-5">
									Conviértete en una leyenda en el mundo del gaming 
								</p>
							</a>
						</div>

						<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
							<div class="flex items-center justify-between">
								<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="School Camp" src="http://i.pravatar.cc/300" alt="School Camp">
							</div>
						</div>
					</div>

				</div>	
			</div>
		</div>
	

	</div>


	    <!--Footer-->
		<footer class="bg-white">
      <div class="container mx-auto px-8">
        <div class="w-full flex flex-col md:flex-row py-6">
          <div class="flex-1 mb-6 text-black">
            <a class="text-pink-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
              <!--Icon from: http://www.potlabicons.com/ -->
              <svg class="h-8 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005">
                <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767" height="50.502" transform="matrix(1,0,0,1,0,0)" />
                <path
                  class="plane-take-off"
                  d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z "
                />
              </svg>
              School Camp
            </a>
          </div>
         
         
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Social</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="https://www.facebook.com/SchoolCamp2020" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Facebook</a>
              </li>
			  <li>
				  <a href="/perfil">Prueba</a>
			  </li>
            </ul>
          </div>
          
        </div>
      </div>
      
    </footer>

	<script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
	<script src="https://unpkg.com/tippy.js@4"></script>
	<script>
		//Init tooltips
		tippy('.avatar')
	</script>
@endsection



<!-- -->

