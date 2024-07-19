<div class="row">
    <div style="display: flex" class="col-sm-12 col-md-6">
        <div class="dataTables_length" id="dataTable_length">
            <label>Show
                <select name="dataTable_length" aria-controls="dataTable"
                    class="custom-select custom-select-sm form-control form-control-sm">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select> entries</label>
        </div>
        <a class="btn btn-primary " style="margin-left: 10px;
        height: 30px;
        margin-top: 24px;"
            href="{{ $a }}">
            create</a>
    </div>


    <div style="display: flex; justify-content: end;" class="col-sm-12 col-md-6">
        <div id="dataTable_filter" class="dataTables_filter">
            <form action="" method="GET" style="display: grid; grid-template-columns: 60% 40%; gap:10px;">
                <div>
                    Search:
                    <input type="search" class="form-control form-control-sm" name="key" placeholder=""
                        aria-controls="dataTable">
                </div>
                <input style="width: 80px; height: 30px; margin-top: 24px;" type="submit" value="Tìm kiếm">
            </form>
        </div>
    </div>
</div>
