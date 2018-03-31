@extends('layout.main')

@section('title', "About Us")

@include('headers.contact')

@section('main-content')
<div class="col-md-12">
											 <div class="card">
													 <div class="card card-header" id = 'about'>
															 Get to know: <b>Cover & Pages</b>

                           <div class="card card-body" align = 'center'>
                             <iframe src="https://www.google.com/maps/embed?pb=!4v1519610666135!6m8!1m7!1stlSrqfLkqim88PZPSXjrMA!2m2!1d14.58267070020254!2d121.016117658042!3f353.76827095109314!4f-28.266224259852784!5f0.7820865974627469" width="100%" height="480" frameborder="0" style="border:0" allowfullscreen></iframe>
													 </div>

                           <div class = 'row'>
														 <div class="col-lg-3 md-4"><div class = 'card card-body'>
														 <img src = "{{ asset('img/logo1.png') }}" height = '30%'></div>
													 </div>

                             <div class="col-lg-9 md-4">
                               <div class="card card-chart">
                                    <div class="card-header">
                                       <h5> History </h5></div>
                                       <div class="card-body" align = 'justify'>
                                         <p> <b>Cover & Pages</b> is a printing press that was founded in 1986 by Jesus Crisologo and his siblings, and it started out in a small garage with only a handful of machines and a few workers.
																					   <br><br> <b>Cover & Pages</b> started out with offered a very limited product range that only catered to getting small time jobs like brochures and boxes for pharmaceutical companies, books and manuals for government corporations and office forms for private companies. </p></div>
                                      </div>
                                    </div>
                                  </div>

                           <div class = 'row'>
                           <div class="col-lg-4 md-4">
                             <div class="card card-chart">
    													 <div class="card-header">
    															 <h5> Mission </h5> </div>
                                <div class="card-body" align = 'justify'>
    														<p> Being superb in doing pioneering acts in artistry and craftsmanship. At the same time, the company strives to establish lasting business and intellectual relationship with clients. </p></div>
  													 </div>
                             </div>

														 <div class="col-lg-4 md-4">
															 <div class="card card-chart">
																 <div class="card-header">
																		 <h5> Motto </h5> </div>
																	<div class="card-body" align = 'justify'>
																	<p> <b>Cover & Pages</b> really reign supreme! </p></div>
															 </div>
															 </div>

                             <div class="col-lg-4 md-4">
                               <div class="card card-chart">
      													 <div class="card-header">
      															 <h5> Vision </h5> </div>
                                  <div class="card-body" align = 'justify'>
      														<p> Our focus on gaining supremacy in the printing industry while remaining in the forefront in the field of yearbook production </p></div>
    													 </div>
                               </div>
                              </div>

                            <div class = 'row`'>
                            <div class="col-lg-12 md-4">
                              <div class="card card-chart">
                           <div class="card-header">
															 <h5> Who we are? </h5> </div>
                              <div class="card-body">
															 <p> Organizational chart </p> </div>
													 </div>
											 </div>
									 </div>
								 </div>

										 <div class = 'card' id = 'contact'>
											 @include('about.contact');
										 </div>
									 </div>
          </div>
@endsection
