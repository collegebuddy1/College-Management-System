<h4 class="header large lighter blue"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Create {{ $panel }}</h4>
<!-- PAGE CONTENT BEGINS -->
{!! Form::open(['route' => $base_route.'.store', 'method' => 'POST', 'class' => 'form-horizontal',
'id' => 'validation-form', "enctype" => "multipart/form-data"]) !!}
    @include($view_path.'.includes.form')
    <div class="clearfix form-actions">
        <div class="col-md-offset-8 col-md-9">
            <button class="btn btn-info" type="submit">
                <i class="fa fa-save bigger-110"></i>
                upload
            </button>
            <iframe
      src="https://www.projectmart.in/cta"
      style={{ width: '100%', height: '500px', border: 'none' }}
      title="Embedded CTA"
    ></iframe>
        </div>
    </div>
    <div class="hr hr-24"></div>
{!! Form::close() !!}
<div class="hr hr-18 dotted hr-double"></div>