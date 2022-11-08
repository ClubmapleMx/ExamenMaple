@extends('layouts.app')

<style>
    .sorting_1, .odd, .even, td{background-color: rgb(255, 255, 255) !important; box-shadow: none !important;}
    tr, th {
    border: #efefef !important;
}
</style>

@section('content')
<div class="container bg-white p-2 rounded">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="table-responsive table-responsive-sm">
                <table id="booksTable" class="display  table table-hover rounded" style="width:100%">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Title</th>
                            <th scope="col">category</th>
                            <th scope="col">Author</th>
                            <th scope="col">Realease date</th>
                            <th scope="col">Publish date</th>
                        </tr>
                    </thead>
            
                    
                </table>
            </div>
        </div>
    </div>
</div>


<script>

// api call
$(document).ready(function () {
    $('#booksTable').DataTable({
        "ajax": "{{route('api.books')}}", // my name api
        "columns":[
            {data: 'id'},
            {data: 'title'},
            {data: 'category'},
            {data: 'author'},
            {data: 'realease_date'},
            {data: 'publish_date'}
        ]
    });
});
</script>
@endsection
