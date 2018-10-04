
<?php 
$menu_sidebar=[
	['Dashboards','home','mdi-speedometer',0],
	['Icon','listicon','mdi-album',0]
	
];
$listsidebar='';
$c=0;
foreach ($menu_sidebar as $key) {
	$listsidebar .='<li>';
	if($key[3]==0 || $c==0)
	{

			$listsidebar .='<a href="'.$key[1].'">
						<i class="mdi '.$key[2].'"></i>
						<span>'.$key[0].'</span>
				</a>';


	}
	else
	{
	$listsidebar .='<a href="javascript: void(0);">
							<i class="mdi '.$key[2].'"></i>
							<span>'.$key[0].'</span>
							<span class="menu-arrow">
								<i class="mdi mdi-chevron-right"></i>
							</span>
						</a><ul class="nav-second-level" aria-expanded="false">';
						$listsub='';
						foreach (ceklist($menu_sidebar,$c) as $k_sub) {
							$listsub .='<li><a href="'.$k_sub[1].'">'.$k_sub[0].'</a></li>';
						}

	$listsidebar .=$listsub.'</ul>';
	}
	$c++;
	$listsidebar .='<li>';
	/*<ul class="nav-second-level" aria-expanded="false">
									<li><a href="email-inbox.html">Inbox</a></li>
								</ul>*/
}
function ceklist($menu_sidebar,$parrent)
{	$listsub=[];
	foreach ($menu_sidebar as $key) {
		if($key[3]==$parrent)
		{
			$listsub[]=$key;
		}

	}
	return $listsub;
}

 ?>

<div class="page-wrapper">
		<!-- Left Sidenav -->
		<div class="left-sidenav">
			<div class="position-fixed">
			<ul class="metismenu left-sidenav-menu" id="side-nav">
				<li class="menu-title">Main</li>
				<?php echo $listsidebar ; ?>	

			</ul>
		</div>
		</div>
		<!-- end left-sidenav-->