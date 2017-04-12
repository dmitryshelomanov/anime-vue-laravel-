<div class="container-fluid">
    <div class="row">
        <div class="col-lg-1 col-sm-1 col-md-1 clearfix">
             <i class="fa fa-list fa-2x list" id="open"></i>
        </div>
        <div class="col-lg-9 col-sm-9 col-md-9 clearfix">
            <form action="{{ route('search') }}" method="get">
                <div class="col-lg-6 col-sm-6 col-md-6 p-none">
                    <input type="text" class="form-control" name="search">
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 p-none">
                    <button type="submin" class="material-btn b-default ">
                        <i class="fa fa-search fw"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="col-xs-6 col-sm-2 col-md-2 text-left">
            <form action="/exit" method="post">
                {{ csrf_field() }}
                <button type="submin" class="material-btn b-default ">
                    <i class="fa fa-power-off fw"></i>
                </button>
            </form>
        </div>
    </div>
</div>