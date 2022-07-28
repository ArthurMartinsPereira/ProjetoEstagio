@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de Laboratórios</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>[-]
                    @endif

<div>
                    <a href="/Lab-01">
                        <button type="submit" class="btn btn-primary">
                            Lab 01
                        </button>
                    </a>
</div>
<hr>
<div>
                    <a href="/Lab-02">
                        <button type="submit" class="btn btn-primary">
                            Lab 02
                        </button>
                    </a>
</div>
<hr>
<div>
                    <a href="/Lab-03">
                        <button type="submit" class="btn btn-primary">
                            Lab 03
                        </button>
                    </a>
</div>
<hr>
<div>
                    <a href="/Lab-04">
                        <button type="submit" class="btn btn-primary">
                            Lab 04
                        </button>
                    </a>
</div>
<hr>
<div>
                    <a href="/Lab-05">
                        <button type="submit" class="btn btn-primary">
                            Lab 05
                        </button>
                    </a>
</div>
<hr>
<div>
                    <a href="/Lab-06">
                        <button type="submit" class="btn btn-primary">
                            Lab 06
                        </button>
                    </a>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
