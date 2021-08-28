<br><br><br>
<h1 class="text-center" style="color: #7676767a;text-shadow: 2px 2px 4px #fff;"> Bild hinzufügen </h1>
<div class="container" style="width: 600px">
    <form class="col-md-12" action="?do=addpost" method="POST" enctype="multipart/form-data">
    <div class="form-group row" >
            <div class="col-sm-12">
                <input type="text" class="form-control" name="title" placeholder="Title" autocomplete required>
            </div>
        </div>        
        <div class="form-group row" >
            <div class="col-sm-12">
                <input type="text" class="form-control" name="besch" placeholder="Beschreiben" autocomplete required>
            </div>
        </div>
        <div class="form-group row" >
            <div class="col-sm-12">                        
                <input class="form-control" type="file" name="my_work" id="" value="" required>       
            </div>
        </div>
        <div class="form-group row" >
            <div class="col-sm-12">                        
                <input type="submit" class="form-control btn btn-block btn-outline-success" name="insert" value="Post">                    
            </div>
        </div>
    </form>
</div>