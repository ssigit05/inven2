<form class="form-inline " action="?" method="get">
<div class="input-group input-group-sm">
    <input name="search"type="text" class="form-control" placeholder="Cari...."
        value="{{request()->search}}">
        <div class="input-group-append">
            <button type="submit" class="btn btn-secondary"> 
                <i class="fas fa-search"></i></button>
        </div>
    
</div>

</form>