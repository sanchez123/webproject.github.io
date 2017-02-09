<?php include("includes/head.php"); ?>

<body style="
    background: rgba(153, 122, 51, 0.55);
">
<div class="container" style="background-color:white;">
<?php include("includes/nav.php"); ?>

  <div class="row">
  <div class="col-md-5 col-sm-12">
  <div class="row">
  
  <div class="col-md-12">
  
  <div class="panel panel-default">
    <div class="panel-body">
    <form class="form-horizontal">
    <div class="form-group">
        <label for="search" class="control-label col-xs-2">Search: </label>
        <div class="col-xs-10">
            <select class="form-control">
            <option selected>Music</option>
            <option>Video</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        
        <div class="col-xs-offset-2 col-xs-10">
            <div class="input-group">
  <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
  <input type="text" class="form-control" placeholder="Artist Name" aria-describedby="sizing-addon2">
</div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            <button type="submit" class="btn btn-info">GO</button>
        </div>
    </div>
    </form>
    
    </div>
  </div>
  </div>
  
  <div class="col-md-12">
  
  <div class="panel panel-default">
    <div class="panel-body">
   
    <h4>Related Artists</h4>
    <p style="text-decoration:underline;font-weight:bold;"><a href="#">Artist 1</a></</p>
    <p style="text-decoration:underline;font-weight:bold;"><a href="#">Artist 1</a></p>
    <dl>
    <dt>Popular Tracks</dt>
    <div class="col-xs-6">
    <dd><table class="table table-responsive table-borderless table-condensed" cellspacing="10">
     <style type="text/css">
   .table-borderless tbody tr td,
.table-borderless tbody tr th,
.table-borderless thead tr th,
.table-borderless thead tr td,
.table-borderless tfoot tr th,
.table-borderless tfoot tr td {
    border: none;
}
</style>
    <tr>
    <td>Track 1</td>
    <td><a href="#" style="text-decoration:underline;font-weight:bold;">Listen</a></td>
    </tr>
    <tr>
    <td>Track 2</td>
    <td><a href="#" style="text-decoration:underline;font-weight:bold;">Listen</a></td>
    </tr>
    </table></dd></div>
    </dl>
    
    
    </div>
  </div>
  </div>
  
  
  </div>
  
  </div>
  
  <div class="col-md-7 col-sm-12">
  <div class="panel panel-default">
    <div class="panel-body">
  <div class="row">
  <div class="col-sm-4">
  <h3 style="margin-top: 0px;">Artist Name</h3>
  <p>This is a text description of the artist.This is a text description of the artist.This is a text description of the artist. Text Description of... </p>
  
  
  </div>
   <div class="col-sm-4 ">
   <img src="images/olDonyoLodge-(4).jpg" class="img-responsive img-thumbnail" />
   </div>
    <div class="col-sm-4">
  <form>
  <div class="form-group">
<select  class="form-control" name="album titles" multiple size="7">
  <option value="volvo">Album Title 1</option>
  <option value="saab">Album Title 2</option>
  <option value="opel">Album Title 3</option>
 </select>
  </div>
<div class="form-group radio">
  <label class="control-label">
    <input type="radio" checked>
    CD
  </label>
</div>
<div class="form-group radio">
  <label class="control-label">
    <input type="radio" >
    Tape
  </label>
</div>
<div class="form-group radio">
  <label class="control-label">
    <input type="radio" >
    LP
  </label>
</div>
<div class="form-group">
  <label class="control-label">
Price : $16.99
  </label>
</div>
<div class="form-group">
        
            <button type="submit" class="btn btn-primary">Add to Cart</button>
  
    </div>
  </form>
 
  
  </div>
  
  
  
  </div>
  <div class="row">
  <div class="col-sm-12">
  <form>
  <div class="form-group checkbox">

  <label class="control-label">
    <input type="checkbox" value="" checked>
    Send me updates on this artist.
  </label>

    </div>
  </form>
  </div>
  
  </div>
  </div>
  
  </div>
  
  </div>       
</div>

<?php include("includes/footer.php"); ?>
</div>
</body>
</html>
