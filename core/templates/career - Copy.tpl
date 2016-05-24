<?php
///////////////////////////////////////////////
///  Pilot Career Page v1.1 by php-mods.eu  ///
///            Author php-mods.eu           ///
///            Packed at 3/1/2013           ///
///     Copyright (c) 2013, php-mods.eu     ///
///////////////////////////////////////////////

?>
<h3>Pilot Ranks</h3>
<table id="tabledlist" class="tablesorter">
<thead>
<tr>
	<th>Rank Title</th>
    <th>Minimum Hours</th>
    <th>Pay Rate/Hour</th>
	<th>Can Fly</th>
	<th>Rank Image</th>
	</tr>
</thead>
<tbody>
<?php
foreach($ranks as $rank)
{
?>
<tr id="row<?php echo $rank->rankid;?>">
	<td align="center" width="30%"><?php echo $rank->rank; ?></td>
    <td align="center" width="15%"><?php echo $rank->minhours; ?></td>
    <td align="center" width="20%">$<?php echo $rank->payrate; ?>/hr</td>
	<td align="center" width="20%"> 
    <?php $rankai = CareerData::getaircrafts($rank->rankid); 
if(!$rankai)
            {echo 'All the aircraft';}
            else {
foreach($rankai as $ran)
{
?><?php echo $ran->icao; ?> <?php } } ?></td>
	<td align="center" width="25%"><img src="<?php echo $rank->rankimage; ?>" /></td>
	</tr>
<?php
}
?>
</tbody>
</table>
<br />
<h3>Awards</h3>
<table id="tabledlist" class="tablesorter">
<thead>
<tr>
	<th>Award</th>
    <th>Description</th>
	<th>Image</th>
	</tr>
</thead>
<tbody>
<?php
foreach($generaward as $gen)
{
?>
<tr id="row<?php echo $gen->awardid;?>">
	<td align="center" width="20%"><?php echo $gen->name; ?></td>
    <td align="center" width="60%"><?php echo $gen->descrip; ?></td>
	<td align="center" width="20%"><img src="<?php echo $gen->image; ?>" /></td>
	</tr>
<?php
}
?>
</tbody>
</table>
<br />