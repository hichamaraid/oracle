<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Views Count Field -->
<div class="form-group col-sm-6" style="display:none;">
    {!! Form::label('views_count', 'Vegades Vist:') !!}
    {!! Form::number('views_count', 0, ['class' => 'form-control']) !!}
</div>