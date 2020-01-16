
{!! Form::Open(['url' => 'sendmail']) !!}

<div class="col_half">
   {!! Form::label('name', 'Name: ' ) !!}
   {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
</div>

<div class="col_half col_last">
   {!! Form::label('email', 'E-Mail: ' ) !!}
   {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
</div>

<div class="clear"></div>

<div class="col_full col_last">
   {!! Form::label('subject', 'Subject: ' ) !!}
   {!! Form::text('subject', null, ['class' => 'form-control', 'required']) !!}
</div>

<div class="clear"></div>

<div class="col_full">
    {!! Form::label('bodymessage', 'Message: ' ) !!}
    {!! Form::textarea('bodymessage', null, ['class' => 'form-control', 'required', 'size' => '30x6']) !!}
</div>


<div class="col_full">
     {!! Form::submit('Send') !!}
</div>
{!! Form::close() !!}     