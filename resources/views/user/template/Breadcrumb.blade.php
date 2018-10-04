		<!-- Page Content-->
		
		<div class="page-content">
			<div class="container-fluid">
				<!-- Page-Title -->
				<div class="row">
					<div class="col-sm-12">
						<div class="page-title-box">
							<div class="float-right">
								<ol class="breadcrumb">
									<?php $totalSegsCount = count(Request::segments());
											for($i=1; $i<=$totalSegsCount; $i++)
											{
												echo '<li class="breadcrumb-item"><a href="'.Request::segment($i).'">'.ucwords(str_replace('-','', Request::segment($i))).'</a></li>';										
											}
											?>
								</ol>
							</div>
							<h4 class="page-title">{{ ucwords(str_replace('-','', Request::segment(1))) }}</h4>
						</div>
					</div>
				</div>
				