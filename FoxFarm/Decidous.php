<?php
	include('head.php');
?>
<html>
	<?php
		head('Deciduous');
	?>
	<body>
		<?php
			nav();
		?>
		<div class='container'>
			<div class='page-header'>
				<h1>Deciduous</h1>
			</div>
			<div id="farmpics" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#farmpics" data-slide-to="0" class="active"></li>
					<li data-target="#farmpics" data-slide-to="1"></li>
					<li data-target="#farmpics" data-slide-to="2"></li>
					<li data-target="#farmpics" data-slide-to="3"></li>
					<li data-target="#farmpics" data-slide-to="4"></li>
					<li data-target="#farmpics" data-slide-to="5"></li>
					<li data-target="#farmpics" data-slide-to="6"></li>
					<li data-target="#farmpics" data-slide-to="7"></li>
				</ol>

				<div class="carousel-inner">
					<div class="item active">
						<img src="pics\decidous\1.jpg" alt="" style='height: 100%; margin: auto'>
					</div>

					<div class="item">
						<img src="pics\decidous\2.jpg" alt="" style='height: 100%; margin: auto'>
					</div>

					<div class="item">
						<img src="pics\decidous\3.jpg" alt="" style='height: 100%; margin: auto'>
					</div>
					
					<div class="item">
						<img src="pics\decidous\4.jpg" alt="" style='height: 100%; margin: auto'>
					</div>
					
					<div class="item">
						<img src="pics\decidous\5.jpg" alt="" style='height: 100%; margin: auto'>
					</div>
					
					<div class="item">
						<img src="pics\decidous\6.jpg" alt="" style='height: 100%; margin: auto'>
					</div>
					
					<div class="item">
						<img src="pics\decidous\7.jpg" alt="" style='height: 100%; margin: auto'>
					</div>
					
					<div class="item">
						<img src="pics\decidous\8.jpg" alt="" style='height: 100%; margin: auto'>
					</div>
				</div>

				<a class="left carousel-control" href="#farmpics" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#farmpics" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<h2 style='color: green;'>Deciduous Trees:</h2>
			<div class='panel-group' id='decidous'>
				<div class='panel panel-success'>
					<div class='panel-heading'>
						<h4 class='panel-title'>
							<a data-toggle='collapse' data-parent='#decidous' href='#ninebark'>
								Ninebark (Physocarpus opulifolius)
							</a>
						</h4>
					</div>
					<div class= 'panel-collapse collapse' id='ninebark'>
						<div class='panel-body'>
							<h4>An upright spreading shrub that flowers white or pinkish in May-June.  A medium to fast grower to 5-7' high by about the same wide. (Zones 2-7)</h4>
						</div>
					</div>
				</div>
				<div class='panel panel-success'>
					<div class='panel-heading'>
						<h4 class='panel-title'>
							<a data-toggle='collapse' data-parent='#decidous' href='#nankingcherry'>
								Nanking Cherry (Prunus tomentosa)
							</a>
						</h4>
					</div>
					<div class= 'panel-collapse collapse' id='nankingcherry'>
						<div class='panel-body'>
							<h4>One of the earliest flowering in the prunus species.  Starting out pink opening to white in early to mid-April.  Fruits are edible, ripening in June through July. (Zones 2-7)</h4>
						</div>
					</div>
				</div>
				<div class='panel panel-success'>
					<div class='panel-heading'>
						<h4 class='panel-title'>
							<a data-toggle='collapse' data-parent='#decidous' href='#sandcherry'>
								Sand Cherry (Prunus besseyi)
							</a>
						</h4>
					</div>
					<div class= 'panel-collapse collapse' id='sandcherry'>
						<div class='panel-body'>
							<h4>This cherry has an attractive gray-green leaf color that is different from other prunus species.  White flowers fill the branches in late April to early May.  Grows to 4-6' high and wide.  (Zones 3-6)</h4>
						</div>
					</div>
				</div>
				<div class='panel panel-success'>
					<div class='panel-heading'>
						<h4 class='panel-title'>
							<a data-toggle='collapse' data-parent='#decidous' href='#redosier'>
								Red Osier Dogwood (Cornus sericea)
							</a>
						</h4>
					</div>
					<div class= 'panel-collapse collapse' id='redosier'>
						<div class='panel-body'>
							<h4>Medium to dark green leaf color in summer, purplish to reddish in the fall.  Flowers white in late May to early June.  Excellent for grouping in large areas or as a shrub border.  7' to 9' in height spreading to 10' or more.  (Zones 2-8)</h4>
						</div>
					</div>
				</div>
				<div class='panel panel-success'>
					<div class='panel-heading'>
						<h4 class='panel-title'>
							<a data-toggle='collapse' data-parent='#decidous' href='#silkydogwood'>
								Silky Dogwood (Cornus amomum)
							</a>
						</h4>
					</div>
					<div class= 'panel-collapse collapse' id='silkydogwood'>
						<div class='panel-body'>
							<h4>Mainly used for shrub boarders.  Grows well in wetter soils.  Has a medium growth rate to 6'-10' by about 6'-10' wide.  (Zones 5-8)</h4>
						</div>
					</div>
				</div>
				<div class='panel panel-success'>
					<div class='panel-heading'>
						<h4 class='panel-title'>
							<a data-toggle='collapse' data-parent='#decidous' href='#redmaple'>
								Red Maple (Acer Rubrum)
							</a>
						</h4>
					</div>
					<div class= 'panel-collapse collapse' id='redmaple'>
						<div class='panel-body'>
							<h4>Emerging leaves are reddish tinged slowly changing to medium dark green, in the fall, color varies from greenish yellow to brilliant red.  Grows to 40' to 60' in height by the same in width.  (Zones 3-9)</h4>
						</div>
					</div>
				</div>
				<div class='panel panel-success'>
					<div class='panel-heading'>
						<h4 class='panel-title'>
							<a data-toggle='collapse' data-parent='#decidous' href='#redoak'>
								Red Oak (Quercus rubra)
							</a>
						</h4>
					</div>
					<div class= 'panel-collapse collapse' id='redoak'>
						<div class='panel-body'>
							<h4>Nice bright red fall color.  One of the fastest growing oaks, about 1' per year.  Prefers sandy loam soils.  60-75' in height by about the same width.  (Zones 4-8)</h4>
						</div>
					</div>
				</div>
				<div class='panel panel-success'>
					<div class='panel-heading'>
						<h4 class='panel-title'>
							<a data-toggle='collapse' data-parent='#decidous' href='#blackwalnut'>
								Black Walnut (Juglans nigra)
							</a>
						</h4>
					</div>
					<div class= 'panel-collapse collapse' id='blackwalnut'>
						<div class='panel-body'>
							 <h4>A large tree, 50-75' in height by about the same wide.  The wood is highly prized for cabinets and many other furniture pieces. (Zones 4-9)</h4>
						</div>
					</div>
				</div>
				<div class='panel panel-success'>
					<div class='panel-heading'>
						<h4 class='panel-title'>
							<a data-toggle='collapse' data-parent='#decidous' href='#butterflybush'>
								Butterfly Bush (Buddleia davidii)
							</a>
						</h4>
					</div>
					<div class= 'panel-collapse collapse' id='butterflybush'>
						<div class='panel-body'>
							  <h4>Also known as the Summer Lilac.  This is a large durable shrub usually ranging from 5-10' high or taller. Best if pruned to the ground in spring. Gray-green to blue-green leaves and prefers full sun. Beautiful fragrant purple flowers in the summer which attract plenty of butterflies! (Zones 6-8)</h4>
						</div>
					</div>
				</div>
				<div class='panel panel-success'>
					<div class='panel-heading'>
						<h4 class='panel-title'>
							<a data-toggle='collapse' data-parent='#decidous' href='#commonlilac'>
								Common Lilac (Syringa vulgaris)
							</a>
						</h4>
					</div>
					<div class= 'panel-collapse collapse' id='commonlilac'>
						<div class='panel-body'>
							 <h4>8-15' in height with a spread of 6-12'.  Fragrant, purple flowers appear early to mid-May.  Best if grouped or used as a shrub border. (Zones 3-8)</h4>
						</div>
					</div>
				</div>
				<div class='panel panel-success'>
					<div class='panel-heading'>
						<h4 class='panel-title'>
							<a data-toggle='collapse' data-parent='#decidous' href='#rosesharon'>
								Rose of Sharon (Hibiscus syriacus)
							</a>
						</h4>
					</div>
					<div class= 'panel-collapse collapse' id='rosesharon'>
						<div class='panel-body'>
							 <h4>Great as a small plant that also transplants well.  Grows in all types of soils, except very wet or very dry, prefers full sun or partial shade, and loves warmer temperatures.  Produces beautiful late season 5-petaled purple or violet flowers . (Zones 5-9)</h4>
						</div>
					</div>
				</div>
				<div class='panel panel-success'>
					<div class='panel-heading'>
						<h4 class='panel-title'>
							<a data-toggle='collapse' data-parent='#decidous' href='#trumpetvine'>
								Trumpet Vine (Campsis radicans)
							</a>
						</h4>
					</div>
					<div class= 'panel-collapse collapse' id='trumpetvine'>
						<div class='panel-body'>
							<h4>30-40' high and will rapidly spread to cover anything in it's way, like a trellis, lathing and fences.  Produces orange (trumpet like) flowers from June to September. Best to prune back in the spring.  Hummingbirds love this vine too! (Zones 4-9)</h4>
						</div>
					</div>
				</div>
				<div class='panel panel-success'>
					<div class='panel-heading'>
						<h4 class='panel-title'>
							<a data-toggle='collapse' data-parent='#decidous' href='#whitebirch'>
								White Birch (Betula papyrifera)
							</a>
						</h4>
					</div>
					<div class= 'panel-collapse collapse' id='whitebirch'>
						<div class='panel-body'>
							<h4>Also known as Paper Birch.  Medium to fast growing tree averaging 1 1/2 to 2' of growth per year.  Dark green leaves in the summer changing to yellow in the fall. Best if grown in cooler climates, but in full sun with acid, sandy or silty loams. (Zones 2-7)</h4>
						</div>
					</div>
				</div>
				<div class='panel panel-success'>
					<div class='panel-heading'>
						<h4 class='panel-title'>
							<a data-toggle='collapse' data-parent='#decidous' href='#cranberry'>
								Cranberry (Viburnum trilobum)
							</a>
						</h4>
					</div>
					<div class= 'panel-collapse collapse' id='cranberry'>
						<div class='panel-body'>
							<h4>This shrub provides excellent flower, fruit and foliage!  Leaves have medium to dark green color turning yellow to red-purple in the fall.  The cranberry has great winter interest with it's bright red berries.  It likes well-drained, moist soil with sun to partial shade. (Zones 2-7)</h4>
						</div>
					</div>
				</div>
				<div class='panel panel-success'>
					<div class='panel-heading'>
						<h4 class='panel-title'>
							<a data-toggle='collapse' data-parent='#decidous' href='#forsythia'>
								Forsythia (Forsythia x intermedia)
							</a>
						</h4>
					</div>
					<div class= 'panel-collapse collapse' id='forsythia'>
						<div class='panel-body'>
							<h4>Fast. upright growing shrub, dark green leaves in summer to yellow-green leaves in fall.  One of the earliest shrubs to flower in the spring with deep to light yellow flowers. Likes all types of soil, but for maximum flowers plant in full sun. (Zones 6-9)</h4>
						</div>
					</div>
				</div>
				<div class='panel panel-success'>
					<div class='panel-heading'>
						<h4 class='panel-title'>
							<a data-toggle='collapse' data-parent='#decidous' href='#redbarberry'>
								Red Barberry (Berberis thunbergii)
							</a>
						</h4>
					</div>
					<div class= 'panel-collapse collapse' id='redbarberry'>
						<div class='panel-body'>
							<h4>3-6' by 4-7' great to use as a hedge, barrier or in groupings.  Green leaves in the summer changing to reddish purple in the fall.  It is easily transplanted and highly adaptable, however, avoid extremely moist conditions.  (Zones 4-8)</h4>
						</div>
					</div>
				</div>
				<div class='panel panel-success'>
					<div class='panel-heading'>
						<h4 class='panel-title'>
							<a data-toggle='collapse' data-parent='#decidous' href='#rosarugosa'>
								Rosa Rugosa
							</a>
						</h4>
					</div>
					<div class= 'panel-collapse collapse' id='rosarugosa'>
						<div class='panel-body'>
							<h4> 4-6' high & wide.  This is a fast, tolerant, easy to grow flowering (June through August) shrub.  This shrub is perfect for hard to grow sites like banks, fills, sandy soils and saline lands. The fragrant flowers have a beautiful rose to purple color, 2 1/2 to 3 1/2" across. (Zones 2-8)</h4>
						</div>
					</div>
				</div>
				<div class='panel panel-success'>
					<div class='panel-heading'>
						<h4 class='panel-title'>
							<a data-toggle='collapse' data-parent='#decidous' href='#rosarubrifolia'>
								Rosa Rubrifolia
							</a>
						</h4>
					</div>
					<div class= 'panel-collapse collapse' id='rosarubrifolia'>
						<div class='panel-body'>
							<h4>Also known as the Redleaf Rose grows to 5-7' high, very dense and spreads out it's purplish leaves. This shrub produces pink with a white center 1 1/2" wide flowers in July-August.  They are hardy and disease free and beautiful in large groupings. (Zones 2-8)</h4>
						</div>
					</div>
				</div>
				<div class='panel panel-success'>
					<div class='panel-heading'>
						<h4 class='panel-title'>
							<a data-toggle='collapse' data-parent='#decidous' href='#fountaingrass'>
								Fountain Grass (Pennisetum alopecuroides)
							</a>
						</h4>
					</div>
					<div class= 'panel-collapse collapse' id='fountaingrass'>
						<div class='panel-body'>
							<h4>This grass grows 2-4' tall and likes full sun to partial shade.  Great to line driveways and sidewalks.  Produces beautiful feathery plumes in late summer to early fall.  (Zones 5-9)</h4>
						</div>
					</div>
				</div>
			</div>
			<div class='well'>
				<table class='table'>
					<thead>
						<th>Size</th>
						<th>Unit Price 100</th>
						<th>Unit Price 1000</th>
					</thead>
					<tbody>
						<tr>
							<td>6"-12"</td>
							<td>$0.64</td>
							<td>$0.32</td>
						</tr>
						<tr>
							<td>12"-18"</td>
							<td>$0.84</td>
							<td>$0.42</td>
						</tr>
						<tr>
							<td>18"-24"</td>
							<td>$1.04</td>
							<td>$0.52</td>
						</tr>
						<tr>
							<td>24"-30"</td>
							<td>$1.24</td>
							<td>$0.62</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class='panel-group' id='redwood'>
				<div class='panel panel-success'>
					<div class='panel-heading'>
						<h4 class='panel-title'>
							<a data-toggle='collapse' data-parent='#redwood' href='#dawnredwood'>
								Dawn Redwood (Metasequoia glyptostroboides)
							</a>
						</h4>
					</div>
					<div class= 'panel-collapse collapse' id='dawnredwood'>
						<div class='panel-body'>
							<h4>Easy to transplant, effective as a screen or grouping to line drives or streets.  Likes moist, deep, well drained acid soils. Bright green leaf color changing to brown in the fall. 70 -100' in height by 25' spread. ( Zones 4-8)</h4>
						</div>
					</div>
				</div>
			</div>
			<div class='well'>
				<table class='table'>
					<thead>
						<th>Size</th>
						<th>Unit Price 100</th>
						<th>Unit Price 1000</th>
					</thead>
					<tbody>
						<tr>
							<td>6"-12"</td>
							<td>$1.28</td>
							<td>$0.64</td>
						</tr>
						<tr>
							<td>12"-18"</td>
							<td>$1.68</td>
							<td>$0.84</td>
						</tr>
						<tr>
							<td>18"-24"</td>
							<td>$2.08</td>
							<td>$1.04</td>
						</tr>
						<tr>
							<td>24"-30"</td>
							<td>$2.48</td>
							<td>$1.24</td>
						</tr>
					</tbody>
				</table>
				<h1 style='color: red; text-align: center;'>*All trees sold in multiples of 25 only*</h1>
			</div>
			<div class='panel-group' id='poplar'>
				<div class='panel panel-success'>
					<div class='panel-heading'>
						<h4 class='panel-title'>
							<a data-toggle='collapse' data-parent='#poplar' href='#hybridpoplar'>
								Hybrid Poplar(Imperial Carolina) & Hybrid Willow
							</a>
						</h4>
					</div>
					<div class= 'panel-collapse collapse' id='hybridpoplar'>
						<div class='panel-body'>
							<h4>A very fast growing tree, up to 4'-5' per year.  Used to establish a fast windbreak, screen, or for fast shade.  Also, can be harvested for firewood in 6-8 years.  This is not the Lombardy poplar which is short lived.  It is a hybrid resistant to disease and insects.  Grows 50' to 60' tall by about 30' wide.  (Zones 3-9)</h4>
						</div>
					</div>
				</div>
			</div>
			<div class='well'>
				<table class='table'>
					<thead>
						<th>Size</th>
						<th>Unit Price 100</th>
						<th>Unit Price 1000</th>
					</thead>
					<tbody>
						<tr>
							<td>1'-2'</td>
							<td>$0.52</td>
							<td>$0.26</td>
						</tr>
						<tr>
							<td>2'-3'</td>
							<td>$1.00</td>
							<td>$0.50</td>
						</tr>
						<tr>
							<td>3'-4'</td>
							<td>$1.60</td>
							<td>$0.80</td>
						</tr>
						<tr>
							<td>4'-5'</td>
							<td>$2.00</td>
							<td>$1.25</td>
						</tr>
					</tbody>
				</table>
				<h1 style='color: red; text-align: center;'>*All trees sold in multiples of 25 only*</h1>
			</div>
		</div>
	</body>
</html>