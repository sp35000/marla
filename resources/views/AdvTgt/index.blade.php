@extends('Layouts.App')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <br/><br/>
                <h2>Marla CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="/advtgt/create" title="Add Target"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p></p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>operation</th>
            <th>id</th>
            <th>URL</th>
            <th>Texto</th>
        </tr>
        @foreach ($advtgt as $n)
            <tr>
            <td>
                    <form action="/advtgt/delete" method="POST">
                    <input type = "hidden" name="id" value="{{ $n->id }}">
<!--
                        <a href="show/{{ $n->id }}" " title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>
-->
                        <a href="/advtgt/edit/{{ $n->id }}" title="edit">
                            <i class="fas fa-edit  fa-lg"></i>
                        </a>
                        @csrf
                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                    </form>
                </td>
            <td>{{ $n->id }} </td>
            <td>{{ $n->url }} </td>
            <td>{{ $n->advtext }} </td>
            </tr>
        @endforeach
    </table>


@endsection
