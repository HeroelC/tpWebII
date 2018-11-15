
<div class="bordeArribaCarousel">
 </div>
<div id="myCarousel" class="carousel slide maxCarousel" data-ride="carousel">
  <!-- <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
  </ol> -->
   <!-- Wrapper for slides -->
   {$cantidad = count($imagenes)}
  <div class="carousel-inner imgCarousel">
    <div class="item active">
      <img src="{$imagenes[0]['url']}">
    </div>
    {for $i=1 to $cantidad-1}
      <div class="item">
        <img src="{$imagenes[$i]['url']}">
      </div>
    {/for}

  </div>
   <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="bordeAbajoCarousel">
 </div>
