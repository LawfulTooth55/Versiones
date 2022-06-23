@extends('layouts.Myapp')
@section('corpus')

    <!-- Header -->
    <header id="header">
				<a href="/dashboard" class="title">School Camp</a>
				<nav>
					<ul>
						<li><a href="/dashboard">Inicio</a></li>
						<li><a href="#" class="active">Talleres</a></li>
                        <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Cerrar Sesión') }}
                            </x-dropdown-link>
                        </form>
                        </li>
					</ul>
				</nav>
			</header>
 
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main" class="wrapper">
						<div class="inner">
							<h1 class="major">Talleres</h1>
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Nombre</th>
													<th>sede</th>
													<th>Cupo</th>
										
													<th>Acciones</th>
												</tr>
											</thead>
											<tbody>
												@foreach($vertalleres as $taller)
												<tr>
													<td>{{$taller->taller}}</td>
													<td>{{$taller->sede}}</td>
													<td>{{$taller->cupo}}</td>
													<td></td>
												</tr>
											</tbody>
											@endforeach
										</table>
									</div>
						</div>
					</section>
			</div>
            

		<!-- Footer -->
			<footer id="footer" class="wrapper alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; SchoolCamp. Todos los derechos reservados.</li><li>Design: <a href="#">JD</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->

@endsection

