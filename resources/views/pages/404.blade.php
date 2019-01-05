@extends('layouts.master')
@section('content')
<h1 class="section-header">
            <div>404</div>
          </h1>
<div class="container mt-5">
        <div class="page-error">
          <div class="page-inner">
            <h1>404</h1>
            <div class="page-description">
              The page you were looking for could not be found.
            </div>
            <div class="page-search">
              <form>
                <div class="form-group floating-addon">                 
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">                          
                        <i class="ion ion-search"></i>
                      </div>
                    </div>
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                      <button class="btn btn-primary">
                        Search
                      </button>
                    </div>
                  </div>
                </div>
              </form>
              <div class="mt-3">
                <a href="index.html">Back to Home</a>
              </div>
            </div>
          </div>
        </div>
        <div class="simple-footer mt-5">
          Copyright &copy; Stisla 2018
        </div>
      </div>
@endsection