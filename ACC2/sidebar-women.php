
<div class="content-block" id="search-filters">
    <h2 class="searchformtitle">Search by Name</h2>
<form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform" class="women">
    <input type="text" name="s" placeholder=" - SEARCH BY NAME - "/>
    <input type="hidden" name="post_type" value="women" /> <!-- // hidden 'women' value -->
    <input type="submit" alt="Search" value="GO" />
</form>
</div>
<div class="content-block">
    <h2 class="searchformtitle">Filter by Specialty</h2>
<?php /* You can also leave 'action' blank: action="" */ ?>
<!--<form method="post" action="<?php //echo $_SERVER['PHP_SELF']; ?>">-->
<form method="post" action="<?php echo site_url('/'); ?>results-by-specialty/" class="women">
    <select name="filterbyspec" id="spec" class="postform" onchange="submit();">
            <option selected="selected">- SELECT - </option>
            <option value="ACHD/Peds">ACHD/Peds</option>
            <option value="EP">EP</option>
            <option value="General/Prevention">General/Prevention</option>
            <option value="Heart Failure/Transplant">Heart Failure/Transplant</option>
            <option value="Imaging">Imaging</option>
            <option value="Interventional/Structural">Interventional/Structural</option>
           <!-- <option value="Other">Other</option>-->
    </select>
</form>
<?php /* Reset filter */ ?>
<p><a href="<?php echo site_url('/'); ?>women-test/">Clear filter</a></p>
</div>
<a href="#top" style="line-height:50px;" class="mobile-only">Back to top</a>