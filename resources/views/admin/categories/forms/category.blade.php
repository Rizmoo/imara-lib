<input type="hidden" name="type" value="category">

    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!!  Form::text('title',null, array('class' => 'form-control','placeholder'=>'', 'required'))   !!}
    </div>


    <div class="form-group">
        {!! Form::label('parent_id', 'Parent Category') !!}

        <select class="form-control" id="parent_id" name="parent_id">
            <option></option>
            @foreach($parents as $parent)
                <option  value="{{ $parent->id }}">{{ $parent->title }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::textarea('description', null, array('placeholder' => 'what its all about ','class' => 'form-control','rows'=>'5', 'required')) !!}
    </div>
