<?php

class DashboardUi
{
	public static function draw($title, $count, $url)
	{
		echo "
			<div class='col-md-6'> 
				<div class='inner-panel' style='height: 20% padding: 20px; padding-top: 25px;'> 
					<div style='display: flex; align-items: center; justify-content: space-between;'>
						<a href='$url'><h3 style='font-size: 25px;'>$title</h3></a>
						<span class='d-count' style='margin-right: 30px;'>$count</span>
					</div>
				</div> 
			</div> 
		";
	}
}
